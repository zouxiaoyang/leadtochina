<ul>
           <li class="name"><a href="<?php echo Yii::app()->createUrl('hotel/view', array('hotelid'=>$data->id,'hotelname'=>SiteUtils::stringURLSafe($data->name)));?>"><?php echo $data->name;?></a>
                       <strong>Star:</strong> <?php if($data->hotel_grade==136):?>3<?php elseif($data->hotel_grade==137):?>4<?php elseif($data->hotel_grade==138):?>5<?php endif;?> Star;<br />
                       <strong>Location:</strong> <?php echo $data->districtName->name;?><br />
                       <strong>Address:</strong> <?php echo $data->hotel_addr;?><br />
                      <?php echo substr($data->description,0,250);?>...
           </li>
           <li>
              <ol>
                 <li class="star<?php if($data->hotel_grade==136):?>3<?php elseif($data->hotel_grade==137):?>4<?php elseif($data->hotel_grade==138):?>5<?php endif;?>"></li>
                 <li class="pic"><a href="<?php echo Yii::app()->createUrl('hotel/view', array('hotelid'=>$data->id,'hotelname'=>SiteUtils::stringURLSafe($data->name)));?>"><img src="<?php echo ImageUtils::getThumbnail(JosCosHotel::UPLOAD_PATH . $data->ufile, '181x138');?>" alt="<?php echo $data->name;?>" /></a></li>
              </ol>
           </li>
        <br/>
        </ul>