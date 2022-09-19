<?php
//connect database
$cnn = mysql_connect('db', 'root', 'root', 'users');

// submit mysql

$result = $mysql -> query("INSERT INTO pessoas (name, texto) VALUES('Joel', 'SUCESSO');");

echo "<h1>Success</h1>";

?>