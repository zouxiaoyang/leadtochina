   
   <ul <?php if($index == 0):?> class="ff" <?php endif;?>>
      <li><?php echo $data->question;?><br />
          Asked by <span><?php echo $data->username;?></span> (<?php echo date('M.d, Y', strtotime($data->time));?>)</li>
      <li class="advisor"><span>Trip Advisor</span> (<?php echo date('M.d, Y', strtotime($data->time));?>) replied: <br />
          <?php echo $data->reply;?> 
      </li>
   </ul>