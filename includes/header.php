<nav class="navbar navbar-expand-lg navbar-light bg-light background">
  <a class="navbar-brand" href="#"><img src="ressources/society/logo.png" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Accueil</a>
      </li>
      <li class="nav-item <?php if(strpos($_SERVER['REQUEST_URI'], 'society')) { echo('active'); } ?>">
        <a class="nav-link " href="society.php">Société</a>
      </li>
      <li class="nav-item <?php if(strpos($_SERVER['REQUEST_URI'], 'produits')) { echo('active'); } ?>">
        <a class="nav-link" href="produits.php">Produits</a>
      </li>
      <li class="nav-item <?php if(strpos($_SERVER['REQUEST_URI'], 'contacts')) { echo('active'); } ?>">
        <a class="nav-link" href="contacts.php">Contact</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><i class="fas fa-globe-europe"></i> Français</li>
    </ul>
  </div>
</nav>
