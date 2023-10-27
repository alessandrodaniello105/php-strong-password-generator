<?php


// (M2) 3. Sposto le funzioni nel file functions.php
function isMinLength($number) {
  return ($number >= 8 && $number <= 32) ? true : false;
}

function generatePassword($limit, $characters, $error) {

  if (isMinLength($limit)) {
    $newPwd = str_shuffle($characters);
    return substr($newPwd, -$limit); 
  } elseif ($limit == 'unset') {
    return $error = "Inserisci un numero";
  } else {
    return $error = "limite minimo/massimo sbagliato";
  }
}