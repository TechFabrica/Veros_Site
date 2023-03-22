<section class="especialidades grid__container">
    <h2 class="especialidades__title grid__item--4-12"><?php the_field('especialidades__title'); ?></h2>
    <p class="especialidades__subtitle grid__item--4-12"><?php the_field('especialidades__subtitle'); ?></p>

    <?php
        $especialidades_data = get_field('especialidades__card');
        foreach($especialidades_data as $item):
    ?>
    <a class="especialidades__card card grid__item--4-6" href="<?php echo $item['especialidades__card-link'] ?>">
        <div class="especialidades__support-container">
            <h3 class="especialidades__card-title"><?php echo $item['especialidades__card-title'] ?></h3>
            <p class="especialidades__card-content"><?php echo $item['especialidades__card-content'] ?></p>
        </div>
        <?php 
            $image = $item['especialidades__card-img'];
            if( !empty( $image ) ):
        ?>
        <img class="especialidades__card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <?php endif; ?>

    </a>
    <?php endforeach; ?>
    
    <div class="especialidades__link-container grid__item--4-12">
        <a href="<?php the_field('especialidades__link'); ?>" class="especialidades__link">
            <button class="button button--line button--round">
                <?php the_field('especialidades__link-text'); ?>
            </button>
        </a>
    </div>
</section>