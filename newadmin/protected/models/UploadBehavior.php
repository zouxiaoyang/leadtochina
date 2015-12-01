<?php
/**
 * UploadBehavior class file.
 * @author Fang Lin <fanglin108@gmail.com>
 * @copyright Copyright &copy; 2008-2011 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

class UploadBehavior extends CActiveRecordBehavior
{
  public $attribute = '';
  public $uploadPath = '';

    // Allowed image types
  public static $allowed_types = array
  (
    IMAGETYPE_GIF => 'gif',
    IMAGETYPE_JPEG => 'jpg',
    IMAGETYPE_PNG => 'png',
    IMAGETYPE_TIFF_II => 'tiff',
    IMAGETYPE_TIFF_MM => 'tiff',
  );

  function __construct(){
  }

  public function beforeSave($event)
  {
    $filePath = date('Ym').'/';
    $fullPath = str_replace('//', '/', $this->uploadPath.'/'.$filePath);
    if(!is_dir($fullPath)){
      mkdir($fullPath, 0755,true);
    }
    $model = $this->getOwner();
    $file = CUploadedFile::getInstance($model, 'image');

    if($file){
      $fileName = uniqid().'.'.$file->extensionName;
      $file->saveAs($fullPath.$fileName);

      $image_info = getimagesize($fullPath.$fileName);
      if(self::$allowed_types[$image_info[2]]){
        $this->getOwner()->{$this->attribute} = $filePath.$fileName;
        
      }else{
        Yii::app()->user->setFlash('UploadImageError','图片上传不成功，必须是jpg、gif或png格式。');
        unlink($fullPath.$fileName);

      }
      
    }
  }
}
