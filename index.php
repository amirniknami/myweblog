<?php get_header(); ?>
<body>
  
    <div class="blog-container">

             <?php if ( have_posts() ) : ?>

             	<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
            ?>

                <article class="article">
                    <h2><?php the_title(); ?></h2>
                    <div class="date"> <span class="fa fa-calendar"></span><?php  the_time('F j, Y'); ?></div>
                    <div class="author"> <span class="fa fa-user-circle"></span><?php the_author(); ?> </div>
                    <div class="body">
                       <?php the_excerpt(); ?>
                    </div>
                    <!-- end body -->
                    <div class="countinue"><a href="<?php echo get_permalink();  ?>">Read</a> <span class="fa fa-arrow-right"></span></div>
                </article>    

             <?php endwhile ?>
         <?php endif?>

        
    </div>
    <!-- end container -->
         <div class="paginate">
             <?php next_posts_link(); ?> 
             <?php previous_posts_link(); ?>              
         </div>



    <?php get_footer(); ?>
