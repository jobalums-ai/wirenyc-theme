<?php

/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
</main>

<?php do_action('tailpress_content_end'); ?>
</div>

<?php do_action('tailpress_content_after'); ?>
<footer id="colophon" class=" bg-gradient-to-br from-gray-900/95 via-background/95 to-background !text-white border-t border-t-light/10" role="contentinfo">
    <div class="container border-b border-b-white/50 py-12">

    </div>
    <div class="container mx-auto pt-12 pb-20">
        <?php do_action('tailpress_footer'); ?>
        <div class="text-sm text-zinc-400">
            &copy; <?php echo esc_html(date_i18n('Y')); ?> - New York City Electric. All rights reserved.
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>