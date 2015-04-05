<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-05 00:53:51 --- EMERGENCY: Database_Exception [ 1146 ]: [1146] Table 'ab-test.abtests' doesn't exist ( SHOW FULL COLUMNS FROM `abtests` ) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 185 ] in /var/www/ab-test/modules/mysqli/classes/Kohana/Database/MySQLi.php:352
2015-04-05 00:53:51 --- DEBUG: #0 /var/www/ab-test/modules/mysqli/classes/Kohana/Database/MySQLi.php(352): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/ab-test/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('abtests')
#2 /var/www/ab-test/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/ab-test/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/ab-test/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/ab-test/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/ab-test/application/classes/Controller/AbTest.php(22): Kohana_ORM::factory('AbTest')
#7 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_AbTest->action_new()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AbTest))
#10 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#13 {main} in /var/www/ab-test/modules/mysqli/classes/Kohana/Database/MySQLi.php:352
2015-04-05 00:55:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/AbTest.php [ 23 ] in /var/www/ab-test/application/classes/Controller/AbTest.php:23
2015-04-05 00:55:18 --- DEBUG: #0 /var/www/ab-test/application/classes/Controller/AbTest.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ab-tes...', 23, Array)
#1 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_AbTest->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AbTest))
#4 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#7 {main} in /var/www/ab-test/application/classes/Controller/AbTest.php:23
2015-04-05 00:56:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/AbTest.php [ 23 ] in /var/www/ab-test/application/classes/Controller/AbTest.php:23
2015-04-05 00:56:19 --- DEBUG: #0 /var/www/ab-test/application/classes/Controller/AbTest.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ab-tes...', 23, Array)
#1 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_AbTest->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AbTest))
#4 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#7 {main} in /var/www/ab-test/application/classes/Controller/AbTest.php:23
2015-04-05 01:14:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Validation::get_errors() ~ APPPATH/classes/Controller/AbTest.php [ 32 ] in file:line
2015-04-05 01:14:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 11:35:36 --- EMERGENCY: ReflectionException [ 0 ]: Function regexp() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /var/www/ab-test/system/classes/Kohana/Validation.php:396
2015-04-05 11:35:36 --- DEBUG: #0 /var/www/ab-test/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('regexp')
#1 /var/www/ab-test/application/classes/Controller/AbTest.php(24): Kohana_Validation->check()
#2 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_AbTest->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AbTest))
#5 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#8 {main} in /var/www/ab-test/system/classes/Kohana/Validation.php:396
2015-04-05 11:44:18 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/Kohana/Validation.php [ 219 ] in /var/www/ab-test/system/classes/Kohana/Validation.php:219
2015-04-05 11:44:18 --- DEBUG: #0 /var/www/ab-test/system/classes/Kohana/Validation.php(219): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/ab-tes...', 219, Array)
#1 /var/www/ab-test/system/classes/Kohana/Validation.php(242): Kohana_Validation->rule(Array, 'not_empty', NULL)
#2 /var/www/ab-test/application/classes/Controller/AbTest.php(66): Kohana_Validation->rules(Array, Array)
#3 /var/www/ab-test/application/classes/Controller/AbTest.php(23): Controller_AbTest->_get_create_from_validator(Array)
#4 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_AbTest->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AbTest))
#7 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#10 {main} in /var/www/ab-test/system/classes/Kohana/Validation.php:219
2015-04-05 11:49:05 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Unknown modifier '\' ~ SYSPATH/classes/Kohana/Valid.php [ 39 ] in file:line
2015-04-05 11:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/var/www/ab-tes...', 39, Array)
#1 /var/www/ab-test/system/classes/Kohana/Valid.php(39): preg_match('/^\\/[-?:&=.,/\\w...', 's')
#2 [internal function]: Kohana_Valid::regex('s', '/^\\/[-?:&=.,/\\w...')
#3 /var/www/ab-test/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /var/www/ab-test/application/classes/Controller/AbTest.php(24): Kohana_Validation->check()
#5 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_AbTest->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AbTest))
#8 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#11 {main} in file:line
2015-04-05 11:51:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Unknown modifier '-' ~ SYSPATH/classes/Kohana/Valid.php [ 39 ] in file:line
2015-04-05 11:51:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/var/www/ab-tes...', 39, Array)
#1 /var/www/ab-test/system/classes/Kohana/Valid.php(39): preg_match('/^\\/[/-?:&=.,\\w...', 's')
#2 [internal function]: Kohana_Valid::regex('s', '/^\\/[/-?:&=.,\\w...')
#3 /var/www/ab-test/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /var/www/ab-test/application/classes/Controller/AbTest.php(24): Kohana_Validation->check()
#5 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_AbTest->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AbTest))
#8 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#11 {main} in file:line
2015-04-05 11:52:06 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Unknown modifier ']' ~ SYSPATH/classes/Kohana/Valid.php [ 39 ] in file:line
2015-04-05 11:52:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/var/www/ab-tes...', 39, Array)
#1 /var/www/ab-test/system/classes/Kohana/Valid.php(39): preg_match('/^\\/[-?:&=.,\\w\\...', 's')
#2 [internal function]: Kohana_Valid::regex('s', '/^\\/[-?:&=.,\\w\\...')
#3 /var/www/ab-test/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /var/www/ab-test/application/classes/Controller/AbTest.php(24): Kohana_Validation->check()
#5 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_AbTest->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AbTest))
#8 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#11 {main} in file:line
2015-04-05 12:47:40 --- EMERGENCY: ReflectionException [ 0 ]: Class Controller_Analytics does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 94 ] in /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php:94
2015-04-05 12:47:40 --- DEBUG: #0 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#4 {main} in /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php:94
2015-04-05 13:06:43 --- EMERGENCY: ErrorException [ 8 ]: Object of class Request could not be converted to int ~ APPPATH/classes/Controller/Analytics.php [ 18 ] in file:line
2015-04-05 13:06:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Object of class...', '/var/www/ab-tes...', 18, Array)
#1 /var/www/ab-test/application/classes/Controller/Analytics.php(18): intval(Object(Request))
#2 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_Analytics->action_settings()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Analytics))
#5 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#8 {main} in file:line
2015-04-05 13:41:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_TestAction' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-04-05 13:41:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 13:41:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_TestAction' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-04-05 13:41:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-05 13:42:56 --- EMERGENCY: Database_Exception [ 1146 ]: [1146] Table 'ab-test.testactions' doesn't exist ( SHOW FULL COLUMNS FROM `testactions` ) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 185 ] in /var/www/ab-test/modules/mysqli/classes/Kohana/Database/MySQLi.php:352
2015-04-05 13:42:56 --- DEBUG: #0 /var/www/ab-test/modules/mysqli/classes/Kohana/Database/MySQLi.php(352): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/ab-test/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('testactions')
#2 /var/www/ab-test/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/ab-test/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/ab-test/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/ab-test/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/ab-test/application/classes/Controller/Analytics.php(50): Kohana_ORM::factory('TestAction')
#7 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_Analytics->action_grab_data()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Analytics))
#10 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#13 {main} in /var/www/ab-test/modules/mysqli/classes/Kohana/Database/MySQLi.php:352
2015-04-05 13:43:40 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Analytics.php [ 53 ] in /var/www/ab-test/application/classes/Controller/Analytics.php:53
2015-04-05 13:43:40 --- DEBUG: #0 /var/www/ab-test/application/classes/Controller/Analytics.php(53): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/ab-tes...', 53, Array)
#1 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_Analytics->action_grab_data()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Analytics))
#4 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#7 {main} in /var/www/ab-test/application/classes/Controller/Analytics.php:53
2015-04-05 14:01:21 --- EMERGENCY: Database_Exception [ 1146 ]: [1146] Table 'ab-test.test_action' doesn't exist ( 
            SELECT count(ta.id) cnt, v.sys_name variant, at.sys_name action_type, at.id action_type_id
            FROM test_action ta
              INNER JOIN enum v ON ta.variant = v.id
              INNER JOIN enum at ON ta.action_type = at.id
            WHERE ta.test_id = 2
            GROUP BY v.id, at.id;
         ) ~ MODPATH/mysqli/classes/Kohana/Database/MySQLi.php [ 185 ] in /var/www/ab-test/modules/database/classes/Kohana/Database/Query.php:251
2015-04-05 14:01:21 --- DEBUG: #0 /var/www/ab-test/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, '\n            SE...', false, Array)
#1 /var/www/ab-test/application/classes/Controller/AbTest.php(60): Kohana_Database_Query->execute()
#2 /var/www/ab-test/application/classes/Controller/AbTest.php(36): Controller_AbTest->_get_analytics(Object(Model_AbTest))
#3 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_AbTest->action_view()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AbTest))
#6 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#9 {main} in /var/www/ab-test/modules/database/classes/Kohana/Database/Query.php:251
2015-04-05 14:15:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: show ~ APPPATH/views/ab_test/view.php [ 64 ] in /var/www/ab-test/application/views/ab_test/view.php:64
2015-04-05 14:15:28 --- DEBUG: #0 /var/www/ab-test/application/views/ab_test/view.php(64): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ab-tes...', 64, Array)
#1 /var/www/ab-test/system/classes/Kohana/View.php(62): include('/var/www/ab-tes...')
#2 /var/www/ab-test/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/ab-tes...', Array)
#3 /var/www/ab-test/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/ab-test/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/ab-test/application/classes/Controller/AbTest.php(37): Kohana_Response->body(Object(View))
#6 /var/www/ab-test/system/classes/Kohana/Controller.php(84): Controller_AbTest->action_view()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/ab-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AbTest))
#9 /var/www/ab-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/ab-test/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/ab-test/public/index.php(123): Kohana_Request->execute()
#12 {main} in /var/www/ab-test/application/views/ab_test/view.php:64