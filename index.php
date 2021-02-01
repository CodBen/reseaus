<?php // Exemple 27-4 : index.php
  session_start();
  require_once 'header.php';

  echo "<div class='center'>Bienvenue dans ce prototype";

  if ($loggedin) echo ", $user, vous êtes connecté.";
  else           echo '.<br>Inscrivez-vous ou connectez-vous pour nous rejoindre.';

  echo <<<_END
      </div><br>
    </div>
    <div data-role="footer">
       <h4>Développé par <i>Benjamin Colomb</i></h4>
    </div>
  </body>
</html>
_END;
?>
