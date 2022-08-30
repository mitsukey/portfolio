<?php get_header(); ?>
<main class="archive"> 
    <section class="archive_article_header"> 
        <h4> <?php if( is_month() ): echo get_the_date( 'Y-m' ); else: single_term_title(); endif; ?> </h4> 
    </section> 
    <section class="archive_article_main"> 
        <?php if( have_posts() ): while( have_posts() ): the_post(); get_template_part( 'template-parts/loop','post' ); ?> <?php endwhile; endif; ?> 
    </section> 
    <section class="archive_article_footer"> 
        <?php get_template_part( 'template-parts/parts','pagination' ); get_template_part( 'template-parts/parts','postfooter' ); ?> 
    </section>
</main>

<?php get_footer(); ?>