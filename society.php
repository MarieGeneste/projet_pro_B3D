<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B3D</title>
    <!-- Chargement des ressources -->
    <link rel="stylesheet" href="bootstrap/css/stylesheet.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="stylesheet/global.css">
    <link rel="stylesheet" href="stylesheet/society.css">
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
          <div class="row">
          <div class="col-md-4">
            <div class="portrait">
            <img src="./ressources/society/portret.jpg">
          </div>
          </div>
          <div class="col-md-8">
            <div class="panel-white about-me">
              <div class="header"><i class="far fa-clock"></i> Historique de la société</div>
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dolore, vitae, aspernatur cum, mollitia error ratione ullam quae, in fugit harum voluptatem deleniti pariatur corrupti quisquam ipsam vero! Tenetur, impedit. <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nemo minus necessitatibus ullam, molestiae facere ad, sequi, sunt recusandae repellendus accusantium, aspernatur fuga ratione consequuntur consequatur eligendi natus eaque error.</div>
                <div>Cumque quisquam nemo perspiciatis reiciendis porro voluptate recusandae, sequi iste aperiam obcaecati numquam, iusto sint officia officiis vero natus mollitia, neque ea enim optio aliquid ex aliquam animi. Unde, veritatis.</div>
              </div>
            </div>
          </div>
        </div>
        </div>
   <!-- Container for the image gallery -->
     <div class="container caroussel">

       <!-- Full-width images with number text -->
       <div class="mySlides">
         <div class="numbertext">1 / 6</div>
           <img src="./ressources/images/1.JPG" style="width:100%">
       </div>

       <div class="mySlides">
         <div class="numbertext">2 / 6</div>
           <img src="./ressources/images/2.JPG" style="width:100%">
       </div>

       <div class="mySlides">
         <div class="numbertext">3 / 6</div>
           <img src="./ressources/images/3.JPG" style="width:100%">
       </div>

       <div class="mySlides">
         <div class="numbertext">4 / 6</div>
           <img src="./ressources/images/4.JPG" style="width:100%">
       </div>

       <div class="mySlides">
         <div class="numbertext">5 / 6</div>
           <img src="./ressources/images/5.JPG" style="width:100%">
       </div>

       <div class="mySlides">
         <div class="numbertext">6 / 6</div>
           <img src="./ressources/images/6.JPG" style="width:100%">
       </div>

       <!-- Next and previous buttons -->
       <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
       <a class="next" onclick="plusSlides(1)">&#10095;</a>

       <!-- Image text -->
       <div class="caption-container">
         <p id="caption"></p>
       </div>

       <!-- Thumbnail images -->
       <div class="row">
         <div class="column">
           <img class="demo cursor" src="./ressources/images/1.JPG" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
         </div>
         <div class="column">
           <img class="demo cursor" src="./ressources/images/2.JPG" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
         </div>
         <div class="column">
           <img class="demo cursor" src="./ressources/images/3.JPG" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
         </div>
         <div class="column">
           <img class="demo cursor" src="./ressources/images/4.JPG" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
         </div>
         <div class="column">
           <img class="demo cursor" src="./ressources/images/5.JPG" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
         </div>
         <div class="column">
           <img class="demo cursor" src="./ressources/images/6.JPG" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
         </div>
       </div>
      </div>
     <?php include('./includes/footer.php');?>
    </body>
</html>

<script>
  // Also can pass in optional settings block
  var rellax = new Rellax('body', {
  });
  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
</script>
