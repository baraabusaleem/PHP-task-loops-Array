<!-- <1> -->
<?php
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
?>

<br>
<!-- 2 -->

<?php
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";
?>
<br>
<!-- 3 -->
<?php
for($x=0;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "A";
    }
     for ($y=1;$y<=$x;$y++)
     {
      echo "B","C";
     
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
?>
 

<br>
    <!-- <4> -->
    <?php
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "1";
    }
     for ($y=1;$y<=$x;$y++)
     {
      echo "1","2";
     
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
?>

<!-- <5> -->
<?php
for ($i = 0; $i < 5; $i++){
  for($j=1;$j<6;$j++){
    if($i==0&&$j==1){
      echo " 1 ";
    }else if($i==1&&$j==2){
      echo " 2 ";
    }else if($i==2&&$j==3){
      echo " 3 ";
    }else if($i==3&&$j==4){
      echo " 4";
    }else if($i==4&&$j==5){
      echo " 5 ";
    }else{
      echo " 0 ";
    }
    
  }

  echo "<br/>";
}

?>
echo "<br><br>";

<br>
<!-- <6> -->

<?php
$n = 6;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "  $n = $x"."<br>";
?>

<br>
<!-- <7> -->
<?php

$x = 0;    
$y = 1; 
$z=0;
echo $z." "; 
for($i=0;$i<=10;$i++)    
{    
    $z = $x + $y;    
    echo $z." ";         
    $x=$y;       
    $y=$z;     
}  


echo "<br><br>";
?>
<!-- 8 -->



<?php
$text="Orange Coding acadimy";
$search_char="c";
$count="1";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
     }
  }
echo $count."\n";
?>

<br>



<!-- 9 -->

<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>


<br>

<!-- <10> -->

<?php
for ($i = 1; $i <= 50; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz"."\n" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Fizz"."\n";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Buzz"."\n";
   }
     else
   {
     echo $i."\n";
   }
 }
?>

<!-- <11> -->
<?php
//function for floyd triangle
function FloydTriangle($n){
  $value = 1;
  for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo "$value "; 
      $value++;
    }
    echo "<br>"; 
  }
}

FloydTriangle(5);



echo "<br><br>";
?>

<!-- <12> -->
  <?php

$size = 5;
    
// upside pyramid
for ($i = 1; $i <= $size; $i++) {
    // printing spaces
    for ($j = $size; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    // printing star
    for ($k = 0; $k < $i * 2 - 1; $k++) {
      
        echo "A";

    }
    echo "<br>";
}
// downside pyramid
for ($i = 1; $i <= $size - 1; $i++) {
    // printing spaces
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // printing star
    for ($k = ($size - $i) * 2 - 1; $k > 0; $k--) {
        echo "A";
    }
    echo "<br>";
}