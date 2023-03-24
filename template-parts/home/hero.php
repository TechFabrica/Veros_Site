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
        <h2 class="hero__title">
            <?php the_field('hero__title'); ?>
            <span class="hero__title--emphasis">
                <?php
                    $pet_types_data = get_field('hero__pet-types');
                    foreach($pet_types_data as $pet):
                ?>
                    <span class="hero__pet-type"><?php echo $pet['hero__pet-type']; ?></span>
                <?php endforeach; ?>
                <span class="hero__pet-type-js-slot"></span>
            </span>
        </h2>
        <p class="hero__content"><?php the_field('hero__content'); ?></p>
    </div>
    <div class="hero__bottom-wrapper grid__container">
        <?php
            $hero_data = get_field('hero__card');
            foreach($hero_data as $item):
        ?>
        <a class="hero__card card grid__item--4-2" href="<?php echo $item['hero__card-link'] ?>">
            <?php 
                $icon = $item['hero__card-icon'];
                if( !empty( $icon ) ):
            ?>
            <img class="card__icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
            <?php endif; ?>

            <p class="card__content"><?php echo $item['hero__card-content'] ?></p>
        </a>
        <?php
            endforeach;
        ?>
    </div>
</section>