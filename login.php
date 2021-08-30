<?php include('php/server.php'); ?>



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
                <!-- breadcrump -->
                <nav id="breadcrump" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Αρχική σελίδα</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Σύνδεση</li>
                    </ol>
                </nav>
                <hr id="breadcrumb-line">
                <div class="blankbox"></div>
                
                <div class="loginTitle">
                    <hr class="loginline lineonelogin" size="5"> 
                    <h1 id="logintext">Σύνδεση</h1>
                    <hr class="loginline linetwologin" size="5"> 

                </div>
                <div id="loginform">
                    <form method="post" action="login.php">


                        <!-- display errors -->
                        <?php include('php/errormessages/loginerrors.php'); ?>
                        <!-- display success messages -->
                        <?php include('php/successmessages/loginsuccess.php'); ?>  

                        <div class="form-group">
                          <label class="labels" for="email">Email:</label>
                          <p class="formdesc">Πληκτρολογίστε διεύθυνση ηλεκτρονικού ταχυδρομείου</p>
                          <input type="text" name="loginemail" class="form-control inputforms" id="email">
                        </div>
                        <div class="form-group">
                          <label class="labels" for="pwd">Κωδικός:</label>
                          <p class="formdesc">Πληκτρολογίστε τον κωδικό πρόσβασης</p>
                          <input type="password" name="loginpassword" class="form-control inputforms" id="pwd">
                        </div>
                        <div class="rememberme">
                            <input class="form-check-input" type="checkbox" name="remember" value="" id="rememberme-check">
                            <label class="form-check-label" for="remember">Θέλω να παραμείνω συνδεδεμένος</label>
                        </div>

                        <div class="loginbutton">
                            <button type="submit" name="login" class="btn btn-primary">Σύνδεση</button>
                        </div>
                        <p id="forgotpassword">Ξεχάσατε τον κωδικό σας;Πατήστε <a href="#">εδώ</a></p>

                        <hr id="login-signup-line">
                        <p id="signupadvice">Δεν έχετε λογαριασμό; Κάντε <b>εγγραφή</b>!</p>
                        <div class="signupadvicebutton">
                            <button onclick="location.href='register.php';" class="btn btn-primary" id="signupbutton" type="button">Εγγραφή</button>
                        </div>
                    </form>
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