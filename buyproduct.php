
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
  $name;
//   $users;
  $subject;
  $message;
  $email;
    // Collect post variables

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // $users = $_SESSION['username'];


    $sql = "INSERT INTO `softcare`.`feed` (`name`, `email`, `subject`, `message`, `dt`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header1.php'?>
<style>
		.hidden {
			display: none;
		}
		.copy-icon {
			cursor: pointer;
		}
		.copy-icon-container {
			margin-left: 10px;
		}
        #result {
			position: absolute;
			top: 74%;
            margin-left: 65px;
		}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bg.png); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="next.php">Home</a></li>
							<li>Download</li>
						</ul>
						<h1 class="white-text">Download The File</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
        <label for="" style="padding-left: 210px; font-size: 20px">   Your software is ready to download. Click the button to download the software 🡆</label>
        <a class="main-button icon-button" style="left: 15px" href="download.php">Download</a>
        <br>
        <br>
        <hr>
  <div class="">
	<label for="" style="margin-left: 200px; font-size: 18px">Enter the Mac Encrypt ID here and press Generate Key to get the Key:</label>
	<br>
	<input id="textsend" onkeyup="success()" type="text" style="width: 1050px; height: 25px; font-size: 16px; margin-left: 200px" required>
	<br>
    <button id="selectButton" style="left: 200px; top: -30px; " class="main-button icon-button" onclick="selectRandomItem()" disabled>Generate Key</button>

    <ul id="list">
    <li class="hidden">b7f809919a8508d9aeeaebacd7404adc0a6fcb49d2714f982c43d0f332270c82302480a8b1743555ca7af6daf4709d20257e93b0f334f554527327e38af8932d</li>
		<li class="hidden">599a32e6d477d39e0360086597e772dac5a61867326a54e24d540e2616dec5c422eafe3947fd0a147909045ea8758e312a490a5fdb6ca802946e9419900bc593</li>
		<li class="hidden">e59c05d16fb5e93bd5e9682db81d7bf3f7731e1299ce05fb17637e3df022bc27301f83e0d249d0ae9a019910b1864ef294457df823ee5862ab1080468bb118c5</li>
		<li class="hidden">02568788bdc5fb9a3067576df68967dbc94858e725bef0a4562b2f4cf6aca246783125df556859e9facddf614c3131dfa77776ec58f6b9943ef9d42ba20dfe4e</li>
		<li class="hidden">60a000fa1b7b9461c3b86be049cbf40fa2aeced27d7fe6c5c32fc70ab6b30bce729e977bf494df65b2dbcdd66f43211bc25cc8836e6f8c8370fc3cefeccdd4c9</li>
		<li class="hidden">d0e344a1eb9921f47df6352983c785ddefdb699624c595c7abe9dfb44a0262dd73620d1480ebe6b0d782c7653f59d9d9dede7270a53ea4fdeb55889a3ffa6037</li>
		<li class="hidden">382f17753a5e386480947d50accce29bd7e6ec24ac6f323f5105c34fae505b206ad3aec85efb8a124b3de980bc18be55f8cfe9c80d670b41e7558f9897496790</li>
		<li class="hidden">f3552cd8019362d7177ec3b3c45b8e5adaa2d7a5e1ffe6ce8a6a888adc8e311e17c88033c532f5e1e6d9d9f3f245d3c4085f6d2dc33e472b03a43e1e5fb8fe82</li>
		<li class="hidden">e81920d4402d4cd76a602d4890590687d4d7e0d57045ce86eb502dfcba8211756687ef2834589a7494a54c81fbe034bd3ea1896d8f879687d66456a2b1015038</li>
		<li class="hidden">020225e60b80aa24be12f0df1c4ecacdf907415ef0f6341da81772333b9f790dc6fe6a8d243553fb5ad5bf403dc8c12bfd9d65cd7862687e60ce474a045d6d93</li>
        <li class="hidden">e0181b2bfe0030f27cc7251ac9dfba8895426bf03b28eb4286d9865a60b691f986a07e791d81b431267ee8f101f7cbaa2c7e1e4e6aadec31e4e929c8c6e4b745</li>
        <li class="hidden">68f68bc308840ce9dd5c63b7a2013bd20b9c57792f3cf0cc139d5b510af9fcb3a8c01e3067300de8f6e65d2c27e5f0a6a071028dbab194ff19087100d84240d6</li>
        <li class="hidden">a0b125e2c746d9350049588a7a1902453ef4d3d493d81a9cb2ed839ee925cfdff8a0ee25887b89b1453142e288c3096217d97852b25f1b9a3751bdc38a4d0631</li>
        <li class="hidden">e7a1cdcae385b7d40c44fbd57ace02474110497b86fbf968f8b0ffd33faa8194c057c12d1b07f34d9952e297a35963ee00a0857289ec1e801cc740abf53038c2</li>
        <li class="hidden">0589647c6fe3b152228255e7723d018752ae02749a2a26692342ce4f805fc9b2f703d6ff664f5544c9e40385520090404681f897e9a1a130c46e59498da4e335</li>
        <li class="hidden">g0400ac87f5686ba9e29f68860ad09797b31371275efdc32dcade15a8bac602b3a22c70f6f1385630ffc0a8cbeb8b548130fc46dd934daee42e53162b6afddc7</li>
        <li class="hidden">9f2bef0676902f36b79b09dbae5326b383cd5625dd62a20fb7af3b33725d876084a226c6b358f9f4224213442a0b0cf3cd2fb4411822b9250d634562c420b8ef</li>
        <li class="hidden">d997c3ad7dc3fb44f228ce8e996620cff08cc35b55406c5c8d43bc329d0321e557f7ff043d606773659952f14fc812619cdccc71305ac4f16f6bbddce77e08b8</li>
        <li class="hidden">f79ebe75da0e65dba1252b60110b9d0e688d87979ebddb8af443df5f7b0cf070742c7bdea0efef7e6f37ae6949669a74c31955b92da3beb3d3430f8a4cbd5756</li>
        <li class="hidden">yad4b0643f1e3b939d59befdaa5c986c8ac9ec5085c942706de665823e62906ea359751beda15431c1ebc68436bda8807ac8baf8fe21549fa47f6f31b04ce8bf</li>
        <li class="hidden">51a4dfb75af48f28a1dc4ca4b16da1c8a2130e7ef1dd19941b920ad12f6fb21690fd8fcd6c011e7945065ba9390a6e31eaefad163460545438caab8b88d9cdd8</li>
        <li class="hidden">4104c6c07aab80bc8d94986b57043f1129d722dd8f73eed62f4168b90d79c57a4eb80a3e1ea0a7b74e6218cfdd3dccf95fcf2b03070d9b341460e19575d6ab84</li>
        <li class="hidden">1a6e838dbcacb86eed6727dfe318b0baa8275c096302aea46459a166c8c218a0f96b447a241d47520708c9a30605acf94d6ac01befc20024ee2e361c107afd52</li>
	</ul>
	<p id="result" style="left: 100px;"  ><b></b></p>
  </div>
  <script>




		function selectRandomItem() {
			var list = document.getElementById("list");
			var items = list.getElementsByTagName("li");
			var index = Math.floor(Math.random() * items.length);
			var item = items[index].innerHTML;
			document.getElementById("result").innerHTML = "Key:  " + item;
			var copyIcon = document.createElement("i");
			copyIcon.className = "fa fa-copy copy-icon";
			copyIcon.addEventListener("click", function() {
				copyToClipboard(item);
			});
			var copyIconContainer = document.createElement("span");
			copyIconContainer.className = "copy-icon-container";
			copyIconContainer.appendChild(copyIcon);
			document.getElementById("result").appendChild(copyIconContainer);
            document.getElementById("selectButton").disabled = true;
		}

		function copyToClipboard(text) {
			var temp = document.createElement("textarea");
			temp.value = text;
			document.body.appendChild(temp);
			temp.select();
			document.execCommand("copy");
			document.body.removeChild(temp);
			alert("Copied to clipboard: " + text);
		}

		function success(){
			if(document.getElementById("textsend").value==="") { 
            	document.getElementById('selectButton').disabled = true; 
        	} else { 
       	    	document.getElementById('selectButton').disabled = false;
        	}
		}

	</script>
	<script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" style="font-size: 30px;" href="next.php">SoftCare</a>
						</div>
					</div>
					<!-- footer logo -->


				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2023. All Rights Reserved. </span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->
		
		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="js/google-map.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
