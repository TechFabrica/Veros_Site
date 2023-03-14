<section class="hero grid__supercontainer">
    <div class="hero__right-wrapper">
        <?php 
            $image = get_field('hero__banner');
            if( !empty( $image ) ):
        ?>

        <img class="hero__banner grid__item--4-6" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>
    </div>
    <div class="hero__left-wrapper grid__container grid__container--left">
        <h2 class="hero__title heading--32"><?php the_field('hero__title'); ?></h2>
        <p class="hero__content body--18"><?php the_field('hero__content'); ?></p>
    </div>
    <div class="hero__bottom-wrapper grid__container body--16">
        <?php
            $hero_data = get_field('hero__card');
            foreach($hero_data as $item):
        ?>
        <div class="hero__card card grid__item--4-2">
            <?php 
                $icon = $item['hero__card-icon'];
                if( !empty( $icon ) ):
            ?>
            <img class="card__icon" src="<?php echo esc_url($icon['url']); ?>" alt="">
            <?php endif; ?>
            <p class="card__content"><?php echo $item['hero__card-content'] ?></p>
        </div>
        <?php
            endforeach;
        ?>
    </div>
</section>