<?php
class DestionsController extends Controller
{
	public function actionIndex(){
		// seo;
		$title = 'China City Tours, China Holidays, Tour to Beijing, Shanghai, Guilin';
		$k = 'tour of china, china holidays, visit china, china city tours, china tour operator';
		$d = 'China Tour Operator offering China City Tours to Beijing, Shanghai, Guilin, Tibet and other hot destinations with great value. 24/7 Onli
  ne Support.';
		Seo::_seo($this,$title,$k,$d);
		$this->render('index');
	}
	public function actionCityToursCommon(){
		$city_name = addslashes($_GET['city_name']); 
		$sql="select `id`,`title`,`description`,`trip_notes`,`seo_title`,`seo_key`,`seo_description` from `jos_categories` where `parent_id`=0 and (`title` like '".$city_name."%' or `city` like '".$city_name."%' or `title_slug` like '".$city_name."%')";
		$res =  Yii::app()->db->createCommand($sql)->queryRow();
		$res_parent = Yii::app()->db->createCommand($sql)->queryAll();
		if(!empty($res)){// 查看该分类是否存在;
			$parent_id  = $res['id'];
			$parent_name = $res['title'];
			$description = $res['description'];
			$trip_notes = $res['trip_notes'];
			// seo:
				$t = $res['seo_title'];
				$k = $res['seo_key'];
				$d = $res['seo_description'];
				Seo::_seo($this,$t,$k,$d);
			// 获取子分类;
			$sql="select `c`.`id`,`c`.`title` from `jos_categories` as c ,`jos_cos_tours_package` as p where c.id=p.categorieid_str and `c`.`parent_id`=".$parent_id." group by `c`.`id`";
			$res =  Yii::app()->db->createCommand($sql)->queryAll();
			if(!empty($res)){ // 有子分类的城市;
				$child_info = $res;
				$package_category_id = array();
				foreach($res as $v){
					$package_category_id[] = $v['id'];
				}
				$str_package_category_id = '('.implode(',',$package_category_id).')';
				// 获取分子分类的套餐;
				$sql = "SELECT * FROM `jos_cos_tours_package` WHERE `categorieid_str` in ".$str_package_category_id." order by `days` asc";
				$package_info =  Yii::app()->db->createCommand($sql)->queryAll();
			}else{ // 没有子分类的城市;
				// 直接获取父分类的套擦;
				$sql = "SELECT * FROM `jos_cos_tours_package` WHERE `category_parentid` = ".$parent_id." order by `days` asc";
				$package_info =  Yii::app()->db->createCommand($sql)->queryAll();
			}
				$this->render('common',array(
					'parent_name'=>	$parent_name,
					'parent_id'	=>$parent_id,
					'description'=>$description,
					'trip_notes'	=>$trip_notes,
					'child_info'=>isset($child_info)?$child_info:$res_parent,
					'package_info'=>$package_info,
				));
		}else{
			$this->errorPage();
		}
	}

// beijing to xian ;

	public function actionSideTrips(){
		//seo:
		$city = addslashes(trim($_GET['city_name']));
		$city = strtolower($city);
		switch($city){
			case 'beijing-xian':{
				$t='Xian Tours from Beijing, Beijing to Xian Tours, Travel Tours from Beijing to  Xian';
				$k='xian tours from beijing, beijing to xian tours, tours from beijing to xian,  travel from beijing to xian';
				$d='Here we are offering you 1-8 days Beijing to Xian Tours, Xian tours from Beijing, Xian Terra Cotta Warrior tours, Beijing city &amp; side tour with lowest price.';
				}
				Seo::_seo($this,$t,$k,$d);
				$this->render('beijingtoxian');
				break;
			case 'shanghai-xian':{
				$t='Shanghai Xian Tour, Xian Tours from Shanghai, Shanghai and Xian Tour Packages';
				$k='shanghai xian tour, xian tours from shanghai, shanghai tour from xian, shanghai and xian tour packages';
				$d='1-8 days Shanghai &amp; xian tours by Flight, Xian tours from Shanghai by train/ flight, Shanghai city and side tours from Xian and customize service.';
			}
			Seo::_seo($this,$t,$k,$d);
			$this->render('shanghaitoxian');
			break;
			case 'beijing-shanghai':{
				$t='Tours from Shanghai to Beijing Great Wall, Travel Beijing to Shanghai by Train/ Flight';
				$k='tours shanghai to beijing, tours from shanghai to beijing, beijing shanghai package, travel beijing to shanghai, tours beijing shanghai';
				$d='Leadtochina offers you 1-9 days Beijing tours from shanghai, Shanghai tours from Beijing, Beijing &amp; Shanghai tours, and more China tours with/ from Shang Beijing.';
			}
			Seo::_seo($this,$t,$k,$d);
			$this->render('beijingtoshanghai');
			break;
			case 'shanghai-to-huangshan':{
				$t='Shanghai to Huangshan Tours by Flight, Train, Bus, Private Van with Best Price.';
				$k='shanghai to huangshan, huangshan tours from shanghai, shanghai huangshan tour package';
				$d='We are offering 1-5 days Huangshan Yellow mountain tours from Shanghai. You may take train, flight, bus or private van from our service. Inquiry Now.';
			}
			Seo::_seo($this,$t,$k,$d);
			$this->render('shanghaitohuangshan');
			break;
			case 'beijing-datong':{
				$t='Beijing Tours, Beijing Travel, Beijing Tour Packages';
				$k='beijing tours, beijing travel, beijing tour packages, china beijing travel, beijing travel agency';
				$d='Beijing Travel Agency offering Beijing tours, Beijing private tour, Beijing coach tour, and China Beiijng travel with honest price. You may also tailor-made beijing tours freely.';
			}
			Seo::_seo($this,$t,$k,$d);
			$this->render('beijingtodatong');
			break;
			default:break;	
		}
	}
	public function actionShanghaiToXian(){
	
		$this->render('shanghaitoxian');
	}
	protected function errorPage(){
		echo '404 not Found!'; 
	}

}