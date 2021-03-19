	<?php

		
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);


		if($_SERVER["REQUEST_METHOD"] == "POST"){

   
    	if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){

       			 $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
       			 $filename = $_FILES["photo"]["name"];
       			 $filetype = $_FILES["photo"]["type"];
       			 $filesize = $_FILES["photo"]["size"];
       			 $mealid = $_POST['vId'];

			

				$dName= $_POST['dName'];

                $dEmail= $_POST['dEmail'];

                $dPhoneNo=$_POST['dPhoneNo'];

                $dAge=$_POST['dAge'];

                $dqualification= $_POST['dqualification'];

                $password =$_POST['password'];
                $fees = $_POST['fees'];
      $userType = "beautician";
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                
               $sql = "INSERT INTO beautician (beauticianId, dName,dEmail,dPhoneNo,dAge,dqualification,password,Image,fees) VALUES('','$dName','$dEmail','$dPhoneNo','$dAge','$dqualification','$password','$filename','$fees');";
				echo $sql;

                 $register_query1 = "INSERT INTO `login`(`loginId`,`email`, `password`, `UserType`) VALUES ('','$dEmail', '$password','$userType')";
echo $register_query1;

			mysqli_query($conn,$sql);
		mysqli_query($conn,$register_query1);
               echo"<script>alert(' Successfully');</script>";
        echo '<script>window.location="./add_beautician.php"</script>'; 
    
               
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}


	
