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
              <div class="header"><i class="fas fa-tree"></i></i> <?= $_SESSION['translate']['prod2_title'];?></div>
                <div class="content">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="visual">
                        <img src="ressources/produits/002.jpg">
                      </div>
                      <div class="status">
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
                    </div>

                    </div>
                    <div class="col-md-8">
                      <h2> > Description du produit</h2>
                      <div class="description">
                        <?= $_SESSION['translate']['prod2_text'];?>
                      </div>
                      <a id="show-desc"> <i class="fas fa-info-circle"></i> Voir la fiche détaillée </a>
                    </div>
                  </div>
                  <div id="desc" class="col-md-12 hide" >
                    <!-- ------------ INSERT TABLE HERE ----------- -->
                    <div>
                      <hr />

                       <h3 class="pour_table">Piquets fendus</h3>
                      <table>
                        <tr>
                          <th colspan="2">Longueurs</th>
                          <th>1m 40</th>
                          <th>1m 80</th>
                          <th>2m 00</th>
                          <th>2m 30</th>
                          <th>2m 50</th>
                        </tr>
                        <tr>
                          <td rowspan="4">Périmètres bout fin</td>
                          <td>19/23 cm</td>
                          <td colspan="3">160 µ / palette</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>23/26 cm</td>
                          <td colspan="4">150 µ / palette</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>26/29 cm</td>
                          <td colspan="5">130 µ / palette</td>
                        </tr>
                        <tr>
                          <td>29 cm et plus</td>
                          <td>-</td>
                          <td colspan="4">110 µ / palette</td>
                        </tr>
                      </table>


                      <h3 class="pour_table">Piquets ronds</h3>
                           <table>
                             <tr>
                               <th colspan="2">Longueurs</th>
                               <th>1m 80</th>
                               <th>2m 00</th>
                               <th>2m 30</th>
                               <th>2m 50</th>
                               <th>3m 00</th>
                               <th>4m 00</th>
                             </tr>
                             <tr>
                               <td rowspan="4">Diamètres bout fin</td>
                               <td>6/8 cm</td>
                               <td colspan="3">80 µ / palette</td>
                               <td>-</td>
                               <td>-</td>
                               <td>-</td>
                             </tr>
                             <tr>
                               <td>8/10 cm</td>
                               <td colspan="4">71 µ / palette</td>
                               <td>-</td>
                               <td>-</td>
                             </tr>
                             <tr>
                               <td>10/12 cm</td>
                               <td colspan="6">56 µ / palette</td>
                             </tr>
                             <tr>
                               <td>12/15 cm</td>
                               <td colspan="6">42 µ / palette</td>
                             </tr>
                           </table>

                    <div>
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
