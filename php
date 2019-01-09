<?php
$demo=$_GET['d'];
$conn = mysqli_connect("localhost","root","","etcs210");
mysqli_select_db($conn,"etcs210");

$query = "SELECT * from etcs210 where Enum='".$demo."'";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
echo "<table border = 10><tr><th>Enrollment Number</th><th>Name</th><th>Date</th><th>Time</th><th>Atendence</th></tr>";
while($row= mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['Enum']."</td>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['Date']."</td>";
echo "<td>".$row['Time']."</td>";
echo "<td>".$row['Atendence']."</td>";
echo "</tr>";
}
?>
