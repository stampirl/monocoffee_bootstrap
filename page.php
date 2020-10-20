<?php
get_header();

if(have_posts()):
    while( have_posts() ) :
        the_post(); 
        $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <main <?php body_class('single-page'); ?> style="background-image: url('<?php echo $url[0]; ?>')">
            <div class="content">
                    <?php the_content(); ?>
            </div>
        </main>
<?php endwhile;
endif;

wp_footer(); ?>
</body>
</html>
