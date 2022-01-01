<!DOCTYPE html>
<html>
<head>
<title>Perfect Wheels</title>
<link rel="stylesheet" type="text/css" href="{{ secure_asset('/public/css/style.css') }}">
<style>
* {
    margin: 0;
    padding: 0;
    font-family: Century Gothic;
}

header {
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("/imgs/bugatti-centodieci-feature-image.jpg");
    height: 100vh;
    background-size: cover;
    background-position: center;
}

ul {
    float: right;
    list-style-type: none;
    margin-top: 40px;
}

    ul li {
        display: inline-block;
    }

        ul li a {
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 2px solid #fff;
            transition: 0.6s ease;
        }

            ul li a:hover {
                background-color: #fff;
                color: #000;
            }


.main {
    max-width: 1300px;
    margin: auto;
}

.title {
}

    .title h1 {
        color: #FFF;
        font-size: 80px;
        font-family: arial;
        margin: 0;
        padding: 0;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%)translateY(-50%);
    }

    .title h2 {
        color: #FFF;
        font-size: 80px;
        font-family: arial;
        margin: 0;
        padding: 0;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%)translateY(-50%);
    }

</style>
</head>
<body>
<header>
<div class="main">
<div class="logo"> </div>
<img src="/imgs/logo4.png">
<ul>
<li><a href="store">Store</a></li>
<li><a href="register">Register</a></li>
<li><a href="login">Login</a></li>
<li><a href="contact">Contact</a></li>
<li><a href="about">About</a></li>
<li><a href="brands">Brands</a></li>
</ul>
</div>
<div class="title">
<!--<h1 button onclick="alert('Welcome To PERFECT WHEELS Offical Website!')">PERFECT WHEELS<button></h1>-->
<h1>PERFECT WHEELS Offical Website!<h1>
<element id="content"></element>
</div>
</header>
</ul>
</body>
</html>
