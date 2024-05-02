<?php
$title = 'Connexion';
$h1 = 'Connexion';
$txtHeader = 'Veuillez ici trouver la page de connexion';
require_once('../composants/header.php');
require_once('../composants/session.php');
?>
<section>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="assets/img/logo_lysi.png" style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Lysi-média+</h4>
                </div>

                <form method="POST" action="">
                  <p style="font-size:1.8em">Connectez-vous</p>
                  <br>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Email:</label>
                    <input type="email" id="form2Example11" name="email" class="form-control" placeholder=" email address" />

                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Password:</label>
                    <input type="password" id="form2Example22" name="password" class="form-control" />

                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="submit">Connexion</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4"></h4>
                <p class="small mb-0"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</section>
<?php require_once('../composants/footer.php') ?>