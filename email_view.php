<?php
//$connect = mysqli_connect("localhost", "root", "", "nft");
$connect = mysqli_connect("localhost", "nftroot", "<fighter@909>", "nft_db");
?>
<!DOCTYPE html>
<html>
     <head>
          <title>NFT INDIA :: View Email Page</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/main.css" rel="stylesheet">
           <script src="js/bootstrap.min.js"></script>
     </head>
     <body>

          <h3 style="text-align:right; margin-right:20px;">Total Email: <strong style="color:#F00; font-size:30px;">
          <?php
          $query = "SELECT COUNT(*) AS SUM FROM email_db";
		  $result = mysqli_query($connect,$query);
		  $rows = mysqli_fetch_assoc($result);
		  echo $rows['SUM'] ;
		  ?></strong>
          </h3>
         <div class="container align-center" style="width:250px; height:500px; background-color:#E1A22A; overflow:scroll;">
			 <div class="row">
				 <div class="col-md-12 text-center">
					 <h4>EMAIL LIST</h4>
					   <?php
					   $get_number = "SELECT * FROM email_db ORDER BY email_id ASC";
					   $run_number = mysqli_query($connect,$get_number);
					   while ($row_number = mysqli_fetch_array($run_number)){
						   $email_name = $row_number['email_name'];
						   echo "<p>$email_name</p>";
					   }
					   ?>
				 </div>
			 </div>
        </div>
          <br />
     </body>
</html>
