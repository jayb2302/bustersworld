
<?php
/**
* Template Name: Director & Cast
*/

// Retrieve ACF fields for the subpage
$directors_welcome_text = get_field('directors_welcome_text');
$directors_photo = get_field('directors_photo');
$directors_name = get_field('directors_name');
$actors = get_field('actors');
$actors_name = get_field('actors_name');
$actor_photo = get_field('actor_photo'); 
$sponsors = get_field('sponsors');
$leave_review_button_text = get_field('leave_review_button_text');
?>

<?php get_header(); ?>

<!-- Page Header -->
<h1></h1>
<div class="page-wrapper">
    <h1>Meet the Director and Cast</h1>
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
<!-- List of Actors -->
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
                    <img class="actor-photo" src="<?php echo esc_url(get_field('actor_photo')['url']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                    <h3>
                    <?php echo (get_field('character_name')); ?>
                    </h3>
                    <h4> <?php echo esc_html(get_field('actors_name')); ?></h4>
                    <!-- <p> <?php echo esc_html(wp_trim_words(get_field('biography'),10)); ?></p> -->
                    <a href="<?php echo esc_url(get_field('social_media_profile')); ?>" target="_blank"><?php echo esc_html(get_field('social_media_profile')); ?></a>
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
<!-- List of Sponsors & Reviews --> 
<div class="review-sponsors">
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
    <div class="sponsors-section">   
        <div class="item-wrapper">     
            <?php
                $sponsors_query = new WP_Query(array(
                    'post_type' => 'sponsor', // Replace 'sponsor' with your actual custom post type name
                    'posts_per_page' => -1,
                ));

                if ($sponsors_query->have_posts()) :
                while ($sponsors_query->have_posts()) : $sponsors_query->the_post();
                    $sponsor_name = get_the_title();
                    $sponsors_logo = get_field('sponsors_logo'); // Replace 'logo' with your ACF field name for the sponsor's logo
                    $sponsors_website = get_field('sponsors_website'); // Replace 'description' with your ACF field name for sponsor description

                   
                ?>
                    <div class="sponsor-item">
                        <img class="sponsors-logo" src="<?php echo esc_url(get_field('sponsors_logo')['url']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <a href="<?php echo wp_kses_post($sponsors_website)?>"><div class="web"></div></a>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
                else :
                echo 'No sponsors found.';
                endif;
            ?>
        </div>  
    </div>
</div>

<!-- Leave a Review Button -->
<a href="#review-form" class="leave-review-button"><?php echo esc_html($leave_review_button_text); ?></a>

<?php get_footer(); ?>
