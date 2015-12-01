<div id="guide">
    <div class="title"><img src="/images/adoption/guide1.jpg" alt="" /></div>
    <div class="guidecont">
        <ul>
            <?php foreach(AdoptionContent::$content_category as $cat_id => $category_name):?>
            <?php if($cat_id > 5):?>
            <li class="bigdq"><?php echo $category_name;?></li>
            <li style="display:none" id="adoption_left_category_<?php echo $cat_id;?>">
                <ol>
                  <?php foreach((array)$adoptionListArticles[$cat_id] as $v):?>
                   <li>
                     <a href="<?php echo Yii::app()->createUrl("adoption/adoptionList",array('title'=>SiteUtils::stringURLSafe($v->title), 'id'=>$v->id));?>"><?php echo $v->title;?></a>
                   </li>
                  <?php endforeach;?>
                </ol>
            </li>
            <?php endif;?>
            <?php endforeach;?>
        </ul>
    </div>
</div>