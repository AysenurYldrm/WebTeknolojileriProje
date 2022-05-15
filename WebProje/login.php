<?php 
$user='aysenur.yildirim14@ogr.sakarya.edu.tr';
$pass='g211210007';
if(isset($_POST['username']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username==$user && $password==$pass)
    {
        echo "GİRİŞ YAPILDI";
    }
    else {
        echo 'Kullanıcı adı ve ya şifre hatalı';
    }
}
?>
