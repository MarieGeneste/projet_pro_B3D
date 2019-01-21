
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


<nav id="large-desktop" class="navbar navbar-expand-lg navbar-light bg-light background">
<!--  <div class="container"> -->
    <a class="navbar-brand" href="./index.php">
      <img src="ressources/society/logo.png" />
      <!--<div class="slogan">Piquets, Rondins</div>-->
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="society.php"><?= $_SESSION['translate']['menu_society'];?></a>
      </li>
      <div class="dropdown">
      <li class="nav-item">
        <a class="nav-link" id="open-dropdown" href="produits.php"><?= $_SESSION['translate']['menu_products'];?> <i class="fas fa-caret-down"></i></a>
      </li>
        <div class="dropdown-content">
          <a href="details_produits1.php"><?= $_SESSION['translate']['menu_products_chestnut'];?></a>
          <a href="details_produits2.php"><?= $_SESSION['translate']['menu_products_acacia'];?></a>
          <a href="details_produits3.php"><?= $_SESSION['translate']['menu_products_pine'];?></a>
        </div>
      </div>
      <li class="nav-item">
        <a class="nav-link disabled" href="contacts.php"><?= $_SESSION['translate']['menu_contact'];?></a>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><i class="fas fa-globe-europe"></i> Français</li>
    </ul>
  </div>
<!--</div>-->
</nav>


<div id="mobile" class="mobile-navbar-content">
  <img id="background" src="ressources/society/header_bg.png">
  <img id="logo" style="width: 80px;margin: 10px 0;" src="ressources/society/logo.png" />
  <ul class="navb">
    <a href="society.php"><li class="link"><?= $_SESSION['translate']['menu_society'];?></li></a>
      <div id="mobile-dropdown">
        <a href="#" id="open-mobile-dropdown"><li class="link"><?= $_SESSION['translate']['menu_products'];?> <span id="arrow"><i class="fas fa-caret-down"></i></i></span></li></a>
        <div class="mobile-dropdown-content">
          <a href="produits.php">Produits</a>
          <hr />
          <a href="details_produits.php"><?= $_SESSION['translate']['menu_products_chestnut'];?></a>
          <a href="details_produits.php"><?= $_SESSION['translate']['menu_products_pine'];?></a>
          <a href="details_produits.php"><?= $_SESSION['translate']['menu_products_acacia'];?></a>
        </div>
      </div>


     <a href="contacts.php"><li class="link"><?= $_SESSION['translate']['menu_contact'];?></li></a>
  </ul>
</div>
<style>
#arrow {
  padding-left:5px;
}
#mobile-dropdown {
  display: inline-block;

}
.mobile-dropdown-content {
  display: block;
  position: absolute;
  color: #fff !important;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  position:fixed;
}

.mobile-dropdown-content a {
  color: black !important;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
</style>

<style type="text/css">
  #mobile a {
    color: #fff;
    text-decoration: none;
    font-weight: unset;
  }
  .mobile-navbar-content {
    color: #fff !important;
    width: 100vw;
    height: 180px;
    text-align: center;
  }

  .mobile-navbar-content #background {
    width:100%;
    height: 180px;
    position: absolute;
    top: 0;
    left:0;
    z-index: -10;
  }


  }
  .mobile-navbar-content #logo {
    width: 80px;
    margin: 10px 0;
  }
  .mobile-navbar-content .navb {
    display: block;
    width: 100%;
    padding: 0;
    margin: 0;
    text-align: center;
  }

  .mobile-navbar-content .navb .link {
    display: inline-block;
    background-color: #ae2626;
    border-radius: 2px;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
    padding: 10px 20px;
  }
  .mobile-navbar-content .navb .link:hover {
    transition: all 0.3s ease-in-out;
    background-color: #e93535;
  }
  @media (min-width: 900px) {
    #mobile {
      display: none;
    }
  }

  @media (max-width: 900px) {
    #large-desktop {
      display: none;
    }
    .page-content .container{
      position: relative;
      top: 0;
      padding-top:10px;
    }


  }
</style>

<style type="text/css">

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  color: #fff !important;
  background-color: transparent;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  position:fixed;
}

.dropdown-content a {
  border-top: 1px solid #fff;
  margin-top: 2px;
}

.dropdown-content a:hover{
    transition: all 0.3s ease-in-out;
    border-top: 2px solid #ae2626 !important;
    margin-top: 0px;
  }

.dropdown-content a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: none;
  display: table-cell;
}

.dropdown:hover .dropdown-content {display: block;}
</style>

<script type="text/javascript">
  var Open = false;
  $('.mobile-dropdown-content').css('display', 'none');

  $('#open-mobile-dropdown').on('click', function(e){
    e.preventDefault();
    if (Open == false) {
      $('.mobile-dropdown-content').css('display', 'block');
      $('#arrow').html('<span id="arrow"><i class="fas fa-caret-up"></i></span>');
      Open = true;
    } else {
      $('.mobile-dropdown-content').css('display', 'none');
      $('#arrow').html('<span id="arrow"><i class="fas fa-caret-down"></i></span>');
      Open = false;
    }
  });
</script>
