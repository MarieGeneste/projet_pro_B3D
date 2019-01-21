<!DOCTYPE html>
<html lang="fr">
    <?php require('./base/header.php');?>
    <link rel="stylesheet" href="./stylesheet/produits.css">
    <body data-rellax-speed="7">

      <?php include('./includes/head-menu.php');?>
      <!-- Contenu -->
      <div class="page-content">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-md-12">

              <div class="panel-white">
              <div class="header"><i class="fas fa-tree"></i></i> <?= $_SESSION['translate']['products_title'];?></div>
              <div class="content">
               <?= $_SESSION['translate']['products_text'];?>
              </div>
            </div>
            </div>





            <div class="col-lg-4 col-md-6">

              <div class="panel-white mini">
              <div class="header"><?= $_SESSION['translate']['products_prod1_title'];?></div>
              <div class="content">

                <img src="ressources/produits/001.jpg">
                <div class="text-cont"><?= $_SESSION['translate']['products_prod1_text'];?></div>
                <botton class='prod-btn'><a href="details_produits1.php"><?= $_SESSION['translate']['products_prod1_btn'];?></a></botton>
              </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">

              <div class="panel-white mini">
              <div class="header"><?= $_SESSION['translate']['products_prod2_title'];?></div>
              <div class="content">

                <img src="ressources/produits/002.jpg">
                <div class="text-cont"><?= $_SESSION['translate']['products_prod2_text'];?></div>
                <botton class='prod-btn'><a href="details_produits2.php"><?= $_SESSION['translate']['products_prod2_btn'];?></a></botton>
              </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">

              <div class="panel-white mini">
              <div class="header"><?= $_SESSION['translate']['products_prod3_title'];?></div>
              <div class="content">

                <img src="ressources/produits/003.jpg">
                <div class="text-cont"><?= $_SESSION['translate']['products_prod3_text'];?></div>
                <botton class='prod-btn'><a href="details_produits3.php"><?= $_SESSION['translate']['products_prod3_btn'];?></a></botton>
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
