<?php
	class wrkReturnCode {
		private $_config;

		public function __construct(Config $config) {
			$this->_config = $config;
		}

		public function get($errorCode) {
			return $this->_config->get($errorCode);
		}
	}