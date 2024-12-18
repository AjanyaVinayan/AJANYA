<?php
if ($_POST) {
    $rg = $_POST['reg'];
    
    $con = pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");
    if ($con)
       
    $qry = "select * from students where rollno ='$rg'";
    $result = pg_query($con, $qry);
    $nos = pg_num_rows($result);
    while ($row = pg_fetch_row($result)) {
        echo "<br>\n";
       
        echo "<center>";
    
        echo "<table border='2' width='60%' height='40%'>";
        echo"<b><u><hl>MarkList</h1></u></b><br><br><br>
                    <tr> <td>Name</td> <td>$row[0]</td></tr> 
                    <td>Rollno</td> <td>$row[1]</td></tr>
                    <td>Mark</td> <td>$row[2]</td></tr>
                    <td>Grade</td> <td>$row[3]</td></tr>                 
                    </table>";
         echo "<center>";
        pg_close($con);
    }
    
}
?>