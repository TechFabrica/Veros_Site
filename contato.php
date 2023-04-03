<?php
/*
Template Name: Contato
*/
?>

<?php get_header(); ?>

<main class="supercontainer">
    
    <?php get_template_part('./template-parts/contato/hero'); ?>
    <?php get_template_part('./template-parts/contato/main'); ?>
    <?php get_template_part('./template-parts/contato/como-funciona'); ?>
    <?php get_template_part('./template-parts/common/faq'); ?>
    <?php get_template_part('./template-parts/common/newsletter'); ?>

</main>

<?php get_footer(); ?>