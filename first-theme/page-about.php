<?php get_header(); ?>
<!-- Template Name: About Page -->


<!-- background hero image -->
<div id="hero">
        <img src="<?php echo get_template_directory_uri();?>/images/yellowstone-inner.jpg" alt="Yellowstone">
        </div>    <!-- end hero -->


<div id="wrapper">
<main>
<!-- If we have posts or pages, show them!: -->
    <?php if(have_posts()) : ?>
        <!-- We show the posts by using a while loop in the 
        world of PHP: -->
    <?php while (have_posts()) : the_post() ; ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php else : ?>
        <h2>
    <?php echo wpautop('Sorry, no posts were found!'); ?>
    </h2>
    <?php endif; ?>

</main>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar-about'); ?>
</aside> 

</div>  <!-- close wrapper -->

<?php get_footer(); ?>