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
<link rel="stylesheet" href="../css/style_modal.css"> 
  <!-- Navigation-->
  <?php navigation("../");?>
  <?php functions()?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <p>
      
      <?php listProfile2("SELECT users.id_user,users.birthday_user,users.name_user,users.second_name_user,users.url_img,users.phone_user,users.function_user,users.ramal_user,users.email_user,sectors.name_sector FROM users INNER JOIN sectors ON users.sector_user_id = sectors.id_sector WHERE id_user =".$_SESSION['id'].";") ?>
      <?php  get_img();?>
    <!-- /.container-fluid-->
    
    <?php footer("../")?>
    <?php script("../")?>
  </div>
</body>

</html>
