<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['Lib_Username']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location:http://localhost/Lib/index.php');

?>