
  <!doctype html>
    <html lang="en">
      <head>
      
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
        <!-- Bootstrap CSS -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       
       <link href="ass\style.css" rel="stylesheet" />
          <script>
    $(document).ready(function(){

     $('#comment_form').on('submit', function(event){
      event.preventDefault();
      var form_data = $(this).serialize();
      $.ajax({
       url:"addcomment.php",
       method:"POST",
       data:form_data,
       dataType:"JSON",
       success:function(data)
       {
      if(data.error != '')
      {
       $('#comment_form')[0].reset();
       $('#comment_message').html(data.error);
       $('#comment_id').val('0');
       load_comment();
      }
       }
      })
     });

     load_comment();

     function load_comment()
     {
      $.ajax({
       url:"fetchcomment.php",
       method:"POST",
       success:function(data)
       {
      $('#display_comment').html(data);
       }
      })
     }

     $(document).on('click', '.reply', function(){
      var comment_id = $(this).attr("id");
      $('#comment_id').val(comment_id);
      $('#comment_name').focus();
     });

    });
    </script>
    
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
    padding: px;
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
 .phara{
	 column-count:3;
	 padding: 10px;
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
      <body style="background-color: #FFC0CB; ">
	  
       <div style=" color: black; font-style:italic; font-style:italic;">
  <center><h3><b>SALON PRO
</h3></center></div><div>
  <nav class="navbar navbar-inverse bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav navbar-nav">
   
    <li class="nav-item" >
<a class="nav-link active" href="Home.php">Home</a>
    </li>
  </ul>
  <ul class="navbar-nav">  
    <li class="nav-item" >
   <a class="nav-link active" href="package.php">Package</a>
   
    </li>    
  </ul>



    
     <li class="dropdown">
    <a href="Gallery.php" class="dropbtn">Gallery</a>
    <div class="dropdown-content">
      <a href="haircut.php">Haircut</a>
      <a href="haircolouring.php">Hair Colouring</a>
      <a href="hairtreatment.php">Hair Treatment</a>
    <a href="facial.php">Facial </a>
    <a href="makeup.php">Makeup</a>
    <a href="manicure.php">Manicure</a>
    </div>
    </li> 

   <ul class="navbar-nav">  
    <li class="nav-item" >
   <a class="nav-link active" href="about.php">About Us</a>
     </li>    
  </ul>

    <li class="dropdown">
    <a href="" class="dropbtn">Vacancy</a>
    <div class="dropdown-content">
      <a href="new_Beautician.php">Beautician</a>
      <a href="new_Babar.php">Babar</a>
      
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
      <li><a class="nav-link active" href="login.php"><img src="img\log.png" /></a>
  </li>
       
      </ul>
          <ul class="navbar-nav">
      </ul>
</nav>
    
</div>
</b></h5></center>
<br>
<h3><center> <B>WHO WE ARE?</B></center></h3>
<div class="phara"><p><b>

Sri Lanka, the much hailed, self-proclaimed “Pearl of the Indian Ocean”. Seemingly at one’s grasp but at the same time so diverse and mystical for one to comprehend. From awe inspiring remnants of ancient civilizations, to tranquil highlands that will help rejuvenate even the weariest soul; from virgin rainforests to the tranquil sands of some of the world’s best beaches, this tiny island nation is indeed a small miracle. Boasting eight UNESCO World Heritage Sites, Sri Lanka is one of the fastest growing global holiday destinations. The country’s relatively small size, coupled with its natural wonders and world famous resorts are drawing in millions of holiday makers every year; each coming for their own dream vacation.

                  Whilst Sri Lanka maybe small, it is by no means a straightforward destination. This is wherewe comes in. We are the Sri Lanka experts and we devise tour itineraries depending on what your passion is. Whether you are a culture buff, looking to catch the next big wave or simply want a romantic getaway with your loved one, we know the Sri Lanka that is right for you! We also want our customers get the best value for money and we ensure to find the best deals available.
Talk to us, we will have a Sri Lanka itinerary that is just right for you.
<b><p></div>
<img src="img/home.jpg" alt="img/home.jpg" style="float:right;width:600px;height:600px; padding:100px">

    <div class ="col-12">
      <div class ="col-6">
      <div>
      <h2 align ="center">Rate us</h2>
            <?php
    
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

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

        </div>
      <div class="">
            <h2 align="center">Comment us</h2>
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
    </div></div></div>
	</p></b></b></p></div></h3></center></div>
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
</footer></div></BODY></HTML>     

