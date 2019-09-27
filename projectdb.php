<?php
$con=mysqli_connect("localhost","user","mysql","project");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(!isset($_SESSION)){
}

   $srno = $_REQUEST['srno'];
$_SESSION['srno'] = $srno;


if($result = mysqli_query($con,"SELECT * FROM user WHERE srno = '$_SESSION[srno]'"));
{
  echo(mysqli_error($con));
}

echo "<table border='1'>
<tr>
<th>Srno</th>
<th>Name</th>
<th>City</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['srno'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "</tr>";
}
echo "</table>";

 mysqli_free_result($result);

mysqli_close($con);
?>

