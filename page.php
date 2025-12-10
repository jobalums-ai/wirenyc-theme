<?php

/**
 * Page template file.
 *
 * @package TailPress
 */

get_header();
?>
<main class="min-h-screen relative">
	
<div class="container my-8 mx-auto">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/content', 'single'); ?>

            <?php if (comments_open() || get_comments_number()): ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
</main>

<?php
get_footer();
