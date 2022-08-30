<?php get_header(); ?> 

<main class="taxonomy-work"> 
    <section class="taxonomy-work_header"> 
        <h4><?php single_term_title(); ?></h4> 
    </section> 
    <section class="taxonomy-work_main"> 
        <?php if( have_posts() ):?>
            <?php while( have_posts() ):?>
                <?php the_post(); ?> 
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-works_article_item' ); ?>> 
                    <section class="works_archive"> 
                        <a class="archive-works_article_item_link" href="<?php the_permalink(); ?>" target=”_blank” rel="noopener"> 
                            <div class="works_container"> 
                                <div class="works_category"> 
                                    <?php $terms=get_the_terms(get_the_ID(), 'work');?> 
                                    <?php if(!empty($terms)):?>
                                        <?php foreach($terms as $term):?>
                                            <?php echo '<span>'.$term->name.'</span>';?> 
                                        <?php endforeach;?>
                                    <?php else:?>
                                        <?php echo '<span>'.'未分類'.'</span>';?>
                                    <?php endif; ?> 
                                </div>
                                <h5><?php the_title(); ?></h5> 
                                <?php the_excerpt(); ?> 
                                <div class="banner_wrapper"> 
                                    <?php if( has_post_thumbnail() ): ?> 
                                        <?php the_post_thumbnail( 'page_eyecatch' ); ?> 
                                    <?php else: ?> 
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dummy.webp" alt="" width="300" height="200" load="lazy">
                                    <?php endif; ?> 
                                </div>
                            </div>
                        </a> 
                    </section> 
                </article> 
            <?php endwhile; ?> 
        <?php endif; ?> 
</section> 
<?php get_template_part( 'template-parts/parts','pagination' ); ?> 
</main>

<?php get_footer(); ?>