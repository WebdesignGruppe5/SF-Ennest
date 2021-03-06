<!DOCTYPE html>
<html lang="en">
    
    <?php
    //Verbindung einbinden
    include('conn.php');
    ?>
    
	<head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta charset="utf-8">	        
        <meta name="description" content="SF-Ennest Sportfreunde Ennest Tischtennis table-tennis">
        <meta name="author" content="Christopher Göbel Marc Wildermuth">
        <link rel="shortcut icon" href="css/img/logoklein.png"/>
		
        <title>SF-Ennest</title>
    
        
        <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        
        
    </head>
    

    <body>

<!-- Navigation -->
        <nav class="navbar-default navbar-fixed-top">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" id="navbut" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
                        <li><a class="page-scroll" href="index.php">News</a></li>
                        <li><a class="page-scroll" href="mitglieder.html">Mitglieder</a></li>
                        <li><a class="page-scroll" href="veranstaltungen.html">Veranstaltungen</a></li>
                        <li><a class="page-scroll" href="history.html">History</a></li>
                        <li><a class="page-scroll" href="kontakt.html">Kontakt</a></li>
                    </ul>
                    <div class="navbar-right">
                    <img src="" class="img-responsive" alt="logo">
                        </div>
                </div>
               
                
				<!-- /.navbar-collapse -->
			

		</nav>

     <!-- -----------------------------------------------Inhalt der Seite--------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <section class="module parallax"> </section>
        <div class="module content">
        <div class="col-md-12 text-center">
            <h2>Hier finden Sie Neuigkeiten rund um den SF-Ennest</h2>
        </div>
        
        <div class="row">
        
             <div class="col-sm-6 text-center">
                 <!-- -----------------------------------------------PHP Teil Anfang---------------------------------------------------------------------------------------------------------------------- -->
                 <?php
                 
                        //Datenbank Abfrage
                        $query = "SELECT * FROM News Where id = 1";

                        if ($stmt = mysqli_prepare($mysqli, $query)) {

                            /* execute statement */
                            mysqli_stmt_execute($stmt);

                            /* bind result variables */
                            mysqli_stmt_bind_result($stmt, $id, $datum, $text, $img, $Ueberschrift);

                            /* fetch values */
                            while (mysqli_stmt_fetch($stmt)) {
                                printf ("<b>%s</b> <br> %s <br> <img class='img-responsive img-thumbnail' src='%s'> \n", $Ueberschrift, $text, $img);
                            }

                            /* close statement */
                            mysqli_stmt_close($stmt);
                        }

                        /* close connection */
                        mysqli_close($mysqli);

                        ?>
                    <!-- -----------------------------------------------PHP Teil Ende---------------------------------------------------------------------------------------------------------------------- -->
            </div>
            
            <!--
            <div class="col-sm-6 text-center">
                <b>Sportfreunde Ennest starten neue Jugendoffensive</b>
                <br>
                Die Tischtennis-Jugendmannschaft der Sportfreunde Ennest konnte zwei mal in Folge die Meisterschaft in ihrer Klasse erringen (Jugend-Kreisklasse, Jugend-Kreisliga). Leider muss ein Großteil der Jugendspieler für die kommende Saison altersbedingt ausscheiden. Nichtsdestotrotz wollen die Sportfreunde die seit Jahren hervorragende Jugendarbeit erfolgreich fortführen. Hierzu steht das neuformierte, motivierte Trainerteam um Hans-Jürgen Peter, Kai Lammersmann und Thimo Gassenhuber bereit, das vor kurzem die Trainerlizenz erworben hat und das Training mit neuestem Equipment (Ballroboter, Returnboard, etc.) leiten wird. Am Tischtennissport interessierte Schüler/innen und Jugendliche, die am Training teilnehmen bzw. in eine Trainingseinheit hineinschnuppern wollen, sind hierzu herzlich eingeladen. Das Training findet jeweils Montags und Donnerstags von 18.00 Uhr bis 19.30 Uhr in der Grundschulturnhalle Ennest statt. Regulärer Trainingsbeginn – auch für die Herrenmannschaften der Sportfreunde Ennest – ist der kommende Montag, 22. August.
                
                <div><img class="img-responsive img-thumbnail" src="css/img/Trainer2011-2012.jpg"></div>
            </div>
            -->

            <div class="col-sm-6 text-center">
                <b>Sportfreunde Ennest suchen News</b>
                <br>
                Die Tischtennis-Mannschaft der Sportfreunde Ennest sucht verzweifelt nach News. Aber sie konnte keine finden.
            </div>
        </div>
        
        <a class="text-center link" href="newsarchiv.php">News Archiv</a>
        <div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            bal
            
        </div>
        
        

    </div>
    
    <div class="footer">
        <div class="col-sm-3 footer-logo-container">
            <div class="footer-logo"></div>
        </div>
        <div class="col-sm-6 footer-content">
            <div class="col-sm-1"></div>
            <div class="col-sm-2 text-center"><a href="index.php">News</a></div>
            <div class="col-sm-2 text-center"><a href="mitglieder.html">Mitglieder</a></div>
            <div class="col-sm-2 text-center"><a href="veranstaltungen.html">Veranstaltungen</a></div>
            <div class="col-sm-2 text-center"><a href="history.html">History</a></div>
            <div class="col-sm-2 text-center"><a href="kontakt.html">Kontakt</a></div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <!-- -----------------------------Scritps-------------------------- -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
        

        

    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
        
    
    <script src="js/main.js"></script> 
    </body>
</html>

