<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My first php class</title>
<?php
echo "Hello World". "<br/>";
print("Hello world!");
// php variables 
	//global variables 
$a = 34;
$b = "I love you";
echo "<br/>".$a;
	
// local variable 
	
function myjoy(){
	global $b;
	$d = 56;
	echo "<br/>".$d;
	echo "<br/>".$b;
}
myjoy();
	
/* 
data types:
string
integer
float 
boolean 
null 
array 
object 
resource 
*/
$q = "My joy giver is php";
	var_dump($q);
	$e = 88;
	echo "<br/>";
	var_dump($e);
	
	$r = 4.8;
	var_dump($r);
	$y = array("Precious", "Daniel", "Dinachi");
	var_dump($y);
	
	$f= 90;
	$u = 34;
	$jj = $f + $u;
	echo $jj;
	
	function mytest(){
		static $k =3;
		$k++;
		echo "<br/>".$k;
	}
	mytest();
	mytest();
	mytest();
	mytest();
	
	
	function area(){
		$d = 44;
		$e = 54;
		$t = $d * $e;
		return $t;
	}
	
	
	function peri($e, $k){
		$g = 2*($e + $k);
		return $g;
	}
	
	
	if(isset($_POST['submit'])){
		$len = $_POST['length'];
		$bre = $_POST['breadth'];
	}
	
	function process(){
		global $len, $bre;
		$solve = $len * $bre;
		return $solve;
	}
	
	
	
	
	
?>








</head>

<body>



<table>
	<tr>
		<td> <?Php echo area(); ?></td>
	</tr>
	<tr>
		<td> <?Php echo peri(5,8); ?></td>
	</tr>
</table>
<h2>Area of rectangle </h2>
<form action="" method="post" enctype="multipart/form-data" onSubmit="check()">
	<input id="myl" value="" type="number" name="length" placeholder="Enter length "><p/>
	<input type="number" name="breadth" placeholder="Enter breadth"><p/>
	<button  id="mysub" name="submit">Submit</button><p/>
</form>

<table style="margin-top: 30px;">
	<tr>
		<td> <?php if(isset($_POST['submit'])){
	echo "The area of the rectangle = ".process()."cm2";
} ?></td>
	</tr>
</table>



<?php
// indexed  array
	$cars = array("Toyota", "Spider", "Buggatti","Camry", "Fine-car" );
	
	echo $cars[3]."<br/>";
	$arrlen = count($cars);
	
	for ($x = 0; $x<$arrlen; $x++){
		echo $cars[$x]. "<br/>";
	}
	
	// associative array 
	$names = array("precious"=>"17","Daniel"=>"18", "Godwin"=>"18");
	echo "Precious is ".$names['precious']."years old <br/>";
	
	// multidimensional array 
	
	$model = array(
	array("Toyota", "12","20"),
	array("Honda","6","14"),
	array("Spider", "16","19"),
	array("Lexus", "11","22")
	);
		
echo "Car Type: ".$model[0][0].".. In stock: " .$model[0][1]. ".. Out of stock: ".$model[0][2]."<br/>";
	
echo "Car Type: ".$model[1][0].".. In stock: " .$model[1][1]. ".. Out of stock: ".$model[1][2]."<br/>";	
echo "Car Type: ".$model[2][0].".. In stock: " .$model[2][1]. ".. Out of stock: ".$model[2][2]."<br/>";	
echo "Car Type: ".$model[3][0].".. In stock: " .$model[3][1]. ".. Out of stock: ".$model[3][2]."<br/>";	

	for ($y = 0; $y<4; $y++){
		echo "<p><b> Available Car Models : $y </b></p>";
		
		echo "<ul>";
		for ($v = 0; $v < 3; $v++){
		echo "<li>".$model[$y][$v]."</li>";
		echo "</ul>";
		}
	}

	
	
$mynum = array(22, 5, 65, 11, 89, 17);
	sort($mynum);
	$myall = count($mynum);
	
	for ($x =0; $x<$myall; $x++){
		echo $mynum[$x]."<br/>";
	}
	
	$myletter = array("Apple", "Guava", "Orange", "Fruit", "Carrot","Mango");
	sort($myletter);
	$cs = count($myletter);
	for($x=0; $x<$cs;$x++){
		echo($myletter[$x]."<br/>");
	}
	
	
	$mynum = array(22, 5, 65, 11, 89, 17);
	rsort($mynum);
	$myall = count($mynum);
	
	for ($x =0; $x<$myall; $x++){
		echo $mynum[$x]."<br/>";
	}
	
	
	$myletter = array("Apple", "Guava", "Orange", "Fruit", "Carrot","Mango");
	rsort($myletter);
	$cs = count($myletter);
	for($x=0; $x<$cs;$x++){
		echo($myletter[$x]."<br/>");
	}
	
	$names = array("Daniel"=>"18", "Godwin"=>"20","precious"=>"17");
	asort($names);
	foreach($names as $key => $value){
		echo $key." is ".$names[$key]." years <br/>";
	}
	
	$namess = array("Daniel"=>"18", "Godwin"=>"20","precious"=>"17");
	arsort($namess);
	foreach($namess as $keys => $value){
		echo $keys." is ".$namess[$keys]." years <br/>";
	}
	
	
	/*$rand = ['abcdefghijk'];
	foreach(('a', 'k' )as $guy);*/
	
	$namess = array("Daniel"=>"18", "Godwin"=>"20","precious"=>"17");
	ksort($namess);
	foreach($namess as $keys => $value){
		echo $keys." is ".$namess[$keys]." years <br/>";
	}
	
	$namess = array("Daniel"=>"18", "Godwin"=>"20","precious"=>"17");
	krsort($namess);
	foreach($namess as $keys => $value){
		echo $keys." is ".$namess[$keys]." years <br/>";
	}
	
	
	
	echo rand()."<br/>";
	// jamb reg number generator 
	$mnumi= rand("10000000", "90000000");
	$randi = substr(str_shuffle('abcdefghijk'), 0,2 );
	foreach(range('a','k') as $leas);
	echo "<br/>".$mnumi. strtoupper($randi)."<br/>"  ;
	
	
	
	// conditional statement & date
	
	$myda = date("D");
	$mytime = date("m:h:y");// 12 hour time
	$myhou = date("H");// 24 hour time 
	echo $myda."<br/>".$mytime."<br/>".$myhou."<br/>";
	
	if($myhou <= "11"){
		echo "Good morning sir";
	}elseif($myhou <= "15"){
		echo "Good afternoon sir";
	}elseif($myhou <= "20"){
		echo "Good evening sir";
	}else{
		echo "Good Night all. Sleep tight.";
	}
	echo "<br/>";
	
	// php switch 
	switch($myhou){
		case $myhou < "12":
			echo "Good morning ";
			break;
		case $myhou < "16":
			echo "Good afternoon ";
			break;
		case $myhou < "20":
			echo "Good evening ";
			break;
		default :
			echo "Good night ";
	}
	
	
	// math functions 
	$er = 34;
	$der = 12;
	$fea = 30;
	echo sqrt(576)."<br/>";
	echo (5**2);
	$gete = (sin($fea));
	
	echo pi();
	
	echo $gete;
	
	$er+=$der;
	echo "<br/>".$er;
	$er*=$der;
	echo "<br/>".$er;
	$xx = 34;
	$yy= 15;
	if(20 > $xx && 9 < $yy ) {
		echo "I love you";
	}else{
		echo " I need you";
	}
	
	
	if($xx > 50 || $yy < 15){
		echo "I love you";
	}else{
		echo " I need you";
	}
	
	if ($xx !== 34){
		echo "Coding is good";
	}else{
		echo "Programming is taskful";
	}
	
	$tt = "";
	if (!empty($tt)){
		echo "How are you";
	}else{
		echo "Good bye";
	}
	
	echo "<br/>";
	
	// array functions 
	// array keys
	$a= array(20,30,40,50,55);
	$b= array_keys($a);
	foreach($b as $c) {echo $c.' ';}
	
	echo "<br/>";
	
	// array values 
	$a= array(20,30,40,50,60);
	$b= array_values($a);
	foreach($b as $c) {echo $c.' ';}
	
	echo "<br/>";
	// array sum
	$a= array(20,30,40,50,60);
	$b= array_sum($a);
	echo $b;
	echo "<br/>";
	echo "average score:". $b/5;
	
	$fae = array(21, 33, 43, 12, 17, 19);
	$all = array_sum($fae);
	echo "<br/>";
	echo $all;
	echo "<br/>";
	echo "average score:". $all/6;
	
	echo "<br/>";
	echo "average score:". round($all/6, 2) ;
	
	echo "<br/>";
	// array merge 
	$a= array(20,30,40,50,60);
	$b= array("blue","red","black");
	$c= array_merge($b,$a);
	foreach($c as $value) {echo $value."<br/>";}
	
	
	
	
	
?>


<?php 
$name = array("Okeke Nnenna", "Joy Ugwu", "Edmund Mayor", "Ugonna Pascal", "Oluchi Love");
	
	$maths = array(56,77, 23, 89, 61);
	
	$eng =   array(77, 89, 60,34, 66);
	
	$phy =   array(74,89,54,66,90);
	
	
	$okeke= round(($maths[0] +$eng[0]+$phy[0])/3);
	$joy=  round(($maths[1] +$eng[1]+$phy[1])/3);
	$edm=  round(($maths[2] +$eng[2]+$phy[2])/3);
	$ugo=  round(($maths[3] +$eng[3]+$phy[3])/3);
	$oluchi=  round(($maths[4] +$eng[4]+$phy[4])/3);
	
	$average = array($okeke,$joy,$edm,$ugo,$oluchi);
	$de = array_keys($average);
	$myposi = array($okeke,$joy,$edm,$ugo,$oluchi);
	rsort($myposi);
	$posi = array("1st","2nd","3rd","4th","5th");
	$da = array_keys($posi);
	
	
	$count = count($name);
	$sn = 1;	
	
?>
<table border="2px" style="width: 50%; height: 250px; " >
	<tr>
		<td><b>S/N</b></td>
		<td><b>NAMES</b></td>
		<td><b>MATHS</b></td>
		<td><b>ENGLISH</b></td>
		<td><b>PHYSICS</b></td>
		<td><b>AVERAGE</b></td>
		<td><b>POSITION</b></td>
	</tr>
	
	<?php for($x =0; $x<$count; $x++) {?> 
	<tr>
		<td><?php echo $sn++ ?></td>
		<td><?php echo $name[$x] ?></td>
		<td><?php echo $maths[$x]. "___"; 
			if($maths[$x] >= 70){
				echo "A";
			}elseif($maths[$x] >= 60){
				echo "B";
			}elseif($maths[$x] >= 50){
				echo "C";
			}elseif($maths[$x] >= 40){
				echo "D";
			}else{
				echo "F";
			}
			?></td>
		<td><?php echo $eng[$x] ?></td>
		<td><?php echo $phy[$x] ?></td>
		<td><?php echo $average[$x] ?></td>
		<td><?php  ?></td>
	</tr>
	<?php }?>
</table>







<?php
// php function 
	function myprecious(){
		$say= "Hello world ";
		return $say;
	}
	
	function precious($e, $u){
		$says= $e * $u;
		return $says;
	}
	
	
	
	if(isset($_POST['submit'])){
		$lent = $_POST['length'];
		$breadth = $_POST['breadth'];
	}
	function myarea(){
		global $lent, $breadth;
		$area = $lent * $breadth;
		return($area);
	}
	
?>





<h2>Area of Rectangle </h2>
<form action="" enctype="multipart/form-data" method="post" >
    <label>Length of Rectangle </label><br/>
	<input readonly type="number" name="length" placeholder ="Enter length">
	<p/>
	<label>Breadth of Rectangle </label><br/>
	<input type="number" name="breadth" placeholder ="Enter breadth">
	<p/>
	<button name="submit" >Submit</button>
</form>


<table style="margin-top: 15px; float: left;">
	<tr>
		<td><?php echo myprecious(); ?></td>
		<td><?php echo precious(3, 12); ?></td>
		
	</tr>
	<tr>
		
		<td><?php if(isset($_POST['submit'])){
	echo "The area of rectangle is = ".myarea()."cm2";
} ?></td>
	</tr>
</table>


<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
foreach($lengths as $gyt){
	echo $gyt.' ';
}
	
	
	
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
	

	echo date("H")-1;
	
	echo "<br/>";
	
	// concatenation 
	$rat = 45;
	$cat = "food";
	$rat.=$cat;
	echo $rat;
	echo "<br/>";
	
	$pat= 77;
	$fat= "programming";
	echo $pat.$fat;
	
	echo "<br/>";
	$rat.=$pat.$fat;
	echo $rat;

?>

<script>
	function check(){
		"use strict";
		var sub = document.getElementById("mysub");
		var myl = document.getElementById("myl");
		if(myl.value > 0){
			sub.submit();
		}else{
			sub.type = "reset";
		}
	}
</script>
</body>
</html>