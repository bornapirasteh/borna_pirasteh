<!DOCTYPE html>
<html>
<body>
<?php
$result = 0;
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$number1 = $_REQUEST['first_value'];
$number2 = $_REQUEST['second_value'];

if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
{
    echo "<br><br>";
    echo "data is invalid";
    echo "<br><br>";
}
if((is_numeric($number1) == TRUE) && (is_numeric($number2) == TRUE)){
if($operator=="/")
{
$result= $number1/$number2;
}
if($operator=="+")
{
$result= $number1+$number2;
}
if($operator=="*")
{
$result =$number1*$number2;
}
if($operator=="-")
{
$result= $number1-$number2;
}
}
else{
    echo "<br><br>";
    echo "data is invalid";
    echo "<br><br>";
}

}
if( isset ($_REQUEST['calculate_expression'])){
    $number3 = $_REQUEST['expression'];
    if($_REQUEST['expression']==NULL )
{
    echo "<br><br>";
    echo "data is invalid" ;
    echo "<br><br>";
}
    $result = eval('return '.$number3. ';');  
}
?>
 
<form>
 
<tr>
<td style=" color:black; font-family:'Times New Roman'">Enter Number</td>
<td colspan="1">
<input name="first_value" type="text" style="color:purple;background-color:orange"/></td>
</tr>
<br><br>
 
<tr>
<td style="color:red; font-family:'Times New Roman'">Select Operator</td>
<td>
<select name="operator" style="width: 75px; background-color:orange">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
</tr>
<br><br>
 
<tr>
<td style=" color:black; font-family:'Times New Roman'">Enter Number</td>
<td class="auto-style5">
<input name="second_value" type="text"  style="color:red; background-color:orange"/></td> 
</tr>
<br><br>
 
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:black" /></td>	 
</tr>
<br><br>

<tr>
<td style=" color:black; font-family:'Times New Roman'">Enter Expression</td>
<td colspan="1">
<input name="expression" type="text" style="color:black;background-color:blue"/></td>
</tr>
<br><br>

<tr>
<td></td>
<td><input type="submit" name="calculate_expression" value="Calculate experession" style="color:wheat;background-color:black" /></td>	 
</tr>
<br><br>
 
<tr>
<td style="color:black">Output = </td>
<td style="color:darkblue"><?php echo $result;?></td>
</tr>	
<br><br>
 

</form>
 
</body>
</html>