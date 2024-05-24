<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>	

	<style type="text/css">
		header {
			display: flex;
			justify-content: space-between;			
		}

		footer {
			text-align: center;
			font-size: 12px;
		}
	</style>
</head>
<body>
	<header>
		<div>
    		<b>Usuário:</b> <?= $_COOKIE["login"]; ?>
    	</div>

    	<div>
    		<a href="logout.php">Logout</a>
    	</div>
    </header>

	<hr>
    Seja bem vindo ao sistema adm.
	<hr>

	<footer>Cotil - Unicamp</footer>

</body>
</html>	