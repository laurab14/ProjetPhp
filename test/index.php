<!DOCTYPE html>
 <html lang="fr" dir="ltr">

 <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="index.css" />
<title>Projet 3 - PHP</title>

  </head>

  <body>
      <?php
      $file='source.xml';
      $xml = simplexml_load_file($file);
       
      ?>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                      <a class="nav-link" href="?/<?=$nmb?>"><?php  echo $xml->page[$i]->menu; ?></a>
                      </li>
                  <?php
                  }
                  ?>
              </ul>
          </div>
      </nav>

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
     

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.angularjs.org/1.7.8/i18n/angular-locale_fr-fr.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    </body>
</html>