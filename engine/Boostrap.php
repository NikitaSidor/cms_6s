<?php 
require_once ROOT_DIR . '/vendor/autoload.php';
require_once ROOT_DIR . '/engine/Function.php';

class_alias('Engine\\Core\\Template\\Asset', 'Asset');
class_alias('Engine\\Core\\Template\\Theme', 'Theme');
class_alias('Engine\\Core\\Template\\Setting', 'Setting');
class_alias('Engine\\Core\\Template\\Menu', 'Menu');

use Engine\Cms_6s;
use Engine\DI\DI;

try {
    // container DI
    $di = new DI();
    $services = require __DIR__.'/Config/Service.php';
    
    // Init Services
    foreach($services as $service)
    {
        $provider = new $service($di);
        $provider->init();
    }

    // APLICATION
    $cms = new Cms_6s($di);
    $cms->run();
} catch (\ErrorException $e) {
    echo $e->getMessage();
}
?>