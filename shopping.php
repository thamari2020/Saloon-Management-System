<?php 

session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
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

.phara{
	 column-count:3;
	 
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
      </head>
      <body style="background-color: white;">
	  
       <div style=" color: black; font-style:italic;">
  <center><h3><b>Tourists Transportation and Guiding Management System for a Travel Agency In Badulla.
</h3></center></div>
<!--Nav Bar-->  
<div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="Home.php">Home</a>
    </li>
 
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
  

    <li class="nav-item">
      <a class="nav-link active" href="Transportation.php">Transport</a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link active" href="guide.php">Guide</a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
 
     <li class="nav-item">
      <a class="nav-link active" href="driver.php">Driver</a>
    </li>

	
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
     <li class="nav-item">
      <a class="nav-link active" href="package.php">Package</a>
    </li>

  
    
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    
	  <li class="dropdown">
    <a href="places.php" class="dropbtn">Tourist Attraction Places</a>
    <div class="dropdown-content">
      <a href="place1.php">Dunhida</a>
      <a href="place2.php">Muthiyanganaya</a>
      <a href="place3.php">Ella Rock</a>
	  <a href="place4.php">Madolsima </a>
	  <a href="place5.php">Narangala</a>
	  <a href="place6.php">Dova</a>
	  <a href="place7.php">Nine-Arch</a>
	  <a href="place8.php">Namunukula</a>
    </div>
    </li>
 
    
     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    
      <li class="nav-item">
      <a class="nav-link active" href="about.php">About Us</a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
   
 <li class="nav-item" >
      <a class="nav-link active" href="cancelbooking.php">Cancel Booking</a>
    </li>


     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
   <li class="nav-item" >
      <a class="nav-link active" href="shopping.php"><img src="img\add.png" /></a>
    </li>


     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    <li class="nav-item" >
  <a class="nav-link active" href="login.php"><img src="img\log.png" /></a>
    </li>

     <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>

    </li>
  </ul>
</nav>
</div>
</b></h5></center>
<br>
<center>
			<div style="background-color: #0a2e4f; color:white; width: 80%; clear:both">
			<br />
			<h3><u>Booking Details</u></h3>
			<div class="table-responsive">
        <div class= "container">
				<table style = "color:white;"class="table table-bordered">
					<tr>
						<th width="40%">Details</th>						
						<th width="20%">Price</th>
						<th width="15%">Action</th>
					</tr>
					<?php
          $total = 0;
					if(!empty($_SESSION["vehicle"]))
					{
						
						foreach($_SESSION["vehicle"] as $keys => $values)
						{
					?>
					<tr>
						<td>Transportation Id :- <?php echo $values["vId"]; ?></td>
						
						<td>Rs <?php echo $values["fees"]; ?></td>
						
						<td><a href="Transportation.php?action=delete&id=<?php echo $values["vId"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>

					<?php
							$total = $total + $values["fees"] ;
						}
					
					}


          if(!empty($_SESSION["guide"]))
          {
                      foreach($_SESSION["guide"] as $keys => $values)
            {
          ?>
          <tr>
            <td>Guide Id :- <?php echo $values["guideId"]; ?></td>
            
            <td>Rs <?php echo $values["fees"]; ?></td>
            
            <td><a href="guide.php?action=delete&id=<?php echo $values["guideId"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
          <?php
             $total = $total + $values["fees"] ;
            }
            
          
          }


          if(!empty($_SESSION["driver"]))
          {
          
            foreach($_SESSION["driver"] as $keys => $values)
            {
          ?>
          <tr>
            <td>Driver Id :- <?php echo $values["driverId"]; ?></td>
            
            <td>Rs <?php echo $values["fees"]; ?></td>
          
            <td><a href="driver.php?action=delete&id=<?php echo $values["driverId"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
          <?php
              $total = $total + $values["fees"] ;
            }

          }

					?>
				<tr>
            <td colspan="2" align="right">Total</td>
            <td align="right">Rs. <?php echo number_format($total, 2); ?></td>
            
          </tr>
         
            
        </table>
        </form>
          <!--end search bar-->                                 
           
			<div class="text-right">
  
      
           <a href = "login.php"> <button type="button" class="btn btn-success">Booking Form</button></a>
                    </div></center>
 <br />   </div>
</div>

</b></h5></center></div>




<footer>

    <div class="footer" id="footer">
 
        <div class="container">
 
            <div class="row">
 
                <div class="col-lg-3  col-md-3 col-sm-5 col-xs-7">
 
                    <h3> Services </h3>
 
                    <ul>
 
                        <li> <a href="#"> Trasportation </a> </li>
 
                        <li> <a href="#"> Guide </a> </li>
 
                        <li> <a href="#"> Driver</a> </li>
 
                        
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
<ul><li><b><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></b></li></ul>
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