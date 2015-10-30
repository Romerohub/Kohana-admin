<?php defined('SYSPATH') or die('No direct script access.');
/**конроллер для работы с постами**/

class Controller_Admin_Post extends Controller_Admin_Admin {

/**вывод списка постов**/
	public function action_index()
	{
		
		$newsOrm = ORM::factory('postOrm');
	//pagination
	
		$pager['total_notes'] = $newsOrm->count_all();
		$pager['limit'] = 10; 
		$pager['total_pages'] = (int)($pager['total_notes']/$pager['limit']);
	  
	   if(!empty($_GET['page'])) $pager['number'] = $_GET['page']; else $pager['number'] = "1";
	   $pager['offset'] = $pager['limit'] * ($pager['number']-1);
	   
	//pagination
		$list = $newsOrm->limit($pager['limit'])->offset($pager['offset'])->find_all();

    		$this->template->scripts = array('/js/admin/postlist.js');
    		$this->template->path ="Публикации";
			$this->template->content = View::factory('admin/post/postlist.tpl', array("list"=>$list, "pager"=>$pager));
			
			if($list){

			}else{
				throw new HTTP_Exception_404('Page not found!');
			}
	}
	/**редактирование**/
	public function action_edit(){
		$news = Model::factory("post");
		$id = $this->request->param('id');

		if($id){
			
			$item = $news->showPost($id);
			
			if($item[0]){
				$post= $item[0];
			
				if(!empty($_POST)){ // сохранение поста
				unset($post['id']);	
				$post['dates'] = $_POST['d']['date'];
				$post['language'] = "ru";
				$post['publ'] = $_POST['d']['publ'];
				$post['name'] = $_POST['d']['name'];
				$post['title'] = $_POST['d']['title'];
				$post['keywords'] = $_POST['d']['keys'];
				$post['description'] = $_POST['d']['description'];
				$post['anons'] = $_POST['d']['anons'];
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
					
					$this->request->redirect("/admin/post/");
					
				}
				$this->template->path ="Публикации/редактирование";
				$this->template->scripts = array('/js/admin/post.js');
			$this->template->content = View::factory('admin/post/edit.tpl', array("post"=>$post));
			}
			
			
		}else{
			throw new HTTP_Exception_404('Page not found!');
		}
	}
	
	/**добавление поста*/
	public function action_add(){
		$arr = array();
				$news = Model::factory("post");
				$this->template->scripts = array('/js/admin/post.js');
				if(!empty($_POST)){ // сохранение поста
				
				$post['dates'] = $_POST['d']['date'];
				$post['language'] = "ru";
				$post['publ'] = $_POST['d']['publ'];
				$post['name'] = $_POST['d']['name'];
				$post['title'] = $_POST['d']['title'];
				$post['keywords'] = $_POST['d']['keys'];
				$post['description'] = $_POST['d']['description'];
				$post['anons'] = $_POST['d']['anons'];
				$post['content'] = $_POST['d']['content'];
				$post['image'] = $_POST['d']['image'];
					
				if(!empty($post['image'])){
					
					$post['image'] = $this->saveImg($post['image']);
				}
	
				$res = $news->saveNewPost($post);
					
				$this->request->redirect("/admin/post/");
				$arr = array("post"=>$post);

				}
				$this->template->path ="Публикации/создание";
				$this->template->content = View::factory('admin/post/edit.tpl', $arr);
	}
	
	/****/
	public function action_status(){

		$r['error'] = "";
		$news = Model::factory("post");
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
			
			copy($f_path, $_SERVER['DOCUMENT_ROOT']."/userfiles/post/".$name);
			
			$this->delFiles($_SERVER['DOCUMENT_ROOT']."/tmp/*");
			
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
			
			$post = Model::factory("post");
			
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
		
		return $_SERVER['DOCUMENT_ROOT']."/userfiles/post/";
	}
	
	public function imgPath($name){
		
		return $this->imgFolder().$name;
	}
	
	/**выводим форму для загрузки файла*/
	public function action_uploadimg(){

 		$this->template = View::factory('admin/post/upload_img.tpl');
	}
	/**сохранение файла*/
	public function action_saveimg(){
		
		$this->template = View::factory('admin/post/save_img.tpl');
	}
	

} 
