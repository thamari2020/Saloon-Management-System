<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ttgms";

        try{
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          
        }

        catch(MySQLi_Sql_Exception $ex){
          echo("error in connection");
        }

        if(isset($_POST['register'])){
          $fullname = $_POST['fullname']; 
          $email = $_POST['email']; 
          $pakageType = $get=$_POST['pakageType'];
          $address = $_POST['address']; 
          $phoneNum = $_POST['phoneNum']; 
          $startDate = $_POST['startDate']; 
          
          
          $register_query = "INSERT INTO `package_booking`(`pBookingId`,`fullname`, `email`, `pakageType`, `address`, `phoneNum`, `startDate`) VALUES ('','$fullname','$email','$pakageType','$address','$phoneNum','$startDate')";

          try{
               $register_result = mysqli_query($conn, $register_query);
            if(mysqli_affected_rows($conn)>0){
              echo '<script>alert("package booking is Successfully !!")</script>';
        echo '<script>window.location="L_Package.php"</script>';
}
            else{
             
            echo"<script>alert('error in Booking');</script>";
 echo '<script>window.location="L_packageBooking.php"</script>';
            }
            
          }
          catch(Exception $ex){
            echo("error".$ex->getMessage());
          }
          }

        ?>