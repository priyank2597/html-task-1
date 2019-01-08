<?php

$title = 'home';
$id = 'home_md_nav';
 include "header.php";
?>





<div class="container">

	<div class="row">
		
			<div class="col-md-9 col-xs-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active Carousel-height-width">
							<img src="sample1.jpg" alt="Los Angeles">
						</div>

						<div class="item Carousel-height-width">
							<img src="sample2.jpg" alt="Chicago" >
						</div>

						<div class="item Carousel-height-width">
							<img src="sample3.png" alt="New York" > 
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-md-3 col-xs-12" >
				<h1>Business Name or Tagline</h1>
				<p>
					This is template that is great for small<br>business.It doesn't have too much fancy flare<br>to it, but it makes a great use of the standard<br>bootstrap core components.Fell fre to use this<br>template for any project you want!
				</p>
				<div class="row">
					<div class="col-md-12 col-xs-12">
					<div >
						<button type="button" class="btn btn-primary call-to-action-button call-to-action-button-margin">
						Call to Action!</button>
					</div>
					</div>			
				</div>
			</div>
		
	</div>
	<div class="row">
		
			<div class=" div-border-height div-border-background div-border-margin div-border" >
				<p class="text-center div-border-font">This call to action card is great place to showcase some important information or display a clever tagline!</p>
			</div>
		
	</div>
	<div class="row" style="margin-top:20px;min-height:100%;">
		
			<div class="col-md-4" >
				<div class="card">
					<ul class="list-group">
						<li class="list-group-item"><span class="card-font-size">Card one</span>
							<p>This is template that is great for small business.It doesn't have too much fancy flare to it, but it makes a great use of the standard bootstrap core components.</p>
						</li>
						<li class="list-group-item">
							<button type="button" class="btn btn-primary">More info</button>
						</li>
				
					</ul>	
				</div>
			</div>
			<div class="col-md-4" >
				<div class="card">
					<ul class="list-group">
						<li class="list-group-item"><span class="card-font-size">Card two</span>
							<p>This is template that is great for small business.It doesn't have too much fancy flare to it, but it makes a great use of the standard bootstrap core components.</p>
						</li>
						<li class="list-group-item">
							<button type="button" class="btn btn-primary">More info</button>
						</li>
				
					</ul>	
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="card">
					<ul class="list-group">
						<li class="list-group-item"><span class="card-font-size">Card three</span>
							<p>This is template that is great for small business.It doesn't have too much fancy flare to it, but it makes a great use of the standard bootstrap core components.</p>
						</li>
						<li class="list-group-item">
							<button type="button" class="btn btn-primary">More info</button>
						</li>
				
					</ul>	
				</div>
			</div>
		
	</div>
</div>
	<?php
	include "footer.php";
	?>



</body>
</html>







