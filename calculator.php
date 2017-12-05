<form action="" method="POST">
<table>
	<tr> 
		<td> Enter the first number </td>
		<td> <input type="number" name="num1"> </td>
	</tr>

	<tr> 
		<td> Enter the Second number </td>
		<td> <input type="number" name="num2"> </td>
	</tr>
	<tr> 
		<td>  </td>
		<td> <input type="submit" name="calculation" value="calcultor"> </td>
	</tr>
</table>

</form>

<?php
if(isset($_POST['calculation'])){
	$numone=$_POST['num1'];
	$numtwo=$_POST['num2'];
	if(empty($numone) or empty($numtwo)){
		echo "<span style='color:red'>  Line must not be empty </span> <br>";	
	}
	else{
		echo "first number is: $numone <br>". "Secon number is: $numtwo <br> ";
		$cal= new calculation;
	$cal->add($numone, $numtwo);
	$cal->sub($numone, $numtwo);
	$cal->mul($numone, $numtwo);
	$cal->divi($numone, $numtwo);
	}
	
	
	
}
?>

<?php
 class calculation {
	 
	 function add($a,$b){
		 echo "Summation = ". ($a+$b). "<br>";
	 }
	 function sub($c,$d){
		 echo "The Subtration is = ".($c-$d). "<br>";
	 }
	 function mul($c,$d){
		 echo "The multiplication is = ".($c*$d). "<br>";
	 }
	 function divi($c,$d){
		 echo "The divided is = ".($c/$d). "<br>";
	 }
 }
?>