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
                        <li class="breadcrumb-item active" aria-current="page">Είμαι εργοδότης</li>
                    </ol>
                </nav>
                <hr id="breadcrumb-line">
                
                <div class="blankbox"></div>
                <div class="covid-header">
                    <h3 id="covid-title">Εργοδότης</h3>
                    <hr class="covidline" size="5">
                </div>
                <!-- display errors -->
                <?php include('php/errormessages/coviderrors.php'); ?>
                <!-- display success messages -->
                <?php include('php/successmessages/covidsuccess.php'); ?>
                
                <h4 id="optiondesc-ergodotis">Επιλέξτε τη δήλωση που θέλετε να κάνετε:</h4>

                <div>
                    <div class="form-check-ergodotis">
                        <input class="form-check-input" type="checkbox" name="check" value="" id="anastolicheck" onclick="onlyOne(this); showCodeErgodotis();">
                        <label class="form-check-label" for="anastolicheck">Δήλωση αναστολής σύμβασης εργασίας για εργαζόμενους</label>
                    </div>
                    <div class="form-check-ergodotis-second">
                        <input class="form-check-input" type="checkbox" name="check" value="" id="apostasicheck" onclick="onlyOne(this); showCodeErgodotis();">
                        <label class="form-check-label" for="apostasicheck">Δήλωση εξ αποστάσεως εργασίας για εργαζόμενους</label>
                    </div>
                    
                    <!-- this will show up if anastoli check is checked -->
                    <div class="form-group" id="anastolichecked" style="display: none;">
                        <?php if(isset($_SESSION['success'])){ ?>
                            
                            <hr class="covidformline" size="5">
                            <h3 id="dilosi-title">Αναστολή σύμβασης εργασίας</h3>
                            <div id="anastoliform">
                                <form method="post" action="ergodotis.php">
                                    <div class="afm">
                                        <label class="labels" for="afm">ΑΦΜ εργαζόμενου:</label>
                                        <p class="formdesc">Πληκτρολογίστε τον Αριθμό Φορολογικού Μητρώου του εργαζόμενου</p>
                                        <input type="text" name="ergodotisafm" class="form-control inputforms afm-ergodotis-input" pattern="[0-9]{9}" title="Το ΑΦΜ πρέπει να έχει μέγεθος 9 χαρακτήρες και να αποτελείται μόνο από αριθμούς">
                                    </div>

                                    <div class="addtip-ergazomenos">
                                        <a><i class="fas fa-plus-circle plus-paidi"></i></a>
                                        <a href="#" class="plus-paidi-text">Προσθέστε εργαζόμενο</a>
                                    </div>

                                    <div class="ergodotis-datepick-start">
                                        <label class="labels ergodotis-date-start-label">Ημερομηνία έναρξης:</label>
                                        <input class="form-control mydatepicker" id="ergodotis-date-start" name="ergodotis-date-start" placeholder="MM/DD/YYY" type="text"/>
                                    </div>

                                    <div class="ergodotis-datepick-end">
                                        <label class="labels ergodotis-date-end-label">Ημερομηνία λήξης:</label>
                                        <input class="form-control mydatepicker" id="ergodotis-date-end" name="ergodotis-date-end" placeholder="MM/DD/YYY" type="text"/>
                                    </div>
                                    
                                    <div class="ergodotis-button">
                                        <button type="submit" name="anastoli" class="btn btn-primary">Υποβολή</button>
                                    </div>

                                    <div id="profiletip-ergodotis">
                                        <p>Στο <a id="profiletip-link" href="profile.php" target="_blank" rel="noopener noreferrer">προφίλ</a> σας μπορείτε ανά πάσα στιγμή να επεξεργαστείτε τις δηλώσεις σας.</p>
                                    </div>

                                </form>

                                <script>
                                    $(document).ready(function(){
                                    var date_input=$('input[name="ergodotis-date-end"]'); //our date input has the name "date"
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
                                    var date_input=$('input[name="ergodotis-date-start"]'); //our date input has the name "date"
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


                            <div id="ergodotislogin">
                                <p>Για την ευκολότερη υποβολή και διαχείριση των δηλώσεων σας, είναι απαραίτητη η σύνδεση την υπηρεσία του Υπουργείου.</p>

                            </div>
                            <div class="loginbutton">
                                <button  name="login" class="btn btn-primary ergodotisloginbutton" onclick="location.href='login.php';">Σύνδεση</button>
                            </div>
                        <?php } ?>

                    </div>

                    <!-- this will show up if e3 apostasews check is checked -->
                    <div class="form-group" id="apostasichecked" style="display: none;">
                        <?php if(isset($_SESSION['success'])){ ?>
                            
                            <hr class="covidformline" size="5">
                            <h3 id="dilosi-title">Εξ αποστάσεως εργασία</h3>
                            <div id="anastoliform">
                                <form method="post" action="ergodotis.php">
                                    <div class="afm">
                                        <label class="labels" >ΑΦΜ εργαζόμενου:</label>
                                        <p class="formdesc">Πληκτρολογίστε τον Αριθμό Φορολογικού Μητρώου του εργαζόμενου</p>
                                        <input type="text" name="ergodotisafm" class="form-control inputforms afm-ergodotis-input" pattern="[0-9]{9}" title="Το ΑΦΜ πρέπει να έχει μέγεθος 9 χαρακτήρες και να αποτελείται μόνο από αριθμούς">
                                    </div>

                                    <div class="addtip-ergazomenos">
                                        <a><i class="fas fa-plus-circle plus-paidi"></i></a>
                                        <a href="#" class="plus-paidi-text">Προσθέστε εργαζόμενο</a>
                                    </div>

                                    <div class="ergodotis-datepick-start">
                                        <label class="labels ergodotis-date-start-label">Ημερομηνία έναρξης:</label>
                                        <input class="form-control mydatepicker" id="ergodotis-date-start" name="ergodotis-date-start" placeholder="MM/DD/YYY" type="text"/>
                                    </div>

                                    <div class="ergodotis-datepick-end">
                                        <label class="labels ergodotis-date-end-label">Ημερομηνία λήξης:</label>
                                        <input class="form-control mydatepicker" id="ergodotis-date-end" name="ergodotis-date-end" placeholder="MM/DD/YYY" type="text"/>
                                    </div>

                                    <div class="ergodotis-button">
                                        <button type="submit" name="apostasi" class="btn btn-primary">Υποβολή</button>
                                    </div>
                                    
                                    <div id="profiletip-ergodotis">
                                        <p>Στο <a id="profiletip-link" href="profile.php" target="_blank" rel="noopener noreferrer">προφίλ</a> σας μπορείτε ανά πάσα στιγμή να επεξεργαστείτε τις δηλώσεις σας.</p>
                                    </div>

                                </form>

                                

                                <script>
                                    $(document).ready(function(){
                                    var date_input=$('input[name="ergodotis-date-end"]'); //our date input has the name "date"
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
                                    var date_input=$('input[name="ergodotis-date-start"]'); //our date input has the name "date"
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


                            <div id="ergodotislogin">
                                <p>Για την ευκολότερη υποβολή και διαχείριση των δηλώσεων σας, είναι απαραίτητη η σύνδεση την υπηρεσία του Υπουργείου.</p>

                            </div>
                            <div class="loginbutton">
                                <button  name="login" class="btn btn-primary ergodotisloginbutton" onclick="location.href='login.php';">Σύνδεση</button>
                            </div>
                        <?php } ?>
                    </div>


                </div>

                

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