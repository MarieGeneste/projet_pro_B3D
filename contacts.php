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
    <link rel="stylesheet" href="./stylesheet/contacts.css">
    <!-- Chargement des scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/rellax/rellax.min.js"></script>
  </head>
    <body data-rellax-speed="7">

      <?php include('./includes/header.php');?>
      <?php
      $prenom_error = '<span class="error"><i class="fas fa-info-circle"></i> Je veux connaitre ton prénom!</span>';
      $nom_error = '<span class="error"><i class="fas fa-info-circle"></i> Et oui je veux tout savoir. Meme ton nom!</span>';
      $email_error = "<span class='error'><i class='fas fa-info-circle'></i> T'essaies de me rouler? C'est pas un email ça!</span>";
      $email_error2 = "<span class='error'><i class='fas fa-info-circle'></i> Entrez le email correct!</span>";
      $message_error = "<span class='error'><i class='fas fa-info-circle'></i> Qu'est-ce que tu veux me dire?</span>";
      $rgpd_error = "<span class='error'><i class='fas fa-info-circle'></i> Sans ce consentement, rien ne se passe!</span>";
      $phone_error = "<span class='error'><i class='fas fa-info-circle'></i> Entrez le numéro de téléphone correct!</span>";
      $form_verif = false;

      if($_POST['submit'] AND
        !empty($_POST['prenom']) AND
        !empty($_POST['nom']) AND
        !empty($_POST['email']) AND
        filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) AND
        (preg_match('/^(\s*)?(\+)?([- ().]?\d[- _().]?){10,14}(\s*)?$/' ,$_POST['phone']) || empty($_POST['phone'])) AND
        !empty($_POST['message']) AND
        !empty($_POST['rgpd'])
    ){
        $prenom_value = '';
        $nom_value = '';
        $email_value = '';
        $phone_value = '';
        $message_value = '';
        $form_verif = true;
        }

      else{
        $prenom_value = $_POST['prenom'];
        $nom_value = $_POST['nom'];
        $email_value = $_POST['email'];
        $phone_value = $_POST['phone'];
        $message_value = $_POST['message'];
        $form_verif = false;
      }
  ?>

      <!-- Contenu -->
      <div class="page-content">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-md-12">

              <div class="panel-white">
              <div class="header"><i class="fas fa-at"></i> Formulaire de contact</div>
              <div class="content">


              <form action="" method="post" class="row">

               <div class="col-lg-2 input_otst">
              </div>

                <div class="col-lg-4  input_otst">
                   <label for="prenom">Prenom <span class="star">*</span> :</label>
                   <div class="input-group">
                        <span class="clearable">
                          <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="sizing-addon2"  placeholder="Votre prénom" value = <?php echo $prenom_value; ?>>
                          <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                        </span>
                   </div>
                   <?php if($_POST['submit'] AND empty($_POST['prenom'])){echo $prenom_error;} ?>
                </div><!--==========-->

              <div class="col-lg-4 input_otst">
                  <label for="nom">Nom <span class="star">*</span> :</label>
                <div class="input-group">
                  <span class="clearable">
                   <input type="text" class="form-control" id="nom" name="nom" aria-describedby="sizing-addon2" placeholder="Votre nom" value = <?php echo $nom_value; ?>>
                   <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                 </span>
                </div>
                 <?php if($_POST['submit'] AND empty($_POST['nom'])){echo $nom_error;} ?>
              </div><!--==========-->

              <div class="col-lg-2"></div>

              <div class="col-lg-2"></div>


              <div class="col-lg-4 input_otst">
                  <label for="email">Email <span class="star">*</span> :</label>
                <div class="input-group">
                  <span class="clearable">
                   <input type="text" class="form-control" id="email" name="email" aria-describedby="sizing-addon2" placeholder="Votre email" value = <?php echo $email_value; ?>>
                   <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                 </span>
                </div>
                 <?php if($_POST['submit'] AND empty($_POST['email'])){echo $email_error;}
                      elseif ($_POST['submit'] AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){echo $email_error2;}
                  ?>
              </div><!--==========-->

              <div class="col-lg-4 input_otst">
                  <label for="phone">Telephone :</label>
                <div class="input-group">
                  <span class="clearable">
                   <input type="text" class="form-control" id="phone" name="phone" aria-describedby="sizing-addon2" placeholder="Votre téléphone" value = <?php echo $phone_value; ?>>
                   <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                 </span>
                </div>

                <?php if($_POST['submit'] AND !empty($_POST['phone']) AND !preg_match('/^(\s*)?(\+)?([- ().]?\d[- _().]?){10,14}(\s*)?$/' ,$_POST['phone'])){echo $phone_error;}

                 ?>

              </div><!--==========-->

              <div class="col-lg-2"></div>

              <div class="col-lg-2"></div>

              <div class="col-lg-8 form-group">
                <label for="message">Message <span class="star">*</span> :</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message"><?php echo $message_value; ?></textarea>
                 <?php if($_POST['submit'] AND empty($_POST['message'])){echo $message_error;} ?>
              </div>

              <div class="col-lg-2"></div>
              <div class="col-lg-2"></div>

               <div class="col-lg-8">
                <div class="input_otst"><span class="star">*</span> C'est informations sont requises</div>
                 <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="rgpd" name="rgpd">
                  <label class="form-check-label" for="rgpd">J’ai lu et j'accepte <a href="rgpd.php">la politique de confidentialité</a> du site <span class="star">*</span></label>
                  <?php if($_POST['submit'] AND empty($_POST['rgpd'])){echo '<br>' . $rgpd_error;} ?>
                </div>

              </div>

              <div class="col-lg-2"></div>
              <div class="col-lg-2"></div>

              <div class="col-lg-8 input_otst">

                <input type='submit' name='submit' class="btn btn-primary col-sm col-lg-2 bot_envoye" value='Envoyer'></input>
              </div>

              <div class="col-lg-2"></div>

              <?php if($form_verif == true){include('includes/resultat.php');}?>
              </form>

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

      <!--For close-buttom in the inputs in contact-page-->
      <script type="text/javascript">
        $(".clearable").each(function() {

        var $inp = $(this).find("input:text"),
          $cle = $(this).find(".clearable__clear");

        //$inp.on("input", function(){
        $cle.toggle(this.value); //Показать или скрыть соответствующие элементы.
        //});

        $cle.on("touchstart click", function(e) { //Событие touchstart происходит, когда пользователь касается элемента.
        e.preventDefault(); //если вызывается этот метод, действие по умолчанию для события не будет инициировано.
        //Получить текущее значение первого элемента в наборе соответствующих элементов или установить значение каждого соответствующего элемента.
        //Выполнить все обработчики и поведения, связанные с соответствующими элементами для данного типа события.
         $inp.val("").trigger("input");
        });

        });
      </script>


    </body>
</html>
