<?php include('php/server.php'); ?>
<?php $_SESSION['current_page'] = $_SERVER['REQUEST_URI']; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/mystyle.css">
		<!--  jQuery -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

		<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
		<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

		<!-- Bootstrap Date-Picker Plugin -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <script src="javascript/functions.js"></script>

		
		


    </head>
    <body>
        
        
            
        <div class="top">
            <div class="headerbar">
                <!-- description line -->
                <div id="description">
                    <p id="headerdesc">Ο επίσημος ιστότοπος του Υπουγείου Εργασίας & Κοινωνικών Υποθέσεων</p>
                    <p id="headerdate"><script> document.write(new Date().toLocaleDateString()); </script></p>
                    
				</div>
				<div id="mypolygon">

					<div class="overlayshadow">
                    
					</div>
					<div class="overlay">
						
						<img src="images/earth.png" id="language">
						<b id="en"><a href="#">ENGLISH</a></b>
						<hr id="headerbarseparator">
						<b id="contact"><a href="contracts.php">ΕΠΙΚΟΙΝΩΝΙΑ & ΠΡΟΣΒΑΣΙΜΟΤΗΤΑ</a></b>
						<hr id="headerbarseparator">
						<img src="images/user.png" id="user">
						<?php if(isset($_SESSION['success'])){ ?>
							<b id="login"><a href="profile.php">ΠΡΟΦΙΛ</a></b>
						<?php }else{ ?>
							<b id="login"><a href="login.php">ΣΥΝΔΕΣΗ</a></b>
						<?php } ?> 
		
						
		
					</div>

				</div>
                
			</div>

            <a href="index.php" id="logo"><img src="images/logo4.png"></a>
                
            <div class="navbarline">
                <nav class="links" style="--items: 7;">
            	    <a href="index.php" ><i class='fas fa-home'></i></a>
            	    <a id="covid" href="covid.php">COVID</a>
            	    <a href="#">Συχνά Θέματα</a>
            	    <a href="#">Εκδηλώσεις</a>
            	    <a href="#">Υπουργείο</a>
            	    <a href="#">Νομοθεσία</a>
            	    <a href="#">Υπηρεσίες</a>
            	    <span class="line"></span>
                </nav>
            </div>
        </div>
        
        

        <div class="outterbox">

            <div class="mainbox">

                <div class="blankbox"></div>
                <div class="maintitle" id="covidindextitle">
                    <h1 class="bodytitle">COVID</h1>
                    <hr class="bodylinecovidindex" size="5"> 
                </div>

                <div class="odigies-covid-index">
                    <a href="covid.php" target="_blank" rel="noopener noreferrer" id="fillclickodigies"></a>
                    <a href="covid.php" target="_blank" rel="noopener noreferrer" id="textodigies">Εργασιακά θέματα και κορονοϊός</a>
                </div>
                <div class="blankbox"></div>

                <!-- nea kai anakoinwseis   -->
                <div class="maintitle" id="firstmaintitle">
                    <h1 class="bodytitle">Νέα & Ανακοινώσεις</h1>
                    <hr class="bodyline" size="5"> 
                </div>
                    
                <div class="nea_anakoinwseis">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/stay safe.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/covid lattest.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/breaking news.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                    
                    <a class="twitter-timeline" data-width="320" data-height="444" href="https://twitter.com/labourgovgr?ref_src=twsrc%5Etfw">Tweets by labourgovgr</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>                 
                    <div class="neabutton">
                        <button  name="login" class="btn btn-primary deltialoginbutton">Όλες οι ανακοινώσεις</button>
                    </div>
            
                </div>

                

                <!-- me ena click -->
                <div class="maintitle" id="oneclick">
                    <h1 class="bodytitle">Με ένα click</h1>
                    <hr id="menaclickbodyline" size="5"> 
                </div>

                <div id="meenaclick">
                    <a href="https://keaprogram.gr/pubnr" class="enaclick kea" target="_blank" rel="noopener noreferrer"><img src="images/kea.png" id="tiles"></a>
                    <a href="https://www.efka.gov.gr/el" class="enaclick efka" target="_blank" rel="noopener noreferrer"><img src="images/efka.png"></a>
                    <a href="https://kentrakoinotitas.gr/" class="enaclick kentrokoin" target="_blank" rel="noopener noreferrer"><img src="images/kentrokoin.png"></a>
                    <a href="http://www.amka.gr/" class="enaclick amka" target="_blank" rel="noopener noreferrer"><img src="images/amka.png"></a>
                </div>



                <div class="maintitle" id="deltia">
                    <h1 class="bodytitle">Δελτία Τύπου</h1>
                    <hr class="bodylinedeltia" size="5"> 
                </div>

                <div class="blankbox"></div>

                <div class="deltiatipou">
                    <img id="hand" src="images/deltiahand.png"></img>
                    <a href="#" id="deltiotitle"><b>ΚΥΑ - ΔΙΑΔΙΚΑΣΙΑ ΓΙΑ ΤΗΝ ΨΗΦΙΑΚΗ ΣΥΝΔΕΣΗ ΠΑΙΔΙΩΝ ΜΕ ΥΠΟΨΗΦΙΟΥΣ ΑΝΑΔΟΧΟΥΣ Η ΘΕΤΟΥΣ ΓΟΝΕΙΣ</b></a>
                    <p id="deltiodate">14 Δεκεμβρίου 2020</p>
                </div>
                <div class="deltiatipou deltia-second">
                    <img id="hand" src="images/deltiahand.png"></img>
                    <a href="#" id="deltiotitle"><b>ΤΕΛΕΤΗ ΠΑΡΑΛΑΒΗΣ ΤΟΥ ΥΦΥΠ. ΚΟΙΝΩΝΙΚΗΣ ΑΣΦΑΛΙΣΗΣ ΣΤΟ ΥΠΟΥΡΓΕΙΟ ΕΡΓΑΣΙΑΣ</b></a>
                    <p id="deltiodate">23 Σεπτεμβρίου 2020</p>
                </div>
                <div class="deltiatipou deltia-third">
                    <img id="hand" src="images/deltiahand.png"></img>
                    <a href="#" id="deltiotitle"><b>ΑΝΑΡΤΗΣΗ ΟΡΙΣΤΙΚΩΝ ΠΙΝΑΚΩΝ ΓΙΑ ΤΟ ΠΡΟΓΡΑΜΜΑ ΚΟΙΝΩΦΕΛΟΥΣ ΑΠΑΣΧΟΛΗΣΗΣ 36.500 ΑΝΕΡΓΩΝ</b></a>
                    <p id="deltiodate">03 Ιουλίου 2020</p>
                </div>
                <div class="deltiabutton">
                    <button  name="login" class="btn btn-primary deltialoginbutton">Όλα τα δελτία τύπου</button>
                </div>

            </div>
        </div>

        <div class="footer">

			<img src="images/footerlogo2.png" id="footerlogo">
			<hr class="footerline" size="5">

			<h5 class="footertitle">Χρήσιμοι Σύνδεσμοι</h5>
          
				<ul class="footerlist">
					<li>
						<a href="contracts.php" class="footerlink">Επικοινωνία & Πρόσβαση</a>
					</li>
					<li>
						<a href="https://government.gov.gr/" class="footerlink" target="_blank" rel="noopener noreferrer">Ιστοσελίδα της Ελληνικής Κυβέρνησης</a>
					</li>
					
					<li>
						<a href="http://www.kep.gov.gr/portal/page/portal/kep" class="footerlink" target="_blank" rel="noopener noreferrer">Κέντρο Εξυπηρέτησης Πολιτών</a>
					</li>
				</ul>

			<hr class="footerlinesocialmedia" size="5">

			<h5 class="footertitlesocialmedia">Κοινωνικά δίκτυα</h5>	
			
			<a id="fbfooter" href="https://www.facebook.com/labourgovgr" target="_blank" rel="noopener noreferrer"><img src="images/fbfooter.png" id="fbfooterimage"></img></a>
			<a id="twitterfooter" href="https://twitter.com/labourgovgr" target="_blank" rel="noopener noreferrer"><img src="images/twitterfooter.png" id="twitterfooterimage"></img></a>
			


		</div>
    </body>
</html>