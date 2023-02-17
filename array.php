<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>array </title>
</head>

<body>
<?php
	// indexed  array
	$cars = array("Toyota", "Spider", "Buggatti","Camry", "Fine-car", 23, 56 );
	echo $cars[2];
	// for loop
	echo "<p/>";
	$arrlen = count($cars);
	
	for ($x = 0; $x<$arrlen; $x++){
		echo $cars[$x]. "<br/>";
	}
	
	echo "<br/>";
	for ($x = 0; $x<$arrlen; $x++){
		echo $cars[$x]. " ";
	}
	echo "<br/>";
	// foreach loop
    $mycars = array_values($cars);
	foreach($mycars as $all){
		echo $all.' ';
	}
	echo "<br/>";
	$mykey = array_keys($cars);
	foreach($mykey as $getall){
		echo $getall.' ';
	}
	echo "<br/>";
	$math = array(23, 45, 2, 31, 15, 10);
	$sumall = array_sum($math);
	echo $sumall;
	echo "<br/>";
	// associative array 
	$names = array("precious"=>"17","Daniel"=>"14", "Godwin"=>"18");
	echo "Precious is ".$names['precious']."years old <br/>";
	echo "<br/>";
	
	foreach($names as $keys=>$value){
	echo $keys. " is ". $names[$keys]. "years old"."<br/>";
	}
	echo "<br/>";
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
	// for loop in multidimensional array 
	for ($p =0; $p <4; $p++){
		echo "<p><b> Car Model $p </b></p>";
		echo "<ul>";
		
		for ($y = 0; $y<3; $y++){
			echo "<li>".$model[$p][$y]. "</li>";
		}
		echo "</ul>";
		
	}
	echo "<br/>";
	// array sorting 
	$math = array(23, 45, 2, 31, 15, 10);
	sort($math);
	$mymath = array_values($math);
	foreach($mymath as $sorted){
		echo $sorted. ', ';
	}
	
	echo "<br/>";
	// array sorting 
	$math = array(23, 45, 2, 31, 15, 10);
	rsort($math);
	$mymath = array_values($math);
	foreach($mymath as $sorted){
		echo $sorted. ', ';
	}
	echo "<br/>";
	// sorting associative arrays
	
	$namess = array("Daniel"=>"18", "Godwin"=>"20","precious"=>"17");
	asort($namess);
	foreach($namess as $keys => $value){
		echo $keys." is ".$namess[$keys]." years old <br/>";
	}
	echo "<br/>";
	// descending order with array values 
	$namess = array("Daniel"=>"18", "Godwin"=>"20","precious"=>"17");
	arsort($namess);
	foreach($namess as $keys => $value){
		echo $keys." is ".$namess[$keys]." years old <br/>";
	}
	
	echo "<br/>";
	// ascending order with array keys 
	$namess = array("Daniel"=>"18", "Godwin"=>"20","precious"=>"17");
	ksort($namess);
	foreach($namess as $keys => $value){
		echo $keys." is ".$namess[$keys]." years old <br/>";
	}
	echo "<br/>";
	// descending order with array keys 
	$namess = array("Daniel"=>"18", "Godwin"=>"20","precious"=>"17");
	krsort($namess);
	foreach($namess as $keys => $value){
		echo $keys." is ".$namess[$keys]." years old <br/>";
	}
	
	
	echo rand()."<br/>";
	// jamb reg number generator 
	echo "<br/>";
	$mnumi= rand("10000000", "90000000");
	$randi = substr(str_shuffle('abcdefghijk'), 0,2 );
	foreach(range('a','k') as $leas);
	echo $mnumi. strtoupper($randi) ;
	
	echo "<br/>";
	// conditional statement 
	$okey = "mango";
	if($okey == "rat"){
		echo "I love coding ";
	}else{
		echo "I love Vsasf Tech";
	}
	echo "<br/>";
	if($okey != "rat"){
		echo "I love coding ";
	}else{
		echo "I love Vsasf Tech";
	}
	echo "<br/>";
	$ser = 55;
	$raw = 12;
	if ($ser == 23 && $raw == 12){
		echo "I can cook pizza";
	}else {
		echo "I cannot cook well";
	}
	echo "<br/>";
	if(34 > $ser || 12 >= $raw){
		echo "I love programming ";
	}else{
		echo "I will cook bitter leaf for uncle";
	}
	echo "<br/>";
	$mytime = date("h:m:s");// 12 hour time
	echo $mytime;
	
	echo "<br/>";
	$mytimes = date("H:m:s");// 24 hour time
	echo $mytimes;
	echo "<br/>";
	$myday = date("d");
	echo $myday;
	
	echo "<br/>";
	$mydays = date("D");
	echo $mydays;
	echo "<br/>";
	
	switch($mydays){
		case "Sun":
		   echo "Today is Sunday. Helleluija";
		   break;
		case "Mon":
		   echo "Today is Monday.";
		   break;
		case "Tue":
			echo "Today is Tuesday.";
			break;
		case "Wed":
			echo "Today is Wednesday.";
			break;
		case "Thu":
			echo "Today is Thursday.";
			break;
		case "Fri":
			echo "Today is Friday.";
			break;
		default:
			echo "Today is Saturday.";
	}
	echo "<br/>";
	
	$myhours = date("H");
	if($myhours < "12"){
		echo "Good morning Uncle ";
	}elseif($myhours <="15"){
		echo "Good afternoon uncle";
	}elseif($myhours <= "20"){
		echo "Good evening uncle";
	}else{
		echo "Good night ";
	}
	
	
	$student = array("Okoro Favour", "Aguiyi Njideka", "Prisca Muonokwu", "Ugah Faith", "Nnamdi John", "Uju Princess", "Uda Lawrence");
	$maths = array(55, 32, 57, 88, 98, 61,74);
	$eng = array(77, 39, 57, 44, 67,85,68);
	$chem = array(73,43, 45, 76,63,84,71);
	$count = count($student);
	$sn= 1;
	
	$okoro = round(($maths[0]+$eng[0]+$chem[0])/3);
	$aguiyi = round(($maths[1]+$eng[1]+$chem[1])/3);
	$prisca= round(($maths[2]+$eng[2]+$chem[2])/3);
	$uga = round(($maths[3]+$eng[3]+$chem[3])/3);
	$nnamdi = round(($maths[4]+$eng[4]+$chem[4])/3);
	$uju = round(($maths[5]+$eng[5]+$chem[5])/3);
	$uda = round(($maths[6]+$eng[6]+$chem[6])/3);
	$aver = array($okoro,$aguiyi,$prisca,$uga,$nnamdi,$uju,$uda);
?>


<table border="2px">
	<tr>
		<td>S/N</td>
		<td>NAMES</td>
		<td>MATHS</td>
		<td>GRADE</td>
		<td></td>
		<td>ENGLISH</td>
		<td>GRADE</td>
		<td></td>
		<td>CHEM</td>
		<td>GRADE</td>
		<td>AVERAGE SCORE</td>
		<td>GRADE</td>
	</tr>
	<?php for ($x=0; $x<$count; $x++) {?> 
		<tr>
		<td><?php echo $sn++ ; ?></td>
		<td><?php echo $student[$x] ; ?></td>
		<td><?php echo $maths[$x] ; ?></td>
		<td><?php 
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
} ; ?></td>
		<td></td>
		<td><?php echo $eng[$x] ; ?></td>
		<td>GRADE</td>
		<td></td>
		<td><?php echo $chem[$x] ; ?></td>
		<td>GRADE</td>
		<td><?php echo $aver[$x] ; ?></td>
		<td><?php if($aver[$x] >= 70){
	echo "A";
}elseif($aver[$x] >= 60){
	echo "B";
}elseif($aver[$x] >= 50){
	echo "C";
}elseif($aver[$x] >= 40){
	echo "D";
}else{
	echo "F";
}   ; ?></td>
	</tr>
		
		<?php }?>
	
	
</table>



<script src="https://www.google.com/recaptcha/enterprise.js?render=6Lc2KmQkAAAAAJfHFxODypHJXLsMzUVWcaHp180c"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6Lc2KmQkAAAAAJfHFxODypHJXLsMzUVWcaHp180c', {action: 'login'}).then(function(token) {
       ...
    });
});
</script>
</body>
</html>