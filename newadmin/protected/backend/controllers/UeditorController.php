<?php
class UeditorController extends Controller
{

  function actionUploadPic()
  {
      $config = array(
        "uploadPath" => "images/uploads/attachment/".date("Ym").'/' ,
        "fileType" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp" ) , //文件允许格式
        "fileSize" => 2048 //文件大小限制，单位KB
      );
      $oriName = htmlspecialchars( $_POST[ 'fileName' ] , ENT_QUOTES );
      //上传图片框中的描述表单名称，
      $title = htmlspecialchars( $_POST[ 'pictitle' ] , ENT_QUOTES );
      //文件句柄
      $file = $_FILES[ "upfile" ];
      //文件上传状态,当成功时返回SUCCESS，其余值将直接返回对应字符窜并显示在图片预览框，同时可以在前端页面通过回调函数获取对应字符窜
      $state = "SUCCESS";
      //重命名后的文件名
      $fileName = "";
      //保存路径
      $path = $config[ 'uploadPath' ];
      if ( !file_exists( $path ) ) {
        mkdir( "$path" , 0777 );
      }
      //格式验证
      $current_type = strtolower( strrchr( $file[ "name" ] , '.' ) );
      if ( !in_array( $current_type , $config[ 'fileType' ] ) || false == getimagesize( $file[ "tmp_name" ] ) ) {
        $state = "不允许的图片格式";
      }
      //大小验证
      $file_size = 1024 * $config[ 'fileSize' ];
      if ( $file[ "size" ] > $file_size ) {
        $state = "图片大小超出限制";
      }
      //保存图片
      if ( $state == "SUCCESS" ) {
        $tmp_file = $file[ "name" ];
        $fileName = $path . rand( 1 , 10000 ) . time() . strrchr( $tmp_file , '.' );
        $result = move_uploaded_file( $file[ "tmp_name" ] , $fileName );
        if ( !$result ) {
          $state = "未知错误";
        }
      }
      //向浏览器返回数据json数据
      /**
       * 返回数据格式
       * {
       *   'url'      :'a.jpg',   //保存后的文件路径
       *   'title'    :'hello',   //文件描述，对图片来说在前端会添加到title属性上
       *   'original' :'b.jpg',   //原始文件名
       *   'state'    :'SUCCESS'  //上传状态，成功时返回SUCCESS,其他任何值将原样返回至图片上传框中
       * }
       */
      
      $fileName =  Yii::app()->getRequest()->getHostInfo().'/travel/'.$fileName;
      echo "{'url':'" . $fileName . "','title':'" . $title . "','original':'" . $oriName . "','state':'" . $state . "'}";

      Yii::app()->end();
  }

  function actionImgManager()
  {
    error_reporting(E_ERROR|E_WARNING);
    $path = 'images/uploads/attachment'; //最好使用缩略图地址
    $action = htmlspecialchars($_POST["action"]);
    if($action=="get"){
      $files = $this->_getfiles($path);
      if(!$files) return;
      $str = "";
      natsort($files);
      $files = array_reverse($files);
      foreach ($files as $file) {
        $str .= $file."ue_separate_ue";
      }
      echo $str;
    }
    Yii::app()->end();
  }

  protected function _getfiles($path, &$files = array()){
    if (!is_dir($path)) return;
    $handle = opendir($path);
    while (false !== ($file = readdir($handle))) {
      if ($file != '.' && $file != '..') {
        $path2 = $path . '/' . $file;
        if (is_dir($path2)) {
          $this->_getfiles($path2, $files);
        } else {
          if (preg_match("/\.(gif|jpeg|jpg|png|bmp)$/i", $file)) {
            $files[] = $path2;
          }
        }
      }
    }
    return $files;
  }

}