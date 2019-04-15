<?php
/*
Template Name: Travel Template
*/

$url = get_template_directory_uri(); 
?>


<?php get_header(); ?>


<section class="subpage-hero travel">
    <div class="pond">
        <h2>Travel</h2>
        <!-- <h3>The wedding party</h3> -->
    </div>
</section>

<section class="body-copy">

<p>Nestled in between San Francisco and Sacramento, Ukiah a sweet little town where you can enjoy all that wine country has to offer: stunning views and intoxicating booze. While you’re waiting for the party of your life, enjoy the area and go to a wine tasting, sample some great food in downtown Ukiah or venture to the Mendocino Coast.</p>

<div id="travel-map"></div>
<div class="map-key">
	<div class="check-group active hotel">
		<span name="hotel">Hotels</span>
		<i class="fa fa-bed" aria-hidden="true"></i>

		<!-- <input type="checkbox" checked name="hotel"> -->
	</div>

	<div class="check-group active airbnb">
		<span name="airbnb">Airbnbs</span>
		<i class="fa fa-home" aria-hidden="true"></i>

		<!-- <input type="checkbox" checked name="airbnb"> -->
	</div>

	<div class="check-group active camping">
		<span name="camping">Camping</span>
		<i class="fa fa-moon-o" aria-hidden="true"></i>

		<!-- <input type="checkbox" checked name="camping"> -->
	</div>

	<div class="check-group active poi">
		<span name="poi">Points of Interest</span>
		<i class="fa fa-map-marker" aria-hidden="true"></i>

		<!-- <input type="checkbox" checked name="poi"> -->
	</div>

	<!-- <div class="check-group active venue">
		<span>Wedding Venue</span>
		<input type="checkbox" checked name="venue">
	</div> -->

	<div class="check-group airport">
		<span name="sfo">SFO</span>
		<i class="fa fa-plane" aria-hidden="true"></i>

		<!-- <input type="checkbox" name="sfo"> -->
	</div>

	<div class="check-group airport">
		<span name="oak">OAK</span>
		<i class="fa fa-plane" aria-hidden="true"></i>

		<!-- <input type="checkbox" name="oak"> -->
	</div>

	<div class="check-group airport">
		<span name="smf">SMF</span>
		<i class="fa fa-plane" aria-hidden="true"></i>

		<!-- <input type="checkbox" name="smf"> -->
	</div>

</div>

<h2 class="halogen">Airports:</h2>
<p>We recommend flying into either San Francisco, Oakland, or Sacramento and renting a car for the weekend.</p>
<ul class="icon-list">
	<li class="plane" id="sf">SFO (2.5 - 3 hrs)</li>
	<li class="plane" id="oak">Oakland (~2.5 hrs)</li>
	<li class="plane" id="sac">Sacramento (~2 hrs)</li>
</ul>



<h2 class="halogen">Lodging:</h2>
	<p>Room blocks have been made at 
		<a href="https://hamptoninn3.hilton.com/en/hotels/california/hampton-inn-ukiah-UKHCAHX/index.html">Hampton Inn</a>, 
		<a href="https://www.choicehotels.com/california/ukiah/comfort-inn-hotels/ca978">Comfort Inn</a>, and 
		<a href="https://www.bestwestern.com/en_US/book/hotels-in-ukiah/best-western-orchard-inn/propertyCode.05610.html">Best Western</a>.
	 	Both hotels are a 10 minute drive to Yokayo Ranch. Group rates are available at both hotels—
just mention the Masterson-Wujek wedding.</p>
<ul class="icon-list">

	<li class="hotel">
		<a href="https://hamptoninn3.hilton.com/en/hotels/california/hampton-inn-ukiah-UKHCAHX/index.html">Hampton Inn</a>, 
		<a href="https://www.choicehotels.com/california/ukiah/comfort-inn-hotels/ca978">Comfort Inn</a>, and 
		<a href="https://www.bestwestern.com/en_US/book/hotels-in-ukiah/best-western-orchard-inn/propertyCode.05610.html">Best Western</a>.
	 	Shuttle service will be provided before the wedding ceremony and after <thead></thead> reception.</li>
	<li class="camping">Glamping at Yokayo—no shuttle needed! You will be to coordinate with us for this arrangements. <a href="mailto:alexmasterson4@gmail.com">Please contact us</a> at to book a camping spot at Yokayo Ranch.<!-- <a href="/camping-yokayo/">Visit this page to learn more.</a> --></li>
	<li class="airbnb">There are also <a href="https://www.airbnb.com/s/Ukiah--CA--United-States/homes?refinement_paths%5B%5D=%2Fhomes&checkin=2019-06-21&checkout=2019-06-23&query=Ukiah%2C%20CA%2C%20United%20States">lots of great Airbnb’s nearby!</a></li>
</ul>


</section>

<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet' />

<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
<script src="<?php echo($url); ?>/js/travel.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css" rel="stylesheet"/> -->









        





<?php get_footer(); ?>