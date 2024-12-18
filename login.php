<?php
if(isset($_POST['usr']) && isset($_POST['pass']))
{
    $usrname=$_POST['usr'];
    $passwd=$_POST['pass'];
    $con= pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");

    if($con){
         echo "<center>Successfully connected.<br></center>"; 
        $qry="select * from login where username='$usrname' and password='$passwd';";
        $result=pg_query($con,$qry);
        $nos=pg_num_rows($result);
        echo "<center>"; // Start centering here
        if($nos)
            echo "<br> $usrname, You are logged in Successfully...<br>";
        else
            echo "Incorrect Username or password<br>";
        echo "</center>"; // End centering here
    }
    else{
        echo "Error Connecting to the database<br>";
    }
    pg_close($con);
}
?>
