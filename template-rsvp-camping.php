<?php
/*
Template Name: RSVP Camping
*/

$url = get_template_directory_uri(); 
?>


<?php get_header(); ?>


<section class="subpage-hero rsvp-camping-bg">
    <div class="pond">
        <h2>Camping at Yokayo</h2>
    </div>
</section>


<section class="body-copy">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</section>


<section class="container form-container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(__('(more...)')); ?>
	<hr> <?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</section>




        



<!-- <script src="<?php echo($url); ?>/js/rsvp.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css" rel="stylesheet"/>

<?php get_footer(); ?>