<!DOCTYPE html>

    
    <?php
    session_start();
    
    
   
    if (!empty($_SESSION['login']) && $_SESSION['login'] == 1 ){
         printf("
        <html lang='en'>
        <head>
        <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0'>
        <meta charset='utf-8'>	        
        <meta name='description' content='SF-Ennest Sportfreunde Ennest Tischtennis table-tennis'>
        <meta name='author' content='Christopher Göbel Marc Wildermuth'>
        <link rel='shortcut icon' href='css/img/logoklein.png'/>
		
        <title>SF-Ennest</title>
    
        <!-- <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'> -->
        
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel='stylesheet' href='css/main.css'>
        
        
    </head>
    

    <body>
        <!-- Navigation -->
        	<nav class='navbar-default navbar-fixed-top'>
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class='navbar-header page-scroll'>
					<button type='button' id='navbut' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
					<span class='sr-only'>Toggle navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
					<ul class='nav navbar-nav'>
						<li><a class='page-scroll' href='index.php'>News</a></li>
						<li><a class='page-scroll' href='mitglieder.php'>Mitglieder</a></li>
						<li><a class='page-scroll' href='veranstaltungen.html'>Veranstaltungen</a></li>
						<li><a class='page-scroll' href='history.html'>History</a></li>
						<li><a class='page-scroll' href='kontakt.html'>Kontakt</a></li>
					</ul>
                   
                </div>
				<!-- /.navbar-collapse -->
		</nav>
        
        <div class='container'>
            <form class='abstand' name='addNews' id='contactForm' method='POST' action='insert.php'>

                <div class='text-center'>
                    <h2><p>Bitte füllen Sie nur eine neue News oder eine neue Veranstaltung oder ein neues Mitglied gleichzeitig ein. <br> Bitte tragen Sie die Texte in HTML-Format ein (z.B. < br > für neue Zeile)</p></h2>
                </div>
                
                <div class='abstand'><h4><p>Tragen Sie hier die Daten für eine neue News ein.</p></h4></div>
                <div class='row text-center'>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <input name='titel' type='text' class='form-control' placeholder='Überschrift' id='title' required='true'>  
                        </div>
                    </div>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <input name='url' type='text' class='form-control' placeholder='Link zu einem Bild auf css/img/' id='imagelink' required='false'>
                        </div>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-md-12'>
                        <div class='form-group'>
                            <textarea name='news' class='form-control' placeholder='Die News' id='message' required='true' rows='15'></textarea>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-12 text-center'>

                        <input name='submit' type='submit' class='button button-add' value='News hinzufügen'>
                    </div>
                </div>
            </form>


            <form class='abstand' name='addVeranstaltungen' method='POST' action='insert.php'>
            <div class='abstand'><h4><p>Tragen Sie hier die Daten für eine neue Veranstaltung ein.</p></h4></div>
                <div class='row text-center'>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <input name='Datum' type='text' class='form-control' placeholder='Jahr-Monat-Tag' id='Datum' required='true'>  
                        </div>
                    </div>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <input name='Uhrzeit' type='text' class='form-control' placeholder='hh:mm' id='imagelink' required='false'>
                        </div>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-md-12'>
                        <div class='form-group'>
                            <textarea name='beschreibung' class='form-control' placeholder='Veranstaltungsbeschreibung' id='beschreibung' required='true' rows='15'></textarea>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-12 text-center'>

                        <input name='submit2' type='submit' class='button button-add' value='Veranstaltung hinzufügen'>
                    </div>
                </div>
            </form>
            
            <form class='abstand' name='addMitglieder' method='POST' action='insert.php'>
            <div class='abstand'><h4><p>Tragen Sie hier die Daten für ein neues Mitglied ein.</p></h4></div>
                <div class='row text-center'>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <input name='Nachname' type='text' class='form-control' placeholder='Nachname' id='Datum' required='true'>  
                        </div>
                    </div>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <input name='Vorname' type='text' class='form-control' placeholder='Vorname' id='imagelink' required='true'>
                        </div>
                    </div>
                </div>

                <div class='row text-center'>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <input name='Mannschaft' type='text' class='form-control' placeholder='Mannschaft' id='Datum' required='true'>  
                        </div>
                    </div>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <input name='Passbild' type='text' class='form-control' placeholder='Link zu Passbild auf css/img/' id='imagelink' required='false'>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-12 text-center'>

                        <input name='submit3' type='submit' class='button button-add' value='Mitglied hinzufügen'>
                    </div>
                </div>
            </form>
            
        </div>
    </body>
      </html>  ");
        
        
       
    }else{
        echo('Nicht eingeloggt');
    }

   
    ?>
    
	

