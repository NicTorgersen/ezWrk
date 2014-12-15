<?php 
namespace ezWrk\Controllers;

class Controller {

	public function __construct() {
		session_start();
	}

	public static function render($viewFile, array $params = array(), $mode = null, $layout = null) {
		
		if ($mode === "html") {
			$loader = new \Twig_Loader_Filesystem('views');
			$twig = new \Twig_Environment($loader);
			echo $twig->render($viewFile, $params);
			return;
		}

		/*ob_start();

		if ($params != null) { 
			extract($params, EXTR_SKIP);
		}

		if ($layout != null) {
			require_once('views/' . $layout . '.php');
		}
		
		require_once('views/' . $viewFile . '.php');

		$output = ob_get_contents();

		ob_end_clean();
		header('Content-Type: application/json');
		echo $output;*/
	}
}