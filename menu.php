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
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=610" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                <p class="card-text small">These waves are looking pretty good today!
                  <a href="#">#surfsup</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                  <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>Very nice! I wish I was there! That looks amazing!
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item">
                        <a href="#">Like</a>
                      </li>
                      <li class="list-inline-item">·</li>
                      <li class="list-inline-item">
                        <a href="#">Reply</a>
                      </li>
                    </ul>
                    <div class="media mt-3">
                      <a class="d-flex pr-3" href="#">
                        <img src="http://placehold.it/45x45" alt="">
                      </a>
                      <div class="media-body">
                        <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>Next time for sure!
                        <ul class="list-inline mb-0">
                          <li class="list-inline-item">
                            <a href="#">Like</a>
                          </li>
                          <li class="list-inline-item">·</li>
                          <li class="list-inline-item">
                            <a href="#">Reply</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">Posted 32 mins ago</div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=281" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Jeffery Wellings</a></h6>
                <p class="card-text small">Nice shot from the skate park!
                  <a href="#">#kickflip</a>
                  <a href="#">#holdmybeer</a>
                  <a href="#">#igotthis</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
              <div class="card-footer small text-muted">Posted 1 hr ago</div>
            </div>
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
