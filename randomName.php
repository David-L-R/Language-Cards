<?php 

  $names = ["David", "Neomi", "Dan", "Mel", "John", "Arya", "Ray", "Gal", "Giy", "Gabi", "Ana", "Avi"];

  $random = rand(0, count($names) - 1);
  $name = $names[$random];

  echo $name;

?>