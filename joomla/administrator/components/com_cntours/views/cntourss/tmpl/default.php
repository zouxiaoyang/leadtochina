<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip');$db	=& JFactory::getDBO(); ?>

<?php
	JToolBarHelper::title(  JText::_( '中国旅游' ) );
	JToolBarHelper::publishList();
	JToolBarHelper::unpublishList();
	JToolBarHelper::deleteList();
	JToolBarHelper::editListX();
	JToolBarHelper::addNewX();
	JToolBarHelper::editListX('copy_info','复制', false);
	
?>

<script src="/js/jquery-1.4.js"></script>
<script language="javascript" type="text/javascript">
   var jq = jQuery.noConflict();
   var request = false;
   try {
     request = new XMLHttpRequest();
   } catch (trymicrosoft) {
     try {
       request = new ActiveXObject("Msxml2.XMLHTTP");
     } catch (othermicrosoft) {
       try {
         request = new ActiveXObject("Microsoft.XMLHTTP");
       } catch (failed) {
         request = false;
       }  
     }
   }
   if (!request)
     alert("Error initializing XMLHttpRequest!");
   function SetHot(url) {

     

     var url = url;
	 
     request.open("GET", url, true);
     request.onreadystatechange = updatePage;
     request.send(null);
   }

   function updatePage() {
     if (request.readyState == 4) {
       if (request.status == 200) {
         var response = request.responseText;
         //document.getElementById("order").value = response[0];
			alert(response);
			document.location.reload();
       } else
         alert("status is " + request.status);
     }
   }

</script>




<form action="index.php?option=com_cntours" method="post" name="adminForm">
<table>
	<tr>
		<td align="left" width="60%">
			<?php echo JText::_( 'Filter' ); ?>:
			<input type="text" name="search" id="search" value="<?php echo htmlspecialchars($this->search);?>" class="text_area" onchange="document.adminForm.submit();" />
      类型：<select name="categoried_str" onchange="adminForm.submit()">
        <option value="">请选择</option>
        <?php foreach($this->categories as $v):?>
        <option value="<?php echo $v->id;?>" <?php if($v->id==$this->cat_id_search) echo "selected=\"selected\""?>><?php echo $v->title;?></option>
        <?php endforeach;?>
      </select>
			<button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
			<button onclick="document.getElementById('search').value='';this.form.getElementById('filter_state').value='';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button> &nbsp;共<?php echo $this->total;?>条记录
		</td>
		<td align="left">
			<select name="season" id="season">
				<option value="0">All</option>
				<option value="1">Spring</option>
				<option value="2">Summer</option>
				<option value="3">Autumn</option>
				<option value="4">Winter</option>
			</select>
		</td>
		<td align="left" width="40%">
			<input type="button" onClick="javascript:if(document.adminForm.boxchecked.value==0){alert('请从列表中选择一个来');}else{ submitbutton('season_change')}" id="season_change" name="season_change" value="修改"/>
		</td>
		<td nowrap="nowrap" align="right">
			<?php echo $this->lists['state']; ?>
		</td>		
		
	</tr>
</table>
<div id="tablecell">
	<table class="adminlist">
	<thead>
		<tr>
			<th width="3%">
				<?php echo JText::_( 'NUM' ); ?>
			</th>
			<th width="2%">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
			</th>
			<th width="20%">
				套餐名称
			</th>
			<th width="10%" align="center">
				设置浏览数(views)
			</th>
			<th width="15%" align="center">
				套餐类型
			</th>
			<th width="10%" align="center">
				编辑详细行程 
			</th>
			<th width="10%" align="center">
				编辑套餐价格 
			</th>
			<th width="10%" align="center">
				套餐图片 
			</th>
			<th width="10%" align="center">
				testimonial
			</th>		
			<th width="2%" nowrap="nowrap">
		
			</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="8">
				<?php echo $this->pagination->getListFooter(); ?>
			</td>
		</tr>
	</tfoot>
	<tbody>
	<?php
	$k = 0;
	//$db					=& JFactory::getDBO();
	for ($i=0, $n=count( $this->items ); $i < $n; $i++)
	{
		$row = &$this->items[$i];

		$category_id=$row->categorieid_str;
		$strpos=strpos($category_id,',');



		if($strpos===false){
			
			$db->setQuery( "SELECT parent_id FROM jos_categories WHERE id={$category_id}");

			$c_row=$db->loadAssoc();
//假如是China Small Groups类型的话。换另一个模板显示
			if($c_row['parent_id']==68 OR $category_id==68){
			
				$is_small="editsmprice";
			}else{
			
				$is_small="editprice";
			}
			
		}		


		$link1     = JRoute::_( 'index.php?option=com_cntours&view=cntours&task=edit&cid[]='. $row->id );
		$checked 	= JHTML::_('grid.checkedout',   $row, $i );
		$des=$row->description;
		if(strlen($des)>40){
			$des=htmlspecialchars(mb_strimwidth($des,0,39,'..',"utf-8"));
		}else{
			
			$des=htmlspecialchars($des);
		}

		//$published 	= JHTML::_('grid.published', $row, $i );
	?>
		<tr class="<?php echo "row$k"; ?>">
			<td>
				<?php echo $this->pagination->getRowOffset( $i ); ?>
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
			<?php if (  JTable::isCheckedOut($this->user->get ('id'), $row->checked_out )  ) {
				echo  $row->name;
			} else {
				?>
				
				<a href="<?php echo $link1  ?>">
					<?php echo $row->name; ?></a>
				<?php
			}
			?>
			</td>
			<td align="center">
				<input type="text" id="views_<?php echo $row->id;?>" onblur="ajax_views_change('<?php echo $row->id;?>',this)" name="views[]" size="8" value="<?php echo $row->views;?>" />
			</td>
			<td align="center">
				<?php echo $row->categorie_name_str; ?>
			</td>
			<td align="center">
				<a href="<?php echo 'index.php?option=com_cntours&view=cntours&c=route&task=editroute&cid[]='. $row->id?>">编辑行程</a>
			</td>
			<td align="center">
				<a href="<?php if($row->category_parentid==68){
				
				echo "index.php?option=com_cntours&c=price&view=price&task=editsmprice&cid[]=". $row->id;
					
			}else{
			
				echo "index.php?option=com_cntours&c=price&view=price&task=editprice&cid[]=". $row->id;
			
			}
				?>">编辑价格</a>				
			</td>
			<td align="center">
			<?php 	
			$pic_num=$db->getOne("select count(id) from jos_cos_uploadpic where packageid='$row->id'");		
			?>
				<a href="<?php echo "index.php?option=com_cntours&c=upload&view=uploadpic&task=upload&cid[]=". $row->id?>">上传图片(<?php echo $pic_num;?>)</a>				
			</td>
			<td align="center">
			<?php 
			$db=&JFactory::getDbo();
			$sql="select count(*) from jos_cos_testimonisal where packageid=".$row->id;	
			$db->setQuery($sql);
			$total=$db->loadResult();
			?>
				<a href="<?php echo "index.php?option=com_testimonisals&packageid=". $row->id."&chinatours=1";?>">Testimonisals管理(<?php echo $total;?>)</a>				
			</td>
			
			<td align="center">
				<?php echo $row->id; ?>
			</td>
		</tr>
		<?php
			$k = 1 - $k;
		}
		?>
	</tbody>
	</table>
</div>

	<input type="hidden" name="option" value="com_cntours" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<script>
	function ajax_views_change(id,obj){
	
		jq.post("index.php?option=com_cntours",{task:'update_views',id:id, views:jq(obj).val()},function(){
			
		});
	}
</script>
