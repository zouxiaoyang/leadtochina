<?php
class AdoptionLeftGuide extends CWidget
{
    public function init()
    {
      $contents = AdoptionContent::model()->findAll(array(
          'condition'=>'cat_id in(6,7,8)',
      ));
      foreach($contents as $v){
        $adoptionListArticles[$v->cat_id][] = $v;
      }
      
      $this->render("adoptionLeftGuide", array(
          "adoptionListArticles" => $adoptionListArticles,
      ));
    }
 
    public function run()
    {

    }
}