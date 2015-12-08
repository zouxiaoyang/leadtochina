<ul <?php if($index<3):?> class="ff" <?php endif;?>>
  <li><?php echo $data->content;?><br />
      Asked by <span><?php echo $data->username;?></span> (<?php echo date('M.d, Y', $data['dateline']);?>)</li>
  <li class="advisor"><span>Trip Advisor</span> (<?php echo date('M.d, Y', strtotime($data['dateline']));?>) replied: <br />
  <?php $replies = Question::model()->findAllByAttributes(array('postid'=>$data->id));?>
    <?php foreach($replies as $v):?>
      <?php echo $v->content;?> 
    <?php endforeach;?>
  </li>
</ul>