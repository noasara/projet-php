<?php
    session_start();
    //session_upset();
    session_destroy();
    header("location:connexionFilms.php");
?>