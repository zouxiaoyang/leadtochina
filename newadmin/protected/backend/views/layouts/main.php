<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/adminform.css" />
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<?php Yii::app()->clientScript->registerScriptFile('js/autocomplete/jquery.autocomplete.min.js');?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/autocomplete/jquery.autocomplete.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<?php if(!Yii::app()->user->isGuest):?>
		<div id="header">
			<div id="logo">畅景<?php echo CHtml::encode(Yii::app()->name); ?><?php if(!Yii::app()->user->isGuest) echo '-'.Yii::app()->user->name;?></div>
		</div><!-- header -->

		<div id="menu">
      <?php
      $this->widget('zii.widgets.CMenu',array(
        'activeCssClass'=>'active',
        'activateParents'=>true,
        'items'=>array(
          array(
            'label'=>'客户行程',
            'url'=>array('/tourInfo/admin'),
            'linkOptions'=>array('id'=>'menuTourInfo'),
            'itemOptions'=>array('id'=>'itemTourInfo'),
            'visible'=>!Yii::app()->user->isGuest,
            'items'=>array(
              //array('label'=>'Link生成确认页面', 'url'=>array('/TourInfoFinal/admin'),'visible'=>Yii::app()->user->checkAccess('TourInfoFinalAdmin')),
            ),
          ),
          array(
            'label'=>'旅游管理',
            'url'=>'###',
            'linkOptions'=>array('id'=>'menuScenery'),
            'visible'=>!Yii::app()->user->isGuest,
            'items'=>array(
              array('label'=>'酒店管理', 'url'=>array('/JosCosHotel/admin'),'visible'=>Yii::app()->user->checkAccess('JosCosHotelAdmin')),
              array('label'=>'销售景点管理', 'url'=>array('/Scenery/admin'),'visible'=>Yii::app()->user->checkAccess('SceneryAdmin')),
              array('label'=>'长江游轮管理', 'url'=>array('/cruise/admin'),'visible'=>Yii::app()->user->checkAccess('CruiseAdmin')),
              
              array(
                  'label'=>'国际游轮>',
                  'visible'=>!Yii::app()->user->isGuest,
                  'items'=>array(
                      array('label'=>'港口管理', 'url'=>array('/cruisePorts/admin'),'visible'=>Yii::app()->user->checkAccess('CruisePortsAdmin')),
                      array('label'=>'游轮管理', 'url'=>array('/internationalCruise/admin'),'visible'=>Yii::app()->user->checkAccess('InternationalCruiseAdmin')),
                      array('label'=>'Faq管理', 'url'=>array('/cruiseFaq/admin'),'visible'=>Yii::app()->user->checkAccess('CruiseFaqAdmin')),
                  )
              ),
              'items' => array(
                'label'=>'Faq管理>',
                'visible'=>!Yii::app()->user->isGuest,
                'items'=>array(
                    array('label'=>'Faq 类别管理', 'url'=>array('/faqCategory/admin'),'visible'=>Yii::app()->user->checkAccess('SceneryAdmin')),
                    array('label'=>'Faq 内容管理', 'url'=>array('/faqContent/admin'),'visible'=>Yii::app()->user->checkAccess('SceneryAdmin')),
                )
              ),
              'itemsRental' => array(
                'label'=>'Rental管理>',
                'visible'=>!Yii::app()->user->isGuest,
                'items'=>array(
                    array('label'=>'Car Rental管理', 'url'=>array('/carRental/admin'),'visible'=>Yii::app()->user->checkAccess('carRentalAdmin')),
                    array('label'=>'Guide Rental管理', 'url'=>array('/guideRental/admin'),'visible'=>Yii::app()->user->checkAccess('guideRentalAdmin')),
                )
              ),
              'itemsCulture' => array(
                'label' => '中国文化管理>',
                'visible' => !Yii::app()->user->isGuest,
                'items' => array(
                    array('label'=>'内容管理', 'url'=>array('chinaculture/admin'), 'visible'=>Yii::app()->user->checkAccess('chinacultureAdmin')),
                    array('label'=>'分类管理','url'=>array('categories/admin&section=com_chinaculture'), 'visible'=>Yii::app()->user->checkAccess('categoriesAdmin')),
                ),
              ),
              'itemsScenery' => array(
                'label' => '中国景点管理>',
                'visible' => !Yii::app()->user->isGuest,
                'items' => array(
                    array('label'=>'内容管理', 'url'=>array('ChinaScenery/admin'),'visible'=>Yii::app()->user->checkAccess('ChinaSceneryAdmin')),
                    array('label'=>'分类管理','url'=>array('categories/admin&section=com_scenery'), 'visible'=>Yii::app()->user->checkAccess('categoriesAdmin')),
                ),
              ),
              array('label'=>'Beijing Tours首页管理', 'url'=>array('/BeijingPackage/admin'),'visible'=>Yii::app()->user->checkAccess('BeijingPackageAdmin')),
              array('label'=>'City Guide首页管理', 'url'=>array('/CityGuideIndexInfo/admin'),'visible'=>Yii::app()->user->checkAccess('CityGuideIndexInfoAdmin')),
              array('label'=>'省份管理', 'url'=>array('/province/admin'),'visible'=>Yii::app()->user->checkAccess('ProvinceAdmin')),
              array('label'=>'城市管理', 'url'=>array('/JosCosCity/admin'),'visible'=>Yii::app()->user->checkAccess('JosCosCityAdmin')),
              array('label'=>'用户管理', 'url'=>array('/user/admin'),'visible'=>Yii::app()->user->checkAccess('UserAdmin'),),
              array('label'=>'首页月城市推荐管理', 'url'=>array('/indexRecommendCity/admin'),'visible'=>Yii::app()->user->checkAccess('indexRecommendCityAdmin')),
              array('label'=>'Travel Agent', 'url'=>array('/cooperationPartners/admin'),'visible'=>Yii::app()->user->checkAccess('cooperationPartnersAdmin')),
              array('label'=>'单城市首页Question', 'url'=>array('/cityQuestion/admin'),'visible'=>Yii::app()->user->checkAccess('cityQuestionAdmin')),
            ),           
          ),
          array(
            'label'=>'Adoption管理',
            'url'=>'#',
            'linkOptions'=>array('id'=>'menuAdoption'),
            'visible'=>!Yii::app()->user->isGuest,
            'items'=>array(
              array('label'=>'福利院地址和游记', 'url'=>array('/adoptionOrphanageAddress/admin'),'visible'=>Yii::app()->user->checkAccess('AdoptionOrphanageAddressAdmin')),
              array('label'=>'省份和行程关联', 'url'=>array('/adoptionPackage/admin'),'visible'=>Yii::app()->user->checkAccess('AdoptionPackageAdmin')),
              array('label'=>'收养主题资讯', 'url'=>array('/adoptionContent/admin'),'visible'=>Yii::app()->user->checkAccess('AdoptionContentAdmin')),
              /*array('label'=>'Adoption Services城市管理', 'url'=>array('/adoptionCity/admin'),'visible'=>Yii::app()->user->checkAccess('AdoptionCityAdmin')),*/
              //array('label'=>'China Travel Photos', 'url'=>array('/chinaTravelPhotos/admin'),'visible'=>Yii::app()->user->checkAccess('ChinaTravelPhotosAdmin')),
              array('label'=>'福利院访问材料和费用', 'url'=>array('/orphanage/admin'),'visible'=>Yii::app()->user->checkAccess('orphanageAdmin')),
            ),
          ),
          array(
           'label'=>'Muslim管理',
           'url'=>'#',
           'linkOptions'=>array('id'=>'menuMuslim'),
           'visible'=>!Yii::app()->user->isGuest,
           'items'=>array(
             array('label'=>'Muslim 行程管理', 'url'=>array('/MuslimPackages/admin'),'visible'=>Yii::app()->user->checkAccess('MuslimPackagesAdmin')),
             array('label'=>'Muslim 文章管理', 'url'=>array('/MuslimContents/admin'),'visible'=>Yii::app()->user->checkAccess('MuslimContentsAdmin')),
           ),
          ),
          array(
           'label'=>'Promotion管理',
           'url'=>'#',
           'linkOptions'=>array('id'=>'menuPromotion'),
           'visible'=>!Yii::app()->user->isGuest,
           'items'=>array(
             array('label'=>'Theme Activities管理', 'url'=>array('/PromotionContent/admin'),'visible'=>Yii::app()->user->checkAccess('PromotionContentAdmin')),
             array('label'=>'Promotion月推荐行程管理', 'url'=>array('/PromotionMonthTours/admin'),'visible'=>Yii::app()->user->checkAccess('PromotionMonthToursAdmin')),
           ),
          ),
          array(
           'label'=>'NewsLetter',
           'url'=>array('/Newsletter/admin'),
           'linkOptions'=>array('id'=>'Newsletter'),
           'visible'=>Yii::app()->user->checkAccess('NewsLetterAdmin'),
          ),

          array(
           'label'=>'图片||视频',
           'url'=>array('/ImgVideo/admin'),
           'linkOptions'=>array('id'=>'ImgVideo'),
           'visible'=>Yii::app()->user->checkAccess('ImgVideoAdmin'),
          ),
		  /*
          array(
           'label'=>'Reviews',
           'url'=>'#',
           'linkOptions'=>array('id'=>'menuReviews'),
           'visible'=>!Yii::app()->user->isGuest,'items'=>array(
             array('label'=>'Review', 'url'=>array('/Reviews/admin'),'visible'=>Yii::app()->user->checkAccess('ReviewsAdmin')),
             
			 //array('label'=>'Comment', 'url'=>array('/ReviewsComment/admin'),'visible'=>Yii::app()->user->checkAccess('ReviewsCommentAdmin')),
           ),
          ),*/
		   array(
           'label'=>'Reviews',
           'url'=>array('/Reviews/admin'),
           'linkOptions'=>array('id'=>'menuReviews'),
           'visible'=>Yii::app()->user->checkAccess('ReviewsAdmin')
          ),
          /*
          array(
           'label'=>'Feedback',
           'url'=>array('/FeedbackQuestion/admin'),
           'linkOptions'=>array('id'=>'Feedback'),
           'visible'=>Yii::app()->user->checkAccess('FeedbackQuestionAdmin'),
          ),*/
          array(
            'label'=>'Logout',
            'url'=>array('/site/logout'),
            'linkOptions'=>array('id'=>'menuLogout'),
            'visible'=>!Yii::app()->user->isGuest,
          ),
        ),
      )); ?>
		</div><!-- mainmenu -->
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>
	<?php endif;?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" style="display:none">

	</div><!-- footer -->

</div><!-- page -->
<script>
  $(document).ready(function(){
    $('#menu>ul>li>ul').find('li:has(ul:not(:empty))>a').append("<span class='arrow'>></span>");
    $("#menu>ul>li").bind('mouseover',function() {
      $(this).children('ul').show();
    }).bind('mouseleave',function(){
        $(this).children('ul').hide();
    });
    $('#menu>ul>li>ul li').bind('mouseover',function(){
      $(this).children('ul').show();
    }).bind('mouseleave',function() {
        $(this).children('ul').hide();
      });
  });
</script>
</body>
</html>
