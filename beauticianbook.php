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
  Tourists Transportation and Guiding Management System for a Travel Agency In Badulla  
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
  background-color :black;
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


 

</style>
</HEAD>

<BODY>

<div style="background-color: Gray;font-style:italic;">
  <center><h5><b>Tourists Transportation and Guiding Management System for a Travel Agency In Badulla.
</h5></center></div>

<!--Nav Bar-->  
<div>


  <nav class="navbar navbar-inverse bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav navbar-nav">
   
    <li class="nav-item" >
  <a class="nav-link" href="beauticianpro.php">My Profile</a>
    </li>
  </ul>
  <ul class="navbar-nav navbar-nav">  
    <li class="nav-item" >
  <a class="nav-link" href="leave_beautician.php">Leave Application</a>
    </li>    
  </ul>

   <ul class="navbar-nav navbar-nav">  
    <li class="nav-item" >
  <a class="nav-link" href="beauticianbook.php">Booking</a>
    </li>    
  </ul>

   <ul class="navbar-nav navbar-nav">  
    <li class="nav-item" >
  <a class="nav-link" href="beauticianmyleave.php">My Leave</a>
    </li>    
  </ul>


  <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><img src="img\logout1.png" width="120px" height="50px"></a></li>
       
      </ul>
</nav>
</div>
<br>
<div class="container-fluid" style="box-shadow:3px 3px 3px 3px silver; margin: auto;
    width: 70%;
    padding: 10px;
    background-color: 4B4872">
<center><h1 style="color: white;">Booking Details</h1></center><br />
<div class="col-40" align="center">
              <div class="thumbnail" class="col-45">
                      <center><b>
<div class="container">
   <table class="table table-striped table-bordered" id="example" style="width: 95%; color: white;">
                <thead>
                  <tr>
                    <th>Number</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Start Date</th>
                    <th>End Date</th>   
                  </tr>
                  <?php
     if (isset($_SESSION['email'])) {
                             $email= $_SESSION['email']; 
                              
       $dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$con = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

        $sql = "SELECT * FROM beautician where dEmail  ='$email'  ";
         $result = $con -> query($sql);          
          if ($result->num_rows>0 ) {
            $i=0;
             while($row = $result->fetch_assoc()) {
                        $beauticianId=$row['beauticianId'];

      $sql2 = "SELECT * FROM booking where beauticianId  ='$beauticianId'  ";
         $result = $con -> query($sql2);          
          if ($result->num_rows>0 ) {
             
            $i=0;
             while($row = $result->fetch_assoc()) {
              $i++;




echo "<tr>";
                              echo "<td>"; echo $i;  echo "</td>";
                              echo "<td>"; echo $row['fullName'];  echo "</td>";
                              echo "<td>"; echo $row['userMail'];  echo "</td>";
                              echo "<td>"; echo $row['startDate'];  echo "</td>";
                               echo "<td>"; echo $row['endDate'];  echo "</td>";
                              
                              echo "</tr>";


          }
        }}
      }}
      ?>
                                 
</thead></table>                      
</div></b></center></div></div></div></b></h5></center></div><br><br><br>           



</BODY>
</HTML>