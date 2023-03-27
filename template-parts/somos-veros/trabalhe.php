<section class="trabalhe grid__container">
    <?php 
        $image = get_field('trabalhe__banner');
        if( !empty( $image ) ):
    ?>
    
    <img class="trabalhe__banner grid__item--4-6" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    
    <?php endif; ?>
    <div class="trabalhe__content-container grid__item--4-6">
        <h3 class="trabalhe__title"><?php echo get_field('trabalhe__title'); ?></h3>
        <p class="trabalhe__content"><?php echo get_field('trabalhe__content'); ?></p>
        <div class="trabalhe__big-numbers-container">
            <?php
                $big_numbers_data = get_field('trabalhe__big-numbers');
                foreach($big_numbers_data as $item):
            ?>
            <div class="trabalhe__big-number grid__item--3-3">
                <span class="trabalhe__big-number-icon-container">
                    <svg class="trabalhe__big-number-icon" width="32" height="36" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.999867 23.8323H5.94238L5.94238 12.1175H0.999867L0.999867 23.8323Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> <path d="M26.0575 23.8323H31V12.1175H26.0575V23.8323Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> <path d="M3.49433 7.81981L5.94434 12.1533L16.0225 6.3463L13.5725 2.0128L3.49433 7.81981Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> <path d="M18.4754 1.99877L16.0254 6.33228L26.1036 12.1393L28.5536 7.80578L18.4754 1.99877Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> <path d="M13.5656 33.9761L16.0156 29.6426L5.93744 23.8356L3.48743 28.1691L13.5656 33.9761Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> <path d="M28.5467 28.1917L26.0967 23.8582L16.0185 29.6652L18.4685 33.9987L28.5467 28.1917Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> </svg>
                </span>
                <p class="trabalhe__big-number-content"><?php echo $item['trabalhe__big-number'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <div>
            <a href="<?php the_field('trabalhe__link'); ?>" class="trabalhe__link"><?php the_field('trabalhe__link-text'); ?></a>
            <svg class="trabalhe__arrow" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_118_3346)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2.32345 7.17704C2.30017 7.15382 2.28169 7.12623 2.26909 7.09586C2.25649 7.06549 2.25 7.03293 2.25 7.00004C2.25 6.96716 2.25649 6.9346 2.26909 6.90422C2.28169 6.87385 2.30017 6.84626 2.32345 6.82304L5.14695 4.00004L2.32345 1.17704C2.3002 1.1538 2.28176 1.1262 2.26918 1.09583C2.25661 1.06546 2.25013 1.03291 2.25013 1.00004C2.25013 0.96717 2.25661 0.934619 2.26918 0.90425C2.28176 0.87388 2.3002 0.846285 2.32345 0.823041C2.34669 0.799798 2.37428 0.781359 2.40465 0.76878C2.43502 0.7562 2.46757 0.749726 2.50045 0.749726C2.53332 0.749726 2.56587 0.7562 2.59624 0.76878C2.62661 0.781359 2.6542 0.799798 2.67745 0.823041L5.67745 3.82304C5.70073 3.84626 5.7192 3.87385 5.7318 3.90422C5.74441 3.9346 5.75089 3.96716 5.75089 4.00004C5.75089 4.03292 5.74441 4.06549 5.7318 4.09586C5.7192 4.12623 5.70073 4.15382 5.67745 4.17704L2.67745 7.17704C2.65422 7.20032 2.62664 7.21879 2.59626 7.2314C2.56589 7.244 2.53333 7.25049 2.50045 7.25049C2.46756 7.25049 2.435 7.244 2.40463 7.2314C2.37426 7.21879 2.34667 7.20032 2.32345 7.17704Z" fill="black" stroke="black"/> </g> <defs> <clipPath id="clip0_118_3346"> <rect width="8" height="8" fill="white" transform="translate(0 8) rotate(-90)"/> </clipPath> </defs> </svg>
        </div>
    </div>
</section>