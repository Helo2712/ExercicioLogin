<?php 
    if ($_SERVER["REQUEST_METHOD"] === 'GET') {

    	$msg = "";

    } else if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    	// simulando login e senha do bd
    	$loginBD = crypt("admin", "c0t1lUn1camp");
    	$senhaBD = crypt("123456", "c0t1lUn1camp");

		$loginBD2 = crypt("HeloiseK", "c0t1lUn1camp");
    	$senhaBD2 = crypt("123456", "c0t1lUn1camp");

        $login = $_POST["login"];
        $senha = $_POST["senha"];

        if ( (trim($login) != "") && (trim($senha) != "") ) {

            if (strlen($login) < 5) {
            	$msg = "O login deve ter no mínimo 5 caracteres";

            } else if (strlen($senha) < 6) {
				$msg = "A senha deve ter no mínimo 6 caracteres";

        	//} else if ( ($login != $loginBD) ||	 ($senha != $senhaBD) ) {
			  } else if (  (crypt($login, "c0t1lUn1camp") != $loginBD) ||	 (crypt($senha, "c0t1lUn1camp") != $senhaBD) or (crypt($login, "c0t1lUn1camp") != $loginBD2) ||	 (crypt($senha, "c0t1lUn1camp") != $senhaBD2)) {        		        		

				$msg = "Login/senha inválido(s)";

            } else {
            	setcookie("login", $login, time()+3600, "/");
                header('Location: home.php');
            }
            
        } else {
            $msg = "Informe seu login e sua senha";
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<style type="text/css">
		body {			
			display: flex;
			flex-direction: column;
			align-items: center;	
			font-family: arial;	
		}

		div {
			width: 20%;
			border: 1px black solid;
			padding: 5%;
			display: flex;
			flex-direction: column;
		}

		span {
			margin-top: 15px;
			color: red;
		}
	</style>
</head>
<body>

	<h1>Login</h1>

	<div>
		<form method="post">
			Login:<br>
			<input type="text" name="login">

			<br><br>

			Senha:<br>
			<input type="text" name="senha">		

			<br><br>
			<input type="submit" value="OK">
		</form>
	</div>

	<span><?= $msg; ?></span>

</body>
</html>