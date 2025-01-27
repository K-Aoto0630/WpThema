<?php
/*
 * Template Name: single.php
 */
?>
<?php get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<section class="single-post">
    <div class="single-post-wrapper content-wrapper">
        <div class="single-post-inner content-inner">
            <div class="single-post-content">
                <h1 class="single-post-title"><?php the_title(); ?></h1>
                <div class="single-post-text">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>