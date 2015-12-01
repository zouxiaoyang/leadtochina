    <ul>
        <li class="pic3"><a href="<?php echo $data->url();?>"><img src="<?php echo $data->filedir;?>/thumb/thumb_<?php echo $data->pic;?>" alt="" /></a></li>
        <li class="pic-right">
            <ol>
                <li class="cont-tour"><a href="<?php echo $data->url();?>"><?php echo $data->name;?></a></li>
                <li class="destin"><b>Destination:</b> <span><?php echo $data->route;?></span><br>
                                  <b>Included:</b> <?php echo $data->tour_intro;?>
                                  <b>Highlights:</b>
                                  <?php echo $data->getHightLights();?>
                </li>
             </ol>
          </li>
          <li class="pic-review">
              <ol>
                  <li>[Reviews <a href="<?php echo $data->url();?>"><?php echo $data->reviews;?></a>]</li>
                  <li>From <b>US$<?php echo $data->price;?></b></li>
                  <li class="itinerary"><a href="<?php echo $data->url();?>">Itinerary Details</a></li>
              </ol>
          </li>
    </ul>
