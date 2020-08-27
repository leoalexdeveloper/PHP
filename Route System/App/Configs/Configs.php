<?php
//define the configs rootpath
define('ROOT_CONFIGS', str_replace('\\', '/', __DIR__));

//root path
define('ROOT', str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']));
//root complement path. If you donnt need you can leave only a bar
define('ROOT_COMPLEMENT', '/GitHub PHP Repository/PHP/Route System/');

//define the indexes of usable parts of uri
define('USABLE_URI', 4);
define('CONTROLLER_INDEX', 0);
define('ACTION_INDEX', 1);
define('PARAMTERS_INDEX', 2);

//define the indexes of usable parts of uri in cookies
setcookie('USABLE_URI', USABLE_URI, mktime(24), '/');
setcookie('CONTROLLER_INDEX', CONTROLLER_INDEX, mktime(24), '/');
setcookie('ACTION_INDEX', ACTION_INDEX, mktime(24), '/');
setcookie('PARAMTERS_INDEX', PARAMTERS_INDEX, mktime(24), '/');