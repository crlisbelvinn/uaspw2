<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- AOS -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	
	<!-- title -->
	<title>Shop</title>

	<!-- css bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<!-- css -->
	<link href="shop.css" rel="stylesheet">

	<!-- icon -->
	<link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/2838/2838838.png">

<!-- home -->
<nav class="navbar">
	<a href="#home"><a href="florist.php">home</a></a> 
</nav>

<section class="home" id="home">

    <div class="title"data-aos="fade-up" data-aos-duration="1000">
      <h3>Shop here!</h3>
      <a class="btn"data-aos="fade-up" data-aos-duration="1000">shop and find your good mood</a>
    </div>
</section>


</head>
<body>

<!-- Carousel -->
	<div id="carouselExampleFade" class="carousel carousel-dark carousel-fade" data-bs-ride="carousel" >
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<center><img src="shop/tulip-bouquet-g10d610475_1920.jpg" class="d-block w-90" alt=" " height="500"></center>
		  </div>
		  <div class="carousel-item">
			<center><img src="shop/pexels-van-tran-11402198.jpg" class="d-block w-90" alt=" " height="500"></center>
		  </div>
		  <div class="carousel-item">
			<center><img src="shop/flowers-g5df3784ed_1920.jpg" class="d-block w-90" alt=" " height="500"></center>
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	  </div>  
<!-- bootstrap.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!-- AOS -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>AOS.init();</script>

<!-- container box -->
<section class="container" data-aos="fade-up" data-aos-duration="1500">
	<h2>Bouquets</h2>
		<div class="row-items">
	  		<div class="container-box">
				<div class="container-img">
		  		<img src="imageuts/bukett4.jpg">
			</div>
			<a class="btn">$5.7</a>
	  </div>
	<div class="container-box">
		<div class="container-img">
		  <img src="imageuts/buket2.jpg">
		</div>
	<a class="btn">$3</a>
</div>
	<div class="container-box">
	  <div class="container-img">
		<img src="imageuts/pexels-kristina-nor-3184888.jpg">
	  </div>
	  <a class="btn">$5.5</a>
	</div>
  </div>

  <h2>Gifts</h2>
<div class="row-items" >
	<div class="row-items">
		<div class="container-box">
		  <div class="container-img">
			<img src="imageuts/pexels-marcelo-joaquim-5714433.jpg">
		  </div>
		  <a class="btn">$7.1</a>
		</div>
	  <div class="container-box">
		  <div class="container-img">
			<img src="imageuts/gift2.jpg">
		  	</div>
		  <a class="btn">$4.1</a>
		</div>
	  <div class="container-box">
		<div class="container-img">
		  <img src="imageuts/gift4.jpg">
		</div>
		<a class="btn">$3.2</a>
	  </div>
	</div>
</div>
<h2>Decoration</h2>
<div class="row-items" >
	<div class="row-items">
		<div class="container-box">
		  <div class="container-img">
			<img src="imageuts/decor1.jpg">
		  </div>
		  <a class="btn">$7.1</a>
		</div>
	  <div class="container-box">
		  <div class="container-img">
			<img src="imageuts/decor2.jpg">
		  	</div>
		  <a class="btn">$4.1</a>
		</div>
	  <div class="container-box">
		<div class="container-img">
		  <img src="imageuts/pexels-jonathan-borba-5610387.jpg">
		</div>
		<a class="btn">$3.2</a>
	  </div>
	</div>
</div>
<h2>Home and Living</h2>
<div class="row-items" >
	<div class="row-items">
		<div class="container-box">
		  <div class="container-img">
			<img src="imageuts/plant3.jpg">
		  </div>
		  <a class="btn">$7.1</a>
		</div>
	  <div class="container-box">
		  <div class="container-img">
			<img src="shop/vase-g3f81e2dcd_1280.jpg">
		  	</div>
		  <a class="btn">$4.1</a>
		</div>
	  <div class="container-box">
		<div class="container-img">
		  <img src="imageuts/pexels-skyler-ewing-5743922.jpg">
		</div>
		<a class="btn">$3.2</a>
	  </div>
	</div>
</div>
</section>

<div class="calculator">

	<h1>Calculate your product</h1>
	 
    
		<h5>You can calculate your products in here</h5>
		<br>
		<label for="">Input ur first number <br></label>
		<input type="text" id="number1" class="btn-1">
		<br>
		<br>
		<label for="">Input ur second  number <br></label>
		<input type="text" id="number2" class="btn-2">
		<br>
		<br>
		<label for="">This is ur result <br></label>
		<input type="text" id="result" class="btn-3">
		<br>
		<br>
	
		<button onclick="fplus()" class="btn4">(+)</button>
		<button onclick="fless()" class="btn5">(-)</button>
		<button onclick="ftimes()"class="btn5">(*)</button>
		<button onclick="fdevided_by()"class="btn5">(:)</button>
    </div>

<script>
    var number1 = document.getElementById("number1");
    var number2 = document.getElementById("number2");
    var result = document.getElementById("result");

    function fplus(){
        result.value = Number(number1.value) + Number(number2.value);
    }
    
    function fless(){
        result.value = Number(number1.value) - Number(number2.value);
    }

    function ftimes(){
        result.value = Number(number1.value) * Number(number2.value);
    }

    function fdevided_by(){
        result.value = Number(number1.value) / Number(number2.value);
    }
</script>
	
</body>
</html>
