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
    
    function modal_addMessage()
    {
    
    echo "<div class=\"w3-container\">
    <div id=\"id05\" class=\"w3-modal w3-animate-opacity\">
    <div class=\"w3-modal-content w3-card-4\">
    <header class=\"w3-container w3-teal\"> 
    <span onclick=\"document.getElementById('id05').style.display='none'\" 
    class=\"w3-button w3-large w3-display-topright\">&times;</span>
    <h2>Adicionar - Recado</h2>
    </header>
    <div class=\"w3-container\">
    <form action=\"../php/message/insertMessage.php\" method=\"POST\"><br>
    Título: <input type=\"text\" name=\"title\" class=\"form-control\" id=\"title\"><br>
    Recado: <textarea name=\"message\" placeholder=\"Escreva aqui seu recado...\" class=\"form-control\" id=\"message\"></textarea><br>
    <div class=\"row\">
    <div class=\"col-md-6\">
    Setor: <select name=\"sector\">
    ";
    listSector("SELECT * FROM sectors ORDER BY name_sector ASC;");
    echo "</select>
    </div>
    <br><br>
    </div>
    <br>
    <button type=\"submit\" class=\"btn btn-success\">ENVIAR</button>
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

    function modal_addMenu()
    {
    
    echo "<div class=\"w3-container\">
    <div id=\"id06\" class=\"w3-modal w3-animate-opacity\">
    <div class=\"w3-modal-content w3-card-4\">
    <header class=\"w3-container w3-teal\"> 
    <span onclick=\"document.getElementById('id06').style.display='none'\" 
    class=\"w3-button w3-large w3-display-topright\">&times;</span>
    <h2>Adicionar - Cardápio</h2>
    </header>
    <div class=\"w3-container\">
    <form action=\"../php/menu/insertMenu.php\" method=\"POST\"><br>
                    Data: <input type=\"date\" name=\"date\" class=\"form-control\" id=\"date\">
                    Prato 1: <input type=\"text\" name=\"dish1\" class=\"form-control\" id=\"dish1\">
                    Prato 2: <input type=\"text\" name=\"dish2\" class=\"form-control\" id=\"dish2\">
                    Prato 3: <input type=\"text\" name=\"dish3\" class=\"form-control\" id=\"dish3\">
                    Guarnição 1: <input type=\"text\" name=\"garrison1\" class=\"form-control\" id=\"garrison1\">
                    Guarnição 2: <input type=\"text\" name=\"garrison2\" class=\"form-control\" id=\"garrison2\">
                    Opção: <input type=\"text\" name=\"option\" class=\"form-control\" id=\"option\">
                    Salada: <input type=\"text\" name=\"salad\" class=\"form-control\" id=\"salad\">
                    Sobremesas: <input type=\"text\" name=\"dessert\" class=\"form-control\" id=\"dessert\">
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

    function modal_Start()
    {
    
    echo "<div id=\"meumodal\" class=\"w3-modal w3-animate-opacity\">
    <div class=\"modal fade bs-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
      <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
        
          <div class=\"modal-body\">
         
          <H2>Battery Low!</H2>
          <h4>Your Laptop battery is less then 10%.Recharge the battery.</h4>
         
          </div>
        </div>
      </div>
    </div>";
   
    }

?>