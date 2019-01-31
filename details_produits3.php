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
                <div class="header"><i class="fas fa-tree"></i></i> <?= $_SESSION['translate']['prod3_title'];?></div>
                <div class="content">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="visual">
                        <img src="ressources/produits/003.jpg">
                      </div>
                      <div class="status">
                        Disponible
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="category">Description du produit</div>
                      <div class="description">
                        <?= $_SESSION['translate']['prod3_text'];?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12" >
                    <!-- ------------ INSERT TABLE HERE ----------- -->
                    <div class="category">Detailles du produit</div>

                    <h3 class="pour_table">Piquets viticoles</h3>
  <table >
    <tbody>
      <tr>
        <th colspan="2">Longueurs</th>
        <th>2m 00</th>
        <th>2m 30</th>
        <th>2m 50</th>
      </tr>
      <tr>
        <td rowspan="3"><span class="verticalCells">Diamètres fin bout</span></td>
        <td>7/10 cm</td>
        <td colspan="3">80 µ / palettes</td>
      </tr>
      <tr>
        <td>10/12 cm</td>
        <td colspan="3">72 µ / palettes</td>
      </tr>
      <tr>
        <td>12/14 cm</td>
        <td colspan="3">56 µ / palettes</td>
      </tr>
    </tbody>
  </table>


  <h3 class="pour_table">Poteaux arboricoles</h3>
     <table>
       <tbody>
         <tr>
           <th colspan="2">Longueurs</th>
           <th>2m 50</th>
           <th>2m 80</th>
           <th>3m 00</th>
           <th>3m 50</th>
           <th>4m 00</th>
           <th>4m 50</th>
           <th>5m 00</th>
         </tr>
         <tr>
           <td rowspan="4"><span class="verticalCells">Diamètres fin bout</span></td>
           <td>7/10 cm</td>
           <td colspan="3">80 µ / palettes</td>
           <td colspan="4">-</td>
         </tr>
         <tr>
           <td>10/12 cm</td>
           <td colspan="4">72 µ / palettes</td>
           <td colspan="3">64 µ / palettes</td>
         </tr>
         <tr>
           <td>12/14 cm</td>
           <td colspan="4">56 µ / palettes</td>
           <td colspan="3">48 µ / palettes</td>
         </tr>
         <tr>
           <td>14/16 cm</td>
           <td colspan="4">42 µ / palettes</td>
           <td colspan="3">36 µ / palettes</td>
         </tr>
       </tbody>
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
