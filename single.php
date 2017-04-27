<?php get_header(); ?>

        <div class="blog-container">
            <div class="post">
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post(); ?>

                    <article class="article">
                        <h2><?php the_title(); ?></h2>
                        <div class="date"> <span class="fa fa-calendar"></span><?php the_date(); ?></div>
                        <div class="author"> <span class="fa fa-user-circle"></span><?php the_author(); ?></div>
                        <div class="body">
                        <?php the_content(); ?>
                        </div>
                        <!-- end body -->
                        
                    </article> 

                    <?php endwhile; ?>
                </div>  

                </div>
                <!-- end container -->


<?php get_footer(); ?>
