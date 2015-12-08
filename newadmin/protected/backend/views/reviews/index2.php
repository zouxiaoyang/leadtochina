<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/reviews.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/js/fancybox/jquery.fancybox-1.3.4.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/fancybox/jquery-1.4.3.min.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/fancybox/jquery.mousewheel-3.0.4.pack.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/fancybox/jquery.fancybox-1.3.4.pack.js');?>
<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>
<!--  reviews start  -->
<div id="reviews">
   <div class="text">
      <div class="textleft">
         <h2>Lead to China Reviews</h2>
         <p>With offering nuanced, high-quality China Inbound Tour services to overseas travelers through indefatigable work in several years, Hefei Full View Travel Agency has earned a tiny space in China Inbound Travel circle. Meanwhile, for grasping the aim of "providing perfect China travel experience for overseas tourists" precisely, Hefei Full View Travel Agency has set up high-quality service control system for monitoring the services from Customer Service Representative, trip advisor, editor, tour guide and driver from local tavel agency.</p>
         <p>Since 2008, thousands of overseas tourists have taken our services of touring amazing China and left us a plenty of positive reviews to praise our work, also available on Trip Advisor.com. It is no doubt that we feel so proud to receive these. Let's see what they have left to us and to you!</p>
       </div>
       <div class="textright"><img src="/images/reviews/top.jpg" alt="" /></div>
   </div>
   <div class="reviews-menu">
      <ul>
         <li><a href="#">Tour Company Reviews</a></li>
         <li class="guest"><a class="dq" href="#">Guest Reviews</a></li>
      </ul>
      <div class="reshare"><a href="#"><img src="/images/reviews/share.png" alt="" /></a></div>
   </div>
</div>
<!--  reviews end  -->
<div style="clear:both"></div>

<!--  recontent start  -->
<div id="recontent">
    <!--  content01 start  -->
    <div class="content01">
        <!--  select start  -->
        <div class="select">
           <div class="select1">
             <select name="">
                <option selected="selected"> -- 2013 -- </option>
                <option> -- 2014 -- </option>
                <option> -- 2015 -- </option>
             </select>
             <input name="" type="radio" value="" checked="checked" /> All() <input name="" type="radio" value="" /> Positive() <input name="" type="radio" value="" /> Common() <input name="" type="radio" value="" /> Negative()</div>
           <span> <input name="" type="text" value=" ----- Name/Country -----" /> <a href="#"><img src="/images/reviews/search.jpg" alt="" /></a></span>
        </div>
        <!--  select end  -->
        
        <!--  list-guest start  -->
        <div class="list-guest">
            <!--  guest1 start  -->
            <div class="guest1">
               <!--  guest1list start  -->
               <div class="guest1list">
                   <ul>
                        <li class="time">2013/02/25</li>
                        <li class="name"><a href="#">5 Days Luxury Package of Shanghai/ Xian - Guilin/ Shanghai</a></li>
                        <li><img alt="" src="/images/reviews/image1.jpg" /></li>
                        <li class="pic"><a rel="example_group" href="/images/reviews/image1.jpg" title=""><img alt="" src="/images/reviews/image1small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image2.jpg" title=""><img alt="" src="/images/reviews/image2small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image3.jpg" title=""><img alt="" src="/images/reviews/image3small.jpg" /></a>
                        </li>
                        <li class="client"><span>Clients:</span> Mr. Terence McKay (a group of 14 members)<br />
                                           <span>Country:</span> United States
                        </li>
                        <li class="detail">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>DETAIL</span></p>
                        </li>
                        <li class="detail" style="display:none;">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>CLOSE</span></p>
                        </li>
                        <li class="tubiao">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                   <td rowspan="2" style="padding-left:0px; padding-right:20px;"><img alt="" src="/images/reviews/share.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/good.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/bad.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/review.jpg" /></td>
                                </tr>
                                <tr>
                                   <td>(120)</td>
                                   <td>(2)</td>
                                   <td>(6)</td>
                                </tr>
                             </table>
                        </li>
                        <li class="review">Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                        </li>
                        <li class="reply"></li>
                        <li class="form">
                           <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                 <td colspan="3"><textarea name="" cols="" rows="">&nbsp;</textarea></td>
                              </tr>
                              <tr>
                                 <td width="78" style="text-align:right;">Your Name:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">E-mail:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">Verify Code:</td>
                                 <td width="129"><input name="" type="text" style="width:104px;" /></td>
                                 <td width="70">验证码</td>
                              </tr>
                              <tr>
                                 <td colspan="3" style="text-align:center;"><a href="#" style="width:151px; height:24px; margin-top:5px; display:block;"><img alt="" src="/images/reviews/button.png" /></a></td>
                              </tr>
                           </table>
                        </li>
                   </ul>
               </div>
               <!--  guest1list end  -->
               <div class="guest1bottom"></div>
               <!--  guest1list start  -->
               <div class="guest1list">
                   <ul>
                        <li class="time">2013/02/25</li>
                        <li class="name"><a href="#">5 Days Luxury Package of Shanghai/ Xian - Guilin/ Shanghai</a></li>
                        <li><img alt="" src="/images/reviews/image1.jpg" /></li>
                        <li class="pic"><a rel="example_group" href="/images/reviews/image1.jpg" title=""><img alt="" src="/images/reviews/image1small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image2.jpg" title=""><img alt="" src="/images/reviews/image2small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image3.jpg" title=""><img alt="" src="/images/reviews/image3small.jpg" /></a>
                        </li>
                        <li class="client"><span>Clients:</span> Mr. Terence McKay (a group of 14 members)<br />
                                           <span>Country:</span> United States
                        </li>
                        <li class="detail">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>DETAIL</span></p>
                        </li>
                        <li class="detail" style="display:none;">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>CLOSE</span></p>
                        </li>
                        <li class="tubiao">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                   <td rowspan="2" style="padding-left:0px; padding-right:20px;"><img alt="" src="/images/reviews/share.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/good.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/bad.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/review.jpg" /></td>
                                </tr>
                                <tr>
                                   <td>(120)</td>
                                   <td>(2)</td>
                                   <td>(6)</td>
                                </tr>
                             </table>
                        </li>
                        <li class="review">Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                        </li>
                        <li class="reply"></li>
                        <li class="form">
                           <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                 <td colspan="3"><textarea name="" cols="" rows="">&nbsp;</textarea></td>
                              </tr>
                              <tr>
                                 <td width="78" style="text-align:right;">Your Name:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">E-mail:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">Verify Code:</td>
                                 <td width="129"><input name="" type="text" style="width:104px;" /></td>
                                 <td width="70">验证码</td>
                              </tr>
                              <tr>
                                 <td colspan="3" style="text-align:center;"><a href="#" style="width:151px; height:24px; margin-top:5px; display:block;"><img alt="" src="/images/reviews/button.png" /></a></td>
                              </tr>
                           </table>
                        </li>
                   </ul>
               </div>
               <!--  guest1list end  -->
               <div class="guest1bottom"></div>
            </div>
            <!--  guest1 end  -->
            
            <!--  guest1 start  -->
            <div class="guest1">
               <!--  guest1list start  -->
               <div class="guest1list">
                   <ul>
                        <li class="time">2013/02/25</li>
                        <li class="name"><a href="#">5 Days Luxury Package of Shanghai/ Xian - Guilin/ Shanghai</a></li>
                        <li><img alt="" src="/images/reviews/image1.jpg" /></li>
                        <li class="pic"><a rel="example_group" href="/images/reviews/image1.jpg" title=""><img alt="" src="/images/reviews/image1small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image2.jpg" title=""><img alt="" src="/images/reviews/image2small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image3.jpg" title=""><img alt="" src="/images/reviews/image3small.jpg" /></a>
                        </li>
                        <li class="client"><span>Clients:</span> Mr. Terence McKay (a group of 14 members)<br />
                                           <span>Country:</span> United States
                        </li>
                        <li class="detail">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>DETAIL</span></p>
                        </li>
                        <li class="detail" style="display:none;">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>CLOSE</span></p>
                        </li>
                        <li class="tubiao">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                   <td rowspan="2" style="padding-left:0px; padding-right:20px;"><img alt="" src="/images/reviews/share.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/good.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/bad.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/review.jpg" /></td>
                                </tr>
                                <tr>
                                   <td>(120)</td>
                                   <td>(2)</td>
                                   <td>(6)</td>
                                </tr>
                             </table>
                        </li>
                        <li class="review">Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                        </li>
                        <li class="reply"></li>
                        <li class="form">
                           <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                 <td colspan="3"><textarea name="" cols="" rows="">&nbsp;</textarea></td>
                              </tr>
                              <tr>
                                 <td width="78" style="text-align:right;">Your Name:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">E-mail:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">Verify Code:</td>
                                 <td width="129"><input name="" type="text" style="width:104px;" /></td>
                                 <td width="70">验证码</td>
                              </tr>
                              <tr>
                                 <td colspan="3" style="text-align:center;"><a href="#" style="width:151px; height:24px; margin-top:5px; display:block;"><img alt="" src="/images/reviews/button.png" /></a></td>
                              </tr>
                           </table>
                        </li>
                   </ul>
               </div>
               <!--  guest1list end  -->
               <div class="guest1bottom"></div>
               <div class="guest1list">
                   <ul>
                        <li class="time">2013/02/25</li>
                        <li class="name"><a href="#">5 Days Luxury Package of Shanghai/ Xian - Guilin/ Shanghai</a></li>
                        <li><img alt="" src="/images/reviews/image1.jpg" /></li>
                        <li class="pic"><a rel="example_group" href="/images/reviews/image1.jpg" title=""><img alt="" src="/images/reviews/image1small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image2.jpg" title=""><img alt="" src="/images/reviews/image2small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image3.jpg" title=""><img alt="" src="/images/reviews/image3small.jpg" /></a>
                        </li>
                        <li class="client"><span>Clients:</span> Mr. Terence McKay (a group of 14 members)<br />
                                           <span>Country:</span> United States
                        </li>
                        <li class="detail">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>DETAIL</span></p>
                        </li>
                        <li class="detail" style="display:none;">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>CLOSE</span></p>
                        </li>
                        <li class="tubiao">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                   <td rowspan="2" style="padding-left:0px; padding-right:20px;"><img alt="" src="/images/reviews/share.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/good.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/bad.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/review.jpg" /></td>
                                </tr>
                                <tr>
                                   <td>(120)</td>
                                   <td>(2)</td>
                                   <td>(6)</td>
                                </tr>
                             </table>
                        </li>
                        <li class="review">Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                        </li>
                        <li class="reply"></li>
                        <li class="form">
                           <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                 <td colspan="3"><textarea name="" cols="" rows="">&nbsp;</textarea></td>
                              </tr>
                              <tr>
                                 <td width="78" style="text-align:right;">Your Name:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">E-mail:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">Verify Code:</td>
                                 <td width="129"><input name="" type="text" style="width:104px;" /></td>
                                 <td width="70">验证码</td>
                              </tr>
                              <tr>
                                 <td colspan="3" style="text-align:center;"><a href="#" style="width:151px; height:24px; margin-top:5px; display:block;"><img alt="" src="/images/reviews/button.png" /></a></td>
                              </tr>
                           </table>
                        </li>
                   </ul>
               </div>
               <div class="guest1bottom"></div>
            </div>
            <!--  guest1 end  -->
            
            <!--  guest1 start  -->
            <div class="guest1">
               <!--  guest1list start  -->
               <div class="guest1list">
                   <ul>
                        <li class="time">2013/02/25</li>
                        <li class="name"><a href="#">5 Days Luxury Package of Shanghai/ Xian - Guilin/ Shanghai</a></li>
                        <li><img alt="" src="/images/reviews/image1.jpg" /></li>
                        <li class="pic"><a rel="example_group" href="/images/reviews/image1.jpg" title=""><img alt="" src="/images/reviews/image1small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image2.jpg" title=""><img alt="" src="/images/reviews/image2small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image3.jpg" title=""><img alt="" src="/images/reviews/image3small.jpg" /></a>
                        </li>
                        <li class="client"><span>Clients:</span> Mr. Terence McKay (a group of 14 members)<br />
                                           <span>Country:</span> United States
                        </li>
                        <li class="detail">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>DETAIL</span></p>
                        </li>
                        <li class="detail" style="display:none;">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>CLOSE</span></p>
                        </li>
                        <li class="tubiao">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                   <td rowspan="2" style="padding-left:0px; padding-right:20px;"><img alt="" src="/images/reviews/share.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/good.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/bad.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/review.jpg" /></td>
                                </tr>
                                <tr>
                                   <td>(120)</td>
                                   <td>(2)</td>
                                   <td>(6)</td>
                                </tr>
                             </table>
                        </li>
                        <li class="review">Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                        </li>
                        <li class="reply"></li>
                        <li class="form">
                           <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                 <td colspan="3"><textarea name="" cols="" rows="">&nbsp;</textarea></td>
                              </tr>
                              <tr>
                                 <td width="78" style="text-align:right;">Your Name:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">E-mail:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">Verify Code:</td>
                                 <td width="129"><input name="" type="text" style="width:104px;" /></td>
                                 <td width="70">验证码</td>
                              </tr>
                              <tr>
                                 <td colspan="3" style="text-align:center;"><a href="#" style="width:151px; height:24px; margin-top:5px; display:block;"><img alt="" src="/images/reviews/button.png" /></a></td>
                              </tr>
                           </table>
                        </li>
                   </ul>
               </div>
               <!--  guest1list end  -->
               <div class="guest1bottom"></div>
               <!--  guest1list start  -->
               <div class="guest1list">
                   <ul>
                        <li class="time">2013/02/25</li>
                        <li class="name"><a href="#">5 Days Luxury Package of Shanghai/ Xian - Guilin/ Shanghai</a></li>
                        <li><img alt="" src="/images/reviews/image1.jpg" /></li>
                        <li class="pic"><a rel="example_group" href="/images/reviews/image1.jpg" title=""><img alt="" src="/images/reviews/image1small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image2.jpg" title=""><img alt="" src="/images/reviews/image2small.jpg" /></a>
                            <a rel="example_group" href="/images/reviews/image3.jpg" title=""><img alt="" src="/images/reviews/image3small.jpg" /></a>
                        </li>
                        <li class="client"><span>Clients:</span> Mr. Terence McKay (a group of 14 members)<br />
                                           <span>Country:</span> United States
                        </li>
                        <li class="detail">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>DETAIL</span></p>
                        </li>
                        <li class="detail" style="display:none;">
                            <p><img alt="" src="/images/reviews/pic2.jpg" /> Mr. Daniel Pierce<br />
                            2013 / 03 / 28<br />
                            United States<br />
                            Hi dear,<br />
                            Our guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transportedOur guide in Guilin, Frank, was great. It was nice to be met at the airport and transported ...... <span>CLOSE</span></p>
                        </li>
                        <li class="tubiao">
                            <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                   <td rowspan="2" style="padding-left:0px; padding-right:20px;"><img alt="" src="/images/reviews/share.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/good.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/bad.jpg" /></td>
                                   <td><img alt="" src="/images/reviews/review.jpg" /></td>
                                </tr>
                                <tr>
                                   <td>(120)</td>
                                   <td>(2)</td>
                                   <td>(6)</td>
                                </tr>
                             </table>
                        </li>
                        <li class="review">Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                            Nice Article.Thanks for sharing those.
                            <span>——Stephen Chow</span>
                        </li>
                        <li class="reply"></li>
                        <li class="form">
                           <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                 <td colspan="3"><textarea name="" cols="" rows="">&nbsp;</textarea></td>
                              </tr>
                              <tr>
                                 <td width="78" style="text-align:right;">Your Name:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">E-mail:</td>
                                 <td colspan="2"><input name="" type="text" /></td>
                              </tr>
                              <tr>
                                 <td style="text-align:right;">Verify Code:</td>
                                 <td width="129"><input name="" type="text" style="width:104px;" /></td>
                                 <td width="70">验证码</td>
                              </tr>
                              <tr>
                                 <td colspan="3" style="text-align:center;"><a href="#" style="width:151px; height:24px; margin-top:5px; display:block;"><img alt="" src="/images/reviews/button.png" /></a></td>
                              </tr>
                           </table>
                        </li>
                   </ul>
               </div>
               <!--  guest1list end  -->
               <div class="guest1bottom"></div>
            </div>
            <!--  guest1 end  -->
        </div>
        <!--  list-guest end  -->
        <div class="clear"></div>
        <div class="rebanner"><a href="#"><img src="/images/reviews/banner.jpg" alt="" /></a></div>
    </div>
    <!--  content01   -->
</div>
<!--  recontent end  -->