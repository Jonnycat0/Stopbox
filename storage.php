<?php

setcookie("rate", $_GET['in'], time() + (86400), '/');

?>
<! DOCTYPE html >
<html>
<head>
<title>
📉calculadora de Tasa📈
</title>
<link rel="stylesheet" href="burger.css">
</head>
<body>
<p>
<h1>INTEREST RATE CALCULATION</h1>
<table><tr>
<hr width="100%" />
<svg>
   <rect height="60" width="60" fill="blue">
   <animate attributeName="x" from="0" to="280" 
   dur="1s" fill="freeze" repeatCount="60"/>
   </rect>
   <rect height="60" width="60" fill="green">
   <animate attributeName="x" from="0" to="280" 
   dur="1.1s" fill="freeze" repeatCount="60"/>
   </rect>
   <rect height="60" width="60" fill="yellow">
   <animate attributeName="x" from="0" to="280" 
   dur="1.2s" fill="freeze" repeatCount="60"/>
   </rect>
   <rect height="60" width="60" fill="red">
   <animate attributeName="x" from="0" to="280" 
   dur="1.3s" fill="freeze" repeatCount="60"/>
   </rect></svg>
   <svg>
   <rect height="60" width="60" fill="blue">
   <animate attributeName="x" from="0" to="280" 
   dur="1s" fill="freeze" repeatCount="60"/>
   </rect>
   <rect height="60" width="60" fill="green">
   <animate attributeName="x" from="0" to="280" 
   dur="1.1s" fill="freeze" repeatCount="60"/>
   </rect>
   <rect height="60" width="60" fill="yellow">
   <animate attributeName="x" from="0" to="280" 
   dur="1.2s" fill="freeze" repeatCount="60"/>
   </rect>
   <rect height="60" width="60" fill="red">
   <animate attributeName="x" from="0" to="280" 
   dur="1.3s" fill="freeze" repeatCount="60"/>
   </rect></svg>
    <svg>
    <rect height="60" width="60" fill="blue">
    <animate attributeName="x" from="0" to="280" 
    dur="1s" fill="freeze" repeatCount="60"/>
    </rect>
    <rect height="60" width="60" fill="green">
    <animate attributeName="x" from="0" to="280" 
    dur="1.1s" fill="freeze" repeatCount="60"/>
    </rect>
    <rect height="60" width="60" fill="yellow">
    <animate attributeName="x" from="0" to="280" 
    dur="1.2s" fill="freeze" repeatCount="60"/>
    </rect>
    <rect height="60" width="60" fill="red">
    <animate attributeName="x" from="0" to="280" 
    dur="1.3s" fill="freeze" repeatCount="60"/>
    </rect></svg>
   
    </td>
    </tr>
<?php

$storage=$_GET['num'];
$love=$_GET['rate'];
$p= percent($love,$storage);
function percent($love, $storage){
$percentaged= $love*100;
$percentage= round($percentaged / $storage, 2);
return $percentage;
}
$amount=$_GET['NUM'];
$rate=$_COOKIE['rate'];
$P= percentage($amount, $rate);
function percentage($amount, $rate){
$percent_aged= $amount*$rate;
$percent= round($percent_aged / 100, 2);
return $percent;
}



echo
'<form method="get" target="_blank">
<table border="3">
<tr>
<th colspan="2"><br />
</th>
</tr>
<tr>
<th>
Inserta el número a convertir a %: 
</th>
<th>
<input value="100" name="rate" type="text" placeholder="10" autofocus>
</th>
</tr>
<tr>
<th>
<br />Inserta el número cuyo % vamos a calcular:
</th>
<th>
<input name="num" type="text" value="1000">
</th>
</tr>
<tr>
<th>
<br />Inserta el % a convertir a número:
</th>
<th>
<input value="100" name="RATE" type="text" placeholder="10%" autofocus>
</th>
</tr>
<tr>
<th>
<br />Inserta el número cuyo % vamos a calcular:
</th>
<th>
<input name="NUM" type="text" value="1000">
</th>
<tr>
<th>
<input name="ok" type="submit">
</th>
<th>
<input type="submit" name="in" value="'.percent($love,$storage).
'">
</th>
</tr>
  <tr>
    <td colspan="2">
    <progress min="0" max="300" value="'.$_COOKIE['rate'].'">
    </progress>
    <progress min="300" max="700" value="'.$_COOKIE['rate'].'">
    </progress>
    <progress min="1000" max="100000" value="'.$_COOKIE['rate'].'">
    </progress>
    
    </td></tr>
   
</table>
</form>
</p>';


switch($love){
case $love:
echo "Tasa de interés: <b>".$p.'%</b>';
case $amount:
echo '<br />El <b>'.$_COOKIE['rate']. '%</b> de <b>$' .$amount. "</b> es: <b>$" .$P. "</b>";

} 