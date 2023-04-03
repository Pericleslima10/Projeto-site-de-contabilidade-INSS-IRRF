<?php

$salario = 0;
$dias = 0;
$calcular ='calculo';
$valor=0;
$desconto = 0;
$calvale = 0;




if(isset($_GET['salario'],$_GET['calcular'],$_GET['dias'],$_GET['valor'])){
$salario = $_GET['salario'];
$calcular = $_GET['calcular'];
$dias = $_GET['dias'];
$valor = $_GET['valor'];
$calvale = ($dias * 2) * $valor;
$desconto = $salario * 0.06;
  
    }

   
    



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
          <a class="nav-link text-light" href="inss.php"><h2>HOME</h2></a>
        </li>
      
      
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

<p>Dias trabalhados</p> 
<div class="input">
<input class="input" placeholder="Informe os dias" type="number" name="dias" required /><br />
</div>

<p>Valor passagem</p> 
<div class="input">
<input class="input" placeholder="Informe os valor" type="number" name="valor" required /><br />
</div>

<br>
<div class="" id="bnt">
<button href="#transporte" class="bnt" name="calcular" type="" value="calcular" >CALCULAR</button>

<br>
<a href="#transporte">Ver resultdo</a>
</div>

</form>



</center>
</div>


<table id="transporte" >

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
<td class="td">Vale </td>
<td class="td"><?php echo "%" ?></td>
<td class="td"><?php echo "R$".$calvale ?></td>
<td class="td"><?php echo "R$".$desconto?></td>
</tr>




<tr class="tr">

<td class="td">Totais</td>
<td class="td"><?php echo "%" ?></td>
<td colspan="2" class="td"><?php echo "R$" ?></td>
<td colspan="2" class="td"><?php  ?></td>
</tr>
















</table>
















</center>





    
     




</body>
</html>
