<?php
wp_head();
get_header();
?>
<section class="relative pt-24 pb-20 bg-hero overflow-hidden">
	<div class="absolute inset-0 opacity-20">
		<div class="absolute top-20 right-20 w-72 h-72 bg-accent/30 rounded-full blur-3xl"></div>
		<div class="absolute bottom-20 left-20 w-96 h-96 bg-electric-blue-light/20 rounded-full blur-3xl"></div>
	</div>

	<div class="container mx-auto px-4 py-20 relative z-10 rl">
		<div class="grid lg:grid-cols-2 gap-12 items-center z-10">
			<div class="space-y-6 animate-fade-in fade-in-group">
				<!-- <div class="inline-flex items-center gap-2 bg-accent/10 border border-accent/30 rounded-full px-4 py-2">
					<span class="text-accent text-sm font-medium">More than 20yrs of </span>
				</div> -->


				<h1 class="text-4xl md:text-3xl lg:text-5xl font-pixel text-shadow-[2px_2px_2px,2px_2px_5px] font-bold text-white text-shadow-red-900 leading-[1.4em] tracking-wide order-1">
					<span data-split="words"
						data-parallax="20">NEW YORK CITY</span> <span data-split="letters"
						data-parallax="20" class="text-secondary">ELECTRIC</span>
				</h1>
				<h3 class="font-display text-2xl md:text-2xl italic lg:text-3xl font-bold text-primary-foreground leading-tight fade-in-item">
					Powering Homes &
					<span class="text-gradient">Businesses Safely</span>
				</h3>
				<p class="text-sm tracking-widest text-slate-100 max-w-lg fade-in-item">
					New York City Electric INC delivers exceptional electrical services with over 20 years of expertise.
					We're the team you can trust for reliable, safe, and professional electrical solutions.
				</p>

			</div>

			<div class="relative animate-slide-in-right fade-in-group">
				<div class="relative rounded-2xl overflow-hidden shadow-elevated bg-blue-950 fade-in-item">
					<img
						src="<?php echo get_stylesheet_directory_uri() . '/resources/images/bg-2.jpeg'; ?>"
						alt="Professional electricians at work"
						class="w-full h-[400px] lg:h-[500px] object-cover opacity-80 shadow-2xl" />
					<div class="absolute inset-0 bg-gradient-to-t from-black/90 to-yellow-300/10"></div>
				</div>
				<div class="absolute -bottom-6 -left-6 bg-slate-950 border-[0.5px] border-secondary/50 rounded-xl p-4 shadow-elevated animate-pulse-glow fade-in-item">
					<div class="flex items-center gap-3">
						<div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center">
							<img width="96" height="96" src="https://img.icons8.com/fluency/96/shield.png" alt="shield" />
						</div>
						<div>
							<p class="font-display font-bold text-yellow-100">Fully Licensed</p>
							<p class="text-sm text-muted-foreground">& Insured</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="flex flex-wrap justify-center items-center gap-16 pt-20 mt-5 fade-in-group">
			<div class="overflow-hidden bg-white rounded-md backdrop-blur fade-in-item">
				<img class="h-20" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/osha-certified.png' ?>" />
			</div>
			<div class="overflow-hidden bg-white/10 rounded-md backdrop-blur fade-in-item">
				<img class="h-20" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/quality-assured-master-electrician.jpeg' ?>" />
			</div>
			<div class="overflow-hidden bg-white/10 rounded-md backdrop-blur fade-in-item">
				<img class="h-20" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/lutron-pro-logo.png' ?>" />
			</div>
			<div class="overflow-hidden bg-white/10 rounded-md backdrop-blur fade-in-item">
				<img class="h-20" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/Lutron_Pro-gold.png' ?>" />
			</div>
			<div class="overflow-hidden rounded-md backdrop-blur fade-in-item">
				<img class="h-40" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/osha-trained.png' ?>" />
			</div>
			<div class="overflow-hidden rounded-md backdrop-blur fade-in-item">
				<img class="h-40" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/EPA-Lead-Certified.png' ?>" />
			</div>
			<div class="overflow-hidden rounded-md backdrop-blur fade-in-item">
				<img class="h-40" src="<?php echo get_stylesheet_directory_uri() . '/resources/images/five-boro-logo.svg' ?>" />
			</div>
		</div>
	</div>
	<div class="absolute cursor-none pointer-events-none opacity-50 h-full top-0 right-0 w-full blur" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/resources/images/bg-2.jpeg'; ?>); background-size: cover;background-attachment: fixed;">
		<!-- <img
			src="<?php echo get_stylesheet_directory_uri() . '/resources/images/wirenyc-logo.png' ?>"
			alt="NYCE New York City Electric Logo"
			class="w-full contain"> -->
	</div>
</section>

<section class="py-20 bg-black">
	<div class="container mx-auto px-4">
		<div class="grid lg:grid-cols-2 gap-16 items-center">
			<div class="space-y-6 fade-in-group">
				<span class="text-accent font-semibold uppercase tracking-wider text-sm fade-in-item">Our Story</span>
				<h2 class="font-display text-3xl md:text-4xl font-bold text-slate-200 fade-in-item">
					Building Trust Through Quality Electrical Work
				</h2>
				<div class="space-y-4 text-slate-300 tracking-wide fade-in-item">
					<p>
						Third generation electrician Daniel Weissman currently holds master electrical licenses in New York City, New Jersey, Delaware, Florida, USVI and Connecticut.
					</p>
					<p>
						Our team of highly-trained technicians work on a variety of residential, commercial, and industrial projects in the Tri-State Area. Quality work, safety and customer service is our first priority at New York City Electric. You can rest assured in knowing that all of our work is compliant with national and local codes.
					</p>
					<p>
						New York City Electric Inc, a small business with a big name. Count on us for all your electrical, lighting and power needs.
					</p>
					<p>
						Providing Services in New York, New Jersey, and Connecticut, Delaware, USVI and Florida.
					</p>
				</div>
			</div>

			<div class="relative">
				<div class="grid grid-cols-2 gap-4 fade-in-group">
					<div class="space-y-4 fade-in-item">
						<div class="bg-slate-950 border-slate-800 border rounded-2xl p-6 text-primary-foreground flex flex-col">
							<span class="w-8 h-8 mb-4 text-accent"></span>
							<p class="font-display text-2xl font-bold">5000+</p>
							<p class="text-primary-foreground/70 text-sm">Satisfied Customers</p>
						</div>
						<div class="bg-red-950 rounded-2xl p-6 text-accent-foreground flex flex-col">
							<span class="w-8 h-8 mb-4 text-accent"></span>
							<p class="font-display text-2xl font-bold">A+ Rating</p>
							<p class="text-accent-foreground/70 text-sm">BBB Accredited</p>
						</div>
					</div>
					<div class="space-y-4 mt-8 fade-in-item">
						<div class="bg-secondary rounded-2xl p-6 flex flex-col">
							<span class="w-8 h-8 mb-4 text-accent"></span>
							<p class="font-display text-2xl font-bold text-foreground">35+</p>
							<p class="text-muted-foreground text-sm">Expert Electricians</p>
						</div>
						<div class="bg-slate-950 border-slate-800 border rounded-2xl p-6 text-primary-foreground flex flex-col">
							<span class="w-8 h-8 mb-4 text-accent"></span>
							<p class="font-display text-2xl font-bold">24/7</p>
							<p class="text-primary-foreground/70 text-sm">Available Service</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-20 bg-slate-950">
	<div class="container mx-auto px-4">
		<div class="text-center mb-16 fade-in">
			<span class="text-accent font-semibold uppercase tracking-wider text-sm shadow-xs shadow-amber-200 py-2 px-4 rounded-3xl">Our Values</span>
			<h2 class="font-display text-3xl md:text-4xl font-bold text-foreground mt-10 ">
				What Sets Us Apart
			</h2>
			<p class="text-muted-foreground mt-4 max-w-2xl mx-auto">
				We're not just electricians—we're partners in keeping your home and business powered safely.
			</p>
		</div>

		<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 fade-in-group">
			<div
				class="bg- rounded-2xl p-6 shadow-soft hover:shadow-elevated transition-shadow duration-300 group border border-yellow-700 fade-in-item">
				<div class="w-14 h-14 rounded-xl bg-accent/10 flex items-center justify-center mb-4 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
					<span class="w-7 h-7 text-accent group-hover:text-accent-foreground transition-colors"></span>
				</div>
				<h3 class="font-display text-xl font-bold text-foreground mb-2">Safety First</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">Every job follows strict safety protocols. Your family and property are protected with our certified procedures.
				</p>
			</div>
			<div
				class="bg- rounded-2xl p-6 shadow-soft hover:shadow-elevated transition-shadow duration-300 group border border-yellow-700 fade-in-item">
				<div class="w-14 h-14 rounded-xl bg-accent/10 flex items-center justify-center mb-4 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
					<span class="w-7 h-7 text-accent group-hover:text-accent-foreground transition-colors"></span>
				</div>
				<h3 class="font-display text-xl font-bold text-foreground mb-2">Quality Guaranteed</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">We stand behind our work with comprehensive warranties. Excellence isn't optional—it's our standard.
					We stand behind our work with comprehensive warranties. Excellence isn't optional—it's our standard.
				</p>
			</div>
			<div
				class="bg- rounded-2xl p-6 shadow-soft hover:shadow-elevated transition-shadow duration-300 group border border-yellow-700 fade-in-item">
				<div class="w-14 h-14 rounded-xl bg-accent/10 flex items-center justify-center mb-4 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
					<span class="w-7 h-7 text-accent group-hover:text-accent-foreground transition-colors"></span>
				</div>
				<h3 class="font-display text-xl font-bold text-foreground mb-2">Expert Team</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">Our licensed electricians bring decades of combined experience to every residential and commercial project.
				</p>
			</div>
			<div
				class="bg- rounded-2xl p-6 shadow-soft hover:shadow-elevated transition-shadow duration-300 group border border-yellow-700 fade-in-item">
				<div class="w-14 h-14 rounded-xl bg-accent/10 flex items-center justify-center mb-4 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
					<span class="w-7 h-7 text-accent group-hover:text-accent-foreground transition-colors"></span>
				</div>
				<h3 class="font-display text-xl font-bold text-foreground mb-2">On-Time Service</h3>
				<p class="text-muted-foreground text-sm leading-relaxed">We respect your time. Expect punctual arrivals, clear communication, and efficient project completion.
				</p>
			</div>
		</div>
	</div>
</section>

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