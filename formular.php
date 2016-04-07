<!DOCTYPE html>

    
    <?php
<<<<<<< HEAD
    //Verbindung einbinden
    include('conn.php');
=======
>>>>>>> origin/master
    session_start();
    
    
   
<<<<<<< HEAD
    if ($_SESSION['login'] == 0){
        echo('Nicht eingeloggt');
    }else{
        printf("
=======
    if (!empty($_SESSION['login']) && $_SESSION['login'] == 1 ){
         printf("
>>>>>>> origin/master
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
						<li><a class='page-scroll' href='mitglieder.html'>Mitglieder</a></li>
						<li><a class='page-scroll' href='veranstaltungen.html'>Veranstaltungen</a></li>
						<li><a class='page-scroll' href='history.html'>History</a></li>
						<li><a class='page-scroll' href='kontakt.html'>Kontakt</a></li>
					</ul>
                    <div class='navbar-right'>
                    <img src='css/img/logo.jpg' class='img-responsive' alt='logo'>
                        </div>
                </div>
               
                
				<!-- /.navbar-collapse -->
			

		</nav>
        
         
        <form class='abstand' name='addNews' id='contactForm' method='POST' action='insert.php'>
            <div class='row text-center'>
                <div class='col-md-6'>
                    <div class='form-group'>
                        <input name='titel' type='text' class='form-control' placeholder='Überschrift' id='title' required='true'>  
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='form-group'>
                        <input name='url' type='text' class='form-control' placeholder='Link zu einem Bild' id='imagelink' required='false'>
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
        
    </body>
      </html>  ");
<<<<<<< HEAD
=======
        
        
       
    }else{
        echo('Nicht eingeloggt');
>>>>>>> origin/master
    }

   
    ?>
    
	

