<?php

session_start();


// (M2) 2. Includo il file vars.php in index.php
require_once __DIR__ . '/data/vars.php';

// (M2) 4. Includo il file functions.php in index.php
require_once __DIR__ . '/data/functions.php';

$limitLength = $_SESSION['getLimit'];

// var_dump(generatePassword($limitLength, $magicStr));

require_once __DIR__ . '/partials/head.php';

?>


<body>
  <h2>Landing Page</h2>

  <p>La tua password è: <?php echo generatePassword($limitLength, $magicStr) ?></p>
  
  <a href="index.php">Torna indietro</a>
</body>
</html>