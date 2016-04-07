<?php 

    include('conn.php');

    if (!empty($_POST["submit"]))
    {
        
    
        //Die Variablen aus dem vorherigen Formular zwischenspeichern
        $_title = $_POST["titel"]; 
        $_url = $_POST["url"]; 
        $_news = $_POST["news"];
        //$year = date("Y",$timestamp);
        //$month = date("m",$timestamp);
        //$day = date("d",$timestamp);
        //$date = date("Y.m.d",$timestamp);

        
        $query = "INSERT INTO `News`(`text`, `img`, `Ueberschrift`) VALUES ('$_news', '$_url', '$_title')";
        $result = $mysqli->query($query);
        
        echo '<meta http-equiv=refresh content="0; url=formular.php">'; 
        
        
        // close connection 
        mysqli_close($mysqli);

    }



?>