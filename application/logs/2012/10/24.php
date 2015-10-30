<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-24 02:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 02:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 02:15:54 --- ERROR: ErrorException [ 8 ]: Undefined index:  satus ~ APPPATH\classes\controller\admin\post.php [ 126 ]
2012-10-24 02:15:54 --- STRACE: ErrorException [ 8 ]: Undefined index:  satus ~ APPPATH\classes\controller\admin\post.php [ 126 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\classes\controller\admin\post.php(126): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Post->action_status(Object(Controller_Admin_Post))
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-24 02:18:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  satus ~ APPPATH\classes\controller\admin\post.php [ 128 ]
2012-10-24 02:18:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  satus ~ APPPATH\classes\controller\admin\post.php [ 128 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\classes\controller\admin\post.php(128): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Post->action_status(Object(Controller_Admin_Post))
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-24 03:10:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\admin\post\edit.tpl.php [ 56 ]
2012-10-24 03:10:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\admin\post\edit.tpl.php [ 56 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\views\admin\post\edit.tpl.php(56): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\open_server\domains\k-bionic.local\www\application\views\admin\main.tpl.php(157): Kohana_View->__toString('D:\open_server\...', Array)
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Post))
#9 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#10 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#12 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-24 03:39:58 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Postorm as array ~ APPPATH\views\admin\post\postlist.tpl.php [ 41 ]
2012-10-24 03:39:58 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Postorm as array ~ APPPATH\views\admin\post\postlist.tpl.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\open_server\...', Array)
#1 {main}
2012-10-24 03:40:46 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Postorm as array ~ APPPATH\views\admin\post\postlist.tpl.php [ 41 ]
2012-10-24 03:40:46 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Postorm as array ~ APPPATH\views\admin\post\postlist.tpl.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\open_server\...', Array)
#1 {main}
2012-10-24 03:41:16 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Postorm as array ~ APPPATH\views\admin\post\postlist.tpl.php [ 41 ]
2012-10-24 03:41:16 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Postorm as array ~ APPPATH\views\admin\post\postlist.tpl.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\open_server\...', Array)
#1 {main}
2012-10-24 03:43:06 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Postorm as array ~ APPPATH\views\admin\post\postlist.tpl.php [ 41 ]
2012-10-24 03:43:06 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Postorm as array ~ APPPATH\views\admin\post\postlist.tpl.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\open_server\...', Array)
#1 {main}
2012-10-24 03:44:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\admin\post\postlist.tpl.php [ 49 ]
2012-10-24 03:44:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\admin\post\postlist.tpl.php [ 49 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\views\admin\post\postlist.tpl.php(49): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\open_server\domains\k-bionic.local\www\application\views\admin\main.tpl.php(157): Kohana_View->__toString('D:\open_server\...', Array)
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Post))
#9 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#10 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#12 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-24 04:23:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\admin\post\postlist.tpl.php [ 70 ]
2012-10-24 04:23:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\admin\post\postlist.tpl.php [ 70 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\views\admin\post\postlist.tpl.php(70): Kohana_Core::error_handler('D:\open_server\...', Array)
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\open_server\domains\k-bionic.local\www\application\views\admin\main.tpl.php(157): Kohana_View->__toString('D:\open_server\...', Array)
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Post))
#9 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Request))
#10 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#12 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-24 07:07:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Admin_1Admin' not found ~ APPPATH\classes\controller\admin\post.php [ 4 ]
2012-10-24 07:07:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Admin_1Admin' not found ~ APPPATH\classes\controller\admin\post.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_admi...')
#1 {main}
2012-10-24 07:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-24 07:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-24 07:09:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-24 07:09:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-24 10:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-24 10:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-24 10:35:22 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(D:/open_server/domains/k-bionic.local/www/userfiles/tmp/cool_nude_girls_75.jpg) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\views\admin\news\save_img.tpl.php [ 32 ]
2012-10-24 10:35:22 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(D:/open_server/domains/k-bionic.local/www/userfiles/tmp/cool_nude_girls_75.jpg) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\views\admin\news\save_img.tpl.php [ 32 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\views\admin\news\save_img.tpl.php(32): Kohana_Core::error_handler('D:\open_server\...', 'D:/open_server/...')
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\open_server\...', Array)
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-24 10:52:53 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Admin_Article' not found ~ APPPATH\classes\controller\admin\article.php [ 4 ]
2012-10-24 10:52:53 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Admin_Article' not found ~ APPPATH\classes\controller\admin\article.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_admi...')
#1 {main}
2012-10-24 10:54:44 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\classes\controller\admin\post.php [ 42 ]
2012-10-24 10:54:44 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\classes\controller\admin\post.php [ 42 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\classes\controller\admin\post.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Admin_Post->action_edit(Object(Controller_Admin_Post))
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Request))
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute()
#5 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-24 10:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/arlicle/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 10:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/arlicle/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 10:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/post/saveimg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-24 10:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/post/saveimg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-24 10:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/arlicle/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 10:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/arlicle/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 10:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userfiles/post/2012-10-24_105851.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 10:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userfiles/post/2012-10-24_105851.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 10:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userfiles/post/2012-10-24_105851.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 10:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userfiles/post/2012-10-24_105851.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 10:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userfiles/post/2012-10-24_105851.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 10:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userfiles/post/2012-10-24_105851.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 10:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userfiles/post/2012-10-24_105851.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 10:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userfiles/post/2012-10-24_105851.jpg ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 10:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/arlicle/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 10:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/arlicle/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:16:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_MenuOrm' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-10-24 11:16:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_MenuOrm' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('menuOrm')
#1 {main}
2012-10-24 11:16:54 --- ERROR: Kohana_Exception [ 0 ]: The anons property does not exist in the Model_menuOrm class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2012-10-24 11:16:54 --- STRACE: Kohana_Exception [ 0 ]: The anons property does not exist in the Model_menuOrm class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\views\admin\menu\list.tpl.php(43): Kohana_ORM->__get('anons')
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\open_server\...', Array)
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\open_server\domains\k-bionic.local\www\application\views\admin\main.tpl.php(175): Kohana_View->__toString()
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\open_server\...', Array)
#7 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-24 11:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:17:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_menu' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2012-10-24 11:17:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_menu' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('menu')
#1 {main}
2012-10-24 11:18:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2012-10-24 11:18:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_news' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('news')
#1 {main}
2012-10-24 11:19:55 --- ERROR: Kohana_Exception [ 0 ]: The anons property does not exist in the Model_menuOrm class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2012-10-24 11:19:55 --- STRACE: Kohana_Exception [ 0 ]: The anons property does not exist in the Model_menuOrm class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\views\admin\menu\list.tpl.php(43): Kohana_ORM->__get('anons')
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\open_server\...', Array)
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\open_server\domains\k-bionic.local\www\application\views\admin\main.tpl.php(175): Kohana_View->__toString()
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\open_server\...', Array)
#7 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-24 11:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:20:01 --- ERROR: Kohana_Exception [ 0 ]: The anons property does not exist in the Model_menuOrm class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2012-10-24 11:20:01 --- STRACE: Kohana_Exception [ 0 ]: The anons property does not exist in the Model_menuOrm class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\views\admin\menu\list.tpl.php(43): Kohana_ORM->__get('anons')
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\open_server\...', Array)
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\open_server\domains\k-bionic.local\www\application\views\admin\main.tpl.php(175): Kohana_View->__toString()
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\open_server\...', Array)
#7 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-24 11:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:20:23 --- ERROR: Kohana_Exception [ 0 ]: The anons property does not exist in the Model_MenuOrm class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2012-10-24 11:20:23 --- STRACE: Kohana_Exception [ 0 ]: The anons property does not exist in the Model_MenuOrm class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\views\admin\menu\list.tpl.php(43): Kohana_ORM->__get('anons')
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\open_server\...', Array)
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\open_server\domains\k-bionic.local\www\application\views\admin\main.tpl.php(175): Kohana_View->__toString()
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\open_server\...', Array)
#7 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-24 11:20:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:20:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:21:23 --- ERROR: Kohana_Exception [ 0 ]: The anons property does not exist in the Model_MenuOrm class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2012-10-24 11:21:23 --- STRACE: Kohana_Exception [ 0 ]: The anons property does not exist in the Model_MenuOrm class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 D:\open_server\domains\k-bionic.local\www\application\views\admin\menu\list.tpl.php(43): Kohana_ORM->__get('anons')
#1 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#2 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\open_server\...', Array)
#3 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\open_server\domains\k-bionic.local\www\application\views\admin\main.tpl.php(175): Kohana_View->__toString()
#5 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(61): include('D:\open_server\...')
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\open_server\...', Array)
#7 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#10 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-24 11:21:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:21:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:30:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:30:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/list.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 11:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-24 11:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/admin/menu/edit.js ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}