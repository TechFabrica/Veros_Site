<?php
/*
Template Name: Post Veros
Template Post Type: post, page
*/
?>

<?php get_header(); ?>

<main class="supercontainer">
    
    <?php get_template_part('./template-parts/common/hero--basic'); ?>
    <?php get_template_part('./template-parts/post-veros/post'); ?>
    <?php get_template_part('./template-parts/post-veros/big-card'); ?>
    <?php get_template_part('./template-parts/post-veros/cards-section'); ?>
    <?php get_template_part('./template-parts/common/faq'); ?>
    <?php get_template_part('./template-parts/common/contact'); ?>
    <?php get_template_part('./template-parts/common/newsletter'); ?>

</main>

<?php get_footer(); ?>