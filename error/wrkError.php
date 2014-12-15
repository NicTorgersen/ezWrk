<?php
	class wrkError {
		private $_config;

		public function __construct() {
			$this->_config = new Config('config.php', 'config');
		}

		public function get($errorCode) {
			echo $this->_config->get("{$errorCode}/msg");
			return;
		}
	}