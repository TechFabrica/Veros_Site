<?php

get_header();

if (have_posts()){
    while (have_posts()){
        the_post();
    }

} else {
    echo '<p>No content found</p>';
}
get_footer();

?>