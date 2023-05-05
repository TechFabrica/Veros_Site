<section class="main grid__container">
    <div class="main__container grid__item--4-12">
        <?php
            $panes_data = get_field('main__panes');
            for($i = 0; $i < 2; $i++):
                if($panes_data[$i]['main__pane-location'] == 'after'):
                    $image = $panes_data[$i]['main__pane-img'];
                    if( !empty( $image ) ):
        ?>
            <div class="main__img-container">
                <img class="main__pane-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
            </div>
            <?php
                endif;
            ?>
        <div class="main__content-container--2">
        <h4 class="main__pane-title"><?php echo $panes_data[$i]['main__pane-title']; ?></h4>
            <?php
                if ( $panes_data[$i]['main__pane-content-type'] == 'text' ):
            ?>
            <p class="main__pane-content"><?php echo $panes_data[$i]['main__pane-content']; ?></p>
            <?php
                elseif ( $panes_data[$i]['main__pane-content-type'] == 'checklist' ):
                    $checklist_data = $panes_data[$i]['main__pane-checklist'];
                    foreach( $checklist_data as $checklist ):
            ?>
            <p class="main__pane-checklist">
                <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M9.73598 0.969934C9.80423 0.9003 9.88568 0.844981 9.97557 0.807217C10.0655 0.769452 10.162 0.75 10.2595 0.75C10.357 0.75 10.4535 0.769452 10.5434 0.807217C10.6333 0.844981 10.7147 0.9003 10.783 0.969934C11.069 1.25893 11.073 1.72593 10.793 2.01993L4.87998 9.00993C4.81285 9.08366 4.73138 9.1429 4.64056 9.18406C4.54974 9.22521 4.45148 9.2474 4.35179 9.24927C4.2521 9.25115 4.15307 9.23266 4.06077 9.19495C3.96847 9.15723 3.88483 9.10108 3.81498 9.02993L0.21698 5.38393C0.0782173 5.24242 0.000488281 5.05213 0.000488281 4.85393C0.000488281 4.65574 0.0782173 4.46545 0.21698 4.32393C0.285226 4.2543 0.366679 4.19898 0.456569 4.16122C0.546459 4.12345 0.64298 4.104 0.74048 4.104C0.837981 4.104 0.934502 4.12345 1.02439 4.16122C1.11428 4.19898 1.19573 4.2543 1.26398 4.32393L4.31598 7.41693L9.71598 0.991934C9.7222 0.984206 9.72888 0.976859 9.73598 0.969934Z" fill="#7758D9"/> </svg>
                <?php echo $checklist['main__pane-checklist-item']; ?>
            </p>
            <?php
                    endforeach;
                endif;
            ?>
        </div>
        <?php 
                endif;
            endfor;
        ?>
    </div>
</section>