<?php
class Application {
	private $_controller,
			$_action;

	public function __construct($ctrl, $act) {
		$this->_controller = ucfirst($ctrl) . "Controller";
		$this->_action = $act;
	}
	public function run() {
		$controller = new $this->_controller;
		if (is_callable(array($controller, $this->_action))) {
			call_user_func(array($controller, $this->_action));
		}
	}
}