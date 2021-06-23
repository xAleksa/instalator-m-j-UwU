<?php
session_start();

if(isset($_SESSION['success_config']))
{
echo $_SESSION['success_config'];
unset($_SESSION['success_config']);
}
?>
