<?php
    // include_once 'header.php';
?>

<link rel="stylesheet" media="screen" href="css/gumby.css" />	
<link rel="stylesheet" media="screen" href="css/carousel.css" />	

<div class="row">
	<h4><strong>Welcome to KMK CHOIR home page!</strong></h4>
	<br/>

	<div class="seven columns">
		<img src="img/front_image.jpg" alt="Front" style="padding-top:20px;">
	</div>

	<div id="carousel" class="four columns">
		<div id="buttons">
			<a href="#" id="prev" style="margin: 0 auto !important;"><img src="img/arrow_up.png" alt="Up"/></a>
      <div class="clear"></div>
		</div>
		
		<div class="clear"></div>

		<div id="slides">
			<ul>
				<li><img src="img/front_image.jpg" alt=""></li>
				<li><img src="img/front_image.png" alt=""></li>
				<li><img src="img/front_image.jpg" alt=""></li>
				<li><img src="img/front_image.jpg" alt=""></li>
			</ul>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

		<div id="buttons">
      <a href="#" id="next" style="margin: 0 auto !important;"><img src="img/arrow_down.png" alt="Down"/></a>
      <div class="clear"></div>
		</div>
	</div>
</div>


<script src="js/jQuery.js" type="text/javascript"></script>s
<script src="js/carousel.js" type="text/javascript"></script>

<?php
    // include_once 'footer.php';
?>