<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:index.php");
	exit;
}
?>

<!DOCTYPE HTML>
<html Lang="en">
<head>
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="ied=edge"/>
<link rel="stylesheet" type="text/css" href="mjstyle.css">

</head>
<body>

<main>
	<section class="mj" id="mj">

	<img class="logo" src="logo.png"   alt="logo">
	<a href="reg.html">
	<img class="user" src="user.png">
	</a>
	<div class="img" >
    <p>
    COSTUMIZE
	<br>
	YOUR
	<br>
	OWN
	<br>
	CANDLE
	<br>
	<a href="#product"><button>SHOP NOW</button></a>
	 </p>
	</div>
	</section>
	
		
	
	<section class="product" id="product">	
	   <nav>
     <ul>
            <li><a data-page="home" href="#mj" style="color: #000000">Home</a>  </li>
            <li><a data-page="product" href="#product" style="color: #000000">Product</a>  </li>
            <li><a data-page="about" href="#about" style="color: #FFFFFF">About</a>  </li>
            <li><a data-page="contact" href="#contact" style="color: #FFFFFF">Contact</a>    </li>
          </ul>  
	</nav> 
	<div class="all">
<div class="container" >
	<div class="card">
		<div class="imgBx">
		<img src="candle.png">
		</div>
		<div class="contentBx">
		<h2>Shaped Candle </h2>
		<div class="shape">
		<h3>Shape:</h3>
		<span>cube</span>
		<span>cone</span>
		</div>
		<div class="color">
		<h4>Color:</h4>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		</div>
		<a href="#">Buy Now</a>
		</div>
	</div>

	<div class="cards">
		<div class="imgBxs">
		<img src="candle1.png">
		</div>
		<div class="contentBxs">
		<h2>Jar Candle</h2>
		<div class="sizes">
		<h3>Size:</h3>
		<span>small</span>
		<span>medium</span>
		<span>large</span>
		</div>
		<div class="colors">
		<h3>Color:</h4>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		</div>
		<a href="#">Buy Now</a>
		</div>
	</div>
</div>
</div>

	</section>
	
	
	<section class="about" id="about">
	<div class="img">
  <h1>
    Welcome to M
    Customize your own candle
	</h1>
 <p>
    Welcome to M, a candle manufacturing in
    Philippines. We offer handmade candles.
    The candles are now offered in an array
    of design, shape, and textures depend on what
	you want.<span id="dots"></span>...<span id="more">
	As a ethical manufacturer we want
    you to experience the maximum enjoyment,
    pleasure and contentment from our candles.
    Standardization, competitive price and
    quality products are our key to sucess.
    If you are interested to our product,
	please contact us and we will gladly
	send you the informations.
	We are looking to receive your value inquires.</span>
	
	<button type="button" id="read" onclick="read()">Read more</button>
	<script type="text/javascript">
	var i=0;
	function read(){
	if(!i){
	document.getElementById("more").style.
	display="inline";
	document.getElementById("dots").style.
	display="none";
	document.getElementById("read").innerHTML="Read less";
	i=1;
	}
	else{
	document.getElementById("more").style.
	display="none";
	document.getElementById("dots").style.
	display="inline";
	document.getElementById("read").innerHTML="Read more";
	i=0;
	}
	}
	
	</script>
</p>

</div>
	<div class="all">
	<div class="container" >
	<div class="box">
		<div class="imgBx">
		<img src="about.png">
		</div>
		<div class="content">
		<div class="icon">
		<img src="about.png">
		</div>
		<h3>About Us</h3>
		<h4>
	Our company is established 2020.</h4>
		</div>
	</div>
</div>
	</section>
	
	<section class="contact" id="contact">
	<div class="all">
	<div class="container" >
	<div class="box">
		<div class="imgBx">
		<img src="phone-call.png">
		</div>
		<div class="content">
		<div class="icon">
		<img src="phone-call.png">
		</div>
		<h3>Phone Number</h3>
		<h4>+1 234 567 9870</h4>
		<h4>+1 786 567 7539</h4>
		</div>
	</div>
	
	<div class="box">
		<div class="imgBx">
		<img src="email.png">
		</div>
		<div class="content">
		<div class="icon">
		<img src="email.png">
		</div>
		<h3>Email Address</h3>
		<h4>support@email.com</h4>
		<h4>care@email.com</h4>
		</div>
	</div>
	
	<div class="box">
		<div class="imgBx">
		<img src="location.png">
		</div>
		<div class="content">
		<div class="icon">
		<img src="location.png">
		</div>
		<h3>Address</h3>
		<h4>Burgos, Ilocos Norte</h4>
		</div>
	</div>
</div>
</div>
	</section>
	
	
</main>

   
</body>
</html>
