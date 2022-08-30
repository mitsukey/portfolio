<?php get_header(); ?>

<main class="page-post-index"> 
    <section class="page-post-index_header"> 
        <h4><?php single_post_title(); ?></h4> 
    </section> 
    <section class="page-post-index_main"> 
        <?php 
        if( have_posts() ): 
            while( have_posts() ): 
                the_post();?>
        <?php get_template_part( 'template-parts/loop','post' );?>
            <?php endwhile;?>
        <?php endif; ?> 
    </section> 
    <section class="page-post-index_footer"> 
        <?php get_template_part( 'template-parts/parts','pagination' ); 
        get_template_part( 'template-parts/parts','postfooter' ); ?> 
    </section> 
</main>

<?php get_footer(); ?>