<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-22 09:47:38 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'k-bionic' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-22 09:47:38 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'k-bionic' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\open_server\domains\k-bionic.local\www\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('k-bionic')
#1 D:\open_server\domains\k-bionic.local\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\open_server\domains\k-bionic.local\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', false, Array)
#3 D:\open_server\domains\k-bionic.local\www\application\classes\model\post.php(9): Kohana_Database_Query->execute()
#4 D:\open_server\domains\k-bionic.local\www\application\classes\controller\post.php(22): Model_Post->all_posts()
#5 [internal function]: Controller_Post->action_index()
#6 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#7 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\open_server\domains\k-bionic.local\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-10-22 09:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-22 09:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\open_server\domains\k-bionic.local\www\index.php(109): Kohana_Request->execute()
#1 {main}