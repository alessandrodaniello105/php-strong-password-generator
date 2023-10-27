<?php

require_once __DIR__ . '/data/vars.php';

include __DIR__ . '/partials/head.php';

// (M1) 1. Dichiaro una variabile come una stringa con tutti i caratteri possibili, con cui generero la password
$magicStr = htmlentities('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPWRSTUVWXYZèé[{+*}}òç@à°#ù§,;.:-_\|ì^!£$%&/()=');
// $validChars = html_entity_decode($chars);

// (M1) 2. Dichiaro la variabile che sarà la lunghezza scelta per la password [che avrà delle condizioni di controllo (>= 8 && <= 32)]
$limitLength = (isset($_POST['limit'])) ? $_POST['limit'] : '' ;

// (M1) 3. Dichiaro una funzione di controllo sull'input della lunghezza
function isMinLength($number) {
  return ($number >= 8 && $number <= 32) ? true : false;
}

// (M1) 4. Dichiaro un messaggio di errore stringa vuota
$error_msg = '';

// (M1) 5. Dichiaro funzione che genererà la password della lunghezza scelta, per ora senza controlli
function generatePassword($limit, $characters) {
  $newPwd = str_shuffle($characters);
  
  // $newPwd = html_entity_decode
  return substr($newPwd, -$limit); 
}

$testLimit = 13;

// var_dump(generatePassword($testLimit, $testEnt))

?>


<body>
  <div class="container">
    <h2>Hello World!</h2>

    <p>test password:<?php echo var_dump(generatePassword($testLimit, $magicStr))  ?></p>
  </div>
</body>
</html>