<?php get_header(); ?>

    <main class="not-found">
        <section class="page_not-found_header">
            <h4>404 ERROR</h4>
        </section>
        <article class="page_not-found_main">
            <p>
                ページが見つかりませんでした。ページが移動もしくは削除された可能性があります。<br>
                <br>
                サイト内検索、または<a href="<?php echo esc_url( home_url() ); ?>">トップページ</a>からお探しください。
                <?php get_search_form(); ?>
            </p>
        </article>
    </main>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>