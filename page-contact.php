<?php get_header(); ?>

<main class="page-contact"> 
    <?php if( have_posts() ):?> 
        <?php while( have_posts() ):?>
            <?php the_post(); ?> 
            <section class="page-contact_header"> 
                <h4><?php the_title();?></h4> 
            </section> 
            <section class="page-contact_main"> 
                <div class="page-contact_main_intro"> 
                    <p> この度は訪問頂き、誠にありがとうございます。<br>ご不明な点等がございましたら、お気軽にご連絡ください。<br>なお、送信される際は、<a href="<?php echo get_page_link( 3 ); ?>">プライバシーポリシー</a>をご確認頂きますようお願いいたします。 </p>
                </div>
                <?php the_content();?> 
            </section> 
        <?php endwhile;?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>