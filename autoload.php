<?php

	function cmvcAutoload ($class) {
		if (is_readable($class . '.php')) {
			require($class . '.php');
		} elseif (is_readable('controllers/' . $class . '.php')) {
			require('controllers/' . $class  . '.php');
		} elseif (is_readable('models/' . $class . '.php')) {
			require('models/' . $class . '.php');
		} elseif (is_readable('tools/' . $class . '.tool' . '.php')) {
			require('tools/' . $class . '.tool' . '.php');
		}
	}

	spl_autoload_register('cmvcAutoload');