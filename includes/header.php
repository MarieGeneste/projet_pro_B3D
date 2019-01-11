

<nav class="navbar navbar-expand-lg navbar-light bg-light background">
  <img src="ressources/society/logo.png" /><a class="navbar-brand" href="index.php"><i class="fas fa-globe-europe"></i> Français</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="society.php">Société</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="produits.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produits
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="details_produits.php">Piquêts Chataignier</a>
          <a class="dropdown-item" href="#">Piquets Pin</a>
          <a class="dropdown-item" href="#">Piquets Accacia</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
    <!-- <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"></li>
    </ul> -->
  </div>
</nav>

<!--


<nav class="navbar navbar-expand-lg navbar-light bg-light background">
  <a class="navbar-brand" href="#"><img src="ressources/society/logo.png" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <li class="nav-item <?php //if(strpos($_SERVER['REQUEST_URI'], 'society')) { echo('active'); } ?>">
        <a class="nav-link " href="society.php">Société</a>
      </li>
      <li class="nav-item <?php //if(strpos($_SERVER['REQUEST_URI'], 'produits')) { echo('active'); } ?>">
        <button type="button" class="btn dropdown-toggle dropdown-toggle-split align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a class="nav-link" href="produits.php">Produits</a>
        <span class="sr-only">Toggle</span>
        </button>
         <div class="dropdown-menu btn-danger" style="position:inherit;" aria-labelledby="btnDropdownDemo">
           <a class="dropdown-item btn-danger " href="details_produits.php">Tous les produits</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item btn-danger " href="details_produits.php">Piquêts Chataignier</a>
           <a class="dropdown-item btn-danger " href="#">Piquets Pin</a>
           <a class="dropdown-item btn-danger " href="#">Piquets Accacia</a>
         </div>
      </li>
      <li class="nav-item <?php //if(strpos($_SERVER['REQUEST_URI'], 'contact')) { echo('active'); } ?>">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>

  </div>
</nav> -->
