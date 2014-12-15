<?php
class Application {
	private $_controller,
			$_action;

	public function __construct($action) {
		$action = explode('/', $action);
		$this->_controller = ucfirst($action[0]) . "Controller";
		$this->_action = $action[1];
	}
	public function run() {
		if (class_exists($this->_controller)) {
			$controller = new $this->_controller;

			if (is_callable(array($controller, $this->_action))) {
				call_user_func(array($controller, $this->_action));
			}
		}

		return (new wrkError())->get(404);
	}
}
