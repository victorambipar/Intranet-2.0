<?php

    function listUsers($sql,$caminho)
    {

        require_once("../connection/connection.php");
        $database = connection_db();
        $query = mysqli_query($database,$sql);
        while($row = mysqli_fetch_assoc($query))
        {
            $data = array('Select'=>$row);
        
        $json = json_encode($data);
        $obj = json_decode($json,true);
        foreach($obj as $id)
        {
            
        $id_user = $id['id_user'];
        $name = $id['name_user']." ".$id['second_name_user'];
        $img = $id['url_img'];
        }
          echo "<div class=\"media\">
            <img class=\"rounded-circle image-responsive\" width=\"45px\" height=\"45px\" src=\"".$caminho."".$img."\" alt=\"\">
            <input type=\"hidden\" id=\"id_user_birthday".$id_user."\" value=\"$id_user\">
            <div class=\"media-body\">
            <div class=\"mb-0 mt-4\">
            <div class=\"col-md-10\">
            <p><h5  onClick=\"user2($id_user)\"><a href=\"#\"> $name</a></h5></p></div>
            </div>
            <hr class=\"mt-2\">
            </div>
            </div>";
        }
    }

    function listUsers2($sql,$caminho)
    {

        require_once("../connection/connection.php");
        $database = connection_db();
        $query = mysqli_query($database,$sql);
        while($row = mysqli_fetch_assoc($query))
        {
            $data = array('Select'=>$row);
        
        $json = json_encode($data);
        $obj = json_decode($json,true);
        foreach($obj as $id)
        {
        $id_user = $id['id_user'];
        $name = $id['name_user']." ".$id['second_name_user'];
        $img = $id['url_img'];
        $title = $id['title_message'];
        $text = $id['text_message'];
        $date1 = $id['date_message'];
        $time = $id['time_message'];
        $sector = $id['name_sector'];
        }
        $date = preg_split('[-]', $date1);
          echo "<div class=\"media\">
          <img class=\"rounded-circle image-responsive\" width=\"45px\" height=\"45px\" src=\"".$caminho."".$img."\" alt=\"\">
          <input type=\"hidden\" id=\"id_user_birthday".$id_user."\" value=\"$id_user\">
          <div class=\"media-body\">
          <div class=\"mb-0 mt-4\">
          <div class=\"col-md-8\">
          <p><h6 onClick=\"user2($id_user)\"><a href=\"#\"> $name </a><div class=\"text-muted\">$date[2]/$date[1] $time </div></h6></p>
          <p><h4 style=\"overflow-wrap:break-word;\">$title</h4></p>
          <p><h6 style=\"overflow-wrap:break-word;\">$text</h6></p>
          <hr class=\"mt-2\">
          </div>
          </div>
          </div>
          </div>";
        }
    } 

    function listMyMessages($sql,$caminho)
    {
        require_once("../util/modal.php");
        require_once("../connection/connection.php");
        modal_addMessage();
        $database = connection_db();
        $query = mysqli_query($database,$sql);
        while($row = mysqli_fetch_assoc($query))
        {
            $data = array('Select'=>$row);
        
        $json = json_encode($data);
        $obj = json_decode($json,true);
        foreach($obj as $id)
        {
        $id_user = $id['id_user'];
        $name = $id['name_user']." ".$id['second_name_user'];
        $img = $id['url_img'];
        $title = $id['title_message'];
        $text = $id['text_message'];
        $date1 = $id['date_message'];
        $time = $id['time_message'];
        $sector = $id['name_sector'];
        }
        $date = preg_split('[-]', $date1);
          echo "<div class=\"media\">
          <img class=\"rounded-circle image-responsive\" width=\"45px\" height=\"45px\" src=\"".$caminho."".$img."\" alt=\"\">
          <input type=\"hidden\" id=\"id_user_birthday".$id_user."\" value=\"$id_user\">
          <div class=\"media-body\">
          <div class=\"mb-0 mt-4\">
          <div class=\"col-md-8\">
          <p><h6 onClick=\"user2($id_user)\"> $name <div class=\"text-muted\">$date[2]/$date[1] $time </div></h6></p>
          <p><h4 style=\"overflow-wrap:break-word;\">$title</h4></p>
          <p><h6 style=\"overflow-wrap:break-word;\">$text</h6></p>
          <p><button class=\"btn btn-success\">Editar</button> <button class=\"btn btn-danger\">Excluir</button></p>
          <hr class=\"mt-2\">
          </div>
          </div>
          </div>
          </div>";
        }
    } 

    function listMyNotifications($sql,$caminho)
    {
        require_once("../util/modal.php");
        require_once("../connection/connection.php");
        modal_addMessage();
        $database = connection_db();
        $query = mysqli_query($database,$sql);
        while($row = mysqli_fetch_assoc($query))
        {
            $data = array('Select'=>$row);
        
        $json = json_encode($data);
        $obj = json_decode($json,true);
        foreach($obj as $id)
        {
          $id_user = $id['id_user'];
          $name = $id['name_user']." ".$id['second_name_user'];
          $img = $id['url_img'];
          $title = $id['title_notification'];
          $text = $id['text_notification'];
          $date1 = $id['date_notification'];
          $time = $id['time_notification'];
        }
        $date = preg_split('[-]', $date1);
          echo "<div class=\"media\">
          <img class=\"rounded-circle image-responsive\" width=\"45px\" height=\"45px\" src=\"".$caminho."".$img."\" alt=\"\">
          <input type=\"hidden\" id=\"id_user_birthday".$id_user."\" value=\"$id_user\">
          <div class=\"media-body\">
          <div class=\"mb-0 mt-4\">
          <div class=\"col-md-8\">
          <p><h6 onClick=\"user2($id_user)\"> $name <div class=\"text-muted\">$date[2]/$date[1] $time </div></h6></p>
          <p><h4 style=\"overflow-wrap:break-word;\">$title</h4></p>
          <p><h6 style=\"overflow-wrap:break-word;\">$text</h6></p>
          <p><button class=\"btn btn-success\">Editar</button> <button class=\"btn btn-danger\">Excluir</button></p>
          <hr class=\"mt-2\">
          </div>
          </div>
          </div>
          </div>";
        }
    }

    function listBirthday($sql,$caminho)
    {
        
        $today = date('m');
        $date1 = "";
        $name = "";
        $data = array();
        require_once("connection/connection.php");
        $database = connection_db();
        $query = mysqli_query($database,$sql);
        while($row = mysqli_fetch_assoc($query))
        {
            $data = array('Select'=>$row);
        
        $json = json_encode($data);
        $obj = json_decode($json,true);
        foreach($obj as $id)
        {
        $id_user = $id['id_user'];
        $name = $id['name_user']." ".$id['second_name_user'];
        $img = $id['url_img'];
        $date1 = $id['birthday_user'];
        }
        $date = preg_split('[-]', $date1);
          echo "<div class=\"list-group list-group-flush small\">
            <a class=\"list-group-item list-group-item-action\" onClick=\"user($id_user)\">
            <input type=\"hidden\" id=\"id_user_birthday".$id_user."\" value=\"$id_user\">
            <div class=\"media\">
            <img class=\"d-flex mr-3 rounded-circle image-responsive\" width=\"45px\" height=\"45px\" src=\"".$caminho." ".$img."\" alt=\"\">
            <div class=\"media-body\">
            <strong>$name</strong>
            <div class=\"text-muted\">$date[2]/$date[1]</div>
            </div>
            </div>
            </a>
            </div>";
        }
    }

    function listUsersAdmin($sql)
    {
        require_once("../util/modal.php");
        require_once("../connection/connection.php");
        modal_addUser();
        $database = connection_db();
        $query = mysqli_query($database,$sql);
        while($row = mysqli_fetch_assoc($query))
        {
            $data = array('Select'=>$row);
        
        $json = json_encode($data);
        $obj = json_decode($json,true);
        foreach($obj as $id)
        {
            $id_user = $id['id_user'];
            $name = $id['name_user'];
            $second_name = $id['second_name_user'];
            $bd= $id['birthday_user'];
            $function = $id['function_user'];
            $phone = $id['phone_user'];
            $email = $id['email_user'];
            $ramal = $id['ramal_user'];
            $sector = $id['name_sector'];
            $permission = $id['name_permission'];
        }
        echo "<tr>
        <td>$name</td>
        <td>$second_name</td>
        <td>$email</td>
        <td>$bd</td>
        <td>$function</td>
        <td>$sector</td>
        <td>$ramal</td>
        <td>$permission</td>
        <td>
        <a class=\"dropdown-item\" href=\"#\">
        <i class=\"fa fa-fw fa-pencil\"></i>
        </a>
        </td>
        <td>
        <a class=\"dropdown-item\" href=\"#\">
        <i class=\"fa fa-fw fa-remove\"></i>
        </a>
        </td>                

        
        </tr>";
        }
    }

    function listExtensions($sql)
    {
        require_once("../connection/connection.php");
        $database = connection_db();
        $query = mysqli_query($database,$sql);
        while($row = mysqli_fetch_assoc($query))
        {
            $data = array('Select'=>$row);
        
        $json = json_encode($data);
        $obj = json_decode($json,true);
        foreach($obj as $id)
        {
            $name = $id['name_user']." ".$id['second_name_user'];;
            $email = $id['email_user'];
            $ramal = $id['ramal_user'];
        }
        echo "<tr>
        <td>$name</td>
        <td>$email</td>
        <td>$ramal</td>
        </tr>";
        }
    }

    function listProfile($sql)
    {
    
        require_once("../connection/connection.php");
        $database = connection_db();
        $query = mysqli_query($database,$sql);
        while($row = mysqli_fetch_assoc($query))
        {
            $data = array('Select'=>$row);
        
        $json = json_encode($data);
        $obj = json_decode($json,true);
        foreach($obj as $id)
        { 
        $id_user = $id['id_user'];
        $name = $id['name_user']." ".$id['second_name_user'];
        $img = $id['url_img'];
        $date = $id['birthday_user'];
        $data_birth = preg_split("[-]",$date);
        $function = $id['function_user'];
        $sector = $id['name_sector'];
        $phone = $id['phone_user'];
        $ramal = $id['ramal_user'];
        $email = $id['email_user'];
        }

        echo "<div class=\"row\">
        <div class=\"col-md-2\">
        <img class=\"d-flex mr-3 rounded-circle image-responsive\" width=\"200px\" height=\"200px\" src=\"../".$img."\" alt=\"\">
        </div>
        <div class=\"col-md-6 text-capitalize\">
        <h1>$name</h1>
        <div class=\"text-lowercase\">
        </div>
        </div>
        
        </div>
        </p>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-user\"></i> Perfil</div>
            <hr class=\"mt-2\">
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-birthday-cake\"></i> Data de nascimento: ".$data_birth[2]."/".$data_birth[1]."/".$data_birth[0]."</div>
            <hr class=\"mt-2\">
          </div>
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-briefcase\"></i> Função: $function</div>
            <hr class=\"mt-2\">
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-briefcase\"></i> Setor: $sector</div>
            <hr class=\"mt-2\">
          </div>
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-phone\"></i> Telefone: $phone</div>
            <hr class=\"mt-2\">
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-phone\"></i> Ramal: $ramal</div>
            <hr class=\"mt-2\">
          </div>
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-envelope\"></i> Email: $email</div>
            <hr class=\"mt-2\">
          </div>
        </div>";
        }
    }

    function listProfile2($sql)
    {
        require_once("../util/modal.php");
        require_once("../connection/connection.php");
        $database = connection_db();
        $query = mysqli_query($database,$sql);
        while($row = mysqli_fetch_assoc($query))
        {
            $data = array('Select'=>$row);
        
        $json = json_encode($data);
        $obj = json_decode($json,true);
        foreach($obj as $id)
        { 
        $id_user = $id['id_user'];
        $name = $id['name_user']." ".$id['second_name_user'];
        $name2 = $id['name_user'];
        $second_name = $id['second_name_user'];
        $img = $id['url_img'];
        $date = $id['birthday_user'];
        $data_birth = preg_split("[-]",$date);
        $function = $id['function_user'];
        $sector = $id['name_sector'];
        $phone = $id['phone_user'];
        $ramal = $id['ramal_user'];
        $email = $id['email_user'];
        }

        echo "<div class=\"row\">
        <div class=\"col-md-2\">
        <img class=\"d-flex mr-3 rounded-circle image-responsive\" width=\"200px\" height=\"200px\" src=\"../".$img."\" alt=\"\">
        </div>
        <div class=\"col-md-6 text-capitalize\">
        <h1>$name</h1>
        <div class=\"text-lowercase\">
        </div>
        </div>
        
        </div>
        </p>
        <div class=\"row\">
          <div class=\"col-lg-12\">
          <div class=\"mb-0 mt-4\">
              <p><h5 onClick=\"document.getElementById('id02').style.display='block'\"><i class=\"fa fa-camera\"></i> Trocar foto</h5></p>
              <p><h5 onClick=\"document.getElementById('id03').style.display='block'\"><i class=\"fa fa-pencil\" href=\"\"></i> Editar</h5></p>
              <p><h5 onClick=\"document.getElementById('id04').style.display='block'\"><i class=\"fa fa-lock\" href=\"\"></i> Trocar senha</h5></div></p>
            <hr class=\"mt-2\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-user\"></i> Perfil</div>
            <hr class=\"mt-2\">
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-birthday-cake\"></i> Data de nascimento: ".$data_birth[2]."/".$data_birth[1]."/".$data_birth[0]."</div>
            <hr class=\"mt-2\">
          </div>
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-briefcase\"></i> Função: $function</div>
            <hr class=\"mt-2\">
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-briefcase\"></i> Setor: $sector</div>
            <hr class=\"mt-2\">
          </div>
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-phone\"></i> Telefone: $phone</div>
            <hr class=\"mt-2\">
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-phone\"></i> Ramal: $ramal</div>
            <hr class=\"mt-2\">
          </div>
          <div class=\"col-lg-6\">
            <div class=\"mb-0 mt-4\">
              <i class=\"fa fa-envelope\"></i> Email: $email</div>
            <hr class=\"mt-2\">
          </div>
        </div>";

        myProfile($name2,$second_name,$date,$function,$sector,$email,$phone,$ramal);
        resetPassword();

        }
    }

    function listSector($sql)
    {
    require_once("../connection/connection.php");
    $database = connection_db();
    $query2 = mysqli_query($database,$sql);
    while($row = mysqli_fetch_assoc($query2))
    {
    $data = array('Select'=>$row);
    $json = json_encode($data);
    $obj = json_decode($json,true);
    foreach($obj as $id2)
    {
    $sectors = $id2['name_sector'];
    $id_sector= $id2['id_sector'];
    }
    echo "<option value=\"$id_sector\">$sectors</option>";
    }
    }

    function listNotices($sql)
    {
    require_once("connection/connection.php");
    $database = connection_db();
    $query2 = mysqli_query($database,$sql);
    while($row = mysqli_fetch_assoc($query2))
    {
    $data = array('Select'=>$row);
    $json = json_encode($data);
    $obj = json_decode($json,true);
    foreach($obj as $id)
    {
      $id_user = $id['id_user'];
      $name = $id['name_user']." ".$id['second_name_user'];
      $img = $id['url_img'];
      $title = $id['title_notification'];
      $text = $id['text_notification'];
      $date1 = $id['date_notification'];
      $time = $id['time_notification'];
    }
    $date = preg_split('[-]', $date1);
    echo "<div class=\"card mb-3\">
              
    <div class=\"card-body\">
    <div class=\"media\">
    <img class=\"d-flex mr-3 rounded-circle image-responsive\" width=\"45px\" height=\"45px\" src=\"$img\" alt=\"\">
    <input type=\"hidden\" id=\"id_user_birthday".$id_user."\" value=\"$id_user\">
    <div class=\"media-body\">
    <h6  onClick=\"user($id_user)\" class=\"card-title mb-1\"><a href=\"#\">$name</a></h6>
    </div>
    </div>
    <br>
    <p class=\"card-text small\">$text
    </p>
    </div>
    <div class=\"card-footer small text-muted\">Postado: $date[2]/$date[1] $time</div>
  </div>";
    }
    }


?>