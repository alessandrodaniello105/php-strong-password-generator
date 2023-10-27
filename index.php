<?php

// (M2) 2. Includo il file vars.php in index.php
require_once __DIR__ . '/data/vars.php';

// (M2) 4. Includo il file functions.php in index.php
require_once __DIR__ . '/data/functions.php';


include __DIR__ . '/partials/head.php';

?>


<body>
  <div class="container">
    <h2>PHP Strong Password Generator</h2>

    <!-- (M1) 6. Costruisco il form, in cui chiedo la lunghezza della password, nell'index -->

    <form action="index.php" method="POST">

      <input type="number" name="limit" id="limit">

      <button class="btn">Invia</button>

    </form>


    <p>test password: <?php echo generatePassword($limitLength, $magicStr, $error_msg)  ?></p>
  </div>
</body>
</html>