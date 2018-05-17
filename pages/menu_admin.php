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
    
    <button type="button" onClick="document.getElementById('id06').style.display='block'" class="btn btn-success">
    Adicionar</button>
    <br><br>
      
      

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Cardápio</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <th>Data</th>
                <th>Prato 1</th>
                <th>Prato 2</th>
                <th>Prato 3</th>
                <th>Guarnição 1</th>
                <th>Guarnição 2</th>
                <th>Opção</th>
                <th>Salada</th>
                <th>Sobremesas</th>
                <th>Editar</th>
                <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
                <?php listMenuAdmin("SELECT * FROM menu ORDER BY date_menu ASC;");?>
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
