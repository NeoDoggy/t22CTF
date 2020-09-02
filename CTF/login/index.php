<?php
	include "./header.php";
?>
	<body>
	<div class="message">
	<pre>
      ___       ___           ___                       ___     
     /\__\     /\  \         /\  \          ___        /\__\    
    /:/  /    /::\  \       /::\  \        /\  \      /::|  |   
   /:/  /    /:/\:\  \     /:/\:\  \       \:\  \    /:|:|  |   
  /:/  /    /:/  \:\  \   /:/  \:\  \      /::\__\  /:/|:|  |__ 
 /:/__/    /:/__/ \:\__\ /:/__/_\:\__\  __/:/\/__/ /:/ |:| /\__\
 \:\  \    \:\  \ /:/  / \:\  /\ \/__/ /\/:/  /    \/__|:|/:/  /
  \:\  \    \:\  /:/  /   \:\ \:\__\   \::/__/         |:/:/  / 
   \:\  \    \:\/:/  /     \:\/:/  /    \:\__\         |::/  /  
    \:\__\    \::/  /       \::/  /      \/__/         /:/  /   
     \/__/     \/__/         \/__/                     \/__/    
	</pre></div>
	<div class="flex-center full-height">
	<h1>Login</h1>
       	<form method="get" action="login.php">
             <input name="username" type="text" placeholder="Username">
             <br>
             <input name="password" type="password" placeholder="Password">
             <br>
             <button type="submit">Submit</button>
	</form>
	</div>		
	</body>
</html>
