
<?php require_once 'hello.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
   <?php 
	$conn =mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn,'userregistration');
    $sql = "select * from usertable WHERE id=$_GET[edit]";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    
    ?>
	<h2>Please Edit Here</h2>
	<form method="post" action="">
		Name:<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
		Phone:<input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>
		Email:<input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
		Date of Birth:<input type="date"  value="<?php echo $row['dob']; ?>" name="dob"min="1970-01-01" max="2019-12-31"><br><br>
	Country:   
	<select  name="country" value="<?php echo $row['country']; ?>">
   <option value="select">Select</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
</select>
State:   
	<select  name="state" value="<?php echo $row['state']; ?>"></body>

   <option value="">Select</option>
   <option value="">Select</option>
   <option value="Andhra Pradesh">Andhra Pradesh</option>
   <option value="Arunachal Pradesh">Arunachal Pradesh</option>
   <option value="Assam">Assam</option>
   <option value="Bihar">Bihar</option>
   <option value="Karnataka">Karnataka</option>
   <option value="Chhattisgarh">Chhattisgarh</option>
   <option value="Goa">Goa</option>
   <option value="Gujarat">Gujarat</option>
   <option value="Haryana">Haryana</option>
   <option value="Himachal Pradesh">Himachal Pradesh</option>
   <option value="Jharkhand">Jharkhand</option>
   <option value="Kerala">Kerala</option>
   <option value="Madhya Pradesh">Madhya Pradesh</option>
   <option value="Maharashtra">Maharashtra</option>
   <option value="Manipur">Manipur</option>
   <option value="Meghalaya">Meghalaya</option>
   <option value="Mizoram">Mizoram</option>
   <option value="Nagaland">Nagaland</option>
   <option value="Odisha">Odisha</option>
   <option value="Punjab">Punjab</option>
   <option value="Rajasthan">Rajasthan</option>
   <option value="Sikkim">Sikkim</option>
   <option value="Tamil Nadu">Tamil Nadu</option>
   <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
  
</select>
City:   
	<select  name="city" value="<?php echo $row['city']; ?>">
    <option value="Select">Select</option>		
   <option value="Hyderabad">Hyderabad</option>
   <option value="Itangar">Itangar</option>
   <option value="Dispur">Dispur</option>
   <option value="Patna">Patna</option>
   <option value="Raipur">Raipur</option>
   <option value="Bangalore">Bangalore</option>
   <option value="Panaji">Panaji</option>
   <option value="Gandhinagar">Gandhinagar</option>
   <option value="Chandigarh">Chandigarh</option>
   <option value="Shimla">Shimla</option>
   <option value="Ranchi">Ranchi</option>
   <option value="Thiruvananthapuram">Thiruvananthapuram</option>
   <option value="Bhopal">Bhopal</option>
   <option value="Mumbai">Mumbai</option>
   <option value="	Imphal">Imphal</option>
   <option value="Shillong">Shillong</option>
   <option value="Aizawl">Aizawl</option>
   <option value="Kohima">Kohima</option>
   <option value="Bhubaneswar">Bhubaneswar</option>
   <option value="Chandigarh">Chandigarh</option>
   <option value="Jaipur">Jaipur</option>
   <option value="Gangtok">Gangtok</option>
   <option value="Chennai">Chennai</option>
   <option value="Hyderabad">Hyderabad</option>
   <option value="Agartala">Agartala</option>
   <option value="	Lucknow">	Lucknow</option>
   <option value="Dehradun">Dehradun</option>
   <option value="Kolkata">Kolkata</option>
   
   </select><br><br>
    Address:<input type="text"  value="<?php echo $row['address']; ?>"name="address"><br><br>
    <button type="submit" name="update" value="<?php echo $_GET['edit']; ?>">Update</button>

	</form>

</body>
</html>