<?php
get_header();
?>
<main <?php body_class(); ?> >
<div class="content">
    <?php if(have_posts()):
        while( have_posts() ) :
            the_post(); 
            $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <section class="top" style="background-image: url('<?php echo $url[0]; ?>')">
                <?php the_content(); ?>
            </section>
            <?php $child_query = new WP_Query( [ 
                'post_parent' => $post->ID,
                'post_type' => 'page',
                'order_by' => 'menu_order',
                'order' => 'ASC',
             ] );
            if( $child_query->have_posts() ) :
                while ( $child_query->have_posts() ) :
                    $child_query->the_post();
                    $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                ?>
                <section id="<?php echo $post->post_name; ?>" class="child-section" style="background-image: url('<?php echo $url[0]; ?>')">
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                </section>
                <?php endwhile; ?>
            <?php endif; 
            wp_reset_postdata(); ?>
        <?php endwhile;
    endif; ?>
</div>
</main>
<?php get_footer(); ?>