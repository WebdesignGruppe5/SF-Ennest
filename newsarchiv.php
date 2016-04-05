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
        <div class="abstand"></div>
        

         <!-- -----------------------------------------------PHP Teil Anfang------------------------------------------------------------------------------------------------------------------------>
                 <?php
        
                        $stockpic = 0;
                        $pic = "";
                        //Datenbank Abfrage
                        $query = "SELECT * FROM News ORDER BY id DESC";

                        if ($stmt = mysqli_prepare($mysqli, $query)) {

                            /* execute statement */
                            mysqli_stmt_execute($stmt);

                            /* bind result variables */
                            mysqli_stmt_bind_result($stmt, $id, $datum, $text, $img, $Ueberschrift);

                            /* fetch values */
                            while (mysqli_stmt_fetch($stmt)) {
                                
                                if($stockpic == 0)
                                {
                                    $pic = "css/img/schlaegerblack.svg";
                                    $stockpic = 1;
                                }
                                else if($stockpic == 1)
                                {
                                    $pic = "css/img/schlaegerblue.svg";
                                    $stockpic = 2;
                                }
                                else if($stockpic == 2)
                                {
                                    $pic = "css/img/schlaegerred.svg";
                                    $stockpic = 0;
                                }
                                
                                if($img=="")
                                {
                                    printf ("
                                    <div class='row abstand'>
                                        <div class='col-xs-12 col-sm-10'>
                                            <b>%s</b> 
                                            <br>
                                                <h4>%s</h4>
                                            <br>%s<br>
                                        </div>
                                        <div class='col-xs-6 col-sm-2'> 
                                            <img class='img-responsive img-thumbnail bilder' src=$pic>
                                        </div>
                                    </div>\n", $datum, $Ueberschrift, $text);
                                }
                                else
                                {
                                    printf ("
                                    <div class='row abstand'>
                                        <div class='col-xs-12 col-sm-8'>
                                            <b>%s</b> 
                                            <br>
                                                <h4>%s</h4>
                                            <br>%s<br>
                                        </div>
                                        <div class='col-xs-6 col-sm-4'> 
                                            <img class='img-responsive img-thumbnail' src='%s'>
                                        </div>
                                    </div>\n", $datum, $Ueberschrift, $text, $img);
                                }
                                
                            }

                            /* close statement */
                            mysqli_stmt_close($stmt);
                        }

                        /* close connection */
                        mysqli_close($mysqli);

                        ?>
                    <!-- -----------------------------------------------PHP Teil Ende---------------------------------------------------------------------------------------------------------------------- -->
         
         <!-- -----------------------------Scritps-------------------------- -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
        
    
    <script src="js/main.js"></script> 
    </body>
    
</html>