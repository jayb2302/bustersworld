
<?php

/**
* Template Name: Director & Cast
*/

// Retrieve ACF fields for the subpage
$directors_welcome_text = get_field('directors_welcome_text');
$directors_photo = get_field('directors_photo');
$directors_name = get_field('directors_name');
$actors = get_field('actors');
$sponsors = get_field('sponsors');
$leave_review_button_text = get_field('leave_review_button_text');
?>

<?php get_header(); ?>

<!-- Page Header -->
<h1></h1>
<div class="page-wrapper">
    
    <div class="directors-container">
        <div class="directors-info">
            <img class="directors-photo" src="<?php echo esc_url($directors_photo['url']); ?>" alt="<?php echo esc_attr($directors_name); ?>">
            <h2><?php echo esc_html($directors_name); ?></h2>
            
        </div>
        <div class="directors-welcome">
            <p><?php echo wp_kses_post($directors_welcome_text); ?></p>
        </div>
    </div>
   
    
</div>


<div class="actors-wrapper">
    <div class="actors-scroll-container">
        <div class="horizontal-scroll">
            <div class="line"></div>
            
            <?php 
            
            $actors_query = new WP_Query(array(
                'post_type' => 'actor', // Custom post type
                'posts_per_page' => -1,
            ));
        
            if ($actors_query->have_posts()) :
                while ($actors_query->have_posts()) : $actors_query->the_post();
            ?>
            <div class="actors-container">
                <div class="actor-item">
                    <img class="actor-photo" src="<?php echo esc_url(get_field('actor-photo')['url']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                    <h4>
                    <?php echo esc_html(get_field('character-name')); ?>
                    </h4>
                    <h3> <?php echo esc_html(get_field('actors_name')); ?></h3>

                    <!-- <p> <?php echo esc_html(wp_trim_words(get_field('biography'),10)); ?></p> -->

                    <a href="<?php echo esc_url(get_field('social-media-profile')); ?>" target="_blank"><?php echo esc_html(get_field('social-media-profile')); ?></a>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'No actors found.';
            endif; 
            ?>
        </div>
    </div>
</div>

<div class="review-section">
    <?php if (function_exists('the_ratings')) : ?>
        <div class="ratings">
            <?php the_ratings(); ?>
        </div>
    <?php endif; ?>
    <div class="write-review">
        <?php
            $review_shortcode = get_post_meta(get_the_ID(), 'review_shortcode', true);
            echo do_shortcode($review_shortcode);
        ?>
    </div>
</div>
<!-- List of Sponsors -->
<div class="sponsors-list">
    <?php if ($sponsors) : ?>
        <h2>List of Sponsors</h2>
        <div class="sponsor-logos">
            <?php foreach ($sponsors as $sponsor) : ?>
                <img src="<?php echo esc_url(get_field('logo', $sponsor->ID)['url']); ?>" alt="<?php echo esc_attr($sponsor->post_title); ?>">
            <?php endforeach; ?>
        </div>
        <div class="sponsor-details">
            <?php foreach ($sponsors as $sponsor) : ?>
                <h3><?php echo esc_html($sponsor->post_title); ?></h3>
                <p><?php echo wp_kses_post(get_field('description', $sponsor->ID)); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<!-- Review Section -->


<!-- Leave a Review Button -->
<a href="#review-form" class="leave-review-button"><?php echo esc_html($leave_review_button_text); ?></a>



<?php get_footer(); ?>
