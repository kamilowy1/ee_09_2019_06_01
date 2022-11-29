<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title> Wędkujemy </title>
<link rel="stylesheet" href="stylwedkuj_1.css" type="text/css"/>
</head>

<body> 

<div id="blokbanera"> 
<h1> Portal dla wędkarzy </h1>


</div>

<div id="lewy">
<h2> Ryby drapieżne naszych wód </h2>

<?php
//utworzenie zmiennych 
$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "wedkowanie2";

// utworzenie polaczenia 

$conn = mysqli_connect($server,$user,$passwd,$dbname);

//sprawdzenie polaczenia 

if (!$conn) {
    die ("brak polaczenia".mysqli_error($conn));
} echo "polaczono";

// sql 

$conn = mysqli_connect($server,$user,$passwd,$dbname);
$sql = "SELECT `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia`=1";
$pytanie = mysqli_query($conn,$sql);

if (mysqli_num_rows($pytanie)>0) {
 echo '<ul>';
 while ($wynik = mysqli_fetch_array($pytanie)) {
    echo '<li>'. '<b>' .$wynik['nazwa'] .',wystepowanie: ' .$wynik ['wystepowanie']. '</b>'.'</li>';
 }

}
echo '</ul>';

mysqli_close($conn);
?>


</div>

<div id="prawy">

<img src="ryba1.jpg" class="zdj"/>
<br>
<br>
<br>
<br>
<br>
<a href="kwerendy.txt">Pobierz kwerendy</a>
</div> 

<div id="stopka">
<p>Stronę wykonał: 000000000</p>
</div> 



</body> 
</html>