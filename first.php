<html>
<body>
<form method="post" action="second.php">
 Name:<input type="text" name="name">
 E-mail:<input type="text" name="email">
 <a href="localhost/example/second.php"><input type="submit"></a>
</form>
<?php
echo $_SERVER['SERVER_NAME']; 
	?>
</body>
</html>