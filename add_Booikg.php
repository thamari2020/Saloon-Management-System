<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
if(!isset($_SESSION['email'])){
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

  table,th,td
    {
      border:2px solid red;
    }
    table
    {
      border-collapse:collapse;
      width:20%;
    }
    td
    {
      height:40px;
    }
    tr
    {
      background-color:green;
      color:white;
    }
    th
    {
      background-color:yellow;
      color:black;

 
	}
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

<body style="background-color: #FFC0CB; ">
<div style=" color: black; font-style:italic;">
  <center><h3><b>SALON PRO
</h3></center></div>

<!--Nav Bar-->  
<div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="add_home.php">Home</a>
    </li>
 
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    
        

 
    
    <li class="nav-item">
      <form action="add_Babar.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Babar" name="submit">
                  
             </form>
      
    </li>

   
 
     <li class="nav-item">
       <form action="add_beautician.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Beautician" name="submit">
                  
             </form>
    </li>
  
   
    
     <li class="nav-item">
        <form action="add_package.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Package" name="submit">
                  
             </form>
    </li>
   
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
  <li class="nav-item">
    <form action="add_newBabar.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="New Babar" name="submit">
                  
             </form>
      
    </li>
 
    
      <li class="nav-item">
        <form action="add_newbeautician.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="New beautician" name="submit">
                  
             </form>
     
    </li>


   
 <li class="nav-item" >
       <form action="add_cancelbooking.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Cancel Booking" name="submit">
                  
             </form>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>

   <li class="nav-item" >
       <form action="add_Booikg.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Booking" name="submit">
                  
             </form>
    </li>

 <li class="nav-item" >
       <form action="add_leavebeautician.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="beautician Leave" name="submit">
                  
             </form>
    </li>


     <li class="nav-item" >
       <form action="add_leaveBabar.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Babar Leave" name="submit">
                  
             </form>
    </li>

 <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    <li class="nav-item" >
  <a class="nav-link" href="logout.php">Log Out</a>
    </li>
    
    </li>
  </ul>
</nav>
</div>

    </div>
<center>

  <h1> <u>Booking</u> </h1>
          <div class="col-sm-12">
            
          </div>


                      <br /><br /><br />
          <div id="result">
            


          </div>                    
          <!--end search bar-->                                 
            <div class="row  w3-margin" >
              <div class ="container">
              <table class="table table-striped table-bordered" id="example" style="width: 95%;">
                <thead>
                  <tr>
                    <th>Booking ID</th>                    
                    <th>Full Name</th>
                    <th>Babar Id</th>
                    <th>beautician ID</th>
                    <th>consultant ID</th> 
                    
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>User Mail</th>
                    <th>Price</th>  
                  </tr>

                    <?php 
                      if(isset($_POST["submit"])) {
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

                        $sql = "SELECT * FROM booking";

                      $result = $conn -> query($sql);

          
                      if ($result->num_rows>0 ) {


                        $i=0;


                        while($row = $result->fetch_assoc()) {
                            $i++;

                          echo "<tr>";
                              echo "<td>"; echo $row['bId'];  echo "</td>";
                              echo "<td>"; echo $row['fullName'];  echo "</td>";
                              echo "<td>"; echo $row['BabarId'];  echo "</td>";
                              echo "<td>"; echo $row['beauticianId'];  echo "</td>";
                              echo "<td>"; echo $row['consultantId'];  echo "</td>";
                              
                              echo "<td>"; echo $row['startDate'];  echo "</td>";
                              echo "<td>"; echo $row['endDate'];  echo "</td>";
                              echo "<td>"; echo $row['userMail'];  echo "</td>";
                              echo "<td>"; echo $row['total'];  echo "</td>";
                              echo "<td>";
                              echo "<button type='button' class='btn btn-danger'> <a style='color:white;text-decoration:none;'href='admin_booking_delete.php?id={$row["bId"]}'>Delete </a></button>";
                              echo "</td>";
                            
                              echo "</tr>";
                            }


                      }


                        }






                      
                    ?>
                </thead>
              </table>
            </div>  
        </div>
      </div>                </div></b></h5></center></div>

</div>
                  <footer>

 
    <div class="footer" id="footer">
 
        <div class="container">
 
            <div class="row">
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> Services </h3>
 
                    <ul>
 
                        <li> <a href="#"> Trasportation </a> </li>
 
                        <li> <a href="#"> Babar </a> </li>
 
                        <li> <a href="#"> beautician</a> </li>
 
                        
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> About </h3>
 
                    <ul>
 
                        <li> <a href="#"> Our Company </a> </li>
 
                        <li> <a href="#"> About Us </a> </li>
 
                        <li> <a href="#"> Terms of Services </a> </li>
 
                        <li> <a href="#"> Our Team </a> </li>
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> Contact </h3>
 
                    <ul>
 
                       <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
 
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-7 ">
 
                    <h3> Rating  </h3>
 
 
      <div class="rating">
<ul><li><b><span>???</span><span>???</span><span>???</span><span>???</span><span>???</span></b></li></ul>
</div>     
          </div>
 
            </div>
 
        </div>
 
        
    </div>
 
       </div>
</footer>
</div>

</BODY>
</HTML>