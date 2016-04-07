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
						<li><a class="page-scroll" href="mitglieder.php">Mitglieder</a></li>
						<li><a class="page-scroll" href="veranstaltungen.html">Veranstaltungen</a></li>
						<li><a class="page-scroll" href="history.html">History</a></li>
						<li><a class="page-scroll" href="kontakt.html">Kontakt</a></li>
					</ul>

                </div>
               
                
				<!-- /.navbar-collapse -->
			

		</nav>

     <!-- -----------------------------------------------Inhalt der Seite--------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <section class="module parallax parallax-1"> </section>
        <div class="module content">
            <div class="col-md-12 text-center">
                <h2>Hier finden Sie Neuigkeiten rund um den SF-Ennest</h2>
            </div>
        
            <div class="row">

                     <!-- -----------------------------------------------PHP Teil Anfang---------------------------------------------------------------------------------------------------------------------- -->
                     <?php

                            //Datenbank Abfrage
                            $query = "SELECT * FROM News ORDER BY id DESC LIMIT 2";

                            if ($stmt = mysqli_prepare($mysqli, $query)) 
                            {

                                /* execute statement */
                                mysqli_stmt_execute($stmt);

                                /* bind result variables */
                                mysqli_stmt_bind_result($stmt, $id, $datum, $text, $img, $Ueberschrift);

                                /* fetch values */
                                while (mysqli_stmt_fetch($stmt)) 
                                {
                                    printf ("
                                        <div class='col-sm-6 text-center panel news-box'>
                                            <b>%s</b> 
                                            <br> 
                                            %s 
                                            <br> 
                                            <img class='img-responsive img-thumbnail' src='%s'>
                                            </div>",$Ueberschrift, $text, $img);                                       


                                }

                                // statement schließen
                                mysqli_stmt_close($stmt);
                            }

                            //connection schließen
                            mysqli_close($mysqli);

                            ?>
                        <!-- -----------------------------------------------PHP Teil Ende---------------------------------------------------------------------------------------------------------------------- -->


                <!--
                <div class="col-sm-6 text-center">
                    <b>Sportfreunde Ennest starten neue Jugendoffensive</b>
                    <br>
                    Die Tischtennis-Jugendmannschaft der Sportfreunde Ennest konnte zwei mal in Folge die Meisterschaft in ihrer Klasse erringen (Jugend-Kreisklasse, Jugend-Kreisliga). Leider muss ein Großteil der Jugendspieler für die kommende Saison altersbedingt ausscheiden. Nichtsdestotrotz wollen die Sportfreunde die seit Jahren hervorragende Jugendarbeit erfolgreich fortführen. Hierzu steht das neuformierte, motivierte Trainerteam um Hans-Jürgen Peter, Kai Lammersmann und Thimo Gassenhuber bereit, das vor kurzem die Trainerlizenz erworben hat und das Training mit neuestem Equipment (Ballroboter, Returnboard, etc.) leiten wird. Am Tischtennissport interessierte Schüler/innen und Jugendliche, die am Training teilnehmen bzw. in eine Trainingseinheit hineinschnuppern wollen, sind hierzu herzlich eingeladen. Das Training findet jeweils Montags und Donnerstags von 18.00 Uhr bis 19.30 Uhr in der Grundschulturnhalle Ennest statt. Regulärer Trainingsbeginn – auch für die Herrenmannschaften der Sportfreunde Ennest – ist der kommende Montag, 22. August.

                    <div><img class="img-responsive img-thumbnail" src="css/img/Trainer2011-2012.jpg"></div>
                </div>
                -->
            </div>
        
            <div class="text-center">
                <h3><a class="link" href="newsarchiv.php">News Archiv</a></h3>
            </div>
        


    </div>
<section class="module parallax parallax-2"></section>
        
    <section class="footer">
        <div class="container">
            <div class="row">
		<div class="col-md-5 text-center">
		    <h5>Links</h5>
		    <ul class="list-unstyled">
			<li><a href="kontakt.html">Kontakt</a></li>
		    </ul>
		</div>
		<div class="col-md-2 footer-logo-container">
		    <img src="css/img/logoklein.png">
		</div>
		<div class="col-md-5 text-center">
		    <h5>Adresse</h5>
		    Biekengang 6<br>
		    57439 Attendorn<br>
		    info@sf-ennest.de<br><br>
		</div>
	    </div>
	</div>
</section>
    <!-- -----------------------------Scritps-------------------------- -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
        

        

    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
        
    
    <script src="js/main.js"></script>
    <script src="konami-code-master/src/jquery.konami.min.js"></script>
    <script src="js/konami.js"></script>
    </body>
</html>

