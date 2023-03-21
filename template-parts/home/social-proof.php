<section class="social-proof grid__container">
    <h2 class="social-proof__title grid__item--4-12"><?php the_field('social-proof__title') ?></h2>
    <div class="social-proof__carousel carousel grid__item--4-12">
        <div class="carousel__nav carousel__nav--left"></div>
        <ul class="carousel__content">
            <?php
                $social_proof_data = get_field('social-proof__card');
                foreach($social_proof_data as $item):
            ?>
            <li class="social-proof__card carousel__slide">
                <h4 class="social-proof__card-title"><?php echo $item['social-proof__card-title']; ?></h4>
                <p class="social-proof__card-quote"><?php echo $item['social-proof__card-quote']; ?></p>
                <?php 
                    $icon = $item['social-proof__card-img'];
                    if( !empty( $icon ) ):
                ?>
                <img class="social-proof__card-img" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                <?php endif; ?>
                <p class="social-proof__card-name"><?php echo $item['social-proof__card-name']; ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="carousel__nav carousel__nav--right"></div>
    </div>
</section>