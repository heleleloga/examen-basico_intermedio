<?php

	$edad=14;
	switch ($edad) {
		case 14:
			echo '<h1>es un niño</h1>';
			break;
		case 17:
			echo '<h1>es menor de edad</h1>';
			break;
		case 24:
			echo '<h1>es un joven</h1>';
			break;
		case 40:
			echo '<h1>es adulto</h1>';
			break;
		default:
			echo '<h1>Valor no programado!!</h1>';
			break;
	}

?>