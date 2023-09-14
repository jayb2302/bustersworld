<?php 
$instagram = get_field('instagram');
$facebook = get_field('facebook');
$phone = get_field('phone');
?>
<footer>
    
        <div class="footer-wrapper">
            <p>©2020 <span style="font-weight: bolder" >E.A.T. Skarntyden</span> | Powered by <span style="font-weight: bolder">WordPress</span>.</p>
            <div class="some">
                <a href="<?php echo esc_url($instagram)?>"><div class="instagram"></div></a>
                <a href="<?php echo esc_url($facebook)?>"><div class="facebook"></div></a>
                <a href="<?php echo esc_url( 'mailto:' . antispambot( get_field('email'))); ?>"><div class="email"></div></a>
                <a href="tel:<?php echo $phone; ?>"><div class="phone"></div></a>
            </div>
        </div>
        
</footer>

<?php wp_footer(); ?>
</body>
</html>