<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <h2 class="grid-item__4-6"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <div class="grid-item__4-6"><?php the_content(); ?></div>

    <?php endwhile;

    else :
        echo '<p>No content found</p>';

endif;

get_footer();

?>