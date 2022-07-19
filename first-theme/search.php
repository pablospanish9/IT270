<?php get_header(); ?>
<!-- the index.php is assigned to the blog page -->
<!-- If we have posts or pages, show them!: -->
<div id="wrapper">
        <!-- We will add a happy picture here -->
<main>
    <?php if(have_posts()) : ?>
        <!-- We show the posts by using a while loop in the 
        world of PHP: -->
        <!-- We will add happy picture here -->
     <h2> Search Results For: <?php echo get_search_query()  ;?></h2>

     <!-- we will add how many posts or pages exist!! -->
     <p>Our findings for
<?php /* Search Count */
$allsearch = new WP_Query("s=$s&showposts=-1"); $key = 
wp_specialchars($s, 1); $count = $allsearch->post_count; _e('');
 _e('<span class="search-terms">'); echo $key; _e('</span>');
  _e(' &mdash; '); echo $count . ' '; _e('articles/pages'); 
  wp_reset_query(); ?></p>
    <?php while (have_posts()) : the_post() ; ?>
    <article class="post">
        <h2 class="title">
            <a href="<?php the_permalink();?>">
                <?php the_title (); ?>
            </a>
        </h2>

        <div clas="meta">
            <SPAN><B>Posted By:</B><?php the_author();?></SPAN>
            <SPAN><B>Posted On:</B><?php the_time('F j,Y g:i a');?></SPAN>
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
No content for:
    <?php echo get_search_query()  ;?>
    </h2>
    <p> Sorry, we could not find anyting related to 
        your search terms. Would you like to search again,
         using different keywords? </p>

    <?php get_search_form(); ?>
    <?php endif; ?>
</main> 


<aside>
   <p>This is my search.php page! </p>
</aside>  

</div>  <!-- close wrapper -->
<?php get_footer(); ?>