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
<footer class="bg-slate-950">
    <div class="container py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <div class="lg:col-span-1">
                <div class="-mt-5">
                    <img
                        src="<?php echo get_stylesheet_directory_uri() . '/resources/images/wirenyc-logo.png' ?>"
                        alt="NYCE New York City Electric Logo"
                        class="w-full contain">
                </div>
            </div>
            <div></div>
            <div>
                <h3 class="font-display font-semibold text-foreground mb-4">Services</h3>
                <ul class="space-y-2">
                    <li>
                        <span class="text-foreground text-sm hover:text-secondary cursor-pointer">Lighting Upgrades</span>
                    </li>
                    <li>
                        <span class="text-foreground text-sm hover:text-secondary cursor-pointer">Custom Fixture Installations</span>
                    </li>
                    <li>
                        <span class="text-foreground text-sm hover:text-secondary cursor-pointer">Panel Replacements/Upgrades</span>
                    </li>
                    <li>
                        <span class="text-foreground text-sm hover:text-secondary cursor-pointer">Lutron Controls</span>
                    </li>
                    <li>
                        <span class="text-foreground text-sm hover:text-secondary cursor-pointer">Lutron Shades And Window Treatments</span>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-display font-semibold text-foreground mb-4">Contact</h3>
                <ul class="space-y-2 text-sm text-foreground">
                    <li>123 Electric Ave</li>
                    <li>New York, NY 10001</li>
                    <li class="text-primary font-semibold">(212) 555-1234</li>
                    <li>info@nycelectric.com</li>
                </ul>
            </div>

        </div>

        <div class="pt-8 border-t border-border flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-foreground text-sm">
                ©2026 NYCE - New York City Electric. All rights reserved.
            </p>
            <div class="flex gap-6 text-sm">
                <a href="#" class="text-foreground hover:text-primary transition-colors">Privacy Policy</a>
                <a href="#" class="text-foreground hover:text-primary transition-colors">Terms of Service</a>
                <a href="#" class="text-foreground hover:text-primary transition-colors">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
<!-- <footer id="colophon" class=" bg-gradient-to-br from-gray-900/95 via-background/95 to-background !text-white border-t border-t-light/10" role="contentinfo">
    <div class="container border-b border-b-white/50 py-12">

    </div>
    <div class="container mx-auto pt-12 pb-20">
        <?php do_action('tailpress_footer'); ?>
        <div class="text-sm text-zinc-400">
            &copy; <?php echo esc_html(date_i18n('Y')); ?> - New York City Electric. All rights reserved.
        </div>
    </div>
</footer> -->
</div>

<?php wp_footer(); ?>
</body>

</html>