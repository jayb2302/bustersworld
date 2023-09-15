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
$title = get_field('title');
$question = get_field('question');  
?>

<section class="main-banner">
    <!-- <div class="first-cloud"></div> -->
   
    <div class="front-container">
        <div class="play-title">
            <h1><?php echo esc_html($play_title); ?></h1>
        </div>
        <div class="play-summary">
            <p><?php echo esc_html($play_summary); ?></p>
        </div>
     
    </div>   
    <!-- <div class="second-cloud"></div> -->
</section>

<div class="section-wrapper">

    <section class="ticket-section">
        <div class="ticket-office">
            <h2><?php echo $ticket_office; ?></h2>
            <p><?php echo $ticket_office_instructions; ?></p>
            <p><?php echo $ticket_office_location; ?></p>
        </div>
        <div class="ticket-online">
            <h2><?php echo esc_html($online); ?></h2>
                
                <div class="item button-parrottwo">
                    <button class="clickmebtntwo" type="submit">
                    <a href="<?php echo esc_url($ticket_sale_link ); ?>" class="buy-tickets-button">
                    Check Here
                    </a>
                        <div class="parrottwo"></div>
                        <div class="parrottwo"></div>
                        <div class="parrottwo"></div>
                        <div class="parrottwo"></div>
                        <div class="parrottwo"></div>
                        <div class="parrottwo"></div>
                    </button>
                </div>
        </div>
        <div class="ticket-phone">
            <h2><?php echo $by_phone; ?></h2>
            <p><?php echo $phone_opening_hours; ?></p>
            <p><?php echo $ticket_sale_phonenumber; ?></p>
                             
               
            
        </div>
        
    </section>
</div>
 
<section class="competition">
        <div class="competition-container">
            <div class="eyes">
                <div class="eye-white">
                    <div id="eye-ball" class="eye-ball"></div>
                </div>
                <div class="eye-white">
                    <div class="eye-ball"></div>
                </div>
            </div>
            <h2><?php echo esc_html($competition_heading); ?></h2>
            <p><?php echo esc_html($competition_question); ?></p>
             <div class="form-wrapper">
           
            <!-- <?php echo do_shortcode('[contact-form-7 id="ee6a125" title="Contact form 1"]') ?> -->
            <?php echo do_shortcode('[contact-form-7 id="697d9dd" title="Competition"]') ?>
             </div>
           
        </div>
      
    </section>

   

</div>


<div class="third-cloud">
    <div class="countdown-wrapper">

        <div class="timer">
            <div class="sub_timer">
                <p class="digit_name">Days</p>
                <h1 id="day" class="digit">00</h1>
            </div>
            <div class="sub_timer">
                <p class="digit_name">Hours</p>
                <h1 id="hour" class="digit">00</h1>
            </div>
            <div class="sub_timer">
                <p class="digit_name">Minutes</p>
                <h1 id="min" class="digit">00</h1>
            </div>
        </div>
    </div>
</div>



<section class="social-media-links">
    <div class="container">
        <?php echo wp_kses_post($social_media_links); ?>
    </div>
</section>

<?php get_footer(); ?>