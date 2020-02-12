<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <h2> Post </h2>
    <?php the_content(); ?>
	<?php the_terms( $post->ID, 'realisateurs', 'Réalisateurs : ' ); ?> <br>
	<?php the_terms( $post->ID, 'annees', 'Série TV sortie en : ' );?> <br>
	<?php the_terms( $post->ID, 'categoriesseries', 'Catégorie(s) : ' ); ?><br>
<?php endwhile; endif; ?>
<?php get_footer(); ?>