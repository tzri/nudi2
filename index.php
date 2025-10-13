<?php get_header(); ?>

<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            echo '<article itemscope itemtype="https://schema.org/Article">';
            the_title('<h1 itemprop="headline">', '</h1>');
            echo '<div itemprop="articleBody">';
            the_content();
            echo '</div>';
            echo '</article>';
        }
    } else {
        echo '<p>No content found.</p>';
    }
    ?>
</main>

<?php get_footer(); ?>
