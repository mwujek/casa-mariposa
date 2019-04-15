<?php
/*
Template Name: Story Template
*/

$url = get_template_directory_uri(); 
?>


<?php get_header(); ?>


<section class="subpage-hero story">
    <div class="pond">
        <h2>Our Story</h2>
        <!-- <h3>The wedding party</h3> -->
    </div>
</section>

<section class="body-copy">

<p>Haven't you heard the saying that all great love stories are born in a woodshop? Well, at least ours was. Matt was the woodshop monitor, Alex was the short art student that had a hard time reaching the chop saw. The rest, as they actually do say, is history, but we’ll get a bit more granular here...</p>

<p>After several late night drinks in the Haight with friends, lunches with their mutual friend Connie, Alex finally persuaded Matt to go on a Scoot ride to her favorite dog beach and that marked their first real date. Since then, their relationship has been filled with countless camping adventures, scoping out far off beaches and lots and lots of love. </p>

<p>They are so incredibly excited to start this next chapter of their lives with their incredible families, friends and the one and only Ozzy Baker.</p> 

<div class="slide-content story">
		<?php include('slides_story.php');?>
	</div>

</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.0/flickity.pkgd.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css" rel="stylesheet"/>
<script src="<?php echo($url); ?>/js/slides-story.js"></script>









        





<?php get_footer(); ?>