<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main class="supercontainer">
    
    <?php get_template_part('./template-parts/home/hero'); ?>
    <?php get_template_part('./template-parts/home/quem-atendemos'); ?>
    <?php get_template_part('./template-parts/home/servicos'); ?>
    <?php get_template_part('./template-parts/home/especialidades'); ?>
    <?php get_template_part('./template-parts/home/estrutura'); ?>
    <?php get_template_part('./template-parts/home/social-proof'); ?>
    <?php get_template_part('./template-parts/common/faq'); ?>
    <?php get_template_part('./template-parts/common/contact'); ?>
    <?php get_template_part('./template-parts/common/newsletter'); ?>

</main>

<?php get_footer(); ?>