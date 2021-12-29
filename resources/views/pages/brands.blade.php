
<!DOCTYPE html>
<html>
<head>
<title>Perfect Wheels</title>
<!--<link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/Brand.css') }}">-->
<style>
*{
	margin:0;
	padding: 0;
	font-family:Century Gothic;
}

header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,1)), url(../White-M5.jpg);
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

	
	

.title h1{
	color:#FFF;
	font-size:40px;
	font-family:arial;
	margin:20px;
	padding:0px;
	float: left;
}
.img-BMW{
	width:300px;
	position: center;
	margin-left:50px;
	margin-top:50px;

}
	.img-FERRARI{
	width:300px;
	position: center;

}
.img-BUGGATI{
	width:300px;
	position: center;

}
.img-LAMBO{
	width:300px;
	position: center;
	margin-left:232px;

}
.img-MERCEDES{
	width:300px;
	position: center;


}

.img-BENTLEY{
	width:300px;
	position: center;
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
<div class="title">
<h1>Brands<button></h1>
<img class="img-BMW" src="/imgs/White-Ferrari.jpg" >
<img class="img-FERRARI" src="/imgs/White-Lambo.jpg" >
<img class="img-BUGGATI" src="/imgs/White-Ferrari.jpg" >
<img class="img-LAMBO" src="/imgs/White-Lambo.jpg" >
<img class="img-MERCEDES" src="/imgs/White-Ferrari.jpg" >
<img class="img-BENTLEY" src="/imgs/White-Lambo.jpg" >

<element id="content"></element>
</div>
</header>

</ul>
</html>
