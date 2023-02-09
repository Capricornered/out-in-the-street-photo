<footer>
    <span id="footer-logo">
        <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
        ?>
    </span>
    <hr>
        <?php dynamic_sidebar( 'footer-content' ); ?>
</footer>
    
<?php
    wp_footer();
?>

</body>
</html>