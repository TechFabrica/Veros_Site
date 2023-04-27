<section class="hero grid__supercontainer">
<div class="hero__right-wrapper">
        <?php
            $banners_data = get_field('hero__banner');
            $hidden_class = '';
            foreach( $banners_data as $item ):
                $image = $item['hero__banner-img'];
        ?>

            <img class="hero__banner<?php echo $hidden_class ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php
                $hidden_class= ' hero__banner--hidden';
            endforeach;
        ?>
        
        <?php
            $banners_data = get_field('hero__banner--desktop');
            $hidden_class = '';
            foreach( $banners_data as $item ):
                $image = $item['hero__banner-img--desktop'];
        ?>

            <img class="hero__banner--desktop<?php echo $hidden_class ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php
                $hidden_class= ' hero__banner--desktop-hidden';
            endforeach;
        ?>
    </div>
    <div class="hero__left-wrapper grid__container grid__container--left">
        <div class="path">
            <a href="<?php echo get_home_url(); ?>" class="hero__parent-page">Home</a>
            <svg class="hero__arrow" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_118_3346)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2.32345 7.17704C2.30017 7.15382 2.28169 7.12623 2.26909 7.09586C2.25649 7.06549 2.25 7.03293 2.25 7.00004C2.25 6.96716 2.25649 6.9346 2.26909 6.90422C2.28169 6.87385 2.30017 6.84626 2.32345 6.82304L5.14695 4.00004L2.32345 1.17704C2.3002 1.1538 2.28176 1.1262 2.26918 1.09583C2.25661 1.06546 2.25013 1.03291 2.25013 1.00004C2.25013 0.96717 2.25661 0.934619 2.26918 0.90425C2.28176 0.87388 2.3002 0.846285 2.32345 0.823041C2.34669 0.799798 2.37428 0.781359 2.40465 0.76878C2.43502 0.7562 2.46757 0.749726 2.50045 0.749726C2.53332 0.749726 2.56587 0.7562 2.59624 0.76878C2.62661 0.781359 2.6542 0.799798 2.67745 0.823041L5.67745 3.82304C5.70073 3.84626 5.7192 3.87385 5.7318 3.90422C5.74441 3.9346 5.75089 3.96716 5.75089 4.00004C5.75089 4.03292 5.74441 4.06549 5.7318 4.09586C5.7192 4.12623 5.70073 4.15382 5.67745 4.17704L2.67745 7.17704C2.65422 7.20032 2.62664 7.21879 2.59626 7.2314C2.56589 7.244 2.53333 7.25049 2.50045 7.25049C2.46756 7.25049 2.435 7.244 2.40463 7.2314C2.37426 7.21879 2.34667 7.20032 2.32345 7.17704Z" fill="black" stroke="black"/> </g> <defs> <clipPath id="clip0_118_3346"> <rect width="8" height="8" fill="white" transform="translate(0 8) rotate(-90)"/> </clipPath> </defs> </svg>
            <a href="http://localhost/veros_wordpress/servicos/" class="hero__parent-page">Serviços</a>
            <svg class="hero__arrow" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_118_3346)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2.32345 7.17704C2.30017 7.15382 2.28169 7.12623 2.26909 7.09586C2.25649 7.06549 2.25 7.03293 2.25 7.00004C2.25 6.96716 2.25649 6.9346 2.26909 6.90422C2.28169 6.87385 2.30017 6.84626 2.32345 6.82304L5.14695 4.00004L2.32345 1.17704C2.3002 1.1538 2.28176 1.1262 2.26918 1.09583C2.25661 1.06546 2.25013 1.03291 2.25013 1.00004C2.25013 0.96717 2.25661 0.934619 2.26918 0.90425C2.28176 0.87388 2.3002 0.846285 2.32345 0.823041C2.34669 0.799798 2.37428 0.781359 2.40465 0.76878C2.43502 0.7562 2.46757 0.749726 2.50045 0.749726C2.53332 0.749726 2.56587 0.7562 2.59624 0.76878C2.62661 0.781359 2.6542 0.799798 2.67745 0.823041L5.67745 3.82304C5.70073 3.84626 5.7192 3.87385 5.7318 3.90422C5.74441 3.9346 5.75089 3.96716 5.75089 4.00004C5.75089 4.03292 5.74441 4.06549 5.7318 4.09586C5.7192 4.12623 5.70073 4.15382 5.67745 4.17704L2.67745 7.17704C2.65422 7.20032 2.62664 7.21879 2.59626 7.2314C2.56589 7.244 2.53333 7.25049 2.50045 7.25049C2.46756 7.25049 2.435 7.244 2.40463 7.2314C2.37426 7.21879 2.34667 7.20032 2.32345 7.17704Z" fill="black" stroke="black"/> </g> <defs> <clipPath id="clip0_118_3346"> <rect width="8" height="8" fill="white" transform="translate(0 8) rotate(-90)"/> </clipPath> </defs> </svg>
            <p class="hero__current-page"><?php the_title(); ?></p>
        </div>
        <h1 class="hero__title"><?php the_field('hero__title'); ?></h2>
        <p class="hero__content"><?php the_field('hero__content'); ?></p>
        
        <a href="<?php the_field('hero__button-link'); ?>" class="hero__button button button--line button--round">
            <?php the_field('hero__button-text'); ?>
        </a>
    </div>
</section>