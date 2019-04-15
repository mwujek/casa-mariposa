<?php
/*
Template Name: RSVP Template
*/

$url = get_template_directory_uri(); 
?>


<?php get_header(); ?>


<section class="subpage-hero rsvp-bg">
    <div class="pond">
        <h2>RSVP</h2>
    </div>
</section>


<section class="full-width-di text-right rsvp">

    <div class="text">
        <img src="<?php echo($url); ?>/img/cheers.png">
        <h2>Welcome Drinks</h2>
        <h3>Friday, June 21st 2019</h3>
        <h3>8pm - Late</h3>
        <h3>Yokayo Ranch</h3>
    
    </div>

    <div class="text">
        <img src="<?php echo($url); ?>/img/wedding.png">
        <h2>Ceremony & Reception</h2>
        <h3>Saturday, June 22nd 2019</h3>
        <h3>5pm - Late</h3>
        <h3>Yokayo Ranch</h3>
    </div>

    <div class="text">
        <img src="<?php echo($url); ?>/img/pool.png">
        <h2>Pool Party</h2>
        <h3>Sunday, June 23rd 2019</h3>
        <h3>11am - Afternoon</h3>
        <h3>Yokayo Ranch</h3>
    
    </div>
</section>


<section class="container form-container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(__('(more...)')); ?>
	<hr> <?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</section>




        



<script src="<?php echo($url); ?>/js/rsvp.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css" rel="stylesheet"/>

<?php get_footer(); ?>