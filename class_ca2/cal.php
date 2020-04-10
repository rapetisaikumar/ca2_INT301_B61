
<?php
$reg_no=$_POST['reg_no'];
$c=$_POST['c'];
$cpp=$_POST['c++'];
$java=$_POST['java'];
$dbms=$_POST['dbms'];
$total=$c + $cpp +$java + $dbms;
$percentage=$total/4;
?>
<?php
$servername = "localhost";
$username = "user123";
$password = "root";
$dbname = "kumar";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO student (reg_no,c,cpp,java,dbms,total,percentage) VALUES ($reg_no,$c,$cpp,$java,$dbms,$total,$percentage)";

if (mysqli_query($conn, $sql))
{
    echo "New record created successfully";
}
else 
{
  echo " ERROR: Duplicate entry "."<br>"."Please enter the correct Registraion number";
}
mysqli_close($conn);
?>

<form method="POST" action="index.php" >
&nbsp&nbsp&nbsp&nbsp<table border="1" align="center" width="900">
<tr>
<td>SN</td>
<td>cource</td>
<td>Full marks</td>
<td>pass marks</td>
<td>obtained marks</td>
</tr>

<tr>
<td>1</td>
<td>c language</td>
<td>100</td>
<td>32</td>
<td><?php echo $c; ?></td>
</tr>

<tr>
<td>2</td>
<td>c++ language</td>
<td>100</td>
<td>32</td>
<td><?php echo $cpp;?></td>
</tr>


<tr>
<td>3</td>
<td>java</td>
<td>100</td>
<td>32</td>
<td><?php echo $java;?></td>
</tr>

<tr>
<td>4</td>
<td>dbms</td>
<td>100</td>
<td>32</td>
<td><?php echo $dbms;?></td>
</tr>


<tr>
<td colspan="4">TOTAL</td>
<td><?php echo $total;?></td>
</tr>

<tr>
<td colspan="4">Percentage</td>
<td><?php echo $percentage."%";?></td>
</tr>

<tr>
<td colspan="5"align="center"><input type="submit" value="ok"></td>
</tr>  

</table>

</form>

