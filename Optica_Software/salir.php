<?php
session_name("Optica");
session_start();

session_destroy();
header("location: index.php");

?>