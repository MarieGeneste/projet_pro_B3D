<!DOCTYPE html>
<html lang="fr">
    <?php require('./base/header.php');?>
    <link rel="stylesheet" href="./stylesheet/product.css">
    <body data-rellax-speed="7">

      <?php include('./includes/head-menu.php');?>
      <!-- Contenu -->
      <div class="page-content product">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="panel-white">
                <div class="header"><i class="fas fa-tree"></i></i> <?= $_SESSION['translate']['prod1_title'];?></div>
                <div class="content">
                <div class="row">
                    <div class="col-md-4">
                      <div class="visual">
                        <img src="ressources/produits/001.jpg">
                      </div>
                      <!-- <div class="status">
                        Disponible
                      </div>

                    <div class="info">
                        <div class="item">
                          <img style="width:40px" class="imgIcon" src="" />
                          <span class="icons" style="font-size: 40px;"> ø </span> 10 cm
                      </div>
                        <div class="item">
                          <img style="width:40px" class="imgIcon" src="" />
                            <i class="fas fa-arrows-alt-h icons"></i> 100 cm
                        </div>
                    </div> -->

                    </div>
                    <div class="col-md-8">
                      <h2> <?= $_SESSION['translate']['table10'];?></h2>
                      <div class="description">
                        <?= $_SESSION['translate']['prod1_text'];?>
                      </div>
                      <a id="show-desc"> <i class="fas fa-info-circle"></i> <?= $_SESSION['translate']['table0'];?> </a>
                    </div>
                  </div>
                  <div id="desc" class="col-md-12 hide" >
                    <!-- ------------ INSERT TABLE HERE ----------- -->
                    <div>
                      <hr />
                      <h3 class="pour_table"><?= $_SESSION['translate']['table7'];?></h3>

                       <table>
                         <tr>
                           <th colspan="2"><?= $_SESSION['translate']['table1'];?></th>
                           <th>2m 00</th>
                           <th>2m 30</th>
                           <th>2m 50</th>
                         </tr>
                         <tr>
                           <td rowspan="2"><?= $_SESSION['translate']['table7'];?></td>
                           <td>24/29 cm</td>
                           <td colspan="3">130 <?= $_SESSION['translate']['table6'];?></td>
                         </tr>
                         <tr>
                           <td>28 cm et +</td>
                           <td colspan="4">110 <?= $_SESSION['translate']['table6'];?></td>
                         </tr>
                       </table>
                  </div>
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
      $('#show-desc').on('click', function(){
          $("#desc").slideToggle("hide");
        })
      </script>
    </body>
</html>
