<?php

session_start();
session_unset();
session_destroy();
setcookie("username", "", time() - 10, "/");
setcookie("password", "", time() - 10, "/");

header("location: ./../index.php");