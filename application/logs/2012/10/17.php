<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-17 06:45:10 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-10-17 06:45:10 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(202): Kohana_Cookie::get('PHPSESSID')
#2 D:\open_server\domains\bionic.local\www\index.php(108): Kohana_Request::factory()
#3 {main}
2012-10-17 07:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL to was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 07:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL to was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 07:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL artcile was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 07:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL artcile was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 07:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articdle was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 07:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articdle was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 07:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articdle was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 07:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articdle was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 07:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articdle was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 07:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articdle was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 07:16:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articdle was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 07:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL posts was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 07:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL posts was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 07:17:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL posts was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 07:17:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL posts was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 07:17:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL posts was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 07:18:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL posts was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 07:18:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL posts was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 07:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL posts was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 07:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL posts was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 07:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Product not found! ~ APPPATH\classes\controller\news.php [ 8 ]
2012-10-17 07:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Product not found! ~ APPPATH\classes\controller\news.php [ 8 ]
--
#0 [internal function]: Controller_News->action_index()
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_News))
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#4 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#5 {main}
2012-10-17 08:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 08:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 08:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 08:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 08:18:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 08:18:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 08:18:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 08:18:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 08:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 08:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 09:35:52 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-17 09:35:52 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_News))
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-17 09:36:29 --- ERROR: View_Exception [ 0 ]: The requested view default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-17 09:36:29 --- STRACE: View_Exception [ 0 ]: The requested view default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('default')
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(30): Kohana_View->__construct('default', NULL)
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('default')
#3 [internal function]: Kohana_Controller_Template->before()
#4 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_News))
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-17 09:37:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\templates\default.php [ 7 ]
2012-10-17 09:37:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\templates\default.php [ 7 ]
--
#0 D:\open_server\domains\bionic.local\www\application\views\templates\default.php(7): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_News))
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#8 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-17 09:38:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\templates\default.php [ 8 ]
2012-10-17 09:38:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\templates\default.php [ 8 ]
--
#0 D:\open_server\domains\bionic.local\www\application\views\templates\default.php(8): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_News))
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#8 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-17 09:38:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\templates\default.php [ 16 ]
2012-10-17 09:38:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\templates\default.php [ 16 ]
--
#0 D:\open_server\domains\bionic.local\www\application\views\templates\default.php(16): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_News))
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#8 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-17 09:38:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templates\default.php [ 17 ]
2012-10-17 09:38:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templates\default.php [ 17 ]
--
#0 D:\open_server\domains\bionic.local\www\application\views\templates\default.php(17): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_News))
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#8 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-17 09:50:02 --- ERROR: View_Exception [ 0 ]: The requested view templates/default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-17 09:50:02 --- STRACE: View_Exception [ 0 ]: The requested view templates/default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('templates/defau...')
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(30): Kohana_View->__construct('templates/defau...', NULL)
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('templates/defau...')
#3 [internal function]: Kohana_Controller_Template->before()
#4 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_News))
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-17 09:50:30 --- ERROR: View_Exception [ 0 ]: The requested view templates/default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-17 09:50:30 --- STRACE: View_Exception [ 0 ]: The requested view templates/default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('templates/defau...')
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(30): Kohana_View->__construct('templates/defau...', NULL)
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('templates/defau...')
#3 [internal function]: Kohana_Controller_Template->before()
#4 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_News))
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-17 09:56:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\templates\post.php [ 1 ]
2012-10-17 09:56:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\templates\post.php [ 1 ]
--
#0 D:\open_server\domains\bionic.local\www\application\views\templates\post.php(1): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\open_server\domains\bionic.local\www\application\views\templates\main.php(17): Kohana_View->__toString('D:\open_server\...', Array)
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_News))
#9 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#10 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#12 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-17 09:57:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templates\main.php [ 17 ]
2012-10-17 09:57:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templates\main.php [ 17 ]
--
#0 D:\open_server\domains\bionic.local\www\application\views\templates\main.php(17): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_News))
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#8 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-17 10:18:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\templates\post.php [ 1 ]
2012-10-17 10:18:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\templates\post.php [ 1 ]
--
#0 D:\open_server\domains\bionic.local\www\application\views\templates\post.php(1): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\open_server\domains\bionic.local\www\application\views\templates\main.php(17): Kohana_View->__toString('D:\open_server\...', Array)
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_News))
#9 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#10 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#12 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-17 10:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news/pojkj was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-17 10:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news/pojkj was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 10:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news/pojkj was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-17 10:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news/pojkj was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 10:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news/pojkj/dsf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-17 10:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news/pojkj/dsf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 10:37:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templates\main.php [ 17 ]
2012-10-17 10:37:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templates\main.php [ 17 ]
--
#0 D:\open_server\domains\bionic.local\www\application\views\templates\main.php(17): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_News))
#5 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#6 D:\open_server\domains\bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\open_server\domains\bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#8 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-17 10:37:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\news.php [ 19 ]
2012-10-17 10:37:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\news.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_news')
#1 {main}
2012-10-17 10:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 10:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 10:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 10:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 10:58:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\main.php [ 17 ]
2012-10-17 10:58:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\main.php [ 17 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\views\admin\main.php(17): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin))
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#8 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-17 10:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 10:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 10:59:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 10:59:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 11:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 11:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 11:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 11:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 11:02:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Post::all_news() ~ APPPATH\classes\controller\post.php [ 24 ]
2012-10-17 11:02:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Post::all_news() ~ APPPATH\classes\controller\post.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-17 11:03:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Post::all_news() ~ APPPATH\classes\controller\post.php [ 24 ]
2012-10-17 11:03:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Post::all_news() ~ APPPATH\classes\controller\post.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-17 11:29:21 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 678 ]
2012-10-17 11:29:21 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 678 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('classes', 'kohana/session')
#1 {main}
2012-10-17 11:29:26 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 678 ]
2012-10-17 11:29:26 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\core.php [ 678 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('classes', 'auth/file')
#1 {main}
2012-10-17 12:49:56 --- ERROR: ErrorException [ 8 ]: Use of undefined constant console - assumed 'console' ~ APPPATH\classes\controller\admin.php [ 32 ]
2012-10-17 12:49:56 --- STRACE: ErrorException [ 8 ]: Use of undefined constant console - assumed 'console' ~ APPPATH\classes\controller\admin.php [ 32 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\classes\controller\admin.php(32): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_register(Object(Controller_Admin))
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 12:50:10 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ORM - assumed 'ORM' ~ APPPATH\classes\controller\admin.php [ 32 ]
2012-10-17 12:50:10 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ORM - assumed 'ORM' ~ APPPATH\classes\controller\admin.php [ 32 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\classes\controller\admin.php(32): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_register(Object(Controller_Admin))
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 13:02:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\controller\admin.php [ 18 ]
2012-10-17 13:02:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\controller\admin.php [ 18 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\classes\controller\admin.php(18): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin->action_index(Object(Controller_Admin))
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 13:11:12 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-17 13:11:12 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-17 13:11:54 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2012-10-17 13:11:54 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-17 13:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 13:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 13:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 13:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 13:17:57 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2012-10-17 13:17:57 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-17 14:10:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:10:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:23:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Post::all_news() ~ APPPATH\classes\controller\post.php [ 24 ]
2012-10-17 14:23:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Post::all_news() ~ APPPATH\classes\controller\post.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-17 14:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-17 14:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 14:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:26:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:26:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:28:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Post::all_news() ~ APPPATH\classes\controller\post.php [ 24 ]
2012-10-17 14:28:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Post::all_news() ~ APPPATH\classes\controller\post.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-17 14:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_right.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_right.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_left.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_left.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:30:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:30:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_left.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_left.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_right.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_right.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_menu.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_menu.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_news.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_news.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_article.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_article.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_constants.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_constants.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/arr.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/arr.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/spinner_w.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/spinner_w.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]42 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/bottgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/bottgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_left.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_left.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_right.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_right.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_menu.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_menu.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_news.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_news.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_article.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_article.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/arr.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/arr.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/spinner_w.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/spinner_w.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_constants.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_constants.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/bottgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/bottgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]-
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ][ 1142 ]
2012-10-17 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_left.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_left.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_right.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_right.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_menu.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_menu.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_news.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_news.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/arr.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_article.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/arr.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_article.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_constants.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/ico_constants.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/spinner_w.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/spinner_w.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/cor3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/bottgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/bottgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_left.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_left.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/ico_menu.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/ico_menu.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_right.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_right.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_bot3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_bot3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_bot1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_bot1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/ico_news.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/ico_news.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/sp.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/fl_rus1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/logo.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/fl_eng2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/topline.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_top1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/mm_top3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/ico_article.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/ico_article.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/ico_constants.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/ico_constants.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/arr.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/arr.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/spinner_w.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/spinner_w.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/img/cor4.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/bottgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/bottgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c3.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/topgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_bot2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_top2.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/mm_c1.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/bottgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/imgadm/bottgray.gif ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/main_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/include_js.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:41:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:41:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: stadm.css ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: imgadm/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/admin/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/admin/login-header.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-17 14:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin.html ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:00:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Post::all_news() ~ APPPATH\classes\controller\post.php [ 24 ]
2012-10-17 15:00:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Post::all_news() ~ APPPATH\classes\controller\post.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-17 15:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-17 15:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 15:09:56 --- ERROR: ErrorException [ 2 ]: include_once(/ext/fckeditor/fckeditor.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\admin.php [ 62 ]
2012-10-17 15:09:56 --- STRACE: ErrorException [ 2 ]: include_once(/ext/fckeditor/fckeditor.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\admin.php [ 62 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\classes\controller\admin.php(62): Kohana_Core::error_handler()
#1 D:\open_server\domains\k-bionic.local\www\application\classes\controller\admin.php(62): Controller_Admin::action_edit()
#2 [internal function]: Controller_Admin->action_edit(Object(Controller_Admin))
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#4 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#6 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-17 15:10:48 --- ERROR: ErrorException [ 2 ]: include_once(../../../ext/fckeditor/fckeditor.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\admin.php [ 63 ]
2012-10-17 15:10:48 --- STRACE: ErrorException [ 2 ]: include_once(../../../ext/fckeditor/fckeditor.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\admin.php [ 63 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\classes\controller\admin.php(63): Kohana_Core::error_handler()
#1 D:\open_server\domains\k-bionic.local\www\application\classes\controller\admin.php(63): Controller_Admin::action_edit()
#2 [internal function]: Controller_Admin->action_edit(Object(Controller_Admin))
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#4 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#6 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#7 {main}