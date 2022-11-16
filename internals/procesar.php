<?php
    //extract($_POST);
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['tcalculo'];
    $hs=$_POST['HS'];
    $hsh=$_POST['alturaH'];
    $ot=$_POST['distanciaO'];
    $cp=$_POST['circunferencia'];
    $t=$_POST['tcalculo'];

    if($t == 'macho'){
        $calculo=-1.4*$hs + 0.7*$cp + 4;
    }else {
        $calculo=-1.7*$hs + 0.93*$cp + 5;
    }

    echo "<strong>".$nombres."</strong>"." tiene una masa corporal de ".$calculo;
    
?>