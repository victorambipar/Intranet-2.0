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
            </p><h5 onClick="window.location='messages_admin.php'" style="color:#466a96"><i class="fa fa-newspaper-o"></i> Minhas postagens</h5></p></div>
          <hr class="mt-2">
          <div class="col-md-2">
          <p><h5 onClick="document.getElementById('id05').style.display='block'"><i class="fa fa-plus" width="200px" height="200px"></i> Notícias<h5></p>
          </div>
          <hr class="mt-2">
          <?php listMyNotifications("SELECT users.id_user,users.name_user,users.second_name_user,users.url_img,notifications.title_notification,notifications.text_notification,notifications.date_notification,notifications.time_notification FROM notifications INNER JOIN users ON notifications.id_user = users.id_user WHERE users.id_user=".$_SESSION["id"]." ORDER BY notifications.id_notification DESC;","../")?>
         
</div>
    </div>
    <!-- /.container-fluid-->
    
    <?php footer("../")?>
    <?php script("../")?>
  </div>
</body>

</html>
