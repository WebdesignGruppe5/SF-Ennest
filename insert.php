<?php 

    include('conn.php');

    if (!empty($_POST["submit"]))
    {
    
        //Die Variablen aus dem vorherigen Formular zwischenspeichern
        $_title = $_POST["titel"]; 
        $_url = $_POST["url"]; 
        $_news = $_POST["news"];


        //Insert Befehl zusammenbauen und ausführen
        $query = "INSERT INTO `News`(`text`, `img`, `Ueberschrift`) VALUES ('$_news', '$_url', '$_title')";
        $result = $mysqli->query($query);
        
        //Zurück zum Formular
        echo '<meta http-equiv=refresh content="0; url=formular.php">'; 
        
        
        // close connection 
        mysqli_close($mysqli);

    }
    else if(!empty($_POST["submit2"]))
    {
        //Die Variablen aus dem vorherigen Formular zwischenspeichern
        $_datum = $_POST["Datum"]; 
        $_text = $_POST["beschreibung"]; 
        $_uhrzeit = $_POST["Uhrzeit"];


        //Insert Befehl zusammenbauen und ausführen
        $query = "INSERT INTO `Veranstaltung`(`datum`, `text`, `uhrzeit`) VALUES ('$_datum', '$_text', '$_uhrzeit')";
        $result = $mysqli->query($query);
        
        //Zurück zum Formular
        echo '<meta http-equiv=refresh content="0; url=formular.php">'; 
        
        
        // close connection 
        mysqli_close($mysqli);
    }
    else if(!empty($_POST["submit3"]))
    {
        //Die Variablen aus dem vorherigen Formular zwischenspeichern
        $_name = $_POST["Nachname"]; 
        $_vorname = $_POST["Vorname"]; 
        $_mannschaft = $_POST["Mannschaft"];
        $_passbild = $_POST["Passbild"];


        //Insert Befehl zusammenbauen und ausführen
        $query = "INSERT INTO `Mitglieder`(`Vorname`, `Name`, `Mannschaft`, `Passbild`) VALUES ('$_name', '$_vorname', '$_mannschaft', '$_passbild')";
        $result = $mysqli->query($query);
        
        //Zurück zum Formular
        echo '<meta http-equiv=refresh content="0; url=formular.php">'; 
        
        
        // close connection 
        mysqli_close($mysqli);
    }



?>