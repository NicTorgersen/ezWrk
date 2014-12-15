<?php

	function cmvcAutoload ($class) {
		if (!class_exists($class, false)) {
			// because we're namespacing
			// here we just use the last
			// value of the exploded class name
			$class = explode('\\', $class);
			$class = end($class);

			if (is_readable($class . '.php')) {
				require($class . '.php');
			} elseif (is_readable('controllers/' . $class . '.php')) {
				require('controllers/' . $class  . '.php');
			} elseif (is_readable('models/' . $class . '.php')) {
				require('models/' . $class . '.php');
			} elseif (is_readable('tools/' . $class . '.tool' . '.php')) {
				require('tools/' . $class . '.tool' . '.php');
			} elseif (is_readable('error/' . $class . '.php')) {
				require('error/' . $class . '.php');
			}
			return;
		}
	}

	spl_autoload_register('cmvcAutoload', true, true);