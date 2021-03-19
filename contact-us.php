<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
if(!isset($_SESSION['email'])){
  $email=$_SESSION['email'];
  header("location:./login.php");
}
?>
<?php 
	
	// checking if the form is submit
	if ( isset($_POST['register']) ) {
		
		$email		= $_POST['email'];
		

		$to	 		  = $email;
		$mail_subject = 'Message from Tourist Transportation and Guiding Management System in Badulla';
		$email_body   = "Thank you </b>  for your booking and that you have chosen our Travel Agency.<br>";
		$email_body   .= "We inform about booking package week before trip<br>";
		$email_body   .= "Please note that you can make change your profile or cancellations of your booking, through our web site.<br>
		                  If you cancel your booking in time,we will charge you no fees.Otherwise,the full booking amount (100%) is due. 
						  ";
		
		$email_body   .= "<br>contact details:0718949467<br>";
		$email_body   .= "Email:tom99791@gmail.com";
		$header       = "From: {$email}\r\nContent-Type: text/html;";

		$send_mail_result = mail($to, $mail_subject, $email_body, $header);

		if ( $send_mail_result ) {
			echo "Message Sent.";
		} else {
			echo "Message Not Sent.";
		}
	}
 ?>
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
          
          $email = $_POST['email']; 
          $cBookingId = $_POST['cBookingId']; 
          $reason = $_POST['reason']; 
          
          
          
          $register_query = "INSERT INTO `cbooking`(`bId`,`email`, `cBookingId`, `reason`) VALUES ('','$email','$cBookingId','$reason')";
		  $register_query1 = "Delete from cbooking where cBookingId =$cBookingId";
		 
          try{
               $register_result = mysqli_query($conn, $register_query);
			   $register_result = mysqli_query($conn, $register_query1);
            if(mysqli_affected_rows($conn)>0){
              echo '<script>alert("package booking is Successfully !!")</script>';
        echo '<script>window.location="contact-us.php"</script>';
}
            else{
             
            echo"<script>alert('error in Booking');</script>";
 echo '<script>window.location="contact-us.php"</script>';
            }
            
          }
          catch(Exception $ex){
            echo("error".$ex->getMessage());
          }
          }

        ?>
<HTML lang="en">
<HEAD>
  
<!--Nav Bar-->  

</b></h5></center>
<br />
<div >
<div class="container-fluid" style="box-shadow:3px 3px 3px 3px silver; margin: auto;
    width: 35%;
    padding: 10px; background-color: #0a2e4f; color:white;">

<div class="col-15">
              <div class="thumbnail" style="width:100%",>
                    <center><b>
                  <center><div class="col-md-12 col-sm-12 alert-info">
                           <br> <h3>Cancel Packages Booking</h3>
                           
                    </div></center>
                  
                        <form class="form-horizontal w3-left w3-border " id="register-form1" method="post" action="contact-us.php">
                        <br>                      

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:gray">E-mail :- </span><input id="email" type="email" class="form-control" name="email" placeholder="E-mail" required autofocus> </div></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:gray">Booking ID:- </span><input id="address" type="text" class="form-control" name="cBookingId" placeholder="pBookingId" required autofocus><center></div><span style="color:gray"><small>[Refer the conformation mail]</small></span></center></div><br>

                        <div class="col-lg-30">
                        <div class="input-group">
                            <span style="color:gray">Reason for Cancel :- </span><input id="address" type="text" class="form-control" name="reason" placeholder="Reason for Cancel" required autofocus></div></div><br>
                                
                        <button type="submit" name="register" class="btn btn-info btn-block">Submit
                                </button>

                                <input type="reset"  value="clear" class="btn btn-info btn-block">
                                </form>
                              </div></div></form></b></center></div></div></div></div>


      </div>
    </div>
  </div>
							  

</div>
</BODY>
</HTML>