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
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-phone"></i> Ramais</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ramal</th>
                </tr>
              </thead>
              <tbody>
                <?php listExtensions("SELECT * FROM users ORDER BY name_user ASC;");?>
              </tbody>
            </table>
          </div>
        </div>
       
      </div>
      
    </div>
    
    <!-- /.container-fluid-->
    
    <?php footer("../");?>
    <?php script("../");?>
  </div>
</body>

</html>
