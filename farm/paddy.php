<style>
.box{
margin:0 auto; 
width:50%;
height:50%;
padding:20px;
background:#f9f9f9;
border:2px solid #333;
}
body {
 
 background-repeat: no-repeat;
 background-attachment: fixed;
13
 background-size: cover;
}
</style>
<center>
<div class="body">
<body background="C:\xampp\htdocs\x folder\dbms\leaf1.jpg"></div>
<div class="box">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<label for="pn">product name:</label>
<input type="text" name="pn" value="paddy"><br><br>
<label for="pi">product id:</label>
<input type="text" name="pi" value="101"><br><br>
<label> Enter your name:</label>
<input type="text" name="customer"><br><br>
<label>Enter Email:</label>
<input type="email" name="email"><br><br>
<label>Enter phone number:</label>
<input type="text" name="phone"><br><br>
<label>select the quantity: </label>
 <select id="products" name="products" >
 <option value="select the quantity">select the quantity</option>
 <option value="100">(1)100rs</option>
 <option value="200">(2)200rs</option>
 <option value="300">(3)300rs</option>
 <option value="400">(4)400rs</option>
 </select><br><br>
<input type="submit" value="buy" name="submit"><br><br>
</form></div></center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="products";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "<br> <br>";
if(isset($_POST['submit']))
{ 
 $pname = $_POST['pn'];
 $pid = $_POST['pi'];
 $name = $_POST['customer'];
 $email = $_POST['email'];
 $phoneno = $_POST['phone'];
 $price = $_POST['products'];
14
$sql = "INSERT INTO 
products(productname,productid,customername,customer_emailid,customer_contact,price)
 VALUES ('$pname','$pid','$name','$email','$phoneno','$price')";
 if (mysqli_query($conn, $sql)) {
 echo "successfully purchased!!!";
 } else {
 echo "Error: " . $sql . ":-" . mysqli_error($conn);
 }
 mysqli_close($conn);
}
?>