<?php get_header(); ?>

<div id="content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>