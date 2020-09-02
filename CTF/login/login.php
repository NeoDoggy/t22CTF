<?php
	include "./headerLG.php";
?>
<body>
<?php
	include("secret.php");
        if($_GET["username"] == "" || $_GET["password"] == ""){
		echo("<html><body><div class=\"message\">Please Login First!<br><a href='index.php'>Back to Login</a></div></body></html>");
	}
	else if (strcmp($_GET["username"],$usrnm)==0 && strcmp($_GET["password"],$passwd)==0){
                echo("flag：t22CTF{php_1nj3ct10n_15_fun}");
	}
	else{
		echo("No Flag for you,you are not Admin");
	}
?>
</body>
</html>
