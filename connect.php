<?php
include_once 'dbc.php';

//registration of users
if(isset($_POST['submit'])){
	
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$Email=$_POST['Email'];
$password=$_POST['password'];
//encrypting passwords
$hash_pass=password_hash($password, PASSWORD_DEFAULT);
$Regnumber=$_POST['Regnumber'];
$Phonenumber=$_POST['Phonenumber'];
$Gender=$_POST['gender'];
$DOB=$_POST['DOB'];
$Country=$_POST['Country'];
$id=$_POST['id'];
$Tribe=$_POST['Tribe'];
$image=$_FILES['image']['name'];
$image="image/".$image;

if(isset($_POST['yes'])){

$sql="INSERT INTO tech(Firstname, Lastname, Email, password, Regnumber, Phonenumber, Gender, DOB, country, passport, Tribe, image)
 VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
$stmt=$conn->prepare($sql);
$stmt->bind_param("sssssssssiss", $Firstname, $Lastname, $Email, $hash_pass, $Regnumber, $Phonenumber, $Gender, $DOB, $Country, $id, $Tribe, $image);
$stmt->execute();
move_uploaded_file($_FILES['image']['tmp_name'], $image);
echo "<script>alert('successfully registered!')</script>";
echo "<script>window.open('../aboutUs.php', '_self')</script>";
}else{
	echo "<script>alert('Agree to terms and conditions!')</script>";
echo "<script>window.open('../index.php', '_self')</script>";
}
}

?>