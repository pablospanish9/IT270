<?php get_header(); ?>
<!-- the index.php is assigned to the blog page. This is a 
blog container for all blog posts -->


<div id="hero">
        <img src="<?php echo get_template_directory_uri();
        ?>/images/seattle-big.jpg" alt="Seattle city">
        </div>    <!-- end hero -->
        
<div id="wrapper">

<main>
    <!-- If we have posts or pages, show them!: -->
    <?php if(have_posts()) : ?>
        <!-- We show the posts by using a while loop in the 
        world of PHP: -->
    <?php while (have_posts()) : the_post() ; ?>
    <article class="post">
        
    <h2 class="title">
            <a href="<?php the_permalink();?>">
                <?php the_title (); ?>
            </a>
        </h2>
<!-- meta is the "posted by" below the title -->
        <div clas="meta">
            <SPAN><B>Posted By: </B><?php the_author();?></SPAN>
            <SPAN><B>Posted On: </B><?php the_time('F j,Y g:i a');?></SPAN>
        </div>   <!-- close meta -->

        <div class="thumbnail">
            <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail(); ?>
                 </a>
                <?php endif ?>
        </div>  <!-- end thumbnail -->
        
        <?php the_excerpt(); ?>
        <span class="block">
        <a href="<?php the_permalink();?>">Read More 
        about <?php the_title(); ?> </a>
        </span>
       
</article>   <!-- close article -->

    <?php endwhile; ?>
    <?php else : ?>
        <h2>
Search Results:
    </h2>
    <p> Sorry, we could not find anyting related to 
        your search terms. Would you like to search again,
         using different keywords? </p>

    <?php get_search_form(); ?>
    <?php endif; ?>
</main> 

<?php get_sidebar(); ?>



</div>  <!-- close wrapper -->
<?php get_footer(); ?>