<footer class="footer grid-item__4-12">

    <nav class="footerr__menu">
            <?php
            
            $args = array(
                'theme_location' => 'footer'
            );

            ?>
            <?php wp_nav_menu( $args ); ?>
        </nav>
    
    <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

</footer>

</div> <!-- grid-supercontainer -->
<?php wp_footer(); ?>
</body>
</html>