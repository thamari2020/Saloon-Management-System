<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ttgms";

        try{
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          echo("successful in connection");
        }

        catch(MySQLi_Sql_Exception $ex){
          echo("error in connection");
        }

        if(isset($_POST['register'])){
          $fName = $_POST['fName']; 
          $lName = $_POST['lName']; 
          $uNIC = $_POST['uNIC']; 
          $uAge = $_POST['uAge']; 
          $userMail = $_POST['userMail']; 
          $password = $_POST['password']; 
          $userType = "Customer";

          
          
      $pss = md5($password);
          $register_query = "INSERT INTO `user`(`uId`,`fName`, `lName`, `uNIC`, `uAge`, `userMail`, `password`) VALUES ('','$fName', '$lName', '$uNIC', '$uAge', '$userMail', '$pss')";
          $register_query1 = "INSERT INTO `login`(`loginId`,`email`, `password`, `UserType`) VALUES ('','$userMail', '$password','$userType')";

          try{
            $register_result = mysqli_query($conn, $register_query);
              $register_result = mysqli_query($conn, $register_query1);
            if(mysqli_affected_rows($conn)>0){
              echo '<script>alert("registration successful")</script>';
        echo '<script>window.location="./L_services.php"</script>';

              
            }
            else{
             
            echo"<script>alert('error in registration');</script>";
            }
            
          }
          catch(Exception $ex){
            echo("error".$ex->getMessage());
          }
          }

        ?>