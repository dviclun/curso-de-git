<?php
	//Autor: Daniel <dviclun1409@g.educaand.es>
	//Comentario
	require("HolaMundo.php");
	print "Introduce tu nombre";
	$nombre = trim(fgets(STDIN));
	print new HolaMundo($nombre);
?>
