
<?php
$name=$_POST['fullname'];
$number=$_POST['mobileno'];
$organs=$_POST['organs'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood'];
$address=$_POST['address'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address) values('{$name}','{$number}','{$organs}','{$age}','{$gender}','{$blood_group}','{$address}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
header("Location: http://localhost/PROJECT/ODMS/admin/donor_list.php");

mysqli_close($conn);
 ?>
