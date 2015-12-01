<?php

class NewsletterController extends Controller
{
  /**
   * Lists all models.
   */
  public function actionPreview($id)
  {
    $sql = "select id,name,user_logo,sex,is_group,benifits_for_you,email from joomla.joomla254_offline_orders where id='$id'";
    $userinfo = Yii::app()->db->createCommand($sql)->queryRow();

    $sql = "select * from t_newsletter order by id desc limit 1";
    $newsletter = Yii::app()->db->createCommand($sql)->queryRow();
    
    $this->renderPartial('previewNew', array(
      'userinfo' => $userinfo,
      'newsletter' => $newsletter,
    ));
  }

}
