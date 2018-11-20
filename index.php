<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 1</title>
</head>
<body>
<?php
$deps = [
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme'
];
foreach($deps as $key=>$dep) {?>
  <li><?php echo 'Le département'.' '.$dep.' '.'a le numéro'.' '.$key ?></li>
  <?php
}
 ?>
 <a href="http://PHP/"><button type="button" class="btn btn-danger" name="button">Accueil</button></a>
</body>
</html>
