<?php get_header(); ?>

<main class="page-works-index"> 
    <section class="page-works-index_article_header"> 
        <h3><?php the_title(); ?></h3> 
    </section> 
    <section class="page-works-index_article_main-wrapper"> 
        <?php 
        $paged=get_query_var('paged') ? get_query_var('paged') : 1;
        $hamal_args_2=array( 
            'post_type'=> 'works', 
            'post_per_page'=> '9', 
            'paged'=> $paged 
        ); 
        $hamal_works_query=new WP_Query( $hamal_args_2 ); 
        $max_num_pages=$hamal_works_query->max_num_pages; ?>
        <?php if( $hamal_works_query->have_posts() ): ?>
            <?php while( $hamal_works_query->have_posts() ): ?>
                <?php $hamal_works_query->the_post();?> 
                <?php get_template_part( 'template-parts/loop','works' ); ?>
            <?php endwhile;?>
            <?php wp_reset_postdata();?>
        <?php endif;?> 
    </section> 
    <section class="page-works-index_article_footer"> 
        <div class="pnavi">
            <?php //ページリスト表示処理global $wp_rewrite;$paginate_base=get_pagenum_link(1);if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){$paginate_format=''; $paginate_base=add_query_arg('paged','%#%');}else{$paginate_format=(substr($paginate_base,-1,1)=='/' ? '' : '/') . user_trailingslashit('page/%#%/','paged'); $paginate_base .='%_%';}echo paginate_links(array( 'base'=> $paginate_base, 'format'=> $paginate_format, 'total'=> $the_query->max_num_pages, 'mid_size'=> 1, 'current'=> ($paged ? $paged : 1), 'prev_text'=> '< 前へ', 'next_text'=> '次へ >',)); ?>
        </div>
        <?php get_template_part( 'template-parts/parts','worksPagination' );?> 
        <?php get_template_part( 'template-parts/parts','pagination' );?> 
    </section>
</main>

<?php get_footer(); ?>