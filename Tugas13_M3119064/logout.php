<?php
session_start();
if(ISSET($_SESSION['username']))
{
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    session_destroy();
}
header("Location: index.php?target=home");
?>