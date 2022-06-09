<?php
session_start();

$_SESSION["newsession"]=$value;
unset($_SESSION["newsession"]);

?>