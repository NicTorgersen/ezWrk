<?php

class Cookie {
	public static function get ($name) {
		if (isset($_COOKIE[$name])) {
			return $_COOKIE[$name];
		} else {
			return null;
		}
	}

	public static function set ($name, $value) {
		setcookie($name, $value);
	}

	public static function delete ($name) {
		if (self::get($name) != null) {
			setcookie($name, null, time()-3600);
			return true;
		}
		return false;
	}
}