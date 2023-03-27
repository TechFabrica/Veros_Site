<?php
/*
Template Name: Servicos
*/
?>

<?php get_header(); ?>

<main class="supercontainer">
    
    <?php get_template_part('./template-parts/servicos/hero'); ?>
    <?php get_template_part('./template-parts/servicos/main'); ?>
    <?php get_template_part('./template-parts/servicos/card-section'); ?>
    <?php get_template_part('./template-parts/common/contact'); ?>
    <?php get_template_part('./template-parts/common/newsletter'); ?>

</main>

<?php get_footer(); ?>