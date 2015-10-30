<?php defined('SYSPATH') or die('No direct script access.');
/**конроллер для вывода постов**/

//class Controller_News extends Controller {
class Controller_News extends Controller_Template {

	/**тут задаем основной шаблон***/
	public $template = 'templates/main';

	/**получим все посты**/
	public function action_index()
	{
		$news = Model::factory("news");
		
		$url = $this->request->param('id');
		if($url){ //если есть урл то выводим пост
			
			//$data = $news->all_posts();
			$newsOrm = ORM::factory('newsorm');
			$data = $newsOrm->where("id","=",$url)->find()->as_array();
			//print_r($data);
			$this->template->content = View::factory('templates/post.tpl', array("data"=>$data));
			
		}else{
			$list = $news->all_posts();
			
			$this->template->content = View::factory('templates/postlist.tpl', array("list"=>$list));
			
			
//			if($list){
//
//			}else{
//				throw new HTTP_Exception_404('Product not found!');
//			}
			
		}
		

	}
	
	/**получим один пост**/
	public function action_post(){
		
				/** тут выводим сам шаблон поста*/
				$this->template->content = new View('templates/postlist');
				
				echo $id = $this->request->param('url');
		//$this->template->content = new View('templates/post');
		
	}
	

} 
