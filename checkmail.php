<?php
session_start();
?>


<?php
$rec=$_POST["tomail"];
$sub=$_POST["subject"];
$msg=$_POST["message"];
//$sub = "Test Email from localhost"; //the subject

//$msg = "Hii"; //the message

//$rec = ""; //recipient email here
//mail($rec,$sub,$msg); //send email




if (mail($rec,$sub,$msg)) {

echo"<div class='alert alert-success'><strong>Success!</strong> Email has been sent.
</div>";



} else {
echo"<div class='alert alert-danger'><strong>Error</strong> Something went wrong with the input fields. 
Please check again.
</div>";
}
?>







































      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</div>
  <!-- Footer -->
  <footer class="py-4 bg-success">
    <div class="container">
<img src=images/facebook.png> &nbsp;<img src=images/whatsapp.png> &nbsp;<img src=images/instagram.png>  Copyright &copy;Ecoist 2020
    </div>
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
