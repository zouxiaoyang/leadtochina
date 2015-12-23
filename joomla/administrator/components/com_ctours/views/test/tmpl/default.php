<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip');$db	=& JFactory::getDBO(); ?>

<?php
	JToolBarHelper::title(  JText::_( '城市旅游' ) );
	//var_dump($this->list);
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

<table class="adminlist">
	<tr style="background-color:#d3d3d3;">
		<td width="%10">ID</td>
		<td width="%10">private/group</td>
		<td width="%10">days</td>
		<td width="%20">name</td>
		<td width="%20">route</td>
		<td width="%35">Tour Type</td>
	</tr>
	<?php foreach ($this->list as $k=>$v):?>
	<tr>
		<td><?php echo $v->id;?></td>
		<td><?php echo $v->tour_type;?></td>
		<td><?php echo $v->days;?></td>
		<td><?php echo $v->name;?></td>
		<td><?php echo $v->route;?></td>
		<td><input type="text" value="<?php echo $v->package_tour_type;?>" onblur="ajax_submit('<?php echo $v->id;?>',this)"/></td>
	</tr>
	<?php endforeach;?>
</table>

<script>
	function ajax_submit(id,obj){
	
		jq.post("index.php?option=com_ctours",{task:'update_package_tour_type',id:id, package_tour_type:jq(obj).val()},function(){
			
		});
	}
</script>
