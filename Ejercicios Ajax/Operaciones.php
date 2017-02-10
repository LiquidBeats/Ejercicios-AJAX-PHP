<?php

//////////////////////////////////////////Ejercicio1///////////////////////////
/*$totala=((-$_POST['B']+(sqrt(($_POST['B']*$_POST['B'])-((4*($_POST['A']*$_POST['C']))))))/(2*$_POST['A']));
$totalb=((-$_POST['B']-(sqrt(($_POST['B']*$_POST['B'])-((4*($_POST['A']*$_POST['C']))))))/(2*$_POST['A']));


    if ($totala>0||$totalb>0){

        echo "Raiz positiva: ".$totala;

        echo "Raiz negativa: ".$totalb."     ";

    }
     if ($totalb<0||$totala<0){

        echo "Raiz positiva: ".$totala;

        echo "Raiz negativa: ".$totalb;

    }
     else{

        echo"Raiz indeterminada";

    }*/


//////////////////////////////////Ejercicio4/////////////////////////////

/*$num=$_POST['num'];

    $numstring=(string)$num;

    $result="";

    for($i=strlen($num);$i>=0;$i--)
    {
        @$result.=$numstring[$i];
    }

    echo (int)$result;*/
/////////////////////////////////Ejercicio5/////////////////////////////////
/*$altura1=$_POST['alt1'];
$altura2=$_POST['alt2'];
$altura3=$_POST['alt3'];
$altura4=$_POST['alt4'];
$altura5=$_POST['alt5'];
$edad1=$_POST['ed1'];
$edad2=$_POST['ed2'];
$edad3=$_POST['ed3'];
$edad4=$_POST['ed4'];
$edad5=$_POST['ed5'];

$adulto=0;
$giant=0;
$promedad=($edad1+$edad2+$edad3+$edad4+$edad5)/5;
$promaltura=($altura1+$altura2+$altura3+$altura4+$altura5)/5;

if($altura1>=1.75){
    $giant++;
}
if($altura2>=1.75){
    $giant++;
}
if($altura3>=1.75){
    $giant++;
}
if($altura4>=1.75){
    $giant++;
}
if($altura5>=1.75){
    $giant++;
}
if($edad1>=18){
    $adulto++;
}
if($edad2>=18){
    $adulto++;
}
if($edad3>=18){
    $adulto++;
}
if($edad4>=18){
    $adulto++;
}
if($edad5>=18){
    $adulto++;
}

echo "El promedio de edad es ".$promedad."    ";
echo "El promedio de altura es ".$promaltura."    ";
echo "Los gigantes son ".$giant."    ";
echo "los mayores de edad son ".$adulto."    ";*/
///////////////////////////////////Ejercicio6/////////////////////////////
/*$numcapicua =$_POST['numcapicua'];
$numinv = 0;
$cociente = $numcapicua;
while ( $cociente != 0)
{
    $resto = $cociente % 10;
    $numinv = $numinv * 10 + $resto;
    $cociente = (int)($cociente / 10);
}
if ( $numcapicua == $numinv ) {
    echo 'El numero ' .$numcapicua. ' es capicua'.'<br>';
}
else {
    echo 'El numero ' .$numcapicua. ' no es capicua'.'<br>';
}*/
/////////////////////////////Ejercicio7//////////////////////////////////
/*$kilometros=$_POST['km'];

$litros=$kilometros/16.4;


echo "Los litros de gasolina que gastara son ".round($litros);*/
///////////////////////////Ejercicio8//////////////////////////////
/*$mm=0;
$cm=0;
$m=0;
$km=0;
$yr=0;
$pies=0;
$pulgada=0;

$mm=$_POST['millas']*1609344;
echo "Milimetros = ".$mm.""."    ";


$cm=$_POST['millas']*160934.4;
echo "Centimetros = ".$cm.""."   ";

$m=$_POST['millas']*1609.344;
echo "Metros = ".$m.""."   ";

$km=$_POST['millas']*1.609344;
echo "Kilometros = ".$km.""."   ";

$yr=$_POST['millas']*1760;
echo "Yardas = ".$yr.""."   ";

$pies=$_POST['millas']*5280;
echo "Pies = ".$pies.""."   ";

$pulgada=$_POST['millas']*63360;
echo "Pulgadas = ".$pulgada.""."   ";*/
///////////////////////////Ejercicio10//////////////////////////////
/*$mes=$_POST['mes'];
$dia=$_POST['dia'];
$ano=$_POST['ano'];
$fecha=checkdate($mes,$dia,$ano);

if($fecha==true){
    echo "La fecha es correcta";
}
else{
    echo "La fecha es falsa";
}*/
//////////////////////////Ejercicio11///////////////////////////////
/*$cultura=$_POST['cf'];
$etica=$_POST['etica'];
$emprendimiento=$_POST['emprendimiento'];
$tecnica=$_POST['tecnica'];
$ingles=$_POST['ingles'];

$aprobadas=0;
$reprobadas=0;

if ($etica >= 6) {
    $aprobadas++;
}
else if ($etica < 6) {
    $reprobadas++;
}
if ($cultura >= 6) {
    $aprobadas++;
}
else if ($cultura < 6) {
    $reprobadas++;
}
if ($emprendimiento >= 6) {
    $aprobadas++;
}
else if ($emprendimiento < 6) {
    $reprobadas++;
}
if ($ingles >= 6) {
    $aprobadas++;
}
else if ($ingles < 6) {
    $reprobadas++;
}
if ($tecnica >= 6) {
    $aprobadas++;
}
else if ($tecnica < 6) {
    $reprobadas++;
}

echo "Ud cursa estas materias"."  " ."Cultura fisica, Etica, Emprendimiento, Ingles"."   ";
echo "Ud aprobo las siguientes materias ".$aprobadas."   ";
echo "Ud reprobo las siguientes materias ".$reprobadas;*/
//////////////////////////Ejercicio12///////////////////////////////
/*$aleatorio = rand(1,10);
if ($_POST['num'] == $aleatorio){
    echo "Aprobaste ;v";
} else {
    echo "Felicidades, reprobaste";
}*/
//////////////////////////Ejercicio13///////////////////////////////
/*$litros1=$_POST['litros1'];
$litros2=$_POST['litros2'];
$litros3=$_POST['litros3'];
$litros4=$_POST['litros4'];
$litros5=$_POST['litros5'];

$precio1=$_POST['precio1'];
$precio2=$_POST['precio2'];
$precio3=$_POST['precio3'];
$precio4=$_POST['precio4'];
$precio5=$_POST['precio5'];

$totalf1=$litros1*$precio1;
$totalf2=$litros2*$precio2;
$totalf3=$litros3*$precio3;
$totalf4=$litros4*$precio4;
$totalf5=$litros5*$precio5;

$totalfg=$totalf1+$totalf2+$totalf3+$totalf4+$totalf5;

echo "El total de la factura 1 es ".$totalf1."   ";
echo "El total de la factura 2 es ".$totalf2."   ";
echo "El total de la factura 3 es ".$totalf3."   ";
echo "El total de la factura 4 es ".$totalf4."   ";
echo "El total de la factura 5 es ".$totalf5."   ";

echo "La facturacion total es ".$totalfg;*/
//////////////////////////Ejercicio14///////////////////////////////
//////////////////////////Ejercicio15///////////////////////////////
/*$n1 = 1;
$n2 = $_POST['num'];
for ($i = $n1; $i <= $n2; $i++)
{
    $nDiv = 0;
    for ($n = 1; $n <= $i; $n++)
    {
        if($i%$n == 0)
        {
            $nDiv = $nDiv + 1;
        }
    }
    if($nDiv == 2 or $i == 1)
    {
        echo "   ";
        echo $i;
    }
}
echo "Numeros primos desde ";echo $n1; echo " hasta "; echo $n2." son:";*/