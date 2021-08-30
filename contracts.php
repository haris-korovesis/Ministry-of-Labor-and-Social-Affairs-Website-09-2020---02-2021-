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
        
        

        <div class="outterbox" id="boxcontact">

            <div class="mainbox">
            	<!-- breadcrump -->
              	<nav id="breadcrump" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  	<ol class="breadcrumb">
                    	<li class="breadcrumb-item"><a href="index.php">Αρχική σελίδα</a></li>
                      	<li class="breadcrumb-item active" aria-current="page">Επικοινωνία</li>
                  	</ol>
              	</nav>
              	<hr id="breadcrumb-line">
              
              

				<div class="ContactsBlock">
					<!-- Phones and emails -->
					<div class="infoTitle firstinfotitle">
						<h1 class="bodytitle">Επικοινωνία</h1>
						<hr class="bodylineContracts" size="5">
					</div>

					<div class="InfoDetails">
						<div class="smallcontactbox conboxone">
							<p class="contactinfo">Τηλεφωνικό κέντρο Υπουργείου: </p>
							<p id="number"><i class="fa fa-phone fa-2x" aria-hidden="true">     +30 213-1516649</i></p>
							<p id="number"><i class="fa fa-phone fa-2x" aria-hidden="true">     +30 213-1516651</i></p>
						</div>
						
					
						<div class="smallcontactbox conboxtwo">
							<p class="contactinfo">Ηλεκτρονικές Διευθύνσεις(e-mails): </p>
							
							<i class="fa fa-envelope" aria-hidden="true">     <a id="mail" href="https://www.ypakp.gr/texts/editor_uploads/files/e-mail_armodiothtes_site.pdf" target="_blank" rel="noopener noreferrer">Κατάλογος διευθύνσεων Υπουργειού</a></i>

						</div>

						
						<div class="contactbox conboxthree">
							<p class="contactinfo">Κατάλογοι τηλεφώνων και ηλεκτρονικών διευθύνσεων<br>για την υποβολή ερωτημάτων σχετικά με:</p>
							<i class="fas fa-info-circle" aria-hidden="true">     <a id="mail" href="https://www.ypakp.gr/texts/editor_uploads/files/APASXOLHSH.pdf" target="_blank" rel="noopener noreferrer">Θέματα εργασιακών σχέσεων<br></a></i>
							<i class="fas fa-info-circle info-second" aria-hidden="true">     <a id="mail" href="https://www.ypakp.gr/texts/editor_uploads/files/asfalish.pdf" target="_blank" rel="noopener noreferrer">Θέματα κοινωνικής ασφάλισης</a></i>

							
						</div>
						
						
		
					</div>
					
					<!-- Location and hours  -->
					<div class="infoTitle location-hour-title">
						<h1 class="bodytitle">Τοποθεσία & Ώρες Λειτουργίας</h1>
						<hr class="bodylineContractslocation" size="5">
					</div>
					<div class="InfoDetails location-hour">
						<div id="map">
							<iframe src="http://maps.google.com/maps?q=37.980464235675925,23.731071956328478&z=16&output=embed" id="embedmap" height="450" width="580"></iframe>
							<div id="mapdesc">
								<p id="maptitle">Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων</p>
								<p id="mapdetails">Σταδίου 31-27<br>Αθήνα, 105 59</p>
							</div>	
						</div>

						<div class="hourbox conboxhours">
							<h2> <i class="far fa-clock"></i>   Ωράριο Λειτουργίας</h2>
							<div>
								<div id="meres">
									<p><b>Δευτέρα</b></p>
									<p><b>Τρίτη</b></p>
									<p><b>Τετάρτη</b></p>
									<p><b>Πέμπτη</b></p>
									<p><b>Παρασκευή</b></p>
									<p><b>Σάββατο</b></p>
									<p><b>Κυριακή</b></p>
								</div>
								<div id="wres">
									<p>7:00 π.μ. - 5:00 μ.μ.</p>
									<p>7:00 π.μ. - 5:00 μ.μ.</p>
									<p>7:00 π.μ. - 5:00 μ.μ.</p>
									<p>7:00 π.μ. - 5:00 μ.μ.</p>
									<p>7:00 π.μ. - 5:00 μ.μ.</p>
									<p>Κλειστά</p>
									<p>Κλειστά</p>
								</div>
								
							</div>
							


						</div>
					</div>


					<!-- kleise rantevou -->
					<div class="infoTitle location-hour-title">
						<h1 class="bodytitle">Κλείστε ραντεβού</h1>
						<hr class="bodylineContractsrantevou" size="5">
					</div>
					
					<!-- if someone is already logged in -->
					<?php if(isset($_SESSION['success'])){ ?>
						<div id="rantevouhelp">
							<p>Αφού κλείσετε το ραντεβού σας, έχετε την δυνατότητα αλλαγής ώρας ή ακύρωσης του στην ενότητα "ραντεβού" στο προφίλ σας. </p>
						</div>

						<form method="post" action="contracts.php">
							<!-- display errors -->
							<?php include('php/errormessages/rantevouerrors.php'); ?>
							<!-- display success messages -->
							<?php include('php/successmessages/covidsuccess.php'); ?>
							<label class="rantevoulabels">Ημερομηνία:</label>
                          	<p class="rantevouformdesc">Επιλέξτε ημερομηνία</p>
							<input class="form-control mydatepicker" id="rantevoudate" name="rantevoudate" placeholder="MM/DD/YYY" type="text"/>
							<!-- <button class="btn btn-primary " name="submit" type="submit">Submit</button> -->
							
							<label class="rantevoulabels rantevoulabelssecond">Ώρα:</label>
                          	<p class="rantevouformdesc rantevouformdescsecond">Επιλέξτε ώρα</p>
							<select name="rantevoutime" class="form-select timepicker" aria-label="Default select example">
								<option value="" selected>Επιλέξτε ώρα</option>
								<option value="9">9:00 π.μ.</option>
								<option value="10">10:00 π.μ.</option>
								<option value="11">11:00 π.μ.</option>
								<option value="12">12:00 μ.μ.</option>
								<option value="1">1:00 μ.μ</option>
								<option value="2">2:00 μ.μ</option>
								<option value="3">3:00 μ.μ</option>
								<option value="4">4:00 μ.μ</option>

							</select>
							<button class="btn btn-primary rantevoubutton" name="rantevou" type="submit">Κλείστε ραντεβού</button>
						</form>



						<script>
							$(document).ready(function(){
							var date_input=$('input[name="rantevoudate"]'); //our date input has the name "date"
							var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
							var options={
								format: 'mm/dd/yyyy',
								container: container,
								todayHighlight: true,
								autoclose: true,
							};
							date_input.datepicker(options);
							})
						</script>

					<!-- if nobody is logged in	 -->
					<?php }else{ ?>


						<div id="rantevoulogin">
							<p>Για την ευκολότερη διαχείριση των ραντεβού σας, είναι απαραίτητη η σύνδεση την υπηρεσία του Υπουργείου.</p>

						</div>
						<div class="loginbutton">
                        	<button  name="login" class="btn btn-primary rantevouloginbutton" onclick="location.href='login.php';">Σύνδεση</button>
                        </div>
					<?php } ?> 
					
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