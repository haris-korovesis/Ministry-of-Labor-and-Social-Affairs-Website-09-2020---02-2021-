<?php include('php/server.php'); ?>
<?php include('php/profileinfo.php'); ?>

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
        
        

        <div class="outterbox" id="box-profile">

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
                    <h3 id="profile-title">Προφίλ</h3>
                    <hr class="covidline ergazomenosline" size="5">
                </div>
                <!-- display errors -->
                <?php include('php/errormessages/coviderrors.php'); ?>
                <!-- display success messages -->
                <?php include('php/successmessages/covidsuccess.php'); ?>
                
           
                <?php if(isset($_SESSION['success'])){ ?>
                    
                    
                           

                    <table class="table table-striped">

                        <tbody>
                            <tr>
                            <th scope="row">Όνομα</th>
                            <td><?php echo $_SESSION['name']; ?></td>
                            
                            </tr>
                            <tr>
                            <th scope="row">Επίθετο</th>
                            <td><?php echo $_SESSION['surname']; ?></td>
                            
                            </tr>
                            <tr>
                            <th scope="row">ΑΦΜ</th>
                            <td><?php echo $_SESSION['afm']; ?></td>
                            </tr>
                            <tr>
                            <th scope="row">e-mail</th>
                            <td><?php echo $_SESSION['email']; ?></td>
                            </tr>
                            <!-- if this account is a worker -->
                            <?php if(empty($_SESSION['owns'])){ ?>
                                <tr>
                                <th scope="row">Εταιρία</th>
                                <td><?php echo $_SESSION['works']; ?></td>
                                </tr>
                                
                            <!-- if this acccount is an owner -->
                            <?php }else{ ?>
                                <tr>
                                <th scope="row">Εταιρία</th>
                                <td><?php echo $_SESSION['owns']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div class="logοoutbutton">
                        <button  name="login" class="btn btn-primary ergazomenosloginbutton" onclick="location.href='logout.php';">Αποσύνδεση</button>
                    </div>



                    <div class="infoTitle rantevoutitleprofile">
                        <h1 class="bodytitle">Δηλώσεις εξ αποστάσεως εργασίας</h1>
                        <hr class="apostasibodyline" size="5">

                    </div>


                    <!-- if this account is a worker -->
                    <?php if(empty($_SESSION['owns'])){ ?>
                        
                        <!-- an den uparxoun dilsoeis eks apostasews gia auton ton ergazomeno -->
                        <?php if(empty($apostasi)){ ?>
                            <div id="profilapostasimsg">
                                <p>Ο εργοδότης σας δεν έχει υποβάλλει κάποια δήλωση για εξ αποστάσεως εργασία.</p>
                            </div>

                        <!-- an yparxoun dhlwseis -->
                        <?php }else{ ?>

                            <table class="table table-striped apostasi-table">

                                <thead>
                                    <tr>
                                        <th scope="col">ΑΦΜ εργοδότη</th>
                                        <th scope="col">Ημερομηνία έναρξης</th>
                                        <th scope="col">Ημερομηνία λήξης</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($apostasi as $dilosi): ?>
                                        <?php $i=0; ?>
                                        <tr>
                                        <?php foreach ($dilosi as $v2): ?>

                                            <!-- ignore dilosi id kai afm_ergazomenou -->
                                            <?php if($i!=0 && $i!=1){ ?>
                                            <td><?php echo $v2; ?></td>

                                            <?php } ?>

                                            <?php $i=$i+1 ?>
                                        <?php endforeach ?>
                                        </tr>

                                        

                                       
                                    <?php endforeach ?>
                                    
                                </tbody>
                            </table>

                        <?php } ?>
                        

                    <!-- if this acccount is an owner -->
                    <?php }else{ ?>
                        <!-- an den uparxoun dilsoeis eks apostasews gia auton ton ergazomeno -->
                        <?php if(empty($apostasi)){ ?>
                            <div id="profilapostasimsg">
                                <p>Δεν έχετε υποβάλλει κάποια δήλωση για εξ αποστάσεως εργασία.</p>
                            </div>

                        <!-- an yparxoun dhlwseis -->
                        <?php }else{ ?>

                            <table class="table table-striped apostasi-table">

                                <thead>
                                    <tr>
                                        <th scope="col">ΑΦΜ εργαζομένου</th>
                                        <th scope="col">Ημερομηνία έναρξης</th>
                                        <th scope="col">Ημερομηνία λήξης</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($apostasi as $dilosi): ?>
                                        <?php $i=0; ?>
                                        <tr>
                                        <?php foreach ($dilosi as $v2): ?>

                                            <!-- ignore dilosi id kai afm_ergodoti -->
                                            <?php if($i!=0 && $i!=2){ ?>
                                            <td><?php echo $v2; ?></td>

                                            <?php } ?>

                                            <?php $i=$i+1 ?>
                                        <?php endforeach ?>
                                        </tr>

                                        

                                       
                                    <?php endforeach ?>
                                    
                                </tbody>
                            </table>

                        <?php } ?>
                    <?php } ?>
                
                        
                    <div class="infoTitle rantevoutitleprofile">
                        <h1 class="bodytitle">Δηλώσεις αναστολής εργασίας</h1>
                        <hr class="anastolibodyline" size="5">
                    </div>


                    <!-- if this account is a worker -->
                    <?php if(empty($_SESSION['owns'])){ ?>
                        
                        <!-- an den uparxoun dilsoeis eks apostasews gia auton ton ergazomeno -->
                        <?php if(empty($anastolis)){ ?>
                            <div id="profilapostasimsg">
                                <p>Ο εργοδότης σας δεν έχει υποβάλλει κάποια δήλωση για αναστολή εργασίας.</p>
                            </div>

                        <!-- an yparxoun dhlwseis -->
                        <?php }else{ ?>

                            <table class="table table-striped apostasi-table">

                                <thead>
                                    <tr>
                                        <th scope="col">ΑΦΜ εργοδότη</th>
                                        <th scope="col">Ημερομηνία έναρξης</th>
                                        <th scope="col">Ημερομηνία λήξης</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($anastolis as $dilosi): ?>
                                        <?php $i=0; ?>
                                        <tr>
                                        <?php foreach ($dilosi as $v2): ?>

                                            <!-- ignore dilosi id kai afm_ergazomenou -->
                                            <?php if($i!=0 && $i!=1){ ?>
                                            <td><?php echo $v2; ?></td>

                                            <?php } ?>

                                            <?php $i=$i+1 ?>
                                        <?php endforeach ?>
                                        </tr>

                                        

                                       
                                    <?php endforeach ?>
                                    
                                </tbody>
                            </table>

                        <?php } ?>
                        

                    <!-- if this acccount is an owner -->
                    <?php }else{ ?>
                        <!-- an den uparxoun dilsoeis eks apostasews gia auton ton ergazomeno -->
                        <?php if(empty($anastolis)){ ?>
                            <div id="profilapostasimsg">
                                <p>Δεν έχετε υποβάλλει κάποια δήλωση για αναστολή εργασίας.</p>
                            </div>

                        <!-- an yparxoun dhlwseis -->
                        <?php }else{ ?>

                            <table class="table table-striped apostasi-table">

                                <thead>
                                    <tr>
                                        <th scope="col">ΑΦΜ εργαζομένου</th>
                                        <th scope="col">Ημερομηνία έναρξης</th>
                                        <th scope="col">Ημερομηνία λήξης</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($anastolis as $dilosi): ?>
                                        <?php $i=0; ?>
                                        <tr>
                                        <?php foreach ($dilosi as $v2): ?>

                                            <!-- ignore dilosi id kai afm_ergodoti -->
                                            <?php if($i!=0 && $i!=2){ ?>
                                            <td><?php echo $v2; ?></td>

                                            <?php } ?>

                                            <?php $i=$i+1 ?>
                                        <?php endforeach ?>
                                        </tr>

                                        

                                       
                                    <?php endforeach ?>
                                    
                                </tbody>
                            </table>

                        <?php } ?>
                    <?php } ?>


                    <div class="infoTitle rantevoutitleprofile">
                        <h1 class="bodytitle">Ραντεβού</h1>
						<hr class="bodylinerantevou" size="5">

                    </div>


                    
                        
                    <!-- an den uparxoun dilsoeis eks apostasews gia auton ton ergazomeno -->
                    <?php if(empty($rantevou)){ ?>
                        <div id="profilapostasimsg">
                            <p>Δεν έχετε προγραμματίσει κάποιο ραντεβού.</p>
                        </div>

                    <!-- an yparxoun dhlwseis -->
                    <?php }else{ ?>

                        <table class="table table-striped rantevou-table">

                            <thead>
                                <tr>
                                    <th scope="col">Ημερομηνία</th>
                                    <th scope="col">Ώρα</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach ($rantevou as $dilosi): ?>
                                    <?php $i=0; ?>
                                    <tr>
                                    <?php foreach ($dilosi as $v2): ?>

                                        <!-- ignore dilosi id -->
                                        <?php if($i!=0 && $i!=1){ ?>
                                        <td><?php echo $v2; ?></td>

                                        <?php } ?>

                                        <?php $i=$i+1 ?>
                                    <?php endforeach ?>
                                    </tr>

                                    

                                    
                                <?php endforeach ?>
                                
                            </tbody>
                        </table>

                    <?php } ?>
                      
                        

                   



                <!-- if nobody is logged in	 -->
                <?php }else{ ?>


                    <div id="profilelogin">
                        <p>Για την προβολή του προφίλ σας, πρέπει πρώτα να συνδεθείτε</p>

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