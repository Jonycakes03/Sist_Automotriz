<?php
session_start();
session_unset();
session_destroy();
header("Location: Front_Ingresar.html");
exit();
?>