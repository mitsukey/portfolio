<?php get_header(); ?> 
    <main class="top_main"> 
        <div id="top_view"> 
            <img class="top_img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/top_img.webp" alt="top_img">
            <img class="top_img_sp" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/top_img_sp.webp" alt="top_img_sp"> 
            <h2><?php bloginfo( 'description'); ?></h2> 
        </div>
        <article class="contents_wrapper"> 
            <?php if( have_posts() ): ?> 
                <?php while( have_posts() ): the_post(); ?> 
                <div class="catch_copy scroll-fade-up"> 
                    <?php the_content(); ?> 
                </div>
                <section id="about" ontouchstart=""> 
                    <div class="section_wrapper"> 
                        <div class="section_wrapper_paragraph section_wrapper_paragraph_alignLeft scroll-fade-left"> 
                            <h3>ABOUT</h3> 
                            <p> 行動力・実行力が強みです。「点と線をつなげる仕事」をモットーとして、クライアント様の形に添った制作を心がけています。 前職は建築の施工管理を務めていました。最近は、アニメとゲームに再燃しています。 </p>
                            <a class="clickHere" href="<?php echo get_page_link( 2 ); ?>">MORE</a> 
                        </div>
                        <div class="section_wrapper_image"> 
                            <img class="section_wrapper_img scroll-fade-up" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/about_banner.webp" alt="about_me"> 
                        </div>
                    </div>
                </section> 
                <section id="works"> 
                    <div class="section_wrapper"> 
                        <div class="section_wrapper_image"> 
                            <img class="section_wrapper_img scroll-fade-down" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/works_banner.webp" alt="works"> 
                        </div>
                        <div class="section_wrapper_paragraph section_wrapper_paragraph_alignRight scroll-fade-right"> 
                            <h3>WORKS</h3> 
                            <p> 2021年からwebの技術を勉強し始め、今ではワイヤーフレーム・デザインカンプ・ページ作成と、一通りの制作が出来るようになりました。 シンプルで、意図がまっすぐ伝わる作品を意識しています。 </p>
                            <a class="clickHere" href="<?php echo get_post_type_archive_link( 'works' ); ?>">MORE</a> 
                        </div>
                    </div>
                </section> 
                <section id="blognews"> 
                    <div class="section_wrapper"> 
                        <h3 class="scroll-fade-up">BLOG & NEWS</h3> 
                        <div class="blogNews_wrapper scroll-fade-up"> 
                            <div class="blogNews_container"> 
                                <img src="#" alt=""> 
                                <div class="blogNews_article_wrapper"> 
                                    <?php $hamal_args=array( 'post_type'=> 'post', 'posts_per_page'=> 3, );
                                    $hamal_news_query=new WP_Query( $hamal_args );
                                    if( $hamal_news_query -> have_posts() ):
                                    while( $hamal_news_query -> have_posts() ): 
                                    $hamal_news_query -> the_post();
                                    get_template_part( 'template-parts/loop','post' );
                                    endwhile;
                                    wp_reset_postdata();
                                    endif;
                                    the_terms( get_the_ID(),'work','',' ' ); 
                                    ?> 
                                </div>
                            </div>
                            <a class="clickHere" href="<?php echo get_page_link( 290 ); ?>">More read</a> 
                        </div>
                    </div>
                </section> 
            </article> 
            <?php endwhile; ?> 
            <?php endif; ?> 
        </main>
        
    <?php get_footer(); ?>