<?php
get_header();
?>
<main <?php body_class(); ?> >
<div class="content">
    <?php if(have_posts()):
        while( have_posts() ) { 
            the_post(); ?>
            <article class="entry">
                <?php the_content(); ?>
            </article>
        <?php } 
    endif; ?>
</div>
</main>
<?php get_footer(); ?>