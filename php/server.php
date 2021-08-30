<?php
    session_start();

    

    $name="";
    $email="";
    $surname="";
    $errors = array();
    $success = array();

    //conect to database
    $db = mysqli_connect("localhost", "root", "", "sdi1700068");
    // $db = mysqli_connect("localhost", "root", "", "ypakp", "3306");


    //If you press register
    if( isset($_POST['register']) ){
        $name = mysqli_real_escape_string($db, $_POST['registername']);
        $surname = mysqli_real_escape_string($db, $_POST['registersurname']);
        $afm = mysqli_real_escape_string($db, $_POST['registerafm']);
        $email = mysqli_real_escape_string($db, $_POST['registeremail']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $owns = mysqli_real_escape_string($db, $_POST['registerowns']);
        $works = mysqli_real_escape_string($db, $_POST['registerworks']);

        //Error checking
        if(empty($name)){
            array_push($errors, "Παρακαλώ εισάγετε όνομα");
        }
        if(empty($surname)){
            array_push($errors, "Παρακαλώ εισάγετε επίθετο");
        }
        if(empty($email)){
            array_push($errors, "Παρακαλώ εισάγετε διεύθυνση ηλεκτρονικού ταχυδρομείου");
        }
        if(empty($password_1)){
            array_push($errors, "Παρακαλώ εισάγετε τον κωδικό που θέλετε να χρησιμοποιήσετε");
        }
        if(empty($password_2)){
            array_push($errors, "Παρακαλώ επαληθεύστε τον κωδικό σας");
        }
        if($password_1 != $password_2){
            array_push($errors, "Οι δυο κωδικοί που εισάγατε δεν είναι ίδιοι");
        }
        if(empty($afm)){
            array_push($errors, "Παρακαλώ εισάγετε ΑΦΜ");
        }
        if(empty($owns) && empty($works)){
            array_push($errors, "Παρακαλώ επιλέξτε αν είστε εργαζόμενος ή εργοδότης και εισάγετε το όνομα της εταιρίας");

        }

        if(count($errors) == 0){
            
            $query = "SELECT * FROM login WHERE afm='$afm'";
            $result = mysqli_query($db, $query);

            $query2 = "SELECT * FROM login WHERE email='$email'";
            $result2 = mysqli_query($db, $query2);

            if (mysqli_num_rows($result) != 0){//if there already exists a person with such AFM
                array_push($errors, "Υπάρχει ήδη λογαριασμός με αυτό το ΑΦΜ");
                

            }else if (mysqli_num_rows($result2) != 0){//if there already exists a person with such email
                array_push($errors, "Υπάρχει ήδη λογαριασμός με αυτή την διεύθυνση ηλεκτρονικού ταχυδρομείου");
                

            }else{
                $sql = "INSERT INTO login (name, surname, password, email, afm, works, owns) VALUES ('$name', '$surname', '$password_1', '$email', '$afm', '$works', '$owns')"; 
                mysqli_query($db, $sql);

                //if ths is a new ergazomenos
                if(empty($owns)){
                    $sql = "INSERT INTO ergazomenoi (afm, etairia) VALUES ('$afm', '$works')"; 
                    mysqli_query($db, $sql);

                }else if(empty($works)){
                    $sql = "INSERT INTO ergodotes (afm, etairia) VALUES ('$afm', '$owns')"; 
                    mysqli_query($db, $sql);

                }
                
                $_SESSION['name'] = $name;
                $_SESSION['afm'] = $afm;
                $_SESSION['success'] = "You are now logged in";
                //redirect to the page you came from
                header("Location: ". $_SESSION['current_page']);
            }


            
        }
    }

    //log in from login page
    if ( isset($_POST['login']) ){
        
        $email = mysqli_real_escape_string($db, $_POST['loginemail']);
        $password = mysqli_real_escape_string($db, $_POST['loginpassword']);
        
        if(empty($email)){
            array_push($errors, "Παρακαλώ εισάγετε διεύθυνση ηλεκτρονικού ταχυδρομείου");
        }
        if(empty($password)){
            array_push($errors, "Παρακαλώ εισάγετε τον κωδικό σας");
        }
        
        if( count($errors) == 0){
            $query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 1){
                //log user in
                
                $_SESSION['name'] = $name;

                $row = mysqli_fetch_array($result);
                //keep name
                $_SESSION['name'] = $row[0];
                //keep surname
                $_SESSION['surname'] = $row[1];
                //keep email
                $_SESSION['email'] = $row[3];
                //keep afm
                $_SESSION['afm'] = $row[4];
                //keep to onoma ths etairias(will be "" an einai ergazomenos)
                $_SESSION['owns'] = $row[6];
                //keep to onoma ths etairias(will be "" an einai ergodotis)
                $_SESSION['works'] = $row[5];

                $_SESSION['success'] = "You are now logged in";
                //redirect to the page you came from
                header("Location: ". $_SESSION['current_page']);
                 

            }else{
                array_push($errors, "Δεν είναι έγκυρος ο συνδυασμός email/κωδικού");
            }
        }






    }



    if (isset($_POST['rantevou']) ){
    
        $afm = $_SESSION['afm'];
        $date = mysqli_real_escape_string($db, $_POST['rantevoudate']);
        $hour = mysqli_real_escape_string($db, $_POST['rantevoutime']);

        if(empty($_POST['rantevoutime'])){
            array_push($errors, "Παρακαλώ επιλέξτε μία ώρα");

        }else if(empty($_POST['rantevoudate'])){
            array_push($errors, "Παρακαλώ επιλέξτε μία ημερομηνία");

        }
        if( count($errors) == 0){
            $sql = "INSERT INTO rantevou (afm, date, hour) VALUES ('$afm', '$date', '$hour')"; 
            mysqli_query($db, $sql);
            array_push($success, "Το ραντεβού σας προγραμματίστηκε επιτυχώς!");

          
        }


    
    }

    if (isset($_POST['adeia']) ){
        
        $afm = $_SESSION['afm'];
        $childgrade = mysqli_real_escape_string($db, $_POST['childgrade']);

        $datestart = mysqli_real_escape_string($db, $_POST['ergazomenos-date-start']);
        $dateend = mysqli_real_escape_string($db, $_POST['ergazomenos-date-end']);

        if(empty($_POST['ergazomenos-date-start'])){
            array_push($errors, "Παρακαλώ επιλέξτε ημερομηνία έναρξης");

        }else if(empty($_POST['ergazomenos-date-end'])){
            array_push($errors, "Παρακαλώ επιλέξτε ημερομηνία λήξης");

        }else if(empty($_POST['childgrade'])){
            array_push($errors, "Παρακαλώ επιλέξτε την τάξη φοίτησης του παιδιού σας");
        }


        if( count($errors) == 0){
            $sql = "INSERT INTO diloseis_adeias (afm, date_start, date_end, childgrade) VALUES ('$afm', '$datestart', '$dateend', '$childgrade')"; 
            mysqli_query($db, $sql);
            array_push($success, "Η δήλωσή σας υποβλήθηκε με επιτυχία!");

          
        }


    
    }

    if (isset($_POST['apostasi']) ){
        
        $afmergodoti = $_SESSION['afm'];
        $afmergazomenou = mysqli_real_escape_string($db, $_POST['ergodotisafm']);

        $datestart = mysqli_real_escape_string($db, $_POST['ergodotis-date-start']);
        $dateend = mysqli_real_escape_string($db, $_POST['ergodotis-date-end']);

        if(empty($_POST['ergodotis-date-start'])){
            array_push($errors, "Παρακαλώ επιλέξτε ημερομηνία έναρξης");

        }else if(empty($_POST['ergodotis-date-end'])){
            array_push($errors, "Παρακαλώ επιλέξτε ημερομηνία λήξης");

        }else if(empty($_POST['ergodotisafm'])){
            array_push($errors, "Παρακαλώ πληκτρολογίστε το ΑΦΜ του εργαζόμενου");
        }else{
            $etairiaergodoti = $_SESSION['owns'];

       

            $sql = "SELECT * FROM ergazomenoi WHERE afm='$afmergazomenou' AND etairia='$etairiaergodoti'"; 
            $result = mysqli_query($db, $sql);
            
            if (mysqli_num_rows($result) == 0){
                array_push($errors, "Δεν βρέθηκε εργαζόμενος με αυτό το ΑΦΜ στην εταιρία σας");
            }
        }

        
        
        
                
        if( count($errors) == 0){
            $sql = "INSERT INTO diloseis_eksapostasews (afm_ergazomenou, afm_ergodotis, date_start, date_end) VALUES ('$afmergazomenou', '$afmergodoti', '$datestart', '$dateend')"; 
            mysqli_query($db, $sql);
            array_push($success, "Η δήλωσή σας υποβλήθηκε με επιτυχία!");
            
        }


    
    }

    if (isset($_POST['anastoli']) ){
        
        $afmergodoti = $_SESSION['afm'];
        $afmergazomenou = mysqli_real_escape_string($db, $_POST['ergodotisafm']);

        $datestart = mysqli_real_escape_string($db, $_POST['ergodotis-date-start']);
        $dateend = mysqli_real_escape_string($db, $_POST['ergodotis-date-end']);

        if(empty($_POST['ergodotis-date-start'])){
            array_push($errors, "Παρακαλώ επιλέξτε ημερομηνία έναρξης");

        }else if(empty($_POST['ergodotis-date-end'])){
            array_push($errors, "Παρακαλώ επιλέξτε ημερομηνία λήξης");

        }else if(empty($_POST['ergodotisafm'])){
            array_push($errors, "Παρακαλώ πληκτρολογίστε το ΑΦΜ του εργαζόμενου");
        }else{
            $etairiaergodoti = $_SESSION['owns'];

       

            $sql = "SELECT * FROM ergazomenoi WHERE afm='$afmergazomenou' AND etairia='$etairiaergodoti'"; 
            $result = mysqli_query($db, $sql);
            
            if (mysqli_num_rows($result) == 0){
                array_push($errors, "Δεν βρέθηκε εργαζόμενος με αυτό το ΑΦΜ στην εταιρία σας");
            }
        }

        
        
        
                
        if( count($errors) == 0){
            $sql = "INSERT INTO diloseis_anastolis (afm_ergazomenou, afm_ergodotis, date_start, date_end) VALUES ('$afmergazomenou', '$afmergodoti', '$datestart', '$dateend')"; 
            mysqli_query($db, $sql);
            array_push($success, "Η δήλωσή σας υποβλήθηκε με επιτυχία!");
    
        }


    
    }





?>