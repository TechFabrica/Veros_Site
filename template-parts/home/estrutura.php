<section class="estrutura grid__supercontainer">
    <div class="estrutura__left-wrapper-1 grid__container grid__container--left">
        <picture class="estrutura__graphic">
            <source media="(min-width:1024px)" srcset="<?php echo get_template_directory_uri() ?>/assets/images/graphics/pattern-amarelo-1--desktop.png">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/graphics/pattern-amarelo-1.png">
        </picture>
        <h2 class="estrutura__title grid__item--4-5"><?php the_field('estrutura__title'); ?></h2>
        <p class="estrutura__subtitle grid__item--4-5"><?php the_field('estrutura__subtitle'); ?></p>
        <a class="estrutura__link grid__item--4-5" href="<?php the_field('estrutura__link'); ?>">
            <?php the_field('estrutura__link-text'); ?>
            <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.32296 6.927C1.29968 6.90377 1.28121 6.87618 1.2686 6.84581C1.256 6.81544 1.24951 6.78288 1.24951 6.75C1.24951 6.71711 1.256 6.68455 1.2686 6.65418C1.28121 6.62381 1.29968 6.59622 1.32296 6.573L4.14646 3.75L1.32296 0.926996C1.29971 0.903752 1.28128 0.876157 1.2687 0.845788C1.25612 0.815418 1.24964 0.782867 1.24964 0.749996C1.24964 0.717124 1.25612 0.684574 1.2687 0.654204C1.28128 0.623834 1.29971 0.59624 1.32296 0.572996C1.3462 0.549752 1.3738 0.531313 1.40417 0.518734C1.43454 0.506155 1.46709 0.49968 1.49996 0.49968C1.53283 0.49968 1.56538 0.506155 1.59575 0.518734C1.62612 0.531313 1.65371 0.549752 1.67696 0.572996L4.67696 3.573C4.70024 3.59622 4.71871 3.62381 4.73131 3.65418C4.74392 3.68455 4.75041 3.71711 4.75041 3.75C4.75041 3.78288 4.74392 3.81544 4.73131 3.84581C4.71871 3.87618 4.70024 3.90377 4.67696 3.927L1.67696 6.927C1.65374 6.95028 1.62615 6.96875 1.59578 6.98135C1.5654 6.99396 1.53284 7.00044 1.49996 7.00044C1.46707 7.00044 1.43451 6.99396 1.40414 6.98135C1.37377 6.96875 1.34618 6.95028 1.32296 6.927Z" fill="white" stroke="white"/> </svg>
        </a>
    </div>
    <div class="estrutura__left-wrapper-2">
        <?php 
            $image = get_field('estrutura__banner');
            if( !empty( $image ) ):
        ?>

        <img class="estrutura__banner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>
    </div>
    <div class="estrutura__right-wrapper grid__container grid__container--right">
        <?php
            $estrutura_data = get_field('estrutura__content-container');
            foreach($estrutura_data as $item):
        ?>
        <div class="estrutura__support-container grid__item--4-6 grid__container grid__container--6-columns grid__container--no-padding">
            <div class="estrutura__content-container grid__item--4-4">
                <h3 class="estrutura__content-title"><?php echo $item['estrutura__content-title'] ?></h3>
                <p class="estrutura__content"><?php echo $item['estrutura__content'] ?></p>
            </div>
            <div class="estrutura__img-container grid__item--4-2">
                <?php 
                    $image = $item['estrutura__content-img'];
                    if( !empty( $image ) ):
                        ?>
                <img class="estrutura__content-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>