<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<h2>Branch Details</h2><a href="index.html" class="btn btn-primary button" style="margin-left: 93%; margin-bottom:1%; ">Home</a>
<table>
<tr>
<th>S.No </th>
<th>   Report Id</th>
<th>Branch Name</th>
</tr>
<?php
	

$conn = mysqli_connect("localhost", "root", "", "cfd");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM BRANCH";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["sno"]. " </td><td> " . $row["branch_id"] . "  </td><td> ". $row["branch_name"]. " </td></tr> ";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
	
	
	
?>
</table>
</body>
</html>