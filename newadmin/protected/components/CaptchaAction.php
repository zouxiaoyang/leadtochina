<?php
class CaptchaAction extends CCaptchaAction
{
   
   public $backColor = 0xFFFFFF;
   public $width = 70;
   public $height = 30;
   public $minLength = 4;
   public $maxLength = 4;

  function run(){
    parent::run();
  }
}
