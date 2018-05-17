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
<link rel="stylesheet" href="../css/calendar.css">  
  <!-- Navigation-->
  
  
  <?php navigation("../");?>
  
  <?php functions()?>
 
  <div class="content-wrapper">
    <div class="container-fluid">
      
    <div id='wrap'>

        <div id='calendar'></div>

        <div style='clear:both'></div>
       
    </div>  
  </div>
 
    <!-- /.container-fluid-->
    
    <?php footer("../");?>
    <script src="../js/calendar.js"></script>
    <?php script("../");?>
    <?php calendar()?>
    
  </div>
</body>

</html>
