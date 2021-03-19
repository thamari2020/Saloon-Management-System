<?php

$a = $_POST["email"];
$b = $_POST["cBookingId"];
$d = $_POST["reason"];

$con = mysqli_connect("localhost","root","","ttgms");


$res = mysqli_query($con,"insert into cbooking values('','$a','$b','$d')");
$res1 = mysqli_query($con,"delete from booking where bId ='$b' ");

if($res){
	 echo '<script>alert("Cancel Service Successfully !!")</script>';
        echo '<script>window.location="L_Cancelbooking.php"</script>';
}else{
	echo"<script>alert('There is an error')</script>";
	echo '<script>window.location="L_Cancelbooking.php"</script>';
}


?>

