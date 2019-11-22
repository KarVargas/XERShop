<?php

// include "validar.php";
// include "conexion.php";
// if (session_start() == true) {
//     $n = $_SESSION['name'];
// }
echo<<<HTML

<header class="header-nav">
    <a href="index.php"><img src="img/logobg2.png" alt="Logotipo"></a>
    <div class="navh">
        <label>Hola, </label>
        <!-- <?php echo $n; ?>  -->
        <a href="nosotros.php">Nosotros</a> |
        <a href="login.php">Login</a>
        <a href="logout.php">Logout</a>
    </div>   
</header>

HTML;

?>