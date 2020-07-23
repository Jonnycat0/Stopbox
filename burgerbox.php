<?php
setcookie("time", date('2020-07-17 23:59:59'), time() + (86400), '/');
setcookie("random", $_GET['inputall'], time() + (86400), '/');
setcookie("input", $_GET['input'], time() + (86400), '/');
setcookie("customers", $_GET['inputeach'], time() + (86400), '/');

setcookie("user", $_GET['name'], time() + (86400), '/');

setcookie("love1", $_GET['com1'], time() + (86400), '/');

setcookie("love2", $_GET['com2'], time() + (86400), '/');

setcookie("Net", $_GET['checkin'], time() + (86400), '/');

setcookie("name", $_GET['name'], time() + (86400), '/');

setcookie("net11", $_GET['how1'], time() + (86400), '/');

setcookie("net12", $_GET['how2'], time() + (86400), '/');

setcookie("net13", $_GET['com3'], time() + (86400), '/');

setcookie("net14", $_GET['com4'], time() + (86400), '/');

setcookie("net15", $_GET['com5'], time() + (86400), '/');

setcookie("net16", $_GET['com6'], time() + (86400), '/');

setcookie("net17", $_GET['com7'], time() + (86400), '/');

setcookie("net18", $_GET['com8'], time() + (86400), '/');

setcookie("sold", sum($one, $two, $three), time() + (86400), '/');

echo $_COOKIE['time'];
function sum($one, $two, $three){

$res=

$_COOKIE['net11'] *
'5.000' +
$_COOKIE['net12'] *
'8.000' +
$_COOKIE['Net'];

return
$res;
}


echo sum($one, $two, $three);
echo $_COOKIE['customers'];
echo $_COOKIE['input'];
echo $_COOKIE['random'];?>
<html>
<head>
<link rel="stylesheet" href="burger.css">
<title>
🍟Burger Stop Bucaramanga🍔
</title>
</head>
<body>
<form action="todos.php" method="get" target="_blank">
<?php
$day='<table> <tr>
<th colspan="5"><br /></th><tr>
<th bgcolor="black">
<div style="color:whitesmoke;">
<hr />
Date
<hr />
</div>
</th>
<th bgcolor="black"> 
<div style="color:whitesmoke;">
<hr />
Customer
<hr />
</div>
</th>
<th bgcolor="black" colspan="">
<div style="color:whitesmoke;">
<hr />
Item
<hr />
</div>
</th>
<th bgcolor="black">
<div style="color:whitesmoke;">
<hr />
Total
<hr />
</div>
</th>
</tr>
<tr><td bgcolor="black">
<div style="color:yellowgreen">
'.$_COOKIE['time'].'
</div>
</td><td>'.
$_COOKIE['user'].'
</td><td>'
.$_COOKIE['love1']
.$_COOKIE['love2'].
'</td><td>'
.$_COOKIE['sold'].
'</td></tr>'; 
$night='<table><tr><td colspan="5"><br /></td></tr>
<tr><td bgcolor="red">
 <div style="color:yellowgreen;">
 '.$_COOKIE['time'].
 '</td></div><td>
 '.$_COOKIE['user'].'
 </td><td>
 '.$_COOKIE['love1']
 .$_COOKIE['love2'].
 '</td><td>
 '.$_COOKIE['net11'].
   $_COOKIE['net12'].
 '</td>
 <td> <br /></td>
 <td> <br /></td>
 <td> <br /></td>
 <td> <br /></td>';?>
<table><tr><th bgcolor="black" colspan="5"><br /></th>
<tr><td bgcolor="darkblue" colspan="5">
<input type="checkbox" name="inputeach" 
value="<?=$day;?>" /></td></tr>
<tr><td bgcolor="grey" colspan="5">
<input name="inputall" type="checkbox"
 value="<?=$night;?>"/></td></tr>
<tr><td bgcolor="green">
<input name="input" type="checkbox" value="You have created random purchase"/>

<input name="ok" value="enviar" type="submit"/>
</td></tr></form>

<form action="" method="get" target="_blank">

<th colspan="1" bgcolor="silver">
<h1 align="center">
<hr />
Menú
<hr /></h1>
</th><td colspan="1" bgcolor="silver">
<h1 align="center">
<hr />
Emparedado
<hr />
</h1>
</td><td colspan="1" bgcolor="silver">
<h1 align="center">
<hr />
Cantidad
<hr />
</h1>
</td>
<tr>
<td bgcolor="lime">
<ol>
<li>

Combos
.................$5.000
</li>
</td>
<td bgcolor="lime">
<ul>
<li>
<select name="com1">
<option value="cominf">Combo Infantil

</option>
</select>
</li>
</ul>
</td>
<td bgcolor="lime">
<ul>
<li>
<select name="how1">
<?php
           $ord = 0;
         while ($ord < 11)
            {
        ?>
          <option value="<?=$ord;?>"><?=$ord;?></option>
         <?php
           $ord++;
            }
?>
</select>

</li>
</ul>
</td>
</tr>
<tr>
<td bgcolor="red">
&nbsp&nbsp
2. Burguer
.................$8.000

</td>
<td bgcolor="red">
<ul>
<li>
<select name="com2">
<option value="combur">Combo Burger</option>
</select>
</li>
</ul>
</td>
<td bgcolor="red">
<ul>
<li>
<select name="how2">
<?php
           $ord1 = 0;
         while ($ord1 < 11)
            {
        ?>
          <option value="<?=$ord1;?>"><?=$ord1;?></option>
          <?php
           $ord1++;
            }
?>
</select>
</td>
</li>
</ul>
</tr>
<tr>
<td colspan="" bgcolor="deeppink">
<div align="right" style="color:white;">0

<input name="checkin" value="<?=sum($one, $two, $three);?>"
type="submit"/>


</td>
</div>
<td colspan="2" bgcolor="deeppink">

Status: <progress min="0" max="1000" value="<?=sum($one, $two, $three, $four);?>">
</progress>


</td>
</tr>

<tr>
<td bgcolor="darkblue" colspan="3">
<hr />
<div style="color:white;">
NOMBRE<input name="name" type="text" placeholder="Jonathan Cardozo" autofocus/>

<hr />
</td></tr></div>
</td></ol></form>
<tr><th colspan="3">

<audio  
src="📻.mp3" controls>
</audio></th></table><table><tr>
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
    </ol></table></body></html>