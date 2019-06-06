<?php
 $file = 'source.xml';
$xml = simplexml_load_file($file);

 ?>

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
 print_r($xml);
 
 ?><p><?php echo $xml->page->menu[0];?></p>
<?php echo $xml->page->menu[1]; ?>

<?php 
foreach ($xml as $key => $value) {
    // $arr[3] sera mis à jour avec chaque valeur de $arr...
    echo "{$key} => {$value} ";
    print_r($arr);
}
?>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.angularjs.org/1.7.8/i18n/angular-locale_fr-fr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  </body>



  </html>
