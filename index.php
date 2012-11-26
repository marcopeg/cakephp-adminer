<?php
/**
 * Adminer for CakePHP
 * ===================
 * 
 * 
 */

define('DS', DIRECTORY_SEPARATOR);
define('APP', dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . DS);


// database auto-login credentials
define('DB_CONFIG', APP.'Config'.DS.'database.php');
if (@include(DB_CONFIG)) {
	$__db_config__ = new DATABASE_CONFIG;
	$_GET["username"] = "";
	// bypass database selection bug
	$_GET["db"] = $__db_config__->default['database'];

// loading error
} else {
	trigger_error("Adminer is not able to locate database config!");
	exit;
}

// Adminer Extension
function adminer_object() {
	
	class AdminerSoftware extends Adminer {
		
		function __construct() {
			global $__db_config__;
			$this->db_config = $__db_config__;
		}
		
		public function credentials() {
			return array($this->db_config->default['host'], $this->db_config->default['login'], $this->db_config->default['password']);
		}
		
		public function database() {
			return $this->db_config->default['database'];
		}
		
	}
	
	return new AdminerSoftware;
	
}

// Include Adminer Script
include('./adminer-3.6.1-mysql.php');