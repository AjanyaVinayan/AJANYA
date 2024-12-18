 <?php
$accno=$_GET['accno'];
$amt=$_GET['amnt'];
$tran=$_GET['d'];
$db=pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");
if($db)
{
echo "Connection Successful<br>";
    if($tran=='depo')
    {
        $qry="update banks set balance=(balance+$amt) where accno='$accno'";
        $result=pg_query($db,$qry);

        echo "<body align='center'>";
        echo "Amount deposited successfully<br><br>";
        $sqry="select * from banks where accno='$accno'";
        $result2=pg_query($db,$sqry);
        echo "<table align='center' border='1' rules='all' width='50%'>";
        while($row=pg_fetch_row($result2))
        {
            echo "<tr style='height:50px'><td>Account Number</td><td>$row[0]</td></tr>";
            echo "<tr style='height:50px'><td>Customer Name</td><td>$row[1]</td></tr>";
            echo "<tr style='height:50px'><td>Balance Amount</td><td>$row[2]</td></tr>";
        }
        echo "</table>";
    }
    if($tran=='withd')
    {
        $qry="update banks set balance=(balance-$amt) where accno='$accno'";
        $result=pg_query($db,$qry);
        $bgcolor="thistle";
        echo "<body align='center'>";
        echo "Amount withdrawn successfully<br><br>";
        $sqry="select * from banks where accno='$accno'";
        $result2=pg_query($db,$sqry);
        echo "<table align='center' border='1' rules='all' width='50%'>";
        while($row=pg_fetch_row($result2))
        {
            echo "<tr style='height:50px'><td>Account Number</td><td>$row[0]</td></tr>";
            echo "<tr style='height:50px'><td>Customer Name</td><td>$row[1]</td></tr>";
            echo "<tr style='height:50px'><td>Balance Amount</td><td>$row[2]</td></tr>";
        }
        echo "</table>";
    }
}
?>