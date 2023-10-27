<?php


// (M2) 3. Sposto le funzioni nel file functions.php
function isMinLength($number) {
  return ($number >= 8 && $number <= 32) ? true : false;
}

function generatePassword($limit, $characters) {

  $newPwd = str_shuffle($characters);

  return substr($newPwd, -$limit);

}