<!DOCTYPE html>
<html lang="fr">
    <?php require('./base/header.php');?>
    <link rel="stylesheet" href="stylesheet/society.css">
    <body data-rellax-speed="7">
      <?php include('./includes/head-menu.php');?>
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
              <div class="header"><i class="far fa-clock"></i> <?= $_SESSION['translate']['society_aboutme_title'];?></div>
              <div class="content">
                <p><?= $_SESSION['translate']['society_aboutme_desc'];?></p>
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
           <img class="demo cursor" src="./ressources/images/1.JPG" style="width:100%" onclick="currentSlide(1)" alt="<?= $_SESSION['translate']['society_img1'];?>">

         </div>
         <div class="column">
           <img class="demo cursor" src="./ressources/images/2.JPG" style="width:100%" onclick="currentSlide(2)" alt="<?= $_SESSION['translate']['society_img2'];?>">
         </div>
         <div class="column">
           <img class="demo cursor" src="./ressources/images/3.JPG" style="width:100%" onclick="currentSlide(3)" alt="<?= $_SESSION['translate']['society_img3'];?>">
         </div>
         <div class="column">
           <img class="demo cursor" src="./ressources/images/4.JPG" style="width:100%" onclick="currentSlide(4)" alt="<?= $_SESSION['translate']['society_img4'];?>">
         </div>
         <div class="column">
           <img class="demo cursor" src="./ressources/images/5.JPG" style="width:100%" onclick="currentSlide(5)" alt="<?= $_SESSION['translate']['society_img5'];?>">
         </div>
         <div class="column">
           <img class="demo cursor" src="./ressources/images/6.JPG" style="width:100%" onclick="currentSlide(6)" alt="<?= $_SESSION['translate']['society_img6'];?>">
         </div>
       </div>
      </div>
      </div>
     <?php include('./base/footer.php');?>
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
