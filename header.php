
<!DOCTYPE html>
<html lang="en-US">

<head>

  <!-- <link rel='dns-prefetch' href='//global.localizecdn.com' />
  <link rel='dns-prefetch' href='//js.hs-scripts.com' />
  <link rel='dns-prefetch' href='//www.googletagmanager.com' /> -->
  <link rel='dns-prefetch' href='//use.fontawesome.com' />

  <!-- <link rel='stylesheet' id='simple_tooltips_style-css' href='https://www.topstep.com/wp-content/plugins/simple-tooltips/zebra_tooltips.css?ver=6.2.2' type='text/css' media='all' /> -->
  <!-- <link rel='stylesheet' id='classic-theme-styles-css' href='https://www.topstep.com/wp-includes/css/classic-themes.min.css?ver=6.2.2' type='text/css' media='all' /> -->

  <!------------------------------------------ css ------------------------------------------>
  <link rel='stylesheet' id='izi-main-css' href='<?php echo esc_url( site_url() ); ?>/wp-content/themes/topstep/public/css/style.css' type='text/css' media='all' />
  <link rel='stylesheet' id='bee3d-css-css' href='<?php echo esc_url( site_url() ); ?>/wp-content/themes/topstep/public/css/bee3D.css' type='text/css' media='all' />
  <link rel='stylesheet' id='font-awesome-official-css' href='https://use.fontawesome.com/releases/v5.15.3/css/all.css' type='text/css' media='all' integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" />
  <link rel='stylesheet' id='font-awesome-official-v4shim-css' href='https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css' type='text/css' media='all' integrity="sha384-C2B+KlPW+WkR0Ld9loR1x3cXp7asA0iGVodhCoJ4hwrWm/d9qKS59BGisq+2Y0/D" crossorigin="anonymous" />
  <!------------------------------------------ css ------------------------------------------>

  <style id='font-awesome-official-v4shim-inline-css' type='text/css'>
    @font-face {
      font-family: "FontAwesome";
      font-display: block;
      src: url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-brands-400.eot"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-brands-400.eot?#iefix") format("embedded-opentype"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-brands-400.woff2") format("woff2"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-brands-400.woff") format("woff"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-brands-400.ttf") format("truetype"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-brands-400.svg#fontawesome") format("svg");
    }
    @font-face {
      font-family: "FontAwesome";
      font-display: block;
      src: url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-solid-900.eot"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-solid-900.eot?#iefix") format("embedded-opentype"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-solid-900.woff2") format("woff2"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-solid-900.woff") format("woff"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-solid-900.ttf") format("truetype"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-solid-900.svg#fontawesome") format("svg");
    }
    @font-face {
      font-family: "FontAwesome";
      font-display: block;
      src: url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-regular-400.eot"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-regular-400.woff2") format("woff2"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-regular-400.woff") format("woff"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-regular-400.ttf") format("truetype"),
        url("https://use.fontawesome.com/releases/v5.15.3/webfonts/fa-regular-400.svg#fontawesome") format("svg");
      unicode-range: U+F004-F005, U+F007, U+F017, U+F022, U+F024, U+F02E, U+F03E, U+F044, U+F057-F059, U+F06E, U+F070, U+F075, U+F07B-F07C, U+F080, U+F086, U+F089, U+F094, U+F09D, U+F0A0, U+F0A4-F0A7, U+F0C5, U+F0C7-F0C8, U+F0E0, U+F0EB, U+F0F3, U+F0F8, U+F0FE, U+F111, U+F118-F11A, U+F11C, U+F133, U+F144, U+F146, U+F14A, U+F14D-F14E, U+F150-F152, U+F15B-F15C, U+F164-F165, U+F185-F186, U+F191-F192, U+F1AD, U+F1C1-F1C9, U+F1CD, U+F1D8, U+F1E3, U+F1EA, U+F1F6, U+F1F9, U+F20A, U+F247-F249, U+F24D, U+F254-F25B, U+F25D, U+F267, U+F271-F274, U+F279, U+F28B, U+F28D, U+F2B5-F2B6, U+F2B9, U+F2BB, U+F2BD, U+F2C1-F2C2, U+F2D0, U+F2D2, U+F2DC, U+F2ED, U+F328, U+F358-F35B, U+F3A5, U+F3D1, U+F410, U+F4AD;
    }
  </style>

  
  <!-- jquery -->
  <script type='text/javascript' src='https://www.topstep.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.4' id='jquery-core-js'></script>
  <script type='text/javascript' src='https://www.topstep.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0' id='jquery-migrate-js'></script>
  <!-- jquery -->



  <!-- <script type='text/javascript' src='//global.localizecdn.com/localize.js' id='localize-js'></script>
  <script type='text/javascript' id='localizeFallback-js-extra'>
    /* <![CDATA[ */
    var PROJECT_KEY = "Ki3ilhrYSgZTD";
    var URL_OPTIONS = "0";
    var AVAILABLE_LANGUAGES = [];
    var SOURCE_LANGUAGE = null;
    /* ]]> */
  </script>
  <script type='text/javascript' src='https://www.topstep.com/wp-content/plugins/localizejs/localizejs.js' id='localizeFallback-js'></script>
  <script type='text/javascript' src='https://www.topstep.com/wp-content/plugins/pixelyoursite/dist/scripts/jquery.bind-first-0.2.3.min.js?ver=6.2.2' id='jquery-bind-first-js'></script>
  <script type='text/javascript' src='https://www.topstep.com/wp-content/plugins/pixelyoursite/dist/scripts/js.cookie-2.1.3.min.js?ver=2.1.3' id='js-cookie-js'></script>
  <script type='text/javascript' id='pys-js-extra'>
    /* <![CDATA[ */
    var pysOptions = {
      "staticEvents": {
        "facebook": {
          "PageView": [{
            "delay": 0,
            "type": "static",
            "name": "PageView",
            "pixelIds": ["416507646283791"],
            "eventID": "5125b93f-5b46-4bb1-a84f-1fefdb6a3e16",
            "params": {
              "page_title": "Home",
              "post_type": "page",
              "post_id": "2",
              "user_role": "guest",
              "plugin": "PixelYourSite",
              "event_url": "www.topstep.com\/"
            },
            "ids": [],
            "hasTimeWindow": false,
            "timeWindow": 0,
            "woo_order": "",
            "edd_order": ""
          }]
        }
      },
      "dynamicEvents": {
        "signal_form": {
          "facebook": {
            "delay": 0,
            "type": "dyn",
            "name": "Signal",
            "pixelIds": ["416507646283791"],
            "eventID": "33cba117-4e50-43c5-9296-ad01862f9d22",
            "params": {
              "event_action": "Form",
              "page_title": "Home",
              "post_type": "page",
              "post_id": "2",
              "user_role": "guest",
              "plugin": "PixelYourSite",
              "event_url": "www.topstep.com\/"
            },
            "ids": [],
            "hasTimeWindow": false,
            "timeWindow": 0,
            "woo_order": "",
            "edd_order": ""
          }
        },
        "signal_download": {
          "facebook": {
            "delay": 0,
            "type": "dyn",
            "name": "Signal",
            "extensions": ["", "doc", "exe", "js", "pdf", "ppt", "tgz", "zip", "xls"],
            "pixelIds": ["416507646283791"],
            "eventID": "25724c12-4782-4422-9eaf-461d5168b5df",
            "params": {
              "event_action": "Download",
              "page_title": "Home",
              "post_type": "page",
              "post_id": "2",
              "user_role": "guest",
              "plugin": "PixelYourSite",
              "event_url": "www.topstep.com\/"
            },
            "ids": [],
            "hasTimeWindow": false,
            "timeWindow": 0,
            "woo_order": "",
            "edd_order": ""
          }
        },
        "signal_comment": {
          "facebook": {
            "delay": 0,
            "type": "dyn",
            "name": "Signal",
            "pixelIds": ["416507646283791"],
            "eventID": "1e638e72-08db-4a14-b626-e1204654322a",
            "params": {
              "event_action": "Comment",
              "page_title": "Home",
              "post_type": "page",
              "post_id": "2",
              "user_role": "guest",
              "plugin": "PixelYourSite",
              "event_url": "www.topstep.com\/"
            },
            "ids": [],
            "hasTimeWindow": false,
            "timeWindow": 0,
            "woo_order": "",
            "edd_order": ""
          }
        }
      },
      "triggerEvents": [],
      "triggerEventTypes": [],
      "facebook": {
        "pixelIds": ["416507646283791"],
        "advancedMatching": [],
        "removeMetadata": false,
        "contentParams": {
          "post_type": "page",
          "post_id": 2,
          "content_name": "Home"
        },
        "commentEventEnabled": true,
        "wooVariableAsSimple": false,
        "downloadEnabled": true,
        "formEventEnabled": true,
        "ajaxForServerEvent": true,
        "serverApiEnabled": true,
        "wooCRSendFromServer": false
      },
      "debug": "",
      "siteUrl": "https:\/\/www.topstep.com",
      "ajaxUrl": "https:\/\/www.topstep.com\/wp-admin\/admin-ajax.php",
      "gdpr": {
        "ajax_enabled": false,
        "all_disabled_by_api": false,
        "facebook_disabled_by_api": false,
        "analytics_disabled_by_api": false,
        "google_ads_disabled_by_api": false,
        "pinterest_disabled_by_api": false,
        "bing_disabled_by_api": false,
        "facebook_prior_consent_enabled": true,
        "analytics_prior_consent_enabled": true,
        "google_ads_prior_consent_enabled": null,
        "pinterest_prior_consent_enabled": true,
        "bing_prior_consent_enabled": true,
        "cookiebot_integration_enabled": false,
        "cookiebot_facebook_consent_category": "marketing",
        "cookiebot_analytics_consent_category": "statistics",
        "cookiebot_google_ads_consent_category": null,
        "cookiebot_pinterest_consent_category": "marketing",
        "cookiebot_bing_consent_category": "marketing",
        "consent_magic_integration_enabled": false,
        "real_cookie_banner_integration_enabled": false,
        "cookie_notice_integration_enabled": false,
        "cookie_law_info_integration_enabled": false
      },
      "edd": {
        "enabled": false
      },
      "woo": {
        "enabled": false
      }
    };
    /* ]]> */
  </script> -->
  <!-- <script type='text/javascript' src='https://www.topstep.com/wp-content/plugins/pixelyoursite/dist/scripts/public.js?ver=8.2.0' id='pys-js'></script> -->


  <!-- <meta name="facebook-domain-verification" content="ozk9vc6zkiqmo5pzwtxq4z3ptm9tht" />
  <meta name="facebook-domain-verification" content="onv2301t7ijdr9v9mmhyd066pgu86o" />
  <meta name="facebook-domain-verification" content="uwkug42p7wab4yitd93016rg6qb10r" />
  <meta name="facebook-domain-verification" content="xexsifg5tjvsotl0uo9m01rhwwzpxz" /> -->

  <!-- <script type="text/javascript" class="hsq-set-content-id" data-content-id="standard-page">
    var _hsq = _hsq || [];
    _hsq.push(["setContentType", "standard-page"]);
  </script>

  <meta name="facebook-domain-verification" content="ozk9vc6zkiqmo5pzwtxq4z3ptm9tht" />
  <meta name="tec-api-version" content="v1">
  <meta name="tec-api-origin" content="https://www.topstep.com">
  <link rel="alternate" href="https://www.topstep.com/wp-json/tribe/events/v1/" /> -->

  <!-- favicon -->
  <!-- <link rel="icon" href="https://www.topstep.com/wp-content/uploads/2020/10/cropped-favicon-32x32.png" sizes="32x32" />
  <link rel="icon" href="https://www.topstep.com/wp-content/uploads/2020/10/cropped-favicon-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="https://www.topstep.com/wp-content/uploads/2020/10/cropped-favicon-180x180.png" />
  <meta name="msapplication-TileImage" content="https://www.topstep.com/wp-content/uploads/2020/10/cropped-favicon-270x270.png" /> -->
  <!-- favicon -->

  
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no"><!-- Removes auto phone number detection on iOS -->


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


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
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
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
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
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
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
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
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
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
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
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
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
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
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
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

  <!-- ==== header ==== -->
  <header class="main-header ">
    <a class="skip-to-content" href="#content" onclick="document.querySelector('#content').focus()">
      skip to main content
    </a>

    <div class="main-header--utility wrapper desktop-only uppercase">

      <div class="breadcrumbs-left">
        <p id="breadcrumbs">
          <span>
            <?php if ( function_exists( 'bcn_display' ) ) { bcn_display(); } ?>
          </span>
        </p>
      </div>

      <div class="utility-menu-right">
        <div class="main-header--utility--no-submenu text-white">
          <a href="https://help.futures.topstep.com/hc/en-us">Help Center</a>
          <ul class="main-header--utility--submenu">
            <li>
              <a class="" target="_self" href="https://app.topsteptrader.com/login">Log In</a>
            </li>
            <li>
              <a class="" target="_self" href="https://help.futures.topstep.com/hc/en-us">Support</a>
            </li>
          </ul>
        </div>

        <!-- 検索フォーム pc -->
        <div class="search-form desktop-only">

          <button type="button" class="search-form--toggle flex align-center text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="9.92" height="10">
              <path d="M9.92 9.02L7.335 6.434a4.051 4.051 0 10-.994.968L8.94 10zM1.189 4.054A2.865 2.865 0 114.054 6.92a2.868 2.868 0 01-2.865-2.866z" fill="currentColor" />
            </svg>
            <span class="m-l-5 uppercase">Search</span>
          </button>

          <!-- <form aria-hidden="true" class="bg-black" method="get" action="<?php echo esc_url(home_url()) ; ?>">
            <button class="search-form--cancel search-form--cancel--x big-x"></button>
            <div class="wrapper text-center">
              <input type="search" name="s" placeholder="Search" class="text-white">
              <div><button type="submit" class="button button--white">Search</button></div>
              <div><button class="search-form--cancel button button--transparent button--white text-white">Cancel</button></div>
            </div>
          </form> -->
          <?php get_search_form(); ?>

        </div>
        <!-- // 検索フォーム pc -->

        <!-- <div class="main-header--utility--no-submenu text-white">
          <a href="https://app.topsteptrader.com/login">Log In</a>
          <ul class="main-header--utility--submenu">
            <li>
            </li>
            <li>
            </li>
          </ul>
        </div> -->
      </div>

    </div>

    <div class="main-header--main wrapper">

      <a class="mobile-menu-button" href="javascript:;"><span></span></a>

      <a href="<?php echo esc_url(home_url()) ; ?>" title="Topstep home">
        <picture class="site-logo--container">
          <img width="200" height="46" data-src="<?php echo esc_url(home_url()) ; ?>/wp-content/uploads/2023/08/Topstep-1S1R-logo-smaller.png" class="lazy site-logo" alt="Topstep One Step One Rule" decoding="async" loading="lazy" />
        </picture>
      </a>

      <!-- 検索フォーム sp -->
      <div class="search-form mobile-only">

        <button type="button" class="search-form--toggle flex align-center text-white">
          <svg data-name="Mobile Search Icon" xmlns="http://www.w3.org/2000/svg" width="23.889" height="24.08">
            <path d="M23.889 21.719l-6.227-6.227a9.755 9.755 0 10-2.393 2.33l6.258 6.258zM2.864 9.763a6.9 6.9 0 116.9 6.9 6.907 6.907 0 01-6.9-6.9z" fill="currentColor" />
          </svg>
          <span class="m-l-5 uppercase">Search</span>
        </button>

        <!-- <form aria-hidden="true" class="bg-black" method="get" action="<?php echo esc_url(home_url()) ; ?>">
          <button class="search-form--cancel search-form--cancel--x big-x"></button>
          <div class="wrapper text-center">
            <input type="search" name="s" placeholder="Search" class="text-white">
            <div><button type="submit" class="button button--white">Search</button></div>
            <div><button class="search-form--cancel button button--transparent button--white text-white">Cancel</button></div>
          </div>
        </form> -->
        <?php get_search_form(); ?>
      </div>
      <!-- // 検索フォーム sp -->

      <nav class="main-menu">

        <div class="main-menu--mobile-header mobile-only wrapper">
          <a style="flex:1;text-align:center" class="" target="_self" href="https://app.topsteptrader.com/login">Log In</a>
          <a style="flex:1;text-align:center" class="" target="_self" href="https://help.futures.topstep.com/hc/en-us">Support</a>
        </div>
        <!----------------------------------------- g-nav ----------------------------------------->
        <?php
          $args = [
            'menu' => 'g-nav',   // 管理画面で設定したメニュー名
            'menu_id' => 'menu-main-menu',   // <ul>タグにつけるid名
            'menu_class' => 'menu',    // <ul>タグにつけるクラス名
            'container' => false,       // <ul>タグを囲む<div>タグを削除
          ];
          wp_nav_menu($args);
        ?>
        <!-- <ul id="menu-main-menu" class="menu">

          <li id="menu-item-15265" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-15265">
            <a href="#" data-ps2id-api="true">How It Works</a>
            <ul class="sub-menu">
              <li id="menu-item-15253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15253">
                <a href="https://www.topstep.com/how-it-works/" data-ps2id-api="true">Our Program</a>
              </li>
              <li id="menu-item-15252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15252">
                <a href="https://www.topstep.com/futures-trading-101/" data-ps2id-api="true">Futures Trading 101</a>
              </li>
            </ul>
          </li>

          <li id="menu-item-13954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13954">
            <a href="https://www.topstep.com/free-coaching/" data-ps2id-api="true">Free Coaching</a>
          </li>

          <li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-844">
            <a href="https://www.topstep.com/resources-library/" data-ps2id-api="true">Resources</a>
            <ul class="sub-menu">
              <li id="menu-item-341" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-341">
                <a href="https://www.topstep.com/resources-library/listing/" data-ps2id-api="true">Blog</a>
              </li>
              <li id="menu-item-562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-562">
                <a href="https://www.topstep.com/trader-success-stories/" data-ps2id-api="true">Trader Success Stories</a>
              </li>
              <li id="menu-item-634" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-634">
                <a href="/resources-library/listing/?format=podcast" data-ps2id-api="true">Limit Up! Podcast</a>
              </li>
              <li id="menu-item-11470" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11470">
                <a target="_blank" rel="noopener" href="https://www.topstep.com/page/weekly-kickoff/" data-ps2id-api="true">Weekly Levels</a>
              </li>
              <li id="menu-item-568" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-568">
                <a href="https://www.topstep.com/why-topstep/community/" data-ps2id-api="true">Join Our Community</a>
              </li>
            </ul>
          </li>

          <li id="menu-item-14729" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14729">
            <a href="https://www.topstep.com/partners/" data-ps2id-api="true">Become a Partner</a>
          </li>

          <li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61">
            <a target="_blank" rel="noopener" href="https://products.topstep.com/?utm_source=homepage&#038;utm_medium=cta&#038;utm_campaign=cms_ctas&#038;utm_content=earn_funding" data-ps2id-api="true">Earn Funding</a>
          </li>

        </ul> -->
        <!----------------------------------------- // g-nav ----------------------------------------->

        <div class="main-menu--mobile-footer mobile-only">
          <div class="wrapper">
            <div class="main-menu--mobile-footer--last-menu-link">
              <a target="_blank" rel="noopener" href="https://products.topstep.com/?utm_source=homepage&amp;utm_medium=cta&amp;utm_campaign=cms_ctas&amp;utm_content=earn_funding" data-ps2id-api="true">Earn Funding</a>
            </div>
          </div>
        </div>

      </nav>

    </div>
  </header>
  <!-- ==== // header ==== -->