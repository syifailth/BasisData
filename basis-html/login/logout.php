<?php

@include '../login_system/config.php';

session_start();
session_unset();
session_destroy();

header('location:../main/main.php');

?>