<?php /* Template Name: Richmond Area Gallery Page */ ?>

<?php
    get_header( 'dark' );
?>

<main>
    <h3><a href="../all-of-richmond">Richmond</a> - <?php the_title(); ?></h3>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</main>

<?php
    get_footer();
?>