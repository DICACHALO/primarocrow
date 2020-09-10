<?php
//Archivo para salir de manera segura y borrar caché
    session_start();
    session_destroy();
    clearstatcache(); 
    unset($_COOKIE['id_usuario']);
    unset($_COOKIE['pass']);  
    unset($_COOKIE['random_marc_cookie']); 
    header ("Location: index.html");
    exit;
?>