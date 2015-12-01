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
<body style="margin:0px; padding:0px; width:100%; height:100%; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px; color:#4b4b4b;-webkit-text-size-adjust:none;">
<table border="0" cellspacing="0" cellpadding="0" style="border:1px solid #f8dc6e; margin:0px auto; background:#f5f7e9; display:block; padding:10px 8px 0px 7px; width:682px; overflow:hidden;-webkit-text-size-adjust:none;">
  <tbody>
    <tr>
      <td><table border="0" cellspacing="0" cellpadding="0" style="width:100%; height:auto; float:left; display:block; border-bottom:1px dashed #abada3; padding-bottom:13px;">
        <tbody>
          <tr>
            <td width="65%"><a href="http://www.leadtochina.com/"><img src="http://www.leadtochina.com/images/newsletter/logo.jpg" border="0" alt="" /></a></td>
            <td width="35%" style="text-align:right;"><a href="http://messenger.providesupport.com/messenger/travelthing.html"><img src="http://www.leadtochina.com/images/newsletter/talk1.jpg" border="0" alt="" /></a></td>
          </tr>
          <tr>
            <td colspan="2" style="padding-right:44px; text-align:right;">
              <a href="http://www.leadtochina.com/travel/newsletter/preview?id=<?php echo $userinfo['id'];?>" style="width:70px; height:auto; float:right; background:url(http://www.leadtochina.com/images/newsletter/online.jpg) left center no-repeat; padding-left:14px; color:#e26700; text-decoration:underline; display:block;white-space:nowrap;">Read Online</a>
              <a href="mailto:yoursFriend@email.com" style="width:95px; height:auto; float:right; background:url(http://www.leadtochina.com/images/newsletter/send.jpg) left center no-repeat; padding-left:15px; color:#e26700; text-decoration:underline; display:block; padding-right:5px;white-space:nowrap;">Send to Friends</a></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td style="border-bottom:1px dashed #abada3; padding:13px 0px;"><table border="0" cellspacing="0" cellpadding="0" style="width:100%; height:auto; float:left; display:block; background:#ecf3fa; border:1px solid #dce0c5; padding:0px 4px;">
        <tbody>
          <tr>
            <td><table border="0" cellspacing="0" cellpadding="0" style="width:210px; height:auto; float:left; display:block;">
              <tbody>
                <tr style="padding:5px 0px;">
                  <td style="padding-right:10px;">
                    <?php //if($userinfo['user_logo']):?>
                    <!--<img src="http://www.leadtochina.com/images/newsletter/avatar/<?php echo $userinfo['user_logo'];?>" style="width:87px;height:73px;" border="0" />-->
                      <img src="http://www.leadtochina.com/images/newsletter/avatar.gif" style="width:87px;height:73px;" border="0" />
                    <?php //endif;?>
                  </td>
                  <td valign="top"><strong style="font-size:13px; color:#3f3f3f;">Welcome</strong><br />
                          <span style="color:#e16800; font-size:15px; font-weight:bold;"><?php echo $userinfo['name'];?></span> </td>
                </tr>
              </tbody>
            </table></td>
            <td><table border="0" cellspacing="0" cellpadding="0" style="height:auto; display:block; padding:0px 11px; border-left:1px solid #dce0c5; display:block; float:left;">
              <tbody>
                <tr>
                  <td><strong style="font-size:13px; color:#3f3f3f; display:block;">Benifits for you:</strong></td>
                </tr>
                <tr>
                  <td>
                      <?php 
                        $userinfo['benifits_for_you'] = 
                          'Book China Tour 3 months in advance, enjoy 5% of all packages
                           Repeat travelers enjoy 8% of all the tour packages
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
      <?php $top_tour_cities = unserialize($newsletter['top_tour_cities']); ?>
      <td style="padding-top:10px;"><table border="0" cellspacing="0" cellpadding="0" style="width:100%; height:auto; float:left; display:block;">
        <tbody>
          <tr>
            <td colspan="4" style=" border-bottom:1px solid #dce1c3; font-weight:bold; font-size:16px; color:#af0000; line-height:30px;">
              Top 8 China Tourist Cities for 2013 China Second Travel
            </td>
          </tr>
          <tr>
            <?php $i=0; foreach($top_tour_cities['title'] as $k=>$v):?>
            <?php if($i>3) continue;?>
            <td style="width:154px; height:auto; float:left; display:block; padding:10px 12px 10px 0px;">
              <a href="<?php echo $top_tour_cities['url'][$k];?>"><img style="width:157px; height:110px; display:block; float:left;" src="http://www.leadtochina.com/travel/images/uploads/newsletter/<?php echo $top_tour_cities['file'][$k];?>" border="0" alt="" /> 
              <strong style="width:100%; height:auto; float:left; color:#0080ff; text-decoration:underline; text-align:center; font-size:13px;"><?php echo $v;?></strong></a> 
              <span style="line-height:16px; color:#3f3f3f; width:100%; float:left;"><?php echo $top_tour_cities['desc'][$k];?></span>
            </td>
            <?php $i++;endforeach;?>
          </tr>
          <tr>
            <?php foreach($top_tour_cities['title'] as $k=>$v):?>
            <?php if($k<=3) continue;?>
            <td style="width:154px; height:auto; float:left; display:block; padding:10px 12px 10px 0px;">
              <a href="<?php echo $top_tour_cities['url'][$k];?>"><img style="width:157px; height:110px; display:block; float:left;" src="http://www.leadtochina.com/travel/images/uploads/newsletter/<?php echo $top_tour_cities['file'][$k];?>" border="0" alt="" /> 
              <strong style="width:100%; height:auto; float:left; color:#0080ff; text-decoration:underline; text-align:center; font-size:13px;"><?php echo $v;?></strong></a> 
              <span style="line-height:16px; color:#3f3f3f; width:100%; float:left;"><?php echo $top_tour_cities['desc'][$k];?></span>
            </td>
            <?php endforeach;?>
          </tr>
        </tbody>
      </table></td>
    </tr>
    
    <?php if($newsletter['banner']):?>
    <tr>
      <td><a href="<?php echo $newsletter['banner_link'];?>"><img src="http://www.leadtochina.com/travel/images/uploads/newsletter/<?php echo $newsletter['banner'];?>" /></a></td>
    </tr>
    <?php endif;?>

    <?php $more_china_tours = unserialize($newsletter['more_china_tours']);?>
    <tr>
      <td style="padding-top:30px; width:375px; height:auto; float:left;"><table border="0" cellspacing="0" cellpadding="0" style="border:1px solid #dce0c5; background:#f3f8d8; width:375px; display:block; float:left;">
        <tbody>
          <tr>
            <td style="border-bottom:1px solid #dce0c5; line-height:30px; font-size:15px; font-weight:bold; color:#af0000; padding-left:13px;">More China Golden Triangle Tour</td>
          </tr>
          <tr>
            <td><table border="0" cellspacing="0" cellpadding="0" style="width:375px; padding:2px 13px 15px 13px;">
              <tbody>
                <?php foreach($more_china_tours['title2'] as $k=>$title):?>
                <tr>
                  <td colspan="3"><a href="<?php echo $more_china_tours['url2'][$k];?>" style="font-size:12px; font-weight:bold; color:#363535; text-decoration:underline; padding:8px 0px 6px 0px; display:block;"><?php echo $title;?></a></td>
                </tr>
                <tr>
                  <?php $arr = explode(',',$more_china_tours['tags'][$k]);?>
                  <?php foreach($arr as $i=>$tag):?>
                  <?php
                    if($i == 0) $style = "line-height:25px; padding:0px 5px; background:#f2801f; display:block;white-space:nowrap; color:#ffffff; text-decoration:none;";
                    elseif($i == 1) $style="line-height:25px; padding:0px 5px; background:#316ac4; display:block; white-space:nowrap;color:#ffffff; text-decoration:none;";
                    else $style="line-height:25px; padding:0px 5px; background:#fe0000; display:block; color:#ffffff;white-space:nowrap; text-decoration:none;";
                  ?>
                  <td style="padding-right:5px;"><a href="###" style="<?php echo $style;?>"><?php echo $tag;?></a></td>
                  <?php endforeach;?>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table></td>
          </tr>
        </tbody>
      </table></td>
      <td style="padding-top:30px; width:274px; height:345px; float:right; display:block;"><a href="<?php echo $newsletter['more_banner_link'];?>"><img src="http://www.leadtochina.com/travel/images/uploads/newsletter/<?php echo $newsletter['more_banner'];?>" border="0" style="width:274px;height:345px;" /></a></td>
    </tr>

    <?php $theme_tours = unserialize($newsletter['theme_tours']);?>
    <tr>
      <td><table border="0" cellspacing="0" cellpadding="0" style="width:100%; padding:15px 0px; float:left;">
        <tbody>
          <tr>
            <?php foreach($theme_tours['title3'] as $k=>$v):?>
            <?php if($k>3) continue;?>
            <td style="width:25%; padding:5px 5px 5px 0px; text-align:center;"><a href="<?php echo $theme_tours['url3'][$k];?>" style=" text-decoration:underline; color:#0080ff; font-size:10px; font-weight:bold;"><?php echo $v;?></a></td>
            <?php endforeach;?>
          </tr>
          <tr>
           <?php foreach($theme_tours['title3'] as $k=>$v):?>
            <?php if($k<=3) continue;?>
            <td style="width:25%; padding:5px 5px 5px 0px; text-align:center;"><a href="<?php echo $theme_tours['url3'][$k];?>" style=" text-decoration:underline; color:#0080ff; font-size:10px; font-weight:bold;"><?php echo $v;?></a></td>
            <?php endforeach;?>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>Lead to China is a famous China tour operator based in China providing quality China Tour Services. We  specialize in 
        small group China tour packages and <a href="http://www.leadtochina.com/index.php?option=com_diy&template=customize1&view=customize" style="background:#ff0000; color:#ffee00; font-weight:bold; text-decoration:none; line-height:18px; display:inline-block; padding:0px 8px;">Tailor Make China Tours</a> that will truly fulfill the customer's wishes. We offer every kind of trip and tour, and we will carefully design every detail of the budget to make your China tour an unforgettable one!Join our China Tours with budget prices!</td>
    </tr>
    <tr>
      <td style=" padding:20px 60px 35px 40px;"><img src="http://www.leadtochina.com/images/newsletter/if.jpg" border="0" alt="" style="float:left;" /> <strong style=" font-size:13px; color:#af0000; float:left; padding-left:10px;">If you don’t want to receive this kind mails,please click</strong> <a href="http://www.leadtochina.com/newsletter/unsubscribe/" style="width:100px; height:27px; float:left; padding-left:10px;"><img src="http://www.leadtochina.com/images/newsletter/unsubscribe.jpg" border="0" alt="" /></a></td>
    </tr>
    <tr>
      <td style="height:50px; padding:0px 15px; line-height:50px; border-top:1px solid #dce0c5;"><span style="float:left; color:#211a1a; font-size:12px;">&copy; copyright 2012 Hefei Full View Travel Agency Ltd. All rights reserved.</span> 
        <a href="http://leadtochina.blogspot.com" style="width:29px; height:29px; display:block; float:right; margin-top:10px; margin-left:6px;"><img src="http://www.leadtochina.com/images/newsletter/y.jpg" width="29px" height="29px" border="0" alt="" /></a>
        <a href="http://facebook.com/lead2china" style="width:29px; height:29px; display:block; float:right; margin-top:10px; margin-left:6px;"><img src="http://www.leadtochina.com/images/newsletter/t.jpg" width="29px" height="29px" border="0" alt="" /></a>
        <a href="http://twitter.com/leadtochina" style="width:29px; height:29px; display:block; float:right; margin-top:10px; margin-left:6px;"><img src="http://www.leadtochina.com/images/newsletter/f.jpg" width="29px" height="29px" border="0" alt="" /></a>
        <a href="http://www.youtube.com/user/OnlineChinaTours1" style="width:29px; height:29px; display:block; float:right; margin-top:10px;"><img src="http://www.leadtochina.com/images/newsletter/b.jpg" width="29px" height="29px" border="0" alt="" /></a></td>
    </tr>
  </tbody>
</table>
<div style="display:none"><img style="width:1px;height:1px;" src="http://www.onlinechinatours.com/total_admin/open_email_status.php?mail=<?php echo urlencode($userinfo['email']);?>" /></div>
</body>
</html>
