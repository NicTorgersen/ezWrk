<?php

class Controller {


	public function __construct() {
		session_start();
	}

	public static function render($viewFile, array $params = null, $mode = null, $layout = null) {
		ob_start();

		if ($params != null) { 
			extract($params, EXTR_SKIP);
		}

		if ($layout != null) {
			require_once('views/' . $layout . '.php');
		}
		
		require_once('views/' . $viewFile . '.php');

		$output = ob_get_contents();

		ob_end_clean();

		echo $output;
	}
}