
<!DOCTYPE html>
<html lang="fr">

 <?php require('./base/header.php');?> 
  <link rel="stylesheet" href="./stylesheet/contacts.css">


    <body data-rellax-speed="7">

      <?php include('./includes/head-menu.php');?>
      <!-- Contenu -->
      <div class="page-content">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-md-12">

              <div class="panel-white">
              <div class="header"><i class="fas fa-at"></i> <?= $_SESSION['translate']['form_title'];?></div>
              <div class="content">
              <div class="alert alert-success d-none">
              <h2><?= $_SESSION['translate']['form_thanks'];?></h2>
                <div id="valide"></div>
              </div>

              <div class="alert alert-danger d-none">
              <h2><?= $_SESSION['translate']['form_error'];?></h2>
                <div id="errors"></div>
              </div>

              <form id="form-contact" action="" method="POST" accept-charset="utf-8" class="row">

               <div class="col-lg-2 input_otst">
              </div>

                <div class="col-lg-4  input_otst">
                   <label for="first_name"><?= $_SESSION['translate']['form_firstname_label'];?> <span class="star">*</span> :</label>
                   <div class="input-group">
                        <span class="clearable">
                          <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="sizing-addon2"  placeholder="<?= $_SESSION['translate']['form_firstname_placeholder'];?>">
                          <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                        </span>
                   </div>
                </div><!--==========-->

              <div class="col-lg-4 input_otst">
                  <label for="last_name"><?= $_SESSION['translate']['form_lastname_label'];?> <span class="star">*</span> :</label>
                <div class="input-group">
                  <span class="clearable">
                   <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="sizing-addon2" placeholder="<?= $_SESSION['translate']['form_lastname_placeholder'];?>">
                   <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                 </span>
                </div>
              </div><!--==========-->

              <div class="col-lg-2"></div>

              <div class="col-lg-2"></div>


              <div class="col-lg-4 input_otst">
                  <label for="email"><?= $_SESSION['translate']['form_email_label'];?> <span class="star">*</span> :</label>
                <div class="input-group">
                  <span class="clearable">
                   <input type="text" class="form-control" id="email" name="email" aria-describedby="sizing-addon2" placeholder="<?= $_SESSION['translate']['form_email_placeholder'];?>">
                   <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                 </span>
                </div>
              </div><!--==========-->

              <div class="col-lg-4 input_otst">
                  <label for="phone"><?= $_SESSION['translate']['form_phone_label'];?> :</label>
                <div class="input-group">
                  <span class="clearable">
                   <input type="text" class="form-control" id="phone" name="phone" aria-describedby="sizing-addon2" placeholder="<?= $_SESSION['translate']['form_phone_placeholder'];?>">
                   <i class="clearable__clear"><i class="fas fa-times-circle"></i></i>
                 </span>
                </div>

              </div><!--==========-->

              <div class="col-lg-2"></div>

              <div class="col-lg-2"></div>

              <div class="col-lg-8 form-group">
                <label for="message"><?= $_SESSION['translate']['form_message_label'];?> <span class="star">*</span> :</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="<?= $_SESSION['translate']['form_message_placeholder'];?>"></textarea>
              </div>

              <div class="col-lg-2"></div>
              <div class="col-lg-2"></div>

               <div class="col-lg-8">
                <div class="input_otst"><span class="star">*</span><?= $_SESSION['translate']['form_required'];?></div>
                 <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="check-rgpd" name="check-rgpd">
                  <label class="form-check-label" for="check-rgpd"><?= $_SESSION['translate']['form_rgpd'];?> <span class="star">*</span></label>
                </div>

              </div>

              <div class="col-lg-2"></div>
              <div class="col-lg-2"></div>

              <div class="col-lg-8 input_otst">

                <input type='submit' name='submit' class="btn btn-primary col-sm col-lg-2 bot_envoye" value="<?= $_SESSION['translate']['form_btn'];?>"></input>
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


      <?php include('./base/footer.php');?>
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
