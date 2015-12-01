<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>e-mail</title>
<style type="text/css">
<!--
*{ margin:0px; padding:0px;}
-->
</style>
</head>
<body style="margin:0px; padding:0px; width:100%; height:100%; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:18px; -webkit-text-size-adjust:none; background:#eeeeee;">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" style=" margin:0px auto;  display:block; width:700px; overflow:hidden; -webkit-text-size-adjust:none; color:#444444; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:20px; ">
  <tr>
    <td height="25">If the mail cannot display normally, please visit <a href="http://www.leadtochina.com/travel/newsletter/preview?id=<?php echo $userinfo['id'];?>" style="color:#2B6CAD; text-decoration:none;">LeadToChina.com online</a></td>
  </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" style="border: 1px solid #DDDDDD;margin:0px auto; background:#ffffff; display:block; width:700px; overflow:hidden; -webkit-text-size-adjust:none; color:#444444; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:20px; ">
  <tbody>
    <tr>
      <td><table border="0" cellspacing="0" cellpadding="0" style="padding:0 0 0 20px; width:100%;">
        <tbody>
          <tr>
            <td style="width:325px;"><a href="http://www.leadtochina.com/"><img src="http://direct.leadtochina.com/images/newsletter/logo.jpg" border="0" alt="" /></a></td>
            <td><table border="0" cellspacing="0" cellpadding="0" style="text-align:right; float:right; padding-right:20px;">
              <tbody>
                <tr>
                  <td><a href="http://messenger.providesupport.com/messenger/travelthing.html"><img src="http://www.leadtochina.com/images/newsletter/live.jpg" border="0" alt="" /></a></td>
                  <td><a href="mailto:yoursFriend@email.com"><img src="http://www.leadtochina.com/images/newsletter/send.jpg" border="0" alt="" /></a></td>
                </tr>
                <tr>
                  <td colspan="2" style="padding-top:10px;"><img src="http://www.leadtochina.com/images/newsletter/tel.jpg" border="0" alt="" /></td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table border="0" cellpadding="0" cellspacing="0" style="height:auto; width:660px;display:block;white-space:nowrap;background:#ffeedd; margin: 20px auto 0;">
        <tbody>
          <tr>
            <td width="35%"><table border="0" cellspacing="0" cellpadding="0" style="width:210px; height:auto; float:left; display:block; padding:8px 0px;">
              <tbody>
                <tr>
                  <td style="padding-right:10px;padding-left:10px;">
                    <img src="http://www.leadtochina.com/images/newsletter/avatar.gif" style="width:87px;height:73px;" border="0" />
                  </td>
                  <td valign="top"><strong style="font-size:16px; color:#000000; line-height:24px;">Welcome</strong><br />
                          <span style="color:#8c4600; font-size:15px; font-weight:bold;"><?php echo $userinfo['name'];?></span> </td>
                </tr>
              </tbody>
            </table></td>
            <td width="65%"><table border="0" cellspacing="0" cellpadding="0" style="height:auto; display:block; padding:0px 11px; float:left; display:block;">
              <tbody>
                <tr>
                  <td><strong style="font-size:14px; color:#000000; display:block; line-height:24px;">Benefits for you:</strong></td>
                </tr>
                <tr>
                  <td>
                     <?php 
                        $userinfo['benifits_for_you'] = 
                          'Book China Tour 3 months in advance, enjoy 5% discount of all packages
                           Repeat travelers enjoy 8% discount of all the tour packages
                           Introduce friends to us, have gifts from Lead to China';
                        $benifit_arr = explode("\n", $userinfo['benifits_for_you']);
                      ?>
                      <?php foreach($benifit_arr as $v):?>
                      <img src="http://www.leadtochina.com/images/newsletter/benifits.jpg" border="0" alt="" /> <?php echo $v;?><br />
                      <?php endforeach;?>
                  </td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td style="padding:20px 0px; text-align:center;"><strong style="color:#8c4600; font-size:18px;">Top 6 Destinations for Second China Trip</strong></td>
    </tr>
    <?php $top_tour_cities = unserialize($newsletter['top_tour_cities']); ?>
   <tr>
    <td>
     <table>
      <tr>
<?php $i=0; foreach($top_tour_cities['title'] as $k=>$v):?>
            <?php if($i>2) continue;?>
        <td style="width:204px; float:left; padding-left:20px; padding-bottom:15px;">
           <table border="0" cellspacing="0" cellpadding="0">
               <tbody>
                  <tr>
                     <td><a href="<?php echo $top_tour_cities['url'][$k];?>"><img src="http://www.leadtochina.com/travel/images/uploads/newsletter/<?php echo $top_tour_cities['file'][$k];?>" border="0" /></a></td>
                  </tr>
                  <tr>
                     <td><a href="<?php echo $top_tour_cities['url'][$k];?>" style="text-decoration:none; color:#2b6cad;"><?php echo $v;?></a></td>
                  </tr>
                  <tr>
                     <td style="color:#777777; height:125px;" valign="top"><?php echo $top_tour_cities['desc'][$k];?></td>
                  </tr>
               </tbody>
           </table>
       </td>
 <?php $i++;endforeach;?> 
  </tr>
  </table>
  </td>
    </tr>
    <tr>
      <td>
        <table>
          <tr>
       <?php foreach($top_tour_cities['title'] as $k=>$v):?>
            <?php if($k<=2) continue;?>
        <td style="padding-left:20px; width:204px; float:left;">
           <table border="0" cellspacing="0" cellpadding="0">
               <tbody>
                  <tr>
                     <td><a href="<?php echo $top_tour_cities['url'][$k];?>"><img src="http://www.leadtochina.com/travel/images/uploads/newsletter/<?php echo $top_tour_cities['file'][$k];?>" border="0" /></a></td>
                  </tr>
                  <tr>
                     <td><a href="<?php echo $top_tour_cities['url'][$k];?>" style="text-decoration:none; color:#2b6cad;"><?php echo $v;?></a></td>
                  </tr>
                  <tr>
                     <td style="color:#777777; height:125px;" valign="top"><?php echo $top_tour_cities['desc'][$k];?></td>
                  </tr>
               </tbody>
           </table>
       </td>
      <?php endforeach;?>
      </tr>
    </table>
  </td>
    </tr>

    <tr>
      <td style="padding:10px 0px 15px 0px; text-align:center;"><strong style="color:#8c4600; font-size:18px;">More China Golden Triangle Tour</strong></td>
    </tr>

    <?php if($newsletter['banner']):?>
    <tr>
      <td style="text-align:center; padding-bottom:15px;"><a href="<?php echo $newsletter['banner_link'];?>"><img src="http://www.leadtochina.com/travel/images/uploads/newsletter/<?php echo $newsletter['banner'];?>" border="0" /></a></td>
    </tr>
    <?php endif;?>
    
    <?php $more_china_tours = unserialize($newsletter['more_china_tours']);?>
    <?php foreach($more_china_tours['title2'] as $k=>$title):?>
    <tr>
      <td style="padding:5px 0px 5px 20px;">
        <img src="http://www.leadtochina.com/images/newsletter/libg.jpg" border="0" alt="" /> 
       <a href="<?php echo $more_china_tours['url2'][$k];?>" style="color:#311800; text-decoration:underline; margin-right:7px; font-size:13px;"><?php echo $title;?></a>

       <?php $arr = explode(',',$more_china_tours['tags'][$k]);?>
                  <?php foreach($arr as $i=>$tag):?>
                  <?php
                    if($i == 0) $style = "width:104px; height:28px; display:inline-block; margin-right:3px; background:url(http://www.leadtochina.com/images/newsletter/a1.jpg) left center no-repeat; color:#331a00; line-height:28px; text-align:center; text-decoration:none; font-size:11px; font-weight:bold;";
                    elseif($i == 1) $style="width:104px; height:28px; display:inline-block; margin-right:3px; background:url(http://www.leadtochina.com/images/newsletter/a2.jpg) left center no-repeat; color:#331a00; line-height:28px; text-align:center; text-decoration:none; font-size:11px; font-weight:bold;";
                    else $style="width:104px; height:28px; display:inline-block; margin-right:3px; background:url(http://www.leadtochina.com/images/newsletter/a3.jpg) left center no-repeat; color:#331a00; line-height:28px; text-align:center; text-decoration:none; font-size:11px; font-weight:bold;";
                  ?>
                  <span style="<?php echo $style;?>"><?php echo $tag;?></span>
       <?php endforeach;?>
	   <br /> <span style="font-size: 12px;line-height: 15px;color: #999;padding-left: 5px;"><?php echo $more_china_tours['route2'][$k];?></span>
    </tr>
    <?php endforeach;?>

    <tr >
       <td style=" padding:30px 20px 0px 20px; text-align:center; color:#ffffff;"><span style="width:660px; height:auto; background:#8c4600; height:34px; display:block;"><a style="color:#ffffff; text-decoration:none; margin:0px 7px; line-height:34px;" href="http://www.leadtochina.com">Home</a> |  <a style="color:#ffffff; text-decoration:none; margin:0px 7px; line-height:34px;" href="www.leadtochina.com/chinatour/">China Tours</a> |  <a style="color:#ffffff; text-decoration:none; margin:0px 7px; line-height:34px;" href="http://www.leadtochina.com/travel/city-beijing-tours">Beijing Tours</a> |  <a style="color:#ffffff; text-decoration:none; margin:0px 7px; line-height:34px;" href="http://www.leadtochina.com/travel/yangtzecruise/">Yangtze Cruise</a> |  <a style="color:#ffffff; text-decoration:none; margin:0px 7px; line-height:34px;" href="http://www.leadtochina.com/travel/hotel/">Hotels</a> |  <a style="color:#ffffff; text-decoration:none; margin:0px 7px; line-height:34px;" href="http://www.leadtochina.com/china-guide/">China Guide</a> |  <a style="color:#ffffff; text-decoration:none; margin:0px 7px; line-height:34px;" href="http://www.leadtochina.com/about-us/">About Us</a> |  <a style="color:#ffffff; text-decoration:none; margin:0px 7px; line-height:34px;" href="http://www.leadtochina.com/index.php?option=com_review">Reviews</a></span></td>
    </tr>
    <tr>
      <td style="padding:10px 20px; color:#777777;">Lead to China is a famous China tour operator based in China providing quality China Tour Services. We specialize in small group China tour packages and Tailor Make China Tours that will truly fulfill the customer’s wishes. We offer every kind of trip and tour, and we will carefully design every detail of the budget to make your China tour an unforgettable one!Join our China Tours with budget prices!</td>
    </tr>
    <tr>
      <td style=" height:33px; background:#f5f5f5; border-left:2px solid #fff; border-right:2px solid #fff; text-align:center; margin-top:10px;"><strong style="font-size:13px; color:#000000; padding-right:10px;">If you don’t want to receive this kind mails,please click</strong> <a href="http://www.leadtochina.com/newsletter/unsubscribe/" style="width:100px; height:28px; text-align:center; color:#8c4600; text-decoration:none; border:1px solid #dedede; line-height:28px; display:inline-block;"><strong>unsubscribe</strong></a></td>
    </tr>
    <tr>
       <td style="height:20px;"></td>
    </tr>
  </tbody>
</table>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" style=" margin:0px auto;  display:block; width:700px; overflow:hidden; -webkit-text-size-adjust:none; color:#444444; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:20px; ">
  <tr>
    <td width="558" style="height:30px; padding:6px 0px; line-height:30px; background:#eeeeee;"><span style="float:left; color:#555555; font-size:12px;">&copy; copyright 2012 Hefei Full View Travel Agency Ltd. All rights reserved.</span> </td>
    <td width="142" align="right" style="height:30px; padding:6px 0px; line-height:30px; background:#eeeeee;"><a href="http://leadtochina.blogspot.com" style="width:24px; height:24px; display:block; float:right; margin-left:13px;"><img src="http://www.leadtochina.com/images/newsletter/y.jpg" width="24px" height="24px" border="0" alt="" /></a><a href="http://facebook.com/lead2china" style="width:24px; height:24px; display:block; float:right; margin-left:13px;"><img src="http://www.leadtochina.com/images/newsletter/t.jpg" width="24px" height="24px" border="0" alt="" /></a><a href="http://twitter.com/leadtochina" style="width:24px; height:24px; display:block; float:right; margin-left:13px;"><img src="http://www.leadtochina.com/images/newsletter/f.jpg" width="24px" height="24px" border="0" alt="" /></a><a href="http://www.youtube.com/user/OnlineChinaTours1" style="width:24px; height:24px; display:block; float:right;"><img src="http://www.leadtochina.com/images/newsletter/b.jpg" width="24px" height="24px" border="0" alt="" /></a></td>
  </tr>
</table>
<div style="display:none"><img style="width:1px;height:1px;" src="http://www.onlinechinatours.com/total_admin/open_email_status.php?mail=<?php echo urlencode($userinfo['email']);?>" /></div>
</body>
</html>
