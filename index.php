<?php get_header(); ?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_title('<h1>', '</h1>');
            the_content();
        }
    } else {
        echo '<p>No content found.</p>';
    }
    ?>
</main>

<?php get_footer(); ?>
