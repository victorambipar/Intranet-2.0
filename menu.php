<?php
  session_start();

  require_once("util/head.php");
  require_once("util/nav.php");
  require_once("util/script.php");
  require_once("util/footer.php");
  require_once("util/functions.php");
  require_once("util/functions_js.php");

?>

<!DOCTYPE html>
<html lang="en">

<?php head(""); ?>

  <!-- Navigation-->
  <?php navigation("");?>
  <?php functions()?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <p>
      <div class="row">
      <div class="col-md-2">
      <?php 
      echo "<img class=\"d-flex mr-3 rounded-circle image-responsive\" width=\"200px\" height=\"200px\" src=\"".$_SESSION['img']."\" alt=\"\">
      </div>
      <div class=\"col-md-6 text-capitalize\">
      <h1>".$_SESSION['name']."</h1>
      <div class=\"text-lowercase\">
      <h3>".$_SESSION['email']."
      </div>";
      ?>
      </div>
      
      </div>
      </p>
      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
        
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> Notícias</div>
          <hr class="mt-2">
         
          <div class="card-columns">
            <!-- Example Social Card-->
            
            <?php listNotices("	SELECT users.id_user,users.name_user,users.second_name_user,users.url_img,notifications.title_notification,notifications.text_notification,notifications.date_notification,notifications.time_notification FROM notifications INNER JOIN users ON notifications.id_user = users.id_user ORDER BY notifications.id_notification DESC LIMIT 14;");?>
            
            <!-- Example Social Card-->
            
            </div>
            <!-- Example Social Card-->
          <!-- /Card Columns-->
        </div>
        <div class="col-lg-4">
          
          <!-- Example Notifications Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-birthday-cake"></i> Aniversariantes do mês</div>
            <?php $today = date('m'); listBirthday("SELECT * FROM users WHERE MONTH(birthday_user) = '$today' ORDER BY DAY(birthday_user) ASC;",""); ?>
          </div>
          <div class="col-lg-12">
      <div class="mb-0 mt-4">
            <i class="fa fa-cutlery"></i> Cardápio do dia</div>
      <hr class="mt-2">
      <p><h6 style="overflow-wrap:break-word;">Prato 1: Arroz</h6></p>
      <p><h6 style="overflow-wrap:break-word;">Prato 2: Feijão</h6></p>
      <p><h6 style="overflow-wrap:break-word;">Prato 3: Batata</h6></p>
      <p><h6 style="overflow-wrap:break-word;">Guarnição 1: Carne</h6></p>
      <p><h6 style="overflow-wrap:break-word;">Guarnição 2: Frango</h6></p>
      <p><h6 style="overflow-wrap:break-word;">Opção: Pastel</h6></p>
      <p><h6 style="overflow-wrap:break-word;">Salada: Alface</h6></p>
      <p><h6 style="overflow-wrap:break-word;">Sobremesas: Pudim</h6></p>
      </div>
        </div>
        
      </div>
    </div>
    <!-- /.container-fluid-->
    
    <?php footer("")?>
    <?php script("")?>
  </div>
</body>

</html>
