<?php
    get_header();
?>

<main>
    <section id="banner">
        <div class="container">
            <?php dynamic_sidebar( 'contact-banner' ); ?>
        </div>
    </section>
    <section id="main-contact">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>
    </section>
</main>

<?php
    get_footer();
?>