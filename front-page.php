 <?php
    /**
    * Template Name: Front Page
    * 
    */

get_header();

// Retrieve ACF fields for the front page
$play_title = get_field('play_title');
$play_summary = get_field('play_summary');
$competition_heading = get_field('competition_heading');
$competition_question = get_field('competition_question');
$ticket_purchase_heading = get_field('ticket_purchase_heading');
$ticket_prices = get_field('ticket_prices');
$ticket_purchase_instructions = get_field('ticket_purchase_instructions');
$contact_information = get_field('contact_information');
$social_media_links = get_field('social_media_links');
$title = get_field('title');
$question = get_field('question');  
?>

<section class="main-banner">
    <div class="first-cloud"></div>
    <div class="second-cloud"></div>
    <div class="front-container">
        <div class="play-title">
            <h1><?php echo esc_html($play_title); ?></h1>
        </div>
        <div class="play-summary">
            <p><?php echo esc_html($play_summary); ?></p>
        </div>
     
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Tickets'))); ?>" class="cta-button">
            Get Your Tickets Now
        </a>
    </div>   
   
</section>

<div class="section-wrapper">

<section class="ticket-purchase">
        <div class="container">
            <h2><?php echo esc_html($ticket_purchase_heading); ?></h2>
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Tickets'))); ?>" class="buy-tickets-button">
                Buy Tickets
            </a>
            <div class="ticket-prices">
                <?php echo wp_kses_post($ticket_prices); ?>
            </div>
            <p><?php echo esc_html($ticket_purchase_instructions); ?></p>
        </div>
    </section>
    
    <section class="competition">
        <div class="container">
            <h2><?php echo esc_html($competition_heading); ?></h2>
            <p><?php echo esc_html($competition_question); ?></p>
            <form id="competition-form">
                <input class="qinput" type="text" name="answer" placeholder="Your Answer" required>
                <div class="item button-parrot">
                    <button type="submit">Submit
                        <div class="parrot"></div>
                        <div class="parrot"></div>
                        <div class="parrot"></div>
                        <div class="parrot"></div>
                        <div class="parrot"></div>
                        <div class="parrot"></div>
                    </button>
                </div>
            </form>
        </div>
    </section>

   

</div>

<div class="wrapper">
    <h1 class="heading">Week 7</h1>

    <div class="timer">
        <div class="sub_timer">
            <h1 id="day" class="digit">00</h1>
            <p class="digit_name">Days</p>
        </div>
        <div class="sub_timer">
            <h1 id="hour" class="digit">00</h1>
            <p class="digit_name">Hours</p>
        </div>
        <div class="sub_timer">
            <h1 id="min" class="digit">00</h1>
            <p class="digit_name">Minutes</p>
        </div>
    </div>
</div>

<h1><?php echo esc_html($title); ?></h1>
<p><?php echo esc_html($question); ?></p>
<?php echo do_shortcode('[contact-form-7 id="ee6a125" title="Contact form 1"]') ?>

<div class="third-cloud"></div>

<section class="contact-information">
    <div class="container">
        <?php echo wp_kses_post($contact_information); ?>
    </div>
</section>

<section class="social-media-links">
    <div class="container">
        <?php echo wp_kses_post($social_media_links); ?>
    </div>
</section>

<?php get_footer();
