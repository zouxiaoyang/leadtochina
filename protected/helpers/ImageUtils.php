<?php
/**
 * ImageUtils helper class.
 *
 * @author     Fang Lin
 * @copyright  (c) 2007-2008
 */
class ImageUtils {

  /**
   * get thumbnail url of $img
   *
   * @param string $img
   * @param int $boundary
   */
  public static function getThumbnail($img, $boundary, $fill = 0)
  {

    $k = $img.$boundary;
    if($v = Yii::app()->cache->get($k)){
      return $v;
    }

    if(!is_file($img)){
      return '';
    }
    $imgPath = dirname($img);
    $imgName = basename($img);
    $thumbName = ".".substr($imgName,0,strrpos($imgName,"."))."t".$boundary.".jpg";
    $thumbFile = $imgPath.'/'.$thumbName;
    if(is_file($thumbFile)){
      $url = self::getImgUrl().$thumbFile;
      Yii::app()->cache->set($k, $url, 7200);
      return $url;
    }

    $width = $height = null;
    self::setWidthAndHeight($boundary,$width,$height);
    $image = Yii::app()->image->load($img);
    $image->resize($width, $height);
    $image->save($thumbFile);
    $url = self::getImgUrl().$thumbFile;
    Yii::app()->cache->set($k, $url, 7200);
    return $url;
  }

  public static function getImgUrl()
  {
    return Yii::app()->request->baseUrl.'/';
  }

  public static function setWidthAndHeight($boundary, &$width, &$height)
  {
    if (self::isSquare($boundary)) {
      $width = $height = $boundary;
    } else {
      list($width, $height) = explode("x", $boundary);
    }
  }

  public static function isSquare($boundary)
  {
    return (strpos($boundary, 'x') === false);
  }
}