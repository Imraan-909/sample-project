 <?php
$connect = mysqli_connect("localhost", "root", "", "nft");
//$connect = mysqli_connect("localhost", "nftroot", "<fighter@909>", "nft_db");
$message ='';
if(isset($_POST["email"]))
{
  $email_name = $_POST['email_name'];

  $query = "SELECT * FROM email_db WHERE email_name='$email_name'";
  $run_query = mysqli_query($connect, $query);
  if(mysqli_num_rows($run_query) > 0){
	  $message = "<p style='background-color:red; color:#FFFFFF; text-align:center; font-size:24px; font-weight:bolder; border:1px solid red;'>You have already subscribed for our notifications.<br/>'THANK YOU'</p>";
     
  }else {
    $insert_number = "INSERT INTO email_db (email_name) VALUES('$email_name')";
    $run_query_no = mysqli_query($connect, $insert_number);
    if($run_query_no){
      echo"<script>alert('Thank You for Subscribing')</script>";
    }

  }


}
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>NFT INDIA :: Coming Soon</title>
	<!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">   

    <!-- //Meta-Tags -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- //css files -->
	<!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all"> 
	<script src="https://kit.fontawesome.com/6407c8fea0.js" crossorigin="anonymous"></script>
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="video-w3l" data-vide-bg="video/1">
		<div class="agile">
     	<div class="container">
			<h1>INCONVIENCE REGRETED</h1>
			
			<div class="clear-loading spinner">
				<span></span>
			</div>
			
			<div class="wthree-info">  
				<h2>We're Offline!</h2>
				<p>Unfortunately, the website is down for maintaince right now. We will be online with a seemless reading experience. Thanks for being in touch.</p>
			</div>
 

			<!--newsletter-->
			<div class="newsletter">
				<h2>YOU ARE VALUABLE TO US</h2>
				 <?php echo $message; ?>
				<form method="post" action="index.php" enctype="multipart/form-data" class="newsletter">
					<input class="email" name="email_name" type="email" placeholder="Enter Your Email..." required="">
					<input type="submit" name="email" class="submit" value="NOTIFY">
				</form>
            </div>
			
			<!--//social media icon-->
			<div>  
				<p style="font-size:25px;;color:white;">Our social platforms are still online</p>
				<ul class="agileinfo_social_icons w3l">
					<li><a href="https://www.facebook.com/newsfactstoday" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/newsfactstoday" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/newsfactstoday" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			
			
			<!--//newsletter-->
			<!--copyright-->
			<div class="copy w3ls">
		       <p>© 2020 NFT Coming Soon . All Rights Reserved  | Design by <a href="about.php" target="_blank">NFT INDIA</a> </p>
	        </div>
			<!--//copyright-->
        </div>
   </div>
	</div>

	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<!-- //js -->

	
</body>

</html>