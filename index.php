<?php



// (M2) 2. Includo il file vars.php in index.php
require_once __DIR__ . '/data/vars.php';

// (M2) 4. Includo il file functions.php in index.php
require_once __DIR__ . '/data/functions.php';



if(isset($_POST['limit'])) {

  if(isMinLength($_POST['limit'])){
    session_start();

    $_SESSION['getLimit'] = $_POST['limit'];

    header('Location: ./pwd-generation.php');

  } else {
    $error_msg = 'limite minimo/massimo sbagliato';
  }

} else {
  $error_msg = 'inserisci un numero';
}

require_once __DIR__ . '/partials/head.php';

?>


<body>
  <div class="container">
    <h2>PHP Strong Password Generator</h2>


    <form action="index.php" method="POST">

      <div class="input-box">
        <label for="limit">Lunghezza Password: </label>
        <input type="number" name="limit" id="limit">
      </div>


      <button type="submit" class="btn">Invia</button>

      <p><?php echo $error_msg ?></p>

    </form>

  </div>
</body>
</html>