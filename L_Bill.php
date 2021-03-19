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


    .invoice-box {

        max-width: 800px;

        margin: auto;

        padding: 30px;

        border: 1px solid #eee;

        box-shadow: 0 0 10px rgba(0, 0, 0, .15);

        font-size: 16px;

        line-height: 24px;

        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;

        color: #555;

    }

    

    .invoice-box table {

        width: 100%;

        line-height: inherit;

        text-align: left;

    }

    

    .invoice-box table td {

        padding: 5px;

        vertical-align: top;

    }

    

    .invoice-box table tr td:nth-child(2) {

        text-align: right;

    }

    

    .invoice-box table tr.top table td {

        padding-bottom: 20px;

    }

    

    .invoice-box table tr.top table td.title {

        font-size: 45px;

        line-height: 45px;

        color: #333;

    }

    

    .invoice-box table tr.information table td {

        padding-bottom: 40px;

    }

    

    .invoice-box table tr.heading td {

        background: #eee;

        border-bottom: 1px solid #ddd;

        font-weight: bold;

    }

    

    .invoice-box table tr.details td {

        padding-bottom: 20px;

    }

    

    .invoice-box table tr.item td{

        border-bottom: 1px solid #eee;

    }

    

    .invoice-box table tr.item.last td {

        border-bottom: none;

    }

    

    .invoice-box table tr.total td:nth-child(2) {

        border-top: 2px solid #eee;

        font-weight: bold;

    }

    

    @media only screen and (max-width: 600px) {

        .invoice-box table tr.top table td {

            width: 100%;

            display: block;

            text-align: center;

        }

        

        .invoice-box table tr.information table td {

            width: 100%;

            display: block;

            text-align: center;

        }

    }

    

    /** RTL **/

    .rtl {

        direction: rtl;

        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;

    }

    

    .rtl table {

        text-align: right;

    }

    

    .rtl table tr td:nth-child(2) {

        text-align: left;

    }
    textarea { border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; }

#header { height: 30px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

    </style>



</HEAD>
<body style="background-color: #FFC0CB; ">

<div style=" color: black; font-style:italic;">
  <center><h3><b>SALON PRO
</h3></center></div>
  <nav class="navbar navbar-inverse bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav navbar-nav">
   
    <li class="nav-item" >
     <a class="nav-link active" href="L_Home.php">Home</a>
    </li>
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
       
      </ul>  <ul class="nav navbar-nav navbar-right">
      <li><a class="nav-link active" href="logout.php"><img src="img\logout1.png" width="120px" height="45px" /></a>
  </li>
       
      </ul>
          
</nav>
    
</div>
<center><br>
    <br />
 <div class="invoice-box" style="background-color: white;">
  <div id="page-wrap">

    <textarea id="header">INVOICE</textarea>
  </div>

        <table cellpadding="0" cellspacing="0">

            <tr class="top">

                <td colspan="2">

                    <table>

                        <tr>

                            <td class="title">

                                <img src="img\logo1.jpg" style="width:40%; height: 150px;">

                            </td>

                            <?php
     if (isset($_SESSION['email'])) {
                             $email= $_SESSION['email']; 
                              
       $dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$con = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

        $sql = "SELECT * FROM booking where userMail  ='$email' ORDER BY bId DESC limit 1 ";

         $result = $con -> query($sql);

          
                      if ($result->num_rows>0 ) {


                        $i=0;


                        while($row = $result->fetch_assoc()) {
                            $i++;
?>

                            <td>

                                Booking ID&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo $row['bId'];  ?><br>

                                Created&nbsp;&nbsp;&nbsp;:
<script> document.write(new Date().toLocaleDateString()); </script>


                            </td>

                        </tr>

                    </table>

                </td>

            </tr>

           
 <?php
          }
        }}
      ?>            

            <tr class="information">

                <td colspan="2">

                    <table>

                        <tr>

                            <td>

                                SALON PRO - BATTARAMULLA.<br>

                                
                            </td>

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

                            <td>
Full Name &nbsp;&nbsp;:- &nbsp;&nbsp;<?php echo $row['fName'];  ?> &nbsp;&nbsp;<?php echo $row['lName'];  ?><br>
 NIC &nbsp;&nbsp;:-&nbsp;&nbsp; <?php echo $row['uNIC'];  ?> <br>
 E-Mail &nbsp;&nbsp;:- &nbsp;&nbsp;<?php echo $row['userMail'];  ?> 

                               

                            </td>

                        </tr>

                    </table>

                </td>

            </tr>

            

           
 <?php
          }
        }}
      ?>
            

            <tr class="heading">

                <td>

                    Details

                </td>

                

                <td>

                    Amount

                </td>

            </tr>

            <?php
          $total = 0;
          if(!empty($_SESSION["consultant"]))
          {
            
            foreach($_SESSION["consultant"] as $keys => $values)
            {
          ?>

            <tr class="item">

                <td>

                    Transportation Type :- <?php echo $values["vName"]; ?>

                </td>

                

                <td>

                   Rs <?php echo $values["fees"]; ?>
                </td>

            </tr>

            
  <?php
              $total = $total + $values["fees"] ;
            }
          
          }?>
            <tr class="item">
              <?php

               if(!empty($_SESSION["Babar"]))
          {
                      foreach($_SESSION["Babar"] as $keys => $values)
            {
          ?>

                <td>

                    Babar Name :- <?php echo $values["gName"]; ?>

                </td>

                

                <td>

                Rs <?php echo $values["fees"]; ?>

                </td>

            </tr>

            
<?php
             $total = $total + $values["fees"] ;
            }
            
          
          }


          if(!empty($_SESSION["beautician"]))
          {
          
            foreach($_SESSION["beautician"] as $keys => $values)
            {
          ?>

            <tr class="item last">

                <td>

                    beautician Name :- <?php echo $values["dName"]; ?>

                </td>

                

                <td>

                  Rs <?php echo $values["fees"]; ?>

                </td>

            </tr>

            
 <?php
              $total = $total + $values["fees"] ;
            }

          }

          ?>
            <tr class="total">

                <td></td>

                

                <td>

                   Rs. <?php echo number_format($total, 2); ?>
                </td>

            </tr>

        </table>
<hr>
<br>
<B> Note :- If you want to cancel your booking you should inform within 7 days
    </div>
<br/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script>
  $('.date').datepicker({
    format: 'yyyy-mm-dd',
  })
  </script>
</form></table></div></div></center>

</div>
</BODY></HTML>