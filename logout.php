<?php
session_start();

session_unset();
session_destroy();

header("location:/aaa/view/login.php");
exit;
?>
