<!-- rappel du contenu "header" en PHP -->
<?php require('header.php'); ?>

<div class="row g-0 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
  <div class="col">
    <img src="assets/img/gallery/visuel/header-contact.jpg" alt="banner-contact" class="w-100 img-fluid">
  </div>
</div>
<!-- liste contact -->

<!-- div qui contient coordonée "complet" + le formulaire "complet" -->

<!-- div pour coordonnée "complet" -->

<div id="form" class="container-fluid px-xl-5 d-flex justify-content-center">

  <div class="col-12  col-xl-10 p-5 row justify-content-center">
    <section class="col-12 col-lg-5 col-xl-4 col-xxl-3 text-lg-start text-center">
      <div class="col">
        <h6 class="fs-4 fw-bold text-uppercase">nos coordonées</h6>
        <img src="assets/img/icons/bg_titre.jpg" alt="">
      </div>
      <ul class="col li-d-n my-4 ps-0 ps-lg-4 ">
        <li class="fw-bold">Studio Sport & Coaching</li>
        <li>01 Allée Marie Politzer</li>
        <li>64200 Biarritz</li>
      </ul>
      <ul class="col li-d-n my-4 ps-0 ps-lg-4 ">
        <li class="fw-bold">Téléphone</li>
        <li>05 59 47 84 18</li>
      </ul>
      <ul class="col li-d-n my-4 ps-0 ps-lg-4 ">
        <li class="fw-bold">Horaires</li>
        <li>Du Lundi au Vendredi</li>
        <li>dde 8h à 14h de 16 à 21h</li>
        <li>Le Samedi</li>
        <li>de 10h à 13h</li>
      </ul>
      <ul class="col li-d-n my-4 ps-0 ps-lg-4 ">
        <li class="fw-bold">Email</li>
        <li>Contact (at) studiobiarritz.com</li>
        <li>ou via ce formulaire</li>
      </ul>
    </section>

    <!-- formulaire de contacte-->

    <!-- div pour formulaire "complet" + titre -->
    <div class="col-7 container-fluid p-0 g-0 row justify-content-start ">

      <!-- div qui contient formulaire + bouton-->


      <!-- div pour formulaire-->
      <section class="col col-12 col-md-12 col-lg-12">

        <!-- div pour titre -->
        <div class="text-lg-start text-center">
          <h6 class="fs-4 fw-bold text-uppercase col w-100 p-0 g-0">notre formulaire</h6>
          <img src="assets/img/icons/bg_titre.jpg" alt="">
        </div>
        <!-- formulaire de contact-->
        <form id="formId">

          <!-- nom & prénom sur la même ligne -->
          <div class="d-flex form-row">

            <!-- nom plus grand que prénom-->
            <div class="form-group col-md-7">
              <label for="formNom"></label>
              <input type="text" class="form-control col-md-6 bg-body-secondary radius" id="formNom" value="" placeholder="VOTRE NOM">
            </div>

            <!-- prénom plus petit que nom -->
            <div class="form-group col-md-5 mx-1">
              <label for="formPrenom"></label>
              <input type="text" class="form-control bg-body-secondary radius" id="formPrenom" placeholder="VOTRE PRENOM">
            </div>
          </div>

          <!-- téléphone & mail sur la même ligne -->
          <div class="d-flex form-row">

            <!-- telephone plus petit que email -->
            <div class="form-group col-md-4">
              <label for="formTelephone"></label>
              <input type="tel" class="form-control bg-body-secondary radius" id="formTelephone" placeholder="VOTRE TÉLÉPHONE">
            </div>

            <!-- email plus grand que email -->
            <div class="form-group col-md-8 mx-1">
              <label for="formEmail"></label>
              <input type="email" class="form-control bg-body-secondary radius" id="formEmail" placeholder="VOTRE EMAIL">
            </div>
          </div>

          <!-- sujet prend toute la taille-->
          <div class="form-group col-12">
            <label for="formSujet"></label>

            <input type="text" class="subject form-control bg-body-secondary radius" id="formSujet" placeholder="SUJET">
          </div>

          <!-- textarea prend toute la taille / row hauteur du textarea -->
          <div class="form-group message-width col-12">
            <label for="formMessage"></label>
            <textarea class="form-control bg-body-secondary radius" id="formMessage" rows="9" placeholder="VOTRE MESSAGE"></textarea>
          </div>

          <!-- boutton -->
          <button type="submit" class="btn-form btn-warning text-light mt-3" id="forSubmit">ENVOYER</button>
        </form>

      </section>
    </div>
  </div>
</div>
<div class="row g-0 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
  <div class="col">
    <img src="assets/img/gallery/image_map.jpg" class="w-100 img-fluid" alt="map">
  </div>
</div>

<?php require('footer.php'); ?>