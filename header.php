<?php

/**
 * Theme header template.
 *
 * @package TailPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-zinc-900 antialiased bg-center lg:!bg-[_100%_15%]'); ?>>
	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="w-full text-secondary" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/resources/images/hero-electrician.jpg'; ?>);    background-size: cover;background-attachment: fixed;">
		<div class="absolute inset-0 bg-gradient-to-br from-black/85 via-background/90 to-background/80">
			<?php do_action('tailpress_header'); ?>

			<header class=" py-6 bg-gradient-to-br from-black/95 via-black/90 to-background/80 w-full m-0 border-b border-b-light/10 sticky top-0 z-50">
				<div class="container md:flex md:justify-between md:items-center">
					<div class="flex justify-between items-center">
						<div>
							<?php if (has_custom_logo()): ?>
								<?php the_custom_logo(); ?>
							<?php else: ?>
								<div class="flex items-center gap-2">
									<!-- <img src="<?php echo get_stylesheet_directory_uri() . '/resources/images/wirenyc-logo.png' ?>" alt="NYCE New York City Electric Logo" class=" w-[144px] bg-black/0 px-1 rounded-lg object-contain mr-2 -mt-5"> -->
									<a href="<?php echo esc_url(home_url('/')); ?>" class="!no-underline font-medium text-lg">
										<div class="flex flex-col">
											<span class="font-display text-xl font-bold text-secondary text-shadow-primary leading-none font-pixel tracking-[0.2em]">NYCE</span>
											<span class="text-[12px] text-gray-300 tracking-widest font-light -mb-3">New York City Electric</span>
										</div>
									</a>
									<?php if ($description = get_bloginfo('description')): ?>
										<span class="text-sm font-light text-dark/80">|</span>
										<span class="text-sm font-light text-dark/80"><?php echo esc_html($description); ?></span>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>

						<?php if (has_nav_menu('primary')): ?>
							<div class="md:hidden">
								<button type="button" aria-label="Toggle navigation" id="primary-menu-toggle">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
										<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
										</path>
									</svg>
								</button>
							</div>
						<?php endif; ?>
					</div>

					<div id="primary-navigation" class="hidden md:flex md:bg-transparent gap-6 items-center border-t border-t-light/50 md:border-none p-8 md:p-0 mt-5 lg:mx-0 -mx-8">
						<nav>
							<?php if (current_user_can('administrator') && !has_nav_menu('primary')): ?>
								<a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>" class="text-sm text-zinc-600"><?php esc_html_e('Edit Menus', 'tailpress'); ?></a>
							<?php else: ?>
								<?php
								wp_nav_menu([
									'container_id'    => 'primary-menu',
									'container_class' => '',
									'menu_class'      => 'md:flex md:-mx-4 [&_a]:!no-underline text-zinc-200 text-shadow-none uppercase font-light tracking-widest text-[14px] text-[rgb(147, 151, 155)]',
									'theme_location'  => 'primary',
									'li_class'        => 'md:mx-4 [&:not(:last-child)]:mb-6',
									'fallback_cb'     => false,
								]);
								?>
							<?php endif; ?>
						</nav>

						<!-- <div class="inline-block mt-4 md:mt-0"><?php get_search_form(); ?></div> -->
					</div>
				</div>
			</header>


			<div id="content" class="site-content grow">

				<?php do_action('tailpress_content_start'); ?>
				<main>