<?php 

    $moedaA = $_GET['moeda1'];
    $moedaB = $_GET['moeda2'];
    
    define('HG_API_KEY',$moedaA.'-'.$moedaB);
?>