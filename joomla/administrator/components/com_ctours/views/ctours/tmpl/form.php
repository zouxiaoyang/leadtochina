<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
	$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
	$edit=JRequest::getVar( 'edit', true );
	JArrayHelper::toInteger($cid, array(0));
	$editor = &Jfactory::getEditor();

	$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

	JToolBarHelper::title(  JText::_( '编辑城市旅游' ).': <small><small>[ ' . $text.' ]</small></small>' );
	JToolBarHelper::Preview('index.php?option=com_ctours&controller=ctours&cid[]='.$cid[0]);
	JToolBarHelper::save();
	//JToolBarHelper::apply();
	if ($edit) {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	} else {
		JToolBarHelper::cancel();
	}
	JToolBarHelper::help( 'screen.ctours.edit' );
    JFilterOutput::objectHTMLSafe( $this->poll, ENT_QUOTES );
    
    include_once(JPATH_ROOT.'/config/beijing_tours_config.php');
    include_once(JPATH_ROOT.'/config/search_config.php');
?>
<script src="/js/jquery-1.3.2.min.js"></script>
<script>
  var jq = jQuery.noConflict();
</script>
<script language="javascript" type="text/javascript">
    window.addEvent('domready', function() {
          $$("input[name='days2']").addEvent('click', function(event) {
            $$("input[name='days']").setProperty('value','');
          });
    });
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}
		// do field validation
		if (form.name.value == "") {
			alert( "<?php echo JText::_( 'ctours must have a title', true ); ?>" );
		} else{
			submitform( pressbutton );
		}
	}
</script>
<form action="index.php" method="post" name="adminForm" enctype="multipart/form-data">

<div class="col width-60">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Options' ); ?></legend>
	<table class="admintable">
	

		
		<tr>
			<td class="key">
				<label for="polloption">
					套餐名称
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="name" id="name" value="<?php echo $this->options['0']->name;?>" size="60" />
			</td>
		</tr>
		<tr>


		<tr>
			<td class="key">
				<label for="polloption">
					套餐代码
				</label>
			</td>
			<td>
		
				<input class="inputbox" type="text" name="package_code" id="package_code" value="<?php echo $this->options['0']->package_code;?>" size="60" />
			</td>
		</tr>
			<td class="key">
				<label for="polloption">
					套餐类型 
				</label>
			</td>
			<td>
            <select name='category_parentid' id='category_parentid'>
                <option value="0">请选择</option>
                <?php foreach($this->category_list as $v):?>
                  <option value="<?php echo $v->id; ?>" <?php if($v->id == $this->options[0]->category_parentid) echo 'selected="selected"';?>><?php echo $v->title;?></option>                
                <?php endforeach;?>
            </select>
            <select name='categorieid_str' id='categorieid_str'>
                <?php foreach($this->sub_category_list as $v):?>
                  <option value="<?php echo $v->id; ?>" <?php if($v->id == $this->options[0]->categorieid_str) echo 'selected="selected"';?>><?php echo $v->title;?></option>                
                <?php endforeach;?>
            </select>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					套餐路线
				</label>
			</td>
			<td>
			<input class="inputbox" type="text" name="route" id="route" value="<?php echo $this->options['0']->route;?>" size="60" />		
				
			</td>
		</tr>
    <tr>
      <td class="key"><label>Starting City:</label></td>
      <td>
      <select name="start_city">
        <option value="0">请选择</option>
        <option value="shanghai" <?php if($this->options[0]->start_city == 'shanghai'):?>selected="selected"<?php endif;?>>shanghai</option> 
        <option value="beijing" <?php if($this->options[0]->start_city == 'beijing'):?>selected="selected"<?php endif;?>>beijing</option> 
        <option value="hongkong" <?php if($this->options[0]->start_city == 'hongkong'):?>selected="selected"<?php endif;?>>hongkong</option> 
      </select>
      </td>
    </tr>
    <tr>
      <td class="key"><label>Ending City:</label></td>
      <td>
      <select name="end_city">
        <option value="0">请选择</option>
        <option value="shanghai" <?php if($this->options[0]->end_city == 'shanghai'):?>selected="selected"<?php endif;?>>shanghai</option> 
        <option value="beijing" <?php if($this->options[0]->end_city == 'beijing'):?>selected="selected"<?php endif;?>>beijing</option> 
        <option value="hongkong" <?php if($this->options[0]->end_city == 'hongkong'):?>selected="selected"<?php endif;?>>hongkong</option> 
      </select>
      </td>
    </tr>

    <tr>
      <td class="key">原价：</td>
	    <td>
			<input type="text" name="price_yuan" value="<?php if($this->options[0]->price_yuan) echo $this->options[0]->price_yuan;?>" />
			</td>
		</tr>

<!--
		<tr>
	  <td class="key">
				<label>
          搜索页面4个HOT行程
				</label>
			</td>
			<td>
			<input type="checkbox" name="hot" <?php if($this->options[0]->hot==1):?>checked="checked"<?php endif;?> value="1">
			原价：<input type="text" name="price_yuan" value="<?php if($this->options[0]->price_yuan) echo $this->options[0]->price_yuan;?>" />
			</td>
		</tr>
    <tr>
	  <td class="key">
				<label>
          北京首页4个TOP行程
				</label>
			</td>
			<td>
			<input type="text" name="top" size="10" value="<?php echo $this->options[0]->top;?>"/> 输入正整数，数字越小越靠前
			</td>
		</tr>
    <tr>
	  <td class="key">
				<label>
          北京首页推荐RECOMMEND
				</label>
			</td>
			<td>
			<input type="checkbox" name="recommend" <?php if($this->options[0]->recommend==1):?>checked="checked"<?php endif;?> value="1">
			</td>
		</tr>

    <tr>
	  <td class="key">
				<label>
          单城市推荐
				</label>
			</td>
			<td>
			<input type="checkbox" name="city_recommend" <?php if($this->options[0]->city_recommend==1):?>checked="checked"<?php endif;?> value="1">
			</td>
		</tr>

    <td class="key">
				<label>
          行程hot
				</label>
			</td>
			<td>
			<input type="checkbox" name="hot_tour" <?php if($this->options[0]->hot_tour==1):?>checked="checked"<?php endif;?> value="1">
			</td>
		</tr>

    <td class="key">
				<label>
          首页推荐 
				</label>
			</td>
			<td>
			<input type="checkbox" name="index_recommend" <?php if($this->options[0]->index_recommend==1):?>checked="checked"<?php endif;?> value="1"> ChinaTours
			<input type="checkbox" name="index_recommend" <?php if($this->options[0]->index_recommend==2):?>checked="checked"<?php endif;?> value="2"> CityTours 
			 <input type="text" name="index_recommend_order" value="<?php echo $this->options[0]->index_recommend_order;?>"/> 排序（数字越大越靠前）
			</td>
	
		</tr>
-->

		<tr><td class="key">
				<label>
			图片编号
				</label>
			</td>
			<td>
			<input type="text" size="69" value="<?php echo $this->options[0]->lightbox; ?>" id="lightbox" name="lightbox">
			</td>
		</tr>

		<tr>
			<td class="key">
				<label for="polloption">
					景点
				</label>
			</td>
			<td> 
<textarea name="attractions" id="attractions" cols="60" rows="10"><?php echo $this->options[0]->attractions; ?></textarea>			
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
					Recommanded Reason
				</label>
			</td>
			<td>
              <textarea name="recommand_reason" id="recommand_reason" cols="60" rows="6"><?php echo $this->options[0]->recommand_reason; ?></textarea>			
			</td>
		</tr>
<!--
		<tr>
			<td class="key">
				<label for="Promotion">
					Promotion
				</label>
			</td>
			<td>
              <textarea name="promotion" id="promotion" cols="60" rows="6"><?php echo $this->options[0]->promotion; ?></textarea>			
			</td>
		</tr>
-->
		<tr>
			<td class="key">
				<label for="polloption">
					Tour Type
				</label>
			</td>
			<td>
			<input type="text" name="package_tour_type" id="package_tour_type" value="<?php echo $this->options[0]->package_tour_type?>">
				
			</td>
		</tr>		
		<tr>
			<td class="key">
				<label for="polloption">
					适合人群
				</label>
			</td>
			<td>
			<input type="text" name="targets" id="targets" value="<?php echo $this->options[0]->targets?>">
				
			</td>
		</tr>		
		<tr>
			<td class="key">
				<label for="polloption">
					天数
				</label>
			</td>
			<td>
			<input type="text" name="days" id="days" value="<?php echo $this->options[0]->days?>">
                               半日游<input type="radio" name="is_half_day"  value="1" <?php if($this->options[0]->is_half_day == 1):?>checked="checked"<?php endif;?> />
			</td>
		</tr>		
		<tr>
			<td class="key">
				<label for="polloption">
					Departs
				</label>
			</td>
			<td>
			<input type="text" name="departs" id="departs" value="<?php echo $this->options[0]->departs?>">
				
			</td>
		</tr>
		<div>
        <tr class="beijing_tours">
          <td class="key"><label>By Tour Type</label></td>
          <td>
                                Private Tours<input type="checkbox" name="tour_type" value="1" <?php if($this->options[0]->tour_type == 1):?>checked="checked"<?php endif;?> />
                                Group Tours<input type="checkbox" name="tour_type" value=2 <?php if($this->options[0]->tour_type == 2):?>checked="checked"<?php endif;?> />
          </td>
        </tr>
        <tr class="beijing_tours" style="display:none">
          <td class="key"><label>北京旅游封面页private group推荐</label></td>
          <td>
            Beijing Private Tours<input type="checkbox" name="beijing_tour_type" value="1" <?php if($this->options[0]->beijing_tour_type == 1):?>checked="checked"<?php endif;?> />
            Beijing Group Tours<input type="checkbox" name="beijing_tour_type" value=2 <?php if($this->options[0]->beijing_tour_type == 2):?>checked="checked"<?php endif;?> />
          </td>
        </tr>


<!--
        <tr class="beijing_tours">
          <td class="key"><label>By Group</label></td>
          <td>
           <?php $by_group = explode(',', $this->options[0]->by_group);?>
           <?php foreach($groups as $k=>$v):?>
           <?php echo $v;?><input type="checkbox" name="by_group[]" value="<?php echo $k;?>" <?php if(in_array($k, $by_group)):?>checked="checked"<?php endif;?> />
           <?php endforeach;?>
          </td>
        </tr>
        <tr class="beijing_tours">
          <td class="key"><label>By Transportation:</label></td>
          <td>
            <?php $vehicle_type = explode(',', $this->options[0]->vehicle_type);?>
            <?php foreach($vehicles as $k=>$v):?>
              <?php echo $v;?><input type="checkbox" name="vehicle_type[]" value="<?php echo $k;?>" <?php if(in_array($k, $vehicle_type)):?>checked="checked"<?php endif;?> />
            <?php endforeach;?>
          </td>
        </tr>
-->

        <tr class="beijing_tours">
          <td class="key"><label>Beijing Side Trips:</label></td>
          <td>
            <?php $choose_destination = explode(',', $this->options[0]->destination_addr);?>
            <?php foreach($destination as $k=>$v):?>
             <span style="float:left;width:160px"> <?php echo $v;?><input type="checkbox" id="destination_<?php echo $k;?>" name="destination_addr[]" value="<?php echo $k;?>" <?php if(in_array($k, $choose_destination)):?>checked="checked"<?php endif;?> /></span>
            <?php endforeach;?>
          </td>
        </tr>
        
        <?php $choose_one_category = explode(',', $this->options[0]->one_category);?>
        <tr class="beijing_tours" id="Great_wall" style="background-color:#B5AA9D;display:none;">
          <td class="key"><label>Great Wall Tours 列表页分类:</label></td>
          <td id="great_wall_tour">            
            <?php foreach($one_category['great_wall_tour'] as $k=>$v):?>
              <span style="float:left;width:180px"> <?php echo $v;?><input type="checkbox" name="one_category[]" value="<?php echo $k;?>" <?php if(in_array($k, $choose_one_category)):?>checked="checked"<?php endif;?> /></span>
            <?php endforeach;?>
          </td>
        </tr>
        
        <tr class="beijing_tours" id="Beijing_Xian" style="background-color:#B5AA9D;display:none;">
          <td class="key"><label>Beijing Xian Tours列表页分类:</label></td>
          <td id="Beijing_Xian_tour">            
            <?php foreach($one_category['beijing_xian_tour'] as $k=>$v):?>
              <?php echo $v;?><input type="checkbox" name="one_category[]" value="<?php echo $k;?>" <?php if(in_array($k, $choose_one_category)):?>checked="checked"<?php endif;?> />
            <?php endforeach;?>
          </td>
        </tr>
        
        <tr class="beijing_tours" id="Beijing_Shanghai" style="background-color:#B5AA9D;display:none;">
          <td class="key"><label>Beijing Shanghai Tours列表页分类:</label></td>
          <td id="Beijing_Shanghai_tour">            
            <?php foreach($one_category['beijing_shanghai_tour'] as $k=>$v):?>
              <?php echo $v;?><input type="checkbox" name="one_category[]" value="<?php echo $k;?>" <?php if(in_array($k, $choose_one_category)):?>checked="checked"<?php endif;?> />
            <?php endforeach;?>
          </td>
        </tr>
        
        <tr class="beijing_tours" id="Beijing_Xian_Shanghai" style="background-color:#B5AA9D;display:none;">
          <td class="key"><label>Beijing Xian Shanghai Tours列表页分类:</label></td>
          <td id="Beijing_Xian_Shanghai_tour">            
            <?php foreach($one_category['beijing_xian_shanghai_tour'] as $k=>$v):?>
              <?php echo $v;?><input type="checkbox" name="one_category[]" value="<?php echo $k;?>" <?php if(in_array($k, $choose_one_category)):?>checked="checked"<?php endif;?> />
            <?php endforeach;?>
          </td>
        </tr>
        
        <?php $choose_two_category = explode(',', $this->options[0]->two_category);?>
      <!--
        <tr class="beijing_tours" id="Two_category" style="background-color:#B5AA9D;display:none;">
          <td class="key"><label>北京列表页二级分类:</label></td>
          <td id="Two_category_tour">
          	<span id="two_beijing_xian" style="display:none;float:left;height:30px;width:500px;">
          		北京西安旅游二级分类：
          		<select name="two_category[]" id="two_cate_select">
          			<option value="">请选择天数</option>
          			<?php foreach ($two_category as $k=>$v):?>
          			<?php if($k>=6):?>
          			<option value="<?php echo $k;?>" <?php if(in_array($k, $choose_two_category)):?>selected="selected"<?php endif;?>><?php echo $v;?></option>
          			<?php endif;?>
          			<?php endforeach;?>
          		</select>
          	</span>
          	<span id="two_beijing_shanghai" style="display:none;float:left;height:30px;width:500px;">
          		北京上海旅游二级分类：
          		<?php foreach($two_category['beijing_shanghai_tour'] as $k=>$v):?>    
              	<?php echo $v;?><input type="checkbox" name="two_category[]" value="<?php echo $k;?>" <?php if(in_array($k, $choose_two_category)):?>checked="checked"<?php endif;?> />      
           		<?php endforeach;?>
          	</span>
          
          	<span id="two_beijing_xian_shanghai" style="display:none;float:left;height:30px;width:500px;">
          		北京西安上海旅游二级分类：
          		<?php foreach($two_category['beijing_xian_shanghai_tour'] as $k=>$v):?>            	
              <?php echo $v;?><input type="checkbox" name="two_category[]" value="<?php echo $k;?>" <?php if(in_array($k, $choose_two_category)):?>checked="checked"<?php endif;?> />              
            <?php endforeach;?>
          	</span>            
          </td>
        </tr>
      -->
        
        <tr class="beijing_tours">
          <td class="key"><label>By Theme</label></td>
          <td>
            <?php $tag_ids = explode(',', $this->options[0]->tour_tagids);?>
            <?php foreach($this->tags as $tag):?>
              <div style="width:120px;float:left;white-space:nowrap;"><input type="checkbox" name="tagids[] " value="<?php echo $tag->id;;?>" <?php if(in_array($tag->id, $tag_ids)):?>checked="checked"<?php endif;?> /><span title="<?php echo $tag->name;?>"><?php echo $tag->name;?></span></div>
            <?php endforeach;?>
          </td>
        </tr>
        <tr class="beijing_tours" style="display:none">
          <td class="key"><label>主题子标签</label></td>
          <td>
            <?php $subtag_ids = explode(',', $this->options[0]->tour_subtag_ids);?>
            <?php foreach($this->sub_tags as $tag):?>
            <div style="width:130px;white-space:nowrap;float:left;"><input type="checkbox" name="subtag_ids[] " value="<?php echo $tag->id;;?>" <?php if(in_array($tag->id, $subtag_ids)):?>checked="checked"<?php endif;?> /><span title="<?php echo $tag->name;?>"><?php echo $tag->name;?></span></div>
            <?php endforeach;?>
          </td>
        </tr> 
        
        
          <tr class="non_beijing">
          <td class="key" style="background:#cdcdcd"><table for="polloption">Theme:</table></td>
          <td style="background:#cdcdcd">
              <?php $theme_arr = explode(',', $this->options[0]->theme);?>
          		<?php foreach ($theme_list as $k=>$v):?>
                <span style="width:160px;float:left;"><?php echo $v;?><input type="checkbox" name="theme[]" value="<?php echo $k;?>" <?php if(in_array($k, $theme_arr)) echo 'checked="checked"'; ?> /></span>
          		<?php endforeach;?>
          </td>
        </tr>
        <tr class="non_beijing">
          <td class="key" style="background:#cdcdcd"><table for="polloption">China Highlights:</table></td>
          <td style="background:#cdcdcd">
              <?php $highlight_arr = explode(',', $this->options[0]->highlight);?>
          		<?php foreach ($china_highlights_list as $k=>$v):?>
                <span style="width:150px;float:left;"><?php echo $v;?><input type="checkbox" name="highlight[]" value="<?php echo $k;?>" <?php if(in_array($k, $highlight_arr)) echo 'checked="checked"'; ?> /></span>
          		<?php endforeach;?>
          	</select>
          </td>
        </tr>
        <tr class="non_beijing">
          <td class="key" style="background:#cdcdcd"><table for="polloption">Season:</table></td>
          <td style="background:#cdcdcd">
          	<select name="season" id="season">
          		<option value="">请指派season</option>
          		<?php foreach ($season_list as $k=>$v):?>
          		<option value="<?php echo $k;?>" <?php if($this->options['0']->season==$k):?>selected="selected"<?php endif;?>><?php echo $v;?></option>
          		<?php endforeach;?>
          	</select>
          </td>
        </tr>
        
        <tr>
          <td class="key"><label>排序</label></td>
          <td>
            <input type="text" name="sort" value="<?php echo $this->options[0]->sort;?>" />
          </td>
        </tr>
<!--
         <tr>
			<td class="key">
				<label for="polloption">
					facebook分享数
				</label>
			</td>
			<td>			
				<input type="text" name="fnum" id="fnum" value="<?php echo $this->options[0]->fnum;?>">
			</td>
		</tr>
-->
		<tr>
			<td class="key">
				<label for="polloption">
					Tips
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'tips',  htmlspecialchars($this->options['0']->tips,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr style="display:none">
			<td class="key">
				<label for="polloption">
					套餐行程特色
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'route_Intro',  htmlspecialchars($this->options['0']->route_Intro,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
        价格包含
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'tour_intro',  htmlspecialchars($this->options['0']->tour_intro,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="polloption">
          top10tours页面的overview
				</label>
			</td>
			<td>
			<?php 	echo $editor->display( 'note',  htmlspecialchars($this->options['0']->note,ENT_QUOTES), '550', '300', '60', '20', array('pagebreak', 'readmore'));?>
				
			</td>
		</tr>		
		<tr>
			<td class="key">
				<label for="polloption">
					行程详情页图片
				</label>
			</td>
			<td>
			<input type="file" name="ufile" id="ufile" size=50><span>图片大小：235x220</span>
	        <div>
              <?php if($this->options[0]->ufile):?>
                <img src="/<?php echo $this->options[0]->filedir;?><?php echo $this->options[0]->ufile;?>"  width="235" height="220"/>
              <?php endif;?>
            </div>
			</td>
		</tr>	
        <tr>
          <td class="key">
              <label for="polloption">行程列表中图片</label>
           </td>
           <td>
            <input type="file" name="pic" id="pic" size=50><span>图片大小：140x117</span>
               <div>
                    <?php if($this->options[0]->pic):?>
                      <img src="/<?php echo $this->options[0]->filedir;?><?php echo $this->options[0]->pic;?>"  width="140" height="117"/>
                    <?php endif;?>
              </div>
            </td>
          </tr>
          <tr>
          <td class="key">
             <label for="polloption">newsearch搜索列表页图片</label>
           </td>
           <td>
            <input type="file" name="pic_big" id="pic_big" size=50><span>图片大小：213x266</span>
               <div><br/>
                    <?php if($this->options[0]->pic_big):?>
                      <img src="/<?php echo $this->options[0]->filedir;?><?php echo $this->options[0]->pic_big;?>" width="213" height="266"/>
                    <?php endif;?>
              </div>
            </td>
          </tr> 
           <tr>
          <td class="key">
             <label for="polloption">newsearch搜索列表页图片ALT信息</label>
           </td>
           <td>
            <input type="inputbox" name="pic_big_alt" id="pic_big_alt" value="<?php echo $this->options[0]->pic_big_alt;?>" size=50>
             </td>
          </tr>

 <tr>
			<td class="key"><label>新版游轮首页行程图片推荐</label></td>
			<td>
      <input type="file" name="cruise_recommend_pic" size=50><span>图片大小：150x120</span>
      <div><br/>
      <?php if($this->options[0]->cruise_recommend_pic):?>
      <img src="/<?php echo $this->options[0]->filedir;?><?php echo $this->options[0]->cruise_recommend_pic;?>" />
      <br/>
      <a href="javascript:;" onClick="ajax_del_picture('<?php echo $this->options[0]->id;?>','<?php echo $this->options[0]->filedir;?>','<?php echo $this->options[0]->cruise_recommend_pic;?>','cruise_recommend_pic',this)">删除</a>
      <?php endif;?>
      </div>
      </td>
</tr>
<!--
     <tr>
			<td class="key"><label>北京旅游首页4个Top图片</label></td>
			<td>
      <input type="file" name="pic_beijing_top" id="pic_beijing_top" size=50><span>图片大小：210x165</span>
      <div><br/>
      <?php if($this->options[0]->pic_beijing_top):?>
      <img src="/<?php echo $this->options[0]->filedir;?><?php echo $this->options[0]->pic_beijing_top;?>" width="213" height="266"/>
      <br/>
      <a href="javascript:;" onClick="ajax_del_picture('<?php echo $this->options[0]->id;?>','<?php echo $this->options[0]->filedir;?>','<?php echo $this->options[0]->pic_beijing_top;?>','pic_beijing_top',this)">删除</a>
      <?php endif;?>
      </div>
      </td>
		</tr>									
-->
	</table>
	</fieldset>
</div>
<div class="col width-35" style="float:right;">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Details' ); ?></legend>
	<table class="admintable">
		<tr>
			<td width="110" class="key">
				<label for="title">
					页面Title:
				</label>
			</td>
			<td>
						<textarea name="seo_title" id="seo_title" cols="40" rows="5"><?php echo $this->options[0]->seo_title; ?></textarea>

			</td>
		</tr>
		<tr>
			<td width="110" class="key">
				<label for="alias">
					页面Key:
				</label>
			</td>
			<td>
				<textarea name="seo_key" id="seo_key" cols="40" rows="5"><?php echo $this->options[0]->seo_key; ?></textarea>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="lag">
					页面Description:
				</label>
			</td>
			<td>
				<textarea name="seo_description" id="seo_description" cols="40" rows="5"><?php echo $this->options[0]->seo_description; ?></textarea>
				
			</td>
		</tr>
		
	</table>
	</fieldset>
</div>
<div class="clr"></div>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_ctours" />
	<input type="hidden" name="package_type" value="2" />
	<input type="hidden"  name="id" value="<?php echo $this->options[0]->id; ?>" />
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>

<script type="text/javascript">
  jQuery("#category_parentid").change(function(){
	 // change_display();
    jQuery.post('index.php?option=com_ctours&task=getSubCategories', {parent_id: jQuery(this).val()}, function(ret){
      jQuery("#categorieid_str").html(ret);
    })
  }) 

  /*
  jQuery(document).ready(function(){
		change_display();
	  });

  function change_display(){
	  if(jQuery("#category_parentid").val()=='77'){
		  jQuery(".beijing_tours").show();
		  jQuery(".non_beijing").hide();
		  }else{
			  jQuery(".beijing_tours").hide();
			  jQuery(".non_beijing").show();
			  }
	  }
  */
</script>
<script>
jQuery("input[name='vehicle_type[]']").click(function(){
	var length=jQuery("input[name='vehicle_type[]']:checked").length;
	  if(length>6){
		 alert("最多只能选择6个！");
		 return false;
		}
});

	//页面载入完成判断是否显示Great_wall_tour子类
	(function($){
	$(document).ready(function(){
		if($("#destination_1").attr('checked')){
			$("#Great_wall").show();
			}
		});	

	//页面载入完成判断是否显示Beijing Xian Tours子类
	$(document).ready(function(){
    /*
		if($("#destination_2").attr('checked')){
			$("#Beijing_Xian").show();
			$("#Two_category").show();
			$("#two_beijing_xian").show();
			}
     */
		});

	//页面载入完成判断是否显示Beijing Shanghai Tours子类
	$(document).ready(function(){
		if($("#destination_5").attr('checked')){
			$("#Beijing_Shanghai").show();
			$("#Two_category").show();
			$("#two_beijing_shanghai").show();
			}
		});

	//页面载入完成判断是否显示Beijing Xian Shanghai Tours子类
	$(document).ready(function(){
		if($("#destination_12").attr('checked')){
			$("#Beijing_Xian_Shanghai").show();
			$("#Two_category").show();
			$("#two_beijing_xian_shanghai").show();
			}
		});
	
	$("#destination_1").click(function(){
		if($("#destination_1").attr('checked')){
				$("#Great_wall").show();
			}else{				
				$("#great_wall_tour").find("input:checked").attr('checked',false);
				$("#Great_wall").hide();
				}
		});	

	$("#destination_2").click(function(){
		if($("#destination_2").attr('checked')){
				$("#Beijing_Xian").show();
				$("#Two_category").show();
				$("#two_beijing_xian").show();
			}else{				
				$("#Beijing_Xian_tour").find("input:checked").attr('checked',false);
				$("#two_cate_select").val('');
				$("#Beijing_Xian").hide();
				$("#two_beijing_xian").hide();
				}
		});
	
	$("#destination_5").click(function(){
		if($("#destination_5").attr('checked')){
				$("#Beijing_Shanghai").show();
				$("#Two_category").show();
				$("#two_beijing_shanghai").show();
			}else{				
				$("#Beijing_Shanghai_tour").find("input:checked").attr('checked',false);				
				$("#Beijing_Shanghai").hide();
				$("#two_beijing_shanghai").find("input:checked").attr('checked',false);
				$("#two_beijing_shanghai").hide();
				}
		});

	$("#destination_12").click(function(){
		if($("#destination_12").attr('checked')){
				$("#Beijing_Xian_Shanghai").show();
				$("#Two_category").show();
				$("#two_beijing_xian_shanghai").show();
			}else{				
				$("#Beijing_Xian_Shanghai_tour").find("input:checked").attr('checked',false);
				$("#Beijing_Xian_Shanghai").hide();
				$("#two_beijing_xian_shanghai").find("input:checked").attr('checked',false);
				$("#two_beijing_xian_shanghai").hide();
				}
		});

	
})(jQuery);

	function ajax_del_picture(id,pic_dir,pic_name,pic_field,obj){
		if(!confirm("你真的要删除吗?")){
				exit;
			}
		jQuery.post("index.php?option=com_ctours&task=ajax_del_picture",{id:id,pic_dir:pic_dir,pic_name:pic_name,pic_field:pic_field},function(ret){
				if(ret=='ok'){
					jQuery(obj).parent("div").html('');
					alert("删除成功！");
				}else{
					alert("删除错误！");
				}
			});
	}
</script>
