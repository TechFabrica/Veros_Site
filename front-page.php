<?php

get_header();

?>

<main class="supercontainer">
    
    <?php get_template_part('./template-parts/home/hero'); ?>

</main>

<?php

// if (have_posts()){
//     while (have_posts()){
//         the_post();
//     }

// } else {
//     echo '<p>No content found</p>';
// }

get_footer();

?>