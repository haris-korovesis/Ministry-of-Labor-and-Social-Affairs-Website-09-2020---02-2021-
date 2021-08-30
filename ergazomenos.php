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
        
        

        <div class="outterbox" id="box-ergodotis">

            <div class="mainbox">  
                <nav id="breadcrump" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Αρχική σελίδα</a></li>
                        <li class="breadcrumb-item"><a href="covid.php">COVID</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Είμαι εργαζόμενος</li>
                    </ol>
                </nav>
                <hr id="breadcrumb-line">
                
                <div class="blankbox"></div>
                <div class="covid-header">
                    <h3 id="covid-title">Εργαζόμενος</h3>
                    <hr class="covidline ergazomenosline" size="5">
                </div>
                <!-- display errors -->
                <?php include('php/errormessages/coviderrors.php'); ?>
                <!-- display success messages -->
                <?php include('php/successmessages/covidsuccess.php'); ?>
                <h3 id="dilosi-title-ergazomenos">Άδεια ειδικού σκοπού</h3>
           
                <?php if(isset($_SESSION['success'])){ ?>
                    
                    <div id="adeia-form">
                        <form method="post" action="ergazomenos.php">
                            
                            
                            <div class="afm">
                                <label class="labels" >Σχολική τάξη που φοιτεί το παιδί σας:</label>
                        
                                <select class="form-select timepicker-ergazomenos" name="childgrade">
                                    <option value="" selected>Επιλέξτε τάξη</option>
                                    <option value="vrefikous">Βρεφικός σταθμός</option>
                                    <option value="vrefonip">Βρεφονηπιακός σταθμός</option>
                                    <option value="paidikos">Παιδικός</option>
                                    <option value="nip">Νηπιαγωγείο</option>
                                    <option value="1d">Α'  Δημοτικού</option>
                                    <option value="2d">Β'  Δημοτικού</option>
                                    <option value="3d">Γ'  Δημοτικού</option>
                                    <option value="4d">Δ'  Δημοτικού</option>
                                    <option value="5d">Ε'  Δημοτικού</option>
                                    <option value="6d">ΣΤ' Δημοτικού</option>
                                    <option value="1g">Α'  Γυμνασίου</option>
                                    <option value="2g">Β'  Γυμνασίου</option>
                                    <option value="3g">Γ'  Γυμνασίου</option>

                                
                                
                                </select>
                            </div>

                            <div class="addtip">
                                <a><i class="fas fa-plus-circle plus-paidi"></i></a>
                                <a href="#" class="plus-paidi-text">Προσθέστε παιδί</a>
                            </div>
			                

                            <div class="ergodotis-datepick-start ergazomenos-datepick">
                                <label class="labels ergodotis-date-start-label">Ημερομηνία έναρξης:</label>
                                <input class="form-control mydatepicker" id="ergazomenos-date-start" name="ergazomenos-date-start" placeholder="MM/DD/YYY" type="text"/>
                            </div>

                            <div class="ergodotis-datepick-end ergazomenos-datepick-second">
                                <label class="labels ergodotis-date-end-label">Ημερομηνία λήξης:</label>
                                <input class="form-control mydatepicker" id="ergazomenos-date-end" name="ergazomenos-date-end" placeholder="MM/DD/YYY" type="text"/>
                            </div>

                            <div class="ergazomenos-button">
                                <button type="submit" name="adeia" class="btn btn-primary">Υποβολή</button>
                            </div>

                            <div id="profiletip">
                                <p>Στο <a id="profiletip-link" href="profile.php" target="_blank" rel="noopener noreferrer">προφίλ</a> σας μπορείτε ανά πάσα στιγμή να επεξεργαστείτε τις δηλώσεις σας.</p>
                            </div>

                        </form>

                        <script>
							$(document).ready(function(){
							var date_input=$('input[name="ergazomenos-date-end"]'); //our date input has the name "date"
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
                        
                        <script>
							$(document).ready(function(){
							var date_input=$('input[name="ergazomenos-date-start"]'); //our date input has the name "date"
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
                    </div>
                        

                <!-- if nobody is logged in	 -->
                <?php }else{ ?>


                    <div id="ergazomenoslogin">
                        <p>Για την ευκολότερη υποβολή και διαχείριση των δηλώσεων σας, είναι απαραίτητη η σύνδεση την υπηρεσία του Υπουργείου.</p>

                    </div>
                    <div class="loginbutton">
                        <button  name="login" class="btn btn-primary ergazomenosloginbutton" onclick="location.href='login.php';">Σύνδεση</button>
                    </div>
                <?php } ?>
               
                   
                   
                            
                                

                        

                

                <div class="blankbox"></div>
                
                        

                
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