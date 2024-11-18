jQuery(document).ready(function () {
	//Age Verification
	function displayVerifyModal() {
		var modal = document.getElementById("verificationModal");
		modal.style.display = "block";

		// Add event listeners to the buttons
		document.getElementById("overAge").addEventListener("click", function () {
			// Check remember me
			const checkbox = document.getElementById("remember_me");

			if (checkbox.checked) {
				// Create cookie (expire in 1 week)
				localStorage.setItem("rememberMe", 1);

				modal.style.display = "none";
			} else {
				modal.style.display = "none";
			}
		});

		document.getElementById("underAge").addEventListener("click", function () {
			window.location.href = "https://www.drinkaware.co.uk/";
		});
	}

	// Check if 'rememberMe' exists in localStorage
	if (localStorage.getItem("rememberMe") !== null) {
		console.log("Remembered");
	} else {
		displayVerifyModal();
	}

	// jQuery('body').on('change', '#pa_volume', function(e) {
	// 		e.preventDefault();
	// 		// var texts = jQuery("#pa_volume option:selected").text();
	// 		// jQuery('.variableTitle').text(texts);
	// 		});
	jQuery("body").on("change", ".variation_radio", function (e) {
		e.preventDefault();
		var vals = jQuery(".variation_radio:checked").val();
		jQuery("#pa_package").val(vals);
		jQuery("#pa_package").trigger("change");
		return false;
	});
	// DESKTOP MENU
	jQuery(".btn-toggle-menu").on("click", function () {
		jQuery(".desktop-menu-frame").addClass("open");
		jQuery("body").addClass("opencl");
	});
	jQuery(".btn-desktop-menu-close").on("click", function () {
		jQuery(".desktop-menu-frame").removeClass("open");
	});

	jQuery(".opencl").on("click", function () {
		jQuery(".desktop-menu-frame").removeClass("open");
	});

	// MOBILE MENU
	jQuery(".mobile-menu > li.have-children a").on("click", function () {
		// i.preventDefault();
		if (!jQuery(this).parent().hasClass("active")) {
			jQuery(".mobile-menu li ul").slideUp();
			jQuery(this).next().slideToggle();
			jQuery(".mobile-menu li").removeClass("active");
			jQuery(this).parent().addClass("active");
		} else {
			jQuery(this).next().slideToggle();
			jQuery(".mobile-menu li").removeClass("active");
		}
	});

	// STICKY HEADER
	jQuery(window).scroll(function () {
		var scroll = jQuery(window).scrollTop();
		if (scroll >= 1) {
			jQuery(".site-header").addClass("scrolled");
		} else {
			jQuery(".site-header").removeClass("scrolled");
		}
	});

	jQuery(".btn-toggle-menu").on("click", function () {
		jQuery(".mobile-menu-frame").addClass("open");
	});
	jQuery(".btn-mobile-menu-close").on("click", function () {
		jQuery(".mobile-menu-frame").removeClass("open");
	});

	// ADD TO CART
	jQuery(".btn-cart").on("click", function () {
		jQuery(".aside-min-cart").addClass("active");
	});
	jQuery(".btn-min-cart-close").on("click", function () {
		jQuery(".aside-min-cart").removeClass("active");
	});

	// HEADER SEARCH
	jQuery(".btn-header-search").on("click", function () {
		jQuery(".header-search-frame").addClass("open");
	});
	jQuery(".btn-header-search-close").on("click", function () {
		jQuery(".header-search-frame").removeClass("open");
	});

	// // QUICK VIEW MODAL TRIGGER
	// jQuery(".btn-quick-view").click(function(e) {
	// 	e.preventDefault();
	//       jQuery(".quickViewModal").modal();
	//    });

	// HOME CAROUSEL
	jQuery(".home-carousel").owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		dots: true,
		items: 1,
		navText: ['<img loading="lazy"  src="https://whiskyfix.com/wp-content/themes/whisky-fix/img/hc-prev.svg" alt="prev">', '<img loading="lazy"  src="https://whiskyfix.com/whisky-fix-wp/wp-content/themes/whisky-fix/img/hc-next.svg" alt="next">'],
	});

	// PRODUCT MEDIA CAROUSEL
	jQuery(".product-media-carousel").owlCarousel({
		loop: true,
		margin: 0,
		nav: true,
		dots: true,
		items: 1,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	});

	// RELATED PRODUCTS
	jQuery(".related-products").owlCarousel({
		loop: false,
		margin: 16,
		nav: true,
		dots: true,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		responsive: {
			0: {
				items: 2,
			},
			992: {
				items: 3,
			},
			1200: {
				items: 4,
			},
			1400: {
				items: 5,
			},
		},
	});
	jQuery(".new-arrivalproducts").owlCarousel({
		loop: true,
		margin: 16,
		nav: false,
		dots: false,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		responsive: {
			0: {
				items: 1,
				dots: true,
			},
			992: {
				items: 3,
			},
			1200: {
				items: 3,
			},
			1400: {
				items: 3,
			},
		},
	});

	// PREVIEW MODAL CAROUSEL
	jQuery(".preview-modal-carousel").owlCarousel({
		loop: true,
		margin: 5,
		nav: true,
		dots: true,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		items: 1,
	});

	// Product Filter
	jQuery(".btn-filter-open").on("click", function () {
		jQuery(".filter-col").addClass("open");
	});
	jQuery(".btn-filter-close").on("click", function () {
		jQuery(".filter-col").removeClass("open");
	});

	// Single product page input
	jQuery(".minus").click(function () {
		var input = jQuery(this).parent().find("input");
		var count = parseInt(input.val()) - 1;
		count = count < 1 ? 1 : count;
		input.val(count);
		input.change();
		return false;
	});
	jQuery(".plus").click(function () {
		var input = jQuery(this).parent().find("input");
		input.val(parseInt(input.val()) + 1);
		input.change();
		return false;
	});

	// Price Range Slider
	jQuery(".price-range-slider").ionRangeSlider({
		type: "double",
		skin: "big",
		grid: true,
		min: 200,
		max: 4000,
		from: 200,
		to: 1200,
		prefix: "£",
	});

	// Add in stock checkbox

	const stockCheckbox = document.querySelector("#custom-stock-filter-checkbox");
	const sidebar = document.querySelector("#sidebar ul");

	const sidebarA = document.createElement("div");
	sidebarA.classList.add("berocket_single_filter_widget");
	const sidebarB = document.createElement("div");
	sidebarB.classList.add("bapf_sfilter", "bapf_ckbox", "bapf_ckbox_square", "bapf_attr_pa_whiskytype", "bapf_ccolaps");
	sidebarA.appendChild(sidebarB);
	const sidebarHead = document.createElement("div");
	sidebarHead.classList.add("bapf_head", "bapf_colaps_togl");
	sidebarHead.innerHTML = '<h3 class="bapf_hascolarr">Stock Status<i class="bapf_colaps_smb fa fa-chevron-up"></i></h3>';
	sidebarB.appendChild(sidebarHead);

	const sidebarBody = document.createElement("div");
	sidebarBody.classList.add("bapf_body", "bapf_mcs", "mCustomScrollbar", "_mCS_4", "mCS_no_scrollbar", "bapf_mcs_ready");
	const sidebarBodyA = document.createElement("div");
	sidebarBodyA.classList.add("mCustomScrollBox", "mCS-light", "mCSB_vertical", "mCSB_inside");
	sidebarBodyA.id = "mCS_4";
	sidebarBody.appendChild(sidebarBodyA);
	const sidebarBodyB = document.createElement("div");
	sidebarBodyB.classList.add("mCSB_container", "mCS_y_hidden", "mCS_no_scrollbar_y");
	sidebarBodyB.id = "mCS_4_container";
	sidebarBodyA.appendChild(sidebarBodyB);
	const sidebarUl = document.createElement("ul");
	sidebarBodyB.appendChild(sidebarUl);

	sidebarUl.appendChild(stockCheckbox.parentElement);

	sidebarB.appendChild(sidebarBody);

	sidebar.appendChild(sidebarA);

	// Check the URL parameters on page load and set the checkbox state accordingly
	var instockParam = getParameterByName("instock");
	if (instockParam === "1") {
		jQuery("#custom-stock-filter-checkbox").prop("checked", true);
	}

	// Listen for the change event on the checkbox and update the URL and filter accordingly
	jQuery("#custom-stock-filter-checkbox").on("change", function () {
		if (this.checked) {
			window.location.href = addUrlParameter(window.location.href, "instock", "1");
		} else {
			window.location.href = removeUrlParameter(window.location.href, "instock");
		}
	});

	function addUrlParameter(url, param, value) {
		var hash = {};
		var parser = document.createElement("a");
		parser.href = url;
		var parameters = parser.search.split(/\?|&/);

		for (var i = 0; i < parameters.length; i++) {
			if (!parameters[i]) continue;
			var ary = parameters[i].split("=");
			hash[ary[0]] = ary[1];
		}

		hash[param] = value;

		var list = [];
		Object.keys(hash).forEach(function (key) {
			list.push(key + "=" + hash[key]);
		});

		parser.search = "?" + list.join("&");
		return parser.href;
	}

	function removeUrlParameter(url, param) {
		var urlparts = url.split("?");
		if (urlparts.length >= 2) {
			var prefix = encodeURIComponent(param) + "=";
			var pars = urlparts[1].split(/[&;]/g);

			for (var i = pars.length; i-- > 0; ) {
				if (pars[i].lastIndexOf(prefix, 0) !== -1) {
					pars.splice(i, 1);
				}
			}

			url = urlparts[0] + (pars.length > 0 ? "?" + pars.join("&") : "");
			return url;
		} else {
			return url;
		}
	}

	function getParameterByName(name) {
		var url = window.location.href;
		name = name.replace(/[\[\]]/g, "\\$&");
		var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)");
		var results = regex.exec(url);
		if (!results) {
			return null;
		}
		if (!results[2]) {
			return "";
		}
		return decodeURIComponent(results[2].replace(/\+/g, " "));
	}
}); //Script End
