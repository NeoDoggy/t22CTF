<?php
	include "./header.php";
?>
	<body>
	<div class="message">
	<h3>A program for checking server status:</h3>
       	<form method="get">
             <input name="IP" type="text" placeholder="IP Address">
	     <button type="submit">Ping!</button>
	</form>
<?php
        include("secret.php");
	if($_GET["IP"] == ""){
		echo("Please Enter IP");
	}
	$backcmd1=explode(";", $_GET["IP"]);
	$backcmd2=explode("||",$_GET["IP"]);
	$backcmd3=explode("&&",$_GET["IP"]);
	/*if($backcmd1[1]!=""||$backcmd2[1]!=""||$backcmd3[1]!=""){
		$pos=stristr($backcmd[1],'cat');
		if($pos===true){
			echo "<pre>YES</pre>";
		}
		else if($pos===false){
			echo "<pre>$backcmd2[1]</pre>";
		}
		else{
			echo "<pre>No command injections!</pre>";
			echo "<pre>Banned command: $backcmd1[1]$backcmd2[1]$backcmd3[1]</pre>";
		//}
	}
	else{*/
		$output=system("ping -w 1 -c 10 ".$_GET["IP"]);
		echo "<pre>$output</pre>";//t22CTF{0v3rf10w}
	//}
?>
	</div>
	</body>
</html>
