<?php
namespace ezWrk\Error;

class wrkReturnCode {
	private $_config;

	public function __construct(\ezWrk\Tools\Config $config) {
		$this->_config = $config;
	}

	public function get($errorCode) {
		return $this->_config->get($errorCode);
	}
}