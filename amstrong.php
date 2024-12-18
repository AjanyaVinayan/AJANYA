<html>  
  <center>
<body> 
 <form method="post"> 
  <h1>AMSTRONG NUMBER</H1> 
 Enter the Number:  
   <input type="number" name="number">  
   <input type="submit" value="Submit">  
   <BR> <BR>
<?php  
 if($_POST)  
 {   
  //get the number entered  
  $number = $_POST['number'];  
  //store entered number in a variable  
  $a = $number;  
  $sum  = 0;  
  //run loop till the quotient is 0  
  while( $a != 0 )  
  {  
   $rem   = $a % 10; //find reminder  
   $sum   = $sum + ( $rem * $rem * $rem ); //cube the reminder and add it to the sum variable till the loop ends  
   $a   = $a / 10; //find quotient. if 0 then loop again  
  }  
  //if the entered number and $sum value matches then it is an armstrong number  
  if( $number == $sum )  
  {  
   echo "<BR>Yes $number an Armstrong Number";  
  }else  
  {  
   echo "<BR>$number is not an Armstrong Number";  
  }  
 }  
 
?> 
</center>
 </form>  
</body>  
</html>    