<style>
.plan {
    float: left;
    height: auto;
    margin-top: 20px;
    width: 100%;
}
.question {
    float: left;
    height: auto;
    width: 692px;
}
.questioncont {
    border: 2px solid #cecece;
    float: left;
    padding: 10px;
    width: 668px;
}
.question table {
    height: auto;
    margin: 2px auto;
    width: 100%;
}
.question table tr td {
    color: #3b3838;
    padding: 8px 0;
}
.question table tr td input {
    border: 1px solid #bcbcbc;
    height: 22px;
    line-height: 22px;
    width: 205px;
}
.question table tr td textarea {
    border: 1px solid #bcbcbc;
    height: 172px;
    padding: 2px;
    width: 662px;
}
.planright {
    float: right;
    height: auto;
    width: 200px;
}
#CDSWIDSSP{width:200px !important;}
</style>
<?php 
   Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/tulou.css'); 
   $this->setPageTitle("Fujian Tulou Tours");
?>

<div class="index">
    <div id="menu-tours"><strong>You are here:</strong> <a href="/">Home</a> <a href="<?php echo Yii::app()->createUrl('chinaTours/index');?>">China Tours</a> Fujian Tulou Tours</div>
    <div class="clear"></div>
    <div id="tulou">
       <div class="text"><h2>Fujian Tulou Tours</h2>
           <p>
           Fujian Tulou is a type of Chinese rural dwellings of the Hakka and Minnan people in the mountainous areas in southeastern Fujian. In 2008, a total of 46 Fujian Tulou sites in Nanjing and Yongding County, including Chuxi Tulou Cluster, Tianluokeng Tulou Cluster, Hekeng Tulou Cluster, Gaobei Tulou Cluster etc. have been inscribed by UNESCO as World Heritage Site.
           </p>
           <p>&nbsp;</p>
           <p>
From our below trips, you can appreciate the world heritage Fujian Tulou – Hakka Residential Earthen House based in Yongding and Nanjing, which is called the kingdom of Fujian Tulou. Meanwhile, we are offering other Fujian tours to <a href="/travel/china-search?city=Xiamen&days=&price=#result">Xiamen & Mt. Wuyishan</a> with best price. Every tour can be <a href="/travel/china-diy-tours">customized</a> to your needs. Get to know more Tulou tour guide <a href="#map">here</a>.
           </p>
       </div>
       <?php foreach($tours as $k=>$v):?>
       <div class="tulou_list">
           <div class="tulou_banner"><img alt="" src="/images/tulou/banner<?php echo $k+1;?>.jpg"></div>
           <div class="tulou_tours">
              <ul>
                 <li><a href="<?php echo $v->url();?>"><?php echo $v->name;?></a></li>
                 <li>TOUR CODE: <strong><?php echo $v->package_code;?></strong></li>
                 <li>
                    <?php echo $v->recommand_reason;?>
                 </li>
                 <li class="button"><a href="<?php echo $v->url();?>"><img alt="" src="/images/tulou/details.png"></a><a href="<?php echo $v->url();?>" style="width:170px; float:right;"><img alt="" src="/images/tulou/qoute.png"></a></li>
              </ul>
           </div>
       </div>
      <?php endforeach;?>
       
       
       
       <div class="tulou_list"><a id="map">&nbsp;</a>
           <div class="tulou_banner"><img alt="" src="/images/tulou/map.jpg"></div>
       </div>       

       <div class="plan">
          <?php $this->renderPartial('/message/_adoptionform',array(
                'model'=>$message,
          )); ?>
           
          <div class="planright">
             <script type="text/javascript" src="/travel/js/tripadvisor.js"></script>
          </div>
       </div>


    </div>
</div>

