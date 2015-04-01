<?php
//http://lessphp.gpeasy.com/Bootstrap
require_once './colorme/vendor/autoload.php';
Less_Autoloader::register();
Less_Cache::$cache_dir = './colorme/cache';

$files = array();
$files['./colorme/less/bootstrap.less'] = '"./"';

$css_file_name = Less_Cache::Get( $files );

$compiled = file_get_contents( Less_cache::$cache_dir.$css_file_name );
file_put_contents("./stylesheet.css",$compiled);
echo '<link rel="stylesheet" type="text/css" href="./stylesheet.css">';
?>