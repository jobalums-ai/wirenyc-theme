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
					<div class="flex flex-wrap order-3 lg:order-1">
						<div class="mr-2 inline-flex items-center gap-2 pl-3 pr-4 py-1 tracking-wider bg-background/50 backdrop-blur-sm border border-gray-200/15 smooth-transition hover:bg-black/30 mb-2 rounded-3xl justify-center">
							<span class="text-sm text-white text-shadow text-shadow-black"><b class="text-lg">💡</b> Lighting Upgrades</span>
						</div>
						<div class="mr-2 inline-flex items-center gap-2 pl-3 pr-4 py-1 tracking-wider bg-background/50 backdrop-blur-sm border border-gray-200/15 smooth-transition hover:bg-black/30 mb-2 rounded-3xl justify-center">
							<span class="text-sm text-white text-shadow text-shadow-black"><b class="text-lg">✨</b> Fixture Installations</span>
						</div>
						<div class="inline-flex items-center gap-2 pl-3 pr-4 py-1 tracking-wider bg-background/50 backdrop-blur-sm border border-gray-200/15 smooth-transition hover:bg-black/30 mb-2 rounded-3xl justify-center">
							<span class="text-sm text-white text-shadow text-shadow-black"><b class="text-lg">⚡</b> Power Needs</span>
						</div>
						<div class="inline-flex items-center gap-2 pl-3 pr-4 py-1 tracking-wider bg-background/50 backdrop-blur-sm border border-gray-200/15 smooth-transition hover:bg-black/30 mb-2 rounded-3xl justify-center">
							<span class="text-sm text-white text-shadow text-shadow-black"><b class="text-lg">⚡</b> Security Installations</span>
						</div>
					</div>
					<h1 class="text-4xl md:text-3xl lg:text-5xl font-pixel text-shadow-[2px_2px_2px,2px_2px_5px] font-bold text-white text-shadow-red-900 leading-[1.4em] tracking-wide order-1">
						NEW YORK CITY <span class="text-secondary">ELECTRIC</span>
					</h1>
					<p class="text-sm lg:text-base text-foreground tracking-wider order-2 lg:order-3">From residential repairs to commercial installations, our licensed electricians deliver safe, reliable, and efficient solutions for all your electrical needs.</p>
					<div class="relative group w-1/2 hidden">
						<div class="relative">
							<img
								src="<?php echo get_stylesheet_directory_uri() . '/resources/images/wirenyc-logo.png' ?>"
								alt="NYCE New York City Electric Logo"
								class="w-full contain">
						</div>
					</div>
				</div>

				<div class="flex flex-wrap gap-4">
					<button class="btn btn-primary btn-md">
						BOOK SERVICE NOW!
					</button>
					<button class="btn btn-secondary lg:btn-md font-normal">
						OUR WORK
					</button>
				</div>

			</div>

			<div class="flex justify-center order-1 lg:order-2 lg:col-span-5">
				<div class="relative group">
					<div class="absolute -inset-4 bg-gradient-to-r from-primary/20 via-secondary/20 to-primary/20 blur-2xl opacity-75 group-hover:opacity-100 smooth-transition"></div>
					<div class="relative bg-black/5 p-2 lg:p-4 rounded-3xl duration-200 lg:mb-20">
						<img
							src="<?php echo get_stylesheet_directory_uri() . '/resources/images/wirenyc-logo.png' ?>"
							alt="NYCE New York City Electric Logo"
							class="w-full contain">
					</div>
				</div>
			</div>
		</div>
		<div class="my-20  bg-black"></div>
	</div>
</section>
<section id="services" class="py-20 md:py-32 bg-black/95 relative" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/resources/images/bg-1.jpeg'; ?>); background-size: cover;background-attachment: fixed;">
	<div class="absolute inset-0 bg-gradient-to-br from-black/85 via-background/90 to-background/80 z-0"></div>
	<div class="container relative">
		<div class="text-center mb-16 z-20" style="opacity: 1; transform: none;">
			<span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold uppercase tracking-wider mb-4">Our Services</span>
			<h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-foreground mb-4"><span class="text-secondary">Residential & Commercial</span> <br />Electrical Services in Tri-State Area</h2>
			<p class="text-lg text-muted-foreground max-w-2xl mx-auto uppercase">Licensed, Insured, Knowledgeable Electricians You can Trust.</p>
		</div>
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
			<div class="group relative p-6 bg-card/50 backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5" style="opacity: 1; transform: none;">
				<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house w-7 h-7 text-secondary">
						<path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
						<path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
					</svg></div>
				<h3 class="text-xl font-display font-semibold text-foreground mb-2">Electrical system design and installation</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">We design and install complete electrical systems tailored to your building’s needs, ensuring safety, reliability, and efficient power distribution.</p>
			</div>
			<div class="group relative p-6 bg-card/50 backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5" style="opacity: 1; transform: none;">
				<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-7 h-7 text-secondary">
						<path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
						<path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
						<path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
						<path d="M10 6h4"></path>
						<path d="M10 10h4"></path>
						<path d="M10 14h4"></path>
						<path d="M10 18h4"></path>
					</svg></div>
				<h3 class="text-xl font-display font-semibold text-foreground mb-2">Electrical panel installation and upgrades</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">We install new electrical panels or upgrade existing ones to support higher power demands and improve overall system safety and performance.</p>
			</div>
			<div class="group relative p-6 bg-card/50 backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5" style="opacity: 1; transform: none;">
				<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-factory w-7 h-7 text-secondary">
						<path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"></path>
						<path d="M17 18h1"></path>
						<path d="M12 18h1"></path>
						<path d="M7 18h1"></path>
					</svg></div>
				<h3 class="text-xl font-display font-semibold text-foreground mb-2">Lighting upgrades</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">We enhance your lighting system with modern, energy-efficient solutions that improve brightness, reduce energy costs, and create a better environment.</p>
			</div>
			<div class="group relative p-6 bg-card/50 backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5" style="opacity: 1; transform: none;">
				<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb w-7 h-7 text-secondary">
						<path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path>
						<path d="M9 18h6"></path>
						<path d="M10 22h4"></path>
					</svg></div>
				<h3 class="text-xl font-display font-semibold text-foreground mb-2">Door access control and CCTV systems</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">Custom lighting solutions that enhance ambiance, improve efficiency, and reduce energy costs.</p>
			</div>
			<div class="group relative p-6 bg-card/50 backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5" style="opacity: 1; transform: none;">
				<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-7 h-7 text-secondary">
						<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
					</svg></div>
				<h3 class="text-xl font-display font-semibold text-foreground mb-2">Electrical Safety</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">Comprehensive safety inspections, surge protection, and code compliance to protect your property.</p>
			</div>
			<div class="group relative p-6 bg-card/50 backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5" style="opacity: 1; transform: none;">
				<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge w-7 h-7 text-secondary">
						<path d="m12 14 4-4"></path>
						<path d="M3.34 19a10 10 0 1 1 17.32 0"></path>
					</svg></div>
				<h3 class="text-xl font-display font-semibold text-foreground mb-2">Panel Upgrades</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">Modernize your electrical panel to handle today's power demands and improve safety.</p>
			</div>
			<div class="group relative p-6 bg-card/50 backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5" style="opacity: 1; transform: none;">
				<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench w-7 h-7 text-secondary">
						<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
					</svg></div>
				<h3 class="text-xl font-display font-semibold text-foreground mb-2">Repairs &amp; Maintenance</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">Fast, reliable repairs and preventive maintenance to keep your electrical systems running smoothly.</p>
			</div>
			<div class="group relative p-6 bg-card/50 backdrop-blur-[2px] rounded-xl border border-yellow-600/50 hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5" style="opacity: 1; transform: none;">
				<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors duration-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-7 h-7 text-secondary">
						<path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
					</svg></div>
				<h3 class="text-xl font-display font-semibold text-foreground mb-2">Emergency Services</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">24/7 emergency response for electrical emergencies. We're here when you need us most.</p>
			</div>
		</div>
	</div>
</section>
<section id="about" class="py-20 md:py-32 bg-card">
	<div class="container">
		<div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
			<div style="opacity: 1; transform: none;"><span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold uppercase tracking-wider mb-4">About NYCE</span>
				<h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-foreground mb-6">New York's Most Trusted <span class="text-primary">Electrical Contractor</span></h2>
				<p class="text-muted-foreground text-lg mb-6">Since 2003, NYCE has been providing top-quality electrical services throughout the five boroughs. Our commitment to excellence, safety, and customer satisfaction has made us the go-to choice for thousands of New Yorkers.</p>
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


<?php
get_footer();
?>