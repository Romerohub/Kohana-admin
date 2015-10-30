<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Admin_Admin extends Controller_Template {
 
    public $template = 'admin/main.tpl';
 
    public function before()
    {
        parent::before();
        
        
       if(!Auth::instance()->logged_in()){
			$this->request->redirect("admin");			
		}
		
        View::set_global('title', 'Админка');				
        View::set_global('description', 'Админка');
        $this->template->content = '';
        $this->template->styles = '';
        $this->template->scripts = '';
        
        $this->template->menuList = Model::factory("menu")->all_posts();
        
    }
 
}