<?php
    if(isset($_POST['host']) && isset($_POST['dbname']) && isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['driver'])){
        session_start();
        $host=$_POST['host']; 
        $db=$_POST['dbname']; 
        $user=$_POST['user']; 
        $pass=$_POST['pass'];
        $driver=$_POST['driver'];

        require_once("../../../models/Database.php");
        $stmt= ($driver=="msqli")?Database::mysqli($host,$db,$user,$pass):Database::PDO($host,$db,$user,$pass);
        
        if(Database::isConnected()){
            $_SESSION["stmt"]=$stmt;
            header("location: ./updater.php");
        }else{
            if($driver=="msqli"){
                $message=$stmt;
            }else{
                $message=$stmt->getMessage();
            }
        }


    }else{
        require_once("../models/Browser.php");
        $browser=new Browser();
        if(in_array($lg=$browser->getLanguage(),$browser->getAcceptLanguages())){
            if($lg=="fr"){
                $message="Veillez remplir tous les champs";
            }else{
                $message="Fill all the fields";
            }
        }
    }
?>