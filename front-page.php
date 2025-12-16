<?php
wp_head();
get_header();
?>

<section class="min-h-screen flex items-center justify-center px-4 py-10 relative overflow-hidden" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/resources/images/hero-electrician.jpg'; ?>); background-size: cover;background-attachment: fixed;">
	<div class="absolute inset-0 bg-gradient-to-br from-black/85 via-background/90 to-background/80"></div>
	<div class="container mx-auto max-w-7xl relative z-10">
		<div class="grid lg:grid-cols-12 gap-10 items-center">
			<div class="space-y-10 order-2 lg:order-1 lg:col-span-7">
				<div class="absolute -top-4 left-2 w-20 h-20 bg-secondary/30 rounded-lg blur-2xl animate-pulse"></div>

				<div class="space-y-6 flex flex-col">
					<!-- ✨🌟 ⚡-->
					<div class="flex flex-wrap order-3 lg:order-1 fade-in-group">
						<div class="mr-2 inline-flex items-center gap-2 pl-3 pr-4 py-1 tracking-wider bg-background/50 backdrop-blur-sm border border-gray-200/15 smooth-transition hover:bg-black/30 mb-2 rounded-3xl justify-center fade-in-item">
							<span class="text-sm text-white text-shadow text-shadow-black"><b class="text-lg">💡</b> Lighting Upgrades</span>
						</div>
						<div class="mr-2 inline-flex items-center gap-2 pl-3 pr-4 py-1 tracking-wider bg-background/50 backdrop-blur-sm border border-gray-200/15 smooth-transition hover:bg-black/30 mb-2 rounded-3xl justify-center fade-in-item">
							<span class="text-sm text-white text-shadow text-shadow-black"><b class="text-lg">✨</b> Fixture Installations</span>
						</div>
						<div class="inline-flex items-center gap-2 pl-3 pr-4 py-1 tracking-wider bg-background/50 backdrop-blur-sm border border-gray-200/15 smooth-transition hover:bg-black/30 mb-2 rounded-3xl justify-center fade-in-item">
							<span class="text-sm text-white text-shadow text-shadow-black"><b class="text-lg">⚡</b> Power Needs</span>
						</div>
						<div class="inline-flex items-center gap-2 pl-3 pr-4 py-1 tracking-wider bg-background/50 backdrop-blur-sm border border-gray-200/15 smooth-transition hover:bg-black/30 mb-2 rounded-3xl justify-center fade-in-item">
							<span class="text-sm text-white text-shadow text-shadow-black"><b class="text-lg">⚡</b> Security Installations</span>
						</div>
					</div>
					<h1 class="text-4xl md:text-3xl lg:text-5xl font-pixel text-shadow-[2px_2px_2px,2px_2px_5px] font-bold text-white text-shadow-red-900 leading-[1.4em] tracking-wide order-1">
						<span data-split="letters"
							data-parallax="20">NEW YORK CITY</span> <span data-split="letters"
							data-parallax="20" class="text-secondary">ELECTRIC</span>
					</h1>
					<p class="text-sm lg:text-base text-foreground tracking-wider order-2 lg:order-3 fade-in">From residential repairs to commercial installations, our licensed electricians deliver safe, reliable, and efficient solutions for all your electrical needs.</p>
					<div class="relative group w-1/2 hidden">
						<div class="relative">
							<img
								src="<?php echo get_stylesheet_directory_uri() . '/resources/images/wirenyc-logo.png' ?>"
								alt="NYCE New York City Electric Logo"
								class="w-full contain">
						</div>
					</div>
				</div>

				<div class="flex flex-wrap gap-4 fade-in-group">
					<button class="btn btn-primary btn-md fade-in-item tracking-widest relative overflow-hidden text-shadow">
						BOOK A SERVICE NOW!
					</button>
					<!-- <button class="btn btn-secondary lg:btn-md fade-in-item relative overflow-hidden group text-shadow">
						OUR WORK
						<span class="group-hover:animate-pulse bg-yellow-800 p-2 absolute top-0 w-full h-full left-0 opacity-0 group-hover:opacity-10"></span>
					</button> -->
				</div>

			</div>

			<div class="flex justify-center order-1 lg:order-2 lg:col-span-5">
				<div class="relative group">
					<div class="absolute -inset-4 bg-gradient-to-r from-primary/20 via-secondary/20 to-primary/20 blur-2xl opacity-75 group-hover:opacity-100 smooth-transition"></div>
					<div class="relative bg-black/0.1 p-2 lg:p-4 rounded-3xl duration-200 lg:mb-14 fade-in">
						<img
							src="<?php echo get_stylesheet_directory_uri() . '/resources/images/wirenyc-logo.png' ?>"
							alt="NYCE New York City Electric Logo"
							class="w-full contain">
					</div>

					<?php if (!wp_is_mobile()): ?>
						<div class=" flex-wrap justify-center items-center gap-4 fade-in-group flex">
							<div class="overflow-hidden bg-white rounded-md backdrop-blur fade-in-item">
								<img class="h-10" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/osha-certified.png' ?>" />
							</div>
							<div class="overflow-hidden bg-white/10 rounded-md backdrop-blur fade-in-item">
								<img class="h-10" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/quality-assured-master-electrician.jpeg' ?>" />
							</div>
							<div class="overflow-hidden bg-white/10 rounded-md backdrop-blur fade-in-item">
								<img class="h-10" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/lutron-pro-logo.png' ?>" />
							</div>
							<div class="overflow-hidden bg-white/10 rounded-md backdrop-blur fade-in-item">
								<img class="h-10" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/Lutron_Pro-gold.png' ?>" />
							</div>
							<div class="overflow-hidden rounded-md backdrop-blur fade-in-item">
								<img class="h-20" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/osha-trained.png' ?>" />
							</div>
							<div class="overflow-hidden rounded-md backdrop-blur fade-in-item">
								<img class="h-20" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/EPA-Lead-Certified.png' ?>" />
							</div>
							<div class="overflow-hidden rounded-md backdrop-blur fade-in-item">
								<img class="h-20" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/five-boro-logo.svg' ?>" />
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php if (wp_is_mobile()): ?>
			<div class=" flex-wrap justify-center items-center gap-4 fade-in-group flex lg:!hidden mt-10">
				<div class="overflow-hidden bg-white rounded-md backdrop-blur fade-in-item">
					<img class="h-10" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/osha-certified.png' ?>" />
				</div>
				<div class="overflow-hidden bg-white/10 rounded-md backdrop-blur fade-in-item">
					<img class="h-10" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/quality-assured-master-electrician.jpeg' ?>" />
				</div>
				<div class="overflow-hidden bg-white/10 rounded-md backdrop-blur fade-in-item">
					<img class="h-10" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/lutron-pro-logo.png' ?>" />
				</div>
				<div class="overflow-hidden bg-white/10 rounded-md backdrop-blur fade-in-item">
					<img class="h-10" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/Lutron_Pro-gold.png' ?>" />
				</div>
				<div class="overflow-hidden rounded-md backdrop-blur fade-in-item">
					<img class="h-14" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/osha-trained.png' ?>" />
				</div>
				<div class="overflow-hidden rounded-md backdrop-blur fade-in-item">
					<img class="h-14" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/EPA-Lead-Certified.png' ?>" />
				</div>
				<div class="overflow-hidden rounded-md backdrop-blur fade-in-item">
					<img class="h-14" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/five-boro-logo.svg' ?>" />
				</div>
			</div>
		<?php endif; ?>
		<div class="my-20  bg-black"></div>
	</div>
</section>
<section id="services" class="py-20 md:py-32 bg-black/95 relative" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/resources/images/bg-1.jpeg'; ?>); background-size: cover;background-attachment: fixed;">
	<div class="absolute inset-0 bg-gradient-to-br from-black/85 via-background/90 to-background/80 z-0"></div>
	<div class="container relative">
		<div class="text-center mb-16 z-20 fade-in-group" style="opacity: 1; transform: none;">
			<span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold uppercase tracking-wider mb-4 fade-in-item">Our Services</span>
			<h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-foreground mb-4 fade-in-item"><span class="text-secondary">Residential & Commercial</span> <br />Electrical Services in Tri-State Area</h2>
			<p class="text-lg text-muted-foreground max-w-2xl mx-auto uppercase fade-in-item">Licensed, Insured, Knowledgeable Electricians You can Trust.</p>
		</div>
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 fade-in-group">
			<div class="group relative p-6 bg-card/50 fade-in-item backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5">
				<div class="flex gap-4 flex-nowrap">
					<div class="w-14 h-14 aspect-square bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house w-7 h-7 text-secondary">
							<path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
							<path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
						</svg></div>
					<h3 class="text-xl font-display font-semibold text-white/80 mb-2">Electrical system design and installation</h3>
				</div>
				<p class="text-secondary/70 text-sm leading-relaxed mt-5">We design and install complete electrical systems tailored to your building’s needs, ensuring safety, reliability, and efficient power distribution.</p>
			</div>
			<div class="group relative p-6 bg-card/50 fade-in-item backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5">
				<div class="flex gap-4 flex-nowrap">
					<div class="w-14 h-14 aspect-square bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-7 h-7 text-secondary">
							<path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
							<path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
							<path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
							<path d="M10 6h4"></path>
							<path d="M10 10h4"></path>
							<path d="M10 14h4"></path>
							<path d="M10 18h4"></path>
						</svg></div>
					<h3 class="text-xl font-display font-semibold text-white/80 mb-2">Electrical panel installation and upgrades</h3>
				</div>
				<p class="text-secondary/70 text-sm leading-relaxed mt-5">We install new electrical panels or upgrade existing ones to support higher power demands and improve overall system safety and performance.</p>
			</div>
			<div class="group relative p-6 bg-card/50 fade-in-item backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5">
				<div class="flex gap-4 flex-nowrap items-center">
					<div class="w-14 h-14 aspect-square bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-factory w-7 h-7 text-secondary">
							<path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"></path>
							<path d="M17 18h1"></path>
							<path d="M12 18h1"></path>
							<path d="M7 18h1"></path>
						</svg></div>
					<h3 class="text-xl font-display font-semibold text-white/80 mb-2">Lighting upgrades</h3>
				</div>
				<p class="text-secondary/70 text-sm leading-relaxed mt-5">We enhance your lighting system with modern, energy-efficient solutions that improve brightness, reduce energy costs, and create a better environment.</p>
			</div>
			<div class="group relative p-6 bg-card/50 fade-in-item backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5">
				<div class="flex gap-4 flex-nowrap items-center">
					<div class="w-14 h-14 aspect-square bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb w-7 h-7 text-secondary">
							<path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path>
							<path d="M9 18h6"></path>
							<path d="M10 22h4"></path>
						</svg></div>
					<h3 class="text-xl font-display font-semibold text-white/80 mb-2">Door access control and CCTV systems</h3>
				</div>
				<p class="text-secondary/70 text-sm leading-relaxed mt-5">Custom lighting solutions that enhance ambiance, improve efficiency, and reduce energy costs.</p>
			</div>
			<div class="group relative p-6 bg-card/50 fade-in-item backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5">
				<div class="flex gap-4 flex-nowrap items-center">
					<div class="w-14 h-14 aspect-square bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-7 h-7 text-secondary">
							<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
						</svg></div>
					<h3 class="text-xl font-display font-semibold text-white/80 mb-2">Electrical Safety</h3>
				</div>
				<p class="text-secondary/70 text-sm leading-relaxed mt-5">Comprehensive safety inspections, surge protection, and code compliance to protect your property.</p>
			</div>
			<div class="group relative p-6 bg-card/50 fade-in-item backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5">
				<div class="flex gap-4 flex-nowrap items-center">
					<div class="w-14 h-14 aspect-square bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge w-7 h-7 text-secondary">
							<path d="m12 14 4-4"></path>
							<path d="M3.34 19a10 10 0 1 1 17.32 0"></path>
						</svg></div>
					<h3 class="text-xl font-display font-semibold text-white/80 mb-2">Panel Upgrades</h3>
				</div>
				<p class="text-secondary/70 text-sm leading-relaxed mt-5">Modernize your electrical panel to handle today's power demands and improve safety.</p>
			</div>
			<div class="group relative p-6 bg-card/50 fade-in-item backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5">
				<div class="flex gap-4 flex-nowrap items-center">
					<div class="w-14 h-14 aspect-square bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench w-7 h-7 text-secondary">
							<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
						</svg></div>
					<h3 class="text-xl font-display font-semibold text-white/80 mb-2">Repairs &amp; Maintenance</h3>
				</div>
				<p class="text-secondary/70 text-sm leading-relaxed mt-5">Fast, reliable repairs and preventive maintenance to keep your electrical systems running smoothly.</p>
			</div>
			<div class="group relative p-6 bg-card/50 fade-in-item backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5">
				<div class="flex gap-4 flex-nowrap items-center">
					<div class="w-14 h-14 aspect-square bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-7 h-7 text-secondary">
							<path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
						</svg></div>
					<h3 class="text-xl font-display font-semibold text-white/80 mb-2">Emergency Services</h3>
				</div>
				<p class="text-secondary/70 text-sm leading-relaxed mt-5">24/7 emergency response for electrical emergencies. We're here when you need us most.</p>
			</div>
		</div>
	</div>
</section>
<section id="about" class="py-20 md:py-32 bg-card">
	<div class="container">
		<div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
			<div style="opacity: 1; transform: none;"><span class="inline-block px-4 py-2 bg-primary/10 text-secondary rounded-full text-sm font-semibold uppercase tracking-wider mb-4">About us</span>
				<h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-foreground mb-6">New York's <span class="text-primary">Most Trusted</span> <span class="text-secondary">Electrical Contractor</span></h2>
				<p class="text-muted-foreground text-lg mb-6">Third generation electrician Daniel Weissman currently holds master electrical licenses in New York City, New Jersey, Delaware, Florida, USVI and Connecticut.</p>
				<p class="text-muted-foreground mb-8">Whether you need a simple outlet repair or a complete commercial installation, our team of certified electricians delivers professional results every time. We take pride in our work and stand behind every job we do.</p>
				<div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
					<div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check w-5 h-5 text-primary flex-shrink-0">
							<circle cx="12" cy="12" r="10"></circle>
							<path d="m9 12 2 2 4-4"></path>
						</svg><span class="text-foreground text-sm">Licensed &amp; Fully Insured</span></div>
					<div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check w-5 h-5 text-primary flex-shrink-0">
							<circle cx="12" cy="12" r="10"></circle>
							<path d="m9 12 2 2 4-4"></path>
						</svg><span class="text-foreground text-sm">Background-Checked Technicians</span></div>
					<div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check w-5 h-5 text-primary flex-shrink-0">
							<circle cx="12" cy="12" r="10"></circle>
							<path d="m9 12 2 2 4-4"></path>
						</svg><span class="text-foreground text-sm">Upfront Pricing - No Hidden Fees</span></div>
					<div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check w-5 h-5 text-primary flex-shrink-0">
							<circle cx="12" cy="12" r="10"></circle>
							<path d="m9 12 2 2 4-4"></path>
						</svg><span class="text-foreground text-sm">100% Satisfaction Guarantee</span></div>
					<div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check w-5 h-5 text-primary flex-shrink-0">
							<circle cx="12" cy="12" r="10"></circle>
							<path d="m9 12 2 2 4-4"></path>
						</svg><span class="text-foreground text-sm">Clean &amp; Professional Service</span></div>
					<div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check w-5 h-5 text-primary flex-shrink-0">
							<circle cx="12" cy="12" r="10"></circle>
							<path d="m9 12 2 2 4-4"></path>
						</svg><span class="text-foreground text-sm">Latest Tools &amp; Technology</span></div>
				</div>
			</div>
			<div class="grid gap-6" style="opacity: 1; transform: none;">
				<div class="flex items-center gap-6 p-6 bg-secondary rounded-xl border border-border">
					<div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-primary">
							<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
							<circle cx="9" cy="7" r="4"></circle>
							<path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
							<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
						</svg></div>
					<div>
						<div class="text-4xl font-display font-bold text-primary">50+</div>
						<div class="text-muted-foreground">Expert Electricians</div>
					</div>
				</div>
				<div class="flex items-center gap-6 p-6 bg-secondary rounded-xl border border-border">
					<div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-8 h-8 text-primary">
							<path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
							<circle cx="12" cy="8" r="6"></circle>
						</svg></div>
					<div>
						<div class="text-4xl font-display font-bold text-primary">20+</div>
						<div class="text-muted-foreground">Years Experience</div>
					</div>
				</div>
				<div class="flex items-center gap-6 p-6 bg-secondary rounded-xl border border-border">
					<div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-8 h-8 text-primary">
							<circle cx="12" cy="12" r="10"></circle>
							<polyline points="12 6 12 12 16 14"></polyline>
						</svg></div>
					<div>
						<div class="text-4xl font-display font-bold text-primary">24/7</div>
						<div class="text-muted-foreground">Emergency Service</div>
					</div>
				</div>
				<div class="p-6 bg-primary rounded-xl text-center">
					<p class="text-primary-foreground font-display text-2xl font-bold mb-2">NYC Licensed #12345678</p>
					<p class="text-primary-foreground/80">Fully Bonded &amp; Insured for Your Protection</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="gallery" class="py-20 md:py-32 bg-background">
	<div class="container">
		<div class="text-center mb-16" style="opacity: 1; transform: none;"><span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold uppercase tracking-wider mb-4">Our Work</span>
			<h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-foreground mb-4">Project Gallery</h2>
			<p class="text-lg text-muted-foreground max-w-2xl mx-auto">Browse through some of our recent projects and see the quality of our workmanship.</p>
		</div>
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
			<div class="group relative aspect-[4/3] rounded-xl overflow-hidden cursor-pointer" style="opacity: 1; transform: none;"><img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=800" alt="Commercial electrical panel installation" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
				<div class="absolute inset-0 bg-gradient-to-t from-background via-background/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
				<div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
					<h3 class="text-foreground font-display font-semibold">Commercial Panel Upgrade</h3>
				</div>
				<div class="absolute inset-0 border-2 border-primary/0 group-hover:border-primary/50 rounded-xl transition-colors duration-300"></div>
			</div>
			<div class="group relative aspect-[4/3] rounded-xl overflow-hidden cursor-pointer" style="opacity: 1; transform: none;"><img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800" alt="Modern lighting installation" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
				<div class="absolute inset-0 bg-gradient-to-t from-background via-background/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
				<div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
					<h3 class="text-foreground font-display font-semibold">Custom Lighting Design</h3>
				</div>
				<div class="absolute inset-0 border-2 border-primary/0 group-hover:border-primary/50 rounded-xl transition-colors duration-300"></div>
			</div>
			<div class="group relative aspect-[4/3] rounded-xl overflow-hidden cursor-pointer" style="opacity: 1; transform: none;"><img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800" alt="Industrial wiring project" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
				<div class="absolute inset-0 bg-gradient-to-t from-background via-background/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
				<div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
					<h3 class="text-foreground font-display font-semibold">Industrial Wiring</h3>
				</div>
				<div class="absolute inset-0 border-2 border-primary/0 group-hover:border-primary/50 rounded-xl transition-colors duration-300"></div>
			</div>
			<div class="group relative aspect-[4/3] rounded-xl overflow-hidden cursor-pointer" style="opacity: 1; transform: none;"><img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?w=800" alt="Residential electrical work" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
				<div class="absolute inset-0 bg-gradient-to-t from-background via-background/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
				<div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
					<h3 class="text-foreground font-display font-semibold">Residential Rewiring</h3>
				</div>
				<div class="absolute inset-0 border-2 border-primary/0 group-hover:border-primary/50 rounded-xl transition-colors duration-300"></div>
			</div>
			<div class="group relative aspect-[4/3] rounded-xl overflow-hidden cursor-pointer" style="opacity: 1; transform: none;"><img src="https://images.unsplash.com/photo-1555963966-b7ae5404b6ed?w=800" alt="Smart home installation" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
				<div class="absolute inset-0 bg-gradient-to-t from-background via-background/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
				<div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
					<h3 class="text-foreground font-display font-semibold">Smart Home Systems</h3>
				</div>
				<div class="absolute inset-0 border-2 border-primary/0 group-hover:border-primary/50 rounded-xl transition-colors duration-300"></div>
			</div>
			<div class="group relative aspect-[4/3] rounded-xl overflow-hidden cursor-pointer" style="opacity: 1; transform: none;"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800" alt="Office lighting project" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
				<div class="absolute inset-0 bg-gradient-to-t from-background via-background/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
				<div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
					<h3 class="text-foreground font-display font-semibold">Office Renovation</h3>
				</div>
				<div class="absolute inset-0 border-2 border-primary/0 group-hover:border-primary/50 rounded-xl transition-colors duration-300"></div>
			</div>
		</div>
	</div>
</section>
<!-- 
<section id="contact" class="py-20 md:py-32 bg-background">
	<div class="container">
		<motion.div
			initial { opacity: 0, y: 20 }}
			whileInView { opacity: 1, y: 0 }}
			viewport { once: true }}
			transition { duration: 0.5 }}
			class="text-center mb-16">
			<span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold uppercase tracking-wider mb-4">
				Get In Touch
			</span>
			<h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-foreground mb-4">
				Request a Free Quote
			</h2>
			<p class="text-lg text-muted-foreground max-w-2xl mx-auto">
				Ready to get started? Contact us today for a free estimate on your electrical project.
			</p>
		</motion.div>

		<div class="grid lg:grid-cols-2 gap-12">
			<motion.div
				initial { opacity: 0, x: -20 }}
				whileInView { opacity: 1, x: 0 }}
				viewport { once: true }}
				transition { duration: 0.5 }}
				class="grid grid-cols-1 sm:grid-cols-2 gap-4">

				<div
					class="p-6 bg-card rounded-xl border border-border hover:border-primary/50 transition-colors duration-300">
					<div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4">
						<span class="w-6 h-6 text-primary">
						</span>
					</div>
					<h3 class="font-display font-semibold text-foreground mb-1">Call Us</h3>
					<p class="text-primary font-semibold">(212) 555-1234</p>
					<p class="text-muted-foreground text-sm">24/7 Emergency Line</p>
				</div>
				<div
					class="p-6 bg-card rounded-xl border border-border hover:border-primary/50 transition-colors duration-300">
					<div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4">
						<span class="w-6 h-6 text-primary">
						</span>
					</div>
					<h3 class="font-display font-semibold text-foreground mb-1">Email Us</h3>
					<p class="text-primary font-semibold">info@nycelectric.com</p>
					<p class="text-muted-foreground text-sm">Quick Response</p>
				</div>
				<div
					class="p-6 bg-card rounded-xl border border-border hover:border-primary/50 transition-colors duration-300">
					<div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4">
						<span class="w-6 h-6 text-primary">
						</span>
					</div>
					<h3 class="font-display font-semibold text-foreground mb-1">Visit Us</h3>
					<p class="text-primary font-semibold">123 Electric Ave</p>
					<p class="text-muted-foreground text-sm">New York, NY 10001</p>
				</div>
				<div
					class="p-6 bg-card rounded-xl border border-border hover:border-primary/50 transition-colors duration-300">
					<div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4">
						<span class="w-6 h-6 text-primary">
						</span>
					</div>
					<h3 class="font-display font-semibold text-foreground mb-1">Hours</h3>
					<p class="text-primary font-semibold">Mon-Sat: 7AM-8PM</p>
					<p class="text-muted-foreground text-sm">Emergency: 24/7</p>
				</div>

				<div class="sm:col-span-2 p-6 bg-accent rounded-xl text-center">
					<h3 class="font-display text-2xl font-bold text-accent-foreground mb-2">
						Electrical Emergency?
					</h3>
					<p class="text-accent-foreground/90 mb-4">
						Don't wait! Our emergency team is available 24/7.
					</p>
					<Button variant="outline" size="lg" class="border-accent-foreground text-accent-foreground hover:bg-accent-foreground hover:text-accent" asChild>
						<a href="tel:+12125551234" class="flex items-center gap-2">
							<Phone class="w-5 h-5" />
							Call Now: (212) 555-1234
						</a>
					</Button>
				</div>
			</motion.div>

			<form onSubmit handleSubmit} class="p-6 md:p-8 bg-card rounded-xl border border-border">
				<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
					<div>
						<label htmlFor="name" class="block text-sm font-medium text-foreground mb-2">
							Full Name *
						</label>
						<Input
							id="name"
							name="name"
							onChange handleChange}
							required
							placeholder="John Smith"
							class="border-border" />
					</div>
					<div>
						<label htmlFor="email" class="block text-sm font-medium text-foreground mb-2">
							Email Address *
						</label>
						<Input
							id="email"
							name="email"
							type="email"
							onChange handleChange}
							required
							placeholder="john@example.com"
							class="border-border" />
					</div>
				</div>

				<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
					<div>
						<label htmlFor="phone" class="block text-sm font-medium text-foreground mb-2">
							Phone Number *
						</label>
						<Input
							id="phone"
							name="phone"
							type="tel"
							onChange handleChange}
							required
							placeholder="(212) 555-0000"
							class="border-border" />
					</div>
					<div>
						<label htmlFor="service" class="block text-sm font-medium text-foreground mb-2">
							Service Needed
						</label>
						<select
							id="service"
							name="service"
							onChange handleChange}
							class="w-full h-10 px-3 rounded-md border border-border text-foreground focus:outline-none focus:ring-2 focus:ring-ring">
							<option value="">Select a service</option>
							<option value="residential">Residential</option>
							<option value="commercial">Commercial</option>
							<option value="industrial">Industrial</option>
							<option value="emergency">Emergency</option>
							<option value="other">Other</option>
						</select>
					</div>
				</div>

				<div class="mb-6">
					<label htmlFor="message" class="block text-sm font-medium text-foreground mb-2">
						Project Details
					</label>
					<textarea
						id="message"
						name="message"
						onChange handleChange}
						placeholder="Tell us about your electrical project..."
						rows 4}
						class="border-border resize-none"></textarea>
				</div>

				<Button type="submit" variant="hero" size="lg" class="w-full" disabled isSubmitting}>
					Get Free Quote
				</Button>

				<p class="text-center text-muted-foreground text-sm mt-4">
					We respond to all inquiries within 24 hours.
				</p>
			</form>
		</div>
	</div>
</section> -->

<section class="py-20 bg-slate-900 relative overflow-hidden">
	<div class="absolute inset-0">
		<div class="absolute top-10 left-10 w-64 h-64 bg-secondary/20 rounded-full blur-3xl"></div>
		<div class="absolute bottom-10 right-10 w-80 h-80 bg-primary/10 rounded-full blur-3xl"></div>
	</div>

	<div class="container mx-auto px-4 relative z-10 text-center fade-in-group">
		<h2 class="font-modern text-shadow-3xl text-3xl md:text-4xl lg:text-5xl font-bold text-secondary font-pixel text-shadow-xl mb-6 fade-in-item">
			Ready to Power Up Your Project?
		</h2>
		<p class="text-primary-foreground/70 text-lg mb-8 max-w-2xl mx-auto fade-in-item text-white/95">
			Contact us today for a free consultation and estimate.
			Our expert team is ready to help with all your electrical needs.
		</p>
		<div class="flex flex-wrap justify-center gap-4 fade-in-item">
			<button class="btn btn-primary btn-md tracking-widest relative overflow-hidden text-shadow">
				BOOK A SERVICE NOW!
			</button>
		</div>
	</div>
</section>
<?php
get_footer();
?>