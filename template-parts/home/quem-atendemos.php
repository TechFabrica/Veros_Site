<section class="quem-atendemos grid__container">
    <h2 class="quem-atendemos__title grid__item--4-12"><?php the_field('quem-atendemos__title'); ?></h2>
    <p class="quem-atendemos__subtitle grid__item--4-12"><?php the_field('quem-atendemos__subtitle'); ?></p>
    
    <div class="quem-atendemos__menu grid__item--4-12">
        <?php
            $hero_data = get_field('quem-atendemos__content-container');
            foreach($hero_data as $item):
        ?>
        <button class="quem-atendemos__menu-item button button--borderless"><?php echo $item['quem-atendemos__content-title']; ?></button>
        <?php
            endforeach;
        ?>
    </div>

    <?php
        foreach($hero_data as $item):
        $image = $item['quem-atendemos__content-img'];
        if( !empty( $image ) ):
    ?>
    <img class="quem-atendemos__content-img grid__item--4-6" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>
    <div class="quem-atendemos__content-container grid__item--4-6">
        <h3 class="quem-atendemos__content-title"><?php echo $item['quem-atendemos__content-title']; ?></h3>
        <p class="quem-atendemos__content"><?php echo $item['quem-atendemos__content']; ?></p>
        <div class="quem-atendemos__checklist">
        <?php
            foreach ($item['quem-atendemos__checklist'] as $checklist):
        ?>
            <span class="quem-atendemos__checklist-item">
                <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.73598 0.969934C9.80423 0.9003 9.88568 0.844981 9.97557 0.807217C10.0655 0.769452 10.162 0.75 10.2595 0.75C10.357 0.75 10.4535 0.769452 10.5434 0.807217C10.6333 0.844981 10.7147 0.9003 10.783 0.969934C11.069 1.25893 11.073 1.72593 10.793 2.01993L4.87998 9.00993C4.81285 9.08366 4.73138 9.1429 4.64056 9.18406C4.54974 9.22521 4.45148 9.2474 4.35179 9.24927C4.2521 9.25115 4.15307 9.23266 4.06077 9.19495C3.96847 9.15723 3.88483 9.10108 3.81498 9.02993L0.21698 5.38393C0.0782173 5.24242 0.000488281 5.05213 0.000488281 4.85393C0.000488281 4.65574 0.0782173 4.46545 0.21698 4.32393C0.285226 4.2543 0.366679 4.19898 0.456569 4.16122C0.546459 4.12345 0.64298 4.104 0.74048 4.104C0.837981 4.104 0.934502 4.12345 1.02439 4.16122C1.11428 4.19898 1.19573 4.2543 1.26398 4.32393L4.31598 7.41693L9.71598 0.991934C9.7222 0.984206 9.72888 0.976859 9.73598 0.969934Z" fill="#7758D9"/> </svg>
                <?php
                    echo $checklist['quem-atendemos__checklist-item'];
                ?>
            </span>
        <?php
            endforeach;
        ?>
        <button class="quem-atendemos__cta button">
            <?php the_field('quem-atendemos__cta'); ?>
        </button>
        </div>
    </div>
    <?php
        endforeach;
    ?>

</section>