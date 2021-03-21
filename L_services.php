<?php 
 $login_id = "";
session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
if(!isset($_SESSION['email'])){
  $email=$_SESSION['email'];
  header("location:./login.php");
}


$query_login = "select loginId from login where email = '{$_SESSION['email']}'";
$login_res = mysqli_query($connect, $query_login);
$row = mysqli_fetch_array($login_res);

 $login_id = $row[0];

//  echo $login_id;
?>
<?php 


if(isset($_POST["add_to_cart1"]))
{
  if(isset($_SESSION["beautician"]))
  {
    $item_array_id = array_column($_SESSION["beautician"], "beauticianId");
    if(!in_array($_GET["id"], $item_array_id))
    {
      $count = count($_SESSION["beautician"]);
      $item_array = array(
        'beauticianId'     =>  $_GET["id"],
        'dName'     =>  $_POST["hidden_dName"],
        'fees'    =>  $_POST["hidden_price"]
      
      );
      $_SESSION["beautician"][$count] = $item_array;
    }
    else
    {
      echo '<script>alert("beautician Already Added")</script>';
    }
  }
  else
  {
    $item_array = array(
      'beauticianId'     =>  $_GET["id"],
        'dName'     =>  $_POST["hidden_dName"],
        'fees'    =>  $_POST["hidden_price"]
         
        
    );
    $_SESSION["beautician"][0] = $item_array;
  }
}

if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["beautician"] as $keys => $values)
    {
      if($values["beauticianId"] == $_GET["id"])
      {
        unset($_SESSION["beautician"][$keys]);
        echo '<script>alert("beautician Removed")</script>';
        echo '<script>window.location="L_services.php"</script>';
      }
    }
  }
}


if(isset($_POST["add_to_cart2"]))
{
  if(isset($_SESSION["Babar"]))
  {
    $item_array_id = array_column($_SESSION["Babar"], "BabarId");
    if(!in_array($_GET["id"], $item_array_id))
    {
      $count = count($_SESSION["Babar"]);
      $item_array = array(
        'BabarId'     =>  $_GET["id"],
        'gName'     =>  $_POST["hidden_gName"],
        'language'=> $_POST["hidden_language"],
        'fees'    =>  $_POST["hidden_price"],
        
      );
      $_SESSION["Babar"][$count] = $item_array;
    }
    else
    {
      echo '<script>alert("Babar Already Added")</script>';
    }
  }
  else
  {
    $item_array = array(
      'BabarId'     =>  $_GET["id"],
        'gName'     =>  $_POST["hidden_gName"],
        'language'=> $_POST["hidden_language"],
        'fees'    =>  $_POST["hidden_price"],
        
    );
    $_SESSION["Babar"][0] = $item_array;
  }
}

if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["Babar"] as $keys => $values)
    {
      if($values["BabarId"] == $_GET["id"])
      {
        unset($_SESSION["Babar"][$keys]);
        echo '<script>alert("Babar is Removed")</script>';
        echo '<script>window.location="L_services.php"</script>';
      }
    }
  }
}


if(isset($_POST["add_to_cart3"]))
{
  if(isset($_SESSION["consultant"]))
  {
    $item_array_id = array_column($_SESSION["consultant"], "consultantId");
    if(!in_array($_GET["id"], $item_array_id))
    {
      $count = count($_SESSION["consultant"]);
      $item_array = array(
        'Id'     =>  $_GET["id"],
        'vName'     =>  $_POST["hidden_vName"],
        'howManyPeople'=> $_POST["hidden_people"],
        'fees'    =>  $_POST["hidden_fees"],
         'vDescription'    =>  $_POST["hidden_description"],
        
      );
      $_SESSION["consultant"][$count] = $item_array;
    }
    else
    {
      echo '<script>alert("consultantportation Already Added")</script>';
    }
  }
  else
  {
    $item_array = array(
      'consultantId'     =>  $_GET["id"],
        'vName'     =>  $_POST["hidden_vName"],
        'howManyPeople'=> $_POST["hidden_people"],
        'fees'    =>  $_POST["hidden_fees"],
        'vDescription'    =>  $_POST["hidden_description"],

        
    );
    $_SESSION["consultant"][0] = $item_array;
  }
}

if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["consultant"] as $keys => $values)
    {
      if($values["consultantId"] == $_GET["id"])
      {
        unset($_SESSION["consultant"][$keys]);
        echo '<script>alert("consultantportation Removed")</script>';
        echo '<script>window.location="L_services.php"</script>';
      }
    }
  }
}

?><?php 

$connect = mysqli_connect("localhost", "root", "", "ttgms");
?>
<!DOCTYPE html>
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
consultantform: scale(1.15);
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
$ddName ="ttgms";

$con = mysqli_connect($dbServername, $dbUsername,$dbPassword,$ddName);

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

<center>
<div class="container">
  <div class="row justify-content-center mt-3">
  <form method="post" action="L_servicesBackCat.php">
  <br/> <h1 class="mt-3 mb-3"><u>Our categories</u></h1>
Select price &nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp;&nbsp;<input type="number" name="txtStartprice">&nbsp;&nbsp;&nbsp;
Select price&nbsp;&nbsp;&nbsp; :-&nbsp;&nbsp;&nbsp; <input type="number" name="txttEndPrice">
<br ><br >
<p>

<input type="submit"  class="btn btn-success" name="search_categories" value="Search available categories">
</p>
</form>
     
  </div>

  <div class="row justify-content-center">
  <div style="background-color: #0a2e4f; color:white; width: 80%; clear:both">
			<br />
			<h3><u>Service Providers</u></h3>
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
$query_fm = "SELECT * FROM category_selected INNER JOIN login on login.loginId = category_selected.user_id WHERE category_selected.user_id ='{$login_id}' AND category_selected.booked = '0' ";
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
<hr style=" border: solid 2px;margin-top:50px"/>
<div style=" width: 80% ">
 
                           <br/> <h1><u>select a barbar, consultant or beautician</u></h1>
                           
                    </div>
                    
                               
                               </b>
          <div id="result">
            


          </div>
<?php

$connect = mysqli_connect("localhost", "root", "", "ttgms");

if(!$connect){
die("Connection failed".mysqli_connect_error());	
}
if(isset ($_POST['search']))
{
	$txtStartDate=$_POST['txtStartDate'];
	// $txtEndDate=$_POST['txtEndDate'];
	  // $query1= mysqli_query($connect ,"select  * from Babar where availabledate between '$txtStartDate' and '$txtEndDate' order by availabledate");
		// $query2= mysqli_query($connect ,"select  * from consultant where availabledate between '$txtStartDate' and '$txtEndDate' order by availabledate");
		// $query3= mysqli_query($connect ,"select  * from beautician where availabledate between '$txtStartDate' and '$txtEndDate' order by availabledate");

    $query1= mysqli_query($connect ,"select  * from Babar where availabledate between '$txtStartDate' order by availabledate");
		$query2= mysqli_query($connect ,"select  * from consultant where availabledate between '$txtStartDate' order by availabledate");
		$query3= mysqli_query($connect ,"select  * from beautician where availabledate between '$txtStartDate' order by availabledate");

	$count1= mysqli_num_rows($query1);
	$count2= mysqli_num_rows($query2);
	$count3= mysqli_num_rows($query3);
}  

?>


<style>
#table1{
	width:50%;
	box-sizing:border-box;
	border-style:solid;
	background-color:#0a2e4f;
	text-align:center;
	border-radius:5px; 
	padding:16px;
	border-with:100px;
}

</style>
</head>

<body>

<div class="container">
  <div class="row"></div>
</div>
<br><b>
<form method="post" action="L_servicesBack.php">
Select Date &nbsp;&nbsp;&nbsp;:-&nbsp;&nbsp;&nbsp;<input type="date" name="txtStartDate">&nbsp;&nbsp;&nbsp;
Select Time&nbsp;&nbsp;&nbsp; :-&nbsp;&nbsp;&nbsp; <input type="time" name="txttime">
<br ><br >
<p>

<input type="submit"  class="btn btn-success" name="search" value="Search available Services">
</p>
</form>

<center>
			<div style="background-color: #0a2e4f; color:white; width: 80%; clear:both">
			<br />
			<h3><u>selected a barbar, consultant or beautician</u></h3>
			<div class="table-responsive">
        <div class= "container">
				<table style = "color:white;"class="table table-bordered">
					<tr>
						<th width="40%">Details</th>						
						<!-- <th width="20%">Price</th> -->
						<th width="15%">Action</th>
					</tr>
					<?php
          $total = 0;
					if(!empty($_SESSION["consultant"]))
					{
						
						foreach($_SESSION["consultant"] as $keys => $values)
						{
					?>
					<tr>
						<td>consultantportation Type :- <?php echo $values["vName"]; ?></td>
						
						<!-- <td>Rs <?php echo $values["fees"]; ?></td> -->
						
						<td><a href="L_services.php?action=delete&id=<?php echo $values["consultantId"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>

					<?php
							$total = $total + $values["fees"] ;
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
            
            <td><a href="L_services.php?action=delete&id=<?php echo $values["BabarId"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr><br>
          <?php
             $total = $total + $values["fees"] ;
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
          
            <td><a href="L_services.php?action=delete&id=<?php echo $values["beauticianId"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
          <?php
              $total = $total + $values["fees"] ;
            }

          }

					?>
				<!-- <tr>
            <td colspan="2" align="right">Total</td>
            <td align="right">Rs. <?php echo number_format($total, 2); ?></td>
            
          </tr> -->
         
            
        </table>
        </form>
          <!--end search bar-->                                 
           
			<div class="text-right">
  
      
           <!-- <a href = "L_CheckOutForm.php"> <button type="button" class="btn btn-success">Booking Form</button></a> -->
                    </div></center>
 <br />   </div>
</div>
<hr style=" border: solid 2px;margin-top:50px;width:60%"/>
<div class="container m-3 p-3" style="background-color: #0a2e4f; color:white; width: 50%; clear:both">

          <div class="row justify-content-center m-3">
          <div  class="col text-center" >
          
            <h3>Total amount of payment - Rs.<?php echo $total_cat; ?>/=</h3>
          </div>     
          </div>
          <div class="row justify-content-center">
          <!-- <a href = "L_CheckOutForm.php?categoryList='<?php echo $category_array; ?>'"> <button type="button" class="btn btn-success">Booking Form</button></a> -->

          <?php 
          
          echo "<a class='btn btn-success' href='L_CheckOutForm.php?" . http_build_query($category_array) . "'>Booking Form</a>";
          
          ?>
          </div>
</div>





</b></h5></center></div>
<div class="container">
<table><tr><td width="50%">

    
      <div>
      <h2 align ="center">Rate About Our Service</h2>
            <?php
    
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$ddName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$ddName);

$find_data = "select * from rate";
$result = $conn -> query($find_data);
while ($row = mysqli_fetch_assoc($result)) {
  
  $id = $row['id'];
  $name = $row['name'];
  $food = $row['food'];
  $current_rating = $row['rating'];
  $hits = $row['hits'];

  echo "
          <form action='rates.php' method='POST'>
          <select name='rating' class='form-control selcls'>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          
          </select>
           <div class='form-group'>
          <input type='hidden' value='$food' name='food'>
          </div>
          <div>
          <input type ='submit' value='Rate!' class='btn btn-info'> </div>Current Rating:";
  echo round($current_rating, 3);
  echo "


          </form>

          ";
}
?>
        </div></td><td>
      <div class="container">
            <h2 align="center">Comment About Our Service</h2>
          <br />

           <form method="POST" id="comment_form">
            <div class="form-group">
              <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
            </div>
            <div class="form-group">
              <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
            </div>
            <div class="form-group">
              <input type="hidden" name="comment_id" id="comment_id" value="0" />
              <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
            </div>
          </form>
          <span id="comment_message"></span>
            <br />
          <div id="display_comment"></div>
        </div>
    </div></div></div></td></tr></table>
</div></div>




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
<ul><li><b><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></b></li></ul>
</div>     
          </div>
 
            </div>
 
        </div>
 
        
    </div>
 
       </div>
</footer>
</div>




</body>
</html>