<section class="main grid__container">
    <h2 class="main__title grid__item--4-12"><?php the_field('main__title'); ?></h2>
    <p class="main__subtitle grid__item--4-12"><?php the_field('main__subtitle'); ?></p>
    
    <div class="main__items-wrapper grid__item--4-12">
        <?php
            $items_data = get_field('main__items');
            foreach($items_data as $item):
        ?>
        <div class="main__item-container grid__container grid__container--no-padding">
            <?php 
                $thumbnail = $item['main__item-img'];
                if( !empty( $thumbnail ) ):
            ?>

            <a href="<?php echo $item['main__item-title-link']; ?>" class="main__item-img grid__item--4-3">
                <img src="<?php echo esc_url($thumbnail['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>

            <?php endif; ?>
            <div class="main__item-subcontainer grid__item--4-9">
                <h3 class="main__item-title"><a href="<?php echo $item['main__item-title-link']; ?>"><?php echo $item['main__item-title']; ?></a></h3>
                <p class="main__item-content"><?php echo $item['main__item-content']; ?></p>

                <?php
                    $button = $item['main__item-button-text'];
                    if( !empty( $button )):
                ?>
                <a href="<?php echo $item['main__item-button-link']; ?>" class="main__item-button button button--primary button--round">
                    <?php echo $item['main__item-button-text']; ?>
                </a>
                <?php endif; ?>
                <?php
                    $button = $item['main__item-button-text--line'];
                    if( !empty( $button )):
                ?>
                <a href="<?php echo $item['main__item-button-link--line']; ?>" class="main__item-button button button--line button--round">
                    <?php echo $item['main__item-button-text--line']; ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>