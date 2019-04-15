<?php
/*
Template Name: People Template
*/

$url = get_template_directory_uri(); 
?>


<?php get_header(); ?>


<section class="subpage-hero ppl">
    <div class="pond">
        <h2>Our people</h2>
    </div>
</section>

<div style="margin-bottom: 60px; width: 100%; height: 20px;"></div>
<section class="body-copy">
	<p>We are so lucky to have such a great group of friends and family who have helped us get here. Everyone we have invited has been instrumental in making our love strong and we cannot wait to celebrate with you all! The people below are a special bunch and are pretty rad: we owe you guys everything!</p>
</section>
<?php

include('slides_alex.php');
include('slides_wuj.php');
include('slides_both.php');

?>





        



<script src="<?php echo($url); ?>/js/slides.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css" rel="stylesheet"/>

<?php get_footer(); ?>