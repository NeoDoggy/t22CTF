<?php
	include "./headerLG.php";
?>
<body>
<?php
	include("secret.php");
        if($_GET["IP"] == ""){
		echo("<html><body><div class=\"message\">Please Enter The IP First!<br><a href='index.php'>Back to Submit</a></div></body></html>");
	}
	else{
		$output=shell_exec('ping -w 1 -c 10 8.8.8.8');
		echo "<pre>$output</pre>";
	}
?>
</body>
</html>
