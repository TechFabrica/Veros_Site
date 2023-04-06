<section class="main grid__container">
    <h2 class="main__title grid__item--4-12"><?php the_field('main__title'); ?></h2>
    <p class="main__subtitle grid__item--4-12"><?php the_field('main__subtitle'); ?></p>

    <div class="main__cards-container grid__item--4-12 grid__container grid__container--no-padding">
        <div class="main__card card grid__item--4-6">
            <?php
                $card_content = get_field('main__1');
                $image = $card_content['main__1-banner'];
                if( !empty( $image ) ):
            ?>

            <img class="main__card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

            <?php endif; ?>

            <div class="main__card-content-container">
                <h4 class="main__card-title"><?php echo $card_content['main__1-title']; ?></h4>
                <p class="main__card-content"><?php echo $card_content['main__1-content']; ?></p>

                <div class="main__checklist">
                    <?php
                        $checklist_data = $card_content['main__1-checklist'];
                        foreach ($checklist_data as $item):
                    ?>
                    <span class="main__checklist-item">
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.73598 0.969934C9.80423 0.9003 9.88568 0.844981 9.97557 0.807217C10.0655 0.769452 10.162 0.75 10.2595 0.75C10.357 0.75 10.4535 0.769452 10.5434 0.807217C10.6333 0.844981 10.7147 0.9003 10.783 0.969934C11.069 1.25893 11.073 1.72593 10.793 2.01993L4.87998 9.00993C4.81285 9.08366 4.73138 9.1429 4.64056 9.18406C4.54974 9.22521 4.45148 9.2474 4.35179 9.24927C4.2521 9.25115 4.15307 9.23266 4.06077 9.19495C3.96847 9.15723 3.88483 9.10108 3.81498 9.02993L0.21698 5.38393C0.0782173 5.24242 0.000488281 5.05213 0.000488281 4.85393C0.000488281 4.65574 0.0782173 4.46545 0.21698 4.32393C0.285226 4.2543 0.366679 4.19898 0.456569 4.16122C0.546459 4.12345 0.64298 4.104 0.74048 4.104C0.837981 4.104 0.934502 4.12345 1.02439 4.16122C1.11428 4.19898 1.19573 4.2543 1.26398 4.32393L4.31598 7.41693L9.71598 0.991934C9.7222 0.984206 9.72888 0.976859 9.73598 0.969934Z" fill="#7758D9"/> </svg>
                        <?php
                            echo $item['main__1-checklist-item'];
                        ?>
                    </span>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <a href="<?php echo $card_content['main__1-link']; ?>" class="main__button button button--line button--round">
                <?php echo $card_content['main__1-link-text']; ?>
            </a>
        </div>
        <div class="main__card card grid__item--4-6">
            <?php
                $card_content = get_field('main__2');
                $image = $card_content['main__2-banner'];
                if( !empty( $image ) ):
            ?>

            <img class="main__card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

            <?php endif; ?>

            <div class="main__card-content-container">
                <h4 class="main__card-title"><?php echo $card_content['main__2-title']; ?></h4>
                <p class="main__card-content"><?php echo $card_content['main__2-content']; ?></p>

                <div class="main__big-number">
                    <span class="main__big-number-icon-container">
                        <svg class="main__big-number-icon" width="32" height="36" viewBox="0 0 32 36" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.999867 23.8323H5.94238L5.94238 12.1175H0.999867L0.999867 23.8323Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> <path d="M26.0575 23.8323H31V12.1175H26.0575V23.8323Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> <path d="M3.49433 7.81981L5.94434 12.1533L16.0225 6.3463L13.5725 2.0128L3.49433 7.81981Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> <path d="M18.4754 1.99877L16.0254 6.33228L26.1036 12.1393L28.5536 7.80578L18.4754 1.99877Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> <path d="M13.5656 33.9761L16.0156 29.6426L5.93744 23.8356L3.48743 28.1691L13.5656 33.9761Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> <path d="M28.5467 28.1917L26.0967 23.8582L16.0185 29.6652L18.4685 33.9987L28.5467 28.1917Z" stroke="#7758D9" stroke-width="2" stroke-miterlimit="10"/> </svg>
                    </span>
                    <p class="main__big-number-content"><?php echo $card_content['main__2-big-number']; ?></p>
                </div>
            </div>

            <a href="<?php echo $card_content['main__2-link']; ?>" class="main__button button button--line button--round">
                <?php echo $card_content['main__2-link-text']; ?>
            </a>
        </div>
    </div>
</section>