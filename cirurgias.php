<?php
/*
Template Name: Cirurgias
*/
?>

<?php get_header(); ?>

<main class="supercontainer">
    
    <?php get_template_part('./template-parts/cirurgias/hero'); ?>
    <?php get_template_part('./template-parts/cirurgias/cards-section'); ?>
    <?php get_template_part('./template-parts/cirurgias/main'); ?>
    <?php get_template_part('./template-parts/common/faq'); ?>
    <?php get_template_part('./template-parts/common/contact'); ?>
    <?php get_template_part('./template-parts/common/newsletter'); ?>

</main>

<?php get_footer(); ?>