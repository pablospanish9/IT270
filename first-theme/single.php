<?php get_header(); ?>
<!-- the index.php is assigned to the blog page -->
<!-- If we have posts or pages, show them!: -->

<div id="hero">
        <img src="<?php echo get_template_directory_uri();?>/images/yellowstone-inner.jpg" alt="Yellowstone">
        </div>    <!-- end hero -->
        
<div id="wrapper">

<main>
    <?php if(have_posts()) : ?>
        <!-- We show the posts by using a while loop in the 
        world of PHP: -->
    <?php while (have_posts()) : the_post() ; ?>
    <article class="post">
        <h2 class="title">
            
                <?php the_title (); ?>
         
        </h2>

        <div clas="meta">
            <SPAN><B>Posted By:</B><?php the_author();?></SPAN>
            <SPAN><B>Posted On:</B><?php the_time('F j,Y g:i a');?></SPAN>
        </div>   <!-- close meta -->
        
        <?php the_content(); ?>
        

    </article>   <!-- close article -->
    <?php endwhile; ?>
    <?php else : ?>  
        <h2>
    <?php echo wpautop('Sorry, no posts were found!'); ?>
    </h2>
    <?php endif; ?>
    <!-- Olga: For the next and Previous blog posts, 
    please add this to your single.php page
     before calling out the comments_template! -->
    <span class="next-previous">
<?php (previous_post_link()) ? '%link' : ''; ?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : ''; ?>
</span>

    <?php comments_template(); ?>
</main> 


     <?php get_sidebar();?>  


</div>  <!-- close wrapper -->
<?php get_footer(); ?>