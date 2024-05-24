<?php

	if (!isset($_COOKIE["login"])) {
		require("erro.php");
	} else {
		require("conteudo.php");
	}

?>