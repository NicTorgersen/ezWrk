<?php
class Session {
	public function __construct() {
		session_start();
	}

	/*
		$session = session to look for
		$mode = true to enable string return
				false to enable bool return
	*/
	public static function get($session, $mode = true) {
		if ($mode === true) {
			if (isset($_SESSION[$session])) {
				return $_SESSION[$session];
			}
		} else {
			if (isset($_SESSION[$session])) {
				return true;
			}
		}
		return false;
	}

	public static function set($session, $value) {
		$_SESSION[$session] = $value;
		if ($_SESSION[$session] == $value) {
			return true;
		}
		return false;
	}

	public static function flash($session) {
		if ($session && isset($_SESSION[$session])) {
			$session = $_SESSION[$session];
			unset($_SESSION[$session]);

			return $session;
		}
		return false;
	}

	public static function destroy($session) {
		if (isset($_SESSION[$session])) {
			unset($_SESSION[$session]);
			return true;
		}
		return false;
	}
}