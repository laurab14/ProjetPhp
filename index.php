<!DOCTYPE html>
 <html lang="fr" dir="ltr">

 <head>
<meta charset="utf-8" />
<link href="https://fonts.googleapis.com/css?family=Akronim%7CFaster+One%7CFredericka+the+Great%7CJosefin+Sans%7CLondrina+Shadow%7CLondrina+Solid%7CMonoton%7CPress+Start+2P%7CVT323&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="index.css" />
<title>Projet 4 - PHP</title>

  </head>

  <body>
      <?php
      $file='source.xml';
      $xml = simplexml_load_file($file);

      ?>
      <nav id="menuQ" class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <?php
                  for ($i = 0; $i <= 3; $i++) {
                      $nmb = $i;
                      ?>
                  <li class="nav-item active">
                      <a class="nav-link" href="/page-<?=$nmb?>.html"><?php  echo $xml->page[$i]->menu; ?></a>
                      </li>
                  <?php
                  }
                  ?>
              </ul>
          </div>
      </nav>
      <div class="container-fluid">
          <div id="bgColor" class="col-8 mx-auto">
      <?php
      if(!count($_GET)){
          echo $xml->page[0]->content;
      }
        if (isset($_GET['/0'])) {
          echo $xml->page[0]->content;
      } else {

      }
      if (isset($_GET['/1'])){
         echo $xml->page[1]->content;
        } else {

      }
        if (isset($_GET['/2'])){
          echo $xml->page[2]->content;
      } else {
      }

        if (isset($_GET['/3'])){
          echo $xml->page[3]->content;
      } else {


      }

      ?>
          </div>
      </div>

  <footer class="main-footer">

      <!--Footer Links-->
      <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

          <!--First column-->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="footer-title">Maçonnerie Ocordo</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />

            <!--Google Map-->
            <div class="map-responsive">
            <iframe style="border: 0; float: right;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10840.441212216989!2d-1.562078!3d47.214424!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10a23dc1d980bca7!2sOcordo+Travaux+Nantes!5e0!3m2!1sfr!2sfr!4v1434122059096" width="600" height="450" frameborder="0"></iframe>
            </div>
            <!--/.Google Map-->

          </div>
          <!--/.First column-->

          <!--Second column-->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="footer-title">Mentions Légales</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />
                <li class="footer-legis"><a href="#!">Conditions Générales de Vente</a></li>
                <li class="footer-legis"><a href="#!">Politique de Rétractation</a></li>
                <li class="footer-legis"><a href="#!">Politique de Devis</a></li>
          </div>
          <!--/.Second column-->

          <!--Third column-->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="footer-title">Législation</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />
                <li class="footer-legis"><a href="#!">Mentions Légales</a></li>
                <li class="footer-legis"><a href="#!">Politique de Confidentialité</a></li>
                <li class="footer-legis"><a href="#!">Déclarer un Contencieux</a></li>
          </div>
          <!--/.Third column-->



          <!--Fourth column-->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
              <h6 class="footer-title">Autres Informations</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />
            <p>
              <i class="fas fa-home  mr-3"></i> 11 Allée de l'Île Gloriette, 44000 Nantes</p>
            <p>
              <i class="fas fa-envelope mr-3"></i> contact@ocordo-travaux.fr</p>
            <p>
              <i class="fas fa-phone mr-3"></i> 02.51.84.18.24</p>

          </div>
          <!--/.Fourth column-->
        </div>
      </div>
      <!--/.Footer Links-->


      <!-- Copyright -->
      <div class="footer-copyright text-center py-3 bg-dark">© Juin 2019 : <i>Laura Bidois, Quentin Durand, Paul Compère.</i>
      </div>
      <!-- Copyright -->

      </footer>
      <!--/.Footer-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.angularjs.org/1.7.8/i18n/angular-locale_fr-fr.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    </body>
</html>
