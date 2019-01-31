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
                      <div class="status">
                        Disponible
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="category">Description du produit</div>
                      <div class="description">
                        <?= $_SESSION['translate']['prod1_text'];?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12" >
                    <!-- ------------ INSERT TABLE HERE ----------- -->

<h3 class="pour_table">Piquets châtaignier</h3>

                       <table>
                         <tr>
                           <th colspan="2">Longueurs</th>
                           <th>2m 00</th>
                           <th>2m 30</th>
                           <th>2m 50</th>
                         </tr>
                         <tr>
                           <td rowspan="2">Périmètres fin bout</td>
                           <td>24/29 cm</td>
                           <td colspan="3">130 µ / palette</td>
                         </tr>
                         <tr>
                           <td>28 cm et +</td>
                           <td colspan="4">110 µ / palette</td>
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
      </script>
    </body>
</html>
