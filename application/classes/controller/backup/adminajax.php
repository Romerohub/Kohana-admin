<?php defined('SYSPATH') or die('No direct script access.');

class Controller_adminajax extends Controller{


	public function action_index()
	{
		if(!Auth::instance()->logged_in()){
			$this->request->redirect("admin");			
		}
	}
	
	public function action_delpost(){
		if(!Auth::instance()->logged_in()){
			echo "not_auth";	
			exit;
		}
		$post = Model::factory("post");
		
		if(!empty($_POST['post_id'])){
			
			$id = intval($_POST['post_id']);
	
			$post->del_id($id);
			echo "OK";
			
		}else{
			echo "no_id";
		}
		exit;
	}
	
} 
