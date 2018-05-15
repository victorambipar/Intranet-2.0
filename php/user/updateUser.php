<?php

    session_start();
    $name_user = $_POST['name_user'];
    $second = $_POST['second_name'];
    $date_birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $extension = $_POST['ramal'];
    $email = $_POST['email'];

    

    if($name=! null)
    {
        require_once("../../connection/connection.php");
        $database = connection_db();
        $query = mysqli_query($database,"UPDATE users SET name_user='$name_user',email_user='$email',second_name_user='$second',birthday_user='$date_birthday',phone_user='$phone',ramal_user='$extension' WHERE id_user=".$_SESSION['id'].";");
        //echo $query;  
        echo "<body onLoad=\"alert('Alterações salvas com sucesso!');window.location='../../pages/your_profile.php'\">";
        //echo "UPDATE users SET name_user='$name_user',second_name_user='.$second.',birthday_date='$date_birthday',phone_user='$phone',ramal_user='$extension' WHERE id_user=".$_SESSION['id'].";";
        $_SESSION["name"] = $name_user." ".$second;
        $_SESSION["email"] = $email;
    }
    else{}

?>