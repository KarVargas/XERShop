<?php
// session_start([
//     'cookie_lifetime' => 86400,
//     'read_and_close'  => true,
// ]);
session_destroy();
header("Location: index.php");
// exit();
?>