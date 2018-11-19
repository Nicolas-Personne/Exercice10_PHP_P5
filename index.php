<?php
$deps = [
  "02" => "Aisne",
  "59" => "Nord",
  "60" => "Oise",
  "62" => "Pas-de-Calais",
  "80" => "Somme"
];
foreach($deps as $key=>$dep) {
       echo "<li>"."Le département"." ".$dep." "."a le numéro"." ".$key."</li>";
}
 ?>
