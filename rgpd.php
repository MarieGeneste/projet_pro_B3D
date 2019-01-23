<!DOCTYPE html>
<html lang="fr">



  <?php require('./base/header.php');?>
    <body data-rellax-speed="7">

      <?php include('./includes/head-menu.php');?>


      <!-- Contenu -->
      <div class="page-content">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-md-12">

              <div class="panel-white">
              <div class="header"><i class="fas fa-fingerprint"></i> <?= $_SESSION['translate']['rgpd_title'];?></div>
              <div class="content">
                <p><?= $_SESSION['translate']['rgpd_text'];?></p>


            </div>
          </div>
        </div>


          </div>
        </div>
        </div>
      </div>


      <?php include('./base/footer.php');?>
      <script>
           var rellax = new Rellax('body', {
  });
      </script>




    </body>
</html>
