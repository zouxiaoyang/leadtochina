<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-9">
      <h1 class="page-title05">Real Travelers' Stories You Can Trust</h1>
      <span>We invite you to read their stories and share in the experiences of the families we have been so fortunate to serve. </span>
      <div class="pro-detail-block"> <img src="/images/travel-review01.jpg" />
        <div class="search-travel-reviews">
          <input id="edit-skeys" class="form-text01" type="text" maxlength="128" size="60" value="" name="title" placeholder="Search for Orphanage Name" />
          <label>IN</label>
          <select class="form-select01" name="province_id" id="edit-location">
			<option value="0">- Choose Province -</option>
			<?php 
				foreach($provinces as $key=>$province):
					if($key!=0):
			 ?>
					<option value='<?php echo $key;?>'><?php echo $province;?></option>
				 <?php endif;?>
		    <?php endforeach;?>
          </select>
          <input id="edit-submit" class="form-submit02" onclick="_Search()" type="submit" value="Go" name="op" />
        </div>
		<?php echo $cnt.' Search Results';?>
        <div class="travel-reviews-list01">
			<?php if($cnt):?>
				<?php foreach($posts as $post): ?>
					<div class="reviews-list01-block clearfix">
					<div class="group-left"> <img width="200px" height="140px" src="/newadmin/images/uploads/adoption/<?php echo $post['pic'];?>" /> </div>
					<div class="group-right">
					  <a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleDetail',array('ar_id'=>$post['id']));?>" title="<?php echo $post['title'];?>"><h2><?php echo $post['title'];?></h2></a>
					 <p> <?php echo substr(strip_tags($post['content']),0,245),'...';?><a href="<?php echo Yii::app()->createUrl('adoption/adoptionArticleDetail',array('ar_id'=>$post['id']));?>" title="<?php echo $post['title'];?>" class="link01">Read more</a></p>
					  <i>Travel Date:<?php echo date('M dS, Y',strtotime($post['date']));?></i></div>
				  </div>
				<?php endforeach;?>
			<?php else:?>
				no result!
			<?php endif;?>
          <div class="reviews-pagenation">
		<?php 
				$this->widget('CLinkPager',array(
					'firstPageLabel'=>'First',
					'lastPageLabel'=>'Last',
					'header'=>'',
					'htmlOptions'=>array(
						'class'=>'pagination',
						'id'=>'pagerid',
					),
					'selectedPageCssClass'=>'active',
					'pages'=>$pages,
				)
			);
		?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="pro-detail-block-right">
        <section class="clearfix">
          <div class="top-block01">
            <span>Why Lead to China</span>
            <label>We take care of all your personalized needs.</label>
            <label>We have managed to help thousands of adoptive families arrange their perfect vacations in China. </label>
            <label>We work closely with Chinese government and orphanages throughout China. </label>
            <br />
            <br />
            <p class="center-button">
                <a class="large-button" href="/travel/order">Plan Your Trip Today</a><br>
                
            </p>
          </div>
        </section>
        <div class="top-block02">
         	<a href="http://www.tripadvisor.com/ShowUserReviews-g297403-d3824010-r282839157-Lead_to_China_Tours_Day_Tour-Hefei_Anhui.html#CHECK_RATES_CONT"><img src="/images/travel-review-right-img01.jpg" /></a>
         </div>
      </div>
    </div>
  </div>
</div>
<div class="home-foot-links travel-bottom-block">
  	<h3>China Homeland Tours by Province</h3>
    <div class="seo-footer-wrapper-home clearfix">
    	<div class="seo-section">
            <a href="#">Anhui Reunion</a>
            <a href="#">Guangdong Reunion</a>
            <a href="#">Henan Reunion</a>
            <a href="#">Jilin Reunion</a>
            <a href="#">Shandong Reunion</a>
            <a href="#">Xinjiang Reunion</a>
        </div>
        <div class="seo-section">
        	<a href="#">Beijing Reunion</a>
            <a href="#">Guangxi Reunion</a>
            <a href="#">Hubei Reunion</a>
            <a href="#">Liaoning Reunion</a>
            <a href="#">Shanghai Reunion</a>
            <a href="#">Yunnan Reunion </a>
        </div>
        <div class="seo-section">
        	<a href="#">Chongqing Reunion</a>
            <a href="#">Guizhou Reunion</a> 
            <a href="#">Hunan Reunion</a>
            <a href="#">Ningxia Reunion</a>
            <a href="#">Shanxi Reunion</a>
            <a href="#">Zhejiang Reunion</a>
        </div>
        <div class="seo-section">
        	<a href="#">Fujian Reunion</a>
            <a href="#">Hebei Reunion</a>
            <a href="#">Jiangsu Reunion</a>
            <a href="#">Qinghai Reunion</a>
            <a href="#">Sichuan Reunion</a>
            <a href="#">Inner Mongolia Reunion</a>
      	</div>
        <div class="seo-section">
        	<a href="#">Gansu Reunion</a>
            <a href="#">Heilongjiang Reunion</a>
            <a href="#">Jiangxi Reunion</a>
            <a href="#">Shaanxi Reunion</a>
            <a href="#">Tianjin Reunion</a>
      </div>
    </div>
  </div>
<script type="text/javascript">
function _Search() {
if($('#edit-skeys').val()=='' && $('#edit-location').val()=='0'){
	alert('Please Input Title Or Province');
	return false;
}else{
		url = '/travel/adoptionarticle';
		
		var filter_order_id = $('#edit-skeys').val();
		
		if (filter_order_id) {
			url += '?title=' + encodeURIComponent(filter_order_id);
		}
		
		var filter_customer = $('#edit-location').val();
		
		if (filter_customer) {
			if(filter_order_id){
				url += '&province_id=' + encodeURIComponent(filter_customer);
			}else{
				url += '?province_id=' + encodeURIComponent(filter_customer);
			}
		}
			location = url;
	}
}
<?php 
	$province_id = isset($_GET['province_id'])?(int)$_GET['province_id']:'0';
	$title = isset($_GET['title'])?$_GET['title']:'';
?>
$('#edit-location').val('<?php echo $province_id;?>');
$('#edit-skeys').val('<?php echo $title;?>');

/*
$(document).on('click','#pagerid .page a',function(){
        $.ajax({
            url:$(this).attr('href'),
            success:function(html){
                $('#pagerid').html(html);
            }
        });
        return false;//阻止a标签
});
*/
</script>  