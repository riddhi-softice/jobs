<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        #placeholder {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            display: flex;
            margin-top: 10px;
            flex-direction: column;
            align-items: center;
        }

        #relatedsearches1,
        #relatedsearches2 {
            min-height: 350px;
        }

        .skeleton {
            background: linear-gradient(90deg, #e0e0e0 25%, #f7f5f6 37%, #e0e0e0 63%);
            background-size: 400% 100%;
            animation: shimmer 0.8s infinite;
            border-radius: 4px;
            margin-bottom: 5px;
        }

        @keyframes shimmer {
            0% {
                background-position: -400px 0;
            }

            100% {
                background-position: 400px 0;
            }
        }

        .skeleton-header {
            width: 50%;
            height: 4.7%;
        }

        .skeleton-nav {
            width: 100%;
            height: 7.2%;
        }

        .skeleton-title {
            width: 95%;
            height: 4.5%;
        }

        .skeleton-content {
            width: 95%;
            height: 80%;
        }

        .site-container {
            visibility: hidden;
            position: relative;
            z-index: 1;
        }
    </style>

    <script>
        function showPageContent() {
            var placeholder = document.getElementById("placeholder");
            var siteContainer = document.querySelector(".site-container");
            if (placeholder && siteContainer) {
                placeholder.style.display = "none";
                siteContainer.style.visibility = "visible";
                siteContainer.style.opacity = "1";
            }
        }

        function googleAdLoadedCallback(containerName, adsLoaded, isExperimentVariant, callbackOptions) {
            showPageContent();

            if (adsLoaded) {
                dataLayer.push({ 'event': 'content_widget_loaded' });
            } else {
                dataLayer.push({ 'event': 'content_widget_not_loaded' });
            }
        }
        setTimeout(showPageContent, 2500);
    </script>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>

    <!-- This site is optimized with the Yoast SEO Premium plugin v21.5 (Yoast SEO v24.6) - https://yoast.com/wordpress/plugins/seo/ -->
    <title>About Us - Job Kaka</title>
    <link rel="preload" data-rocket-preload as="image"
        href="https://www.jobkaka.com/wp-content/uploads/2020/05/cropped-JobKaka-v4-logo-4.png"
        imagesrcset="https://www.jobkaka.com/wp-content/uploads/2020/05/cropped-JobKaka-v4-logo-4.png 996w, https://www.jobkaka.com/wp-content/uploads/2020/05/cropped-JobKaka-v4-logo-4-300x66.png 300w, https://www.jobkaka.com/wp-content/uploads/2020/05/cropped-JobKaka-v4-logo-4-768x168.png 768w"
        imagesizes="(max-width: 996px) 100vw, 996px" fetchpriority="high">
    <link rel="canonical" href="https://www.jobkaka.com/about/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="About Us" />
    <meta property="og:description"
        content="JobKaka.com is a website and a mobile application related to job, career and education, through our website and mobile application we provide news and information related to jobs, career and education in simple and short to read format. If you have any question or suggestion, contact us through our Contact Us page! Thanks &amp; Regards, [Continue Reading]" />
    <meta property="og:url" content="https://www.jobkaka.com/about/" />
    <meta property="og:site_name" content="Job Kaka" />
    <meta property="article:modified_time" content="2021-01-21T21:02:16+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />
    <script type="application/ld+json"
        class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://www.jobkaka.com/about/","url":"https://www.jobkaka.com/about/","name":"About Us - Job Kaka","isPartOf":{"@id":"https://www.jobkaka.com/#website"},"datePublished":"2019-06-03T08:08:27+00:00","dateModified":"2021-01-21T21:02:16+00:00","breadcrumb":{"@id":"https://www.jobkaka.com/about/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://www.jobkaka.com/about/"]}]},{"@type":"BreadcrumbList","@id":"https://www.jobkaka.com/about/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.jobkaka.com/"},{"@type":"ListItem","position":2,"name":"About Us"}]},{"@type":"WebSite","@id":"https://www.jobkaka.com/#website","url":"https://www.jobkaka.com/","name":"Job Kaka","description":"Navigating Careers, Creating Futures.","publisher":{"@id":"https://www.jobkaka.com/#/schema/person/bd0ad8c9ccc4c546dc5cf824ae13505f"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.jobkaka.com/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"},{"@type":["Person","Organization"],"@id":"https://www.jobkaka.com/#/schema/person/bd0ad8c9ccc4c546dc5cf824ae13505f","name":"Sourav Singh","image":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://www.jobkaka.com/#/schema/person/image/","url":"https://www.jobkaka.com/wp-content/uploads/2020/05/cropped-JobKaka-v4-logo-4.png","contentUrl":"https://www.jobkaka.com/wp-content/uploads/2020/05/cropped-JobKaka-v4-logo-4.png","width":996,"height":218,"caption":"Sourav Singh"},"logo":{"@id":"https://www.jobkaka.com/#/schema/person/image/"},"sameAs":["https://www.jobkaka.com/"]}]}</script>
    <!-- / Yoast SEO Premium plugin. -->


  <link rel="alternate" type="application/rss+xml" title="Job Kaka &raquo; Feed" href="https://www.jobkaka.com/feed/" />
  <link rel="alternate" type="application/rss+xml" title="Job Kaka &raquo; Comments Feed" href="https://www.jobkaka.com/comments/feed/" />
  <link rel='stylesheet' id='genesis-sample-css' href='wp-content/themes/genesis-sample/style.css?ver=2.6.0' type='text/css' media='all' />
  
     <!-- custom -->
  <link rel='stylesheet' id='genesis-sample-inline-css' href='wp-content/themes/custom/genesis-sample-inline.css' type='text/css' media='all' />
  <link rel='stylesheet' id='wp-emoji-styles-inline-css' href='wp-content/themes/custom/genesis-sample-inline.css' type='text/css' media='all' />
  <link rel='stylesheet' id='classic-theme-styles-inline-css' href='wp-content/themes/custom/classic-theme-styles-inline.css' type='text/css' media='all' />
  <link rel='stylesheet' id='global-styles-inline-css' href='wp-content/themes/custom/global-styles-inline.css' type='text/css' media='all' />
  
  <link rel='stylesheet' id='wp-rest-filter-css' href='wp-content/plugins/wp-rest-filter/public/css/wp-rest-filter-public.css?ver=1.4.3' type='text/css' media='all' />
  <link rel='stylesheet' id='dashicons-css' href='wp-includes/css/dashicons.min.css?ver=6.7.2' type='text/css' media='all' />
  <script type="text/javascript" src="wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
  <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
  <script type="text/javascript" src="wp-content/plugins/wp-rest-filter/public/js/wp-rest-filter-public.js?ver=1.4.3" id="wp-rest-filter-js"></script>
  
    <link rel="https://api.w.org/" href="https://www.jobkaka.com/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json" href="https://www.jobkaka.com/wp-json/wp/v2/pages/2" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.jobkaka.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.7.2" />
    <link rel='shortlink' href='https://www.jobkaka.com/?p=2' />

    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="about-us.php" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="about-us.php;format=xml" />
    
    <link rel="icon" href="wp-content/uploads/fabicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/fabicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon"  href="wp-content/uploads/fabicon-180x180.png" />
    <meta name="msapplication-TileImage" content="wp-content/uploads/fabicon-270x270.png" />
    <link rel='stylesheet' href='wp-content/themes/custom/wp-custom.css' type='text/css' media='all' />
    <meta name="generator" content="WP Rocket 3.18.2" data-wpr-features="wpr_oci wpr_preload_links wpr_desktop" />
</head>

<body
    class="page-template-default page page-id-2 wp-custom-logo header-full-width full-width-content genesis-breadcrumbs-hidden genesis-footer-widgets-hidden">
    <!-- Placeholder Overlay (Shimmer Effect) -->
    <div id="placeholder">
        <div class="skeleton skeleton-header"></div>
        <div class="skeleton skeleton-nav"></div>
        <div class="skeleton skeleton-title"></div>
        <div class="skeleton skeleton-content"></div>
    </div>
    <div class="site-container">
       
        <?php include '_header.php'; ?>

        <div class="site-inner">
            <div class="content-sidebar-wrap">
                <main class="content">
                    <article class="post-2 page type-page status-publish entry" aria-label="About Us">
                        <header class="entry-header">
                            <h1 class="entry-title">About Us</h1>
                        </header>
                        <div class="entry-content">
                            <p>JobKaka.com is a website and a mobile application related to job, career and education,
                                through our website and mobile application we provide news and information related to
                                jobs, career and education in simple and short to read format.</p>
                            <p>If you have any question or suggestion, contact us through our <a
                                    href="https://www.jobkaka.com/contact/">Contact Us</a> page!</p>
                            <p>Thanks &amp; Regards,<br />
                                JobKaka Team !</p>
                        </div>
                    </article>
                </main>
            </div>
        </div>
        
        <?php include '_footer.php'; ?>
    </div>

    <script>
        window.addEventListener('load', function () {
          let attempts = 0;
          const maxAttempts = 5;
          const retryInterval = 500; // 1 second
    
          function tryEngagedEvent() {
            if (typeof fbq === 'function') {
              // Initialize page count in sessionStorage
              if (!sessionStorage.getItem("pageCount")) {
                sessionStorage.setItem("pageCount", "0");
              }
              // Increment page count and fire Engaged event
              let pagecount = parseInt(sessionStorage.getItem("pageCount")) + 1;
              sessionStorage.setItem("pageCount", pagecount);
              fbq('trackCustom', "Engaged", { pagecount: pagecount });
              console.log('Engaged event fired successfully');
            } else if (attempts < maxAttempts) {
              attempts++;
              console.log(`Attempt ${attempts}: Facebook Pixel not loaded yet. Retrying in ${retryInterval}ms...`);
              setTimeout(tryEngagedEvent, retryInterval);
            } else {
              console.error('Max attempts reached: Facebook Pixel not loaded');
            }
          }
          tryEngagedEvent();
        });
      </script>
      <script type="text/javascript" id="rocket-browser-checker-js-after">
        "use strict"; var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key, descriptor) } } return function (Constructor, protoProps, staticProps) { return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor } }(); function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function") } var RocketBrowserCompatibilityChecker = function () { function RocketBrowserCompatibilityChecker(options) { _classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this._checkPassiveOption(this), this.options = !!this.passiveSupported && options } return _createClass(RocketBrowserCompatibilityChecker, [{ key: "_checkPassiveOption", value: function (self) { try { var options = { get passive() { return !(self.passiveSupported = !0) } }; window.addEventListener("test", null, options), window.removeEventListener("test", null, options) } catch (err) { self.passiveSupported = !1 } } }, { key: "initRequestIdleCallback", value: function () { !1 in window && (window.requestIdleCallback = function (cb) { var start = Date.now(); return setTimeout(function () { cb({ didTimeout: !1, timeRemaining: function () { return Math.max(0, 50 - (Date.now() - start)) } }) }, 1) }), !1 in window && (window.cancelIdleCallback = function (id) { return clearTimeout(id) }) } }, { key: "isDataSaverModeOn", value: function () { return "connection" in navigator && !0 === navigator.connection.saveData } }, { key: "supportsLinkPrefetch", value: function () { var elem = document.createElement("link"); return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") && window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry.prototype } }, { key: "isSlowConnection", value: function () { return "connection" in navigator && "effectiveType" in navigator.connection && ("2g" === navigator.connection.effectiveType || "slow-2g" === navigator.connection.effectiveType) } }]), RocketBrowserCompatibilityChecker }();
      </script>
      <script type="text/javascript" id="rocket-preload-links-js-extra">
        var RocketPreloadLinksConfig = { "excludeUris": "\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/", "usesTrailingSlash": "1", "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php", "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm", "siteUrl": "https:\/\/www.jobkaka.com", "onHoverDelay": "100", "rateThrottle": "3" };
      </script>
      <script type="text/javascript" id="rocket-preload-links-js-after">
        (function () {
          "use strict"; var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) { return typeof e } : function (e) { return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e }, e = function () { function i(e, t) { for (var n = 0; n < t.length; n++) { var i = t[n]; i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i) } } return function (e, t, n) { return t && i(e.prototype, t), n && i(e, n), e } }(); function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") } var t = function () { function n(e, t) { i(this, n), this.browser = e, this.config = t, this.options = this.browser.options, this.prefetched = new Set, this.eventTime = null, this.threshold = 1111, this.numOnHover = 0 } return e(n, [{ key: "init", value: function () { !this.browser.supportsLinkPrefetch() || this.browser.isDataSaverModeOn() || this.browser.isSlowConnection() || (this.regex = { excludeUris: RegExp(this.config.excludeUris, "i"), images: RegExp(".(" + this.config.imageExt + ")$", "i"), fileExt: RegExp(".(" + this.config.fileExt + ")$", "i") }, this._initListeners(this)) } }, { key: "_initListeners", value: function (e) { -1 < this.config.onHoverDelay && document.addEventListener("mouseover", e.listener.bind(e), e.listenerOptions), document.addEventListener("mousedown", e.listener.bind(e), e.listenerOptions), document.addEventListener("touchstart", e.listener.bind(e), e.listenerOptions) } }, { key: "listener", value: function (e) { var t = e.target.closest("a"), n = this._prepareUrl(t); if (null !== n) switch (e.type) { case "mousedown": case "touchstart": this._addPrefetchLink(n); break; case "mouseover": this._earlyPrefetch(t, n, "mouseout") } } }, { key: "_earlyPrefetch", value: function (t, e, n) { var i = this, r = setTimeout(function () { if (r = null, 0 === i.numOnHover) setTimeout(function () { return i.numOnHover = 0 }, 1e3); else if (i.numOnHover > i.config.rateThrottle) return; i.numOnHover++, i._addPrefetchLink(e) }, this.config.onHoverDelay); t.addEventListener(n, function e() { t.removeEventListener(n, e, { passive: !0 }), null !== r && (clearTimeout(r), r = null) }, { passive: !0 }) } }, { key: "_addPrefetchLink", value: function (i) { return this.prefetched.add(i.href), new Promise(function (e, t) { var n = document.createElement("link"); n.rel = "prefetch", n.href = i.href, n.onload = e, n.onerror = t, document.head.appendChild(n) }).catch(function () { }) } }, { key: "_prepareUrl", value: function (e) { if (null === e || "object" !== (void 0 === e ? "undefined" : r(e)) || !1 in e || -1 === ["https:", "https:"].indexOf(e.protocol)) return null; var t = e.href.substring(0, this.config.siteUrl.length), n = this._getPathname(e.href, t), i = { original: e.href, protocol: e.protocol, origin: t, pathname: n, href: t + n }; return this._isLinkOk(i) ? i : null } }, { key: "_getPathname", value: function (e, t) { var n = t ? e.substring(this.config.siteUrl.length) : e; return n.startsWith("/") || (n = "/" + n), this._shouldAddTrailingSlash(n) ? n + "/" : n } }, { key: "_shouldAddTrailingSlash", value: function (e) { return this.config.usesTrailingSlash && !e.endsWith("/") && !this.regex.fileExt.test(e) } }, { key: "_isLinkOk", value: function (e) { return null !== e && "object" === (void 0 === e ? "undefined" : r(e)) && (!this.prefetched.has(e.href) && e.origin === this.config.siteUrl && -1 === e.href.indexOf("?") && -1 === e.href.indexOf("#") && !this.regex.excludeUris.test(e.href) && !this.regex.images.test(e.href)) } }], [{ key: "run", value: function () { "undefined" != typeof RocketPreloadLinksConfig && new n(new RocketBrowserCompatibilityChecker({ capture: !0, passive: !0 }), RocketPreloadLinksConfig).init() } }]), n }(); t.run();
        }());
      </script>
      <script type="text/javascript" src="wp-content/themes/genesis-sample/js/genesis-sample.js?ver=2.6.0" id="genesis-sample-js"></script>
     
    </body>
    </html>