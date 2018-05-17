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
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="../css/style_modal.css">
<link rel="stylesheet" href="css/slider.css">  
  <!-- Navigation-->
  <?php navigation("");?>
  <?php functions()?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <p>
      <div class="row">
      <div class="col-md-2">
      <?php showProfile();?>
      </div>
      </div>
      </p>
      <div class="col-md-12">
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
      <?php $date = date('Y-m-d'); listMenu("SELECT * FROM menu WHERE date_menu='$date';") ?>
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
