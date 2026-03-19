
<?php
echo "<h1>Recebe</h1>";
echo "<pre>";print_r($_POST);echo"</pre>";

$login=$_post["login"];
$senha=$_post["senh"];

echo"Login: <b>$login</b><br>";
echo "Senha: <b>$senha</b><br>";

?>