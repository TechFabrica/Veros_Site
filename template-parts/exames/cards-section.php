<section class="cards-section grid__container">
    <h2 class="cards-section__title grid__item--4-12"><?php the_field('cards-section__title') ?></h2>
    <h2 class="cards-section__subtitle grid__item--4-12"><?php the_field('cards-section__subtitle') ?></h2>
    
    <div class="cards-section__tabnav tabnav grid__item--4-12">
        <?php
            $content_data = get_field('cards-section__content-pane');
            foreach($content_data as $item):
        ?>
        <button class="cards-section__tabnav-item tabnav__selector button button--borderless"><?php echo $item['cards-section__pane-title']; ?></button>
        <?php
            endforeach;
        ?>
    </div>

    <?php
        $item = $content_data[0];
    ?>
    <div class="cards-section__tabnav-pane tabnav__pane grid__item--4-12 grid__container grid__container--no-padding">
        <div class="cards-section__content-pane grid__item--4-12 grid__container grid__container--no-padding">
            <h3 class="cards-section__pane-title grid__item--4-9"><?php echo $item['cards-section__pane-title']; ?></h3>
            <p class="cards-section__pane-content grid__item--4-9"><?php echo $item['cards-section__pane-content']; ?></p>

            <div class="cards-section__glide glide grid__item--4-12">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <?php
                            $cards_data = $item['cards-section__cards'];
                            foreach($cards_data as $card):
                        ?>
                        <li class="cards-section__card glide__slide">
                            <h4 class="cards-section__card-title"><?php echo $card['cards-section__card-title']; ?></h4>
                            <p class="cards-section__card-content"><q><?php echo $card['cards-section__card-content']; ?></q></p>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button aria-label="Anterior" class="main__glide-arrow glide__arrow glide__arrow--left" data-glide-dir=">">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.12588 10.3814C3.08598 10.3439 3.05432 10.2993 3.03272 10.2502C3.01112 10.2012 3 10.1486 3 10.0955C3 10.0424 3.01112 9.98977 3.03272 9.94072C3.05432 9.89166 3.08598 9.8471 3.12588 9.80959L7.96493 5.24989L3.12588 0.690199C3.08604 0.652656 3.05444 0.608085 3.03288 0.559031C3.01132 0.509979 3.00022 0.457404 3.00022 0.404309C3.00022 0.351214 3.01132 0.29864 3.03288 0.249587C3.05444 0.200534 3.08604 0.155963 3.12588 0.11842C3.16571 0.0808763 3.21301 0.051095 3.26505 0.030777C3.3171 0.010458 3.37289 9.37375e-07 3.42923 9.34912e-07C3.48556 9.3245e-07 3.54135 0.010458 3.5934 0.030777C3.64545 0.051095 3.69274 0.0808763 3.73258 0.11842L8.87412 4.964C8.91402 5.00151 8.94568 5.04607 8.96728 5.09513C8.98888 5.14419 9 5.19678 9 5.24989C9 5.30301 8.98888 5.3556 8.96728 5.40466C8.94568 5.45371 8.91402 5.49827 8.87412 5.53578L3.73258 10.3814C3.69278 10.419 3.6455 10.4488 3.59344 10.4692C3.54139 10.4895 3.48559 10.5 3.42923 10.5C3.37287 10.5 3.31707 10.4895 3.26501 10.4692C3.21296 10.4488 3.16568 10.419 3.12588 10.3814Z" fill="#0C093C"/> </svg>
                    </button>
                    <button aria-label="Próximo" class="main__glide-arrow glide__arrow glide__arrow--right" data-glide-dir="<">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_359_3226)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.87412 1.61863C8.91402 1.65614 8.94568 1.7007 8.96728 1.74976C8.98888 1.79882 9 1.85141 9 1.90452C9 1.95763 8.98888 2.01023 8.96728 2.05928C8.94568 2.10834 8.91402 2.1529 8.87412 2.19041L4.03507 6.75011L8.87412 11.3098C8.91396 11.3473 8.94556 11.3919 8.96712 11.441C8.98868 11.49 8.99978 11.5426 8.99978 11.5957C8.99978 11.6488 8.98868 11.7014 8.96712 11.7504C8.94556 11.7995 8.91396 11.844 8.87412 11.8816C8.83429 11.9191 8.78699 11.9489 8.73494 11.9692C8.6829 11.9895 8.62711 12 8.57077 12C8.51443 12 8.45865 11.9895 8.4066 11.9692C8.35455 11.9489 8.30726 11.9191 8.26742 11.8816L3.12588 7.03599C3.08597 6.99849 3.05432 6.95393 3.03272 6.90487C3.01112 6.85581 3 6.80322 3 6.75011C3 6.69699 3.01112 6.6444 3.03272 6.59534C3.05432 6.54628 3.08597 6.50172 3.12588 6.46422L8.26742 1.61863C8.30722 1.58103 8.3545 1.55119 8.40656 1.53084C8.45861 1.51048 8.51441 1.5 8.57077 1.5C8.62713 1.5 8.68293 1.51048 8.73499 1.53084C8.78704 1.55119 8.83432 1.58103 8.87412 1.61863Z" fill="#0C093C"/> </g> <defs> <clipPath id="clip0_359_3226"> <rect width="12" height="12" fill="white" transform="translate(12) rotate(90)"/> </clipPath> </defs> </svg>
                    </button>
                </div>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <?php
                        $bullet_index = 0;
                        foreach($cards_data as $card):
                    ?>
                    <button class="glide__bullet" data-glide-dir="=<?php echo $bullet_index ?>"></button>
                    <?php
                        $bullet_index++; 
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
        $item = $content_data[1];
    ?>
    <div class="cards-section__tabnav-pane tabnav__pane grid__item--4-12 grid__container grid__container--no-padding">
        <div class="cards-section__content-pane grid__item--4-12 grid__container grid__container--no-padding">
            <h3 class="cards-section__pane-title grid__item--4-9"><?php echo $item['cards-section__pane-title']; ?></h3>
            <p class="cards-section__pane-content grid__item--4-9"><?php echo $item['cards-section__pane-content']; ?></p>

            <div class="cards-section__glide glide grid__item--4-12">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <?php
                            $cards_data = $item['cards-section__cards'];
                            foreach($cards_data as $card):
                        ?>
                        <li class="cards-section__card glide__slide">
                            <h4 class="cards-section__card-title"><?php echo $card['cards-section__card-title']; ?></h4>
                            <p class="cards-section__card-content"><q><?php echo $card['cards-section__card-content']; ?></q></p>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button aria-label="Anterior" class="main__glide-arrow glide__arrow glide__arrow--left" data-glide-dir=">">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.12588 10.3814C3.08598 10.3439 3.05432 10.2993 3.03272 10.2502C3.01112 10.2012 3 10.1486 3 10.0955C3 10.0424 3.01112 9.98977 3.03272 9.94072C3.05432 9.89166 3.08598 9.8471 3.12588 9.80959L7.96493 5.24989L3.12588 0.690199C3.08604 0.652656 3.05444 0.608085 3.03288 0.559031C3.01132 0.509979 3.00022 0.457404 3.00022 0.404309C3.00022 0.351214 3.01132 0.29864 3.03288 0.249587C3.05444 0.200534 3.08604 0.155963 3.12588 0.11842C3.16571 0.0808763 3.21301 0.051095 3.26505 0.030777C3.3171 0.010458 3.37289 9.37375e-07 3.42923 9.34912e-07C3.48556 9.3245e-07 3.54135 0.010458 3.5934 0.030777C3.64545 0.051095 3.69274 0.0808763 3.73258 0.11842L8.87412 4.964C8.91402 5.00151 8.94568 5.04607 8.96728 5.09513C8.98888 5.14419 9 5.19678 9 5.24989C9 5.30301 8.98888 5.3556 8.96728 5.40466C8.94568 5.45371 8.91402 5.49827 8.87412 5.53578L3.73258 10.3814C3.69278 10.419 3.6455 10.4488 3.59344 10.4692C3.54139 10.4895 3.48559 10.5 3.42923 10.5C3.37287 10.5 3.31707 10.4895 3.26501 10.4692C3.21296 10.4488 3.16568 10.419 3.12588 10.3814Z" fill="#0C093C"/> </svg>
                    </button>
                    <button aria-label="Próximo" class="main__glide-arrow glide__arrow glide__arrow--right" data-glide-dir="<">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_359_3226)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.87412 1.61863C8.91402 1.65614 8.94568 1.7007 8.96728 1.74976C8.98888 1.79882 9 1.85141 9 1.90452C9 1.95763 8.98888 2.01023 8.96728 2.05928C8.94568 2.10834 8.91402 2.1529 8.87412 2.19041L4.03507 6.75011L8.87412 11.3098C8.91396 11.3473 8.94556 11.3919 8.96712 11.441C8.98868 11.49 8.99978 11.5426 8.99978 11.5957C8.99978 11.6488 8.98868 11.7014 8.96712 11.7504C8.94556 11.7995 8.91396 11.844 8.87412 11.8816C8.83429 11.9191 8.78699 11.9489 8.73494 11.9692C8.6829 11.9895 8.62711 12 8.57077 12C8.51443 12 8.45865 11.9895 8.4066 11.9692C8.35455 11.9489 8.30726 11.9191 8.26742 11.8816L3.12588 7.03599C3.08597 6.99849 3.05432 6.95393 3.03272 6.90487C3.01112 6.85581 3 6.80322 3 6.75011C3 6.69699 3.01112 6.6444 3.03272 6.59534C3.05432 6.54628 3.08597 6.50172 3.12588 6.46422L8.26742 1.61863C8.30722 1.58103 8.3545 1.55119 8.40656 1.53084C8.45861 1.51048 8.51441 1.5 8.57077 1.5C8.62713 1.5 8.68293 1.51048 8.73499 1.53084C8.78704 1.55119 8.83432 1.58103 8.87412 1.61863Z" fill="#0C093C"/> </g> <defs> <clipPath id="clip0_359_3226"> <rect width="12" height="12" fill="white" transform="translate(12) rotate(90)"/> </clipPath> </defs> </svg>
                    </button>
                </div>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <?php
                        $bullet_index = 0;
                        foreach($cards_data as $card):
                    ?>
                    <button class="glide__bullet" data-glide-dir="=<?php echo $bullet_index ?>"></button>
                    <?php
                        $bullet_index++; 
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    
</section>