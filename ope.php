<?php 

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

if($login=="kelvio" && $senha=="12345") 
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:site.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:index.php');
     
    }
 
?>
