<?php
// $id=$_POST["id"];
$fname=$_POST['firstname'];

$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$occupation=$_POST['occupation'];
$home=$_POST['hometype'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$password=$_POST['password'];
// $datetoday=$_POST['datetoday'];

$con=mysqli_connect("localhost","root","");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " ;
   mysqli_connect_error();
  }
mysqli_select_db($con,"interiordesign");
$sql = "INSERT INTO client(FirstName, Age, Gender, Address_living, Occupation, HomeType, PhoneNum, Email, Pass)
VALUES ('$fname', $age, '$gender', '$address', '$occupation', '$home', '$phno', '$email', '$password')";

if (mysqli_query($con, $sql)) {
	echo '<script>alert("Account added")</script>' ;
    $_SESSION['email'] = $email;
            header('Location: index.php');
			
} else {
    echo "<script>alert('Error Occuring ,Please check your details again');</script>".$sql."<br>".mysqli_error($con);
}
mysqli_close($con);
?>
<!--  -->

<!-- id to 1 again -->
<!-- set @autoid:=0;
update client set id = @autoid:=(@autoid+1);
alter table client Auto_increment = 1; -->