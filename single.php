<?php get_header(); ?>

<main class="single"> 
    <?php if( have_posts() ): ?> 
        <?php while( have_posts() ):?>
            <?php the_post(); ?> 
            <section class="page_article_header"> 
                <h4 class="blog_singlePage__article_title"><?php the_title(); ?></h4> 
                <div class="single_supplement"> 
                    <div class="single_category"> 
                        <?php the_category( ' ' ); ?> 
                    </div>
                    <?php 
                    $hamal_post_year=get_the_date( 'Y' ); 
                    $hamal_post_month=get_the_date( 'm' ); 
                    ?> 
                    <a href="<?php echo get_month_link( $hamal_post_year,$hamal_post_month ) ?>" class="content-meta_date"> 
                        <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                            <?php echo get_the_date(); ?>
                        </time> 
                    </a> 
                </div>
            </section> 
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
            <div class="works_single_container"> 
                <?php the_content(); ?> 
                <div class="post_tags"> 
                    <?php the_tags( '',' ' ); ?> 
                </div>
            </article> 
            <section class="page_article_footer"> 
                <?php get_template_part( 'template-parts/parts','postfooter' );?> 
            </section> 
        <?php endwhile; ?> 
    <?php endif; ?>
</main>

<?php get_footer(); ?>