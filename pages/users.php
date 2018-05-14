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
    
    <div class="container">
	<div class="row">
        <div class="col-md-12">
        <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Pesquisar..." />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
	</div>
</div>

      <div class="row">
        <div class="col-md-12">
          <!-- Example Bar Chart Card-->
          
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-users"></i> Usuários</div>
          <hr class="mt-2">
          <br>
          <?php listUsers("SELECT * FROM users ORDER BY name_user ASC;","../")?>          
          <!-- /Card Columns-->
        </div>
</div>
    </div>
    <!-- /.container-fluid-->
    
    <?php footer("../")?>
    <?php script("../")?>
  </div>
</body>

</html>
