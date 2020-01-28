<?php
//$nombre="Dahiana";
//$edad=29;
//$altura=1.62;

//echo "Mi nombre es ".$nombre . " tengo ".$edad." años". " y mi altura es ".$altura;
//echo $edad;

//$num1=5.1;
//$num2=10;
//$num3="5.1";

//echo $suma1= $num1+$num3;

//$num1=5.1;
//$num2=10;
//$num3=5.1;

//echo $resta= $num1-$num2;
//echo "<br>";
//echo $resta1= $num2-$num3;

/*$num1=5;
$num2=10;
$num3=5.1;
$num4="5.1";

echo $divi= $num1/$num2;
echo "<br>";
echo $divi2= $num2/$num3;
echo "<br>";
echo $divi3= $num3/$num4;

$num1=5;
$num2=10;
$num3=5.1;
$num4="5.1";

echo $mult= $num1*$num2;
echo "<br>";
echo $mult1= $num2*$num3;
echo "<br>";
echo $mult2= $num3*$num4;


$num1=5;
$num2=2;
$num3=10;


echo $valor= $num1*$num2+$num3;
echo "<br>";
echo $valor1= ($num1*$num2)+$num3;
echo "<br>";
echo $valor2= $num1*($num2+$num3);


$num1=5;
$num2=2;
$num3=10;

echo $incr=$num1+1;
echo "<br>";
echo $decr=$num1-1;


$num1=5;
$num2=2;
$num3=10;

if ($num1==5){echo "si es";}
elseif ($num2===10) {echo "no es";}
else {"no se cumple";}


if ($usuario== true){}
if ($usuario)

$num1=1;
$num2=2;
$num3=3;
$num4=4;
$num5=5;
$num6=6;
$num7=7;
$num8=8;
$num9=9;
$num10=10;
$suma=0;

$sum= $num1+$num2;
$resta= $num1-$num2;
$mult= $num1*$num2;
$div= $num1/$num2;

if ($num1%2==0){
    $suma+=$num1;
}elseif ($num2%2==0){
    $suma+=$num2;   
}

$sumapar=0;
$sumaimpar=0;
$num = 0 ;
while ($num <= 10 ){
	if ($num %2 ==0){
	//evaluacion num par
		$sumapar = $sumapar+ $num;
	} else {
		$sumaimpar += $num;
	}
	$num++;
}
echo "Mi suma de numeros pares fue:  ".$sumapar;
echo "<br>";
echo "Mi suma de numeros impares fue:  ".$sumaimpar;


$sumapar=0;
$sumaimpar=0;


for ($num=0; $num<= 10; $num++ ){
	if ($num %2 ==0){
	//evaluacion num par
		$sumapar = $sumapar+ $num;
	} else {
		$sumaimpar += $num;
	}
	
}
echo "Mi suma de numeros pares fue:  ".$sumapar;
echo "<br>";
echo "Mi suma de numeros impares fue:  ".$sumaimpar;


$list=["charles","leclerc", 22, "sebastian", "vettel", 32];
print_r ($list[0]);


$list=["charles","leclerc", 22, "sebastian", "vettel", 32];


for ($i=0; $i< count($list); $i++){
    echo "bucle for con array: ". $list[$i] ."<br/>";
}


$list=["charles","leclerc", 22, "sebastian", "vettel", 32];


foreach ($list as $item){
    echo "bucle foreach con array: ". $item ."<br/>";
}


$array= ["tipo","fecha","monto"]
$array=["tipo"=>"transferencia", "fecha"=>"2019-01-01", "monto"=> 5000];
array_push($array,"deposito", "2019-04-04", 85000);
var_dump($array);

*/

$array= array("tipo"=>"transferencia", "fecha"=>"2019-01-01", "monto"=> 5000);
$array2= array("tipo"=>"deposito", "fecha"=>"2019-02-01", "monto"=> 50800);
$array3= array("tipo"=>"deposito", "fecha"=>"2019-02-01", "monto"=> 50800);
$transaccion=[$array,$array2];
var_dump($transaccion);

?>