<?php
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$conn = mysqli_connect("localhost", "root","", "nomad");

$Username = stripcslashes($Username);
$Password = stripcslashes($Password);
$Username = mysqli_real_escape_string($conn,$Username);
$Password = mysqli_real_escape_string($conn,$Password);


//mysqli_select_db($mysqli,$nomad);

$result = mysqli_query($conn, "select * from loginform where Username = '$Username' and Password ='$Password'")
or die("Aldaa garlaa".mysqli_error($conn));

$row = mysqli_fetch_array($result);
if($row['Username']== $Username && $row['Password']== $Password){
   // echo"Amjilttai nevterlee".$row['Username'];
    header("location:index.php");
}else{
    echo"Aldaa garlaa dahin oroldnu";
}
?>