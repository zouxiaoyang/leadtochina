
<div class="cru_view_cont1_right2_foot1">
 <div style="width:500px">
 <p class="cru_ques1">Q:<?php echo $data->username;?> <span> (<?php echo date('M.d, Y', $data['dateline']);?>)</span></p>
 <p class="cru_ques2"><?php echo $data->content;?></p>
 </div>
 <div class="cru_ques3">
    <?php $replies = Question::model()->findAllByAttributes(array('postid'=>$data->id));?>
    <?php foreach($replies as $v):?>
    <p class="cru_ques3a"><span><?php echo $v->content;?></span> </p><p class="cru_ques3b"></p><p class="cru_ques3c"></p>
    <?php endforeach;?>
 </div>
</div>
<div class="cru_line"></div>