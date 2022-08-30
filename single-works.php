<?php get_header(); ?>

<main class="works_single"> 
    <?php if( have_posts() ): ?> 
        <?php while( have_posts() ):?>
            <?php the_post(); ?> 
            <section class="works_single_header"> 
                <h3><?php the_title(); ?></h3> 
                <?php get_template_part( 'template-parts/parts','scrolldown' ); ?> 
            </section> 
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'works_single_main' ); ?>> 
                <div class="single_supplement"> 
                    <div class="single_category"> 
                        <?php the_terms( get_the_ID(),'work','',' ' ); ?> 
                    </div>
                </div>
                <div class="works_single_container"> 
                    <?php the_content(); ?> 
                </div>
                <a class="clickHere" href="<?php echo get_post_type_archive_link( 'works' ); ?>">Back to archive</a> 
            </article> 
            <section class="works_single_footer"> 
                <div class="paging_prev-next"> 
                    <?php previous_post_link( '%link','<<%title' );?> 
                    <?php next_post_link( '%link','%title>>' );?> 
                </div>
                <div class="footer-widget_wrapper_works-version"> 
                    <h6>ラベルクラウド</h6> 
                    <div class="footer-widget_container_works-version"> 
                        <?php 
                        $args=array( 
                            'smallest'=> 12, 
                            'largest'=> 12, 
                            'taxonomy'=> 'work', 
                        ); 
                        wp_tag_cloud( $args ); 
                        ?> 
                    </div>
                </div>
            </section> 
        <?php endwhile; ?> 
    <?php endif; ?> 
</main>

<?php get_footer(); ?>