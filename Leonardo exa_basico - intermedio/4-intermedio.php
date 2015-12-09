<?php

	function crear_input($type, $value){
 		echo "<input type='$type' value='$value'/><br>";
	}

	crear_input('button', 'oprima');
	crear_input('text', 'hola mundo');
	crear_input('submit', 'enviar');
	crear_input('double', 'carro');
	crear_input('text', 'mario');
?>