<?php
/*
Template Name: Invite Template
*/
$url = get_template_directory_uri(); 
?>


<?php get_header(); ?>



<div id="invite-box">
	<div class="invite-cell">
		<img class="invite-img" src="<?php echo($url); ?>/img/square-invite.jpg">
		<h2 class="halogen">You're Invited!</h2>
		<ul class="key">
			<li>To celebrate the wedding of:</li>
			<li>Matt &amp; Alex</li>
			<li>Saturday, June 22nd 2019</li>
			<li>Yokayo Ranch, Ukiah, CA</li>
		</ul>
		<div class="centered-btn-progress">
			<span class="progress-btn" role="next">Next</span>
		</div>
	</div>
	<div class="invite-cell">
		<h2 class="halogen">Schedule</h2>
		<section class="full-width-di text-right rsvp invite">

		    <div class="text">
		        <img src="<?php echo($url); ?>/img/cheers.png">
		        <h2>Welcome Drinks</h2>
		        <h3>Friday, June 21st 2019</h3>
		        <h3>8pm - Late, Yokayo Ranch</h3>
		        <!-- <h3>Yokayo Ranch</h3> -->
		    
		    </div>

		    <div class="text">
		        <img src="<?php echo($url); ?>/img/wedding.png">
		        <h2>Ceremony & Reception</h2>
		        <h3>Saturday, June 22nd 2019</h3>
		        <h3>5pm - Late, Yokayo Ranch</h3>
		    </div>

		    <div class="text">
		        <img src="<?php echo($url); ?>/img/pool.png">
		        <h2>Pool Party</h2>
		        <h3>Sunday, June 23rd 2019</h3>
		        <h3>11am - Afternoon, Yokayo Ranch</h3>
		        <!-- <h3>Yokayo Ranch</h3> -->
		    
		    </div>
		</section>
		<div class="centered-btn-progress">
			<span class="progress-btn prev" role="prev">Prev</span>
			<span class="progress-btn" role="next">Next</span>
		</div>
	</div>

	<div class="invite-cell">
		<h2 class="halogen">Other Info</h2>
		<p>If you'd like to RSVP, please press 'Next'. If you have any questions before you RSVP, you can find more information on our <a href="http://masterwuj.us/">wedding website.</a></p>
		<div class="centered-btn-progress">
			<span class="progress-btn prev" role="prev">Prev</span>
			<span class="progress-btn" role="next">Next</span>
		</div>
		
	</div>
	<div class="invite-cell rsvp-cell">
		<h2 class="halogen">RSVP</h2>
		<section class="container form-container invite-form">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(__('(more...)')); ?>
			<hr> <?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		</section>
		<!-- <div class="centered-btn-progress">
			<span class="progress-btn prev" role="prev">Prev</span>
		</div> -->
	</div>
</div>


<script src="<?php echo($url); ?>/js/invite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css" rel="stylesheet"/>



        



<!-- <script src="<?php echo TEMPLATEURL; ?>/js/about-us-simple.js""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.2.1/flickity.pkgd.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.2.1/flickity.min.css" rel="stylesheet"/> -->

<?php get_footer(); ?>