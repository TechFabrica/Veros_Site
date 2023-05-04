<section class="triagem grid__container">
    <h2 class="triagem__subtitle grid__item--4-12"><?php the_field('triagem__title'); ?></h2>
    <p class="triagem__title grid__item--4-12"><?php the_field('triagem__subtitle'); ?></p>
    <p class="triagem__content grid__item--4-12"><?php the_field('triagem__content'); ?></p>
    
    <?php 
        $image = get_field('triagem__infographic');
        if( !empty( $image ) ):
    ?>

    <img class="triagem__infographic grid__item--4-6" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>
    <?php 
        $image = get_field('triagem__infographic--desktop');
        if( !empty( $image ) ):
    ?>

    <img class="triagem__infographic--desktop grid__item--4-6" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>

    <div class="triagem__topics grid__item--4-6">
    <?php
        $topics = get_field('triagem__topics');
        foreach( $topics as $topic):
    ?>
        <p class="triagem__topic">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M12.736 3.96993C12.8042 3.9003 12.8857 3.84498 12.9756 3.80722C13.0655 3.76945 13.162 3.75 13.2595 3.75C13.357 3.75 13.4535 3.76945 13.5434 3.80722C13.6333 3.84498 13.7147 3.9003 13.783 3.96993C14.069 4.25893 14.073 4.72593 13.793 5.01993L7.87998 12.0099C7.81285 12.0837 7.73138 12.1429 7.64056 12.1841C7.54974 12.2252 7.45148 12.2474 7.35179 12.2493C7.2521 12.2511 7.15307 12.2327 7.06077 12.1949C6.96847 12.1572 6.88483 12.1011 6.81498 12.0299L3.21698 8.38393C3.07822 8.24242 3.00049 8.05213 3.00049 7.85393C3.00049 7.65574 3.07822 7.46545 3.21698 7.32393C3.28523 7.2543 3.36668 7.19898 3.45657 7.16122C3.54646 7.12345 3.64298 7.104 3.74048 7.104C3.83798 7.104 3.9345 7.12345 4.02439 7.16122C4.11428 7.19898 4.19573 7.2543 4.26398 7.32393L7.31598 10.4169L12.716 3.99193C12.7222 3.98421 12.7289 3.97686 12.736 3.96993Z" fill="#FCD18B"/> </svg>
            <?php echo $topic['triagem__topic']; ?>
        </p>
    <?php endforeach; ?>
    </div>
</section>