<section class="contact grid__supercontainer">
    <div class="contact__left-wrapper">
        <?php 
            $image = get_field('contact__banner', 6);
            if( !empty( $image ) ):
        ?>

        <img class="contact__banner" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>
    </div>
    <div class="contact__right-wrapper grid__container grid__container--right">
        <h2 class="contact__title grid__item--4-6"><?php the_field('contact__title', 6); ?></h2>
        <p class="contact__content grid__item--4-6"><?php the_field('contact__content', 6); ?></p>
        <div class="contact__phones-container grid__item--4-6">
            <?php
                $contact_data = get_field('contact__phones', 6);
                foreach($contact_data as $item):
            ?>
            <a class="contact__phone-id" href="<?php echo $item['contact__phone-link'] ?>">
                <p><?php echo $item['contact__phone-id'] ?></p>
                <div class="contact__phone-link">
                    <?php 
                        $icon = $item['contact__phone-icon'];
                        if( !empty( $icon ) ):
                            ?>
                    <img class="contact__phone-icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                    <?php endif; ?>
                    <p class="contact__phone-number"><?php echo $item['contact__phone-number'] ?></p>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="contact__cards-container grid__item--4-6">
            <a class="contact__card card" href="<?php the_field('contact__wpp-card-link'); ?>">
                <svg class="contact__card-icon card__icon" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_157_11039)"> <path d="M20.4015 3.98907C19.3012 2.87859 17.9909 1.99819 16.547 1.39918C15.103 0.800173 13.5543 0.494534 11.991 0.500074C5.4405 0.500074 0.102 5.83707 0.096 12.3891C0.096 14.4876 0.645 16.5291 1.6815 18.3366L0 24.5001L6.306 22.8471C8.05051 23.7964 10.0049 24.2941 11.991 24.2946H11.997C18.549 24.2946 23.886 18.9576 23.892 12.3996C23.8935 10.8366 23.5857 9.28885 22.9864 7.84539C22.3871 6.40193 21.5096 5.09132 20.4015 3.98907ZM11.991 22.2816C10.2195 22.2822 8.48055 21.8055 6.957 20.9016L6.597 20.6856L2.856 21.6666L3.855 18.0171L3.621 17.6406C2.63071 16.0661 2.10697 14.2431 2.1105 12.3831C2.1105 6.94407 6.546 2.50707 11.997 2.50707C13.2956 2.50474 14.5818 2.75949 15.7815 3.25661C16.9812 3.75374 18.0706 4.48341 18.987 5.40357C19.9065 6.32015 20.6355 7.40971 21.1319 8.60942C21.6282 9.80913 21.8822 11.0952 21.879 12.3936C21.873 17.8521 17.4375 22.2816 11.991 22.2816ZM17.4135 14.8806C17.118 14.7321 15.6585 14.0136 15.384 13.9116C15.111 13.8141 14.9115 13.7631 14.7165 14.0601C14.517 14.3556 13.947 15.0291 13.776 15.2226C13.605 15.4221 13.428 15.4446 13.131 15.2976C12.8355 15.1476 11.877 14.8356 10.743 13.8201C9.858 13.0326 9.2655 12.0576 9.0885 11.7621C8.9175 11.4651 9.072 11.3061 9.2205 11.1576C9.351 11.0256 9.516 10.8096 9.6645 10.6386C9.8145 10.4676 9.864 10.3416 9.9615 10.1436C10.059 9.94257 10.0125 9.77157 9.939 9.62307C9.864 9.47457 9.2715 8.00907 9.021 7.41807C8.781 6.83457 8.5365 6.91557 8.3535 6.90807C8.1825 6.89757 7.983 6.89757 7.7835 6.89757C7.63285 6.90132 7.48459 6.93616 7.34804 6.99992C7.21149 7.06368 7.08959 7.15497 6.99 7.26807C6.717 7.56507 5.9535 8.28357 5.9535 9.74907C5.9535 11.2146 7.0185 12.6231 7.1685 12.8226C7.3155 13.0221 9.2595 16.0206 12.243 17.3106C12.948 17.6181 13.503 17.7996 13.9365 17.9376C14.649 18.1656 15.2925 18.1311 15.8055 18.0576C16.3755 17.9706 17.562 17.3376 17.8125 16.6431C18.0585 15.9471 18.0585 15.3531 17.9835 15.2286C17.91 15.1026 17.7105 15.0291 17.4135 14.8806Z" fill="#7758D9"/> </g> <defs> <clipPath id="clip0_157_11039"> <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/> </clipPath> </defs> </svg>
                <p class="contact__card-content card__content">Seja atendido pelo Whatsapp</p>
            </a>
        </div>
    </div>
</section>