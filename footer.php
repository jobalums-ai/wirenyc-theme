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
<footer class="bg-card border-t border-border">
    <div class="container py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <div class="lg:col-span-1">
                <a href="#" class="flex items-center gap-2 mb-4">
                    <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                        <Zap class="w-6 h-6 text-primary-foreground" />
                    </div>
                    <div class="flex flex-col">
                        <span class="font-display text-xl font-bold text-foreground leading-none">NYCE</span>
                        <span class="text-[10px] text-muted-foreground tracking-widest uppercase">NYC Electric</span>
                    </div>
                </a>
                <p class="text-muted-foreground text-sm mb-4">
                    Powering New York City since 2003. Licensed, insured, and committed to excellence.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="text-muted-foreground hover:text-primary transition-colors">
                        <Facebook class="w-5 h-5" />
                    </a>
                    <a href="#" class="text-muted-foreground hover:text-primary transition-colors">
                        <Instagram class="w-5 h-5" />
                    </a>
                    <a href="#" class="text-muted-foreground hover:text-primary transition-colors">
                        <Twitter class="w-5 h-5" />
                    </a>
                    <a href="#" class="text-muted-foreground hover:text-primary transition-colors">
                        <Linkedin class="w-5 h-5" />
                    </a>
                </div>
            </div>

            <div>
                <h3 class="font-display font-semibold text-foreground mb-4">Services</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#services" class="text-muted-foreground hover:text-primary transition-colors text-sm">
                            Test
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-display font-semibold text-foreground mb-4">Service Areas</h3>
                <ul class="space-y-2">
                    {["Manhattan", "Brooklyn", "Queens", "The Bronx", "Staten Island", "Long Island"].map((item) => (
                    <li key={item}>
                        <span class="text-muted-foreground text-sm">{item}</span>
                    </li>
                    ))}
                </ul>
            </div>

            <div>
                <h3 class="font-display font-semibold text-foreground mb-4">Contact</h3>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li>123 Electric Ave</li>
                    <li>New York, NY 10001</li>
                    <li class="text-primary font-semibold">(212) 555-1234</li>
                    <li>info@nycelectric.com</li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-border flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-muted-foreground text-sm">
                © {currentYear} NYCE - New York City Electric. All rights reserved.
            </p>
            <div class="flex gap-6 text-sm">
                <a href="#" class="text-muted-foreground hover:text-primary transition-colors">Privacy Policy</a>
                <a href="#" class="text-muted-foreground hover:text-primary transition-colors">Terms of Service</a>
                <a href="#" class="text-muted-foreground hover:text-primary transition-colors">Sitemap</a>
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