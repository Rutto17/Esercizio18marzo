<?php
session_start();
$matrice = $_SESSION['matrice'];
foreach($matrice as $ci)
{
 echo $ci . "<br>";
}




echo count($matrice)
?>