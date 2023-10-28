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
    $message = '';
    $error_message = 'Errore! Devi inserire un numero che sia più grande di 8 (compreso) e più piccolo di 32 (compreso)';
  }

} else {
  $error_message = null;
  $message = 'Inserisci un numero compreso tra 8 e 32';
}

require_once __DIR__ . '/partials/head.php';

?>


<body>
  <div class="container">
    <h2>PHP Strong Password Generator</h2>


    <div class="form-container">

      <div class="info-box">

        <span><?php echo $error_message ?></span>

        <p><?php echo $message ?></p>

      </div>

      <form action="index.php" method="POST" id="pepe">

        <div class="input-box">
          <label for="limit">Lunghezza Password: </label>
          <input type="number" name="limit" id="limit">
        </div>

        
      </form>
      
    </div>
    
    <button type="submit" form="pepe" class="btn">Invia</button>

  </div>
</body>
</html>