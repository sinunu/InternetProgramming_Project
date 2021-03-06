<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>ALL NEWS</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
 	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 

	<!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/carousel.css">
	<link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<?php
/*
$servername = "localhost";
$username = "root";
$password = "sew1550";
$dbname = "mainpage";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("set session character_set_connection=utf8;");
$conn->query("set session character_set_results=utf8;");
$conn->query("set session character_set_client=utf8;");
$result = $conn->query("select * from home");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<a href=" . $row['href'] . ">";
        echo "<img src=" . $row['imgurl'] . "><br>";
        echo $row['headline'];
        echo "</a>";
    }
}
$conn->close();*/
?>	
	<div id="wrapper">
        <header class="header site-header">
			<div class="container">
				<nav class="navbar navbar-default yamm">
				    <div class="container-fluid">
				        <div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				                <span class="sr-only">Toggle navigation</span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				            </button>
							<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Linda" width=200></a>
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->

		<section class="section transheader homepage parallax" data-stellar-background-ratio="0.5" style="background-image:url('upload/bg_04.jpg');">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2 style="color:yellow;">검색할 단어를 입력하세요</h2>
						<p class="lead"></p>
						<form class="calculateform" method="get" action='search.php'>
						    <div class="item-box">
						        <div class="item-top form-inline">
						            <div class="form-group">
						                <div class="input-group2">
						                    <span class="input-addon">
												<i class="fa fa-link"></i>
											</span>
						                    <input type="text" name = "input"class="form-control"  name="url" placeholder="Keyword">
						                </div>
						            </div>
						            <input type="submit" name="send" value="Search" class="btn btn-default" />
                                </div>
                                <span style="font-weight:bold; color:black; font-size: large;">관련도순<input type="radio" name="type" value="association"> 최신순<input type="radio" name="type" value="latest"> / 기간: 1주<input type="radio" name="period" value="week"> 1달<input type="radio" name="period" value="month"> 1년<input type="radio" name="period" value="year">전체<input type="radio" name="period" value="all"></span>
						    </div>
						</form>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->


		
		<section class="section lb nopad spotlight style1">
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="upload/blog_alt_06.jpg" alt="" />
		    </div>
		    <div class="content">
		        <h2>Be the leader in the sector</h2>
		        <p>Cras arcu sapien, maximus a accumsan at, iaculis nec nunc. Nullam ac ultricies velit, ut tincidunt tellus. Nunc nec sem at ante imperdiet tempor. Ut eu vulputate augue. Maecenas ultrices, arcu vel condimentum pharetra, diam eros mattis lectus, nec gravida sem erat nec orci. In dapibus ex eget arcu feugiat, non rhoncus enimpien id ligula sollicitudin fringilla ut id lacus. </p>
		         <a href="#" class="btn btn-transparent">Learn More</a>
		    </div>
		</section>
		<section class="section lb nopad spotlight style1">
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="upload/blog_alt_06.jpg" alt="" />
		    </div>
		    <div class="content">
		        <h2>Be the leader in the sector</h2>
		        <p>Cras arcu sapien, maximus a accumsan at, iaculis nec nunc. Nullam ac ultricies velit, ut tincidunt tellus. Nunc nec sem at ante imperdiet tempor. Ut eu vulputate augue. Maecenas ultrices, arcu vel condimentum pharetra, diam eros mattis lectus, nec gravida sem erat nec orci. In dapibus ex eget arcu feugiat, non rhoncus enimpien id ligula sollicitudin fringilla ut id lacus. </p>
		         <a href="#" class="btn btn-transparent">Learn More</a>
		    </div>
		</section>
		<section class="section lb nopad spotlight style1">
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="upload/blog_alt_06.jpg" alt="" />
		    </div>
		    <div class="content">
		        <h2>Be the leader in the sector</h2>
		        <p>Cras arcu sapien, maximus a accumsan at, iaculis nec nunc. Nullam ac ultricies velit, ut tincidunt tellus. Nunc nec sem at ante imperdiet tempor. Ut eu vulputate augue. Maecenas ultrices, arcu vel condimentum pharetra, diam eros mattis lectus, nec gravida sem erat nec orci. In dapibus ex eget arcu feugiat, non rhoncus enimpien id ligula sollicitudin fringilla ut id lacus. </p>
		         <a href="#" class="btn btn-transparent">Learn More</a>
		    </div>
		</section>
		<section class="section lb nopad spotlight style1">
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="upload/blog_alt_06.jpg" alt="" />
		    </div>
		    <div class="content">
		        <h2>Be the leader in the sector</h2>
		        <p>Cras arcu sapien, maximus a accumsan at, iaculis nec nunc. Nullam ac ultricies velit, ut tincidunt tellus. Nunc nec sem at ante imperdiet tempor. Ut eu vulputate augue. Maecenas ultrices, arcu vel condimentum pharetra, diam eros mattis lectus, nec gravida sem erat nec orci. In dapibus ex eget arcu feugiat, non rhoncus enimpien id ligula sollicitudin fringilla ut id lacus. </p>
		         <a href="#" class="btn btn-transparent">Learn More</a>
		    </div>
		</section>
		<section class="section lb nopad spotlight style1">
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="upload/blog_alt_06.jpg" alt="" />
		    </div>
		    <div class="content">
		        <h2>Be the leader in the sector</h2>
		        <p>Cras arcu sapien, maximus a accumsan at, iaculis nec nunc. Nullam ac ultricies velit, ut tincidunt tellus. Nunc nec sem at ante imperdiet tempor. Ut eu vulputate augue. Maecenas ultrices, arcu vel condimentum pharetra, diam eros mattis lectus, nec gravida sem erat nec orci. In dapibus ex eget arcu feugiat, non rhoncus enimpien id ligula sollicitudin fringilla ut id lacus. </p>
		         <a href="#" class="btn btn-transparent">Learn More</a>
		    </div>
		</section>
		<section class="section lb nopad spotlight style1">
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="upload/blog_alt_06.jpg" alt="" />
		    </div>
		    <div class="content">
		        <h2>Be the leader in the sector</h2>
		        <p>Cras arcu sapien, maximus a accumsan at, iaculis nec nunc. Nullam ac ultricies velit, ut tincidunt tellus. Nunc nec sem at ante imperdiet tempor. Ut eu vulputate augue. Maecenas ultrices, arcu vel condimentum pharetra, diam eros mattis lectus, nec gravida sem erat nec orci. In dapibus ex eget arcu feugiat, non rhoncus enimpien id ligula sollicitudin fringilla ut id lacus. </p>
		         <a href="#" class="btn btn-transparent">Learn More</a>
		    </div>
		</section>


	<!-- jQuery Files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>
