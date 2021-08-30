<?php
    // session_start();

    $apostasi = array();
    $anastolis = array();
    $rantevou = array();

    //conect to database
    // $db = mysqli_connect("localhost", "root", "", "ypakp", "3306");
    $db = mysqli_connect("localhost", "root", "", "sdi1700068");


    // if this account is a worker
    if(empty($_SESSION['owns'])){
        $afm = $_SESSION['afm'];

        //eks apostasews diloseis
        $sql = "SELECT * FROM diloseis_eksapostasews WHERE afm_ergazomenou='$afm'" ;
        $result = mysqli_query($db, $sql);
        
        foreach ($result as $row){
            array_push($apostasi, $row);
        }

        //anastolis
        $sql = "SELECT * FROM diloseis_anastolis WHERE afm_ergazomenou='$afm'" ;
        $result = mysqli_query($db, $sql);
        
        foreach ($result as $row){
            array_push($anastolis, $row);
        }

        //rantevou
        $sql = "SELECT * FROM rantevou WHERE afm='$afm'" ;
        $result = mysqli_query($db, $sql);
        
        foreach ($result as $row){
            array_push($rantevou, $row);
        }




    }else{//if this account is an owner
        $afm = $_SESSION['afm'];

        //eks apostasews
        $sql = "SELECT * FROM diloseis_eksapostasews WHERE afm_ergodotis='$afm'" ;
        $result = mysqli_query($db, $sql);
        
        foreach ($result as $row){
            array_push($apostasi, $row);
        }

        //diloseis anstolis
        $sql = "SELECT * FROM diloseis_anastolis WHERE afm_ergodotis='$afm'" ;
        $result = mysqli_query($db, $sql);
        
        foreach ($result as $row){
            array_push($anastolis, $row);
        }

        //rantevou
        $sql = "SELECT * FROM rantevou WHERE afm='$afm'" ;
        $result = mysqli_query($db, $sql);
        
        foreach ($result as $row){
            array_push($rantevou, $row);
        }

    }
    

?>