<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ttgms");
if(!isset($_SESSION['email'])){
  $email=$_SESSION['email'];
  header("location:./login.php");
}
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
    $item_array_id = array_column($_SESSION["consultant"], "consultant");
    if(!in_array($_GET["id"], $item_array_id))
    {
      $count = count($_SESSION["consultant"]);
      $item_array = array(
        'consultantId'     =>  $_GET["id"],
        'vName'     =>  $_POST["hidden_vName"],
        'howManyPeople'=> $_POST["hidden_people"],
        'fees'    =>  $_POST["hidden_fees"],
         'vDescription'    =>  $_POST["hidden_description"],
        
      );
      $_SESSION["consultant"][$count] = $item_array;
    }
    else
    {
      echo '<script>alert("consultant Already Added")</script>';
    }
  }
  else
  {
    $item_array = array(
      'consultant'     =>  $_GET["id"],
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
      if($values["consultant"] == $_GET["id"])
      {
        unset($_SESSION["consultant"][$keys]);
        echo '<script>alert("consultant Removed")</script>';
        echo '<script>window.location="L_services.php"</script>';
      }
    }
  }
}

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
<center>
<div style=" width: 80% ">
 
                           <br/> <h1><u>Our Categories</u></h1>
                           
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
	// $query1= mysqli_query($connect ,"select  * from babar where availabledate between '$txtStartDate' and '$txtEndDate' order by availabledate");
	// 	$query2= mysqli_query($connect ,"select  * from consultant where availabledate between '$txtStartDate' and '$txtEndDate' order by availabledate");
	// 	$query3= mysqli_query($connect ,"select  * from beautician where availabledate between '$txtStartDate' and '$txtEndDate' order by availabledate");

    $query1= mysqli_query($connect ,"select  * from babar where availabledate = '$txtStartDate' order by availabledate");
		$query2= mysqli_query($connect ,"select  * from consultant where availabledate = '$txtStartDate' order by availabledate");
		$query3= mysqli_query($connect ,"select  * from beautician where availabledate ='$txtStartDate' order by availabledate");
	$count1= mysqli_num_rows($query1);
	$count2= mysqli_num_rows($query2);
	$count3= mysqli_num_rows($query3);
}    
?>


<?php 

if(isset($_POST["select_cat"]))
{
    // if(isset([$_POST["category_id"]])) {
        $category_id  = $_POST['category_id'];
        $user_id = $_POST['user_id'];
        $category_name = $_POST['category_name'];
        $category_price = $_POST['category_price'];
        // echo $category_id;
    // }

    $query = "INSERT INTO category_selected(category_id,user_id,category_name,category_price, created_at) VALUES('{$category_id}','{$user_id}','{$category_name}','{$category_price}',NOW())";
    $result = mysqli_query($con,$query);

    if($result){
        echo '<script type="text/javascript">
        window.location = "http://localhost/salon/L_services.php"
   </script>';
    }
}

?>

<div class="conatainer">
    <div class="row justify-content-center m-3 p-3" style="background-color: #0a2e4f; color:white; width: 80%; clear:both">
    <table  style="background-color: #0a2e4f; color:white;"class="table table-bordered">
    <table style = "color:white;"class="table table-bordered">
					<tr>
						<th width="40%">Details</th>						
						<th width="20%">Price</th>
						<th width="15%">Action</th>
					</tr>

<?php 

$query_fm = "SELECT * FROM category";
$fms = mysqli_query($connect, $query_fm);
if($fms){
    while ($fm = mysqli_fetch_assoc($fms)) {
?>
<tr>
        <td ><?php echo $fm['category_name'];?></td>
        <td >Rs.<?php echo $fm['category_price'];?>/=</td>
        <td class = "text-center" >
                <form method="post" action="L_servicesBackCat.php">
                <input type="hidden" name="category_id" value=<?php echo $fm['category_id']; ?>></input>
                <input type="hidden" name="category_name" value=<?php echo $fm['category_name']; ?>></input>
                <input type="hidden" name="category_price" value=<?php echo $fm['category_price']; ?>></input>
                <input type="hidden" name="user_id" value="1" ></input>
                    <button class="btn btn-success" name="select_cat">select</button>
                </form>
            </td>
</tr>

<?php
    }
  }

?>
        <!-- <tr>

            <td name="category_id" value="1">1</td>
            <td>Category Num</td>
            <td>900</td>
            <td class = "text-center" >
                <form method="post" action="L_servicesBackCat.php">
                <input type="hidden" name="category_id" value="1"></input>
                <input type="hidden" name="category_price" value="300"></input>
                <input type="hidden" name="category_name" value="category_two"></input>
                    <button class="btn btn-success" name="select_cat">Select</button>
                </form>
            </td>
        
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td class = "text-center" ><button class="btn btn-success">Select</button></td>
        </tr> -->
    </table>
    </div>
</div>