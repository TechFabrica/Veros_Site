<section class="main grid__container">
    <h1 class="main__title grid__item--4-12"><?php the_field('main__title'); ?></h1>
    <p class="main__subtitle grid__item--4-12"><?php the_field('main__subtitle'); ?></p>

    <div class="main__cards-container grid__item--4-12 grid__container grid__container--no-padding">
        <?php
            $cards_data = get_field('main__cards');
            foreach( $cards_data as $item ):
        ?>
        <a href="<?php echo $item['main__card-link'] ?>" class="main__card card grid__item--4-3">
            <?php 
                $icon = $item['main__card-icon'];
                if( !empty( $icon ) ):
            ?>
            <div class="main__card-icon-container">
                <img class="main__card-icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
            </div>
            <?php endif; ?>
            <div class="main__card-content-container">
                <p class="main__card-title"><?php echo $item['main__card-title']; ?></p>
                <p class="main__card-content"><?php echo $item['main__card-content']; ?></p>
            </div>
        </a>
        <?php endforeach; ?>
    </div>

    <p class="main__caption grid__item--4-12">
        <svg class="main__caption-icon" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_887_9672)"> <path d="M8 4C8 3.86739 7.94732 3.74021 7.85355 3.64645C7.75979 3.55268 7.63261 3.5 7.5 3.5C7.36739 3.5 7.24021 3.55268 7.14645 3.64645C7.05268 3.74021 7 3.86739 7 4V9.5C7.00003 9.58813 7.02335 9.67469 7.06761 9.75091C7.11186 9.82712 7.17547 9.89029 7.252 9.934L10.752 11.934C10.8669 11.9961 11.0014 12.0108 11.127 11.9749C11.2525 11.9391 11.3591 11.8556 11.4238 11.7422C11.4886 11.6288 11.5065 11.4946 11.4736 11.3683C11.4408 11.2419 11.3598 11.1334 11.248 11.066L8 9.21V4Z" fill="black" fill-opacity="0.5"/> <path d="M8 16.5C10.1217 16.5 12.1566 15.6571 13.6569 14.1569C15.1571 12.6566 16 10.6217 16 8.5C16 6.37827 15.1571 4.34344 13.6569 2.84315C12.1566 1.34285 10.1217 0.5 8 0.5C5.87827 0.5 3.84344 1.34285 2.34315 2.84315C0.842855 4.34344 0 6.37827 0 8.5C0 10.6217 0.842855 12.6566 2.34315 14.1569C3.84344 15.6571 5.87827 16.5 8 16.5ZM15 8.5C15 10.3565 14.2625 12.137 12.9497 13.4497C11.637 14.7625 9.85652 15.5 8 15.5C6.14348 15.5 4.36301 14.7625 3.05025 13.4497C1.7375 12.137 1 10.3565 1 8.5C1 6.64348 1.7375 4.86301 3.05025 3.55025C4.36301 2.2375 6.14348 1.5 8 1.5C9.85652 1.5 11.637 2.2375 12.9497 3.55025C14.2625 4.86301 15 6.64348 15 8.5Z" fill="black" fill-opacity="0.5"/> </g> <defs> <clipPath id="clip0_887_9672"> <rect width="16" height="16" fill="white" transform="translate(0 0.5)"/> </clipPath> </defs> </svg>
        <?php the_field('main__caption'); ?>
    </p>
</section>