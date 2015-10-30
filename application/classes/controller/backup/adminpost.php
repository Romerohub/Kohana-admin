<?php defined('SYSPATH') or die('No direct script access.');
/**конроллер для вывода постов**/

//class Controller_News extends Controller {
class Controller_adminpost extends Controller_Template {

	/**тут задаем основной шаблон***/
	public $template = 'admin/main';
/**вывод списка постов и редактирование поста**/
	public function action_index()
	{
		if(!Auth::instance()->logged_in()){
			$this->request->redirect("admin");			
		}
	
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
					
					$res = $news->savePost($id, $post);
					//$res = $news->saveNewPost($post);
					//if($res){
						$this->request->redirect("adminPost");
					//}
				}
				$this->template->scripts = array('/js/admin/post.js');
			$this->template->content = View::factory('admin/post/edit.tpl', array("post"=>$post));
			}
			
			
			
			
		}else{ //вывод всех постов
		
			$list = $news->all_posts();
			
			//$this->template->styles = array('assets/css/red.css' => 'screen');
    		$this->template->scripts = array('/js/admin/postlist.js');
    		
			$this->template->content = View::factory('admin/post/postlist.tpl', array("list"=>$list));
			
			if($list){

			}else{
				throw new HTTP_Exception_404('Product not found!');
			}
			
		}
		

	}
	public function action_addpost(){
		if(!Auth::instance()->logged_in()){
			$this->request->redirect("admin");			
		}
		
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
					
				$res = $news->saveNewPost($post);
					//if($res){
						$this->request->redirect("adminPost");
					//}
				$this->template->content = View::factory('admin/post/edit.tpl', array("post"=>$post));
				}
				$this->template->content = View::factory('admin/post/edit.tpl');
	}
	
	public function action_uploadimg(){
		
		$this->template->content = new View('admin/post/upload_img.tpl');
	}
	
	public function action_saveimg(){
		
		
	}
	

} 
