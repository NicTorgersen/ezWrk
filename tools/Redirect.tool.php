<?php
class Redirect {
	public static function to($controller = null, $action = null) {
		if ($controller != null && $action != null) {
			header("Location: index.php?controller=" . $controller . "&action=" . $action);
			exit();
		}
	}
	public static function link($link) {
		header("Location: $link");
	}
}