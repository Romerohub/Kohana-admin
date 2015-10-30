<?php defined('SYSPATH') or die('No direct script access.');
/**конроллер для вывода постов**/


//class Controller_Admin extends Controller_Template {
//
//	/**тут задаем основной шаблон***/
//	public $template = 'admin/main';
class Controller_Admin_Main extends Controller{
	
	public function action_index(){

		if(!empty($_POST)){
				if(!empty($_POST['login']) && !empty($_POST['pass'])){
					Auth::instance()->login($_POST['login'], $_POST['pass'], true);
				}
			}
			
			if(Auth::instance()->logged_in()){
				$this->request->redirect("/admin/news/");
				//$this->response->body(View::factory('admin/main.tpl'));
				
			}else{
				$this->response->body(View::factory('admin/login.tpl'));
				
			}
		
	}

	
	public function action_register(){
		exit;
		$this->request->redirect("admin");
		
		try
		{
			$data['username'] = "admin";
			$data['email'] = "email@email.com";
			$data['password'] = "adminadmin";
			$data['password_confirm'] = "adminadmin";
			

			$user = ORM::factory('user')
				->create_user($data, array('username', 'email', 'password')) // Регистрируем пользователя
				->add('roles', ORM::factory('role', array('name' => 'login')));  // Добавляем роль login
			// Регистрация успешна
		}
		catch(ORM_Validation_Exception $e)
		{
			$errors = $e->errors(); 
			print_r($errors);
			// Допущены ошибки при вводе данных
		}
	}
	public function action_edit(){
		exit;
		    include_once("ext/fckeditor/fckeditor.php");
			$oFCKeditor = new FCKeditor('FCKeditor2') ;
			$oFCKeditor->Height = 190;
			$oFCKeditor->BasePath = '/ext/fckeditor/' ;
			$oFCKeditor->Config['AutoDetectLanguage']	= false ;
			$oFCKeditor->Config['DefaultLanguage']		= "ru";
			$oFCKeditor->Value = "";
			$oFCKeditor->Create() ;
	}
	public function action_logout(){
		
		Auth::instance()->logout(FALSE, TRUE);
		$this->request->redirect("/admin/");
	}

} 
