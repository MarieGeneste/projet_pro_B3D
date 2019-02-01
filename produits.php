<!DOCTYPE html>
<html lang="fr">
    <?php require('./base/header.php');?>
    <link rel="stylesheet" href="./stylesheet/produits.css">
    <body data-rellax-speed="7">

      <?php include('./includes/head-menu.php');?>
      <!-- Contenu -->
      <div class="page-content">
        <div class="container">

        <div>
          <div class="panel-white">
            <div class="header"><i class="fas fa-tree"></i></i> <?= $_SESSION['translate']['products_title'];?></div>
            <div class="content">
            <?= $_SESSION['translate']['products_text'];?>
            </div>
          </div>
        </div>

          <div class="row justify-content-center products">

            <div class="col-lg-6 col-md-6">
              <div class="horiz_prod">
              <div class="panel-white mini horiz_prod">
                <div class="header"><?= $_SESSION['translate']['products_prod1_title'];?></div>
                <div class="content ">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 prod_img">
                      <img src="ressources/produits/001.jpg">
                    </div>
                    <div class="col-lg-12 col-md-12 text-cont">
                      <?= $_SESSION['translate']['products_prod1_text'];?>
                      <a href="details_produits1.php" class="prod_btn"><i class="fas fa-info-circle"></i> <?= $_SESSION['translate']['products_prod1_btn'];?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <!--=================================-->

            <div class="col-lg-6 col-md-6">
              <div class="horiz_prod">
              <div class="panel-white mini horiz_prod">
                <div class="header"><?= $_SESSION['translate']['products_prod2_title'];?></div>
                <div class="content ">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 prod_img">
                      <img src="ressources/produits/002.jpg">
                    </div>
                    <div class="col-lg-12 col-md-12 text-cont">
                      <?= $_SESSION['translate']['products_prod2_text'];?>
                      <a href="details_produits2.php" class="prod_btn"><i class="fas fa-info-circle"></i> <?= $_SESSION['translate']['products_prod2_btn'];?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <!--=================================-->

            <div class="col-lg-6 col-md-6">
<div class="horiz_prod last">
              <div class="panel-white mini ">
                <div class="header"><?= $_SESSION['translate']['products_prod3_title'];?></div>
                <div class="content ">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 prod_img">
                      <img src="ressources/produits/003.jpg">
                    </div>
                    <div class="col-lg-12 col-md-12 text-cont">
                      <?= $_SESSION['translate']['products_prod3_text'];?>
                    <a href="details_produits3.php" class="prod_btn"><i class="fas fa-info-circle"></i> <?= $_SESSION['translate']['products_prod3_btn'];?></a>
                    </div>
                  </div>
                </div>
              </div>
</div>
            </div>
            <!--=================================-->

            <div class="col-lg-6 col-md-6">
<div class="horiz_prod last">
              <div class="panel-white mini ">
                <div class="header"><?= $_SESSION['translate']['products_prod4_title'];?></div>
                <div class="content ">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 prod_img">
                      <img src="ressources/produits/004.jpg">
                    </div>
                    <div class="col-lg-12 col-md-12 text-cont">
                      <?= $_SESSION['translate']['products_prod4_text'];?>
                    <a href="details_produits4.php" class="prod_btn"><i class="fas fa-info-circle"></i> <?= $_SESSION['translate']['products_prod4_btn'];?></a>
                    </div>
                  </div>
                </div>
              </div>
</div>
            </div>
            <!--=================================-->



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
