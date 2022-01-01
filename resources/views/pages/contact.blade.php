
<!DOCTYPE html>
<html>
<head>
<title>Perfect Wheels</title>
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/Contact.css') }}">
<style>
* {
	margin-left: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

button {
	outline: none;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

.container {
	max-width: 1200px;
}

.wrap-contact100 {
  width: 1000px;
  background: #fff;
  border-radius: 10px;
  padding: 20px;

}

.contact100-form {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding-bottom: 50px;
}

.contact100-form-title {
  display: block;
  width: 100%;
  font-family: Poppins-Bold;
  font-size: 39px;
  color: #333333;
  line-height: 1.2;
  text-align: left;
  padding-bottom:35px;
}


.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 2px solid #d9d9d9;
  padding-bottom: 13px;
  margin-bottom: 65px;
}

.rs1-wrap-input100 {
  width: calc((100% - 30px) / 2);
}

.label-input100 {
  font-family: Poppins-Regular;
  font-size: 15px;
  color: #999999;
  line-height: 1.5;
  padding-left: 5px;
}

.input100 {
  display: block;
  width: 100%;
  background: transparent;
  font-family: Poppins-SemiBold;
  font-size: 18px;
  color: #555555;
  line-height: 1.2;
  padding: 0 5px;
}

.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  background: #ff4b5a;
}


input.input100 {
  height: 40px;
}

.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}

.container-contact100-form-btn {
  width: 100%;
  margin-top: -25px;
}

.contact100-form-btn {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 160px;
  height: 50px;
  background-color: #ff4b5a;
  border-radius: 25px;
  font-family: Poppins-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}


.contact100-more {
  font-family: Poppins-Regular;
  font-size: 14px;
  color: #999999;
  line-height: 1.5;
}


------------------------------------------------------------------------------------------------------------------------------------
*{
	margin:0;
	padding: 0;
	font-family:Century Gothic;
}

header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("/imgs/White-Ferrari.jpg");
	height:100vh;
	background-size: cover;
background-position: center;
}
ul{
	float: right;
	list-style-type: none;
	margin-top: 40px;
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color:#fff;
	padding: 5px 20px;
    border:2px solid #fff;
	transition: 0.6s ease;
}

ul li a:hover{
background-color: #fff;
color:#000;
}


.main{
	max-width: 1300px;
	margin: auto;
}
</style>
</head>
<body>
<header>
<div class="main">
<div class="logo"></div>
<img src="/imgs/logo4.png">
<ul>
<li><a href="Home.html">Home</a></li>
<li><a href="Brands.html">Brands</a></li>
<li><a href="About.html">About</a></li>
<li><a href="Contact.html">Contact</a></li>
</ul>
</div>

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="title">

<element id="content"></element>
</div>
<div class="wrap-contact100" style="display: block;">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			
			<form method="post" action="addComment" class="contact100-form validate-form">
            @csrf
				<span class="contact100-form-title">
					Contact Us
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input">
				
				<label for="fname">First Name</label>
    <input class="label-input100" type="text" id="fname" name="name" placeholder="Your name.." value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
	
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your Email Adress" value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?></span>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 rs1-wrap-input100">
				 <label for="country">Country</label>
    <select id="country" name="Country">
      <option value="Sweden">Sweden</option>
      <option value="Norway">Norway</option>
      <option value="Denmark">Denmark</option>
    </select>
	</div>

				<div class="wrap-input100" data-validate="Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="Message" placeholder="Your message here..."><?php echo $comment;?></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<input type="submit" name="submit" value="Submit" class="contact100-form-btn">
					</button>
				</div>
			</form>

			<span class="contact100-more">
				For any question contact our 24/7 call center: <span class="contact100-more-highlight">+905373308817</span>
			</span>
		</div>
</header>
</ul>
</html>
