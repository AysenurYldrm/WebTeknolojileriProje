<!DOCTYPE html>
<html>
<header>
<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);

if(isset($_POST['Gönder']))
{
    $_name=$_POST['name'];
    $_email=$_POST['email'];
    $_message=$_POST['message'];

    echo "<strong>Kullanıcı Adı:</strong> $_name <br>";
    echo "<strong>E-mail:</strong> $_email <br>";
    echo "<strong>Mesaj:</strong> $_message";
}
?>
</header>
<body>
</body>
</html>