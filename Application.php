<?php
class Application {
	private $_controller,
			$_action,
			$_config;

	public function __construct($action) {
		$action = explode('/', $action);
		$this->_controller = ucfirst($action[0]) . "Controller";
		$this->_action = $action[1];
		$this->_config = new Config('config.php', 'config');
	}
	public function run() {
		if (class_exists($this->_controller)) {
			$controller = new $this->_controller;

			if (is_callable(array($controller, $this->_action))) {
				call_user_func(array($controller, $this->_action));
				return;
			}
		}

		echo (new wrkReturnCode($this->_config))->get(404)['msg'];
	}
}
