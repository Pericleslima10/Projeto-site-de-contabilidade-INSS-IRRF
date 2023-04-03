<?php

session_start();
$salario =$_SESSION['salario'];
$dep =$_SESSION['dep'] ;
$inss = $_SESSION['inss'];
$depedentes = 0;
$dedu = 0;
$saliquido = 0;
$ir = 0;



if($salario >=1302){

    $depedentes = 189.50 * $dep;
    $dedu = $salario - ($depedentes+$inss);
    
}


if($dedu <=1903.98){

    $ir = "ISENTO";
    
}

if($dedu >=1903.99 and $dedu <= 2826.65){

    $aliquota = ($dedu) * 0.075 ;
    
    $ir = $aliquota - 142.80;

    $saliquido = $salario - ( $ir + $inss);

    
}

if($dedu >=2826.66 and  $dedu <=3751.05){

    $aliquota = ($dedu) * 0.15 ;
    
    $ir = $aliquota - 354.80;

    $saliquido = $salario - ( $ir + $inss);

    
}

if( $dedu >= 3751.06 and $dedu <= 4664.68){

    $aliquota = ($dedu) * 0.225 ;
    
    $ir = $aliquota - 636.13;

    $saliquido = $salario - ( $ir + $inss);

    
}

if(  $dedu > 4664.68){

    $aliquota = ($dedu) * 0.275 ;
    
    $ir = $aliquota - 869.36;

    $saliquido = $salario - ( $ir + $inss);

    
}



echo $dedu;

echo "------------".$saliquido;

echo "------------".$dep;

echo "------------".$ir;

echo "------------".$inss;

















?>

<html>

<body>
<h1>
echo $dedu;

echo "------------".$saliquido;

echo "------------".$dep;

echo "------------".$ir;

echo "------------".$inss;
</h1>

</body>
</html>