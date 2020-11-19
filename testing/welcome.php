<html>
<body>
<?php echo
$a=$_POST["name"];
?>
<br>
<?php echo
$b=$_POST["email"];
$c=$_POST["number"];
?>
</body>
</html>
<?php
/* PHP CODE to connect MySQLI*/
/*create connection*/
$servername="localhost";
$username="root";
$password="Sunee@123";
$dbname="form";
$conn=new mysqli($servername,$username,$password,$dbname);
/*check conection*/
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
echo" <br> Connected successfully";
/*Inserting values from html form to database table using php*/
$sql="insert into tt (name, email,number) values ('$a','$b',$c)";
if($conn->query($sql)==TRUE)
{
echo "<br> New record inserted";
}
else
{
echo"ERROR <br>".$sql.$conn->error;
}
/*closing connection*/
$conn->close();
echo "<br>";
echo"Closed connection successfully";
?>
