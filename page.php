<?php get_header(); ?>

<div class="grid_1 box"></div>
<div id="section" class="grid_10 ">

   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </article>

</div>
<div class="grid_1 box"></div>
<?php get_footer(); ?>

