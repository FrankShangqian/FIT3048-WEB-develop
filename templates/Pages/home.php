<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
	$error = null;
	$connected = false;
	try {
		$connection = ConnectionManager::get($name);
		$connected = $connection->connect();
	} catch (Exception $connectionError) {
		$error = $connectionError->getMessage();
		if (method_exists($connectionError, 'getAttributes')) {
			$attributes = $connectionError->getAttributes();
			if (isset($attributes['message'])) {
				$error .= '<br />' . $attributes['message'];
			}
		}
	}
	return compact('connected', 'error');
};


if (!Configure::read('debug')) :
	throw new NotFoundException(
		'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
	);
endif;


?>
<!doctype html>
<html dir="ltr" lang="en-US" prefix="og: https://ogp.me/ns#">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- All in One SEO 4.2.7.1 - aioseo.com -->
	<meta name="description" content="SHORT TERM | LONG TERM ACCOMMODATION A stress-free relocation journey There are overwhelming number of ways to find your next accommodation. We believe relocating to new home should be easy and worry-free. We bring relocation journey to life through expertise of local experts to find the housing arrangement which suits your need.Our consultation is free" />
	<meta name="robots" content="max-image-preview:large" />
	<link rel="canonical" href="https://www.monoapartments.com/" />
	<meta name="generator" content="All in One SEO (AIOSEO) 4.2.7.1 " />
	<meta property="og:locale" content="en_US" />
	<meta property="og:site_name" content="Stay as you want | Long term &amp; Short Stay Accommodation - More Than Just a Stay" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Home - Stay as you want | Long term &amp; Short Stay Accommodation" />
	<meta property="og:description" content="SHORT TERM | LONG TERM ACCOMMODATION A stress-free relocation journey There are overwhelming number of ways to find your next accommodation. We believe relocating to new home should be easy and worry-free. We bring relocation journey to life through expertise of local experts to find the housing arrangement which suits your need.Our consultation is free" />
	<meta property="og:url" content="https://www.monoapartments.com/" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Home - Stay as you want | Long term &amp; Short Stay Accommodation" />
	<meta name="twitter:description" content="SHORT TERM | LONG TERM ACCOMMODATION A stress-free relocation journey There are overwhelming number of ways to find your next accommodation. We believe relocating to new home should be easy and worry-free. We bring relocation journey to life through expertise of local experts to find the housing arrangement which suits your need.Our consultation is free" />
	<script type="application/ld+json" class="aioseo-schema">
		{
			"@context": "https:\/\/schema.org",
			"@graph": [{
				"@type": "BreadcrumbList",
				"@id": "https:\/\/www.monoapartments.com\/#breadcrumblist",
				"itemListElement": [{
					"@type": "ListItem",
					"@id": "https:\/\/www.monoapartments.com\/#listItem",
					"position": 1,
					"item": {
						"@type": "WebPage",
						"@id": "https:\/\/www.monoapartments.com\/",
						"name": "Home",
						"description": "SHORT TERM | LONG TERM ACCOMMODATION A stress-free relocation journey There are overwhelming number of ways to find your next accommodation. We believe relocating to new home should be easy and worry-free. We bring relocation journey to life through expertise of local experts to find the housing arrangement which suits your need.Our consultation is free",
						"url": "https:\/\/www.monoapartments.com\/"
					},
					"nextItem": "https:\/\/www.monoapartments.com\/#listItem"
				}, {
					"@type": "ListItem",
					"@id": "https:\/\/www.monoapartments.com\/#listItem",
					"position": 2,
					"item": {
						"@type": "WebPage",
						"@id": "https:\/\/www.monoapartments.com\/",
						"name": "Home",
						"description": "SHORT TERM | LONG TERM ACCOMMODATION A stress-free relocation journey There are overwhelming number of ways to find your next accommodation. We believe relocating to new home should be easy and worry-free. We bring relocation journey to life through expertise of local experts to find the housing arrangement which suits your need.Our consultation is free",
						"url": "https:\/\/www.monoapartments.com\/"
					},
					"previousItem": "https:\/\/www.monoapartments.com\/#listItem"
				}]
			}, {
				"@type": "Organization",
				"@id": "https:\/\/www.monoapartments.com\/#organization",
				"name": "Stay as you want | Long term & Short Stay Accommodation",
				"url": "https:\/\/www.monoapartments.com\/"
			}, {
				"@type": "WebPage",
				"@id": "https:\/\/www.monoapartments.com\/#webpage",
				"url": "https:\/\/www.monoapartments.com\/",
				"name": "Home - Stay as you want | Long term & Short Stay Accommodation",
				"description": "SHORT TERM | LONG TERM ACCOMMODATION A stress-free relocation journey There are overwhelming number of ways to find your next accommodation. We believe relocating to new home should be easy and worry-free. We bring relocation journey to life through expertise of local experts to find the housing arrangement which suits your need.Our consultation is free",
				"inLanguage": "en-US",
				"isPartOf": {
					"@id": "https:\/\/www.monoapartments.com\/#website"
				},
				"breadcrumb": {
					"@id": "https:\/\/www.monoapartments.com\/#breadcrumblist"
				},
				"datePublished": "2020-08-09T06:09:44+00:00",
				"dateModified": "2022-08-11T15:18:29+00:00"
			}, {
				"@type": "WebSite",
				"@id": "https:\/\/www.monoapartments.com\/#website",
				"url": "https:\/\/www.monoapartments.com\/",
				"name": "Stay as you want | Long term & Short Stay Accommodation",
				"description": "More Than Just a Stay",
				"inLanguage": "en-US",
				"publisher": {
					"@id": "https:\/\/www.monoapartments.com\/#organization"
				},
				"potentialAction": {
					"@type": "SearchAction",
					"target": {
						"@type": "EntryPoint",
						"urlTemplate": "https:\/\/www.monoapartments.com\/?s={search_term_string}"
					},
					"query-input": "required name=search_term_string"
				}
			}]
		}
	</script>
	<!-- All in One SEO -->


	<!-- This site is optimized with the Yoast SEO plugin v17.8 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Home - Stay as you want | Long term &amp; Short Stay Accommodation</title>
	<link rel="canonical" href="https://www.monoapartments.com/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Home - Stay as you want | Long term &amp; Short Stay Accommodation" />
	<meta property="og:description" content="SHORT TERM | LONG TERM ACCOMMODATION A stress-free relocation journey There are overwhelming number of ways to find your next accommodation. We believe relocating to new home should be easy and worry-free. We bring relocation journey to life through expertise of local experts to find the housing arrangement which suits your need.Our consultation is free [&hellip;]" />
	<meta property="og:url" content="https://www.monoapartments.com/" />
	<meta property="og:site_name" content="Stay as you want | Long term &amp; Short Stay Accommodation" />
	<meta property="article:publisher" content="https://www.facebook.com/monoapartments/" />
	<meta property="article:modified_time" content="2022-08-11T15:18:29+00:00" />
	<meta property="og:image" content="https://www.monoapartments.com/wp-content/uploads/2021/09/image-39-1.jpg" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:label1" content="Est. reading time" />
	<meta name="twitter:data1" content="7 minutes" />
	<script type="application/ld+json" class="yoast-schema-graph">
		{
			"@context": "https://schema.org",
			"@graph": [{
				"@type": "Organization",
				"@id": "https://www.monoapartments.com/#organization",
				"name": "Modern Nomads Accommodation Services",
				"url": "https://www.monoapartments.com/",
				"sameAs": ["https://www.facebook.com/monoapartments/", "https://www.instagram.com/monoapartments/"],
				"logo": {
					"@type": "ImageObject",
					"@id": "https://www.monoapartments.com/#logo",
					"inLanguage": "en-US",
					"url": "https://www.monoapartments.com/wp-content/uploads/2015/04/Mono_Logo-03-19-19-e1456285064136.png",
					"contentUrl": "https://www.monoapartments.com/wp-content/uploads/2015/04/Mono_Logo-03-19-19-e1456285064136.png",
					"width": 200,
					"height": 156,
					"caption": "Modern Nomads Accommodation Services"
				},
				"image": {
					"@id": "https://www.monoapartments.com/#logo"
				}
			}, {
				"@type": "WebSite",
				"@id": "https://www.monoapartments.com/#website",
				"url": "https://www.monoapartments.com/",
				"name": "Stay as you want | Long term &amp; Short Stay Accommodation",
				"description": "More Than Just a Stay",
				"publisher": {
					"@id": "https://www.monoapartments.com/#organization"
				},
				"potentialAction": [{
					"@type": "SearchAction",
					"target": {
						"@type": "EntryPoint",
						"urlTemplate": "https://www.monoapartments.com/?s={search_term_string}"
					},
					"query-input": "required name=search_term_string"
				}],
				"inLanguage": "en-US"
			}, {
				"@type": "ImageObject",
				"@id": "https://www.monoapartments.com/#primaryimage",
				"inLanguage": "en-US",
				"url": "https://www.monoapartments.com/wp-content/uploads/2021/09/image-39-1.jpg",
				"contentUrl": "https://www.monoapartments.com/wp-content/uploads/2021/09/image-39-1.jpg",
				"width": 700,
				"height": 500
			}, {
				"@type": "WebPage",
				"@id": "https://www.monoapartments.com/#webpage",
				"url": "https://www.monoapartments.com/",
				"name": "Home - Stay as you want | Long term &amp; Short Stay Accommodation",
				"isPartOf": {
					"@id": "https://www.monoapartments.com/#website"
				},
				"about": {
					"@id": "https://www.monoapartments.com/#organization"
				},
				"primaryImageOfPage": {
					"@id": "https://www.monoapartments.com/#primaryimage"
				},
				"datePublished": "2020-08-09T06:09:44+00:00",
				"dateModified": "2022-08-11T15:18:29+00:00",
				"breadcrumb": {
					"@id": "https://www.monoapartments.com/#breadcrumb"
				},
				"inLanguage": "en-US",
				"potentialAction": [{
					"@type": "ReadAction",
					"target": ["https://www.monoapartments.com/"]
				}]
			}, {
				"@type": "BreadcrumbList",
				"@id": "https://www.monoapartments.com/#breadcrumb",
				"itemListElement": [{
					"@type": "ListItem",
					"position": 1,
					"name": "Home"
				}]
			}]
		}
	</script>
	<!-- / Yoast SEO plugin. -->


	<link rel="alternate" type="application/rss+xml" title="Stay as you want | Long term &amp; Short Stay Accommodation &raquo; Feed" href="https://www.monoapartments.com/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Stay as you want | Long term &amp; Short Stay Accommodation &raquo; Comments Feed" href="https://www.monoapartments.com/comments/feed/" />
	<!-- This site uses the Google Analytics by MonsterInsights plugin v8.12.1 - Using Analytics tracking - https://www.monsterinsights.com/ -->
	<script src="//www.googletagmanager.com/gtag/js?id=G-BWN5SD6LX9" data-cfasync="false" data-wpfc-render="false" type="text/javascript" async></script>
	<script data-cfasync="false" data-wpfc-render="false" type="text/javascript">
		var mi_version = '8.12.1';
		var mi_track_user = true;
		var mi_no_track_reason = '';

		var disableStrs = [
			'ga-disable-G-BWN5SD6LX9',
		];

		/* Function to detect opted out user */
		function __gtagTrackerIsOptedOut() {
			for (var index = 0; index < disableStrs.length; index++) {
				if (document.cookie.indexOf(disableStrs[index] + '=true') > -1) {
					return true;
				}
			}

			return false;
		}

		/* Disable tracking if the opt-out cookie exists. */
		if (__gtagTrackerIsOptedOut()) {
			for (var index = 0; index < disableStrs.length; index++) {
				window[disableStrs[index]] = true;
			}
		}

		/* Opt-out function */
		function __gtagTrackerOptout() {
			for (var index = 0; index < disableStrs.length; index++) {
				document.cookie = disableStrs[index] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
				window[disableStrs[index]] = true;
			}
		}

		if ('undefined' === typeof gaOptout) {
			function gaOptout() {
				__gtagTrackerOptout();
			}
		}
		window.dataLayer = window.dataLayer || [];

		window.MonsterInsightsDualTracker = {
			helpers: {},
			trackers: {},
		};
		if (mi_track_user) {
			function __gtagDataLayer() {
				dataLayer.push(arguments);
			}

			function __gtagTracker(type, name, parameters) {
				if (!parameters) {
					parameters = {};
				}

				if (parameters.send_to) {
					__gtagDataLayer.apply(null, arguments);
					return;
				}

				if (type === 'event') {
					parameters.send_to = monsterinsights_frontend.v4_id;
					var hookName = name;
					if (typeof parameters['event_category'] !== 'undefined') {
						hookName = parameters['event_category'] + ':' + name;
					}

					if (typeof MonsterInsightsDualTracker.trackers[hookName] !== 'undefined') {
						MonsterInsightsDualTracker.trackers[hookName](parameters);
					} else {
						__gtagDataLayer('event', name, parameters);
					}

				} else {
					__gtagDataLayer.apply(null, arguments);
				}
			}

			__gtagTracker('js', new Date());
			__gtagTracker('set', {
				'developer_id.dZGIzZG': true,
			});
			__gtagTracker('config', 'G-BWN5SD6LX9', {
				"forceSSL": "true",
				"link_attribution": "true"
			});
			window.gtag = __gtagTracker;
			(function() {
				/* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
				/* ga and __gaTracker compatibility shim. */
				var noopfn = function() {
					return null;
				};
				var newtracker = function() {
					return new Tracker();
				};
				var Tracker = function() {
					return null;
				};
				var p = Tracker.prototype;
				p.get = noopfn;
				p.set = noopfn;
				p.send = function() {
					var args = Array.prototype.slice.call(arguments);
					args.unshift('send');
					__gaTracker.apply(null, args);
				};
				var __gaTracker = function() {
					var len = arguments.length;
					if (len === 0) {
						return;
					}
					var f = arguments[len - 1];
					if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
						if ('send' === arguments[0]) {
							var hitConverted, hitObject = false,
								action;
							if ('event' === arguments[1]) {
								if ('undefined' !== typeof arguments[3]) {
									hitObject = {
										'eventAction': arguments[3],
										'eventCategory': arguments[2],
										'eventLabel': arguments[4],
										'value': arguments[5] ? arguments[5] : 1,
									}
								}
							}
							if ('pageview' === arguments[1]) {
								if ('undefined' !== typeof arguments[2]) {
									hitObject = {
										'eventAction': 'page_view',
										'page_path': arguments[2],
									}
								}
							}
							if (typeof arguments[2] === 'object') {
								hitObject = arguments[2];
							}
							if (typeof arguments[5] === 'object') {
								Object.assign(hitObject, arguments[5]);
							}
							if ('undefined' !== typeof arguments[1].hitType) {
								hitObject = arguments[1];
								if ('pageview' === hitObject.hitType) {
									hitObject.eventAction = 'page_view';
								}
							}
							if (hitObject) {
								action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
								hitConverted = mapArgs(hitObject);
								__gtagTracker('event', action, hitConverted);
							}
						}
						return;
					}

					function mapArgs(args) {
						var arg, hit = {};
						var gaMap = {
							'eventCategory': 'event_category',
							'eventAction': 'event_action',
							'eventLabel': 'event_label',
							'eventValue': 'event_value',
							'nonInteraction': 'non_interaction',
							'timingCategory': 'event_category',
							'timingVar': 'name',
							'timingValue': 'value',
							'timingLabel': 'event_label',
							'page': 'page_path',
							'location': 'page_location',
							'title': 'page_title',
						};
						for (arg in args) {
							if (!(!args.hasOwnProperty(arg) || !gaMap.hasOwnProperty(arg))) {
								hit[gaMap[arg]] = args[arg];
							} else {
								hit[arg] = args[arg];
							}
						}
						return hit;
					}

					try {
						f.hitCallback();
					} catch (ex) {}
				};
				__gaTracker.create = newtracker;
				__gaTracker.getByName = newtracker;
				__gaTracker.getAll = function() {
					return [];
				};
				__gaTracker.remove = noopfn;
				__gaTracker.loaded = true;
				window['__gaTracker'] = __gaTracker;
			})();
		} else {
			console.log("");
			(function() {
				function __gtagTracker() {
					return null;
				}

				window['__gtagTracker'] = __gtagTracker;
				window['gtag'] = __gtagTracker;
			})();
		}
	</script>
	<!-- / Google Analytics by MonsterInsights -->
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css' href='https://www.monoapartments.com/wp-includes/css/dist/block-library/style.min.css?ver=6.1.1' type='text/css' media='all' />
	<link rel='stylesheet' id='classic-theme-styles-css' href='https://www.monoapartments.com/wp-includes/css/classic-themes.min.css?ver=1' type='text/css' media='all' />
	<style id='global-styles-inline-css' type='text/css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		body .is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		body .is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		body .is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		body .is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		body .is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		body .is-layout-flex>* {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		.wp-block-navigation a:where(:not(.wp-element-button)) {
			color: inherit;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='hello-elementor-css' href='https://www.monoapartments.com/wp-content/themes/hello-elementor/style.min.css?ver=2.4.1' type='text/css' media='all' />
	<link rel='stylesheet' id='hello-elementor-theme-style-css' href='https://www.monoapartments.com/wp-content/themes/hello-elementor/theme.min.css?ver=2.4.1' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-css' href='https://www.monoapartments.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.15.0' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='https://www.monoapartments.com/wp-content/uploads/elementor/css/custom-frontend-lite.min.css?ver=1655105216' type='text/css' media='all' />
	<style id='elementor-frontend-inline-css' type='text/css'>
		.elementor-kit-2620 {
			--e-global-color-primary: #6EC1E4;
			--e-global-color-secondary: #54595F;
			--e-global-color-text: #7A7A7A;
			--e-global-color-accent: #61CE70;
			--e-global-color-41fc470: #131518;
			--e-global-color-bde2d82: #9F8A6A;
			--e-global-color-35f0e55: #E5E5E5;
			--e-global-color-77210b0: #EEEAE6;
			--e-global-color-1057776: #A38365;
			--e-global-typography-primary-font-family: "DIN";
			--e-global-typography-primary-font-size: 18px;
			--e-global-typography-primary-font-weight: 700;
			--e-global-typography-secondary-font-family: "DIN";
			--e-global-typography-secondary-font-size: 14px;
			--e-global-typography-secondary-font-weight: 400;
			--e-global-typography-text-font-family: "DIN";
			--e-global-typography-text-font-weight: 400;
			--e-global-typography-accent-font-family: "Roboto";
			--e-global-typography-accent-font-weight: 500;
			background-color: var(--e-global-color-77210b0);
		}

		.elementor-section.elementor-section-boxed>.elementor-container {
			max-width: 1240px;
		}

		.e-container {
			--container-max-width: 1240px;
		}

		.elementor-widget:not(:last-child) {
			margin-bottom: 10px;
		}

		.elementor-element {
			--widgets-spacing: 10px;
		}

			{}

		h1.entry-title {
			display: var(--page-title-display);
		}

		.site-header {
			padding-right: 0px;
			padding-left: 0px;
		}

		@media(max-width:1024px) {
			.elementor-section.elementor-section-boxed>.elementor-container {
				max-width: 1024px;
			}

			.e-container {
				--container-max-width: 1024px;
			}
		}

		@media(max-width:767px) {
			.elementor-section.elementor-section-boxed>.elementor-container {
				max-width: 767px;
			}

			.e-container {
				--container-max-width: 767px;
			}
		}

		/* Start Custom Fonts CSS */
		@font-face {
			font-family: 'DIN';
			font-style: normal;
			font-weight: normal;
			font-display: auto;
			src: url('https://www.monoapartments.com/wp-content/uploads/2021/09/DINNextLTPro-Regular.ttf') format('truetype');
		}

		@font-face {
			font-family: 'DIN';
			font-style: normal;
			font-weight: 700;
			font-display: auto;
			src: url('https://www.monoapartments.com/wp-content/uploads/2021/09/DINNextLTPro-Bold.ttf') format('truetype');
		}

		/* End Custom Fonts CSS */
		.elementor-widget-heading .elementor-heading-title {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-image .widget-image-caption {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-text-editor {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
			background-color: var(--e-global-color-primary);
		}

		.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap,
		.elementor-widget-text-editor.elementor-drop-cap-view-default .elementor-drop-cap {
			color: var(--e-global-color-primary);
			border-color: var(--e-global-color-primary);
		}

		.elementor-widget-button .elementor-button {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
			background-color: var(--e-global-color-accent);
		}

		.elementor-widget-divider {
			--divider-color: var(--e-global-color-secondary);
		}

		.elementor-widget-divider .elementor-divider__text {
			color: var(--e-global-color-secondary);
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-divider.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-secondary);
		}

		.elementor-widget-divider.elementor-view-framed .elementor-icon,
		.elementor-widget-divider.elementor-view-default .elementor-icon {
			color: var(--e-global-color-secondary);
			border-color: var(--e-global-color-secondary);
		}

		.elementor-widget-divider.elementor-view-framed .elementor-icon,
		.elementor-widget-divider.elementor-view-default .elementor-icon svg {
			fill: var(--e-global-color-secondary);
		}

		.elementor-widget-image-box .elementor-image-box-title {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-image-box .elementor-image-box-description {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-icon.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-primary);
		}

		.elementor-widget-icon.elementor-view-framed .elementor-icon,
		.elementor-widget-icon.elementor-view-default .elementor-icon {
			color: var(--e-global-color-primary);
			border-color: var(--e-global-color-primary);
		}

		.elementor-widget-icon.elementor-view-framed .elementor-icon,
		.elementor-widget-icon.elementor-view-default .elementor-icon svg {
			fill: var(--e-global-color-primary);
		}

		.elementor-widget-icon-box.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-primary);
		}

		.elementor-widget-icon-box.elementor-view-framed .elementor-icon,
		.elementor-widget-icon-box.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-primary);
			color: var(--e-global-color-primary);
			border-color: var(--e-global-color-primary);
		}

		.elementor-widget-icon-box .elementor-icon-box-title {
			color: var(--e-global-color-primary);
		}

		.elementor-widget-icon-box .elementor-icon-box-title,
		.elementor-widget-icon-box .elementor-icon-box-title a {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-icon-box .elementor-icon-box-description {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-star-rating .elementor-star-rating__title {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-image-gallery .gallery-item .gallery-caption {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-icon-list .elementor-icon-list-item:not(:last-child):after {
			border-color: var(--e-global-color-text);
		}

		.elementor-widget-icon-list .elementor-icon-list-icon i {
			color: var(--e-global-color-primary);
		}

		.elementor-widget-icon-list .elementor-icon-list-icon svg {
			fill: var(--e-global-color-primary);
		}

		.elementor-widget-icon-list .elementor-icon-list-text {
			color: var(--e-global-color-secondary);
		}

		.elementor-widget-icon-list .elementor-icon-list-item>.elementor-icon-list-text,
		.elementor-widget-icon-list .elementor-icon-list-item>a {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-counter .elementor-counter-number-wrapper {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-counter .elementor-counter-title {
			color: var(--e-global-color-secondary);
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-progress .elementor-progress-wrapper .elementor-progress-bar {
			background-color: var(--e-global-color-primary);
		}

		.elementor-widget-progress .elementor-title {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-testimonial .elementor-testimonial-content {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-testimonial .elementor-testimonial-name {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-testimonial .elementor-testimonial-job {
			color: var(--e-global-color-secondary);
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-tabs .elementor-tab-title,
		.elementor-widget-tabs .elementor-tab-title a {
			color: var(--e-global-color-primary);
		}

		.elementor-widget-tabs .elementor-tab-title.elementor-active,
		.elementor-widget-tabs .elementor-tab-title.elementor-active a {
			color: var(--e-global-color-accent);
		}

		.elementor-widget-tabs .elementor-tab-title {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-tabs .elementor-tab-content {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-accordion .elementor-accordion-icon,
		.elementor-widget-accordion .elementor-accordion-title {
			color: var(--e-global-color-primary);
		}

		.elementor-widget-accordion .elementor-accordion-icon svg {
			fill: var(--e-global-color-primary);
		}

		.elementor-widget-accordion .elementor-active .elementor-accordion-icon,
		.elementor-widget-accordion .elementor-active .elementor-accordion-title {
			color: var(--e-global-color-accent);
		}

		.elementor-widget-accordion .elementor-active .elementor-accordion-icon svg {
			fill: var(--e-global-color-accent);
		}

		.elementor-widget-accordion .elementor-accordion-title {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-accordion .elementor-tab-content {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-toggle .elementor-toggle-title,
		.elementor-widget-toggle .elementor-toggle-icon {
			color: var(--e-global-color-primary);
		}

		.elementor-widget-toggle .elementor-toggle-icon svg {
			fill: var(--e-global-color-primary);
		}

		.elementor-widget-toggle .elementor-tab-title.elementor-active a,
		.elementor-widget-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon {
			color: var(--e-global-color-accent);
		}

		.elementor-widget-toggle .elementor-toggle-title {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-toggle .elementor-tab-content {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-alert .elementor-alert-title {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-alert .elementor-alert-description {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-text-path {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-theme-site-logo .widget-image-caption {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-theme-site-title .elementor-heading-title {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-theme-page-title .elementor-heading-title {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-theme-post-title .elementor-heading-title {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-theme-post-excerpt .elementor-widget-container {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-theme-post-content {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-theme-post-featured-image .widget-image-caption {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-theme-archive-title .elementor-heading-title {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-archive-posts .elementor-post__title,
		.elementor-widget-archive-posts .elementor-post__title a {
			color: var(--e-global-color-secondary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-archive-posts .elementor-post__meta-data {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-archive-posts .elementor-post__excerpt p {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-archive-posts .elementor-post__read-more {
			color: var(--e-global-color-accent);
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-archive-posts .elementor-post__card .elementor-post__badge {
			background-color: var(--e-global-color-accent);
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-archive-posts .elementor-pagination {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-archive-posts .elementor-button {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
			background-color: var(--e-global-color-accent);
		}

		.elementor-widget-archive-posts .e-load-more-message {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-archive-posts .elementor-posts-nothing-found {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-posts .elementor-post__title,
		.elementor-widget-posts .elementor-post__title a {
			color: var(--e-global-color-secondary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-posts .elementor-post__meta-data {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-posts .elementor-post__excerpt p {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-posts .elementor-post__read-more {
			color: var(--e-global-color-accent);
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-posts .elementor-post__card .elementor-post__badge {
			background-color: var(--e-global-color-accent);
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-posts .elementor-pagination {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-posts .elementor-button {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
			background-color: var(--e-global-color-accent);
		}

		.elementor-widget-posts .e-load-more-message {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-portfolio a .elementor-portfolio-item__overlay {
			background-color: var(--e-global-color-accent);
		}

		.elementor-widget-portfolio .elementor-portfolio-item__title {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-portfolio .elementor-portfolio__filter {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-portfolio .elementor-portfolio__filter.elementor-active {
			color: var(--e-global-color-primary);
		}

		.elementor-widget-gallery .elementor-gallery-item__title {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-gallery .elementor-gallery-item__description {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-gallery {
			--galleries-title-color-normal: var(--e-global-color-primary);
			--galleries-title-color-hover: var(--e-global-color-secondary);
			--galleries-pointer-bg-color-hover: var(--e-global-color-accent);
			--gallery-title-color-active: var(--e-global-color-secondary);
			--galleries-pointer-bg-color-active: var(--e-global-color-accent);
		}

		.elementor-widget-gallery .elementor-gallery-title {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-form .elementor-field-group>label,
		.elementor-widget-form .elementor-field-subgroup label {
			color: var(--e-global-color-text);
		}

		.elementor-widget-form .elementor-field-group>label {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-form .elementor-field-type-html {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-form .elementor-field-group .elementor-field {
			color: var(--e-global-color-text);
		}

		.elementor-widget-form .elementor-field-group .elementor-field,
		.elementor-widget-form .elementor-field-subgroup label {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-form .elementor-button {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-form .e-form__buttons__wrapper__button-next {
			background-color: var(--e-global-color-accent);
		}

		.elementor-widget-form .elementor-button[type="submit"] {
			background-color: var(--e-global-color-accent);
		}

		.elementor-widget-form .e-form__buttons__wrapper__button-previous {
			background-color: var(--e-global-color-accent);
		}

		.elementor-widget-form .elementor-message {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-form .e-form__indicators__indicator,
		.elementor-widget-form .e-form__indicators__indicator__label {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-form {
			--e-form-steps-indicator-inactive-primary-color: var(--e-global-color-text);
			--e-form-steps-indicator-active-primary-color: var(--e-global-color-accent);
			--e-form-steps-indicator-completed-primary-color: var(--e-global-color-accent);
			--e-form-steps-indicator-progress-color: var(--e-global-color-accent);
			--e-form-steps-indicator-progress-background-color: var(--e-global-color-text);
			--e-form-steps-indicator-progress-meter-color: var(--e-global-color-text);
		}

		.elementor-widget-form .e-form__indicators__indicator__progress__meter {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-login .elementor-field-group>a {
			color: var(--e-global-color-text);
		}

		.elementor-widget-login .elementor-field-group>a:hover {
			color: var(--e-global-color-accent);
		}

		.elementor-widget-login .elementor-form-fields-wrapper label {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-login .elementor-field-group .elementor-field {
			color: var(--e-global-color-text);
		}

		.elementor-widget-login .elementor-field-group .elementor-field,
		.elementor-widget-login .elementor-field-subgroup label {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-login .elementor-button {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
			background-color: var(--e-global-color-accent);
		}

		.elementor-widget-login .elementor-widget-container .elementor-login__logged-in-message {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-slides .elementor-slide-heading {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-slides .elementor-slide-description {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-slides .elementor-slide-button {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-nav-menu .elementor-nav-menu .elementor-item {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item {
			color: var(--e-global-color-text);
			fill: var(--e-global-color-text);
		}

		.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:hover,
		.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item.elementor-item-active,
		.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item.highlighted,
		.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:focus {
			color: var(--e-global-color-accent);
			fill: var(--e-global-color-accent);
		}

		.elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before,
		.elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after {
			background-color: var(--e-global-color-accent);
		}

		.elementor-widget-nav-menu .e--pointer-framed .elementor-item:before,
		.elementor-widget-nav-menu .e--pointer-framed .elementor-item:after {
			border-color: var(--e-global-color-accent);
		}

		.elementor-widget-nav-menu {
			--e-nav-menu-divider-color: var(--e-global-color-text);
		}

		.elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-item,
		.elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-sub-item {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-animated-headline .elementor-headline-dynamic-wrapper path {
			stroke: var(--e-global-color-accent);
		}

		.elementor-widget-animated-headline .elementor-headline-plain-text {
			color: var(--e-global-color-secondary);
		}

		.elementor-widget-animated-headline .elementor-headline {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-animated-headline {
			--dynamic-text-color: var(--e-global-color-secondary);
		}

		.elementor-widget-animated-headline .elementor-headline-dynamic-text {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-hotspot .widget-image-caption {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-hotspot {
			--hotspot-color: var(--e-global-color-primary);
			--hotspot-box-color: var(--e-global-color-secondary);
			--tooltip-color: var(--e-global-color-secondary);
		}

		.elementor-widget-hotspot .e-hotspot__label {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-hotspot .e-hotspot__tooltip {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-price-list .elementor-price-list-header {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-price-list .elementor-price-list-price {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-price-list .elementor-price-list-description {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-price-list .elementor-price-list-separator {
			border-bottom-color: var(--e-global-color-secondary);
		}

		.elementor-widget-price-table {
			--e-price-table-header-background-color: var(--e-global-color-secondary);
		}

		.elementor-widget-price-table .elementor-price-table__heading {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-price-table .elementor-price-table__subheading {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-price-table .elementor-price-table .elementor-price-table__price {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-price-table .elementor-price-table__original-price {
			color: var(--e-global-color-secondary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-price-table .elementor-price-table__period {
			color: var(--e-global-color-secondary);
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-price-table .elementor-price-table__features-list {
			--e-price-table-features-list-color: var(--e-global-color-text);
		}

		.elementor-widget-price-table .elementor-price-table__features-list li {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-price-table .elementor-price-table__features-list li:before {
			border-top-color: var(--e-global-color-text);
		}

		.elementor-widget-price-table .elementor-price-table__button {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
			background-color: var(--e-global-color-accent);
		}

		.elementor-widget-price-table .elementor-price-table__additional_info {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-price-table .elementor-price-table__ribbon-inner {
			background-color: var(--e-global-color-accent);
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-flip-box .elementor-flip-box__front .elementor-flip-box__layer__title {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-flip-box .elementor-flip-box__front .elementor-flip-box__layer__description {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-flip-box .elementor-flip-box__back .elementor-flip-box__layer__title {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-flip-box .elementor-flip-box__back .elementor-flip-box__layer__description {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-flip-box .elementor-flip-box__button {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-call-to-action .elementor-cta__title {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-call-to-action .elementor-cta__description {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-call-to-action .elementor-cta__button {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-call-to-action .elementor-ribbon-inner {
			background-color: var(--e-global-color-accent);
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-media-carousel .elementor-carousel-image-overlay {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-testimonial-carousel .elementor-testimonial__text {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-testimonial-carousel .elementor-testimonial__name {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-testimonial-carousel .elementor-testimonial__title {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-reviews .elementor-testimonial__header,
		.elementor-widget-reviews .elementor-testimonial__name {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-reviews .elementor-testimonial__text {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-table-of-contents {
			--header-color: var(--e-global-color-secondary);
			--item-text-color: var(--e-global-color-text);
			--item-text-hover-color: var(--e-global-color-accent);
			--marker-color: var(--e-global-color-text);
		}

		.elementor-widget-table-of-contents .elementor-toc__header,
		.elementor-widget-table-of-contents .elementor-toc__header-title {
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-table-of-contents .elementor-toc__list-item {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-countdown .elementor-countdown-item {
			background-color: var(--e-global-color-primary);
		}

		.elementor-widget-countdown .elementor-countdown-digits {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-countdown .elementor-countdown-label {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-countdown .elementor-countdown-expire--message {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-search-form input[type="search"].elementor-search-form__input {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-search-form .elementor-search-form__input,
		.elementor-widget-search-form .elementor-search-form__icon,
		.elementor-widget-search-form .elementor-lightbox .dialog-lightbox-close-button,
		.elementor-widget-search-form .elementor-lightbox .dialog-lightbox-close-button:hover,
		.elementor-widget-search-form.elementor-search-form--skin-full_screen input[type="search"].elementor-search-form__input {
			color: var(--e-global-color-text);
			fill: var(--e-global-color-text);
		}

		.elementor-widget-search-form .elementor-search-form__submit {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
			background-color: var(--e-global-color-secondary);
		}

		.elementor-widget-author-box .elementor-author-box__name {
			color: var(--e-global-color-secondary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-author-box .elementor-author-box__bio {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-author-box .elementor-author-box__button {
			color: var(--e-global-color-secondary);
			border-color: var(--e-global-color-secondary);
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-author-box .elementor-author-box__button:hover {
			border-color: var(--e-global-color-secondary);
			color: var(--e-global-color-secondary);
		}

		.elementor-widget-post-navigation span.post-navigation__prev--label {
			color: var(--e-global-color-text);
		}

		.elementor-widget-post-navigation span.post-navigation__next--label {
			color: var(--e-global-color-text);
		}

		.elementor-widget-post-navigation span.post-navigation__prev--label,
		.elementor-widget-post-navigation span.post-navigation__next--label {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-post-navigation span.post-navigation__prev--title,
		.elementor-widget-post-navigation span.post-navigation__next--title {
			color: var(--e-global-color-secondary);
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-post-info .elementor-icon-list-item:not(:last-child):after {
			border-color: var(--e-global-color-text);
		}

		.elementor-widget-post-info .elementor-icon-list-icon i {
			color: var(--e-global-color-primary);
		}

		.elementor-widget-post-info .elementor-icon-list-icon svg {
			fill: var(--e-global-color-primary);
		}

		.elementor-widget-post-info .elementor-icon-list-text,
		.elementor-widget-post-info .elementor-icon-list-text a {
			color: var(--e-global-color-secondary);
		}

		.elementor-widget-post-info .elementor-icon-list-item {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-sitemap .elementor-sitemap-title {
			color: var(--e-global-color-primary);
			font-family: var(--e-global-typography-primary-font-family), Sans-serif;
			font-size: var(--e-global-typography-primary-font-size);
			font-weight: var(--e-global-typography-primary-font-weight);
		}

		.elementor-widget-sitemap .elementor-sitemap-item,
		.elementor-widget-sitemap span.elementor-sitemap-list,
		.elementor-widget-sitemap .elementor-sitemap-item a {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-sitemap .elementor-sitemap-item {
			color: var(--e-global-color-text);
		}

		.elementor-widget-breadcrumbs {
			font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
			font-size: var(--e-global-typography-secondary-font-size);
			font-weight: var(--e-global-typography-secondary-font-weight);
		}

		.elementor-widget-blockquote .elementor-blockquote__content {
			color: var(--e-global-color-text);
		}

		.elementor-widget-blockquote .elementor-blockquote__author {
			color: var(--e-global-color-secondary);
		}

		.elementor-widget-lottie {
			--caption-color: var(--e-global-color-text);
		}

		.elementor-widget-lottie .e-lottie__caption {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-video-playlist .e-tabs-header .e-tabs-title {
			color: var(--e-global-color-text);
		}

		.elementor-widget-video-playlist .e-tabs-header .e-tabs-videos-count {
			color: var(--e-global-color-text);
		}

		.elementor-widget-video-playlist .e-tabs-header .e-tabs-header-right-side i {
			color: var(--e-global-color-text);
		}

		.elementor-widget-video-playlist .e-tabs-header .e-tabs-header-right-side svg {
			fill: var(--e-global-color-text);
		}

		.elementor-widget-video-playlist .e-tab-title .e-tab-title-text {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-video-playlist .e-tab-title .e-tab-title-text a {
			color: var(--e-global-color-text);
		}

		.elementor-widget-video-playlist .e-tab-title .e-tab-duration {
			color: var(--e-global-color-text);
		}

		.elementor-widget-video-playlist .e-tabs-items-wrapper .e-tab-title:where(.e-active, :hover) .e-tab-title-text {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-video-playlist .e-tabs-items-wrapper .e-tab-title:where(.e-active, :hover) .e-tab-title-text a {
			color: var(--e-global-color-text);
		}

		.elementor-widget-video-playlist .e-tabs-items-wrapper .e-tab-title:where(.e-active, :hover) .e-tab-duration {
			color: var(--e-global-color-text);
		}

		.elementor-widget-video-playlist .e-tabs-items-wrapper .e-section-title {
			color: var(--e-global-color-text);
		}

		.elementor-widget-video-playlist .e-tabs-inner-tabs .e-inner-tabs-wrapper .e-inner-tab-title a {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-video-playlist .e-tabs-inner-tabs .e-inner-tabs-content-wrapper .e-inner-tab-content .e-inner-tab-text {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-video-playlist .e-tabs-inner-tabs .e-inner-tabs-content-wrapper .e-inner-tab-content button {
			color: var(--e-global-color-text);
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
		}

		.elementor-widget-video-playlist .e-tabs-inner-tabs .e-inner-tabs-content-wrapper .e-inner-tab-content button:hover {
			color: var(--e-global-color-text);
		}

		.elementor-widget-paypal-button .elementor-button {
			font-family: var(--e-global-typography-accent-font-family), Sans-serif;
			font-weight: var(--e-global-typography-accent-font-weight);
			background-color: var(--e-global-color-accent);
		}

		.elementor-widget-paypal-button .elementor-message {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		.elementor-widget-progress-tracker .current-progress-percentage {
			font-family: var(--e-global-typography-text-font-family), Sans-serif;
			font-weight: var(--e-global-typography-text-font-weight);
		}

		@media(max-width:1024px) {
			.elementor-widget-heading .elementor-heading-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-divider .elementor-divider__text {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-image-box .elementor-image-box-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-icon-box .elementor-icon-box-title,
			.elementor-widget-icon-box .elementor-icon-box-title a {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-counter .elementor-counter-number-wrapper {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-counter .elementor-counter-title {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-testimonial .elementor-testimonial-name {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-testimonial .elementor-testimonial-job {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-tabs .elementor-tab-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-accordion .elementor-accordion-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-toggle .elementor-toggle-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-alert .elementor-alert-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-theme-site-title .elementor-heading-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-theme-page-title .elementor-heading-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-theme-post-title .elementor-heading-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-theme-archive-title .elementor-heading-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-archive-posts .elementor-post__title,
			.elementor-widget-archive-posts .elementor-post__title a {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-archive-posts .elementor-post__meta-data {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-archive-posts .elementor-pagination {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-archive-posts .e-load-more-message {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-posts .elementor-post__title,
			.elementor-widget-posts .elementor-post__title a {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-posts .elementor-post__meta-data {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-posts .elementor-pagination {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-posts .e-load-more-message {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-portfolio .elementor-portfolio-item__title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-portfolio .elementor-portfolio__filter {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-gallery .elementor-gallery-item__title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-gallery .elementor-gallery-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-slides .elementor-slide-heading {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-slides .elementor-slide-description {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-nav-menu .elementor-nav-menu .elementor-item {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-animated-headline .elementor-headline {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-hotspot .e-hotspot__label {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-hotspot .e-hotspot__tooltip {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-price-list .elementor-price-list-header {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-price-list .elementor-price-list-price {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-price-table .elementor-price-table__heading {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-price-table .elementor-price-table__subheading {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-price-table .elementor-price-table .elementor-price-table__price {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-price-table .elementor-price-table__original-price {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-price-table .elementor-price-table__period {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-flip-box .elementor-flip-box__front .elementor-flip-box__layer__title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-flip-box .elementor-flip-box__back .elementor-flip-box__layer__title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-call-to-action .elementor-cta__title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-testimonial-carousel .elementor-testimonial__name {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-testimonial-carousel .elementor-testimonial__title {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-reviews .elementor-testimonial__header,
			.elementor-widget-reviews .elementor-testimonial__name {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-table-of-contents .elementor-toc__header,
			.elementor-widget-table-of-contents .elementor-toc__header-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-countdown .elementor-countdown-label {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-author-box .elementor-author-box__name {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-post-navigation span.post-navigation__prev--label,
			.elementor-widget-post-navigation span.post-navigation__next--label {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-post-navigation span.post-navigation__prev--title,
			.elementor-widget-post-navigation span.post-navigation__next--title {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-sitemap .elementor-sitemap-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-breadcrumbs {
				font-size: var(--e-global-typography-secondary-font-size);
			}
		}

		@media(max-width:767px) {
			.elementor-widget-heading .elementor-heading-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-divider .elementor-divider__text {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-image-box .elementor-image-box-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-icon-box .elementor-icon-box-title,
			.elementor-widget-icon-box .elementor-icon-box-title a {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-counter .elementor-counter-number-wrapper {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-counter .elementor-counter-title {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-testimonial .elementor-testimonial-name {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-testimonial .elementor-testimonial-job {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-tabs .elementor-tab-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-accordion .elementor-accordion-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-toggle .elementor-toggle-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-alert .elementor-alert-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-theme-site-title .elementor-heading-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-theme-page-title .elementor-heading-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-theme-post-title .elementor-heading-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-theme-archive-title .elementor-heading-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-archive-posts .elementor-post__title,
			.elementor-widget-archive-posts .elementor-post__title a {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-archive-posts .elementor-post__meta-data {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-archive-posts .elementor-pagination {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-archive-posts .e-load-more-message {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-posts .elementor-post__title,
			.elementor-widget-posts .elementor-post__title a {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-posts .elementor-post__meta-data {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-posts .elementor-pagination {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-posts .e-load-more-message {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-portfolio .elementor-portfolio-item__title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-portfolio .elementor-portfolio__filter {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-gallery .elementor-gallery-item__title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-gallery .elementor-gallery-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-slides .elementor-slide-heading {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-slides .elementor-slide-description {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-nav-menu .elementor-nav-menu .elementor-item {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-animated-headline .elementor-headline {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-hotspot .e-hotspot__label {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-hotspot .e-hotspot__tooltip {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-price-list .elementor-price-list-header {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-price-list .elementor-price-list-price {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-price-table .elementor-price-table__heading {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-price-table .elementor-price-table__subheading {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-price-table .elementor-price-table .elementor-price-table__price {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-price-table .elementor-price-table__original-price {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-price-table .elementor-price-table__period {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-flip-box .elementor-flip-box__front .elementor-flip-box__layer__title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-flip-box .elementor-flip-box__back .elementor-flip-box__layer__title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-call-to-action .elementor-cta__title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-testimonial-carousel .elementor-testimonial__name {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-testimonial-carousel .elementor-testimonial__title {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-reviews .elementor-testimonial__header,
			.elementor-widget-reviews .elementor-testimonial__name {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-table-of-contents .elementor-toc__header,
			.elementor-widget-table-of-contents .elementor-toc__header-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-countdown .elementor-countdown-label {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-author-box .elementor-author-box__name {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-post-navigation span.post-navigation__prev--label,
			.elementor-widget-post-navigation span.post-navigation__next--label {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-post-navigation span.post-navigation__prev--title,
			.elementor-widget-post-navigation span.post-navigation__next--title {
				font-size: var(--e-global-typography-secondary-font-size);
			}

			.elementor-widget-sitemap .elementor-sitemap-title {
				font-size: var(--e-global-typography-primary-font-size);
			}

			.elementor-widget-breadcrumbs {
				font-size: var(--e-global-typography-secondary-font-size);
			}
		}

		.elementor-2580 .elementor-element.elementor-element-eed852b:not(.elementor-motion-effects-element-type-background),
		.elementor-2580 .elementor-element.elementor-element-eed852b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-image: url("https://www.staging10.monoapartments.com/wp-content/uploads/2021/09/image-3-1.jpg");
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.elementor-2580 .elementor-element.elementor-element-eed852b>.elementor-background-overlay {
			opacity: 0.49;
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-eed852b {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-7c3a40a>.elementor-element-populated {
			padding: 0px 0px 0px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-1005bd9>.elementor-container>.elementor-column>.elementor-widget-wrap {
			align-content: center;
			align-items: center;
		}

		.elementor-2580 .elementor-element.elementor-element-998d432>.elementor-element-populated>.elementor-background-overlay {
			opacity: 1;
			filter: brightness(0%) contrast(0%) saturate(101%) blur(4.4px) hue-rotate(217deg);
		}

		.elementor-2580 .elementor-element.elementor-element-998d432>.elementor-element-populated {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 0px 0px 0px 86px;
		}

		.elementor-2580 .elementor-element.elementor-element-998d432>.elementor-element-populated>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-36ca016 {
			text-align: left;
		}

		.elementor-2580 .elementor-element.elementor-element-36ca016 .elementor-heading-title {
			color: var(--e-global-color-bde2d82);
			font-family: "DIN", Sans-serif;
			font-size: 12px;
			font-weight: 700;
			line-height: 14px;
		}

		.elementor-2580 .elementor-element.elementor-element-36ca016>.elementor-widget-container {
			margin: 0px 0px 0px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-43e7410 {
			text-align: left;
		}

		.elementor-2580 .elementor-element.elementor-element-43e7410 .elementor-heading-title {
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 34px;
			font-weight: 700;
			line-height: 40px;
		}

		.elementor-2580 .elementor-element.elementor-element-43e7410>.elementor-widget-container {
			margin: 0px 0px 3px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-c27b974 {
			text-align: left;
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 14px;
			font-weight: 400;
			line-height: 23px;
			width: 488px;
			max-width: 488px;
		}

		.elementor-2580 .elementor-element.elementor-element-7878052 .elementor-spacer-inner {
			--spacer-size: 5px;
		}

		.elementor-2580 .elementor-element.elementor-element-6891993 .elementor-button {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 21px;
			fill: #A38365;
			color: #A38365;
			background-color: #FFFFFF00;
			border-style: solid;
			border-width: 2px 2px 2px 2px;
			border-color: var(--e-global-color-bde2d82);
			border-radius: 30px 30px 30px 30px;
			padding: 15px 43px 15px 43px;
		}

		.elementor-2580 .elementor-element.elementor-element-6891993 .elementor-button:hover,
		.elementor-2580 .elementor-element.elementor-element-6891993 .elementor-button:focus {
			color: var(--e-global-color-77210b0);
			background-color: var(--e-global-color-bde2d82);
		}

		.elementor-2580 .elementor-element.elementor-element-6891993 .elementor-button:hover svg,
		.elementor-2580 .elementor-element.elementor-element-6891993 .elementor-button:focus svg {
			fill: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-6891993>.elementor-widget-container {
			margin: 0px 10px 0px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-6891993 {
			width: initial;
			max-width: initial;
		}

		.elementor-2580 .elementor-element.elementor-element-70822a2 .elementor-button {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 21px;
			fill: #FFFFFF;
			color: #FFFFFF;
			background-color: var(--e-global-color-bde2d82);
			border-style: solid;
			border-width: 2px 2px 2px 2px;
			border-color: var(--e-global-color-bde2d82);
			border-radius: 30px 30px 30px 30px;
			padding: 15px 42px 15px 42px;
		}

		.elementor-2580 .elementor-element.elementor-element-70822a2 .elementor-button:hover,
		.elementor-2580 .elementor-element.elementor-element-70822a2 .elementor-button:focus {
			color: var(--e-global-color-bde2d82);
			background-color: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-70822a2 .elementor-button:hover svg,
		.elementor-2580 .elementor-element.elementor-element-70822a2 .elementor-button:focus svg {
			fill: var(--e-global-color-bde2d82);
		}

		.elementor-2580 .elementor-element.elementor-element-70822a2 {
			width: initial;
			max-width: initial;
		}

		.elementor-2580 .elementor-element.elementor-element-70d14ea:not(.elementor-motion-effects-element-type-background),
		.elementor-2580 .elementor-element.elementor-element-70d14ea>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: #CCC0B5;
		}

		.elementor-2580 .elementor-element.elementor-element-70d14ea {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			margin-top: -5px;
			margin-bottom: 0px;
			padding: 55px 0px 91px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-70d14ea>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-7d86cf5>.elementor-container {
			max-width: 1120px;
		}

		.elementor-2580 .elementor-element.elementor-element-7d86cf5 {
			margin-top: 0px;
			margin-bottom: 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-a5084b2 {
			text-align: left;
		}

		.elementor-2580 .elementor-element.elementor-element-a5084b2 .elementor-heading-title {
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 34px;
			font-weight: 700;
			line-height: 40px;
		}

		.elementor-2580 .elementor-element.elementor-element-a5084b2>.elementor-widget-container {
			margin: 0px 0px 0px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-ab1a9e2 {
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 14px;
			font-weight: 400;
			line-height: 23px;
		}

		.elementor-2580 .elementor-element.elementor-element-ab1a9e2>.elementor-widget-container {
			margin: 0px 0px 27px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-6f572e1>.elementor-container {
			max-width: 1120px;
		}

		.elementor-2580 .elementor-element.elementor-element-4be0587>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
			margin-bottom: 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-4be0587>.elementor-element-populated {
			padding: 11px 11px 11px 11px;
		}

		.elementor-2580 .elementor-element.elementor-element-8621cdb.elementor-position-right .elementor-image-box-img {
			margin-left: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-8621cdb.elementor-position-left .elementor-image-box-img {
			margin-right: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-8621cdb.elementor-position-top .elementor-image-box-img {
			margin-bottom: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-8621cdb .elementor-image-box-wrapper .elementor-image-box-img {
			width: 100%;
		}

		.elementor-2580 .elementor-element.elementor-element-8621cdb .elementor-image-box-img img {
			border-radius: 0px;
			transition-duration: 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-8621cdb .elementor-image-box-wrapper {
			text-align: left;
		}

		.elementor-2580 .elementor-element.elementor-element-8621cdb .elementor-image-box-title {
			margin-bottom: 10px;
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
		}

		.elementor-2580 .elementor-element.elementor-element-8621cdb .elementor-image-box-description {
			color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-8621cdb>.elementor-widget-container {
			background-color: #F9F9F9;
		}

		.elementor-2580 .elementor-element.elementor-element-8621cdb:hover .elementor-widget-container {
			background-color: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-a71b03a>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
			margin-bottom: 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-a71b03a>.elementor-element-populated {
			padding: 11px 11px 11px 11px;
		}

		.elementor-2580 .elementor-element.elementor-element-83e4fe7.elementor-position-right .elementor-image-box-img {
			margin-left: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-83e4fe7.elementor-position-left .elementor-image-box-img {
			margin-right: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-83e4fe7.elementor-position-top .elementor-image-box-img {
			margin-bottom: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-83e4fe7 .elementor-image-box-wrapper .elementor-image-box-img {
			width: 100%;
		}

		.elementor-2580 .elementor-element.elementor-element-83e4fe7 .elementor-image-box-img img {
			border-radius: 0px;
			transition-duration: 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-83e4fe7 .elementor-image-box-wrapper {
			text-align: left;
		}

		.elementor-2580 .elementor-element.elementor-element-83e4fe7 .elementor-image-box-title {
			margin-bottom: 10px;
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
		}

		.elementor-2580 .elementor-element.elementor-element-83e4fe7 .elementor-image-box-description {
			color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-83e4fe7>.elementor-widget-container {
			background-color: #F9F9F9;
		}

		.elementor-2580 .elementor-element.elementor-element-83e4fe7:hover .elementor-widget-container {
			background-color: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-928523c>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
			margin-bottom: 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-928523c>.elementor-element-populated {
			padding: 11px 11px 11px 11px;
		}

		.elementor-2580 .elementor-element.elementor-element-e1f007f.elementor-position-right .elementor-image-box-img {
			margin-left: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-e1f007f.elementor-position-left .elementor-image-box-img {
			margin-right: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-e1f007f.elementor-position-top .elementor-image-box-img {
			margin-bottom: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-e1f007f .elementor-image-box-wrapper .elementor-image-box-img {
			width: 100%;
		}

		.elementor-2580 .elementor-element.elementor-element-e1f007f .elementor-image-box-img img {
			border-radius: 0px;
			transition-duration: 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-e1f007f .elementor-image-box-wrapper {
			text-align: left;
		}

		.elementor-2580 .elementor-element.elementor-element-e1f007f .elementor-image-box-title {
			margin-bottom: 10px;
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
		}

		.elementor-2580 .elementor-element.elementor-element-e1f007f .elementor-image-box-description {
			color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-e1f007f>.elementor-widget-container {
			background-color: #F9F9F9;
			border-radius: 15px 15px 0px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-e1f007f:hover .elementor-widget-container {
			background-color: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-0a587d5:not(.elementor-motion-effects-element-type-background),
		.elementor-2580 .elementor-element.elementor-element-0a587d5>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-0a587d5 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-0a587d5>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-7029577>.elementor-container>.elementor-column>.elementor-widget-wrap {
			align-content: center;
			align-items: center;
		}

		.elementor-2580 .elementor-element.elementor-element-7029577 {
			margin-top: 138px;
			margin-bottom: 100px;
		}

		.elementor-2580 .elementor-element.elementor-element-5b21b4f {
			--image-transition-duration: 0ms;
			--content-text-align: center;
			--content-padding: 20px;
		}

		.elementor-2580 .elementor-element.elementor-element-44f0583>.elementor-element-populated {
			padding: 0px 0px 0px 20px;
		}

		.elementor-2580 .elementor-element.elementor-element-c5e4e06 {
			text-align: left;
		}

		.elementor-2580 .elementor-element.elementor-element-c5e4e06 .elementor-heading-title {
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 34px;
			font-weight: 700;
			line-height: 40px;
		}

		.elementor-2580 .elementor-element.elementor-element-1e984ed {
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 14px;
			font-weight: 400;
			line-height: 23px;
		}

		.elementor-2580 .elementor-element.elementor-element-1e984ed>.elementor-widget-container {
			margin: 0px 0px 29px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-2df05fe .elementor-button {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 21px;
			fill: #A38365;
			color: #A38365;
			background-color: #FFFFFF00;
			border-style: solid;
			border-width: 2px 2px 2px 2px;
			border-color: var(--e-global-color-bde2d82);
			border-radius: 30px 30px 30px 30px;
			padding: 15px 43px 15px 43px;
		}

		.elementor-2580 .elementor-element.elementor-element-2df05fe .elementor-button:hover,
		.elementor-2580 .elementor-element.elementor-element-2df05fe .elementor-button:focus {
			color: var(--e-global-color-77210b0);
			background-color: var(--e-global-color-bde2d82);
		}

		.elementor-2580 .elementor-element.elementor-element-2df05fe .elementor-button:hover svg,
		.elementor-2580 .elementor-element.elementor-element-2df05fe .elementor-button:focus svg {
			fill: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-2df05fe>.elementor-widget-container {
			margin: 0px 10px 0px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-2df05fe {
			width: initial;
			max-width: initial;
		}

		.elementor-2580 .elementor-element.elementor-element-c24273e .elementor-button {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 21px;
			fill: #FFFFFF;
			color: #FFFFFF;
			background-color: var(--e-global-color-bde2d82);
			border-style: solid;
			border-width: 2px 2px 2px 2px;
			border-color: var(--e-global-color-bde2d82);
			border-radius: 30px 30px 30px 30px;
			padding: 15px 42px 15px 42px;
		}

		.elementor-2580 .elementor-element.elementor-element-c24273e .elementor-button:hover,
		.elementor-2580 .elementor-element.elementor-element-c24273e .elementor-button:focus {
			color: var(--e-global-color-bde2d82);
			background-color: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-c24273e .elementor-button:hover svg,
		.elementor-2580 .elementor-element.elementor-element-c24273e .elementor-button:focus svg {
			fill: var(--e-global-color-bde2d82);
		}

		.elementor-2580 .elementor-element.elementor-element-c24273e {
			width: initial;
			max-width: initial;
		}

		.elementor-2580 .elementor-element.elementor-element-aff3d35>.elementor-container {
			max-width: 1155px;
		}

		.elementor-2580 .elementor-element.elementor-element-aff3d35:not(.elementor-motion-effects-element-type-background),
		.elementor-2580 .elementor-element.elementor-element-aff3d35>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-aff3d35 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			margin-top: 0px;
			margin-bottom: 0px;
			padding: 66px 0px 57px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-aff3d35>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-ebbc1e2>.elementor-element-populated {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-ebbc1e2>.elementor-element-populated>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-1f157ed>.elementor-container {
			max-width: 1155px;
			min-height: 457px;
		}

		.elementor-2580 .elementor-element.elementor-element-1f157ed>.elementor-container>.elementor-column>.elementor-widget-wrap {
			align-content: center;
			align-items: center;
		}

		.elementor-2580 .elementor-element.elementor-element-1f157ed:not(.elementor-motion-effects-element-type-background),
		.elementor-2580 .elementor-element.elementor-element-1f157ed>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-1f157ed,
		.elementor-2580 .elementor-element.elementor-element-1f157ed>.elementor-background-overlay {
			border-radius: 15px 15px 15px 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-1f157ed {
			box-shadow: -2px 2px 15px 0px rgba(0, 0, 0, 0.05);
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-1f157ed>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-cc5ae14:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
		.elementor-2580 .elementor-element.elementor-element-cc5ae14>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: #F9F9F9;
		}

		.elementor-2580 .elementor-element.elementor-element-cc5ae14>.elementor-element-populated,
		.elementor-2580 .elementor-element.elementor-element-cc5ae14>.elementor-element-populated>.elementor-background-overlay,
		.elementor-2580 .elementor-element.elementor-element-cc5ae14>.elementor-background-slideshow {
			border-radius: 15px 0px 0px 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-cc5ae14>.elementor-element-populated {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			margin: 0px 0px 0px 0px;
			--e-column-margin-right: 0px;
			--e-column-margin-left: 0px;
			padding: 40px 100px 40px 105px;
		}

		.elementor-2580 .elementor-element.elementor-element-cc5ae14>.elementor-element-populated>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-41fe70b {
			text-align: right;
		}

		.elementor-2580 .elementor-element.elementor-element-41fe70b .elementor-heading-title {
			color: var(--e-global-color-1057776);
			font-family: "DIN", Sans-serif;
			font-size: 34px;
			font-weight: 700;
			line-height: 40px;
		}

		.elementor-2580 .elementor-element.elementor-element-32e72c9 {
			--divider-border-style: solid;
			--divider-color: var(--e-global-color-1057776);
			--divider-border-width: 4px;
		}

		.elementor-2580 .elementor-element.elementor-element-32e72c9 .elementor-divider-separator {
			width: 41%;
			margin: 0 auto;
			margin-right: 0;
		}

		.elementor-2580 .elementor-element.elementor-element-32e72c9 .elementor-divider {
			text-align: right;
			padding-top: 15px;
			padding-bottom: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-15c9d38:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
		.elementor-2580 .elementor-element.elementor-element-15c9d38>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: #F9F9F9;
		}

		.elementor-2580 .elementor-element.elementor-element-15c9d38>.elementor-element-populated,
		.elementor-2580 .elementor-element.elementor-element-15c9d38>.elementor-element-populated>.elementor-background-overlay,
		.elementor-2580 .elementor-element.elementor-element-15c9d38>.elementor-background-slideshow {
			border-radius: 0px 15px 15px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-15c9d38>.elementor-element-populated {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			margin: 0px 0px 0px 0px;
			--e-column-margin-right: 0px;
			--e-column-margin-left: 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-15c9d38>.elementor-element-populated>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .swiper-slide {
			height: 400px;
			transition-duration: calc(9000ms*1.2);
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .swiper-slide-contents {
			max-width: 80%;
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .swiper-slide-inner {
			text-align: center;
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .swiper-slide-inner .elementor-slide-heading:not(:last-child) {
			margin-bottom: 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .swiper-slide-inner .elementor-slide-description:not(:last-child) {
			margin-bottom: 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .elementor-slide-description {
			color: var(--e-global-color-1057776);
			font-family: "DIN", Sans-serif;
			font-size: 14px;
			font-weight: 400;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .elementor-swiper-button {
			font-size: 28px;
			color: var(--e-global-color-1057776);
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .elementor-swiper-button svg {
			fill: var(--e-global-color-1057776);
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .swiper-pagination-bullet {
			height: 10px;
			width: 10px;
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .swiper-container-horizontal .swiper-pagination-progressbar {
			height: 10px;
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .swiper-pagination-fraction {
			font-size: 10px;
		}

		.elementor-2580 .elementor-element.elementor-element-c201acc .swiper-pagination-bullet-active {
			background-color: var(--e-global-color-1057776);
		}

		.elementor-2580 .elementor-element.elementor-element-f911cb8:not(.elementor-motion-effects-element-type-background),
		.elementor-2580 .elementor-element.elementor-element-f911cb8>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-f911cb8 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 100px 0px 0px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-f911cb8>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-d02f651 {
			margin-top: 0px;
			margin-bottom: 039px;
		}

		.elementor-2580 .elementor-element.elementor-element-7df6736 {
			text-align: center;
		}

		.elementor-2580 .elementor-element.elementor-element-7df6736 .elementor-heading-title {
			color: var(--e-global-color-1057776);
			font-family: "DIN", Sans-serif;
			font-size: 34px;
			font-weight: 700;
			line-height: 40px;
		}

		.elementor-2580 .elementor-element.elementor-element-01f2cc4 {
			text-align: center;
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 14px;
			font-weight: 400;
			line-height: 23px;
		}

		.elementor-2580 .elementor-element.elementor-element-01f2cc4>.elementor-widget-container {
			margin: 0px 0px 29px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-9099cb2 {
			margin-top: 0px;
			margin-bottom: 109px;
		}

		.elementor-2580 .elementor-element.elementor-element-9ff5cf5>.elementor-element-populated {
			padding: 20px 20px 20px 20px;
		}

		.elementor-2580 .elementor-element.elementor-element-7e9393b.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-1057776);
		}

		.elementor-2580 .elementor-element.elementor-element-7e9393b.elementor-view-framed .elementor-icon,
		.elementor-2580 .elementor-element.elementor-element-7e9393b.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-1057776);
			color: var(--e-global-color-1057776);
			border-color: var(--e-global-color-1057776);
		}

		.elementor-2580 .elementor-element.elementor-element-7e9393b {
			--icon-box-icon-margin: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-7e9393b .elementor-icon {
			font-size: 80px;
		}

		.elementor-2580 .elementor-element.elementor-element-7e9393b .elementor-icon-box-title {
			margin-bottom: 10px;
			color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-7e9393b .elementor-icon-box-title,
		.elementor-2580 .elementor-element.elementor-element-7e9393b .elementor-icon-box-title a {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-7e9393b .elementor-icon-box-description {
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 14px;
			font-weight: 400;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-578c26f>.elementor-element-populated {
			padding: 20px 20px 20px 20px;
		}

		.elementor-2580 .elementor-element.elementor-element-3631bef.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-3631bef.elementor-view-framed .elementor-icon,
		.elementor-2580 .elementor-element.elementor-element-3631bef.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-41fc470);
			color: var(--e-global-color-41fc470);
			border-color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-3631bef {
			--icon-box-icon-margin: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-3631bef .elementor-icon {
			font-size: 80px;
		}

		.elementor-2580 .elementor-element.elementor-element-3631bef .elementor-icon-box-title {
			margin-bottom: 10px;
			color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-3631bef .elementor-icon-box-title,
		.elementor-2580 .elementor-element.elementor-element-3631bef .elementor-icon-box-title a {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-3631bef .elementor-icon-box-description {
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 14px;
			font-weight: 400;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-827f26c>.elementor-element-populated {
			padding: 20px 20px 20px 20px;
		}

		.elementor-2580 .elementor-element.elementor-element-03b04b3.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-03b04b3.elementor-view-framed .elementor-icon,
		.elementor-2580 .elementor-element.elementor-element-03b04b3.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-41fc470);
			color: var(--e-global-color-41fc470);
			border-color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-03b04b3 {
			--icon-box-icon-margin: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-03b04b3 .elementor-icon {
			font-size: 80px;
		}

		.elementor-2580 .elementor-element.elementor-element-03b04b3 .elementor-icon-box-title {
			margin-bottom: 10px;
			color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-03b04b3 .elementor-icon-box-title,
		.elementor-2580 .elementor-element.elementor-element-03b04b3 .elementor-icon-box-title a {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-03b04b3 .elementor-icon-box-description {
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 14px;
			font-weight: 400;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-1c52919>.elementor-element-populated {
			padding: 20px 20px 20px 20px;
		}

		.elementor-2580 .elementor-element.elementor-element-4b8a4f6.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-4b8a4f6.elementor-view-framed .elementor-icon,
		.elementor-2580 .elementor-element.elementor-element-4b8a4f6.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-41fc470);
			color: var(--e-global-color-41fc470);
			border-color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-4b8a4f6 {
			--icon-box-icon-margin: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-4b8a4f6 .elementor-icon {
			font-size: 80px;
		}

		.elementor-2580 .elementor-element.elementor-element-4b8a4f6 .elementor-icon-box-title {
			margin-bottom: 10px;
			color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-4b8a4f6 .elementor-icon-box-title,
		.elementor-2580 .elementor-element.elementor-element-4b8a4f6 .elementor-icon-box-title a {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-4b8a4f6 .elementor-icon-box-description {
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 14px;
			font-weight: 400;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-a44de71>.elementor-element-populated {
			padding: 20px 20px 20px 20px;
		}

		.elementor-2580 .elementor-element.elementor-element-0fd3870.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-0fd3870.elementor-view-framed .elementor-icon,
		.elementor-2580 .elementor-element.elementor-element-0fd3870.elementor-view-default .elementor-icon {
			fill: var(--e-global-color-41fc470);
			color: var(--e-global-color-41fc470);
			border-color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-0fd3870 {
			--icon-box-icon-margin: 15px;
		}

		.elementor-2580 .elementor-element.elementor-element-0fd3870 .elementor-icon {
			font-size: 80px;
		}

		.elementor-2580 .elementor-element.elementor-element-0fd3870 .elementor-icon-box-title {
			margin-bottom: 10px;
			color: var(--e-global-color-41fc470);
		}

		.elementor-2580 .elementor-element.elementor-element-0fd3870 .elementor-icon-box-title,
		.elementor-2580 .elementor-element.elementor-element-0fd3870 .elementor-icon-box-title a {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-0fd3870 .elementor-icon-box-description {
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 14px;
			font-weight: 400;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-5451696:not(.elementor-motion-effects-element-type-background),
		.elementor-2580 .elementor-element.elementor-element-5451696>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: var(--e-global-color-77210b0);
		}

		.elementor-2580 .elementor-element.elementor-element-5451696 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-5451696>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2580 .elementor-element.elementor-element-4d8d149>.elementor-container {
			max-width: 1210px;
		}

		.elementor-2580 .elementor-element.elementor-element-4d8d149 {
			margin-top: 010px;
			margin-bottom: 130px;
		}

		.elementor-2580 .elementor-element.elementor-element-2e21b22 {
			text-align: left;
		}

		.elementor-2580 .elementor-element.elementor-element-2e21b22 .elementor-heading-title {
			color: var(--e-global-color-41fc470);
			font-family: "DIN", Sans-serif;
			font-size: 34px;
			font-weight: 700;
			line-height: 40px;
		}

		.elementor-2580 .elementor-element.elementor-element-2e21b22>.elementor-widget-container {
			margin: 0px 0px 0px 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab.elementor-arrows-yes .elementor-main-swiper {
			width: calc(100% - 40px);
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-main-swiper {
			width: 100%;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-main-swiper .swiper-slide {
			border-width: 0px 0px 0px 0px;
			border-radius: 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__header {
			background-color: var(--e-global-color-bde2d82);
			padding-bottom: calc(0px / 2);
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__content {
			padding-top: calc(0px / 2);
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__name {
			color: #FEFEFE;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__header,
		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__name {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__title {
			color: #FEFEFE;
			font-size: 18px;
			line-height: 21px;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__text {
			color: #FEFEFE;
			font-family: "DIN", Sans-serif;
			font-size: 14px;
			font-weight: 400;
			font-style: italic;
			line-height: 17px;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__image img {
			width: 200px;
			height: 200px;
			border-radius: 0px;
		}

		body:not(.rtl) .elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__image+cite {
			margin-left: 28px;
			margin-right: 0;
		}

		body.rtl .elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__image+cite {
			margin-right: 28px;
			margin-left: 0;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__icon {
			font-size: 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-testimonial__icon svg {
			width: 0px;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-star-rating {
			font-size: 20px;
		}

		body:not(.rtl) .elementor-2580 .elementor-element.elementor-element-72954ab .elementor-star-rating i:not(:last-of-type) {
			margin-right: 3px;
		}

		body.rtl .elementor-2580 .elementor-element.elementor-element-72954ab .elementor-star-rating i:not(:last-of-type) {
			margin-left: 3px;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-star-rating i:before {
			color: #FFFFFF;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-star-rating i {
			color: #FFFFFF;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab .elementor-swiper-button {
			font-size: 20px;
		}

		.elementor-2580 .elementor-element.elementor-element-72954ab>.elementor-widget-container {
			margin: 0px 0px 0px 0px;
			padding: 0px 0px 0px 0px;
		}

		:root {
			--page-title-display: none;
		}

		@media(min-width:768px) {
			.elementor-2580 .elementor-element.elementor-element-19a17ec {
				width: 46.964%;
			}

			.elementor-2580 .elementor-element.elementor-element-998d432 {
				width: 53.036%;
			}

			.elementor-2580 .elementor-element.elementor-element-38a0971 {
				width: 47.499%;
			}

			.elementor-2580 .elementor-element.elementor-element-44f0583 {
				width: 52.501%;
			}

			.elementor-2580 .elementor-element.elementor-element-cc5ae14 {
				width: 59.107%;
			}

			.elementor-2580 .elementor-element.elementor-element-15c9d38 {
				width: 40.85%;
			}
		}

		@media(max-width:1024px) and (min-width:768px) {
			.elementor-2580 .elementor-element.elementor-element-38a0971 {
				width: 100%;
			}

			.elementor-2580 .elementor-element.elementor-element-44f0583 {
				width: 100%;
			}
		}

		@media(max-width:1024px) {
			.elementor-2580 .elementor-element.elementor-element-998d432>.elementor-element-populated {
				padding: 0px 40px 0px 40px;
			}

			.elementor-2580 .elementor-element.elementor-element-43e7410 .elementor-heading-title {
				font-size: 30px;
				line-height: 1.2em;
			}

			.elementor-2580 .elementor-element.elementor-element-6891993 .elementor-button {
				padding: 12px 30px 12px 30px;
			}

			.elementor-2580 .elementor-element.elementor-element-70822a2 .elementor-button {
				padding: 12px 25px 12px 25px;
			}

			.elementor-2580 .elementor-element.elementor-element-0a587d5 {
				padding: 0px 0px 0px 0px;
			}

			.elementor-2580 .elementor-element.elementor-element-7029577 {
				margin-top: 80px;
				margin-bottom: 0px;
			}

			.elementor-2580 .elementor-element.elementor-element-44f0583>.elementor-element-populated {
				padding: 20px 0px 0px 10px;
			}

			.elementor-2580 .elementor-element.elementor-element-f911cb8 {
				margin-top: 0px;
				margin-bottom: 0px;
				padding: 30px 0px 0px 0px;
			}

			.elementor-2580 .elementor-element.elementor-element-9099cb2 {
				margin-top: 0px;
				margin-bottom: 100px;
			}

			.elementor-2580 .elementor-element.elementor-element-5451696 {
				margin-top: 0px;
				margin-bottom: 0px;
				padding: 0px 0px 0px 0px;
			}

			.elementor-2580 .elementor-element.elementor-element-4d8d149 {
				margin-top: 0px;
				margin-bottom: 60px;
				padding: 0px 0px 0px 0px;
			}
		}

		@media(max-width:767px) {

			.elementor-2580 .elementor-element.elementor-element-eed852b:not(.elementor-motion-effects-element-type-background),
			.elementor-2580 .elementor-element.elementor-element-eed852b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
				background-position: bottom center;
				background-size: cover;
			}

			.elementor-2580 .elementor-element.elementor-element-998d432>.elementor-element-populated {
				margin: 50px 0px 0px 0px;
				--e-column-margin-right: 0px;
				--e-column-margin-left: 0px;
				padding: 100px 20px 60px 20px;
			}

			.elementor-2580 .elementor-element.elementor-element-36ca016 .elementor-heading-title {
				font-size: 12px;
				line-height: 32px;
			}

			.elementor-2580 .elementor-element.elementor-element-43e7410 .elementor-heading-title {
				font-size: 30px;
				line-height: 32px;
			}

			.elementor-2580 .elementor-element.elementor-element-6891993 .elementor-button {
				padding: 13px 31px 13px 31px;
			}

			.elementor-2580 .elementor-element.elementor-element-6891993 {
				width: initial;
				max-width: initial;
			}

			.elementor-2580 .elementor-element.elementor-element-70822a2 .elementor-button {
				padding: 13px 30px 13px 30px;
			}

			.elementor-2580 .elementor-element.elementor-element-a5084b2 .elementor-heading-title {
				font-size: 30px;
				line-height: 32px;
			}

			.elementor-2580 .elementor-element.elementor-element-ab1a9e2>.elementor-widget-container {
				margin: 0px 0px 0px 0px;
			}

			.elementor-2580 .elementor-element.elementor-element-8621cdb .elementor-image-box-img {
				margin-bottom: 15px;
			}

			.elementor-2580 .elementor-element.elementor-element-83e4fe7 .elementor-image-box-img {
				margin-bottom: 15px;
			}

			.elementor-2580 .elementor-element.elementor-element-e1f007f .elementor-image-box-img {
				margin-bottom: 15px;
			}

			.elementor-2580 .elementor-element.elementor-element-7029577 {
				margin-top: 50px;
				margin-bottom: 50px;
				padding: 0px 0px 0px 0px;
			}

			.elementor-2580 .elementor-element.elementor-element-5b21b4f>.elementor-widget-container {
				margin: 30px 0px 0px 0px;
			}

			.elementor-2580 .elementor-element.elementor-element-44f0583>.elementor-element-populated {
				padding: 20px 0px 30px 10px;
			}

			.elementor-2580 .elementor-element.elementor-element-c5e4e06 .elementor-heading-title {
				font-size: 30px;
				line-height: 32px;
			}

			.elementor-2580 .elementor-element.elementor-element-2df05fe .elementor-button {
				padding: 13px 31px 13px 31px;
			}

			.elementor-2580 .elementor-element.elementor-element-2df05fe {
				width: initial;
				max-width: initial;
			}

			.elementor-2580 .elementor-element.elementor-element-c24273e .elementor-button {
				padding: 13px 30px 13px 30px;
			}

			.elementor-2580 .elementor-element.elementor-element-aff3d35 {
				padding: 30px 0px 30px 0px;
			}

			.elementor-2580 .elementor-element.elementor-element-cc5ae14>.elementor-element-populated,
			.elementor-2580 .elementor-element.elementor-element-cc5ae14>.elementor-element-populated>.elementor-background-overlay,
			.elementor-2580 .elementor-element.elementor-element-cc5ae14>.elementor-background-slideshow {
				border-radius: 15px 15px 0px 0px;
			}

			.elementor-2580 .elementor-element.elementor-element-cc5ae14>.elementor-element-populated {
				padding: 40px 50px 40px 50px;
			}

			.elementor-2580 .elementor-element.elementor-element-41fe70b .elementor-heading-title {
				font-size: 30px;
				line-height: 32px;
			}

			.elementor-2580 .elementor-element.elementor-element-15c9d38>.elementor-element-populated,
			.elementor-2580 .elementor-element.elementor-element-15c9d38>.elementor-element-populated>.elementor-background-overlay,
			.elementor-2580 .elementor-element.elementor-element-15c9d38>.elementor-background-slideshow {
				border-radius: 0px 0px 15px 15px;
			}

			.elementor-2580 .elementor-element.elementor-element-15c9d38>.elementor-element-populated {
				padding: 0px 010px 0px 010px;
			}

			.elementor-2580 .elementor-element.elementor-element-c201acc .swiper-slide {
				height: 350px;
			}

			.elementor-2580 .elementor-element.elementor-element-c201acc>.elementor-widget-container {
				margin: 0px 0px 0px 0px;
				padding: 0px 0px 15px 0px;
			}

			.elementor-2580 .elementor-element.elementor-element-7df6736 .elementor-heading-title {
				font-size: 30px;
				line-height: 32px;
			}

			.elementor-2580 .elementor-element.elementor-element-2e21b22 .elementor-heading-title {
				font-size: 30px;
				line-height: 32px;
			}
		}

		/* Start custom CSS for column, class: .elementor-element-998d432 */
		.blur-back {
			background: linear-gradient(269.7deg, rgba(238, 234, 230, 0.5) -0.18%, rgba(238, 234, 230, 0.3) 24.48%, rgba(238, 234, 230, 0.1) 50.71%, rgba(238, 234, 230, 0.05) 75.89%, rgba(238, 234, 230, 0) 100.55%);
			backdrop-filter: blur(10px);
		}

		/* End custom CSS */
		/* Start Custom Fonts CSS */
		@font-face {
			font-family: 'DIN';
			font-style: normal;
			font-weight: normal;
			font-display: auto;
			src: url('https://www.monoapartments.com/wp-content/uploads/2021/09/DINNextLTPro-Regular.ttf') format('truetype');
		}

		@font-face {
			font-family: 'DIN';
			font-style: normal;
			font-weight: 700;
			font-display: auto;
			src: url('https://www.monoapartments.com/wp-content/uploads/2021/09/DINNextLTPro-Bold.ttf') format('truetype');
		}

		/* End Custom Fonts CSS */
		.elementor-2625 .elementor-element.elementor-element-872e844>.elementor-container>.elementor-column>.elementor-widget-wrap {
			align-content: center;
			align-items: center;
		}

		.elementor-2625 .elementor-element.elementor-element-872e844:not(.elementor-motion-effects-element-type-background),
		.elementor-2625 .elementor-element.elementor-element-872e844>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: #FBF8F54D;
		}

		.elementor-2625 .elementor-element.elementor-element-872e844 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			margin-top: 0px;
			margin-bottom: -160px;
			padding: 18px 0px 0px 0px;
			z-index: 9999;
		}

		.elementor-2625 .elementor-element.elementor-element-872e844>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-bc-flex-widget .elementor-2625 .elementor-element.elementor-element-9f9faef.elementor-column .elementor-widget-wrap {
			align-items: center;
		}

		.elementor-2625 .elementor-element.elementor-element-9f9faef.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
			align-content: center;
			align-items: center;
		}

		.elementor-2625 .elementor-element.elementor-element-9f9faef>.elementor-element-populated {
			padding: 10px 0px 0px 0px;
		}

		.elementor-2625 .elementor-element.elementor-element-640a08f>.elementor-container>.elementor-column>.elementor-widget-wrap {
			align-content: center;
			align-items: center;
		}

		.elementor-2625 .elementor-element.elementor-element-640a08f {
			padding: 0px 100px 0px 100px;
		}

		.elementor-2625 .elementor-element.elementor-element-9a6686c>.elementor-element-populated {
			padding: 10px 10px 0px 10px;
		}

		.elementor-2625 .elementor-element.elementor-element-9c8d9db {
			text-align: left;
		}

		.elementor-2625 .elementor-element.elementor-element-9c8d9db img {
			width: 164px;
		}

		.elementor-2625 .elementor-element.elementor-element-9c8d9db>.elementor-widget-container {
			--e-transform-origin-x: center;
			--e-transform-origin-y: center;
		}

		.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-menu-toggle {
			margin-left: auto;
			background-color: #A3836500;
		}

		.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu .elementor-item {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			text-transform: uppercase;
			line-height: 22px;
		}

		.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu--main .elementor-item {
			color: var(--e-global-color-41fc470);
			fill: var(--e-global-color-41fc470);
			padding-top: 0px;
			padding-bottom: 0px;
		}

		.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu--main .elementor-item:hover,
		.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu--main .elementor-item.elementor-item-active,
		.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu--main .elementor-item.highlighted,
		.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu--main .elementor-item:focus {
			color: var(--e-global-color-1057776);
			fill: var(--e-global-color-1057776);
		}

		.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu--main .elementor-item.elementor-item-active {
			color: var(--e-global-color-1057776);
		}

		.elementor-2625 .elementor-element.elementor-element-beef881 {
			--e-nav-menu-horizontal-menu-item-margin: calc(10px / 2);
		}

		.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu>li:not(:last-child) {
			margin-bottom: 10px;
		}

		.elementor-2625 .elementor-element.elementor-element-da1c33a .elementor-icon-wrapper {
			text-align: center;
		}

		.elementor-2625 .elementor-element.elementor-element-da1c33a.elementor-view-stacked .elementor-icon {
			background-color: var(--e-global-color-41fc470);
		}

		.elementor-2625 .elementor-element.elementor-element-da1c33a.elementor-view-framed .elementor-icon,
		.elementor-2625 .elementor-element.elementor-element-da1c33a.elementor-view-default .elementor-icon {
			color: var(--e-global-color-41fc470);
			border-color: var(--e-global-color-41fc470);
		}

		.elementor-2625 .elementor-element.elementor-element-da1c33a.elementor-view-framed .elementor-icon,
		.elementor-2625 .elementor-element.elementor-element-da1c33a.elementor-view-default .elementor-icon svg {
			fill: var(--e-global-color-41fc470);
		}

		.elementor-2625 .elementor-element.elementor-element-da1c33a.elementor-view-stacked .elementor-icon:hover {
			background-color: var(--e-global-color-1057776);
		}

		.elementor-2625 .elementor-element.elementor-element-da1c33a.elementor-view-framed .elementor-icon:hover,
		.elementor-2625 .elementor-element.elementor-element-da1c33a.elementor-view-default .elementor-icon:hover {
			color: var(--e-global-color-1057776);
			border-color: var(--e-global-color-1057776);
		}

		.elementor-2625 .elementor-element.elementor-element-da1c33a.elementor-view-framed .elementor-icon:hover,
		.elementor-2625 .elementor-element.elementor-element-da1c33a.elementor-view-default .elementor-icon:hover svg {
			fill: var(--e-global-color-1057776);
		}

		.elementor-2625 .elementor-element.elementor-element-da1c33a .elementor-icon i,
		.elementor-2625 .elementor-element.elementor-element-da1c33a .elementor-icon svg {
			transform: rotate(0deg);
		}

		@media(max-width:1024px) {
			.elementor-2625 .elementor-element.elementor-element-640a08f {
				padding: 0px 20px 0px 20px;
			}

			.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu--dropdown a {
				padding-left: 22px;
				padding-right: 22px;
				padding-top: 10px;
				padding-bottom: 10px;
			}

			.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
			.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
				margin-top: 28px !important;
			}

			.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-menu-toggle {
				font-size: 26px;
			}
		}

		@media(max-width:767px) {
			.elementor-2625 .elementor-element.elementor-element-9a6686c {
				width: 60%;
			}

			.elementor-2625 .elementor-element.elementor-element-de3d984 {
				width: 40%;
			}

			.elementor-bc-flex-widget .elementor-2625 .elementor-element.elementor-element-de3d984.elementor-column .elementor-widget-wrap {
				align-items: center;
			}

			.elementor-2625 .elementor-element.elementor-element-de3d984.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
				align-content: center;
				align-items: center;
			}

			.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu--dropdown a {
				padding-left: 20px;
				padding-right: 20px;
				padding-top: 12px;
				padding-bottom: 12px;
			}

			.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
			.elementor-2625 .elementor-element.elementor-element-beef881 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
				margin-top: 27px !important;
			}

			.elementor-2625 .elementor-element.elementor-element-beef881>.elementor-widget-container {
				padding: 0px 0px 0px 0px;
			}

			.elementor-2625 .elementor-element.elementor-element-da1c33a .elementor-icon-wrapper {
				text-align: right;
			}

			.elementor-2625 .elementor-element.elementor-element-da1c33a .elementor-icon {
				font-size: 24px;
			}
		}

		@media(min-width:768px) {
			.elementor-2625 .elementor-element.elementor-element-9a6686c {
				width: 29.286%;
			}

			.elementor-2625 .elementor-element.elementor-element-de3d984 {
				width: 70.714%;
			}
		}

		/* Start custom CSS for section, class: .elementor-element-872e844 */
		.sticky-header {
			backdrop-filter: blur(20px);
		}

		/* End custom CSS */
		.elementor-3280 .elementor-element.elementor-element-a3fdc5f:not(.elementor-motion-effects-element-type-background),
		.elementor-3280 .elementor-element.elementor-element-a3fdc5f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: #9F8A6A;
		}

		.elementor-3280 .elementor-element.elementor-element-a3fdc5f {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			margin-top: 0px;
			margin-bottom: 0px;
			padding: 45px 0px 15px 0px;
		}

		.elementor-3280 .elementor-element.elementor-element-a3fdc5f>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-3280 .elementor-element.elementor-element-80b6361 {
			text-align: left;
			color: #FFFFFF;
			font-family: "DIN", Sans-serif;
			font-size: 22px;
			font-weight: 700;
			line-height: 26px;
			letter-spacing: 0.05px;
		}

		.elementor-3280 .elementor-element.elementor-element-80b6361>.elementor-widget-container {
			margin: 0px 0px 5px 0px;
		}

		.elementor-3280 .elementor-element.elementor-element-15b3924 .elementor-heading-title {
			color: #FFFFFF;
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 400;
			text-decoration: underline;
			line-height: 25px;
		}

		.elementor-3280 .elementor-element.elementor-element-15b3924>.elementor-widget-container {
			margin: 0px 0px -5px 0px;
		}

		.elementor-3280 .elementor-element.elementor-element-7497499 .elementor-heading-title {
			color: #FFFFFF;
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 400;
			line-height: 25px;
		}

		.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
			padding-bottom: calc(40px/2);
		}

		.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
			margin-top: calc(40px/2);
		}

		.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
			margin-right: calc(40px/2);
			margin-left: calc(40px/2);
		}

		.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items.elementor-inline-items {
			margin-right: calc(-40px/2);
			margin-left: calc(-40px/2);
		}

		body.rtl .elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
			left: calc(-40px/2);
		}

		body:not(.rtl) .elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
			right: calc(-40px/2);
		}

		.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-icon i {
			color: #6EC1E4;
		}

		.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-icon svg {
			fill: #6EC1E4;
		}

		.elementor-3280 .elementor-element.elementor-element-dadaad7 {
			--e-icon-list-icon-size: 14px;
		}

		.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-text {
			color: #FFFFFF;
		}

		.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-item:hover .elementor-icon-list-text {
			color: var(--e-global-color-41fc470);
		}

		.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-item>.elementor-icon-list-text,
		.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-item>a {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 400;
			text-decoration: underline;
			line-height: 21px;
		}

		.elementor-3280 .elementor-element.elementor-element-dadaad7>.elementor-widget-container {
			margin: 30px 0px 0px 0px;
		}

		.elementor-3280 .elementor-element.elementor-element-f7a7d72 {
			text-align: right;
		}

		.elementor-3280 .elementor-element.elementor-element-f7a7d72 img {
			width: 185px;
		}

		.elementor-3280 .elementor-element.elementor-element-ad72f58 {
			text-align: right;
		}

		.elementor-3280 .elementor-element.elementor-element-ad72f58 .elementor-heading-title {
			color: #FFFFFF;
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 400;
			line-height: 25px;
		}

		.elementor-3280 .elementor-element.elementor-element-6d52ad8 {
			text-align: center;
			color: #FFFFFF;
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
			line-height: 26px;
			letter-spacing: 0.05px;
		}

		.elementor-3280 .elementor-element.elementor-element-6d52ad8>.elementor-widget-container {
			margin: 0px 0px 10px 0px;
		}

		@media(max-width:767px) {
			.elementor-3280 .elementor-element.elementor-element-80b6361 {
				text-align: left;
			}

			.elementor-3280 .elementor-element.elementor-element-15b3924 {
				text-align: left;
			}

			.elementor-3280 .elementor-element.elementor-element-7497499 {
				text-align: left;
			}

			.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
				padding-bottom: calc(20px/2);
			}

			.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
				margin-top: calc(20px/2);
			}

			.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
				margin-right: calc(20px/2);
				margin-left: calc(20px/2);
			}

			.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items.elementor-inline-items {
				margin-right: calc(-20px/2);
				margin-left: calc(-20px/2);
			}

			body.rtl .elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
				left: calc(-20px/2);
			}

			body:not(.rtl) .elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
				right: calc(-20px/2);
			}

			.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-item>.elementor-icon-list-text,
			.elementor-3280 .elementor-element.elementor-element-dadaad7 .elementor-icon-list-item>a {
				font-size: 16px;
			}

			.elementor-3280 .elementor-element.elementor-element-ad72f58 {
				text-align: right;
			}
		}

		/* Start custom CSS for icon-list, class: .elementor-element-dadaad7 */
		.footer-link a {
			color: #fff;
		}

		.footer-link a:hover {
			color: #131518;
		}

		/* End custom CSS */
		/* Start Custom Fonts CSS */
		@font-face {
			font-family: 'DIN';
			font-style: normal;
			font-weight: normal;
			font-display: auto;
			src: url('https://www.monoapartments.com/wp-content/uploads/2021/09/DINNextLTPro-Regular.ttf') format('truetype');
		}

		@font-face {
			font-family: 'DIN';
			font-style: normal;
			font-weight: 700;
			font-display: auto;
			src: url('https://www.monoapartments.com/wp-content/uploads/2021/09/DINNextLTPro-Bold.ttf') format('truetype');
		}

		/* End Custom Fonts CSS */
	</style>
	<link rel='stylesheet' id='elementor-pro-css' href='https://www.monoapartments.com/wp-content/uploads/elementor/css/custom-pro-frontend-lite.min.css?ver=1655105216' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-5-all-css' href='https://www.monoapartments.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.6.4' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-4-shim-css' href='https://www.monoapartments.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.6.4' type='text/css' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.1.1' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://www.monoapartments.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://www.monoapartments.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' type='text/css' media='all' />
	<script type='text/javascript' src='https://www.monoapartments.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.1' id='jquery-core-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend-gtag.min.js?ver=8.12.1' id='monsterinsights-frontend-script-js'></script>
	<script data-cfasync="false" data-wpfc-render="false" type="text/javascript" id='monsterinsights-frontend-script-js-extra'>
		/* <![CDATA[ */
		var monsterinsights_frontend = {
			"js_events_tracking": "true",
			"download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
			"inbound_paths": "[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]",
			"home_url": "https:\/\/www.monoapartments.com",
			"hash_tracking": "false",
			"ua": "",
			"v4_id": "G-BWN5SD6LX9"
		}; /* ]]> */
	</script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.6.4' id='font-awesome-4-shim-js'></script>
	<link rel="https://api.w.org/" href="https://www.monoapartments.com/wp-json/" />
	<link rel="alternate" type="application/json" href="https://www.monoapartments.com/wp-json/wp/v2/pages/2580" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.monoapartments.com/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.monoapartments.com/wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 6.1.1" />
	<link rel='shortlink' href='https://www.monoapartments.com/' />
	<link rel="alternate" type="application/json+oembed" href="https://www.monoapartments.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.monoapartments.com%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://www.monoapartments.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.monoapartments.com%2F&#038;format=xml" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77254893-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-77254893-1');
	</script>
	<link rel="icon" href="https://www.monoapartments.com/wp-content/uploads/2021/12/Mono_Fav-20.png" sizes="32x32" />
	<link rel="icon" href="https://www.monoapartments.com/wp-content/uploads/2021/12/Mono_Fav-20.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="https://www.monoapartments.com/wp-content/uploads/2021/12/Mono_Fav-20.png" />
	<meta name="msapplication-TileImage" content="https://www.monoapartments.com/wp-content/uploads/2021/12/Mono_Fav-20.png" />
	<style type="text/css" id="wp-custom-css">
		/* Enter Your Custom CSS Here */

		#home-review .elementor-testimonial__content {
			background: #9F8a6A;
			width: 327px;
			max-height: 120px;
			float: left;
			margin-left: 228px;
			margin-top: -131px;
			padding: 0px;
		}

		#home-review .elementor-testimonial__header {
			padding: 0px !Important
		}

		#home-review cite.elementor-testimonial__cite {
			display: inline;
			width: 100%;
			margin-top: 28px;
		}

		#home-review .elementor-star-rating {
			right: 37px;
			top: 23px;
			position: absolute;
		}

		#home-review.elementor-testimonial {
			box-shadow: 3px 4px 10px #000 !important
		}

		#home-review .elementor-main-swiper {
			padding: 0px !Important;
			width: 100% !important
		}

		#home-review .swiper-slide {
			border-radius: 15px !important;
			box-shadow: 3px 4px 10px rgba(0, 0, 0, 0.15) !important;
		}

		#home-review .swiper-container {
			padding-top: 22px !Important;
			padding-bottom: 30px !Important
		}

		#explore-boxes .elementor-widget-container {
			border-radius: 15px !Important;
			filter: drop-shadow(-3px 5px 10px rgba(0, 0, 0, 0.15));
		}

		#explore-boxes img {
			border-radius: 15px 15px 0px 0px !important
		}

		#explore-boxes .elementor-image-box-content {
			padding: 25px 34px 45px 34px !Important
		}

		#explore-boxes .elementor-image-box-description a {
			color: #131518 !Important;
			margin-top: 12px;
			text-decoration: underline;
			display: block;
		}

		#explore-boxes .elementor-image-box-description a:hover {
			color: #A38365 !Important;
		}


		#explore-boxes .elementor-image-box-img {
			margin-bottom: 0px !important
		}

		#explore-boxes {
			transition-timing-function: ease-in-out !Important;
		}

		#explore-boxes:hover {
			transform: scale(1.03) !Important;
			transition-duration: 500ms;
		}

		#about-testimonial .elementor-testimonial__title {
			position: absolute;
			right: 30px;
		}

		#about-testimonial .elementor-testimonial__content {
			padding-top: 15px;
		}


		@media all and (max-width:767px) {
			#customer-said .elementor-testimonial__image img {
				width: 125px !important;
				height: 175px !important
			}

			#customer-said .elementor-testimonial__text {
				font-size: 12px !important;
				line-height: 1.2em !important;
			}

			#home-review cite.elementor-testimonial__cite {
				margin-left: 15px !important;
				margin-top: 15px !important;
			}

			#home-review .elementor-star-rating {
				right: 11px !important;
				top: 16px !important;
				font-size: 12px !important;
			}

			#home-review .elementor-testimonial__content {
				width: 190px !Important;
				margin-left: 140px !important;
			}
		}
	</style>
</head>

<body data-rsssl=1 class="home page-template-default page page-id-2580 elementor-default elementor-kit-2620 elementor-page elementor-page-2580">

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-dark-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0.49803921568627" />
					<feFuncG type="table" tableValues="0 0.49803921568627" />
					<feFuncB type="table" tableValues="0 0.49803921568627" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-red">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 0.27843137254902" />
					<feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-midnight">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0" />
					<feFuncG type="table" tableValues="0 0.64705882352941" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-magenta-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.78039215686275 1" />
					<feFuncG type="table" tableValues="0 0.94901960784314" />
					<feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-green">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.44705882352941 0.4" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-orange">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.098039215686275 1" />
					<feFuncG type="table" tableValues="0 0.66274509803922" />
					<feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg>
	<div data-elementor-type="header" data-elementor-id="2625" class="elementor elementor-2625 elementor-location-header">
		<div class="elementor-section-wrap">
			<section class="elementor-section elementor-top-section elementor-element elementor-element-872e844 elementor-section-full_width elementor-section-content-middle sticky-header elementor-section-height-default elementor-section-height-default" data-id="872e844" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;background_motion_fx_opacity_effect&quot;:&quot;yes&quot;,&quot;background_motion_fx_opacity_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:95,&quot;end&quot;:100}},&quot;sticky&quot;:&quot;top&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.90000000000000002220446049250313080847263336181640625,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:80,&quot;end&quot;:100}},&quot;background_motion_fx_opacity_direction&quot;:&quot;out-in&quot;,&quot;background_motion_fx_opacity_level&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;background_motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9f9faef" data-id="9f9faef" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-640a08f elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="640a08f" data-element_type="section">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9a6686c" data-id="9a6686c" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-9c8d9db elementor-widget elementor-widget-image" data-id="9c8d9db" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_scale_effect&quot;:&quot;yes&quot;,&quot;motion_fx_scale_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-2,&quot;sizes&quot;:[]},&quot;motion_fx_scale_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:5}},&quot;motion_fx_range&quot;:&quot;page&quot;,&quot;motion_fx_scale_direction&quot;:&quot;out-in&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="image.default">
												<div class="elementor-widget-container">
													<style>
														/*! elementor - v3.6.4 - 13-04-2022 */
														.elementor-widget-image {
															text-align: center
														}

														.elementor-widget-image a {
															display: inline-block
														}

														.elementor-widget-image a img[src$=".svg"] {
															width: 48px
														}

														.elementor-widget-image img {
															vertical-align: middle;
															display: inline-block
														}
													</style> <a href="https://www.monoapartments.com">
														<img width="300" height="300" src="https://www.monoapartments.com/wp-content/uploads/2021/09/mono-apartments-logo.svg" class="attachment-medium size-medium" alt="" loading="lazy" srcset="https://www.monoapartments.com/wp-content/uploads//2021/09/mono-apartments-logo.svg 150w, https://www.monoapartments.com/wp-content/uploads//2021/09/mono-apartments-logo.svg 300w, https://www.monoapartments.com/wp-content/uploads//2021/09/mono-apartments-logo.svg 1024w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-de3d984" data-id="de3d984" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-beef881 elementor-nav-menu__align-right elementor-nav-menu--dropdown-mobile elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-hidden-mobile elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="beef881" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_direction&quot;:&quot;negative&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.200000000000000011102230246251565404236316680908203125,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:95,&quot;end&quot;:100}},&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="nav-menu.default">
												<div class="elementor-widget-container">
													<link rel="stylesheet" href="https://www.monoapartments.com/wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css">
													<nav migration_allowed="1" migrated="0" role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-text e--animation-none">
														<ul id="menu-1-beef881" class="elementor-nav-menu">
															<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-738"><a href="https://www.monoapartments.com/about-us/" class="elementor-item">About Us</a></li>
															<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-741"><a href="https://www.monoapartments.com/accomodation/" class="elementor-item">Accommodation</a></li>
															<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3460"><a target="_blank" rel="noopener" href="https://form.typeform.com/to/Ju4RvuSb" class="elementor-item">Get in Touch</a></li>
														</ul>
													</nav>
													<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
														<i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close eicon-close"></i> <span class="elementor-screen-only">Menu</span>
													</div>
													<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
														<ul id="menu-2-beef881" class="elementor-nav-menu">
															<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-738"><a href="https://www.monoapartments.com/about-us/" class="elementor-item" tabindex="-1">About Us</a></li>
															<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-741"><a href="https://www.monoapartments.com/accomodation/" class="elementor-item" tabindex="-1">Accommodation</a></li>
															<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3460"><a target="_blank" rel="noopener" href="https://form.typeform.com/to/Ju4RvuSb" class="elementor-item" tabindex="-1">Get in Touch</a></li>
														</ul>
													</nav>
												</div>
											</div>
											<div class="elementor-element elementor-element-da1c33a elementor-hidden-desktop elementor-hidden-tablet_extra elementor-hidden-tablet elementor-view-default elementor-widget elementor-widget-icon" data-id="da1c33a" data-element_type="widget" data-widget_type="icon.default">
												<div class="elementor-widget-container">
													<div class="elementor-icon-wrapper">
														<a class="elementor-icon" href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjMzOTAiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39px" height="29px" viewBox="0 0 39 29">
																<title>Group 2</title>
																<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
																	<g id="Tablet" transform="translate(-582.000000, -193.000000)" stroke="#131518" stroke-width="2">
																		<g id="Group-2" transform="translate(583.500000, 194.000000)">
																			<line x1="3.12250226e-16" y1="0.5" x2="36" y2="0.5" id="Line"></line>
																			<line x1="3.12250226e-16" y1="13.5" x2="36" y2="13.5" id="Line"></line>
																			<line x1="3.12250226e-16" y1="26.5" x2="36" y2="26.5" id="Line"></line>
																		</g>
																	</g>
																</g>
															</svg> </a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<main class="site-main post-2580 page type-page status-publish hentry" role="main">
		<div class="page-content">
			<div data-elementor-type="wp-page" data-elementor-id="2580" class="elementor elementor-2580">
				<section class="elementor-section elementor-top-section elementor-element elementor-element-eed852b elementor-section-full_width elementor-section-height-full elementor-section-height-default elementor-section-items-middle" data-id="eed852b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c3a40a" data-id="7c3a40a" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-1005bd9 elementor-section-full_width elementor-section-height-full elementor-section-content-middle elementor-section-height-default" data-id="1005bd9" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-19a17ec" data-id="19a17ec" data-element_type="column">
											<div class="elementor-widget-wrap">
											</div>
										</div>
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-998d432 blur-back" data-id="998d432" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-background-overlay"></div>
												<div class="elementor-element elementor-element-36ca016 elementor-widget elementor-widget-heading" data-id="36ca016" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<style>
															/*! elementor - v3.6.4 - 13-04-2022 */
															.elementor-heading-title {
																padding: 0;
																margin: 0;
																line-height: 1
															}

															.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
																color: inherit;
																font-size: inherit;
																line-height: inherit
															}

															.elementor-widget-heading .elementor-heading-title.elementor-size-small {
																font-size: 15px
															}

															.elementor-widget-heading .elementor-heading-title.elementor-size-medium {
																font-size: 19px
															}

															.elementor-widget-heading .elementor-heading-title.elementor-size-large {
																font-size: 29px
															}

															.elementor-widget-heading .elementor-heading-title.elementor-size-xl {
																font-size: 39px
															}

															.elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
																font-size: 59px
															}
														</style>
														<p class="elementor-heading-title elementor-size-default">SHORT TERM | LONG TERM ACCOMMODATION </p>
													</div>
												</div>
												<div class="elementor-element elementor-element-43e7410 elementor-widget elementor-widget-heading" data-id="43e7410" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h1 class="elementor-heading-title elementor-size-default">A stress-free relocation journey</h1>
													</div>
												</div>
												<div class="elementor-element elementor-element-c27b974 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="c27b974" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<style>
															/*! elementor - v3.6.4 - 13-04-2022 */
															.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
																background-color: #818a91;
																color: #fff
															}

															.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
																color: #818a91;
																border: 3px solid;
																background-color: transparent
															}

															.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
																margin-top: 8px
															}

															.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
																width: 1em;
																height: 1em
															}

															.elementor-widget-text-editor .elementor-drop-cap {
																float: left;
																text-align: center;
																line-height: 1;
																font-size: 50px
															}

															.elementor-widget-text-editor .elementor-drop-cap-letter {
																display: inline-block
															}
														</style>
														<p>There are overwhelming number of ways to find your next accommodation. We believe relocating to new home should be easy and worry-free. We bring relocation journey to life through expertise of local experts to find the housing arrangement which suits your need.<br /><strong>Our consultation is free of charge and non-binding, contact us know.</strong></p>
													</div>
												</div>
												<div class="elementor-element elementor-element-7878052 elementor-widget elementor-widget-spacer" data-id="7878052" data-element_type="widget" data-widget_type="spacer.default">
													<div class="elementor-widget-container">
														<style>
															/*! elementor - v3.6.4 - 13-04-2022 */
															.e-container.e-container--row .elementor-spacer-inner {
																width: var(--spacer-size)
															}

															.e-container.e-container--column .elementor-spacer-inner,
															.elementor-column .elementor-spacer-inner {
																height: var(--spacer-size)
															}
														</style>
														<div class="elementor-spacer">
															<div class="elementor-spacer-inner"></div>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-6891993 elementor-align-left elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-button" data-id="6891993" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">
															<a href="https://monoapartments.com/about-us/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
																<span class="elementor-button-content-wrapper">
																	<span class="elementor-button-text">About us</span>
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-70822a2 elementor-align-left elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="70822a2" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">
															<a href="https://form.typeform.com/to/Ju4RvuSb" class="elementor-button-link elementor-button elementor-size-sm" role="button">
																<span class="elementor-button-content-wrapper">
																	<span class="elementor-button-text">Contact us</span>
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-70d14ea elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="70d14ea" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a14bb52" data-id="a14bb52" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-7d86cf5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7d86cf5" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7f6ddf4" data-id="7f6ddf4" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-a5084b2 elementor-widget elementor-widget-heading" data-id="a5084b2" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h4 class="elementor-heading-title elementor-size-default">Explore your options</h4>
													</div>
												</div>
												<div class="elementor-element elementor-element-ab1a9e2 elementor-widget elementor-widget-text-editor" data-id="ab1a9e2" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<p>Just for yourself? Sharing with partners? Or team-up with friends?<br />We have got your back with our range of options that suits your budget to accommodate your needs.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-6f572e1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6f572e1" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4be0587" data-id="4be0587" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-8621cdb elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="8621cdb" data-element_type="widget" id="explore-boxes" data-widget_type="image-box.default">
													<div class="elementor-widget-container">
														<style>
															.elementor-widget-image-box .elementor-image-box-content {
																width: 100%
															}

															@media (min-width:768px) {

																.elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper,
																.elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
																	display: -webkit-box;
																	display: -ms-flexbox;
																	display: flex
																}

																.elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
																	text-align: right;
																	-webkit-box-orient: horizontal;
																	-webkit-box-direction: reverse;
																	-ms-flex-direction: row-reverse;
																	flex-direction: row-reverse
																}

																.elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper {
																	text-align: left;
																	-webkit-box-orient: horizontal;
																	-webkit-box-direction: normal;
																	-ms-flex-direction: row;
																	flex-direction: row
																}

																.elementor-widget-image-box.elementor-position-top .elementor-image-box-img {
																	margin: auto
																}

																.elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper {
																	-webkit-box-align: start;
																	-ms-flex-align: start;
																	align-items: flex-start
																}

																.elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper {
																	-webkit-box-align: center;
																	-ms-flex-align: center;
																	align-items: center
																}

																.elementor-widget-image-box.elementor-vertical-align-bottom .elementor-image-box-wrapper {
																	-webkit-box-align: end;
																	-ms-flex-align: end;
																	align-items: flex-end
																}
															}

															@media (max-width:767px) {
																.elementor-widget-image-box .elementor-image-box-img {
																	margin-left: auto !important;
																	margin-right: auto !important;
																	margin-bottom: 15px
																}
															}

															.elementor-widget-image-box .elementor-image-box-img {
																display: inline-block
															}

															.elementor-widget-image-box .elementor-image-box-title a {
																color: inherit
															}

															.elementor-widget-image-box .elementor-image-box-wrapper {
																text-align: center
															}

															.elementor-widget-image-box .elementor-image-box-description {
																margin: 0
															}
														</style>
														<div class="elementor-image-box-wrapper">
															<figure class="elementor-image-box-img"><a href="https://monoapartments.com/accomodation/#private"><img decoding="async" width="700" height="500" src="https://www.monoapartments.com/wp-content/uploads/2021/09/image-39-1.jpg" class="attachment-full size-full" alt="" loading="lazy" /></a></figure>
															<div class="elementor-image-box-content">
																<h4 class="elementor-image-box-title"><a href="https://monoapartments.com/accomodation/#private">Private room​</a></h4>
																<p class="elementor-image-box-description">If you’d like to rent one private room in a shared apartment, this is a perfect fit for you. You’ll have another flatmate to chill and have fun with.
																	<br />
																	<a href="https://monoapartments.com/accomodation/#private">Learn more</a>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a71b03a" data-id="a71b03a" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-83e4fe7 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="83e4fe7" data-element_type="widget" id="explore-boxes" data-widget_type="image-box.default">
													<div class="elementor-widget-container">
														<div class="elementor-image-box-wrapper">
															<figure class="elementor-image-box-img"><a href="https://monoapartments.com/accomodation/#one-bedroom"><img decoding="async" width="700" height="500" src="https://www.monoapartments.com/wp-content/uploads/2021/09/image-40-1.jpg" class="attachment-full size-full" alt="" loading="lazy" /></a></figure>
															<div class="elementor-image-box-content">
																<h4 class="elementor-image-box-title"><a href="https://monoapartments.com/accomodation/#one-bedroom">1 Bedroom</a></h4>
																<p class="elementor-image-box-description">Do you need more privacy and space for yourself? An apartment with one separate bedroom is most suitable for your preference.
																	<br />
																	<a href="https://monoapartments.com/accomodation/#one-bedroom">Learn more</a>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-928523c" data-id="928523c" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-e1f007f elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="e1f007f" data-element_type="widget" id="explore-boxes" data-widget_type="image-box.default">
													<div class="elementor-widget-container">
														<div class="elementor-image-box-wrapper">
															<figure class="elementor-image-box-img"><a href="https://monoapartments.com/accomodation/#two-bedroom"><img decoding="async" width="700" height="500" src="https://www.monoapartments.com/wp-content/uploads/2021/09/image-19-1.jpg" class="attachment-full size-full" alt="" loading="lazy" /></a></figure>
															<div class="elementor-image-box-content">
																<h4 class="elementor-image-box-title"><a href="https://monoapartments.com/accomodation/#two-bedroom">2 Bedrooms</a></h4>
																<p class="elementor-image-box-description">What could you ask for more if you can live with someone you always hang out with! You can share your flat with your friend with 2 bedrooms in the property.
																	<br />
																	<a href="https://monoapartments.com/accomodation/#two-bedroom">Learn more</a>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-0a587d5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0a587d5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c508ad2" data-id="c508ad2" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-7029577 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7029577" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-38a0971" data-id="38a0971" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-5b21b4f elementor-widget elementor-widget-gallery" data-id="5b21b4f" data-element_type="widget" data-settings="{&quot;gallery_layout&quot;:&quot;masonry&quot;,&quot;columns&quot;:2,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:12,&quot;sizes&quot;:[]},&quot;columns_mobile&quot;:2,&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;lazyload&quot;:&quot;yes&quot;,&quot;columns_tablet&quot;:2,&quot;gap_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}" data-widget_type="gallery.default">
													<div class="elementor-widget-container">
														<style>
															/*! elementor-pro - v3.5.2 - 28-11-2021 */
															.elementor-gallery__container {
																min-height: 1px
															}

															.elementor-gallery-item {
																position: relative;
																overflow: hidden;
																display: block;
																text-decoration: none;
																border: solid var(--image-border-width) var(--image-border-color);
																border-radius: var(--image-border-radius)
															}

															.elementor-gallery-item__content,
															.elementor-gallery-item__overlay {
																height: 100%;
																width: 100%;
																position: absolute;
																top: 0;
																left: 0
															}

															.elementor-gallery-item__overlay {
																mix-blend-mode: var(--overlay-mix-blend-mode);
																-webkit-transition-duration: var(--overlay-transition-duration);
																-o-transition-duration: var(--overlay-transition-duration);
																transition-duration: var(--overlay-transition-duration);
																-webkit-transition-property: mix-blend-mode, opacity, background-color, -webkit-transform;
																transition-property: mix-blend-mode, opacity, background-color, -webkit-transform;
																-o-transition-property: mix-blend-mode, transform, opacity, background-color;
																transition-property: mix-blend-mode, transform, opacity, background-color;
																transition-property: mix-blend-mode, transform, opacity, background-color, -webkit-transform
															}

															.elementor-gallery-item__image.e-gallery-image {
																-webkit-transition-duration: var(--image-transition-duration);
																-o-transition-duration: var(--image-transition-duration);
																transition-duration: var(--image-transition-duration);
																-webkit-transition-property: -webkit-filter, -webkit-transform;
																transition-property: -webkit-filter, -webkit-transform;
																-o-transition-property: filter, transform;
																transition-property: filter, transform;
																transition-property: filter, transform, -webkit-filter, -webkit-transform
															}

															.elementor-gallery-item__content {
																display: -webkit-box;
																display: -ms-flexbox;
																display: flex;
																-webkit-box-orient: vertical;
																-webkit-box-direction: normal;
																-ms-flex-direction: column;
																flex-direction: column;
																-webkit-box-pack: var(--content-justify-content, center);
																-ms-flex-pack: var(--content-justify-content, center);
																justify-content: var(--content-justify-content, center);
																-webkit-box-align: center;
																-ms-flex-align: center;
																align-items: center;
																text-align: var(--content-text-align);
																padding: var(--content-padding)
															}

															.elementor-gallery-item__content>div {
																-webkit-transition-duration: var(--content-transition-duration);
																-o-transition-duration: var(--content-transition-duration);
																transition-duration: var(--content-transition-duration)
															}

															.elementor-gallery-item__content.elementor-gallery--sequenced-animation>div:nth-child(2) {
																-webkit-transition-delay: calc((var(--content-transition-delay) / 3));
																-o-transition-delay: calc((var(--content-transition-delay) / 3));
																transition-delay: calc((var(--content-transition-delay) / 3))
															}

															.elementor-gallery-item__content.elementor-gallery--sequenced-animation>div:nth-child(3) {
																-webkit-transition-delay: calc((var(--content-transition-delay) / 3) * 2);
																-o-transition-delay: calc((var(--content-transition-delay) / 3) * 2);
																transition-delay: calc((var(--content-transition-delay) / 3) * 2)
															}

															.elementor-gallery-item__content.elementor-gallery--sequenced-animation>div:nth-child(4) {
																-webkit-transition-delay: calc((var(--content-transition-delay) / 3) * 3);
																-o-transition-delay: calc((var(--content-transition-delay) / 3) * 3);
																transition-delay: calc((var(--content-transition-delay) / 3) * 3)
															}

															.elementor-gallery-item__description {
																color: var(--description-text-color, #fff);
																width: 100%
															}

															.elementor-gallery-item__title {
																color: var(--title-text-color, #fff);
																font-weight: 700;
																width: 100%
															}

															.elementor-gallery__titles-container {
																display: -webkit-box;
																display: -ms-flexbox;
																display: flex;
																-ms-flex-wrap: wrap;
																flex-wrap: wrap;
																-webkit-box-pack: var(--titles-container-justify-content, center);
																-ms-flex-pack: var(--titles-container-justify-content, center);
																justify-content: var(--titles-container-justify-content, center);
																margin-bottom: 20px
															}

															.elementor-gallery__titles-container:not(.e--pointer-framed) .elementor-item:after,
															.elementor-gallery__titles-container:not(.e--pointer-framed) .elementor-item:before {
																background-color: var(--galleries-pointer-bg-color-hover)
															}

															.elementor-gallery__titles-container:not(.e--pointer-framed) .elementor-item.elementor-item-active:after,
															.elementor-gallery__titles-container:not(.e--pointer-framed) .elementor-item.elementor-item-active:before {
																background-color: var(--galleries-pointer-bg-color-active)
															}

															.elementor-gallery__titles-container.e--pointer-framed .elementor-item:before {
																border-color: var(--galleries-pointer-bg-color-hover);
																border-width: var(--galleries-pointer-border-width)
															}

															.elementor-gallery__titles-container.e--pointer-framed .elementor-item:after {
																border-color: var(--galleries-pointer-bg-color-hover)
															}

															.elementor-gallery__titles-container.e--pointer-framed .elementor-item.elementor-item-active:after,
															.elementor-gallery__titles-container.e--pointer-framed .elementor-item.elementor-item-active:before {
																border-color: var(--galleries-pointer-bg-color-active)
															}

															.elementor-gallery__titles-container.e--pointer-framed.e--animation-draw .elementor-item:before {
																border-left-width: var(--galleries-pointer-border-width);
																border-bottom-width: var(--galleries-pointer-border-width);
																border-right-width: 0;
																border-top-width: 0
															}

															.elementor-gallery__titles-container.e--pointer-framed.e--animation-draw .elementor-item:after {
																border-left-width: 0;
																border-bottom-width: 0;
																border-right-width: var(--galleries-pointer-border-width);
																border-top-width: var(--galleries-pointer-border-width)
															}

															.elementor-gallery__titles-container.e--pointer-framed.e--animation-corners .elementor-item:before {
																border-left-width: var(--galleries-pointer-border-width);
																border-bottom-width: 0;
																border-right-width: 0;
																border-top-width: var(--galleries-pointer-border-width)
															}

															.elementor-gallery__titles-container.e--pointer-framed.e--animation-corners .elementor-item:after {
																border-left-width: 0;
																border-bottom-width: var(--galleries-pointer-border-width);
																border-right-width: var(--galleries-pointer-border-width);
																border-top-width: 0
															}

															.elementor-gallery__titles-container .e--pointer-double-line .elementor-item:after,
															.elementor-gallery__titles-container .e--pointer-double-line .elementor-item:before,
															.elementor-gallery__titles-container .e--pointer-overline .elementor-item:before,
															.elementor-gallery__titles-container .e--pointer-underline .elementor-item:after {
																height: var(--galleries-pointer-border-width)
															}

															.elementor-gallery-title {
																--space-between: 10px;
																cursor: pointer;
																color: #6d7882;
																font-weight: 500;
																position: relative;
																padding: 7px 14px;
																-webkit-transition: all .3s;
																-o-transition: all .3s;
																transition: all .3s
															}

															.elementor-gallery-title--active {
																color: #495157
															}

															.elementor-gallery-title:not(:last-child) {
																margin-right: var(--space-between)
															}

															.elementor-gallery-item__title+.elementor-gallery-item__description {
																margin-top: var(--description-margin-top)
															}

															.e-gallery-item.elementor-gallery-item {
																-webkit-transition-property: all;
																-o-transition-property: all;
																transition-property: all
															}

															.e-gallery-item.elementor-animated-content .elementor-animated-item--enter-from-bottom,
															.e-gallery-item.elementor-animated-content .elementor-animated-item--enter-from-left,
															.e-gallery-item.elementor-animated-content .elementor-animated-item--enter-from-right,
															.e-gallery-item.elementor-animated-content .elementor-animated-item--enter-from-top,
															.e-gallery-item:hover .elementor-gallery__item-overlay-bg,
															.e-gallery-item:hover .elementor-gallery__item-overlay-content,
															.e-gallery-item:hover .elementor-gallery__item-overlay-content__description,
															.e-gallery-item:hover .elementor-gallery__item-overlay-content__title {
																opacity: 1
															}

															a.elementor-item.elementor-gallery-title {
																color: var(--galleries-title-color-normal)
															}

															a.elementor-item.elementor-gallery-title.elementor-item-active,
															a.elementor-item.elementor-gallery-title.highlighted,
															a.elementor-item.elementor-gallery-title:focus,
															a.elementor-item.elementor-gallery-title:hover {
																color: var(--galleries-title-color-hover)
															}

															a.elementor-item.elementor-gallery-title.elementor-item-active {
																color: var(--gallery-title-color-active)
															}
														</style>
														<div class="elementor-gallery__container">
															<div class="e-gallery-item elementor-gallery-item">
																<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://www.monoapartments.com/wp-content/uploads/2021/09/image-39-1.jpg" data-width="700" data-height="500" alt=""></div>
															</div>
															<div class="e-gallery-item elementor-gallery-item">
																<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://www.monoapartments.com/wp-content/uploads/2021/09/image-38-1.jpg" data-width="554" data-height="316" alt=""></div>
															</div>
															<div class="e-gallery-item elementor-gallery-item">
																<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://www.monoapartments.com/wp-content/uploads/2021/09/image-43-1.jpg" data-width="554" data-height="418" alt=""></div>
															</div>
															<div class="e-gallery-item elementor-gallery-item">
																<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://www.monoapartments.com/wp-content/uploads/2021/09/image-23-1-1.jpg" data-width="558" data-height="332" alt=""></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-44f0583" data-id="44f0583" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-c5e4e06 elementor-widget elementor-widget-heading" data-id="c5e4e06" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h4 class="elementor-heading-title elementor-size-default">A better way to stay</h4>
													</div>
												</div>
												<div class="elementor-element elementor-element-1e984ed elementor-widget elementor-widget-text-editor" data-id="1e984ed" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<p>Our lease term is flexible to suit your preference and need. We will help you to find your preferred accommodation while you are staying in Melbourne. Get in touch with us to discuss about your needs.</p>
														<ul>
															<li>Full furnished/unfurnished</li>
															<li>Great view from apartment</li>
															<li>Cleanliness guaranteed</li>
															<li>Perfect location that suits your preference</li>
															<li>Flexible tenancy contract</li>
														</ul>
													</div>
												</div>
												<div class="elementor-element elementor-element-2df05fe elementor-align-left elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-button" data-id="2df05fe" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">
															<a href="https://www.monoapartments.com/accomodation/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
																<span class="elementor-button-content-wrapper">
																	<span class="elementor-button-text">Learn more</span>
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="elementor-element elementor-element-c24273e elementor-align-left elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="c24273e" data-element_type="widget" data-widget_type="button.default">
													<div class="elementor-widget-container">
														<div class="elementor-button-wrapper">
															<a href="https://form.typeform.com/to/Ju4RvuSb" class="elementor-button-link elementor-button elementor-size-sm" role="button">
																<span class="elementor-button-content-wrapper">
																	<span class="elementor-button-text">Get in touch</span>
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-aff3d35 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="aff3d35" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ebbc1e2" data-id="ebbc1e2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-1f157ed elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default" data-id="1f157ed" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cc5ae14" data-id="cc5ae14" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-41fe70b elementor-widget elementor-widget-heading" data-id="41fe70b" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h4 class="elementor-heading-title elementor-size-default">Easy step to find your new place to stay</h4>
													</div>
												</div>
												<div class="elementor-element elementor-element-32e72c9 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="32e72c9" data-element_type="widget" data-widget_type="divider.default">
													<div class="elementor-widget-container">
														<style>
															/*! elementor - v3.6.4 - 13-04-2022 */
															.elementor-widget-divider {
																--divider-border-style: none;
																--divider-border-width: 1px;
																--divider-color: #2c2c2c;
																--divider-icon-size: 20px;
																--divider-element-spacing: 10px;
																--divider-pattern-height: 24px;
																--divider-pattern-size: 20px;
																--divider-pattern-url: none;
																--divider-pattern-repeat: repeat-x
															}

															.elementor-widget-divider .elementor-divider {
																display: -webkit-box;
																display: -ms-flexbox;
																display: flex
															}

															.elementor-widget-divider .elementor-divider__text {
																font-size: 15px;
																line-height: 1;
																max-width: 95%
															}

															.elementor-widget-divider .elementor-divider__element {
																margin: 0 var(--divider-element-spacing);
																-ms-flex-negative: 0;
																flex-shrink: 0
															}

															.elementor-widget-divider .elementor-icon {
																font-size: var(--divider-icon-size)
															}

															.elementor-widget-divider .elementor-divider-separator {
																display: -webkit-box;
																display: -ms-flexbox;
																display: flex;
																margin: 0;
																direction: ltr
															}

															.elementor-widget-divider--view-line_icon .elementor-divider-separator,
															.elementor-widget-divider--view-line_text .elementor-divider-separator {
																-webkit-box-align: center;
																-ms-flex-align: center;
																align-items: center
															}

															.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
															.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
															.elementor-widget-divider--view-line_text .elementor-divider-separator:after,
															.elementor-widget-divider--view-line_text .elementor-divider-separator:before {
																display: block;
																content: "";
																border-bottom: 0;
																-webkit-box-flex: 1;
																-ms-flex-positive: 1;
																flex-grow: 1;
																border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
															}

															.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
																-webkit-box-flex: 0;
																-ms-flex-positive: 0;
																flex-grow: 0;
																-ms-flex-negative: 100;
																flex-shrink: 100
															}

															.elementor-widget-divider--element-align-left .elementor-divider-separator:before {
																content: none
															}

															.elementor-widget-divider--element-align-left .elementor-divider__element {
																margin-left: 0
															}

															.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
																-webkit-box-flex: 0;
																-ms-flex-positive: 0;
																flex-grow: 0;
																-ms-flex-negative: 100;
																flex-shrink: 100
															}

															.elementor-widget-divider--element-align-right .elementor-divider-separator:after {
																content: none
															}

															.elementor-widget-divider--element-align-right .elementor-divider__element {
																margin-right: 0
															}

															.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
																border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
															}

															.elementor-widget-divider--separator-type-pattern {
																--divider-border-style: none
															}

															.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
															.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
															.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
															.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
																width: 100%;
																min-height: var(--divider-pattern-height);
																-webkit-mask-size: var(--divider-pattern-size) 100%;
																mask-size: var(--divider-pattern-size) 100%;
																-webkit-mask-repeat: var(--divider-pattern-repeat);
																mask-repeat: var(--divider-pattern-repeat);
																background-color: var(--divider-color);
																-webkit-mask-image: var(--divider-pattern-url);
																mask-image: var(--divider-pattern-url)
															}

															.elementor-widget-divider--no-spacing {
																--divider-pattern-size: auto
															}

															.elementor-widget-divider--bg-round {
																--divider-pattern-repeat: round
															}

															.rtl .elementor-widget-divider .elementor-divider__text {
																direction: rtl
															}
														</style>
														<div class="elementor-divider">
															<span class="elementor-divider-separator">
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-15c9d38" data-id="15c9d38" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-c201acc elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id="c201acc" data-element_type="widget" data-settings="{&quot;autoplay_speed&quot;:9000,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
													<div class="elementor-widget-container">
														<style>
															/*! elementor-pro - v3.5.2 - 28-11-2021 */
															.elementor-slides .swiper-slide-bg {
																-webkit-background-size: cover;
																background-size: cover;
																background-position: 50%;
																background-repeat: no-repeat;
																min-width: 100%;
																min-height: 100%
															}

															.elementor-slides .swiper-slide-inner {
																background-repeat: no-repeat;
																background-position: 50%;
																position: absolute;
																top: 0;
																left: 0;
																bottom: 0;
																right: 0;
																padding: 50px;
																margin: auto
															}

															.elementor-slides .swiper-slide-inner,
															.elementor-slides .swiper-slide-inner:hover {
																color: #fff;
																display: -webkit-box;
																display: -ms-flexbox;
																display: flex
															}

															.elementor-slides .swiper-slide-inner .elementor-background-overlay {
																position: absolute;
																z-index: 0;
																top: 0;
																bottom: 0;
																left: 0;
																right: 0
															}

															.elementor-slides .swiper-slide-inner .elementor-slide-content {
																position: relative;
																z-index: 1;
																width: 100%
															}

															.elementor-slides .swiper-slide-inner .elementor-slide-heading {
																font-size: 35px;
																font-weight: 700;
																line-height: 1
															}

															.elementor-slides .swiper-slide-inner .elementor-slide-description {
																font-size: 17px;
																line-height: 1.4
															}

															.elementor-slides .swiper-slide-inner .elementor-slide-description:not(:last-child),
															.elementor-slides .swiper-slide-inner .elementor-slide-heading:not(:last-child) {
																margin-bottom: 30px
															}

															.elementor-slides .swiper-slide-inner .elementor-slide-button {
																border: 2px solid #fff;
																color: #fff;
																background: transparent;
																display: inline-block
															}

															.elementor-slides .swiper-slide-inner .elementor-slide-button,
															.elementor-slides .swiper-slide-inner .elementor-slide-button:hover {
																background: transparent;
																color: inherit;
																text-decoration: none
															}

															.elementor--v-position-top .swiper-slide-inner {
																-webkit-box-align: start;
																-ms-flex-align: start;
																align-items: flex-start
															}

															.elementor--v-position-bottom .swiper-slide-inner {
																-webkit-box-align: end;
																-ms-flex-align: end;
																align-items: flex-end
															}

															.elementor--v-position-middle .swiper-slide-inner {
																-webkit-box-align: center;
																-ms-flex-align: center;
																align-items: center
															}

															.elementor--h-position-left .swiper-slide-inner {
																-webkit-box-pack: start;
																-ms-flex-pack: start;
																justify-content: flex-start
															}

															.elementor--h-position-right .swiper-slide-inner {
																-webkit-box-pack: end;
																-ms-flex-pack: end;
																justify-content: flex-end
															}

															.elementor--h-position-center .swiper-slide-inner {
																-webkit-box-pack: center;
																-ms-flex-pack: center;
																justify-content: center
															}

															body.rtl .elementor-widget-slides .elementor-swiper-button-next {
																left: 10px;
																right: auto
															}

															body.rtl .elementor-widget-slides .elementor-swiper-button-prev {
																right: 10px;
																left: auto
															}

															.elementor-slides-wrapper div:not(.swiper-slide)>.swiper-slide-inner {
																display: none
															}

															@media (max-width:767px) {
																.elementor-slides .swiper-slide-inner {
																	padding: 30px
																}

																.elementor-slides .swiper-slide-inner .elementor-slide-heading {
																	font-size: 23px;
																	line-height: 1;
																	margin-bottom: 15px
																}

																.elementor-slides .swiper-slide-inner .elementor-slide-description {
																	font-size: 13px;
																	line-height: 1.4;
																	margin-bottom: 15px
																}
															}
														</style>
														<div class="elementor-swiper">
															<div class="elementor-slides-wrapper elementor-main-swiper swiper-container" dir="ltr" data-animation="">
																<div class="swiper-wrapper elementor-slides">
																	<div class="elementor-repeater-item-95dec6c swiper-slide">
																		<div class="swiper-slide-bg"></div>
																		<div class="swiper-slide-inner">
																			<div class="swiper-slide-contents">
																				<div class="elementor-slide-heading"><img decoding="async" src="https://www.staging10.monoapartments.com/wp-content/uploads/2021/09/image-24.svg"></div>
																				<div class="elementor-slide-description"><b style="font-size:18px">Your Preference</b><br />
																					Describe to us your living preferences, easily online </div>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-repeater-item-b428ae0 swiper-slide">
																		<div class="swiper-slide-bg"></div>
																		<div class="swiper-slide-inner">
																			<div class="swiper-slide-contents">
																				<div class="elementor-slide-heading"><img decoding="async" src="https://www.staging10.monoapartments.com/wp-content/uploads/2021/09/image-25.svg"></div>
																				<div class="elementor-slide-description"><b style="font-size:18px">Our team Organize </b><br />
																					Based on your preferences, our rental consultant will find give a tailor-made recommendation for your accommodation options.</div>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-repeater-item-f149f6c swiper-slide">
																		<div class="swiper-slide-bg"></div>
																		<div class="swiper-slide-inner">
																			<div class="swiper-slide-contents">
																				<div class="elementor-slide-heading"><img decoding="async" src="https://www.staging10.monoapartments.com/wp-content/uploads/2021/09/image-25-1.svg"></div>
																				<div class="elementor-slide-description"><b style="font-size:18px">Get ready to move in</b><br />
																					Found the right ones? pack your suit case and organize your move in arrangement.
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-pagination"></div>
																<div class="elementor-swiper-button elementor-swiper-button-prev">
																	<i aria-hidden="true" class="eicon-chevron-left"></i> <span class="elementor-screen-only">Previous</span>
																</div>
																<div class="elementor-swiper-button elementor-swiper-button-next">
																	<i aria-hidden="true" class="eicon-chevron-right"></i> <span class="elementor-screen-only">Next</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-f911cb8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f911cb8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1915388" data-id="1915388" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-d02f651 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d02f651" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6fa9e07" data-id="6fa9e07" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-7df6736 elementor-widget elementor-widget-heading" data-id="7df6736" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h4 class="elementor-heading-title elementor-size-default">Find your next home with us</h4>
													</div>
												</div>
												<div class="elementor-element elementor-element-01f2cc4 elementor-widget elementor-widget-text-editor" data-id="01f2cc4" data-element_type="widget" data-widget_type="text-editor.default">
													<div class="elementor-widget-container">
														<p>We&#8217;ve got it done for you &#8211; with care and details to curate your living options. <br />Contact our team and explore variety of furnished rooms, modern houses without living your seat.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-9099cb2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9099cb2" data-element_type="section">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-9ff5cf5" data-id="9ff5cf5" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-7e9393b elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="7e9393b" data-element_type="widget" data-widget_type="icon-box.default">
													<div class="elementor-widget-container">
														<link rel="stylesheet" href="https://www.monoapartments.com/wp-content/uploads/elementor/css/custom-widget-icon-box.min.css?ver=1655105217">
														<div class="elementor-icon-box-wrapper">
															<div class="elementor-icon-box-icon">
																<span class="elementor-icon elementor-animation-">
																	<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M55 75C60.3043 75 65.3914 72.8929 69.1421 69.1421C72.8929 65.3914 75 60.3043 75 55C75 49.6957 72.8929 44.6086 69.1421 40.8579C65.3914 37.1071 60.3043 35 55 35C49.6957 35 44.6086 37.1071 40.8579 40.8579C37.1071 44.6086 35 49.6957 35 55C35 60.3043 37.1071 65.3914 40.8579 69.1421C44.6086 72.8929 49.6957 75 55 75ZM80 55C80 61.6304 77.3661 67.9893 72.6777 72.6777C67.9893 77.3661 61.6304 80 55 80C48.3696 80 42.0107 77.3661 37.3223 72.6777C32.6339 67.9893 30 61.6304 30 55C30 48.3696 32.6339 42.0107 37.3223 37.3223C42.0107 32.6339 48.3696 30 55 30C61.6304 30 67.9893 32.6339 72.6777 37.3223C77.3661 42.0107 80 48.3696 80 55Z" fill="#A38365"></path>
																		<path d="M47.1901 59.72C47.4251 62.7 49.7801 65.02 54.0051 65.3V67.5H55.8801V65.285C60.255 64.98 62.8101 62.64 62.8101 59.25C62.8101 56.16 60.8601 54.57 57.3601 53.75L55.8801 53.4V47.4C57.7601 47.615 58.9501 48.64 59.2351 50.06H62.5251C62.2901 47.185 59.825 44.94 55.8801 44.695V42.5H54.0051V44.75C50.2701 45.115 47.7301 47.36 47.7301 50.54C47.7301 53.35 49.6201 55.14 52.7651 55.87L54.0051 56.175V62.535C52.0851 62.245 50.8101 61.185 50.5251 59.72H47.1851H47.1901ZM53.9901 52.95C52.1451 52.525 51.1451 51.65 51.1451 50.34C51.1451 48.87 52.2251 47.77 54.0051 47.45V52.95H53.9901ZM56.1501 56.68C58.3951 57.2 59.4251 58.04 59.4251 59.525C59.4251 61.22 58.14 62.38 55.8801 62.595V56.62L56.1501 56.68Z" fill="#A38365"></path>
																		<path d="M5 0C3.67392 0 2.40215 0.526784 1.46447 1.46447C0.526784 2.40215 0 3.67392 0 5L0 45C0 46.3261 0.526784 47.5979 1.46447 48.5355C2.40215 49.4732 3.67392 50 5 50H25.415C25.705 48.28 26.14 46.61 26.705 45H15C15 42.3478 13.9464 39.8043 12.0711 37.9289C10.1957 36.0536 7.65216 35 5 35V15C7.65216 15 10.1957 13.9464 12.0711 12.0711C13.9464 10.1957 15 7.65216 15 5H65C65 7.65216 66.0536 10.1957 67.9289 12.0711C69.8043 13.9464 72.3478 15 75 15V32.64C76.9 34.34 78.585 36.28 80 38.41V5C80 3.67392 79.4732 2.40215 78.5355 1.46447C77.5979 0.526784 76.3261 0 75 0L5 0Z" fill="#A38365"></path>
																		<path d="M49.99 25.4152L50 25.0002C49.999 23.2781 49.5533 21.5855 48.7061 20.0863C47.8589 18.5871 46.6388 17.332 45.1642 16.4427C43.6895 15.5535 42.0102 15.06 40.2889 15.0103C38.5676 14.9605 36.8626 15.3561 35.339 16.1588C33.8155 16.9614 32.525 18.1439 31.5926 19.5917C30.6602 21.0394 30.1175 22.7035 30.017 24.4226C29.9166 26.1417 30.2617 27.8576 31.0191 29.4042C31.7764 30.9507 32.9203 32.2755 34.34 33.2502C38.6588 29.1365 44.1088 26.408 49.99 25.4152Z" fill="#A38365"></path>
																	</svg> </span>
															</div>
															<div class="elementor-icon-box-content">
																<h3 class="elementor-icon-box-title">
																	<span>
																		Real value </span>
																</h3>
																<p class="elementor-icon-box-description">
																	We’re cleaner, more reliable, and affordable. Find a home in the location you want with the budget you have in mind. </p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-578c26f" data-id="578c26f" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-3631bef elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="3631bef" data-element_type="widget" data-widget_type="icon-box.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-box-wrapper">
															<div class="elementor-icon-box-icon">
																<span class="elementor-icon elementor-animation-">
																	<svg xmlns="http://www.w3.org/2000/svg" width="60" height="75" viewBox="0 0 60 75" fill="none">
																		<path d="M30 5C23.3696 5 17.0107 7.63392 12.3223 12.3223C7.63392 17.0107 5 23.3696 5 30V35H10C11.3261 35 12.5979 35.5268 13.5355 36.4645C14.4732 37.4021 15 38.6739 15 40V55C15 56.3261 14.4732 57.5979 13.5355 58.5355C12.5979 59.4732 11.3261 60 10 60H5C3.67392 60 2.40215 59.4732 1.46447 58.5355C0.526784 57.5979 0 56.3261 0 55V30C-5.87054e-08 26.0603 0.775973 22.1593 2.28361 18.5195C3.79125 14.8797 6.00104 11.5726 8.7868 8.7868C11.5726 6.00104 14.8797 3.79126 18.5195 2.28361C22.1593 0.775973 26.0603 0 30 0C33.9397 0 37.8407 0.775973 41.4805 2.28361C45.1203 3.79126 48.4274 6.00104 51.2132 8.7868C53.999 11.5726 56.2087 14.8797 57.7164 18.5195C59.224 22.1593 60 26.0603 60 30V60C60 63.3152 58.683 66.4946 56.3388 68.8388C53.9946 71.183 50.8152 72.5 47.5 72.5H36.83C36.3912 73.2601 35.76 73.8913 34.9999 74.3301C34.2399 74.7689 33.3777 75 32.5 75H27.5C26.1739 75 24.9021 74.4732 23.9645 73.5355C23.0268 72.5979 22.5 71.3261 22.5 70C22.5 68.6739 23.0268 67.4021 23.9645 66.4645C24.9021 65.5268 26.1739 65 27.5 65H32.5C33.3777 65 34.2399 65.2311 34.9999 65.6699C35.76 66.1087 36.3912 66.7399 36.83 67.5H47.5C49.4891 67.5 51.3968 66.7098 52.8033 65.3033C54.2098 63.8968 55 61.9891 55 60H50C48.6739 60 47.4021 59.4732 46.4645 58.5355C45.5268 57.5979 45 56.3261 45 55V40C45 38.6739 45.5268 37.4021 46.4645 36.4645C47.4021 35.5268 48.6739 35 50 35H55V30C55 26.717 54.3534 23.4661 53.097 20.4329C51.8406 17.3998 49.9991 14.6438 47.6777 12.3223C45.3562 10.0009 42.6002 8.15938 39.5671 6.90301C36.5339 5.64664 33.283 5 30 5Z" fill="#A38365"></path>
																	</svg> </span>
															</div>
															<div class="elementor-icon-box-content">
																<h3 class="elementor-icon-box-title">
																	<span>
																		Free consultation </span>
																</h3>
																<p class="elementor-icon-box-description">
																	Contact us to discuss your needs & preferences for your accommodation options. </p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-827f26c" data-id="827f26c" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-03b04b3 elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="03b04b3" data-element_type="widget" data-widget_type="icon-box.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-box-wrapper">
															<div class="elementor-icon-box-icon">
																<span class="elementor-icon elementor-animation-">
																	<svg xmlns="http://www.w3.org/2000/svg" width="66" height="75" viewBox="0 0 66 75" fill="none">
																		<path d="M60.968 75H4.71802C3.44849 75 2.34985 74.5361 1.42212 73.6084C0.494385 72.6807 0.0305176 71.582 0.0305176 70.3125V23.4375C0.0305176 22.168 0.494385 21.0693 1.42212 20.1416C2.34985 19.2139 3.44849 18.75 4.71802 18.75H60.968C62.2864 18.75 63.3972 19.2139 64.3005 20.1416C65.2039 21.0693 65.6555 22.168 65.6555 23.4375V70.3125C65.6555 71.6309 65.2039 72.7417 64.3005 73.645C63.3972 74.5483 62.2864 75 60.968 75ZM32.843 28.125C27.6672 28.125 23.2483 29.9561 19.5862 33.6182C15.9241 37.2803 14.093 41.6992 14.093 46.875C14.093 52.0508 15.9241 56.4697 19.5862 60.1318C23.2483 63.7939 27.6672 65.625 32.843 65.625C38.0188 65.625 42.4377 63.7939 46.0999 60.1318C49.762 56.4697 51.593 52.0508 51.593 46.875C51.593 41.6992 49.762 37.2803 46.0999 33.6182C42.4377 29.9561 38.0188 28.125 32.843 28.125ZM32.843 60.9375C28.9368 60.9375 25.6165 59.5703 22.8821 56.8359C20.1477 54.1016 18.7805 50.7812 18.7805 46.875C18.7805 42.9688 20.1477 39.6484 22.8821 36.9141C25.6165 34.1797 28.9368 32.8125 32.843 32.8125C36.7493 32.8125 40.0696 34.1797 42.804 36.9141C45.5383 39.6484 46.9055 42.9688 46.9055 46.875C46.9055 50.7812 45.5383 54.1016 42.804 56.8359C40.0696 59.5703 36.7493 60.9375 32.843 60.9375ZM60.968 14.0625H4.71802C3.44849 14.0625 2.34985 13.5986 1.42212 12.6709C0.494385 11.7432 0.0305176 10.6445 0.0305176 9.375V4.6875C0.0305176 3.41797 0.494385 2.31934 1.42212 1.3916C2.34985 0.463867 3.44849 0 4.71802 0H60.968C62.2864 0 63.3972 0.463867 64.3005 1.3916C65.2039 2.31934 65.6555 3.41797 65.6555 4.6875V9.375C65.6555 10.6934 65.2039 11.8042 64.3005 12.7075C63.3972 13.6108 62.2864 14.0625 60.968 14.0625ZM16.4368 4.6875H11.7493C11.1145 4.6875 10.5652 4.91943 10.1013 5.3833C9.63745 5.84717 9.40552 6.39648 9.40552 7.03125C9.40552 7.66602 9.63745 8.21533 10.1013 8.6792C10.5652 9.14307 11.1145 9.375 11.7493 9.375H16.4368C17.0715 9.375 17.6209 9.14307 18.0847 8.6792C18.5486 8.21533 18.7805 7.66602 18.7805 7.03125C18.7805 6.39648 18.5486 5.84717 18.0847 5.3833C17.6209 4.91943 17.0715 4.6875 16.4368 4.6875ZM25.8118 4.6875C25.177 4.6875 24.6277 4.91943 24.1638 5.3833C23.7 5.84717 23.468 6.39648 23.468 7.03125C23.468 7.66602 23.7 8.21533 24.1638 8.6792C24.6277 9.14307 25.177 9.375 25.8118 9.375C26.4465 9.375 26.9959 9.14307 27.4597 8.6792C27.9236 8.21533 28.1555 7.66602 28.1555 7.03125C28.1555 6.39648 27.9236 5.84717 27.4597 5.3833C26.9959 4.91943 26.4465 4.6875 25.8118 4.6875ZM35.1868 4.6875C34.552 4.6875 34.0027 4.91943 33.5388 5.3833C33.075 5.84717 32.843 6.39648 32.843 7.03125C32.843 7.66602 33.075 8.21533 33.5388 8.6792C34.0027 9.14307 34.552 9.375 35.1868 9.375C35.8215 9.375 36.3709 9.14307 36.8347 8.6792C37.2986 8.21533 37.5305 7.66602 37.5305 7.03125C37.5305 6.39648 37.2986 5.84717 36.8347 5.3833C36.3709 4.91943 35.8215 4.6875 35.1868 4.6875Z" fill="#A38365"></path>
																	</svg> </span>
															</div>
															<div class="elementor-icon-box-content">
																<h3 class="elementor-icon-box-title">
																	<span>
																		Just bring yourself </span>
																</h3>
																<p class="elementor-icon-box-description">
																	Homes are outfitted with kitchen basics (dishes to coffee makers). Vacuum cleaners. Washers & dryers. </p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-1c52919" data-id="1c52919" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-4b8a4f6 elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="4b8a4f6" data-element_type="widget" data-widget_type="icon-box.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-box-wrapper">
															<div class="elementor-icon-box-icon">
																<span class="elementor-icon elementor-animation-">
																	<svg xmlns="http://www.w3.org/2000/svg" width="103" height="71" viewBox="0 0 103 71" fill="none">
																		<path d="M25.6001 62.4H22.8751L21.3501 62.375L19.6251 62.3L18.0251 62.175L16.3751 61.95L14.9751 61.6L13.6751 61.15L12.8001 60.55V67.8C12.8001 68.7666 13.1084 69.5416 13.7251 70.125C14.3417 70.7083 15.1001 71 16.0001 71H22.4001C23.3001 71 24.0584 70.7083 24.6751 70.125C25.2917 69.5416 25.6001 68.7666 25.6001 67.8V62.4ZM76.8001 62.4H79.5251L81.0501 62.375L82.7751 62.3L84.3751 62.175L86.0251 61.95L87.4251 61.6L88.7251 61.15L89.6001 60.55V67.8C89.6001 68.7666 89.2918 69.5416 88.6751 70.125C88.0585 70.7083 87.3001 71 86.4001 71H80.0001C79.1001 71 78.3418 70.7083 77.7251 70.125C77.1085 69.5416 76.8001 68.7666 76.8001 67.8V62.4ZM9.65005 19.75C6.38338 19.75 3.95005 20.4666 2.35005 21.9C0.750045 23.3333 -0.0332895 25.3 4.38468e-05 27.8C0.0333772 30.6666 0.641711 32.85 1.82505 34.35C3.00838 35.85 4.53338 36.6 6.40005 36.6C6.40005 38.2 6.41672 39.5166 6.45005 40.55C6.48338 41.5833 6.55005 42.7916 6.65005 44.175C6.75005 45.5583 6.90838 46.7 7.12505 47.6C7.34172 48.5 7.63338 49.4916 8.00005 50.575C8.36672 51.6583 8.82505 52.5333 9.37505 53.2C9.92505 53.8666 10.6001 54.55 11.4001 55.25C12.2001 55.95 13.1167 56.4916 14.1501 56.875C15.1834 57.2583 16.3917 57.575 17.7751 57.825C19.1584 58.075 20.7001 58.2 22.4001 58.2H80.0001C81.7001 58.2 83.2418 58.075 84.6251 57.825C86.0085 57.575 87.2168 57.2583 88.2501 56.875C89.2835 56.4916 90.2001 55.95 91.0001 55.25C91.8001 54.55 92.4751 53.8666 93.0251 53.2C93.5751 52.5333 94.0335 51.6583 94.4001 50.575C94.7668 49.4916 95.0585 48.5 95.2751 47.6C95.4918 46.7 95.6501 45.5583 95.7501 44.175C95.8501 42.7916 95.9168 41.5833 95.9501 40.55C95.9835 39.5166 96.0001 38.2 96.0001 36.6C97.8668 36.6 99.3918 35.85 100.575 34.35C101.758 32.85 102.367 30.6666 102.4 27.8C102.433 25.3 101.667 23.3333 100.1 21.9C98.5335 20.4666 96.1168 19.75 92.8501 19.75C91.2168 19.75 89.6835 20.3333 88.2501 21.5C86.8168 22.6666 85.5751 24.225 84.5251 26.175C83.4751 28.125 82.5835 30.175 81.8501 32.325C81.1168 34.475 80.5168 36.7166 80.0501 39.05C71.1834 34.6166 61.5751 32.4 51.2251 32.4C40.8751 32.4 31.2667 34.6166 22.4001 39.05C21.9334 36.6833 21.3334 34.4333 20.6001 32.3C19.8667 30.1666 18.9834 28.125 17.9501 26.175C16.9167 24.225 15.6834 22.6666 14.2501 21.5C12.8167 20.3333 11.2834 19.75 9.65005 19.75ZM25.6001 0.599976C23.4667 0.599976 21.6167 0.724976 20.0501 0.974976C18.4834 1.22498 17.1417 1.64998 16.0251 2.24998C14.9084 2.84998 13.9917 3.51664 13.2751 4.24998C12.5584 4.98331 11.9584 5.94998 11.4751 7.14998C10.9917 8.34998 10.6334 9.54998 10.4001 10.75C10.1667 11.95 9.95005 13.45 9.75005 15.25C11.0167 15.4166 12.1834 15.6833 13.2501 16.05C14.3167 16.4166 15.2334 16.8083 16.0001 17.225C16.7667 17.6416 17.5084 18.25 18.2251 19.05C18.9417 19.85 19.5084 20.525 19.9251 21.075C20.3417 21.625 20.8167 22.475 21.3501 23.625C21.8834 24.775 22.2751 25.675 22.5251 26.325C22.7751 26.975 23.1584 28.0166 23.6751 29.45C24.1917 30.8833 24.5834 31.95 24.8501 32.65C32.9834 29.5833 41.7751 28.05 51.2251 28.05C60.6751 28.05 69.4668 29.5833 77.6001 32.65C77.8668 31.9833 78.1918 31.1166 78.5751 30.05C78.9585 28.9833 79.2668 28.1416 79.5001 27.525C79.7335 26.9083 80.0335 26.15 80.4001 25.25C80.7668 24.35 81.1001 23.625 81.4001 23.075C81.7001 22.525 82.0835 21.8833 82.5501 21.15C83.0168 20.4166 83.4751 19.825 83.9251 19.375C84.3751 18.925 84.9085 18.4416 85.5251 17.925C86.1418 17.4083 86.8001 16.9916 87.5001 16.675C88.2001 16.3583 88.9918 16.075 89.8751 15.825C90.7585 15.575 91.7168 15.3833 92.7501 15.25C92.5168 13.1166 92.2335 11.35 91.9001 9.94998C91.5668 8.54998 91.0501 7.19998 90.3501 5.89998C89.6501 4.59998 88.7418 3.59998 87.6251 2.89998C86.5085 2.19998 85.0585 1.64164 83.2751 1.22498C81.4918 0.808309 79.3335 0.599976 76.8001 0.599976H25.6001Z" fill="#A38365"></path>
																	</svg> </span>
															</div>
															<div class="elementor-icon-box-content">
																<h3 class="elementor-icon-box-title">
																	<span>
																		Stylish comfort </span>
																</h3>
																<p class="elementor-icon-box-description">
																	You’ll feel it in the couch, mattress, & towels. You’ll see it in the art, décor, and layout. </p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-a44de71" data-id="a44de71" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-0fd3870 elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="0fd3870" data-element_type="widget" data-widget_type="icon-box.default">
													<div class="elementor-widget-container">
														<div class="elementor-icon-box-wrapper">
															<div class="elementor-icon-box-icon">
																<span class="elementor-icon elementor-animation-">
																	<svg xmlns="http://www.w3.org/2000/svg" width="92" height="55" viewBox="0 0 92 55" fill="none">
																		<path d="M8.49996 0.166687C3.87496 0.166687 0.166626 3.87502 0.166626 8.50002V41.8333H8.49996C8.49996 45.1486 9.81692 48.328 12.1611 50.6722C14.5053 53.0164 17.6848 54.3333 21 54.3333C24.3152 54.3333 27.4946 53.0164 29.8388 50.6722C32.183 48.328 33.5 45.1486 33.5 41.8333H58.5C58.5 45.1486 59.8169 48.328 62.1611 50.6722C64.5053 53.0164 67.6848 54.3333 71 54.3333C74.3152 54.3333 77.4946 53.0164 79.8388 50.6722C82.183 48.328 83.5 45.1486 83.5 41.8333H91.8333V25.1667C91.8333 20.5417 88.125 16.8334 83.5 16.8334L71 0.166687H8.49996ZM58.5 6.41669H68.9166L77.0833 16.8334H58.5V6.41669ZM21 35.5833C22.6576 35.5833 24.2473 36.2418 25.4194 37.4139C26.5915 38.586 27.25 40.1757 27.25 41.8333C27.25 43.491 26.5915 45.0807 25.4194 46.2528C24.2473 47.4249 22.6576 48.0833 21 48.0833C19.3424 48.0833 17.7526 47.4249 16.5805 46.2528C15.4084 45.0807 14.75 43.491 14.75 41.8333C14.75 40.1757 15.4084 38.586 16.5805 37.4139C17.7526 36.2418 19.3424 35.5833 21 35.5833ZM71 35.5833C72.6576 35.5833 74.2473 36.2418 75.4194 37.4139C76.5915 38.586 77.25 40.1757 77.25 41.8333C77.25 43.491 76.5915 45.0807 75.4194 46.2528C74.2473 47.4249 72.6576 48.0833 71 48.0833C69.3424 48.0833 67.7526 47.4249 66.5805 46.2528C65.4084 45.0807 64.75 43.491 64.75 41.8333C64.75 40.1757 65.4084 38.586 66.5805 37.4139C67.7526 36.2418 69.3424 35.5833 71 35.5833Z" fill="#A38365"></path>
																	</svg> </span>
															</div>
															<div class="elementor-icon-box-content">
																<h3 class="elementor-icon-box-title">
																	<span>
																		More than just a place </span>
																</h3>
																<p class="elementor-icon-box-description">
																	Our rental consultant will help with other things from moving up to organizing specific amenities up to your preferences. </p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5451696 elementor-hidden-desktop elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5451696" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7a21134" data-id="7a21134" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-4d8d149 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4d8d149" data-element_type="section" id="home-review">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1cac065" data-id="1cac065" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-2e21b22 elementor-widget elementor-widget-heading" data-id="2e21b22" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h4 class="elementor-heading-title elementor-size-default">What our customer said</h4>
													</div>
												</div>
												<div class="elementor-element elementor-element-72954ab elementor-arrows-yes elementor--star-style-star_fontawesome elementor-widget elementor-widget-reviews" data-id="72954ab" data-element_type="widget" id="customer-said" data-settings="{&quot;slides_per_view&quot;:&quot;2&quot;,&quot;slides_to_scroll&quot;:&quot;2&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:17,&quot;sizes&quot;:[]},&quot;show_arrows&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;space_between_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}" data-widget_type="reviews.default">
													<div class="elementor-widget-container">
														<style>
															/*! elementor - v3.6.4 - 13-04-2022 */
															.elementor-star-rating {
																color: #ccd6df;
																font-family: eicons;
																display: inline-block
															}

															.elementor-star-rating i {
																display: inline-block;
																position: relative;
																font-style: normal;
																cursor: default
															}

															.elementor-star-rating i:before {
																content: "\e934";
																display: block;
																font-size: inherit;
																font-family: inherit;
																position: absolute;
																overflow: hidden;
																color: #f0ad4e;
																top: 0;
																left: 0
															}

															.elementor-star-rating .elementor-star-empty:before {
																content: none
															}

															.elementor-star-rating .elementor-star-1:before {
																width: 10%
															}

															.elementor-star-rating .elementor-star-2:before {
																width: 20%
															}

															.elementor-star-rating .elementor-star-3:before {
																width: 30%
															}

															.elementor-star-rating .elementor-star-4:before {
																width: 40%
															}

															.elementor-star-rating .elementor-star-5:before {
																width: 50%
															}

															.elementor-star-rating .elementor-star-6:before {
																width: 60%
															}

															.elementor-star-rating .elementor-star-7:before {
																width: 70%
															}

															.elementor-star-rating .elementor-star-8:before {
																width: 80%
															}

															.elementor-star-rating .elementor-star-9:before {
																width: 90%
															}

															.elementor-star-rating__wrapper {
																display: -webkit-box;
																display: -ms-flexbox;
																display: flex;
																-webkit-box-align: center;
																-ms-flex-align: center;
																align-items: center
															}

															.elementor-star-rating__title {
																margin-right: 10px
															}

															.elementor-star-rating--align-right .elementor-star-rating__wrapper {
																text-align: right;
																-webkit-box-pack: end;
																-ms-flex-pack: end;
																justify-content: flex-end
															}

															.elementor-star-rating--align-left .elementor-star-rating__wrapper {
																text-align: left;
																-webkit-box-pack: start;
																-ms-flex-pack: start;
																justify-content: flex-start
															}

															.elementor-star-rating--align-center .elementor-star-rating__wrapper {
																text-align: center;
																-webkit-box-pack: center;
																-ms-flex-pack: center;
																justify-content: center
															}

															.elementor-star-rating--align-justify .elementor-star-rating__title {
																margin-right: auto
															}

															@media (max-width:1024px) {
																.elementor-star-rating-tablet--align-right .elementor-star-rating__wrapper {
																	text-align: right;
																	-webkit-box-pack: end;
																	-ms-flex-pack: end;
																	justify-content: flex-end
																}

																.elementor-star-rating-tablet--align-left .elementor-star-rating__wrapper {
																	text-align: left;
																	-webkit-box-pack: start;
																	-ms-flex-pack: start;
																	justify-content: flex-start
																}

																.elementor-star-rating-tablet--align-center .elementor-star-rating__wrapper {
																	text-align: center;
																	-webkit-box-pack: center;
																	-ms-flex-pack: center;
																	justify-content: center
																}

																.elementor-star-rating-tablet--align-justify .elementor-star-rating__title {
																	margin-right: auto
																}
															}

															@media (max-width:767px) {
																.elementor-star-rating-mobile--align-right .elementor-star-rating__wrapper {
																	text-align: right;
																	-webkit-box-pack: end;
																	-ms-flex-pack: end;
																	justify-content: flex-end
																}

																.elementor-star-rating-mobile--align-left .elementor-star-rating__wrapper {
																	text-align: left;
																	-webkit-box-pack: start;
																	-ms-flex-pack: start;
																	justify-content: flex-start
																}

																.elementor-star-rating-mobile--align-center .elementor-star-rating__wrapper {
																	text-align: center;
																	-webkit-box-pack: center;
																	-ms-flex-pack: center;
																	justify-content: center
																}

																.elementor-star-rating-mobile--align-justify .elementor-star-rating__title {
																	margin-right: auto
																}
															}

															.last-star {
																letter-spacing: 0
															}

															.elementor--star-style-star_unicode .elementor-star-rating {
																font-family: Arial, Helvetica, sans-serif
															}

															.elementor--star-style-star_unicode .elementor-star-rating i:not(.elementor-star-empty):before {
																content: "\002605"
															}
														</style>
														<link rel="stylesheet" href="https://www.monoapartments.com/wp-content/plugins/elementor-pro/assets/css/widget-carousel.min.css">
														<div class="elementor-swiper">
															<div class="elementor-main-swiper swiper-container">
																<div class="swiper-wrapper">
																	<div class="swiper-slide">
																		<div class="elementor-testimonial elementor-repeater-item-dfc880b">
																			<div class="elementor-testimonial__header">
																				<div class="elementor-testimonial__image">
																					<img decoding="async" src="https://www.monoapartments.com/wp-content/uploads/2021/06/winter-sport.jpg" alt="Alan Smith">
																				</div>
																				<cite class="elementor-testimonial__cite"><span class="elementor-testimonial__name">Alan Smith</span>
																					<div class="elementor-star-rating"><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-empty">&#xE933;</i></div>
																				</cite>
																				<div class="elementor-testimonial__icon elementor-icon elementor-icon-"><span class="elementor-screen-only">Read More</span></div>
																			</div>
																			<div class="elementor-testimonial__content">
																				<div class="elementor-testimonial__text">
																					“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.” </div>
																			</div>
																		</div>
																	</div>
																	<div class="swiper-slide">
																		<div class="elementor-testimonial elementor-repeater-item-329fdd3">
																			<div class="elementor-testimonial__header">
																				<div class="elementor-testimonial__image">
																					<img decoding="async" src="https://www.monoapartments.com/wp-content/uploads/2016/05/samantha.jpg" alt="Samantha">
																				</div>
																				<cite class="elementor-testimonial__cite"><span class="elementor-testimonial__name">Samantha</span>
																					<div class="elementor-star-rating"><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-full">&#xE933;</i></div>
																				</cite>
																				<div class="elementor-testimonial__icon elementor-icon elementor-icon-"><span class="elementor-screen-only">Read More</span></div>
																			</div>
																			<div class="elementor-testimonial__content">
																				<div class="elementor-testimonial__text">
																					“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.” </div>
																			</div>
																		</div>
																	</div>
																	<div class="swiper-slide">
																		<div class="elementor-testimonial elementor-repeater-item-7253653">
																			<div class="elementor-testimonial__header">
																				<div class="elementor-testimonial__image">
																					<img decoding="async" src="https://www.monoapartments.com/wp-content/uploads/2021/09/Rectangle-31-1.jpg" alt="Lorem Smith">
																				</div>
																				<cite class="elementor-testimonial__cite"><span class="elementor-testimonial__name">Lorem Smith</span>
																					<div class="elementor-star-rating"><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-full">&#xE933;</i><i class="elementor-star-5">&#xE933;</i></div>
																				</cite>
																				<div class="elementor-testimonial__icon elementor-icon elementor-icon-"><span class="elementor-screen-only">Read More</span></div>
																			</div>
																			<div class="elementor-testimonial__content">
																				<div class="elementor-testimonial__text">
																					“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.” </div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="elementor-swiper-button elementor-swiper-button-prev">
																	<i aria-hidden="true" class="eicon-chevron-left"></i> <span class="elementor-screen-only">Previous</span>
																</div>
																<div class="elementor-swiper-button elementor-swiper-button-next">
																	<i aria-hidden="true" class="eicon-chevron-right"></i> <span class="elementor-screen-only">Next</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="post-tags">
			</div>
		</div>

		<section id="comments" class="comments-area">




		</section><!-- .comments-area -->
	</main>

	<div data-elementor-type="footer" data-elementor-id="3280" class="elementor elementor-3280 elementor-location-footer">
		<div class="elementor-section-wrap">
			<section class="elementor-section elementor-top-section elementor-element elementor-element-a3fdc5f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a3fdc5f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1168fd0" data-id="1168fd0" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-03e51d6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="03e51d6" data-element_type="section">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c6a0915" data-id="c6a0915" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-80b6361 elementor-widget elementor-widget-text-editor" data-id="80b6361" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													We’d love to hear from you soon </div>
											</div>
											<div class="elementor-element elementor-element-15b3924 elementor-widget elementor-widget-heading" data-id="15b3924" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<p class="elementor-heading-title elementor-size-default"><a href="mailto:hello@monoapartments.com">hello@monoapartments.com</a></p>
												</div>
											</div>
											<div class="elementor-element elementor-element-7497499 elementor-widget elementor-widget-heading" data-id="7497499" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<p class="elementor-heading-title elementor-size-default"><a href="tel:+61401837137">+61 401 837 137</a></p>
												</div>
											</div>
											<div class="elementor-element elementor-element-dadaad7 elementor-icon-list--layout-inline elementor-list-item-link-inline elementor-align-left footer-link elementor-mobile-align-left elementor-widget elementor-widget-icon-list" data-id="dadaad7" data-element_type="widget" data-widget_type="icon-list.default">
												<div class="elementor-widget-container">
													<link rel="stylesheet" href="https://www.monoapartments.com/wp-content/uploads/elementor/css/custom-widget-icon-list.min.css?ver=1655105217">
													<ul class="elementor-icon-list-items elementor-inline-items">
														<li class="elementor-icon-list-item elementor-inline-item">
															<a href="https://monoapartments.com/privacy-policy/">

																<span class="elementor-icon-list-text">Privacy Policy</span>
															</a>
														</li>
														<li class="elementor-icon-list-item elementor-inline-item">
															<a href="https://www.monoapartments.com/terms-of-use/">
																<span class="elementor-icon-list-text">Terms of Use</span>
															</a>
														</li>
														<li class="elementor-icon-list-item elementor-inline-item">
															<span class="elementor-icon-list-text">Be a Partner</span>
														</li>
														<li class="elementor-icon-list-item elementor-inline-item">
															<a href="<?= $this->Url->build('/inspections') ?>">
																<span class="elementor-icon-list-text">Team Member</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a12046c" data-id="a12046c" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-f7a7d72 elementor-widget elementor-widget-image" data-id="f7a7d72" data-element_type="widget" data-widget_type="image.default">
												<div class="elementor-widget-container">
													<a href="https://www.monoapartments.com/">
														<img width="185" height="114" src="https://www.monoapartments.com/wp-content/uploads/2021/09/image-15.svg" class="attachment-full size-full" alt="" loading="lazy" /> </a>
												</div>
											</div>
											<div class="elementor-element elementor-element-ad72f58 elementor-widget elementor-widget-heading" data-id="ad72f58" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<p class="elementor-heading-title elementor-size-default">L4, 152 Elizabeth Street
														Melbourne VIC 3000</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<div class="elementor-element elementor-element-6d52ad8 elementor-widget elementor-widget-text-editor" data-id="6d52ad8" data-element_type="widget" data-widget_type="text-editor.default">
								<div class="elementor-widget-container">
									<p>Copyright © 2022 Mono Apartments</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<script data-cfasync="false">
		document.onreadystatechange = function() {
			if (document.readyState == "complete") {
				var logout_link = document.querySelectorAll('a[href*="wp-login.php?action=logout"]');
				if (logout_link) {
					for (var i = 0; i < logout_link.length; i++) {
						logout_link[i].addEventListener("click", function() {
							Intercom('shutdown');
						});
					}
				}
			}
		};
	</script>
	<script data-cfasync="false">
		window.intercomSettings = {
			"app_id": "i2pd8zbo"
		};
	</script>
	<script data-cfasync="false">
		(function() {
			var w = window;
			var ic = w.Intercom;
			if (typeof ic === "function") {
				ic('reattach_activator');
				ic('update', w.intercomSettings);
			} else {
				var d = document;
				var i = function() {
					i.c(arguments);
				};
				i.q = [];
				i.c = function(args) {
					i.q.push(args);
				};
				w.Intercom = i;
				var l = function() {
					var s = d.createElement('script');
					s.type = 'text/javascript';
					s.async = true;
					s.src = 'https://widget.intercom.io/widget/i2pd8zbo';
					var x = d.getElementsByTagName('script')[0];
					x.parentNode.insertBefore(s, x);
				};
				if (document.readyState === 'complete') {
					l();
				} else if (w.attachEvent) {
					w.attachEvent('onload', l);
				} else {
					w.addEventListener('load', l, false);
				}
			}
		})()
	</script>
	<style id="elementor-post-3390">
		.elementor-3390 .elementor-element.elementor-element-4666cd6 {
			z-index: 999999999;
		}

		.elementor-3390 .elementor-element.elementor-element-f46e512 .elementor-nav-menu .elementor-item {
			font-family: "DIN", Sans-serif;
			font-size: 18px;
			font-weight: 700;
		}

		.elementor-3390 .elementor-element.elementor-element-f46e512 .elementor-nav-menu--main .elementor-item {
			color: var(--e-global-color-41fc470);
			fill: var(--e-global-color-41fc470);
			padding-top: 0px;
			padding-bottom: 0px;
		}

		.elementor-3390 .elementor-element.elementor-element-f46e512 .elementor-nav-menu--main .elementor-item:hover,
		.elementor-3390 .elementor-element.elementor-element-f46e512 .elementor-nav-menu--main .elementor-item.elementor-item-active,
		.elementor-3390 .elementor-element.elementor-element-f46e512 .elementor-nav-menu--main .elementor-item.highlighted,
		.elementor-3390 .elementor-element.elementor-element-f46e512 .elementor-nav-menu--main .elementor-item:focus {
			color: var(--e-global-color-bde2d82);
			fill: var(--e-global-color-bde2d82);
		}

		.elementor-3390 .elementor-element.elementor-element-f46e512 {
			--e-nav-menu-horizontal-menu-item-margin: calc(30px / 2);
		}

		.elementor-3390 .elementor-element.elementor-element-f46e512 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu>li:not(:last-child) {
			margin-bottom: 30px;
		}

		#elementor-popup-modal-3390 .dialog-message {
			width: 260px;
			height: 100vh;
			align-items: center;
		}

		#elementor-popup-modal-3390 {
			justify-content: flex-end;
			align-items: center;
			pointer-events: all;
			background-color: rgba(0, 0, 0, .8);
		}

		#elementor-popup-modal-3390 .dialog-close-button {
			display: flex;
			top: 2.5%;
			background-color: var(--e-global-color-41fc470);
			font-size: 28px;
		}

		#elementor-popup-modal-3390 .dialog-widget-content {
			animation-duration: 0.5s;
			box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, 0.2);
		}

		body:not(.rtl) #elementor-popup-modal-3390 .dialog-close-button {
			right: 2.5%;
		}

		body.rtl #elementor-popup-modal-3390 .dialog-close-button {
			left: 2.5%;
		}

		#elementor-popup-modal-3390 .dialog-close-button i {
			color: var(--e-global-color-35f0e55);
		}

		#elementor-popup-modal-3390 .dialog-close-button svg {
			fill: var(--e-global-color-35f0e55);
		}
	</style>
	<div data-elementor-type="popup" data-elementor-id="3390" class="elementor elementor-3390 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;slideInRight&quot;,&quot;exit_animation&quot;:&quot;slideInRight&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.5,&quot;sizes&quot;:[]},&quot;timing&quot;:[]}">
		<div class="elementor-section-wrap">
			<section class="elementor-section elementor-top-section elementor-element elementor-element-4666cd6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4666cd6" data-element_type="section">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2635cd2" data-id="2635cd2" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-f46e512 elementor-nav-menu__align-right elementor-nav-menu--dropdown-none elementor-widget elementor-widget-nav-menu" data-id="f46e512" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;}}" data-widget_type="nav-menu.default">
								<div class="elementor-widget-container">
									<nav migration_allowed="1" migrated="0" role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none">
										<ul id="menu-1-f46e512" class="elementor-nav-menu sm-vertical">
											<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-738"><a href="https://www.monoapartments.com/about-us/" class="elementor-item">About Us</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-741"><a href="https://www.monoapartments.com/accomodation/" class="elementor-item">Accommodation</a></li>
											<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3460"><a target="_blank" rel="noopener" href="https://form.typeform.com/to/Ju4RvuSb" class="elementor-item">Get in Touch</a></li>
										</ul>
									</nav>
									<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
										<i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close eicon-close"></i> <span class="elementor-screen-only">Menu</span>
									</div>
									<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
										<ul id="menu-2-f46e512" class="elementor-nav-menu sm-vertical">
											<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-738"><a href="https://www.monoapartments.com/about-us/" class="elementor-item" tabindex="-1">About Us</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-741"><a href="https://www.monoapartments.com/accomodation/" class="elementor-item" tabindex="-1">Accommodation</a></li>
											<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3460"><a target="_blank" rel="noopener" href="https://form.typeform.com/to/Ju4RvuSb" class="elementor-item" tabindex="-1">Get in Touch</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<link rel='stylesheet' id='elementor-gallery-css' href='https://www.monoapartments.com/wp-content/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min.css?ver=1.2.0' type='text/css' media='all' />
	<link rel='stylesheet' id='e-animations-css' href='https://www.monoapartments.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.6.4' type='text/css' media='all' />
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0' id='hello-theme-frontend-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1' id='smartmenus-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js?ver=1.2.0' id='elementor-gallery-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.5.2' id='elementor-pro-webpack-runtime-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.6.4' id='elementor-webpack-runtime-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.6.4' id='elementor-frontend-modules-js'></script>
	<script type='text/javascript' id='elementor-pro-frontend-js-before'>
		var ElementorProFrontendConfig = {
			"ajaxurl": "https:\/\/www.monoapartments.com\/wp-admin\/admin-ajax.php",
			"nonce": "fdf8b988ea",
			"urls": {
				"assets": "https:\/\/www.monoapartments.com\/wp-content\/plugins\/elementor-pro\/assets\/",
				"rest": "https:\/\/www.monoapartments.com\/wp-json\/"
			},
			"i18n": {
				"toc_no_headings_found": "No headings were found on this page."
			},
			"shareButtonsNetworks": {
				"facebook": {
					"title": "Facebook",
					"has_counter": true
				},
				"twitter": {
					"title": "Twitter"
				},
				"linkedin": {
					"title": "LinkedIn",
					"has_counter": true
				},
				"pinterest": {
					"title": "Pinterest",
					"has_counter": true
				},
				"reddit": {
					"title": "Reddit",
					"has_counter": true
				},
				"vk": {
					"title": "VK",
					"has_counter": true
				},
				"odnoklassniki": {
					"title": "OK",
					"has_counter": true
				},
				"tumblr": {
					"title": "Tumblr"
				},
				"digg": {
					"title": "Digg"
				},
				"skype": {
					"title": "Skype"
				},
				"stumbleupon": {
					"title": "StumbleUpon",
					"has_counter": true
				},
				"mix": {
					"title": "Mix"
				},
				"telegram": {
					"title": "Telegram"
				},
				"pocket": {
					"title": "Pocket",
					"has_counter": true
				},
				"xing": {
					"title": "XING",
					"has_counter": true
				},
				"whatsapp": {
					"title": "WhatsApp"
				},
				"email": {
					"title": "Email"
				},
				"print": {
					"title": "Print"
				}
			},
			"facebook_sdk": {
				"lang": "en_US",
				"app_id": ""
			},
			"lottie": {
				"defaultAnimationUrl": "https:\/\/www.monoapartments.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
			}
		};
	</script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.5.2' id='elementor-pro-frontend-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2' id='jquery-ui-core-js'></script>
	<script type='text/javascript' id='elementor-frontend-js-before'>
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false,
				"isScriptDebug": false
			},
			"i18n": {
				"shareOnFacebook": "Share on Facebook",
				"shareOnTwitter": "Share on Twitter",
				"pinIt": "Pin it",
				"download": "Download",
				"downloadImage": "Download image",
				"fullscreen": "Fullscreen",
				"zoom": "Zoom",
				"share": "Share",
				"playVideo": "Play Video",
				"previous": "Previous",
				"next": "Next",
				"close": "Close"
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"responsive": {
				"breakpoints": {
					"mobile": {
						"label": "Mobile",
						"value": 767,
						"default_value": 767,
						"direction": "max",
						"is_enabled": true
					},
					"mobile_extra": {
						"label": "Mobile Extra",
						"value": 880,
						"default_value": 880,
						"direction": "max",
						"is_enabled": false
					},
					"tablet": {
						"label": "Tablet",
						"value": 1024,
						"default_value": 1024,
						"direction": "max",
						"is_enabled": true
					},
					"tablet_extra": {
						"label": "Tablet Extra",
						"value": 1200,
						"default_value": 1200,
						"direction": "max",
						"is_enabled": true
					},
					"laptop": {
						"label": "Laptop",
						"value": 1366,
						"default_value": 1366,
						"direction": "max",
						"is_enabled": false
					},
					"widescreen": {
						"label": "Widescreen",
						"value": 2400,
						"default_value": 2400,
						"direction": "min",
						"is_enabled": false
					}
				}
			},
			"version": "3.6.4",
			"is_static": false,
			"experimentalFeatures": {
				"e_dom_optimization": true,
				"e_optimized_assets_loading": true,
				"e_optimized_css_loading": true,
				"a11y_improvements": true,
				"e_import_export": true,
				"additional_custom_breakpoints": true,
				"e_hidden_wordpress_widgets": true,
				"theme_builder_v2": true,
				"hello-theme-header-footer": true,
				"landing-pages": true,
				"elements-color-picker": true,
				"favorite-widgets": true,
				"admin-top-bar": true,
				"form-submissions": true
			},
			"urls": {
				"assets": "https:\/\/www.monoapartments.com\/wp-content\/plugins\/elementor\/assets\/"
			},
			"settings": {
				"page": [],
				"editorPreferences": []
			},
			"kit": {
				"active_breakpoints": ["viewport_mobile", "viewport_tablet", "viewport_tablet_extra"],
				"body_background_background": "classic",
				"global_image_lightbox": "yes",
				"lightbox_enable_counter": "yes",
				"lightbox_enable_fullscreen": "yes",
				"lightbox_enable_zoom": "yes",
				"lightbox_enable_share": "yes",
				"lightbox_title_src": "title",
				"lightbox_description_src": "description",
				"hello_header_logo_type": "title",
				"hello_header_menu_layout": "horizontal",
				"hello_footer_logo_type": "logo"
			},
			"post": {
				"id": 2580,
				"title": "Home%20-%20Stay%20as%20you%20want%20%7C%20Long%20term%20%26%20Short%20Stay%20Accommodation",
				"excerpt": "",
				"featuredImage": false
			}
		};
	</script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.6.4' id='elementor-frontend-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.5.2' id='pro-elements-handlers-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.5.2' id='e-sticky-js'></script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-includes/js/underscore.min.js?ver=1.13.4' id='underscore-js'></script>
	<script type='text/javascript' id='wp-util-js-extra'>
		/* <![CDATA[ */
		var _wpUtilSettings = {
			"ajax": {
				"url": "\/wp-admin\/admin-ajax.php"
			}
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-includes/js/wp-util.min.js?ver=6.1.1' id='wp-util-js'></script>
	<script type='text/javascript' id='wpforms-elementor-js-extra'>
		/* <![CDATA[ */
		var wpformsElementorVars = {
			"captcha_provider": "recaptcha",
			"recaptcha_type": "v2"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://www.monoapartments.com/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.7.8' id='wpforms-elementor-js'></script>

</body>

</html>
