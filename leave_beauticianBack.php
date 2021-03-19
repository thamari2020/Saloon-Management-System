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

        if(isset($_POST['register1'])){
          $driverId = $_POST['beauticianId']; 
          $dEmail = $_POST['dEmail']; 
          $sdate = $_POST['sdate'];
          $edate = $_POST['edate']; 
 
          $reason = $_POST['reason']; 
                    
          
          $register1_query = "INSERT INTO `leave_beautician`(`leavebeauticianId`,`beauticianId`, `dEmail`, `sdate`, `edate`,`reason`) VALUES ('','$beauticianId', '$dEmail', '$sdate','$edate' ,'$reason')";

          try{
            $register1_result = mysqli_query($conn, $register1_query);
            if(mysqli_affected_rows($conn)>0){
    echo"<script>alert('Successfully');</script>";
    echo '<script>window.location="./leave_beautician.php"</script>';           
            }
            else{
             
            echo"<script>alert('error in apply leave');</script>";
                echo '<script>window.location="./leave_beautician.php"</script>'; 
            }
            
          }
          catch(Exception $ex){
            echo("error".$ex->getMessage());
          }
          }
