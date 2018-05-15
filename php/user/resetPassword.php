<?php
    session_start();

    $password1 = $_POST['password2'];
    $password2 = $_POST['password2'];
    $password3= $_POST['password3'];

    $password1_md5 = md5($password1);
    $password2_md5 = md5($password2);
    $password3_md5 = md5($password3);

    if($password3_md5 == $password2_md5)
    {
        require_once("../../connection/connection.php");
        $database = connection_db();
        $query = mysqli_query($database,"SELECT * FROM users WHERE password_user=\"$password1_md5\" AND id_user=".$_SESSION["id"].";") or die("<body onLoad=\"alert('Erro contate o programador!')\"");
        while($row = mysqli_fetch_assoc($query))
        {
        $data = array('Select'=>$row);
        $json = json_encode($data);
        $obj = json_decode($json,true);
        foreach($obj as $id2)
        {
        $passoword_old = $id2['password_user'];
        }
        }
        if($passoword_old =! $password1){
            echo "<body onLoad=\"alert('Senha antiga incorreta!');window.location='../../pages/your_profile.php'\">";
        }else{      
        mysqli_query($database,"UPDATE users SET password_user=\"$password2_md5\" WHERE id_user=".$_SESSION["id"].";") or die("<body onLoad=\"alert('Erro contate o programador!')\"");
        echo "<body onLoad=\"alert('Senha alterada com sucesso!');window.location='../../pages/your_profile.php'\">";
        } 

    }
    else
    {
        echo "<body onLoad=\"alert('Senhas diferentes!');window.location='../../pages/your_profile.php'\">";
    }

?>