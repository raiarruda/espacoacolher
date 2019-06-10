<?php get_header();?>
    <h1> Espaço Acolher</h1>

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_title();
            the_content();
            the_post_thumbnail();
        }
    }
?>
<?php get_footer();?>