<html lang="en">
    
    <?php
    //Verbindung einbinden
    include('conn.php');
    ?>
    
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <meta charset="utf-8">	        
        <meta name="description" content="SF-Ennest Sportfreunde Ennest Tischtennis table-tennis">
        <meta name="author" content="Christopher GÃ¶bel Marc Wildermuth">
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
        <div class="abstand"></div>
        <div class="container">
	<div class="text-center">
            <h2>Mitgliederliste</h2>
	</div>
         <!-- -----------------------------------------------PHP Teil Anfang------------------------------------------------------------------------------------------------------------------------>
                     <?php
        
                        $stockpic = 0;
                        $pic = "";
                        //Datenbank Abfrage
                        $query = "SELECT * FROM Mitglieder ORDER BY id DESC";

                        if ($stmt = mysqli_prepare($mysqli, $query)) {

                            /* execute statement */
                            mysqli_stmt_execute($stmt);

                            /* bind result variables */
                            mysqli_stmt_bind_result($stmt, $id, $Vorname, $Name, $Mannschaft, $Passbild);

                            /* fetch values */
                            while (mysqli_stmt_fetch($stmt)) {
                                if($Passbild == ""){
                                    $Passbild="css/img/schlaegerblack.svg";
                                }

                                    printf ("
                                    <div class='row panel'>
                                        <div class='col-xs-12 col-sm-8'>
                                            <h3>%s, %s</h3>
                                            <h4>%s</h4>
                                        </div>
                                        <div class='col-xs-6 col-sm-4'> 
                                            <img class='img-responsive img-thumbnail memberpic' src='%s'>
                                        </div>
                                    </div>\n", $Name, $Vorname, $Mannschaft, $Passbild);
                                
                                
                            }

                            /* close statement */
                            mysqli_stmt_close($stmt);
                        }

                        /* close connection */
                        mysqli_close($mysqli);

                        ?>
                    
                    <!-- -----------------------------------------------PHP Teil Ende---------------------------------------------------------------------------------------------------------------------- -->
         </div>

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
        
    
    <script src="js/main.js"></script> 
    </body>
    
</html>