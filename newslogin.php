<!doctype html>

<?php

    session_start();
    
    if (!empty($_SESSION['login']) && $_SESSION['login'] == 1 )
    {
        echo '<meta http-equiv=refresh content="0; url=formular.php">';
    }
    else
    {
        printf("
    <html>
      <head>
        <meta charset='utf-8'>
        <title>Login</title>
        
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel='stylesheet' href='css/main.css'>
      </head>
      <body>
      
      <div class = 'text-center'>
          <form method='POST' action='login.php'> 
            Ihr Username: <input name='username'><br> 
            Ihr Passwort:  <input name='passwort' type=password><br> 
            <input type=submit name=submit value='Einloggen'> 
          </form>
    </div>

      </body>
    </html>
    ");
    }
                
?>


