<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
if(!isset($_SESSION['email'])){
  $email=$_SESSION['email'];
  header("location:./login.php");
}
?>

<HTML lang="en">
<HEAD>
  <TITLE>
  SALON PRO
  </TITLE>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  

<!-- CUSTOM STYLE CSS -->
    <link href="ass\style.css" rel="stylesheet" />


      <style>

      * {
          box-sizing: border-box;
        }
  
@media screen and(min-width:600px ){
  #image{
      flex:50%;
      max-width: 50%;
      }
  }

@media screen and(max-width:800px ){
  #image{
      flex:100%;
      max-width: 100%;
      }
  }

.div1 {
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.image {
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
  background-color :white;
  flex-wrap: nowrap;
}

.img:hover{
transform: scale(1.15);
}
.img{
    margin-top: 10px;
 }

.full {
 
    width: 100%; 
 
}
 
 
 
.footer {
 
                height: auto;
 
                padding-bottom: 30px;
 
                position: relative;
 
                width: 100%;
 
                 color:green;
 
                border-bottom: 1px solid #CCCCCC;
 
                border-top: 1px solid #DDDDDD;
 
                background: #ffffff;
 
                background: -webkit-linear-gradient(to right, #000000, #ffffff); 
 
                background: linear-gradient(to right, #000000, #ffffff);   
 
}
 
 
 
 
 

.footer ul {
 
                font-size: 13px;
 
                list-style-type: none;
 
                margin-left: 0;
 
                padding-left: 0;
 
                margin-top: 15px;
 
                color: #000000;
 
}


li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: gray;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
div1{
  padding-right:100px;
}

</style>
</HEAD>

<body style="background-color: #FFC0CB; ">

<div style=" color: black; font-style:italic;">
  <center><h3><b>SALON PRO
</h3></center></div>
<!--Nav Bar-->  
<div>
  <nav class="navbar navbar-inverse bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav navbar-nav">
   
    <li class="nav-item" >
    <a class="nav-link active" href="L_Home.php">Home</a>
    </li>
  </ul>
  <ul class="navbar-nav">  
    <li class="nav-item" >
 <a class="nav-link active" href="L_services.php">Services</a>
   </li>    
  </ul>

<ul class="navbar-nav">  
    <li class="nav-item" >
 <a class="nav-link active" href="L_Package.php">Package</a>
   </li>    
  </ul>


    
    <li class="dropdown">
    <a href="L_Gallery.php" class="dropbtn">Gallery</a>
    <div class="dropdown-content">
      <a href="L_haircut.php">Haircut</a>
      <a href="L_haircolouring.php">Hair Colouring</a>
      <a href="L_hairtreatment.php">Hair Treatment</a>
    <a href="L_facial.php">Facial </a>
    <a href="L_makeup.php">Makeup</a>
    <a href="L_manicure.php">Manicure</a>

    </div>
    </li> 

   <ul class="navbar-nav">  
    <li class="nav-item" >
   <a class="nav-link active" href="L_about.php">About Us</a>
     </li>    
  </ul>

    <li class="dropdown">
    <a href="" class="dropbtn">Cancel Booking</a>
    <div class="dropdown-content">
      <a href="L_Cancelbooking.php">Services</a>
    <a href="L_Cancelpackages.php">Package</a>   
    </div>
    </li> 
  </ul>
   <ul class="navbar-nav">
   </ul>
      <ul class="navbar-nav">
      </ul>
       <ul class="navbar-nav">
   </ul>
  
 <ul class="nav navbar-nav navbar-right">
                    <?php
     if (isset($_SESSION['email'])) {
                             $email= $_SESSION['email']; 
                              
       $dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$con = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

        $sql = "SELECT * FROM user where userMail  ='$email'  ";

         $result = $con -> query($sql);

          
                      if ($result->num_rows>0 ) {


                        $i=0;


                        while($row = $result->fetch_assoc()) {
                            $i++;
?>
<div>
 <li><a class="nav-link active" href="mypro.php"><?php echo "<img src=in/upload/".$row['Image']." width=70px height=50px alt=profile> ";?></a></li>
</div>

<?php
          }
        }}
      ?>

     
  </li>
       
      </ul>
  <ul class="nav navbar-nav navbar-right">
      <li><a class="nav-link active" href="logout.php"><img src="img\logout1.png" width="120px" height="45px" /></a>
  </li>
       
      </ul>
          <ul class="navbar-nav">
      </ul>
</nav>
    
</div>
<br>
<div class="container-fluid" style="box-shadow:3px 3px 3px 3px silver; margin: auto;
    width: 50%;

    padding: 10px;
    background-color: 4B4872">

<div class="col-40" align="center">
              <div class="thumbnail" class="col-45">
                      <center><b>
<div class="container">
                  <?php
     if (isset($_SESSION['email'])) {
                             $email= $_SESSION['email']; 
                              
       $dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$con = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

        $sql = "SELECT * FROM user where userMail  ='$email'  ";

         $result = $con -> query($sql);

          
                      if ($result->num_rows>0 ) {


                        $i=0;


                        while($row = $result->fetch_assoc()) {
                            $i++;
?>
<div>
<?php echo "<img src=in/upload/".$row['Image'].">";?>
</div>
<br><br>

                      
           <div class="input-group">
     <span class="input-group-addon" style="color:white">First Name &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="fName" type="text" class="form-control" name="fName" placeholder="Name"  readonly value="<?php echo $row['fName'];?>" required autofocus> </div>
      <br>


           <div class="input-group">
     <span class="input-group-addon" style="color:white">Last Name &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="lName" type="text" class="form-control" name="lName" placeholder="Name"  readonly value="<?php  echo $row['lName'];  ?>" required autofocus> </div>
      <br>


       <div class="input-group">
     <span class="input-group-addon" style="color:white">NIC  &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="uNIC" type="text" class="form-control" name="uNIC" placeholder="dNIC"  readonly value="<?php echo $row['uNIC'];  ?>" required autofocus> </div>
      <br>

        <div class="input-group">
     <span class="input-group-addon" style="color:white">Email  &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="userMail" type="text" class="form-control" name="userMail" placeholder="Email"  readonly value="<?php echo $row['userMail'];  ?>" required autofocus> </div>
      <br>
                 
 <div>
<a href="useredit.php"><img src="img\edit.png" width="100px" height="50px"></a>
 </div>                             
  <?php
          }
        }}
      ?>



      <br><br><u><b><h3 style="color: white">Service Booking Details</h3></b></u>
      <br>       

 <?php
     if (isset($_SESSION['email'])) {
                             $email= $_SESSION['email']; 
                              
       $dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$con = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

        $sql = "SELECT * FROM booking where userMail  ='$email'  ";

         $result = $con -> query($sql);

          
                      if ($result->num_rows>0 ) {


                        $i=0;


                        while($row = $result->fetch_assoc()) {
                            $i++;
?>


                      
           <div class="input-group">
     <span class="input-group-addon" style="color:white">Booking ID &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="bId" type="text" class="form-control" name="bId" placeholder="bId"  readonly value="<?php echo $row['bId'];?>" required autofocus> </div>
      <br>

    <div class="input-group">
     <span class="input-group-addon" style="color:white">Start Date&nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="startDate" type="text" class="form-control" name="startDate" placeholder="startDate"  readonly value="<?php echo $row['startDate'];?>" required autofocus> </div>
      <br>

          <div class="input-group">
     <span class="input-group-addon" style="color:white">End Date &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="endDate" type="text" class="form-control" name="endDate" placeholder="endDate"  readonly value="<?php echo $row['endDate'];?>" required autofocus> </div>
      <br>

    <div class="input-group">
     <span class="input-group-addon" style="color:white">Amount &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="total" type="text" class="form-control" name="total" placeholder="total"  readonly value="Rs <?php echo $row['total'];?>" required autofocus> </div>
      <br>
<?php
}

}else
{
  echo "There is no any Service Booking";
}
}
?> 



      <br><br><u><b><h3 style="color: white">Package Booking Details</h3></b></u>
      <br>       

 <?php
     if (isset($_SESSION['email'])) {
                             $email= $_SESSION['email']; 
                              
       $dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$con = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

        $sql = "SELECT * FROM package_booking where email  ='$email'  ";

         $result = $con -> query($sql);

          
                      if ($result->num_rows>0 ) {


                        $i=0;


                        while($row = $result->fetch_assoc()) {
                            $i++;
?>


                      
           <div class="input-group">
     <span class="input-group-addon" style="color:white">Package Booking ID &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="pBookingId" type="text" class="form-control" name="pBookingId" placeholder="pBookingId"  readonly value="<?php echo $row['pBookingId'];?>" required autofocus> </div>
      <br>

    <div class="input-group">
     <span class="input-group-addon" style="color:white">Start Date&nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="startDate" type="text" class="form-control" name="startDate" placeholder="startDate"  readonly value="<?php echo $row['startDate'];?>" required autofocus> </div>
      <br>

          

    <div class="input-group">
     <span class="input-group-addon" style="color:white">Pakage Type &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="pakageType" type="text" class="form-control" name="pakageType" placeholder="pakageType"  readonly value="<?php echo $row['pakageType'];?>" required autofocus> </div>
      <br>
<?php
}

}else
{
  echo "There is no any Package Booking";
}
}
?>      
<br /><br/>                 
</div></b></center></div></div></div></b></h5></center></div><br><br><br>

                                 


</BODY>
</HTML>