<?php
  session_start();

  require_once("../util/head.php");
  require_once("../util/nav.php");
  require_once("../util/script.php");
  require_once("../util/footer.php");
  require_once("../util/functions.php");
  require_once("../util/functions_js.php");

?>

<!DOCTYPE html>
<html lang="en">

<?php head("../"); ?>

  <!-- Navigation-->
  <?php navigation("../");?>
  <?php functions()?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="mb-0 mt-4">
            </p><h5 style="color:#466a96"><i class="fa fa-comments"></i> Mural de recados</h5><h5 onClick="window.location='your_messages.php'"><i class="fa fa-comment"></i> Meus recados</h5></p></div>
          <hr class="mt-2">
          
          <?php listUsers2("SELECT users.id_user,messages.title_message,messages.text_message,messages.date_message,messages.time_message,sectors.name_sector,users.name_user,users.second_name_user,users.url_img FROM messages INNER JOIN users ON users.id_user = messages.id_user INNER JOIN sectors ON sectors.id_sector = messages.id_sector ORDER BY messages.id_message DESC;","../")?>
         
</div>
    </div>
    <!-- /.container-fluid-->
    
    <?php footer("../")?>
    <?php script("../")?>
  </div>
</body>

</html>
