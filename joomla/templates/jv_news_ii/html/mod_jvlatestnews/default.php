<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 
$i = 0;
$count_list = count($list);
?>
<div class="latestnews" style="width:100%">
<?php foreach ($list as $item) :  ?>
	<?php $i++; ?>
	<?php if($i == $count_list) : ?>
	<div class="latestnewsitems last-item" style="width:<?php echo $item->width; ?>%">
	<?php else : ?>
	<div class="latestnewsitems" style="width:<?php echo $item->width; ?>%">
	<?php endif; ?>	
		<?php if($params->get('showdate')==1) : ?>
		<span class="latestnewsdate"><?php echo $item->date; ?></span><br />
		<?php endif; ?>
		<?php if($params->get('thumb')==1 && $item->thumb) : ?>
		<img src="<?php echo $item->thumb; ?>" border="0" alt="<?php echo $item->title; ?>" />
		<?php endif; ?>
		<?php if($params->get('showtitle')==1) : ?>
		<h4><a href="<?php echo $item->link; ?>" class="latestnews<?php echo $params->get('moduleclass_sfx'); ?>"><?php echo $item->title; ?></a></h4>
		<?php endif; ?>
		<?php if($params->get('showintro')==1) echo $item->introtext; ?>
		<?php if($params->get('readmore')==1) : ?>
		<br /><a href="<?php echo $item->link; ?>" class="readon"><?php echo JText::sprintf('Read more...'); ?></a>
		<?php endif; ?>
	</div>
<?php endforeach; ?>
</div>
<div style="display: none;"><a href="http://www.leadtochina.com" title="Joomla Templates">Joomla Templates</a> and Joomla Extensions by OnlineChinaTours.Com</div>