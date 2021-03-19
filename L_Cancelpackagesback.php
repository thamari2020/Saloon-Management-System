<?php

$a = $_POST["email"];
$b = $_POST["pBookingId"];
$d = $_POST["reason"];

$con = mysqli_connect("localhost","root","","ttgms");


$res = mysqli_query($con,"insert into cpackages values('','$a','$b','$d')");
$res1 = mysqli_query($con,"delete from package_booking where pBookingId ='$b' ");

if($res){
	 echo '<script>alert("Cancel Package Successfully !!")</script>';
        echo '<script>window.location="L_Cancelpackages.php"</script>';
}else{
	echo"<script>alert('There is an error')</script>";
	echo '<script>window.location="L_Cancelpackages.php"</script>';
}


?>


