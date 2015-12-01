<link rel="stylesheet" type="text/css" href="/travel/css/ports.css" />
<div id="menu-home"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('CruisePorts/index')?>">Cruise Ports</a> <?php echo $portInfo->cityName;?> Cruise Ports</div>
<?php $this->renderPartial('_left');?>
<div id="right-muslim">
   <div class="text">
      <h2><?php echo $portInfo->cityName;?> Cruise Ports</h2>
      <?php echo $portInfo->portIntro;?>
   </div>
   <div id="question">
            <div id="a05">
               <ul>
                   <li class="sd10" id="m10"><a style="cursor:pointer;">Questions</a></li>
               </ul>
            </div>
            <div id="c10">
		       <?php $this->widget('zii.widgets.CListView', array(
				    'dataProvider'=>$dataProvider,
				    'itemView'=>'_question',
				    'pager'=>array(
				      'cssFile'=>False,
				      'header'=>'',
				    ),
				    'template'=>"{items}\n{pager}",
				  )); ?>
      <div class="tabnote3">
        <?php $this->renderPartial('/question/_cruisePortsQuestionForm',array('questionModel'=>$cruisePortsQuestionModel, 'question_type'=>3));?>
      </div>
            </div>
            <div id="c11" style="display:none;">
                 <div id="reviews">          
                    <div id="gallery">
                           <ul>
                    	            <li class="pic-client"><a title="Review from Wayne P Hiller" rel="lightbox[suzhou]" href="#"><img src="/uploads/testimonisal/thumb/thumb_cndes20120720fe9c5.jpg"><span>I just wanted to thank you and your agency for a wonderful trip.</span><span class="virtual">Virtual Gallery</span></a></li>
                                  <li><a title="Feedback from Enrique" rel="lightbox[suzhou]" href="#"></a></li>             
          	                      <li><a title="Feedback from Enrique" rel="lightbox[suzhou]" href="#"></a></li>             
          	               </ul>
                   </div>
                </div> 
           </div>
      </div>
</div>
