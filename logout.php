<?php
session_start();

unset($_SESSION['user']);

session_destroy();

header('Location: http://192.168.64.2/THENINJANETPHP/index.php')