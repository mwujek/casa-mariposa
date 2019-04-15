<?php
/*
Template Name: Home Page Template
*/
$url = get_template_directory_uri(); 
?>


<?php get_header(); ?>


<section class="hero-full-width home-hero">
    
    
    <div class="arrow-container">
        <span>Scroll down</span>
        <i class="fa fa-chevron-down" aria-hidden="true"></i>

    </div>
</section>



<section class="content-backdrop white space-3x">
    <div class="nug">
        <h2>Save the Date!</h2>
        <h3>Saturday, June 22nd 2019</h3>
        <div class="btn-container center">
            <a href="/rsvp-for-our-wedding/" class="rounded-button dark fatty">RSVP Here</a>
        </div>
    </div>
</section>


<section class="hero-full-width yokayo">
    <div class="nug">
        <h2>Where?</h2>
        <h3>Yoyako Ranch</h3>
        <h3>Ukiah, California</h3>
        <div class="btn-container center">
            <a href="/travel/" class="rounded-button dark">Travel Info</a>
        </div>
    </div>
</section>


<section class="content-backdrop white space-3x">
    <div class="nug">
        <h2>Who’s coming?</h2>
        <h3>Our families, good friends, and our dog.</h3>
        <div class="btn-container center">
            <a href="/people/" class="rounded-button dark fatty">Meet our people</a>
        </div>
    </div>
</section>

        





<div class="content-backdrop dark">
<section class="full-width-di space-3x text-right">
    <div class="text">
        <h2>Our story</h2>
        <h3>In case you were curious how it all went down.</h3>
        <div class="btn-container left">
            <a href="/our-story/" class="rounded-button dark">Read more</a>
        </div>

    </div>

    <div class="image circle">
        <img src="<?php echo($url); ?>/img/square-1.jpg">
    </div>
</section>
</div>




        



<!-- <script src="<?php echo TEMPLATEURL; ?>/js/about-us-simple.js""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.2.1/flickity.pkgd.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.2.1/flickity.min.css" rel="stylesheet"/> -->

<?php get_footer(); ?>