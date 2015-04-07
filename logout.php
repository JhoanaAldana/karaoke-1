<?php
    session_start();
    include('acceso_db.php'); // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
        session_destroy();
<<<<<<< HEAD
        header("Location: index.php");
=======
        header("Location: acceso.php");
>>>>>>> e87103e8ebdb47f843cb6982fc28656e7b347afb
    }else {
        echo "Operación incorrecta.";
    }
?> 
