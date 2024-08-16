<?php 
	session_start();
	session_destroy();
	//header("location:/registro_visitas");
	echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas'>";	