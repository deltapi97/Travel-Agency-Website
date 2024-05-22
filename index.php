<!DOCTYPE html>
<html>
<?php 
include("head.html");
session_start();
?>
<body>
<?php 
include("navbar.php")
?>

	<!--Home section--->
	<section class="home" id="home">
		<div class="home-text">
			<h1>HMU <br> Travel</h1>
			<p>The journey of a thousand miles <br> begins with a single step.</p>
			<a href="travelpackages.php" class="home-btn">Discover</a>
		</div>
	</section>


	<!--Package section--->
	<section class="travel-packages">

		<h1>Explore our packages!</h1>

		<div class="slide-container swiper">
			<div class="card-container">
				<div class="card-wrapper swiper-wrapper">
					<div class="card swiper-slide">
						<img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/c0/98/c5/caption.jpg?w=700&h=-1&s=1&cx=960&cy=638&chk=v1_dd51d42e9a888a6b338f" alt="Travel package image" class="card-img">
						<div class="card-content">
						<h2>Athens</h2>
						<p2><a href="travelpackages.php">Go to packages page →</a></p2>
					</div>
				</div>
				
				<div class="card swiper-slide">
					<img src="https://www.celebritycruises.com/blog/content/uploads/2021/11/amsterdam-center-singel-canal-hero-1024x683.jpg" alt="Travel package image" class="card-img">
					<div class="card-content">
						<h2>Amsterdam</h2>
						<p2><a href="travelpackages.php">Go to packages page →</a></p2>
					</div>
				</div>
				<div class="card swiper-slide">
					<img src="https://static.dw.com/image/60495959_605.jpg" alt="Travel package image" class="card-img">
					<div class="card-content">
						<h2>Egypt</h2>
						<p2><a href="travelpackages.php">Go to packages page →</a></p2>					
					</div>
				</div>
				<div class="card swiper-slide">
					<img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/06/73/08/c5.jpg" alt="Travel package image" class="card-img">
					<div class="card-content">
						<h2>Milan</h2>
						<p2><a href="travelpackages.php">Go to packages page →</a></p2>
					</div>
				</div>
				<div class="card swiper-slide">
					<img src="https://www.fodors.com/wp-content/uploads/2022/03/Hero-UPDATEBarcelona-iStock-1320014700-1.jpg" alt="Travel package image" class="card-img">
					<div class="card-content">
						<h2>Barcelona</h2>
						<p2><a href="travelpackages.php">Go to packages page →</a></p2>
					</div>
				</div>
				<div class="card swiper-slide">
					<img src="https://www.discovergreece.com/sites/default/files/styles/hd_half/public/2019-12/1-the_white_tower_of_thessaloniki_by_yorgos_triantafyllou-1.jpg?itok=MTId2QF9" alt="Travel package image" class="card-img">
					<div class="card-content">
						<h2>Thessaloniki</h2>
						<p2><a href="travelpackages.php">Go to packages page →</a></p2>
					</div>
				</div>
				<div class="card swiper-slide">
					<img src="https://www.visitgreece.gr/images/1743x752/jpg/files/i_477685508_patra_1743x752.jpg" alt="Travel package image" class="card-img">
					<div class="card-content">
						<h2>Patras</h2>
						<p2><a href="travelpackages.php">Go to packages page →</a></p2>
					</div>
				</div>
				<div class="card swiper-slide">
					<img src="https://media.timeout.com/images/105240237/image.jpg" alt="Travel package image" class="card-img">
					<div class="card-content">
						<h2>Japan</h2>
						<p2><a href="travelpackages.php">Go to packages page →</a></p2>
					</div>
				</div>
			</div>
		</div>
			
			<div class="swiper-button-next swiper-navBtn"></div>
			<div class="swiper-button-prev swiper-navBtn"></div>
			<!-- <div class="swiper-pagination"></div> -->
			
		</div>
	</section>
	
	
	
	<!--Newsletter--->
		<section class="newsletter">
			<div class="news-text">
			<h2>Newsletter</h2>
			<p>Subscribe for learn first, <br> our new travel packages.</p>
		</div>

		<div class="send">
			<form method="POST" action="newsletter.php">
				<input type="email" name ="email" placeholder="Write Your Email" required>
				<input type="submit" value="Submit" name="submit">
			</form>
		</div>
	</section>



	<?php
	include("footer.html"); 
	?>

	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>
	<script src="js/swiper-bundle.min.js"></script>
	<script src="js/cards.js"></script>

</body>
</html>