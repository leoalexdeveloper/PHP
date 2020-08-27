<?php

REQUIRE_ONCE "../App/Configs/Configs.php";
REQUIRE_ONCE "../App/Helpers/Functions.php";

function autoload($class){
 
REQUIRE_ONCE str_replace('\\', '/', ROOT.ROOT_COMPLEMENT.$class.'.php');

}
spl_autoload_register('autoload');

use App\Core\RoutesCore;
new RoutesCore();