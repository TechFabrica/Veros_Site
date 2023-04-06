<section class="hero grid__supercontainer">
    <div class="hero__right-wrapper">
        <?php 
            $image = get_field('hero__banner');
            if( !empty( $image ) ):
        ?>

        <img class="hero__banner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>
        <?php 
            $image = get_field('hero__banner--desktop');
            if( !empty( $image ) ):
        ?>

        <img class="hero__banner--desktop" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>
    </div>
    <div class="hero__left-wrapper grid__container grid__container--left">
        <div class="path">
            <a href="<?php echo get_home_url(); ?>" class="hero__parent-page">Home</a>
            <svg class="hero__arrow" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_118_3346)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2.32345 7.17704C2.30017 7.15382 2.28169 7.12623 2.26909 7.09586C2.25649 7.06549 2.25 7.03293 2.25 7.00004C2.25 6.96716 2.25649 6.9346 2.26909 6.90422C2.28169 6.87385 2.30017 6.84626 2.32345 6.82304L5.14695 4.00004L2.32345 1.17704C2.3002 1.1538 2.28176 1.1262 2.26918 1.09583C2.25661 1.06546 2.25013 1.03291 2.25013 1.00004C2.25013 0.96717 2.25661 0.934619 2.26918 0.90425C2.28176 0.87388 2.3002 0.846285 2.32345 0.823041C2.34669 0.799798 2.37428 0.781359 2.40465 0.76878C2.43502 0.7562 2.46757 0.749726 2.50045 0.749726C2.53332 0.749726 2.56587 0.7562 2.59624 0.76878C2.62661 0.781359 2.6542 0.799798 2.67745 0.823041L5.67745 3.82304C5.70073 3.84626 5.7192 3.87385 5.7318 3.90422C5.74441 3.9346 5.75089 3.96716 5.75089 4.00004C5.75089 4.03292 5.74441 4.06549 5.7318 4.09586C5.7192 4.12623 5.70073 4.15382 5.67745 4.17704L2.67745 7.17704C2.65422 7.20032 2.62664 7.21879 2.59626 7.2314C2.56589 7.244 2.53333 7.25049 2.50045 7.25049C2.46756 7.25049 2.435 7.244 2.40463 7.2314C2.37426 7.21879 2.34667 7.20032 2.32345 7.17704Z" fill="black" stroke="black"/> </g> <defs> <clipPath id="clip0_118_3346"> <rect width="8" height="8" fill="white" transform="translate(0 8) rotate(-90)"/> </clipPath> </defs> </svg>
            <p class="hero__current-page"><?php the_title(); ?></p>
        </div>
        <h1 class="hero__title"><?php the_field('hero__title'); ?></h2>
        <p class="hero__content"><?php the_field('hero__content'); ?></p>
        <div class="hero__checklist">
            <?php
                $checklist_data = get_field('hero__checklist');
                foreach($checklist_data as $item):
            ?>
            <span class="hero__checklist-item">
                <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.73598 0.969934C9.80423 0.9003 9.88568 0.844981 9.97557 0.807217C10.0655 0.769452 10.162 0.75 10.2595 0.75C10.357 0.75 10.4535 0.769452 10.5434 0.807217C10.6333 0.844981 10.7147 0.9003 10.783 0.969934C11.069 1.25893 11.073 1.72593 10.793 2.01993L4.87998 9.00993C4.81285 9.08366 4.73138 9.1429 4.64056 9.18406C4.54974 9.22521 4.45148 9.2474 4.35179 9.24927C4.2521 9.25115 4.15307 9.23266 4.06077 9.19495C3.96847 9.15723 3.88483 9.10108 3.81498 9.02993L0.21698 5.38393C0.0782173 5.24242 0.000488281 5.05213 0.000488281 4.85393C0.000488281 4.65574 0.0782173 4.46545 0.21698 4.32393C0.285226 4.2543 0.366679 4.19898 0.456569 4.16122C0.546459 4.12345 0.64298 4.104 0.74048 4.104C0.837981 4.104 0.934502 4.12345 1.02439 4.16122C1.11428 4.19898 1.19573 4.2543 1.26398 4.32393L4.31598 7.41693L9.71598 0.991934C9.7222 0.984206 9.72888 0.976859 9.73598 0.969934Z" fill="#7758D9"/> </svg>
                <?php
                    echo $item['hero__checklist-item'];
                ?>
            </span>
            <?php endforeach; ?>
        </div>
    </div>
</section>