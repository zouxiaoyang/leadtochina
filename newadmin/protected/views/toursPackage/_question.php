             <div class="tabnote2">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%">
                       <tbody>
                              <tr>
                                 <td align="left" valign="top" width="36"><img src="/images/newhomepage/bestindex_09_03.jpg"></td>
                                 <td valign="top"><span><?php echo $data->content;?></span> 
                                <span>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                       <tbody>
                                           <tr>
                                               <td class="title2" width="30%">Asked by <strong><?php echo $data->username;?></strong> (<?php echo date('M.d, Y', $data->dateline);?>)</td>
                                          </tr>
                                       </tbody>
                                   </table>
                                 </span>
                                 <div class="ask">
                                      <?php $replies = Question::model()->findAllByAttributes(array('postid'=>$data->id));?>
                                      <?php foreach($replies as $v):?>
                                      <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                          <tbody>
                                             <tr>
                                                <td valign="top"><img src="/images/newhomepage/bestindex_11_11.jpg"></td>
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