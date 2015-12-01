<!-- <div style="width:100%; height:auto; overflow:hidden; background:url(/images/index/festival.png) top center no-repeat; overflow:hidden; padding-top:128px;"> --><div id="faq">
<div id="faqheader">
<div id="faqlogo"><a href="/"><img src="/images/faq/logo.png" /></a></div>
<?php $this->renderPartial('//layouts/faq_header',array('price_list'=>Yii::app()->params['price_list'],'days_list'=>Yii::app()->params['days_list']));?>
</div>

<div id="faqcontent">
  <div id="faqleft">
    <div class="leftlist1">
      <div class="listcont">
        <h2>FAQ</h2>
        <ul>
          <?php foreach($faqCategory as $k=>$v):?>
              <?php ksort($v);foreach($v as $k2=>$v2):?>
                <?php if($k2 == 0):?><li class="big"><?php echo $v2;?></li>
                <?php else:?>
                <li>
                  <ol><li><?php echo CHtml::link(CHtml::encode($v2),Yii::app()->createUrl('faq/list',array('id'=>$k2,'title'=>$v2)));?></li></ol>
                </li>
                <?php endif;?>
              <?php endforeach;?>
      
          <?php endforeach;?>

        </ul>
      </div>
    </div>
  </div>
  <div id="faqright">
    <div class="menu-bread">
      <h2>FAQ</h2>
      <a href="/">Home</a> &gt; <span>FAQs</span>
    </div>
    <div class="faqright-cont">
      <div class="faqbanner"><img src="/images/faq/banner.jpg" alt="" /></div>
      <div class="domestic">
        <h2><?php echo $category->cat_name;?></h2>
        <div class="faq-list">
          <?php $this->widget('zii.widgets.CListView', array(
             'dataProvider'=>$dataProvider,
             'itemView'=>'_content',
             'template'=>"{items}\n{pager}",
           )); ?>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
<!--</div>  -->
<script type="text/javascript">
  (function($){
    $("#more-select").click(function(){
      $("#choose_more_cities").show();
    });
    $("#close-none01").click(function(){
      $("#choose_more_cities").hide();
    });
    /*
   $("#choose_days").change(function(){
     $("#menu_days").val($(this).val());
   })

   $("#choose_price").change(function(){
     $("#menu_price").val($(this).val());
   })
   */
    $("input[name='city2[]']").click(function(){
      var choose_city_string = [];
      $("input[name='city2[]']:checked").each(function(){
        choose_city_string.push($(this).val());
        choose_city_string.sort();
        $.unique(choose_city_string);
        $("#menu_city").val(choose_city_string.join(','));
        $("#choose_city2").val(choose_city_string.join(','));
      })
    })

    $("#city_reset").click(function(){
      $("input[name='city2[]']").attr("checked",false);
      $("#choose_city2").val("");
    })

    $("#mySelInput").click(function(){
      $("#choose_days").toggle();
    })
    $("#choose_days li a").click(function(){
      $("#menu_days").val($(this).text());
      $("#choose_days").toggle();
      $("#mySelInput").html($(this).text());
    })

    $("#mySelInputPrice").click(function(){
      $("#choose_price").toggle();
    })

    $("*").live("click",function(){
      //if(this.id!='mySelInput') {$("#choose_days").hide();};
      //if(this.id!='mySelInputPrice') {$("#choose_price").hide();}
    })


    $("#choose_price li a").click(function(){
      $("#menu_price").val($(this).text());
      $("#choose_price").toggle();
      $("#mySelInputPrice").html($(this).text());
    })
    if($("#demo3").html()){
      $("#demo3").webwidget_slideshow_dot({
        slideshow_time_interval: '3500',
        slideshow_window_width: '424',
        slideshow_window_height: '79',
        slideshow_title_color: '#FFF',
        soldeshow_foreColor: '#7799BB',
        directory: 'images/'
      });
    }

  }(jQuery));

  function submit_form()
  {
    document.toursearchpanelform.submit()
  }
</script>
<script>
$(document).ready(function(){
	$('.faqname').find('span>a').eq('<?php echo $_GET['faqnum'];?>').trigger('click');
});
</script>