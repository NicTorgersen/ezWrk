<?php
	class Config {
		private $_config;

		public function __construct($filePath, $configName) {
			if (is_readable($filePath)) {
				require_once($filePath);
				$configVars = get_defined_vars();
				$this->_config = $configVars[$configName];
			}
		}


		public static function get($path = null) {
			if ($path) {
				$path = explode('/', $path);

				foreach ($path as $bit) {
					if (isset($config[$bit])) {
						$config = $config[$bit];
					}
				}

				return $config;
			}
		}
	}