<?php
	class Config {
		private $_config = array();

		public function __construct($filePath, $configName) {
			if (is_readable($filePath)) {
				require_once(dirname(__DIR__) . "/" . $filePath);
				$this->_config = $GLOBALS[$configName];
			}
		}


		public function get($path = null) {
			$config = null;

			if ($path) {
				$path = explode('/', $path);
				foreach ($path as $bit) {
					if (isset($this->_config[$bit])) {
						$config = $this->_config[$bit];
					}
				}

				return $config;
			}
		}
	}