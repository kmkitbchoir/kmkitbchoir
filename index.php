<?php
    include_once 'header.php';
?>

<link rel="stylesheet" media="screen" href="css/carousel.css" />	

<div class="row">
	<h4><strong>Welcome to KMK CHOIR home page!</strong></h4>
	<br/>

	<div id="carousel">
		<div id="buttons" style="float:left;">
			<a href="#" id="prev"><img src="img/arrow_left.png" alt="Left"></a>
		</div>

		<div id="slides"> 
			<ul>
				<li><img src="img/front_image.jpg" alt="Slide 1"/></li>
				<li><img src="img/front_image.jpg" alt="Slide 2"/></li>
				<li><img src="img/front_image.jpg" alt="Slide 3"/></li>
			</ul>
		</div>

		<div id="buttons" style="float:left;">
			<a href="#" id="next"><img src="img/arrow_right.png" alt="Right"></a>
		</div>
	</div>
</div>

<?php
    include_once 'footer.php';
?>

<script src="js/carousel.js" type="text/javascript"></script>