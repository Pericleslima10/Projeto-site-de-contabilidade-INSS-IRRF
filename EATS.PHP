<?php

$salario = 0;
$inss = 0;
$calcular ='calculo';
$p1=0;
$p2=0;
$p3=0;
$p4=0;
$m ="Voce nao paga imposto";
$dep = 0;
$depedentes = 0;
$dedu = 0;
$saliquido = 0;
$ir = 0;
$porinss = 0;
$porir = 0;
$total = 0;
$totalaliquota = 0;




if(isset($_GET['salario'],$_GET['calcular'],$_GET['dep'])){
$salario = $_GET['salario'];
$calcular = $_GET['calcular'];
$dep = $_GET['dep'];



if($salario <= 1301){
   
    $inss= "ISENTO";


}

if( $salario == 1302) {
    $p1 = 97.65;

    $inss = $p1;

    $inss = number_format($inss,2);
}



if($salario  >= 1302.01 and $salario <= 2571.29) {
    $p2 = ($salario - 1302.01) * 0.09;
     $inss = 97.65 + $p2;
     $inss = number_format($inss,2);


}

    
    if($salario  >= 2571.30 and $salario  <= 3856.94) {
    $p3 = ($salario - 2571.30) * 0.12;
    $inss =  97.65 + 114.23 + $p3;
    $inss = number_format($inss,2);


    }
    
    
   if($salario  >=  3856.95 and $salario  <= 7507.49)  {
   $p4 = ($salario -  3856.95) * 0.14;

       $inss =  97.65 + 114.23 + 154.27 + $p4;
       $inss = number_format($inss,2);


}
if ($salario  >= 7507.50){

        $inss = 877.24 ;

}

     
    }

   
    
session_start();
$_SESSION['salario'] = $salario;
$_SESSION['dep'] = $dep;
$_SESSION['inss'] = $inss;


    ?>









<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/s.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Calculadora</title><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a5ae3d1412.js" crossorigin="anonymous"></script>
</head>
<body >

<header>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        
    
    <img src="./img/img.jpg" alt="" srcset="" width ="50px" height="50px"></a>
    
    
    
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="FGTS.PHP"><h2>FGTS</h2></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="EATS.PHP"><h2>EATS</h2></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="TRASPORTE.PHP"><h2>TRANSPORTE</h2></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</header>


    <center>

   
        <br>
        <br>
        <center>
            <br><br>
        <div id="form">

<form >

<p>Salario Bruto</p> 
<div class="input">
<input class="input" placeholder="Informe salario" type="number" name="salario" required /><br />
</div>
<p>Dependentes</p> 

<div class="input">
<input class="input" placeholder="Informe os dependentes" type="number" name="dep" required /><br />
</div>

<br>
<div class="" id="bnt">
<button href="#result" class="bnt" name="calcular" type="" value="calcular" >CALCULAR</button>

<br>
<a href="#result">Ver resultdo</a>
</div>

</form>



</center>
</div>


<table id="result" >

<th>Eventos</th>
<th>Alíquota Real </th>
<th>Proventos</th>
<th>Descontos</th>

<tr class="tr">
<td class="td">Salario Bruto</td>
<td class="td">-</td>
<td class="td"><?php echo "R$".$salario ?></td>    
<td class="td">-</td>

</tr>


<tr class="tr">
<td class="td">Outros</td>
<td class="td">-</td>
<td class="td">-</td>
<td class="td">R$ 0,00</td>
</tr>

<tr class="tr">
<td class="td">INSS</td>
<td class="td"><?php echo "%".$porinss ?></td>
<td class="td">-</td>
<td class="td"><?php echo "R$".$inss ?></td>
</tr>


<tr class="tr">

<td class="td">IRRF</td>
<td class="td"><?php echo "%".$porir ?></td>
<td v>-</td>
<td class="td"><?php echo "R$".$ir ?></td>
</tr>

<tr class="tr">

<td class="td">Totais</td>
<td class="td"><?php echo "%".$totalaliquota ?></td>
<td class="td"><?php echo "R$".$salario ?></td>
<td class="td"><?php echo "R$".$total ?></td>
</tr>

<tr>
<td class="td">Salario Liquido</td>
<td class="td">-</td>
<td colspan="2" class="td"><?php 
if($dedu >= 1903){
    echo "R$".$saliquido;
}

else{
    $saliquido = $salario;
    echo "R$".$saliquido;

}

?></td>
</tr>













</table>
















</center>





    
     




</body>
</html>
