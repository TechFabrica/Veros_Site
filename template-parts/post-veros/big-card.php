<section class="big-card grid__container grid__container">
    <?php
        $image = get_field('big-card__banner');
        if( !empty( $image ) ):
    ?>

    <img class="big-card__banner grid__item--4-12" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>
    <?php 
        $image = get_field('big-card__banner--desktop');
        if( !empty( $image ) ):
    ?>

    <img class="big-card__banner--desktop grid__item--4-12" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <?php endif; ?>

    <div class="big-card__card card">
        <div class="big-card__card-text-container">
            <h3 class="big-card__card-title"><?php the_field('big-card__title'); ?></h3>
            <p class="big-card__card-content"><?php the_field('big-card__content'); ?></p>
        </div>
        <div class="big-card__card-checklist-container">
            <h4 class="big-card__card-checklist-title"><?php the_field('big-card__checklist-title'); ?></h4>
            <?php
                $checklist_data = get_field('big-card__checklist');
                $hide_checklist_index = 0;
                $hide_checklist_class = '';
                foreach ($checklist_data as $checklist):
                    ?>
            <span class="big-card__card-checklist-item<?php echo $hide_checklist_class; ?>">
                <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.73598 0.969934C9.80423 0.9003 9.88568 0.844981 9.97557 0.807217C10.0655 0.769452 10.162 0.75 10.2595 0.75C10.357 0.75 10.4535 0.769452 10.5434 0.807217C10.6333 0.844981 10.7147 0.9003 10.783 0.969934C11.069 1.25893 11.073 1.72593 10.793 2.01993L4.87998 9.00993C4.81285 9.08366 4.73138 9.1429 4.64056 9.18406C4.54974 9.22521 4.45148 9.2474 4.35179 9.24927C4.2521 9.25115 4.15307 9.23266 4.06077 9.19495C3.96847 9.15723 3.88483 9.10108 3.81498 9.02993L0.21698 5.38393C0.0782173 5.24242 0.000488281 5.05213 0.000488281 4.85393C0.000488281 4.65574 0.0782173 4.46545 0.21698 4.32393C0.285226 4.2543 0.366679 4.19898 0.456569 4.16122C0.546459 4.12345 0.64298 4.104 0.74048 4.104C0.837981 4.104 0.934502 4.12345 1.02439 4.16122C1.11428 4.19898 1.19573 4.2543 1.26398 4.32393L4.31598 7.41693L9.71598 0.991934C9.7222 0.984206 9.72888 0.976859 9.73598 0.969934Z" fill="#7758D9"/> </svg>
                <?php
                    echo $checklist['big-card__checklist-item'];
                    ?>
            </span>
            <?php
                $hide_checklist_index++;
                if ($hide_checklist_index >= 4){
                    $hide_checklist_class = ' big-card__card-checklist-item--extra';
                }
                endforeach;
            ?>
        </div>
        <div class="big-card__card-buttons-container">
            <?php
                $buttons_data = get_field('big-card__buttons');
                if( !empty( $buttons_data['big-card__button-1-text'] ) ):
            ?>
            <a href="<?php echo $buttons_data['big-card__button-1-link']; ?>" class="big-card__card-button button button--line button--round"><?php echo $buttons_data['big-card__button-1-text']; ?></a>
            <?php
                endif;
                if( !empty( $buttons_data['big-card__button-2-text'] ) ):
            ?>
            <a href="<?php echo $buttons_data['big-card__button-2-link']; ?>" class="big-card__card-button button button--primary button--round"><?php echo $buttons_data['big-card__button-2-text']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>