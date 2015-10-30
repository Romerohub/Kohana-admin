<?php defined('SYSPATH') or die('No direct script access.');
/**конроллер для работы с постами**/

class Controller_Admin_Menu extends Controller_Admin_Admin {

/**вывод списка постов**/
	public function action_index()
	{
		
//		$newsOrm = ORM::factory('menuOrm');
//	//pagination
//	
//		$pager['total_notes'] = $newsOrm->count_all();
//		$pager['limit'] = 10; 
//		$pager['total_pages'] = (int)($pager['total_notes']/$pager['limit']);
//	  
//	   if(!empty($_GET['page'])) $pager['number'] = $_GET['page']; else $pager['number'] = "1";
//	   $pager['offset'] = $pager['limit'] * ($pager['number']-1);
//	   
//	//pagination
//		$list = $newsOrm->limit($pager['limit'])->offset($pager['offset'])->find_all();

$news = Model::factory("menu");
$list = $news->all_posts();
//print_r($list);
    		$this->template->scripts = array('/js/admin/menu/list.js');
    		$this->template->path ="Меню";
			//$this->template->content = View::factory('admin/menu/list.tpl', array("list"=>$list, "pager"=>$pager));
			$this->template->content = View::factory('admin/menu/list.tpl', array("list"=>$list));
			
			if($list){

			}else{
				throw new HTTP_Exception_404('Page not found!');
			}
	}
	/**редактирование**/
	public function action_edit(){
		$news = Model::factory("menu");
		$id = $this->request->param('id');
			$newsOrm = ORM::factory('menuorm');
			$arr['dirs'] = $newsOrm->where('idp', '=', 0)->find_all();
		if($id){
			
			$item = $news->showPost($id);
			
			if($item[0]){
				$post= $item[0];
			
				if(!empty($_POST)){ // сохранение поста
				unset($post['id']);	
				
				if(!empty($_POST['d']['dir']) && $_POST['d']['dir'] == "dir"){
					$post['idp'] = "0";
				}elseif(!empty($_POST['d']['dir']) && $_POST['d']['dir'] == "sub_dir" && !empty($_POST['d']['sub_dir_main'])){
					$post['idp'] = $_POST['d']['sub_dir_main'];
				}
				
				$post['dates'] = date("Y-m-d H:i:s");
				$post['language'] = "ru";
				$post['publ'] = $_POST['d']['publ'];
				$post['name'] = $_POST['d']['name'];
				$post['title'] = $_POST['d']['title'];
				$post['keywords'] = $_POST['d']['keys'];
				$post['description'] = $_POST['d']['description'];
				$post['content'] = $_POST['d']['content'];
				$post['image'] = $_POST['d']['image'];
				
				if(!empty($post['image'])){
					
					$post['image'] = $this->saveImg($post['image']);
					
				}else{
					unset($post['image']);
				}
				
				if(!empty($_POST['del_img']) && $_POST['del_img'] == "1" && !empty($item[0]['image'])){
					if(is_file($this->imgPath($item[0]['image']))){
						unlink($this->imgPath($item[0]['image']));
					}
					$post['image'] = "";
				}
				
					$res = $news->savePost($id, $post);
					
					$this->request->redirect("/admin/menu/");
					
				}
				$this->template->path ="Меню/редактирование";
				
				$this->template->scripts = array('/js/admin/menu/edit.js');
				$arr['post']=$post;
				$this->template->content = View::factory('admin/menu/edit.tpl', $arr);
			}
			
			
		}else{
			throw new HTTP_Exception_404('Page not found!');
		}
	}
	
	/**добавление поста*/
	public function action_add(){
			$arr = array();
			$news = Model::factory("menu");
			$newsOrm = ORM::factory('menuorm');
			$arr['dirs'] = $newsOrm->where('idp', '=', 0)->find_all();

			$this->template->scripts = array('/js/admin/menu/edit.js');
			
			if(!empty($_POST)){ // сохранение поста
//				print_r($_POST);
//				exit;
				
				if(!empty($_POST['d']['dir']) && $_POST['d']['dir'] == "dir"){
					$post['idp'] = "0";
					
				}elseif(!empty($_POST['d']['dir']) && $_POST['d']['dir'] == "sub_dir" && !empty($_POST['d']['sub_dir_main'])){
					
					$post['idp'] = $_POST['d']['sub_dir_main'];
					
				}
				
				$post['idr'] = $_POST['d']['idr'];
				
				$post['dates'] =  date("Y-m-d H:i:s");
				$post['language'] = "ru";
				$post['link'] = $_POST['d']['link'];
				$post['publ'] = $_POST['d']['publ'];
				$post['name'] = $_POST['d']['name'];
				$post['title'] = $_POST['d']['title'];
				$post['keywords'] = $_POST['d']['keys'];
				$post['description'] = $_POST['d']['description'];
				
				$post['content'] = $_POST['d']['content'];
				$post['image'] = $_POST['d']['image'];
					
				if(!empty($post['image'])){
					
					$post['image'] = $this->saveImg($post['image']);
				}
	
				$res = $news->saveNewPost($post);
					
				$this->request->redirect("/admin/menu/");
				$arr["post"] = $post;

			}
			//print_r($arr);
				$this->template->path ="Меню/создание";
				$this->template->content = View::factory('admin/menu/edit.tpl', $arr);
	}
	
	/****/
	public function action_status(){

		$r['error'] = "";
		$news = Model::factory("menu");
		if(!empty($_POST['status']) && !empty($_POST['id'])){
			$post = $_POST;
			$news->setField("publ", $post['status'], $post['id']);
			$r['error'] = "OK";
		}
		echo json_encode($r);
		exit;
		
	}
	
	public function saveImg($tmp_img){
		
		$f_path = $_SERVER['DOCUMENT_ROOT'].$tmp_img;
		
		if(is_file($f_path)){
			
			$ext = substr($tmp_img,-strpos(strrev($tmp_img),'.'));
			$name =  date("Y-m-d_His").".".$ext;
			
			copy($f_path, $_SERVER['DOCUMENT_ROOT']."/userfiles/menu_images/".$name);
			
			$this->delFiles($_SERVER['DOCUMENT_ROOT']."/userfiles/tmp/*");
			
			return $name;
		}else{
			return false;
		}
		
	}
	/***удлаение файлов в папке***/
	public function delFiles($path){
		
		$list = glob($path);

		if($list){
			foreach($list as $k=>$v){
				
				if(is_file($v)){
					unlink($v);
					
				}
				
			}
		}
		
	}
	
	/**удаление ajax**/
	public function action_del(){

		$r['error'] = "OK";
		
		try{
				
			if(!Auth::instance()->logged_in()) throw new Exception("not_auth");
			
			$post = Model::factory("menu");
			
			if(!empty($_POST['post_ids'])){
				
				//$ids = $_POST['post_ids'];
				if(is_array($_POST['post_ids'])){
					foreach($_POST['post_ids'] as $k => $v){
						$r['res'][] = intval($v);
					}
					
					$post->del_ids($r['res']);
				}
				
			}else{
				throw new Exception("no_id");
			}
				
		}catch(Exception $e){
			
			$r['error'] = $e->getMessage();
			
		}
		
		echo json_encode($r);

		exit;
		

	}
	
	public function imgFolder(){
		
		return $_SERVER['DOCUMENT_ROOT']."/userfiles/menu/";
	}
	
	public function imgPath($name){
		
		return $this->imgFolder().$name;
	}
	
	/**выводим форму для загрузки файла*/
	public function action_uploadimg(){

 		$this->template = View::factory('admin/menu/upload_img.tpl');
	}
	/**сохранение файла*/
	public function action_saveimg(){
		
		$this->template = View::factory('admin/menu/save_img.tpl');
	}
	

} 
