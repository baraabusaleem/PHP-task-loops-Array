<!-- <1> -->
<?php
$color = array('white', 'green', 'red');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet,
the $color[1] lawn, the $color[0] house, the leaden sky.
The new president and his first lady. - Richard M. Nixon"."\n";
?>








<!-- <2> -->
<?php
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>

<br>
<!-- <3> -->
<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => 
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => 
"Berlin", "Greece" => "Athens", "Ireland"=>
"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
asort($ceu) ;
foreach($ceu as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}
?>
<br>
<!-- <4> -->

<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."<br>";
?>

<br>
<!-- <5> -->

<?php
$original = array( '1','2','3','4','5' );
echo 'Original array : '."<br>";
foreach ($original as $x) 
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 

foreach ($original as $x) 
{echo "$x ";}
echo "<br>"
?>
<!-- <6> -->


<br>
<!-- <7> -->

<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>

<!-- <8> -->

<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
function merge_arrays($x, $y)
{
$temp = array(); $temp[] = $x; if(is_scalar($y))
{
$temp[] = $y;
}

return $temp;
}
echo '<pre>'; print_r(array_map('merge_arrays',$array1, $array2));
?>



<!-- <9> -->

<?php
function array_change_value_case($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = array_change_value_case($value, $case);
 continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
?>
<br>
<!-- <10> -->
    <?php
$Color = array('red', 'blue', 'white', 'yellow');
print_r($Color);
$myColor = array_change_value_case($Color,CASE_UPPER);
print_r($myColor);
?>


<br>
<!-- 11 -->

<?php
 echo implode(",",range(200,250,4))."\n";
?>


<!-- 12 -->

<?php
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
?>


<!-- 13 -->

<?php
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}

?>


<!-- 14 -->

<?php
function zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(zero(array( 2, 0, 10, 12, 6) )."\n");
?>