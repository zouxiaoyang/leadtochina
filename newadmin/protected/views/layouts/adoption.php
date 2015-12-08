<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
  <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.autocomplete.min.js');?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/aoptees.css');?>
  <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/jquery.autocomplete.css');?>
<style>
.footnew{ width:961px; overflow:hidden}
.footnew_lef{ width:751px; float:left;}
.footnew_lef p{  color:#fff;font-family:Verdana, Geneva, sans-serif; line-height:18px; margin-top:10px;}
.footnew_txt1{ color:#fff; font-size:12px;}
.footnew_txt1 a{ color:#fff; font-size:12px; text-decoration:underline; margin:0px 4px;}
.footnew_txt1 a:hover{  color:#ccc; text-decoration:underline}
.footnew_txt2{ font-size:11px;}
.footnew_txt2 span{ padding-left:4px;}
.footnew_rig{ width:210px; float:right;}
.copynew{ border-top:1px #ccc solid; width:100%; margin:10px 0 0 4px; padding-top:10px; font-size:10px; color:#fff;}
</style>
</head>
<body id="bd" class="fs3"> 
<div id="header">
	<div class="head">
		 <div class="logo"><a href="/"><img alt="Tours of China" src="/new/images/logo.png"></a></div>
         <div class="logorightindex"><a target="_blank" href="http://messenger.providesupport.com/messenger/travelthing.html"><img alt="" src="/images/newindex/chat.jpg"></a></div>
         <div class="clear"></div>
         <div class="menulist">
          <ul>
           <li style="padding-left:50px;"><a href="/">Home</a></li>
           <li><a href="<?php echo Yii::app()->createUrl('adoption');?>">China Heritage Tours<span></span></a>
            <ul>
             <li><a href="/travel/adoption/privateTours">Private Tours</a></li>
             <li><a href="/travel/adoption/beijingXianGuilinItinerary">2015 Winter Promotion</a></li>
             <li><a href="/travel/adoption/beijingXianChengduItinerary">2016 Summer Promotion</a></li>
             <li><a href="/travel/adoption-customize">Customize Service</a></li>
            </ul>
           </li>
		   <li><a href="/travel/adoption/orphanageVisit">Orphanage Visit</a>
           <!--<li><a href="/travel/adoption/orphanageVisit">Orphanage Visit<span></span></a>
             <ul>
             <li><a href="/travel/adoption/china-orphange-trips">Small Group</a><p class="ad_newimg"><img src="/images/adoptionNew/01_03.png"></p></li> 
             <li><a href="/travel/adoption/orphanageVisit">Private Tour</a></li>
            </ul> --> 
           </li>
           <li><a href="">Return-trip Guide<span></span></a>
            <ul>
             <li><a href="/travel/adoption-guide/doc-required-for-orphanages-visit-177">Doc for SWI Visit</a></li>
             <li><a href="/travel/adoption-guide/tips-for-a-homeland-orphanage-visit-172">Tips for SWI Visit</a></li>
             <li><a href="/travel/adoption/orphanageList">List of China SWI</a></li>
             <li><a href="/travel/adoption/storyIndex">Latest Travel Stories</a></li>
            </ul>
           </li>
           <li><a href="/about-us/">About Us<span></span></a>
            <ul>
             <li><a href="<?php echo Yii::app()->createUrl('adoption/whatMakesUsUnique');?>">What Makes Us Unique</a></li>
             <li><a href="http://www.tripadvisor.com/Attraction_Review-g297403-d3824010-Reviews-Lead_to_China_Tours_Beijing_Private_One_day_Tour-Hefei_Anhui.html">Reviews on TripAdvisor</a></li>
             <li><a href="/contact-us/">Contact Us</a></li>
            </ul>
           </li>
           <li style="background:none;"><a href="/images/lvxingxchc.PDF">Download Brochure</a></li>
          </ul>
</div>
<div class="banner">
   <div class="bann" style="">
    <?php $province = Scenery::getProvinceList();?>
      <select name="province" id="province">
         <option selected="selected">-- SWI Province --</option>
         <?php foreach($province as $k=>$v):?>
            <option value="<?php echo $k;?>"><?php echo $v;?></option>
         <?php endforeach;?>
      </select>
      <select name="city" id="city">
         <option selected="selected">-- SWI City --</option>
         
      </select>
      <input name="orphanage_address" id="orphanage_address" type="text" value="SWI Name" />
      <div>
        <ul id="orphanage_list" style="display:none">
          
        </ul>
      </div>
      <input type="hidden" name="orphanage_address_id" id="orphanage_address_id" />
      <img src="/images/adoptionNew/search.png" onclick="_adoption.search()" />
   </div>
</div>
    </div>
</div>
<div class="clear"></div>
<div id="content"><?php echo $content; ?></div>
<div class="clear"></div>
<?php $this->renderPartial('//layouts/footer');?>

<script type="text/javascript">
$(function(){
    $("#province").change(function(){
        _adoption.provinceid = this.value;
        _adoption.getCity(this.value);
        _adoption.getOrphanageAddress();
        $("#orphanage_list").hide();
    })

    $("#city").change(function(){
        _adoption.cityid = this.value;
        _adoption.getOrphanageAddress();
        $("#orphanage_list").hide();
    })

    $("#orphanage_address").bind("click",function(){
      //if(this.value == "SWI Name") this.value = "";
      if(this.value != "") this.value = "";
      if(this.value=="") {
       if($("#orphanage_list").find("li").length > 0) $("#orphanage_list").toggle(); 
      }else{ 
        $("#orphanage_list").hide();
      }
    })


    $("#orphanage_address").bind("blur",function(){
      if(this.value==""){
        $("#orphanage_address").val("SWI Name");  
      }
    })

    $("#orphanage_address").bind("keyup",function(){
      if(this.value=="") {
        if($("#orphanage_list").find("li").length > 0) $("#orphanage_list").toggle(); 
      }else{
        $("#orphanage_list").hide();
      } 
    })

    $("#orphanage_list li").live("click",function(){
      $("#orphanage_address").val($(this).html());
      $("#orphanage_address_id").val($(this).attr("value"));
      $("#orphanage_list").hide();
    })
    
   

    $("#orphanage_address").autocomplete("<?php echo Yii::app()->createUrl('adoption/searchOrphanageAddress');?>", {
      width: 260,
      selectFirst: false,
      //minChars: 0,
      cacheLength: 0,
      extraParams: {provinceid:function(){return $('#province').val();}, cityid:function(){return $('#city').val()}},  
    });
    $("#orphanage_address").result(function(event, data, formatted) {
      
      if (data){
        $("#orphanage_address_id").val(data[1]);
      }
       $("#orphanage_address").flushCache();
        
    });

})
  

  var _adoption = (function(){
      
      return {
        provinceid:0,
        cityid:0,
        getCity:function(provinceid){
              $.get('<?php echo Yii::app()->createUrl('adoption/getCity');?>',{provinceid:provinceid},function(data){
                var data = eval(data);
                var options = '<option value="0">---SWI City---</option>';
                var select = '';
                for (i in data){
                  options += '<option value="'+data[i].id+'" '+'>'+data[i].name+'</option>';
                }
                $("#city").html(options);
              })
          },
          getOrphanageAddress:function(){
             $.get('<?php echo Yii::app()->createUrl('adoption/searchOrphanageAddress');?>',{format:1,provinceid:_adoption.provinceid,cityid:_adoption.cityid},function(data){
                 var data = eval(data);
                 var li = "";
                  var select = '';
                  for (i in data){
                    li += '<li value="'+data[i].id+'" '+'>'+data[i].orphanage_name+'</li>';
                  }
                  $("#orphanage_list").html(li);
              })
          },
          search:function(){
            var orphanage_id = $("#orphanage_address_id").val();
            var url = "<?php echo Yii::app()->createUrl('adoption/orphanageTravelGuide');?>";
            if(orphanage_id){
              location.href = url+"?id="+orphanage_id;
            }
          }

      }   
  }());
</script>

</body>
</html>




