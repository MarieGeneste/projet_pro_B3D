<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B3D</title>
    <!-- Chargement des ressources -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesheet/global.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./stylesheet/produits.css">
    <!-- Chargement des scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/rellax/rellax.min.js"></script>
  </head>
    <body data-rellax-speed="7">

      <?php include('./includes/header.php');?>
      <!-- Contenu -->
      <div class="page-content">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-md-12">

              <div class="panel-white">
              <div class="header"><i class="fas fa-tree"></i></i> Produits</div>
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dolore, vitae, aspernatur cum, mollitia error ratione ullam quae, in fugit harum voluptatem deleniti pariatur corrupti quisquam ipsam vero! Tenetur, impedit. <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nemo minus necessitatibus ullam, molestiae facere ad, sequi, sunt recusandae repellendus accusantium, aspernatur fuga ratione consequuntur consequatur eligendi natus eaque error.</div>

              </div>
            </div>
            </div>





            <div class="col-lg-4 col-md-6">

              <div class="panel-white mini">
              <div class="header">Piquets chataigner</div>
              <div class="content">

                <img src="ressources/produits/001.jpg">
                <div class="text-cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nemo minus necessitatibus ullam, molestiae facere ad, sequi, sunt recusandae repellendus accusantium, aspernatur fuga ratione consequuntur consequatur eligendi natus eaque error.</div>
                <botton class='prod-btn'>Nos produits chataigner</botton>
              </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">

              <div class="panel-white mini">
              <div class="header">Piquets accacia</div>
              <div class="content">

                <img src="ressources/produits/002.jpg">
                <div class="text-cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nemo minus necessitatibus ullam, molestiae facere ad, sequi, sunt recusandae repellendus accusantium, aspernatur fuga ratione consequuntur consequatur eligendi natus eaque error.</div>
                <botton class='prod-btn'>Nos produits accacia</botton>
              </div>

              </div>
            </div>

            <div class="col-lg-4 col-md-6">

              <div class="panel-white mini">
              <div class="header">Piquets pin</div>
              <div class="content">

                <img src="ressources/produits/003.jpg">
                <div class="text-cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nemo minus necessitatibus ullam, molestiae facere ad, sequi, sunt recusandae repellendus accusantium, aspernatur fuga ratione consequuntur consequatur eligendi natus eaque error.</div>
                <botton class='prod-btn'>Nos produits pin</botton>
              </div>

              </div>
            </div>






          </div>
        </div>
        </div>
      </div>


      <?php include('./includes/footer.php');?>
      <script>
           var rellax = new Rellax('body', {
  });
      </script>
    </body>
</html>
