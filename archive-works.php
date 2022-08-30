<?php get_header(); ?>
<main class="archive-works"> 
    <section class="archive-works_article_header"> 
        <h3>
            <?php post_type_archive_title(); ?>
        </h3> 
        <?php get_template_part( 'template-parts/parts','scrolldown' ); ?> 
    </section> 
    <section class="archive-works_article_main"> 
        <?php if( have_posts() ): while( have_posts() ): the_post(); ?> 
        <article id="post-<?php the_ID(); ?>" <?php post_class( array('archive-works_article_item','scroll-fade-in') ); ?>> 
            <a class="archive-works_article_item_link" href="<?php the_permalink(); ?>"> 
                <section class="works_archive"> 
                    <div class="works_container"> 
                        <div class="works_category"> 
                            <?php 
                            $terms=get_the_terms(get_the_ID(), 'work'); 
                            if(!empty($terms)): 
                                foreach($terms as $term): 
                                    echo '<span>'.$term->name.'</span>';
                                endforeach; else: 
                                echo '<span>'.'未分類'.'</span>'; endif; 
                            ?> 
                        </div>
                        <h5><?php the_title(); ?></h5> 
                        <?php the_excerpt(); ?> 
                        <div class="banner_wrapper"> 
                            <?php if( has_post_thumbnail() ): ?> 
                                <?php the_post_thumbnail( 'page_eyecatch' ); ?> 
                                <?php else: ?> 
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dummy_img.webp" alt="" width="300" height="200" load="lazy"> 
                            <?php endif; ?> 
                        </div>
                    </div>
                </section> 
            </a> 
        </article> 
        <?php endwhile; endif; ?> 
    </section> 
    <?php get_template_part( 'template-parts/parts','pagination' ); ?> 
</main>

<?php get_footer(); ?>