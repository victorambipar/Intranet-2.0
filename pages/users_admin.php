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
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Usuários</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Data de nascimento</th>
                <th>Função</th>
                <th>Setor</th>
                <th>Ramal</th>
                <th>Permissão</th>
                <th>Editar</th>
                <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
                <?php listUsersAdmin("SELECT users.id_user,users.name_user,users.second_name_user,users.birthday_user,users.function_user,
        sectors.name_sector,users.email_user,users.phone_user,users.ramal_user,permissions.name_permission FROM users 
        INNER JOIN sectors ON sectors.id_sector = users.sector_user_id INNER JOIN permissions ON 
        permissions.id_permission = users.permission_user ORDER BY users.name_user ASC;");?>
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
