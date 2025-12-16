window.addEventListener("load", function () {
	let mainNavigation = document.getElementById("primary-navigation");
	let mainNavigationToggle = document.getElementById("primary-menu-toggle");

	if (mainNavigation && mainNavigationToggle) {
		mainNavigationToggle.addEventListener("click", function (e) {
			e.preventDefault();
			mainNavigation.classList.toggle("hidden");
		});
	}
});

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
	console.log("DOM loaded");

	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener(
		"load",
		function (e) {
			gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
			// create the scrollSmoother before your scrollTriggers

			/* -----------------------------
				TEXT SPLITTER
				----------------------------- */
			function splitText(element, type = "words") {
				const text = element.innerText;
				element.innerHTML = "";

				let split;

				if (type === "letters") {
					split = text
						.split("")
						.map((char) =>
							char === " "
								? "&nbsp;"
								: `<span class="inline-block split-item">${char}</span>`
						);
				} else {
					split = text
						.split(" ")
						.map(
							(word) =>
								`<span class="inline-block split-item mr-2">${word}</span>`
						);
				}

				element.innerHTML = split.join("");
			}

			/* -----------------------------
				INIT SPLIT TEXT	
				----------------------------- */
			document.querySelectorAll("[data-split]").forEach((el) => {
				splitText(el, el.dataset.split);
			});

			/* -----------------------------
				STAGGER + PARALLAX
				----------------------------- */

			document.querySelectorAll("[data-split]").forEach((el) => {
				const items = el.querySelectorAll(".split-item");
				const parallax = Number(el.dataset.parallax || 0);

				gsap.fromTo(
					items,
					{
						opacity: 0,
						scale: 0.9,
					},
					{
						opacity: 1,
						scale: 1,
						duration: 0.5,
						ease: "power3.inOut",
						stagger: 0.1,
						scrollTrigger: {
							trigger: el,
							start: "top 80%",
							toggleActions: "restart none restart none",
						},
					}
				);

				// Optional parallax
				if (parallax) {
					gsap.to(el, {
						y: -parallax,
						ease: "none",
						scrollTrigger: {
							trigger: el,
							start: "top bottom",
							end: "bottom top",
							scrub: true,
							toggleActions: "restart none restart none",
						},
					});
				}
			});

			document.querySelectorAll("[data-effect]").forEach((el) => {
				const effect = el.dataset.effect;
				const direction = el.dataset.direction || "up";

				let fromVars = { opacity: 0 };
				let toVars = {
					opacity: 1,
					duration: 0.7,
					ease: "power3.inOut",
					scrollTrigger: {
						trigger: el,
						start: "top 85%",
						toggleActions: "restart none restart none",
					},
				};

				switch (effect) {
					case "zoom":
						fromVars.scale = 0.15;
						toVars.scale = 1;
						break;

					case "fade":
						// only opacity
						break;

					case "slide":
						const distance = 30;
						if (direction === "up") fromVars.y = distance;
						if (direction === "down") fromVars.y = -distance;
						if (direction === "left") fromVars.x = distance;
						if (direction === "right") fromVars.x = -distance;

						toVars.x = 0;
						toVars.y = 0;
						break;
				}

				gsap.fromTo(el, fromVars, toVars);
			});

			gsap.utils.toArray(".fade-in-group").forEach((group) => {
				gsap.to(group.querySelectorAll(".fade-in-item"), {
					opacity: 1,
					y: 0,
					duration: 0.6,
					ease: "power2.out",
					stagger: 0.15,
					scrollTrigger: {
						trigger: group,
						start: "top 80%",
						end: "bottom",
						toggleActions: "restart none restart none",
					},
				});
			});

			gsap.utils.toArray(".fade-in").forEach((el) => {
				gsap.to(el, {
					opacity: 1,
					y: 0,
					duration: 1,
					ease: "power2.out",
					stagger: 0.05,
					scrollTrigger: {
						trigger: el,
						start: "top 80%",
						end: "bottom",
						toggleActions: "restart none restart none",
					},
				});
			});
		},
		false
	);
});
