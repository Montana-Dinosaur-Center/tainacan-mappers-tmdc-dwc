<?php
require_once("../../../wp-load.php");

require_once __DIR__.'/app/config.php';
require_once __DIR__.'/vendor/autoload.php';


use \dwc\Preset\Tainacan\Classes\Controller;

echo "start main process!";
$preset = new Controller\Preset();
$preset->execute('v1');
