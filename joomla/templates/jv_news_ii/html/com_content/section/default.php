<?php // @version $Id: default.php 11917 2009-05-29 19:37:05Z ian $
defined('_JEXEC') or die('Restricted access');
$cparams = JComponentHelper::getParams ('com_media');
$secid=$this->items[0]->sectionid;
?>

<?php if ($this->params->get('show_page_title',1)) : ?>
<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
	<h1><?php echo $this->escape($this->params->get('page_title')); ?></h1>


</div>

<div>	<?php if($secid==7){
	
		echo "<p>Do not know where to visit in China ? Which is the best time for China travel ? What to see in China ? What are the famous Chinese dishes ? Need a unique China trip ?You will find these answer here. Meanwhile, our professional trip advisor are offering the lastest and interesting travel info everyday. Get to know these must-see before travelling China will make your trip better.</p>";
	
	}
	?></div>

<?php endif; ?>

<?php if ($this->params->def('show_description', 1) || $this->params->def('show_description_image', 1)) : ?>
<div class="contentdescription<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
	<?php if ($this->params->get('show_description_image') && $this->section->image) : ?>
	<img src="<?php echo $this->baseurl . '/' . $this->escape($cparams->get('image_path')).'/'.$this->escape($this->section->image); ?>" class="image_<?php echo $this->escape($this->section->image_position); ?>" />
	<?php endif; ?>

</div>
<?php endif; ?>

<?php if ($this->params->def('show_categories', 1) && count($this->categories)) : ?>
<ul>
	<?php foreach ($this->categories as $category) :
		if (!$this->params->get('show_empty_categories') && !$category->numitems) :
			continue;
		endif; ?>
		<li>
			<a href="<?php echo $category->alias; ?>/" class="category"><?php echo $this->escape($category->title); ?></a>

			<?php if ($this->params->get('show_cat_num_articles')) : ?>
			<span class="small">
				( <?php if ($category->numitems==1) {
				echo $category->numitems ;	}
				else {
				echo $category->numitems ;} ?> )
			</span>
			<?php endif; ?>

	</li>
	<?php endforeach; ?>
</ul>
<?php endif;
?>


<form action="<?php echo $this->action; ?>" method="post" name="adminForm">
<div class="display">
	<?php echo JText::_('Display Num'); ?>&nbsp;
	<?php echo $this->pagination->getLimitBox(); ?>
</div>
<table class="category" cellpadding="8" cellspacing="8">

	
	<tr>
		<th class="sectiontableheader<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>" id="count">
			<?php echo JText::_('Num'); ?>
		</th>

		<th class="sectiontableheader<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>" id="tableOrdering">
			<?php echo JHTML::_('grid.sort', 'Item Title', 'a.title', $this->lists['order_Dir'], $this->lists['order']); ?>
		</th>

	</tr>


	<?php foreach ($this->items as $key=>$item) : ?>
	<tr class="sectiontableentry<?php echo ($item->odd + 1) . $this->escape($this->params->get('pageclass_sfx')); ?>">
		<td headers="count">
			<?php echo $key+1; ?>
		</td>

		<?php if ($this->params->get('show_title')) : ?>
		<td headers="tableOrdering">
			<?php if ($item->access <= $this->user->get('aid', 0)) : ?>

				<?php if($item->sectionid==7){

					$temp_link="/china-guide/".$item->alias.".html";

				}elseif($item->sectionid==1){

					$temp_link="/news/".$item->alias.".html";
				
				}?>
				<a href="<?php echo $temp_link;?>">
					<?php echo $this->escape($item->title); ?></a>
				<?php echo JHTML::_('icon.edit', $item, $this->params, $this->access);
			else :
				echo $item->title; ?> :
				<a href="<?php echo JRoute::_('index.php?option=com_user&task=register'); ?>">
					<?php echo JText::_('Register to read more...'); ?></a>
			<?php endif; ?>
		</td>
		<?php endif; ?>

	</tr>
	<?php endforeach; ?>

</table>

<p class="counter">
	<?php echo $this->pagination->getPagesCounter(); ?>
</p>
<?php echo $this->pagination->getPagesLinks();
?>

<input type="hidden" name="id" value="<?php echo (int)$this->section->id;?>" />
<input type="hidden" name="sectionid" value="<?php echo (int)$this->category->sectionid; ?>" />
<input type="hidden" name="task" value="<?php echo $this->lists['task']; ?>" />
<input type="hidden" name="limitstart" value="0" />
</form>
