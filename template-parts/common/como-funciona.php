<section class="como-funciona grid__container">
    <div class="como-funciona__top-container grid__item--4-12">
        <div class="como-funciona__title-container">
            <p class="como-funciona__sect-title">Como funciona?</p>
            <h2 class="como-funciona__title"><?php the_field('como-funciona__title'); ?></h2>
        </div>
    </div>

    <div class="como-funciona__bottom-container grid__item--4-12">
        <?php
            $steps_data = get_field('como-funciona__steps');
            $step_index = 1;
            foreach( $steps_data as $item ):
        ?>
        <div class="como-funciona__step">
            <?php 
                $icon = $item['como-funciona__step-icon'];
                if( !empty( $icon ) ):
            ?>

            <img class="como-funciona__step-icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />

            <?php endif; ?>
            <p class="como-funciona__step-index"><?php echo '0'.$step_index; $step_index++; ?></p>
            <h3 class="como-funciona__step-title"><?php echo $item['como-funciona__step-title']; ?></h3>
            <p class="como-funciona__step-content"><?php echo $item['como-funciona__step-content']; ?></´p>
        </div>
        <?php endforeach; ?>
    </div>
    <?php
        if( !empty(the_field('como-funciona__button-link')) ):
    ?>
    <div class="como-funciona__button-container grid__item--4-12">
        <a href="<?php the_field('como-funciona__button-link') ?>" class="como-funciona__button button button--line-inverse button--round"><?php the_field('como-funciona__button-text') ?></a>
    </div>
    <?php endif; ?>
</section>