<!--  quest-one start  -->
       <div class="quest-one">
           <div class="direction"><img src="/images/view/question1.png" alt="" /></div>
           <!--  describe start  -->
           <div class="describe">
            <p><?php echo $data->content;?><br />
Asked by <span><?php echo $data->username;?></span> (<?php $date=date('M.d, Y', $data->dateline); echo $date;?>)</p>
           </div>
           <!--  describe end  -->
           <?php $replies = Question::model()->findAllByAttributes(array('postid'=>$data->id));?>
           <?php foreach($replies as $v):?>
             <!--  ask start  -->
             <div class="ask"><p><span><?php echo $v->username;?></span> (<?php echo $date;?>) replied: <br />
                  <?php echo $v->content;?></p>
             </div>
             <!--  ask end  -->
           <?php endforeach;?>
       </div>
<!--  quest-one end  -->