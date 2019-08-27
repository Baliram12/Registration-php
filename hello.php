<?php
session_start();
$Servername = "localhost";
$conn =mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'userregistration');
if(isset($_POST['submit'])){
$name = $_POST['Name'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$dob = $_POST['Dob'];
$country = $_POST['Country'];
$state = $_POST['State'];
$city = $_POST['City'];
$address = $_POST['Address'];
$sql = "select * from usertable where email = '$email' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num == 1){
	echo"Email Already";
}
else
{
	$reg = "insert into usertable(name,phone,email,dob,country,state,city,address) values ('$name','$phone','$email','$dob','$country','$state','$city','$address')";
	mysqli_query($conn,$reg);
	echo"Data is insert into Table Successful";
}
}


$name="";
$phone="";
$email="";
$dob="";
$country="";
$state="";
$city="";
$address="";
if (isset($_GET['edit'])) {
		 $id = $_GET['edit'];
		 $sql = "SELECT * FROM usertable WHERE id=$id";
		 $result = mysqli_query($conn,$sql);
		  $row = mysqli_fetch_assoc($result);
		    $name = $row['name'];
			$phone =$row['phone'];
			$email =$row['email'];
			$dob = $row['dob'];
			$country = $row['country'];
			$state = $row['state'];
			$city = $row['city'];
			$address = $row['address'];
		}
  if(isset($_REQUEST['update'])){
  	$id = $_REQUEST['update'];
  	$name=$_REQUEST['name'];
  	$phone=$_REQUEST['phone'];
  	$email=$_REQUEST['email'];
  	$dob=$_REQUEST['dob'];
  	$country=$_REQUEST['country'];
  	$state=$_REQUEST['state'];
  	$city=$_REQUEST['city'];
  	$address=$_REQUEST['address'];
    $sql = "UPDATE usertable SET name='$name', phone='$phone',email='$email',dob='$dob',country='$country',state='$state',city='$city',address='$address' WHERE id='$id'";
  	mysqli_query($conn,$sql);
  }

  if(isset($_REQUEST['Delete'])){
	$id = $_REQUEST['Delete'];
	$sql="DELETE FROM usertable WHERE id='$id'";
	mysqli_query($conn,$sql);

}
?>