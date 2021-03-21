<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ttgms";
        $login_id = "";
        try{
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          
        }

        catch(MySQLi_Sql_Exception $ex){
          echo("error in connection");
        }

        if(isset($_POST['register'])){
          $fullName = $_POST['fullName'];
          $BabarId = $_POST['BabarId'];
          $beauticianId = $_POST['beauticianId'];
          $consultantId = $_POST['consultantId'];
          $startDate = $_POST['startDate']; 
          $endDate = $_POST['endDate'];            
          $userMail = $_POST['userMail']; 
          $total  = $_POST['total']; 
                   if($total == 0){
        echo"<script>alert('Select Our Services');</script>";
        echo '<script>window.location="./L_Transportation.php"</script>'; 
   
                   }else{
          
          $register_query = "INSERT INTO `booking`(`bId`,`fullName`, `BabarId`, `beauticianId`, `consultantId`, `startDate`, `endDate`,`userMail`,`total`) VALUES ('','$fullName', '$BabarId', '$beauticianId', '$consultantId', '$startDate', '$endDate','$userMail','$total')";



          try{
            $register_result = mysqli_query($conn, $register_query);





            if(mysqli_affected_rows($conn)>0){


              $query_login = "select loginId from login where email = '{$userMail}'";
              $login_res = mysqli_query($conn, $query_login);
              $row = mysqli_fetch_array($login_res);
              
               $login_id = $row[0];
               
                $update_selected = "UPDATE category_selected SET booked='1' WHERE user_id = '{$login_id}'";
                $cat_res = mysqli_query($conn, $update_selected);


              echo"<script>alert('Succefully Booking');</script>";
        echo '<script>window.location="./L_Bill.php"</script>'; 
            

             
            }
            else{
             
            echo"<script>alert('error in Booking');</script>";
                 echo '<script>window.location="./CheckOutForm.php"</script>';

            }
            
          }
          catch(Exception $ex){
            echo("error".$ex->getMessage());
          }
          }
}
        ?>