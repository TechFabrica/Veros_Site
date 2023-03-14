<footer class="footer grid__item--4-12">

    <nav class="footer__menu">
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