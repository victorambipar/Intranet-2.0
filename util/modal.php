<head>
<link rel="stylesheet" href="../css/style_modal.css"> 
</head>
<?php

    require_once("functions.php");


    function modal_addUser()
    {
    
    echo "<div class=\"w3-container\">
    <div id=\"id01\" class=\"w3-modal w3-animate-opacity\">
    <div class=\"w3-modal-content w3-card-4\">
    <header class=\"w3-container w3-teal\"> 
    <span onclick=\"document.getElementById('id01').style.display='none'\" 
    class=\"w3-button w3-large w3-display-topright\">&times;</span>
    <h2>Adicionar - Usuário</h2>
    </header>
    <div class=\"w3-container\">
    <form action=\"../php/user/insertUser.php\" method=\"POST\"><br>
    Nome: <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\"><br>
    Sobrenome: <input type=\"text\" name=\"second_name\" class=\"form-control\" id=\"second_name\"><br>
    Data de nascimento: <input type=\"date\" name=\"date\" class=\"form-control\" id=\"date\"><br>
    Email: <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\"><br>
    Função: <input type=\"text\" name=\"function\" class=\"form-control\" id=\"function\"><br>
    Telefone: <input type=\"tel\" name=\"tel\" class=\"form-control\" id=\"tel\"><br>
    Ramal: <input type=\"number\" name=\"ramal\" class=\"form-control\" id=\"ramal\"><br>
   
    <div class=\"row\">
    <div class=\"col-md-6\">
    Setor: <select name=\"sector\">
    ";
    listSector("SELECT * FROM sectors ORDER BY name_sector ASC;");
    echo "</select>
    </div>
    <br><br>
    <div class=\"col-md-6\">
    Permissão: <select name=\"permission_user\">
    <option value=\"1\">Usuário</option>
    <option value=\"2\">Gestor/administrador</option>
    </select>
    </div>
    </div>
    <br>
    <button type=\"submit\" class=\"btn btn-success\">SALVAR</button>
    <br><br>
    </form>
    </div>
    <footer class=\"w3-container w3-teal\">
    <br><br>
    </footer>  
    </div>
    </div>
    </div>";
           
    }

    function get_img()
    {
        echo "<div class=\"w3-container\">
    <div id=\"id02\" class=\"w3-modal w3-animate-opacity\">
    <div class=\"w3-modal-content w3-card-4\">
    <header class=\"w3-container w3-teal\"> 
    <span onclick=\"document.getElementById('id02').style.display='none'\" 
    class=\"w3-button w3-large w3-display-topright\">&times;</span>
    <h2>Trocar foto</h2>
    </header>
    <div class=\"w3-container\"><br>
    <form method=\"post\" enctype=\"multipart/form-data\" action=\"../php/user/get_img.php\">
    Selecione uma imagem: <input name=\"arquivo\" type=\"file\" />
    <br/><br>
    <button type=\"submit\" class=\"btn btn-success\">SALVAR</button>
    <br><br>
    </form>
    </div>
    <footer class=\"w3-container w3-teal\">
    <br><br>
    </footer>  
    </div>
    </div>
    </div>";
    }

    function myProfile($name_user,$second_name,$bd,$function,$sector,$email,$phone,$ramal)
    {
    
    echo "<div class=\"w3-container\">
    <div id=\"id03\" class=\"w3-modal w3-animate-opacity\">
    <div class=\"w3-modal-content w3-card-4\">
    <header class=\"w3-container w3-teal\"> 
    <span onclick=\"document.getElementById('id03').style.display='none'\" 
    class=\"w3-button w3-large w3-display-topright\">&times;</span>
    <h2>Editar - Usuário</h2>
    </header>
    <div class=\"w3-container\">
    <form action=\"../php/user/updateUser.php\" method=\"POST\"><br>
    Nome: <input type=\"text\"  value=\"$name_user\" name=\"name_user\" class=\"form-control\" id=\"name\"><br>
    Sobrenome: <input type=\"text\"  value=\"$second_name\" name=\"second_name\" class=\"form-control\" id=\"second_name\"><br>
    Data de nascimento: <input type=\"date\"  value=\"$bd\" name=\"birthday\" class=\"form-control\" id=\"date\"><br>
    Email: <input type=\"email\" name=\"email\" value=\"$email\" class=\"form-control\" id=\"email\"><br>
    Função: <input type=\"text\" name=\"function\" disabled=\"disabled\" value=\"$function\" class=\"form-control\" id=\"function\"><br>
    Telefone: <input type=\"tel\" name=\"phone\" value=\"$phone\" class=\"form-control\" id=\"tel\"><br>
    Ramal: <input type=\"number\" name=\"ramal\" value=\"$ramal\" class=\"form-control\" id=\"ramal\"><br>
    Setor: <input type=\"text\" name=\"tel\" disabled=\"disabled\" value=\"$sector\" class=\"form-control\" id=\"tel\"><br>
    <br>
    <button type=\"submit\" class=\"btn btn-success\">Editar</button>
    <br><br>
    </form>
    </div>
    <footer class=\"w3-container w3-teal\">
    <br><br>
    </footer>  
    </div>
    </div>
    </div>";
           
    }

    function ResetPassword()
    {
    
    echo "<div class=\"w3-container\">
    <div id=\"id04\" class=\"w3-modal w3-animate-opacity\">
    <div class=\"w3-modal-content w3-card-4\">
    <header class=\"w3-container w3-teal\"> 
    <span onclick=\"document.getElementById('id04').style.display='none'\" 
    class=\"w3-button w3-large w3-display-topright\">&times;</span>
    <h2>Trocar senha</h2>
    </header>
    <div class=\"w3-container\">
    <form action=\"../php/user/resetPassword.php\" method=\"POST\"><br>
    Senha antiga: <input type=\"password\" name=\"password1\" class=\"form-control\" id=\"password1\"><br>
    Senha nova: <input type=\"password\"  name=\"password2\" class=\"form-control\" id=\"password2\"><br>
    Repita a senha nova: <input type=\"password\"  name=\"password3\" class=\"form-control\" id=\"password3\"><br>
    <br>
    <button type=\"submit\" class=\"btn btn-success\">Alterar</button>
    <br><br>
    </form>
    </div>
    <footer class=\"w3-container w3-teal\">
    <br><br>
    </footer>  
    </div>
    </div>
    </div>";
           
    }

?>