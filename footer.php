<?php 
$loop = new WP_Query(array(
    "post_type" => "footer",
    "posts_per_page" => 1
));

while($loop->have_posts()) {
    $loop->the_post();
    $instagram = get_field('instagram');
    $facebook = get_field('facebook');
    $location = get_field('location');
    $email = get_field('email');
}
wp_reset_postdata();
?>


<footer>
    
        <div class="footer-wrapper">
            <p>©2020 <span style="font-weight: bolder" >E.A.T. Skarntyden</span> | Powered by <span style="font-weight: bolder">WordPress</span>.</p>
            <div class="some">
                <a href="<?php echo ($instagram)?>"><div class="instagram"></div></a>
                <a href="<?php echo ($facebook)?>"><div class="facebook"></div></a>
                <a href="<?php echo ( 'mailto:' . antispambot( $email)); ?>"><div class="email"></div></a>
                <a href="<?php echo ($location) ?>"><div class="location"></div></a>
            </div>
        </div>
        
</footer>

<?php wp_footer(); ?>
</body>
</html>