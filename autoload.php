<?php

	function cmvcAutoload ($class) {
		if (is_readable($class . '.php')) {
			require($class . '.php');
		} elseif (is_readable('controllers/' . $class . '.controller' . '.php')) {
			require('controllers/' . $class  . '.controller' . '.php');
		} elseif (is_readable('models/' . $class . '.model' . '.php')) {
			require('models/' . $class . '.model' . '.php');
		} elseif (is_readable('tools/' . $class . '.tool' . '.php')) {
			require('tools/' . $class . '.tool' . '.php');
		}
	}

	spl_autoload_register('cmvcAutoload');