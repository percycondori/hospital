<?php
    echo"<h1>El resultado</h1>"."<br>";
    $num1=$_POST["listA"];
    $num2=$_POST["listB"];
    $cant1="";
    $cant2="";
    $Resultado="";
    $Resultado1="";
    if($num1=="I"){
        $cant1=1;
    }
     else if($num1=="II"){
        $cant1=2;
    }
    else if($num1=="III"){
        $cant1=3;
    }
    else if($num1=="IV"){
        $cant1=4;
    }
    else if($num1=="V"){
        $cant1=5;
    }
    if($num2=="I"){
        $cant2=1;
    }
    else if($num2=="II"){
        $cant2=2;
    }
    else if($num2=="III"){
        $cant2=3;
    }
    else if($num2=="IV"){
        $cant2=4;
    }
    else if($num2=="V"){
        $cant2=5;
    }
    else{
        echo"<h2>Error en el calculo por favor intente con otros datos</h2>";
    }
    $Resultado=$cant1+$cant2;
    if($Resultado==2){
        $Resultado1="II";
    }
    else if($Resultado==3){
        $Resultado1="III";
    }
    else if($Resultado==4){
        $Resultado1="IV";
    }
    else if($Resultado==5){
        $Resultado1="V";
    }
    else if($Resultado==6){
        $Resultado1="VI";
    }
    else if($Resultado==7){
        $Resultado1="VII";
    }
    else if($Resultado==8){
        $Resultado1="VIII";
    }
    else if($Resultado==9){
        $Resultado1="IX";
    }
    else if($Resultado==10){
        $Resultado1="X";
    }
    else{
        echo"El Resultado es mas de X"."<br>";
    }
    
    echo "La Suma de ".$num1." + ".$num2." = ".$Resultado1;
?>