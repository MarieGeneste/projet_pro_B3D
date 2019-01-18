<!-- <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require('./includes/form-contact.php');
} ?> -->
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
    <link rel="stylesheet" href="assets/toastify/toastify.css">
    <link rel="stylesheet" href="./stylesheet/global.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./stylesheet/contacts.css">
    <!-- Chargement des scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/toastify/toastify.js"></script>
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
              <div class="header"><i class="fas fa-at"></i> Formulaire de contact</div>
              <div class="content">
              <div class="alert alert-success d-none">
              <h2>Merci à vous.</h2>
                <div id="valide"></div>
              </div>

              <div class="alert alert-danger d-none">
              <h2>Erreur à l'envoie du formulaire</h2>
                <div id="errors"></div>
              </div>

              <form id="form-contact" action="" method="POST" accept-charset="utf-8" class="row">

               <div class="col-lg-2 input_otst">
              </div>

                <div class="col-lg-4  input_otst">
                   <label for="first_name">first_name <span class="star">*</span> :</label>
                   <div class="input-group">
                        <span class="clearable">
                          <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="sizing-addon2"  placeholder="Votre prénom">
                          <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                        </span>
                   </div>
                </div><!--==========-->

              <div class="col-lg-4 input_otst">
                  <label for="last_name">Nom <span class="star">*</span> :</label>
                <div class="input-group">
                  <span class="clearable">
                   <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="sizing-addon2" placeholder="Votre nom">
                   <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                 </span>
                </div>
              </div><!--==========-->

              <div class="col-lg-2"></div>

              <div class="col-lg-2"></div>


              <div class="col-lg-4 input_otst">
                  <label for="email">Email <span class="star">*</span> :</label>
                <div class="input-group">
                  <span class="clearable">
                   <input type="text" class="form-control" id="email" name="email" aria-describedby="sizing-addon2" placeholder="Votre email">
                   <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                 </span>
                </div>
              </div><!--==========-->

              <div class="col-lg-4 input_otst">
                  <label for="phone">Telephone :</label>
                <div class="input-group">
                  <span class="clearable">
                   <input type="text" class="form-control" id="phone" name="phone" aria-describedby="sizing-addon2" placeholder="Votre téléphone">
                   <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                 </span>
                </div>

              </div><!--==========-->

              <div class="col-lg-2"></div>

              <div class="col-lg-2"></div>

              <div class="col-lg-8 form-group">
                <label for="message">Message <span class="star">*</span> :</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message"></textarea>
              </div>

              <div class="col-lg-2"></div>
              <div class="col-lg-2"></div>

               <div class="col-lg-8">
                <div class="input_otst"><span class="star">*</span> C'est informations sont requises</div>
                 <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="rgpd" name="rgpd" value="checked">
                  <label class="form-check-label" for="rgpd">J’ai lu et j'accepte <a href="rgpd.php">la politique de confidentialité</a> du site <span class="star">*</span></label>
                </div>

              </div>

              <div class="col-lg-2"></div>
              <div class="col-lg-2"></div>

              <div class="col-lg-8 input_otst">

                <input type='submit' name='submit' class="btn btn-primary col-sm col-lg-2 bot_envoye" value='Envoyer'></input>
              </div>
              <div class="col-lg-2"></div>

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



<script type="text/javascript">
       $('#form-contact').on('submit', function(e){
          e.preventDefault();
          resetAllErrors();
          $.ajax({
            type: 'POST',
            url: './includes/form-contact',
            data: new FormData(this),
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
              if(data.message_success != null) {
                $('#valide').html(data.message_success);
                $('#valide').parent().removeClass('d-none');
                resetAll();
              } else {
                $('#errors').html(data.errors);
                $('#errors').parent().removeClass('d-none');
              }
            }
            
          });
        });
function resetAll() {
  $('#first_name').val('');
  $('#last_name').val('');
  $('#email').val('');
  $('#phone').val('');
  $('#message').val('');
}
function resetAllErrors() {
  $('#errors').html(' ');
  $('#errors').parent().addClass('d-none');
}
</script>