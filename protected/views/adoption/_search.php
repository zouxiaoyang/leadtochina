<div style="" class="adoption-search">
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
      <a  href="#" onclick="_adoption.search()" class="btn-search" >search</a>
   </div>
</div>
<div class="web_clear"></div>
<script src="http://cdn.bootcss.com/jquery-browser/0.0.8/jquery.browser.min.js"></script>
<script type="text/javascript" src="/js/jquery.autocomplete.min.js"></script>

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

    $("#orphanage_list").on("click","li",function(){ // 利用on 替代 live;
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
            var url = "/travel/adoption/OrphanageTravelGuide";
            if(orphanage_id){
              location.href = url+"/"+orphanage_id;
            }else{
				location.href = '/travel/adoption/noSearchResults';
			}
          }

      }   
  }());
</script>