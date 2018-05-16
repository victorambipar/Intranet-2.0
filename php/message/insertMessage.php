<?php

    session_start();

    $title = $_POST['title'];
    $message = $_POST['message'];
    $sector = $_POST['sector'];
    
    if($title == null)
    {
    }
    else{
        require_once("../../connection/connection.php");
    $database = connection_db();

    $date = date('Y-m-d');
    $hour = date('H:i:s');

    $query = mysqli_query($database,"INSERT INTO messages VALUES(null,$sector,\"".$_SESSION['id']."\",\"$title\",
    \"$message\",\"$date\",\"$hour\");") or die("<body onLoad=\"alert('Erro contate o programador!')\"");
   
    echo "<body onLoad=\"alert('Recado cadastrado com sucesso!');window.location='../../pages/your_messages.php'\">";
    }



?>