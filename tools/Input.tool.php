<?php
class Input {

	public static function find ($param, $mode = true) {
		if ($mode) {
			if (isset($_POST[$param])) {
				return $_POST[$param];
			}
		} else {
			if (isset($_POST[$param])) {
				return true;
			}
		}
		return false;
	}
}