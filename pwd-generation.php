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
  <div class="container">
    <h2>Landing Page</h2>

    <div class="info-box">
      <p>La tua password è: </p>

      <div class="pwd-box">
        <?php echo generatePassword($limitLength, $magicStr) ?>
      </div>

    </div>

    <button class="btn-special">
      <a href="index.php">Torna indietro</a>
    </button>
  </div>
</body>
</html>