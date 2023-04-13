<section class="social-proof grid__container">
    <h2 class="social-proof__title grid__item--4-12"><?php the_field('social-proof__title') ?></h2>
    <div class="social-proof__glide glide grid__item--4-12">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php
                    $social_proof_data = get_field('social-proof__card');
                    foreach($social_proof_data as $item):
                ?>
                <li class="social-proof__card glide__slide">
                    <h4 class="social-proof__card-title"><?php echo $item['social-proof__card-title']; ?></h4>
                    <p class="social-proof__card-quote"><q><?php echo $item['social-proof__card-quote']; ?></q></p>
                    <?php 
                        $icon = $item['social-proof__card-img'];
                        if( !empty( $icon ) ):
                    ?>
                    <div class="social-proof__card-author">
                        <img class="social-proof__card-img" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                        <?php endif; ?>
                        <p class="social-proof__card-name"><?php echo $item['social-proof__card-name']; ?></p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button aria-label="Anterior" class="social-proof__glide-arrow glide__arrow glide__arrow--left button button--round" data-glide-dir="<">
                <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.87412 0.118631C5.91402 0.156141 5.94568 0.2007 5.96728 0.249758C5.98888 0.298815 6 0.351407 6 0.404521C6 0.457634 5.98888 0.510226 5.96728 0.559283C5.94568 0.608341 5.91402 0.652901 5.87412 0.69041L1.03507 5.25011L5.87412 9.8098C5.91396 9.84734 5.94556 9.89192 5.96712 9.94097C5.98868 9.99002 5.99978 10.0426 5.99978 10.0957C5.99978 10.1488 5.98868 10.2014 5.96712 10.2504C5.94556 10.2995 5.91396 10.344 5.87412 10.3816C5.83429 10.4191 5.78699 10.4489 5.73494 10.4692C5.6829 10.4895 5.62711 10.5 5.57077 10.5C5.51443 10.5 5.45865 10.4895 5.4066 10.4692C5.35455 10.4489 5.30726 10.4191 5.26742 10.3816L0.125876 5.53599C0.0859749 5.49849 0.0543182 5.45393 0.0327179 5.40487C0.0111177 5.35581 -7.08648e-07 5.30322 -7.06327e-07 5.25011C-7.04005e-07 5.19699 0.0111177 5.1444 0.032718 5.09534C0.0543182 5.04628 0.085975 5.00172 0.125876 4.96422L5.26742 0.118631C5.30722 0.0810267 5.3545 0.0511918 5.40656 0.0308351C5.45861 0.0104784 5.51441 -2.12256e-08 5.57077 -1.87621e-08C5.62713 -1.62987e-08 5.68293 0.0104784 5.73499 0.0308351C5.78704 0.0511918 5.83432 0.0810267 5.87412 0.118631Z" fill="#EBF0EC"/> </svg>
            </button>
            <button aria-label="Próximo" class="social-proof__glide-arrow glide__arrow glide__arrow--right button button--round" data-glide-dir=">">
                <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M0.125877 10.8814C0.0859754 10.8439 0.0543181 10.7993 0.0327181 10.7502C0.011118 10.7012 -1.53605e-08 10.6486 -1.76822e-08 10.5955C-2.00038e-08 10.5424 0.011118 10.4898 0.032718 10.4407C0.0543181 10.3917 0.0859754 10.3471 0.125877 10.3096L4.96493 5.74989L0.125876 1.1902C0.0860395 1.15266 0.0544393 1.10808 0.0328799 1.05903C0.0113204 1.00998 0.00022389 0.957404 0.000223887 0.904309C0.000223885 0.851214 0.0113204 0.79864 0.0328798 0.749587C0.0544393 0.700534 0.0860395 0.655963 0.125876 0.61842C0.165713 0.580876 0.213006 0.551095 0.265055 0.530777C0.317104 0.510458 0.37289 0.500001 0.429227 0.500001C0.485565 0.500001 0.541351 0.510458 0.5934 0.530777C0.645449 0.551095 0.692742 0.580876 0.732579 0.61842L5.87412 5.464C5.91402 5.50151 5.94568 5.54607 5.96728 5.59513C5.98888 5.64419 6 5.69678 6 5.74989C6 5.80301 5.98888 5.8556 5.96728 5.90466C5.94568 5.95371 5.91402 5.99827 5.87412 6.03578L0.732579 10.8814C0.692779 10.919 0.645497 10.9488 0.593443 10.9692C0.541389 10.9895 0.485585 11 0.429228 11C0.37287 11 0.317066 10.9895 0.265012 10.9692C0.212958 10.9488 0.165677 10.919 0.125877 10.8814Z" fill="#EBF0EC"/> </svg>
            </button>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
            <?php
                $bullet_index = 0;
                foreach($social_proof_data as $item):
            ?>
            <button class="glide__bullet" data-glide-dir="=<?php echo $bullet_index ?>"></button>
            <?php
                $bullet_index++; 
                endforeach;
            ?>
        </div>
    </div>
</section>