<?php
session_start();
if(session_destroy())
{
header("Location: /administrator/login.php");
}
?>