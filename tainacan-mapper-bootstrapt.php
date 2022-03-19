<?php
/*
Plugin Name: Tainacan DWC
Plugin URI: https://tainacan.org/
Description: Plugin for tainacan mappers Darwin Core
Author: Steve Dogiakos
Version: 0.0.1
Text Domain: tainacan-mappers-tmdc-dwc
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/
namespace INBCM\Preset\Tainacan;

require_once __DIR__.'/app/config.php';
require_once __DIR__.'/vendor/autoload.php';

class TainacanINBCMBootstrapt {

	public function __construct() {
		add_action("tainacan-register-mappers", [$this, "registerExposerMapper"]);
	}

	function registerExposerMapper($exposers) {
		$exposers->register_mapper('dwc\Preset\Tainacan\Classes\Mapper\MapperDWC');
	}
}

$tainacanMapperBootstrapt = new \dwc\Preset\Tainacan\TainacanDWCBootstrapt();
