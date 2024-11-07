<?php
session_start([
    'cookie_lifetime' => 86400, // Set cookie to last for 1 day (86400 seconds)
    'read_and_close'  => false, // Keep session active
]);

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../welcome.php');
    exit();
}
?>