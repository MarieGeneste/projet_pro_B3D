<!DOCTYPE html>
<html lang="fr">
    <?php require('./base/header.php');?>
    <link rel="stylesheet" href="./stylesheet/details_produits.css">
    <body data-rellax-speed="7">

      <?php include('./includes/head-menu.php');?>
      <!-- Contenu -->
      <div class="page-content">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-md-12">

              <div class="panel-white detailsInfos">
              <div class="header"><i class="fas fa-tree"></i></i> <?= $_SESSION['translate']['prod2_title'];?></div>
              <div class="content">
                <?= $_SESSION['translate']['prod2_text'];?>
                </div>

              </div>
            </div>
            </div>




            <section class="d-flex justify-content-center row">

              <div class="detailsProd panel-white mini d-flex col-md-10 col-8 row">

                <div class="header justify-content-center  row flex-column col-md-1 col-2 d-flex">
                  <div class="align-items-center">
                    <img style="width:40px" class="imgIcon" src="" />
                    <p>
                     <span class="icons" style="font-size: 40px;"> ø </span> 10 cm
                    </p>
                    <img style="width:40px" class="imgIcon" src="" />
                    <p>
                      <i class="fas fa-arrows-alt-v icons"></i> 100 cm
                    </p>

                  </div>
                  </div>
                  <div class="blocText col-md-11 col-10 text-center row d-flex">
                    <div class="imgProd col-md-4 col-12 text-center align-self-center">
                      <img src="ressources/produits/001.jpg">
                    </div>
                    <div class="text-cont text-md-left col-md-8 col-12 align-self-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nemo minus necessitatibus ullam, molestiae facere ad, sequi, sunt recusandae repellendus accusantium, aspernatur fuga ratione consequuntur consequatur eligendi natus eaque error.
                    </div>
                  </div>

              </div>

              <div class="detailsProd panel-white mini d-flex col-md-10 col-8 row">

                <div class="header justify-content-center  row flex-column col-md-1 col-2 d-flex">
                  <div class="align-items-center">
                    <img style="width:40px" class="imgIcon" src="" />
                    <p>
                     <span class="icons" style="font-size: 40px;"> ø </span> 10 cm
                    </p>
                    <img style="width:40px" class="imgIcon" src="" />
                    <p>
                      <i class="fas fa-arrows-alt-v icons"></i> 100 cm
                    </p>

                  </div>
                  </div>
                  <div class="blocText col-md-11 col-10 text-center row d-flex">
                    <div class="imgProd col-md-4 col-12 text-center align-self-center">
                      <img src="ressources/produits/002.jpg">
                    </div>
                    <div class="text-cont text-md-left col-md-8 col-12 align-self-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nemo minus necessitatibus ullam, molestiae facere ad, sequi, sunt recusandae repellendus accusantium, aspernatur fuga ratione consequuntur consequatur eligendi natus eaque error.
                    </div>
                  </div>

              </div>

              <div class="detailsProd panel-white mini d-flex col-md-10 col-8 row">

                <div class="header justify-content-center  row flex-column col-md-1 col-2 d-flex">
                  <div class="align-items-center">
                    <img style="width:40px" class="imgIcon" src="" />
                    <p>
                     <span class="icons" style="font-size: 40px;"> ø </span> 10 cm
                    </p>
                    <img style="width:40px" class="imgIcon" src="" />
                    <p>
                      <i class="fas fa-arrows-alt-v icons"></i> 100 cm
                    </p>

                  </div>
                  </div>
                  <div class="blocText col-md-11 col-10 text-center row d-flex">
                    <div class="imgProd col-md-4 col-12 text-center align-self-center">
                      <img src="ressources/produits/003.jpg">
                    </div>
                    <div class="text-cont text-md-left col-md-8 col-12 align-self-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nemo minus necessitatibus ullam, molestiae facere ad, sequi, sunt recusandae repellendus accusantium, aspernatur fuga ratione consequuntur consequatur eligendi natus eaque error.
                    </div>
                  </div>

              </div>



            </section>






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
