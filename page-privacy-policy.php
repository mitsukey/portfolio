<?php get_header(); ?> 

<main class="page-privacy-policy"> 
    <article> 
        <?php if( have_posts() ): ?> 
            <?php while( have_posts() ):?>
                <?php the_post(); ?> 
                <h4><?php the_title(); ?></h4> 
                <?php the_content(); ?> 
            <?php endwhile; ?> 
        <?php endif; ?> 
    </article> 
</main>

<?php get_footer(); ?>