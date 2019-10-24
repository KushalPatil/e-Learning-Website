<?php
include 'connect.php';
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['DOB'];
$gender=$_POST['gender'];


$sql_users ="INSERT INTO details(Email,Username,password,dob,gender)VALUES('$email','$name','$password','$dob','$gender')";
if(mysqli_query($connect,$sql_users))
{
 echo "Registeration Successful";
}
else
{
echo "Registeration unsuccessful,please try again";
}
echo '<br>';

?>