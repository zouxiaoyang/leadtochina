<?php

/***********************************************************

 * 

 * 文件上传组件,支持多文件上传

 * 

 * @author 

 * @lastmodify 2009-05-25

 * @version 0.4

 **********************************************************/



define('UPLOAD_ERR_MOVE_FAILED', 10);

define('UPLOAD_ERR_FILE_EXISTS', 11);

define('UPLOAD_ERR_FILE_EXISTS_CANNT_DEL', 12);

define('UPLOAD_ERR_EXT_NOT_ALLOW', 13);

define('UPLOAD_ERR_MAX_SIZE_APP', 14);

class Upload

{

    var  $_numOfSuccess = 0;

    var  $_numOfFailed = 0 ;

    var  $_allowExt = array(

        'rar' , 'zip' , 'gz' , 'bz' , 'jpg' , 'gif' , 'png' , 'bmp'

    );

    var  $_denyExt = array(

        'php' , 'exe' , 'asp' , 'jsp'

    );

    var  $_overWrite = true;

    var  $_rename = true;

    var  $_saveDir = './';

    /**

     * 默认最大大小 100k

     *

     * @var int

     */

    var  $_maxSize = 4096000;

	var  $_prifname ="";

    /**

     * 检查上传文件类型的模式

     * allow:只有在$_allowExt属性中列出的文件类型才能被上传, 安全

     * dene:只禁止$_denyExt属性中列出的文件类型, 有风险

     *

     * @var string

     */

   var   $_mode = 'allow';

    /**

     * 成功上传的文件列表,以原文件名为索引

     *

     * @var array

     */

    var  $_fileList = array();

    var  $_error = array();

    public function __construct ($saveDir,$priname, $mode = 'allow',$from=null)

    {

        if (file_exists($saveDir))

        {

            $saveDir = str_replace('\\', '/', $saveDir);

            if (! mb_strpos($saveDir, '/', mb_strlen($saveDir) - 1))

            {

                $saveDir .= '/';

            }

            $this->_saveDir = $saveDir;

        }

        else

        {

            if (DEBUG)

            {

                throw new Exception('目录不存在:' . $saveDir);

            }

            else

            {

                throw new Exception('目录不存在');

            }

        }

        if (! empty($mode) && in_array($mode, array('allow', 'deny')))

        {

            $this->_mode = $mode;

        }

		if(! empty($priname)){

			$this->_prifname=$priname;

		}

    }

    /**

     * 获得错误信息

     *

     * @return array

     */

    public function errorInfo ()

    {

        return $this->_error;

    }

    /**

     * 设置允许的文件类型,注意:本方法会覆盖之前的允许列表

     *

     */

    public function setAllowExt ()

    {

        $args = func_get_args();

        if (sizeof($args) > 1)

        {

            $this->_allowExt = $args;

        }

        else

        {

            if (is_string($args[0]))

            {

                $this->_allowExt = array(

                    $args[0]

                );

            }

            else if (is_array($args[0]))

            {

                $this->_allowExt = $args[0];

            }

        }

    }

    /**

     * 增加允许的文件类型

     *

     */

    public function addAllowExt ()

    {

        $args = func_get_args();

        if (sizeof($args) > 1)

        {

            foreach ($args as $value)

            {

                $this->_allowExt[] = $args;

            }

        }

        else

        {

            if (is_string($args[0]))

            {

                $this->_allowExt[] = $args[0];

            }

            else if (is_array($args[0]))

            {

                $this->_allowExt = $this->_allowExt + $args[0];

            }

        }

    }

    /**

     * 增加屏蔽的文件类型

     *

     */

    public function addDenyExt ()

    {

        $args = func_get_args();

        if (sizeof($args) > 1)

        {

            foreach ($args as $value)

            {

                $this->_denyExt[] = $args;

            }

        }

        else

        {

            if (is_string($args[0]))

            {

                $this->_denyExt[] = $args[0];

            }

            else if (is_array($args[0]))

            {

                $this->_denyExt = $this->_denyExt + $args[0];

            }

        }

    }

    /**

     * 设置屏蔽的扩展文件类型

     *

     */

    public function setDenyExt ()

    {

        $args = func_get_args();

        if (sizeof($args) > 1)

        {

            $this->_denyExt = $args;

        }

        else

        {

            if (is_string($args[0]))

            {

                $this->_denyExt = array(

                    $args[0]

                );

            }

            else if (is_array($args[0]))

            {

                $this->_denyExt = $args[0];

            }

        }

    }

    /**

     * 生成一个随机文件名

     *

     * @param string $filename

     * @return string

     */

    private function _rename ($filename)

    {

        $ext = $this->_fileext($filename);

		$date=date("Ymd");

		$randstr=substr(md5(mt_rand()), 1, 5);

        return $this->_prifname.$date.$randstr. '.' . $ext;

    }

    /**

     * 上传文件

     *

     * @param mixed $file

     * @return Upload

     */

    public function run ($file)

    {

        $sourceFile = '';

        if (is_string($file))

        {

            $sourceFile = $_FILES[$file];

            if (is_array($sourceFile['name']))

            {

                $nums = sizeof($sourceFile['name']);

                for ($i = 0; $i < $nums; $i ++)

                {

                    $tmpFile = array(

                        'name' => $sourceFile['name'][$i],

                        'tmp_name' => $sourceFile['tmp_name'][$i],

                        'error' => $sourceFile['error'][$i],

                        'type' => $sourceFile['type'][$i],

                        'size' => $sourceFile['size'][$i]

                    );

                    $this->run($tmpFile);

                }

                return $this;

            }

        }

        else if (is_array($file))

        {

            if (is_string($file['name']))

            {

                $sourceFile = $file;

            }

            else

            {

                $nums = sizeof($file['name']);

                for ($i = 0; $i < $nums; $i ++)

                {

                    $tmpFile = array(

                        'name' => $file['name'][$i],

                        'tmp_name' => $file['tmp_name'][$i],

                        'error' => $file['error'][$i],

                        'type' => $file['type'][$i],

                        'size' => $file['size'][$i]

                    );

                    $this->run($tmpFile);

                }

            }

        }

        if ($sourceFile['error'] != UPLOAD_ERR_OK)

        {

            $this->_logError($sourceFile['error'], $sourceFile['name']);

        }

        else

        {

            if ($sourceFile['size'] > $this->_maxSize)

            {

                $this->_logError(UPLOAD_ERR_MAX_SIZE_APP, $sourceFile['name']);

                    return $this;

            }

            $nameNew = $this->_rename($sourceFile['name']);

            $ext = strtolower($this->_fileext($nameNew));

            if ($this->_mode == 'allow')

            {

                if (!in_array($ext, $this->_allowExt))

                {

                    $this->_logError(UPLOAD_ERR_EXT_NOT_ALLOW, $sourceFile['name']);

                    return $this;

                }

            }

            else 

            {

                if (in_array($ext, $this->_denyExt))

                {

                    $this->_logError(UPLOAD_ERR_EXT_NOT_ALLOW, $sourceFile['name']);

                    return $this;

                }

            }

            if (file_exists($this->_saveDir . $nameNew))

            {

                if ($this->_overWrite)

                {

                    if (unlink($this->_saveDir . $nameNew))

                    {

                        if (move_uploaded_file($sourceFile['tmp_name'], $this->_saveDir . $nameNew))

                        {

                            $this->_fileList = array_merge($this->_fileList, array('name' => $nameNew));

                            $this->_numOfSuccess++;

                        }

                        else

                        {

                            $this->_logError(UPLOAD_ERR_MOVE_FAILED, $sourceFile['name']);

                        }

                    }

                    else

                    {

                         $this->_logError(UPLOAD_ERR_FILE_EXISTS_CANNT_DEL, $sourceFile['name']);

                    }

                }

                else

                {

                    $this->_logError(UPLOAD_ERR_FILE_EXISTS, $sourceFile['name']);

                }

            }

			else

			{

				if (move_uploaded_file($sourceFile['tmp_name'], $this->_saveDir . $nameNew))

				{					

					$this->_fileList = array_merge($this->_fileList, array('name' => $nameNew));

					$this->_numOfSuccess++;

				}

				else

				{

					$this->_logError(UPLOAD_ERR_MOVE_FAILED, $sourceFile['name']);

				}

			}		

        }

        return $this;

    }

    

    /**

     * 是否所有文件都上传成功

     *

     * @return bool

     */

    public function isAllSuccess ()

    {

        return ($this->_numOfFailed == 0 && $this->_numOfSuccess > 0);

    }

    /**

     * 记录错误信息

     *

     * @param int $error

     * @param string $name

     */

    protected function _logError ($error, $name = null)

    {

        switch ($error)

        {

            case UPLOAD_ERR_INI_SIZE:

                $this->_error[$name] = '文件大小超过了服务器允许的最大值';

                break;

            case UPLOAD_ERR_FORM_SIZE:

                $this->_error[$name] = '上传文件的大小超过了 表单中 MAX_FILE_SIZE 选项指定的值';

                break;

            case UPLOAD_ERR_PARTIAL:

                $this->_error[$name] = '文件只有部分被上传';

                break;

            case UPLOAD_ERR_NO_FILE:

                $this->_error[$name] = '没有文件被上传';

                $this->_numOfFailed--;

                break;

            case UPLOAD_ERR_NO_TMP_DIR:

                $this->_error[$name] = '服务器出错, 找不到临时文件夹';

                break;

            case UPLOAD_ERR_CANT_WRITE:

                $this->_error[$name] = '服务器出错, 文件写入失败';

                break;

            case UPLOAD_ERR_MOVE_FAILED:

                $this->_error[$name] = '临时文件移动出错';

                break;

            case UPLOAD_ERR_FILE_EXISTS:

                $this->_error[$name] = '目标文件已存在';

                break;

            case UPLOAD_ERR_FILE_EXISTS_CANNT_DEL:

                $this->_error[$name] = '目标文件已存在,且无法删除';

                break;

            case UPLOAD_ERR_EXT_NOT_ALLOW:

                $this->_error[$name] = '不允许的文件类型';

                break;

            case UPLOAD_ERR_MAX_SIZE_APP:

                $this->_error[$name] = '文件大小超过程序设置的最大限制:'

                .formatFileSize($this->_maxSize);

                break;

            default:

                $this->_error[$name] = '未知错误';

                break;;

        }

        $this->_numOfFailed++;

    }

    public function setMaxSize($size)

    {

        $this->_maxSize = (int)$size;

    }

    /**

     * 获得文件扩展名

     *

     * @param string $filename

     * @return string

     */

    protected function _fileext ($filename)

    {

        return trim(substr(strrchr($filename, '.'), 1, 10));

    }

    /**

     * 获得已经上传成功的文件列表数组

     * 索引为原文件名

     * 值为重命名之后的文件名(如果开启重命名)

     *

     * @return array

     */

    public function getSuccessFilesList ()

    {

        return $this->_fileList;

    }

    /**

     * 设置是否重命名文件

     *

     * @param bool $flag

     * @return Upload

     */

    public function setRename ($flag = false)

    {

        $this->_rename = (bool) $flag;

        return $this;

    }

    /**

     * 设置是否覆盖已存在文件

     *

     * @param bool $flag

     * @return Upload

     */

    public function setOverwrite ($flag = false)

    {

        $this->_overWrite = (bool) $flag;

        return $this;

    }

    /**

     * 上传成功的文件个数

     *

     * @return int

     */

    public function getNumOfSuccess ()

    {

        return $this->_numOfSuccess;

    }

    /**

     * 上传失败的文件个数

     *

     * @return int

     */

    public function getNumOfFailed ()

    {

        return $this->_numOfFailed;

    }

}
