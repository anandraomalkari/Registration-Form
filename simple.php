<?php
    if(isset($_POST['submit'])){
    $a = $_POST['uname'];
    $b = $_POST['email'];
    $c = $_POST['pno'];
    $e = $_POST['gender'];
    $f = $_POST['address'];
    $h = $_POST['city'];
    $j = $_POST['pcode'];
                $conn=new mysqli("localhost", "root" ,"", "Registration");
                if($conn->connect_error){
                  die("Connection Failed:" . $conn->connect_error);
              }
              $sql = "Insert into form values('$a','$b','$c','$e','$f','$h','$j')";
			  if($conn->query($sql)==TRUE){
				echo '<script type="text/javascript">
				alert("Thank you");
			  </script>';
			  }
			  else{
				echo "Error:" .$sql. "<br>" .$conn->error;
			  }
			  $conn->close();
		  }
		  
    ?>