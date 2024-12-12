
	(function($) {

		'use strict';

		var $window = $(window),
			$body = $('body'),
			$html = $('html'),
			$rzBtnsContainer = $('.rz-btns-container');


		$window.on('load', function() {

			setTimeout(function() {
				$body.addClass('loaded');
				$('.rz-loader-wrapper').fadeOut();
			}, 100);

		});

		$('[type=submit]').on('click', (event) => {
			
				$(event.currentTarget).addClass('disabled');

				let text = $(event.currentTarget).text();
				let loader = '<img src="_assets_/images/loader.svg" style="width:16px;height:16px;"> <span role="status">Working...</span>';
				$(event.currentTarget).html(loader);
		
				setTimeout(() => {
						$(event.currentTarget).removeClass('disabled');
						$(event.currentTarget).text(text);
				}, 6000);
		
		});
		
		jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up"><i class="bi bi-plus-lg"></i></div><div class="quantity-button quantity-down"><i class="bi bi-dash-lg"></i></div></div>').insertAfter('.quantity input');
		jQuery('.quantity').each(function() {
			var spinner = jQuery(this),
				input = spinner.find('input[type="number"]'),
				btnUp = spinner.find('.quantity-up'),
				btnDown = spinner.find('.quantity-down'),
				min = input.attr('min'),
				max = input.attr('max');
		
			btnUp.click(function() {
				var oldValue = parseFloat(input.val());
				if (oldValue >= max) {
					var newVal = oldValue;
				} else {
					var newVal = oldValue + 1;
				}
				spinner.find("input").val(newVal);
				spinner.find("input").trigger("change");
			});
		
			btnDown.click(function() {
				var oldValue = parseFloat(input.val());
				if (oldValue <= min) {
					var newVal = oldValue;
				} else {
					var newVal = oldValue - 1;
				}
				spinner.find("input").val(newVal);
				spinner.find("input").trigger("change");
			});
		
		});
		
		const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
		const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

		const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
		const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

		// for revize buttons container
		$rzBtnsContainer.each(function() {
			var $container = $(this);
			if ($container.html().trim() != "") {
				$container.closest(".has-edit-buttons").addClass('yes-has-edit-buttons');
			}
		});
		$(".has-edit-buttons").not(".yes-has-edit-buttons").removeClass("has-edit-buttons");

	// Keyboard Navigation: Nav, hiddenLinks
		var isClick = false;
		$("#hiddenLinks  li a, a, button, .toggle, .toggle2").on('focusin', function(e) {
			if (isClick === false) {
				$(".focused").removeClass("focused");
				$(e.currentTarget).parents("#hiddenLinks li").addClass("focused");
				$(".opened:not(.focused) ul:visible,.opened2:not(.focused) ul:visible").slideUp().parent().removeClass("opened opened2");
			} else {
				$(".focused").removeClass("focused");
				isClick = false;
			}
		});
		
		// prevent focused class changes on click - This way arrows wont pop when clicking nav links
		$("#hiddenLinks a").on('mousedown', function() {
			isClick = true;
		});

 		$('.freeformPagesSettings').on('click', function(e) {
			$('.right-col-wrap').toggleClass("hide-settings");
			$(this).toggleClass("only-icon");
			$('.savebtns').toggleClass("show-savebtns");
			e.preventDefault();
		});	
					
		// Menu Arrows and Toggles
		$("#hiddenLinks>li>ul").addClass('first-level');
		$('#hiddenLinks>li:has(ul)').each(function() {
			$(this).addClass('has-children');
			$('<a href="#" class="bi bi-chevron-down toggle" tabindex="0" aria-haspopup="true" aria-expanded="false" id="hiddenLinks-dropdown-toggle-' + $(this).index() + '" aria-label="Show Flyout for ' + $(this).find('a:first').text() + '"></a>').insertAfter($(this).find('a:first'));
			$(this).find('ul:first').attr('aria-labelledby', 'hiddenLinks-dropdown-toggle-' + $(this).index());
		});
		
	$(".toggle").on("click keydown", function(e) {
			if (e.keyCode === 13 || e.type === 'click') {
				e.preventDefault();
				var $parent = $(this).parent();
				var $parentLi = $parent.parent();
				$parent.toggleClass('opened');
				if ($parent.addClass('active') && $(this).next('.first-level').is(":visible")) {
					$(this).next('.first-level').slideUp();
					$parent.removeClass('active');
					$(this).attr({
						'aria-expanded': 'false'
					});
				} else {
					$(this).attr({
						'aria-expanded': 'true'
					});
					$(".first-level").slideUp("slow");
					$parent.addClass('active');
					$(this).next('.first-level').slideToggle();
				}
			}
		});

	})(jQuery);
	
	
	/*!
	 * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
	 * Copyright 2011-2024 The Bootstrap Authors
	 * Licensed under the Creative Commons Attribution 3.0 Unported License.
	 */
	
	(() => {
		'use strict'
	
		const getStoredTheme = () => localStorage.getItem('theme')
		const setStoredTheme = theme => localStorage.setItem('theme', theme)
	
		const getPreferredTheme = () => {
			const storedTheme = getStoredTheme()
			if (storedTheme) {
				return storedTheme
			}
	
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}
	
		const setTheme = theme => {
			if (theme === 'auto') {
				document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}
	
		setTheme(getPreferredTheme())
	
		const showActiveTheme = (theme, focus = false) => {
			const themeSwitcher = document.querySelector('#bd-theme')
	
			if (!themeSwitcher) {
				return
			}
	
			const themeSwitcherText = document.querySelector('#bd-theme-text')
			const activeThemeIcon = document.querySelector('.theme-icon-active use')
			const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
			const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')
	
			document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
				element.classList.remove('active')
				element.setAttribute('aria-pressed', 'false')
			})
	
			btnToActive.classList.add('active')
			btnToActive.setAttribute('aria-pressed', 'true')
			activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
			themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)
	
			if (focus) {
				themeSwitcher.focus()
			}
		}
	
		window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
			const storedTheme = getStoredTheme()
			if (storedTheme !== 'light' && storedTheme !== 'dark') {
				setTheme(getPreferredTheme())
			}
		})
	
		window.addEventListener('DOMContentLoaded', () => {
			showActiveTheme(getPreferredTheme())
	
			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						setStoredTheme(theme)
						setTheme(theme)
						showActiveTheme(theme, true)
					})
				})
		})
	})()
	
