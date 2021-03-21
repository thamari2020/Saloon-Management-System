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



 #frmCheckUsername {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
.demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}

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
 <li><a class="nav-link active" href="mypro.php"><?php echo "<img src=in/upload/".$row['Image']." width=80px height=50px alt=profile> ";?></a></li>
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
<!--Nav Bar-->  
<div class="container-fluid" style="box-shadow:3px 3px 3px 3px silver; margin: auto;
    width: 80%;
    padding: 10px;
    background-color: 4B4872;margin-top:40px">
<div class="row justify-content-center">
  <!-- <div style="background-color: #0a2e4f; color:white; width: 80%; clear:both"> -->
			<br />
			<h2 style="color: white;"><u>Booking Details</u></h2>
			<div class="table-responsive p-3">
				<table style = "color:white;"class="table table-bordered">
					<tr>
						<th width="40%">Details</th>						
						<th width="20%">Price</th>
						<th width="15%">Action</th>
					</tr>

<?php 

$total_cat = 0.0;
$category_array = array();
$query_fm = "SELECT * FROM category_selected";
$fms = mysqli_query($con, $query_fm);
if($fms){
    while ($fm = mysqli_fetch_assoc($fms)) {
      $total_cat = $total_cat + $fm['category_price'];
      $category_array[] = $fm['category_selected'];
?>
<tr>
        <td ><?php echo $fm['category_name'];?></td>
        <td>Rs.<?php echo $fm['category_price'];?>/=</td>
        <td class = "text-center" >
                <form method="post" action="L_servicesBackCat.php">
                <input type="hidden" name="category_id" value="1"></input>
                <input type="hidden" name="user_id" value="1"></input>
                    <button class="btn btn-danger" name="select_cat">remove</button>
                </form>
            </td>
</tr>

<?php
    }
  }

?>

<tr>
						<th width="40%">Total</th>						
						<th width="20%">Rs.<?php echo $total_cat; ?>/=</th>
					</tr>
            
        </table>
        </div>
  </div>
</div>
<center><br>
<div class="container-fluid" style="box-shadow:3px 3px 3px 3px silver; margin: auto;
    width: 80%;
  height:900px;
    padding: 10px;
    background-color: 4B4872;">
<br />

<!-- <h2 style="color: white;"><u>Booking Details</u></h2> -->
      
      <div class="table-responsive">
        <form   id="add_meal" method="POST" action="BookingBack.php" enctype="multipart/form-data">
        <table class="table table-bordered" style="color: white;">
          <tr style="color: white;">
            <th width="40%">Details</th>            
            <!-- <th width="20%">Price</th> -->
            <th width="15%">Action</th>
          </tr>
          <?php
          $total = 0;
          $consultantId = 0;
          $BabarId = 0;
          $beauticianId = 0;
          if(!empty($_SESSION["consultant"]))
          {
            
            foreach($_SESSION["consultant"] as $keys => $values)
            {
          ?>
          <tr>
            <td>Transportation Type :- <?php echo $values["vName"]; ?></td>
            
            <!-- <td>Rs <?php echo $values["fees"]; ?></td> -->
            
            <td><a href="L_CheckOutForm.php?action=delete&id=<?php echo $values["consultantId"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
<div class="w3-padding">

     <input class="w3-input w3-border" name="consultantId" type="hidden" value="<?php echo $values["consultantId"]; ?>"  id="consultantId"></div>   
    
          <?php
              $total = $total + $values["fees"] ;
              $consultantId = $values["consultantId"] ;
            }
          
          }


          if(!empty($_SESSION["Babar"]))
          {
                      foreach($_SESSION["Babar"] as $keys => $values)
            {
          ?>
          <tr>
            <td>Babar Name :- <?php echo $values["gName"]; ?></td>
            
            <!-- <td>Rs <?php echo $values["fees"]; ?></td> -->
            
            <td><a href="L_CheckOutForm.php?action=delete&id=<?php echo $values["BabarId"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
              <div class="w3-padding">
   
     <input class="w3-input w3-border" name="BabarId" type="hidden" value="<?php echo $values["BabarId"]; ?>"  id="BabarId"></div>   
     
          <?php
             $total = $total + $values["fees"] ;
              $BabarId = $BabarId;
              $consultantId = $consultantId ;
            }
            
          
          }


          if(!empty($_SESSION["beautician"]))
          {
          
            foreach($_SESSION["beautician"] as $keys => $values)
            {
          ?>
          <tr>
            <td>beautician Name :- <?php echo $values["dName"]; ?></td>
            
            <!-- <td>Rs <?php echo $values["fees"]; ?></td> -->
          
            <td><a href="L_CheckOutForm.php?action=delete&id=<?php echo $values["beauticianId"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
            <div class="w3-padding">
              
     <input class="w3-input w3-border" name="beauticianId" type="hidden" value="<?php echo $values["beauticianId"]; ?>"  id="beauticianId"></div>   
     <br />
     
          <?php
              $total = $total + $values["fees"] ;
               $beauticianId = $values["beauticianId"] ;
               $BabarId = $BabarId;
              $consultantId = $consultantId ;
            }

          }

          ?>
          <div class="w3-padding">

     <input class="w3-input w3-border" name="total" type="hidden" value="<?php echo ($total); ?> "  id="total"></div>  
     
        <!-- <tr>
            <td colspan="2" align="right">Total</td>
            <td align="right">Rs. <?php echo number_format($total, 2); ?></td>
            
          </tr> -->
         </table>
            <br >
            
            <div class="container">
            <hr style="width:50%;border:solid 2px white" class="mb-3" />
              <div class="row justify-content-center">
              <h3 class="text-center text-light">Total Amount to pay - Rs.<?php echo $total_cat; ?>/=</h3>
              </div>
              <hr style="width:50%;border:solid 2px white" />
            </div>
            
<div style="background-color: #E0E6F8; width: 90%; padding: 10px; "> <br><h1><u> Booking Form</u></h1>    <br /><br>
<b>

           <div class="input-group">
     <span class="input-group-addon">Full Name &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="fullName" type="text" class="form-control" name="fullName" placeholder="Full Name" required autofocus onkeypress="return (event.charCode > 64 && 
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> </div>
      <br>


  <div class="input-group">
     <span class="input-group-addon">Date &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
     <input type="date" name="startDate" min="2021-01-21" max="2021-12-31" class="w3-input w3-border" required="required" placeholder="Select Your date" /><br>
    
            
          </div>
<br />
       



      <div class="input-group">
     <span class="input-group-addon" >  User Mail &nbsp;&nbsp;&nbsp;  :-    </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input id="userMail" type="text" class="form-control" name="userMail" placeholder="Email Address" required autofocus> </div>
      <br>


     <div id="result"></div>
                                                                                
                       
                             <button type="submit"  name="register" id="register" class="btn btn-success btn-block">Submit
                              </button><br>
                        

                                <button type="reset" class="btn btn-info btn-block">Clear
                                </button>           


                                                </div>                              
                                            </div>
                                                    <br /><br />            
                                        </form>
                                    </div><br /><br />
                                            
                            </div> 
                        </div> 
                    </div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script>
  $('.date').datepicker({
    format: 'yyyy-mm-dd',
  })
  </script>
</form></table></div></div></center>

<footer>
  <div class="container">
 
    <div class="footer" id="footer">
  
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
<ul><li><b><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></b></li></ul>
</div>     
          </div>
 
            </div>
 
        </div>
 
        
    </div>
 
       </div>
</footer>
</div>
</BODY></HTML>