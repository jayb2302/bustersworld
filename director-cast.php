
<?php

/**
    * Template Name: Director & Cast
    */
// Retrieve ACF fields for the subpage
$director_welcome_text = get_field('director_welcome_text');
$director_photo = get_field('director_photo');
$director_name = get_field('director_name');
$actors = get_field('actors');
$sponsors = get_field('sponsors');
$leave_review_button_text = get_field('leave_review_button_text');
?>

<?php get_header(); ?>

<!-- Page Header -->
<h1>Welcome to the Play’s Online Companion</h1>

<!-- Director's Welcome Text -->
<div class="director-welcome">
    <?php echo wp_kses_post($director_welcome_text); ?>
</div>

<!-- Director's Photo/Name -->
<div class="director-info">
    <img src="<?php echo esc_url($director_photo['url']); ?>" alt="<?php echo esc_attr($director_name); ?>">
    <h2><?php echo esc_html($director_name); ?></h2>
</div>

<!-- List of Actors -->
<div class="actors-list">
    <h2>List of Actors</h2>
    <ul>
        <?php
        $actors_query = new WP_Query(array(
            'post_type' => 'Actors', // Custom post type
            'posts_per_page' => -1,
        ));

        if ($actors_query->have_posts()) :
            while ($actors_query->have_posts()) : $actors_query->the_post();
        ?>
                <li><?php the_title(); ?> (<?php echo esc_html(get_field('actors_name')); ?>)</li>
        <?php
            endwhile;
            wp_reset_postdata(); // Reset post data
        else :
            echo 'No actors found.';
        endif;
        ?>
    </ul>
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
<?php if (function_exists('the_ratings')) : ?>
    <div class="review-section">
        <h2>User Reviews</h2>
        <?php the_ratings(); ?>
    </div>
<?php endif; ?>

<!-- Leave a Review Button -->
<a href="#review-form" class="leave-review-button"><?php echo esc_html($leave_review_button_text); ?></a>

<!-- Page Footer -->
<footer>
    <!-- Footer content goes here -->
</footer>

<?php get_footer(); ?>
