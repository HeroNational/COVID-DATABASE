<?php
    require_once("../models/Browser.php");
    $browser=new Browser();
    if(in_array($lg=$browser->getLanguage(),$browser->getAcceptLanguages())){
        header("location: ./pages/{$lg}/");
    }
?>