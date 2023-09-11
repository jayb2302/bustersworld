<?php get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <h2 class="title mt-3"><?php the_field('title'); ?></h2>
        <p class="description" ><?php the_field('description'); ?></p>
         <h1>Hello</h1>
            <?php
            while (have_posts()) :
                the_post();

                // echo do_shortcode('[contact-form-7 id="46f086e" title="MailList"]');
                // // Display the page content
                // the_content();

            endwhile;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- #content -->


<?php get_footer(); ?>