<html>
<head>
<center>
<style>
table, th, td {
border: 1px solid black;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="products";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
echo "<br> <br> <br> <br>";
$sql = "SELECT * FROM farmdealers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table><tr><th>DealerId</th><th>Dealer Name</th><th>Dealer 
Contact</th><th>Dealer Address</th><th>Dealer Product</th><th>ProductId</th></tr>";
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["dealerid"]. "</td><td>" . $row["dealername"] . "</td><td>" . 
$row["dealercontact"]. "</td><td>" . $row["dealeraddress"]. "</td><td>" . 
$row["dealproduct"]. "</td><td>" . $row["dealproductid"]. "</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
$conn->close();
?>
</center>
</body></html>
