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
$ticket_office = get_field('ticket_office');
$ticket_office_instructions = get_field('ticket_office_instructions');
$online = get_field('online');
$ticket_sale_link = get_field('ticket_sale_link');
$by_phone = get_field('by_phone');
$phone_opening_hours = get_field('phone_opening_hours');
$ticket_sale_phonenumber = get_field('ticket_sale_phonenumber');
$ticket_office_location = get_field('ticket_office_location');
$social_media_links = get_field('social_media_links');
?>

<section class="main-banner">
    <div class="first-cloud"></div>
   
    <div class="front-container">
        <div class="play-title">
            <h1><?php echo esc_html($play_title); ?></h1>
        </div>
        <div class="play-summary">
            <p><?php echo esc_html($play_summary); ?></p>
        </div>
     
    </div>   
    <div class="second-cloud"></div>
</section>

<div class="section-wrapper">

    <section class="ticket-section">
        <div class="ticket-office">
            <h2><?php echo esc_html($ticket_office); ?></h2>
            <p><?php echo esc_html($ticket_office_instructions); ?></p>
            <p><?php echo esc_html($ticket_office_location); ?></p>
        </div>
        <div class="ticket-online">
            <h2><?php echo esc_html($online); ?></h2>
            <button>
                <a href="<?php echo esc_url($ticket_sale_link ); ?>" class="buy-tickets-button">
                    Check availability
                </a>
            </button>
        </div>
        <div class="ticket-phone">
            <h2><?php echo esc_html($by_phone); ?></h2>
            <p><?php echo esc_html($phone_opening_hours); ?></p>
            <button>
                <a href="tel:<?php echo esc_html($ticket_sale_phonenumber); ?>" class="buy-tickets-button">
                    Call Now
                </a>
            </button>
        </div>
        
    </section>
</div>
 
<section class="competition">
        <div class="competition-container">
            <h2><?php echo esc_html($competition_heading); ?></h2>
            <p><?php echo esc_html($competition_question); ?></p>

            <form id="competition-form">
                <input class="qinput" type="text" name="answer" placeholder="Your Answer" required>
                <div class="item button-parrot">
                    <button class="clickmebtn" type="submit">Submit
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

<div class="third-cloud">
    <div class="wrapper">

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
</div>



<section class="social-media-links">
    <div class="container">
        <?php echo wp_kses_post($social_media_links); ?>
    </div>
</section>

<?php get_footer();
