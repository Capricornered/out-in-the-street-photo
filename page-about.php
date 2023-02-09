<?php
    get_header();
?>

<main>
    <section id="banner">
        <div class="container">
            <?php dynamic_sidebar( 'about-banner' ); ?>
        </div>
    </section>
    <section id="main-about">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </section>
</main>

<?php
    get_footer();
?>