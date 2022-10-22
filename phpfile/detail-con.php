<?php
$email= $_POST['em'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];
$q11=$_POST['q11'];
$q12=$_POST['q12'];
$q13=$_POST['q13'];
$q14=$_POST['q14'];
$q15=$_POST['q15'];
$q16=$_POST['q16'];



// $datetoday=$_POST['datetoday'];

$con=mysqli_connect("localhost","root","");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " ;
   mysqli_connect_error();
  }
mysqli_select_db($con,"interiordesign");
$sql = "INSERT INTO details(email,q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16)
VALUES ('$email','$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$q13', '$q14', '$q15', '$q16')";

if (mysqli_query($con, $sql)) {
	echo '<script>alert("Account added")</script>' ;
    $_SESSION['id'] = $id;
            header('Location: index.php');
  echo"<script>alert('done');</script>";
			
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