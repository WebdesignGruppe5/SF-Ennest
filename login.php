<?php 
session_start(); 
include('conn.php');


    $row_cnt = 0;

    # Ist die $_POST Variable submit nicht leer ??? 
    if (!empty($_POST["submit"])) 
        { 
            //Die Variablen aus dem vorherigen Formular zwischenspeichern
            $_username = $_POST["username"]; 
            $_passwort = $_POST["passwort"]; 

            //User Name und Passwort aus der Datenbank holen
            $query = "SELECT * FROM Login WHERE 
                        username='$_username' AND 
                        passwort='$_passwort'
                    LIMIT 1";
            
            //In row_cent wird gespeichert wieviele Spalten die Ausgabe hat
            if ($result = $mysqli->query($query)) 
                    {

                        /* determine number of rows result set */
                        $row_cnt = $result->num_rows;

                        /* close result set */
                        $result->close();
                    }

            //Hat row_cnt nur eine Spalte sind die eingegebenen Daten korrekt
            if($row_cnt == 1)
            {
                $_SESSION["login"] = 1;
                
               
               echo '<meta http-equiv=refresh content="0; url=formular.php">'; 
            }
            //Bei allem andern sind die Daten falsch
            else
            {
                echo "Logindaten fehlerhaft";
            }
        
        
         /* close connection */
        mysqli_close($mysqli);
       }




   

?>