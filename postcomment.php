<?php

$con = mysqli_connect("localhost","root","","ttgms");

$name=$_POST["name"];
$comment=$_POST["comment"];
$comment_length=strlen($comment);

$res= mysqli_query($con,"INSERT into comments VALUES('','$name','$comment')");

if($res){
	echo "<script>alert('Successfully Comment');</script>";
	header("location:../about.php");
}
else{
	echo "<script>alert('Try Again');</script>";
}


?>