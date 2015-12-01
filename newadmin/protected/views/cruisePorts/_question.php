<div class="tabnote2">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td width="36" valign="top" align="left"><img src="/images/ports/bestindex_09_03.jpg"></td>
            <td valign="top"><span><?php echo $data->content;?></span> 
            <span>
              <table width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody>
                <tr>
                  <td width="44%" class="title2">Asked by <strong><?php echo $data->username;?></strong> (<?php echo date('M.d, Y', $data['dateline']);?>)</td>
                </tr>
                </tbody>
              </table>
              </span>
              <div class="ask">
              <?php $replies = Question::model()->findAllByAttributes(array('postid'=>$data->id));?>
              <?php foreach($replies as $v):?>
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr>
                    <td valign="top"><img src="/images/ports/bestindex_11_11.jpg"></td>
                    <td style="padding:0px 8px 8px 8px;"><strong><?php echo $v->username;?></strong> (<?php echo date('M.d, Y', $v->dateline);?>) replied: <br>
                    	<?php echo $v->content;?>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <?php endforeach;?>
              </div>
            </td>
          </tr>
          </tbody>
        </table>
      </div>