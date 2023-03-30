<section class="servicos grid__container">
    <h2 class="servicos__title grid__item--4-12"><?php the_field('servicos__title'); ?></h2>
    <p class="servicos__subtitle grid__item--4-9"><?php the_field('servicos__subt'); ?></p>
    <a class="servicos__link grid__item--4-3" href="<?php the_field('servicos__link'); ?>">
        <?php the_field('servicos__link-text'); ?>
        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M0.875877 11.1314C0.835975 11.0939 0.804318 11.0493 0.782718 11.0002C0.761118 10.9512 0.75 10.8986 0.75 10.8455C0.75 10.7924 0.761118 10.7398 0.782718 10.6907C0.804318 10.6417 0.835975 10.5971 0.875877 10.5596L5.71493 5.99989L0.875876 1.4402C0.83604 1.40265 0.804439 1.35808 0.78288 1.30903C0.76132 1.25998 0.750224 1.2074 0.750224 1.15431C0.750224 1.10121 0.76132 1.04864 0.78288 0.999586C0.804439 0.950533 0.836039 0.905963 0.875876 0.868419C0.915713 0.830875 0.963006 0.801094 1.01505 0.780776C1.0671 0.760457 1.12289 0.75 1.17923 0.75C1.23556 0.75 1.29135 0.760457 1.3434 0.780776C1.39545 0.801094 1.44274 0.830875 1.48258 0.868419L6.62412 5.714C6.66402 5.75151 6.69568 5.79607 6.71728 5.84513C6.73888 5.89419 6.75 5.94678 6.75 5.99989C6.75 6.05301 6.73888 6.1056 6.71728 6.15466C6.69568 6.20371 6.66402 6.24827 6.62412 6.28578L1.48258 11.1314C1.44278 11.169 1.3955 11.1988 1.34344 11.2192C1.29139 11.2395 1.23559 11.25 1.17923 11.25C1.12287 11.25 1.06707 11.2395 1.01501 11.2192C0.962958 11.1988 0.915677 11.169 0.875877 11.1314Z" fill="#0C093C" stroke="#0C093C"/> </svg>
    </a>

    <?php
        $servicos_data = get_field('servicos__card');
        foreach($servicos_data as $item):
    ?>
    <a class="servicos__card card card--hover grid__item--4-4" href="<?php echo $item['servicos__card-link'] ?>">
        <?php 
            $icon = $item['servicos__card-icon'];
            if( !empty( $icon ) ):
        ?>
        <img class="card__icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
        <?php endif; ?>

        <p class="card__content"><?php echo $item['servicos__card-content'] ?></p>
    </a>
    <?php endforeach; ?>
</section>