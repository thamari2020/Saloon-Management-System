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
      <form action="add_categories.php" method="POST">                 
                
                  <input style="padding-top:5px;" class="btn btn-dark nav-link" type="submit" value="Categories" name="submit">
                  
             </form>
      
    </li>
    
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

    </div><center>

  <h1> <u>New Babar Application Details</u> </h1>
          <div class="col-sm-12">
                
          </div>


      <br />       

      <div class="row justify-content-center mb-3">
      <a class="btn btn-secondary" href="add_new_category.php" role="button">Add new Category</a>
      
      </div>         
          <div id="result">
            


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

$query_fm = "SELECT * FROM category";
$fms = mysqli_query($connect, $query_fm);
if($fms){
    while ($fm = mysqli_fetch_assoc($fms)) {
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
    </table>
        </div>
  </div>
</div>

