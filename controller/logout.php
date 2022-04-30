<?php
session_start();

if(!isset($_SESSION['doctorSession']))
{
 header("Location: ../view/doctordashboard.php");
}
else if(isset($_SESSION['doctorSession'])!="")
{
 header("Location: ../view/index.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['doctorSession']);
 header("Location: ../view/index.php");
}
?>
