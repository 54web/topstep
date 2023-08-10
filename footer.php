<!-- ==== footer ==== -->
<footer class="main-footer ">

  <!-- ============================== footer PC ============================== -->
  <div class="main-footer--desktop desktop-only wrapper">
    <div class="main-footer--top flex ">

      <div class="main-footer--top--left">
        <nav>
          <!----------------------------------------- footer-nav ----------------------------------------->
          <?php
            $args = [
              'menu' => 'footer-nav',   // 管理画面で設定したメニュー名
              'menu_id' => 'menu-footer-menu-1',   // <ul>タグにつけるid名
              'menu_class' => 'menu',    // <ul>タグにつけるクラス名
              'container' => false,       // <ul>タグを囲む<div>タグを削除
            ];
            wp_nav_menu($args);
          ?>
          <!-- <ul id="menu-footer-menu-1" class="menu">
            <li id="menu-item-14205" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-14205">
              <a href="<?php echo esc_url(home_url()) ; ?>/free-coaching/" data-ps2id-api="true">Free Coaching</a>
              <ul class="sub-menu">
                <li id="menu-item-14206" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14206"><a target="_blank" rel="noopener" href="https://topstep.com/free-coaching" data-ps2id-api="true">Find your coaching style</a></li>
                <li id="menu-item-14208" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14208"><a target="_blank" rel="noopener" href="https://www.youtube.com/@TopstepOfficial" data-ps2id-api="true">Subscribe to us on YouTube</a></li>
              </ul>
            </li>
            <li id="menu-item-2651" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2651">
              <a href="<?php echo esc_url(home_url()) ; ?>/about-us/" data-ps2id-api="true">About</a>
              <ul class="sub-menu">
                <li id="menu-item-8672" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8672"><a href="<?php echo esc_url(home_url()) ; ?>/about-us/" data-ps2id-api="true">About Us</a></li>
                <li id="menu-item-2258" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2258"><a href="<?php echo esc_url(home_url()) ; ?>/about-us/our-team/" data-ps2id-api="true">Our Team</a></li>
                <li id="menu-item-2799" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2799"><a href="<?php echo esc_url(home_url()) ; ?>/join-our-team/" data-ps2id-api="true">Current Openings</a></li>
              </ul>
            </li>
            <li id="menu-item-882" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-882">
              <a href="<?php echo esc_url(home_url()) ; ?>/news/" data-ps2id-api="true">News</a>
              <ul class="sub-menu">
                <li id="menu-item-636" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-636"><a href="<?php echo esc_url(home_url()) ; ?>/news/" data-ps2id-api="true">Latest News</a></li>
                <li id="menu-item-10904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10904"><a href="<?php echo esc_url(home_url()) ; ?>/economic-calendar/" data-ps2id-api="true">Economic Calendar</a></li>
              </ul>
            </li>
            <li id="menu-item-642" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-642">
              <a target="_blank" rel="noopener" href="https://shop-topstep.myshopify.com" data-ps2id-api="true">Extras</a>
              <ul class="sub-menu">
                <li id="menu-item-644" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-644"><a href="https://app.topsteptrader.com/dashboard/invite-friends" data-ps2id-api="true">Refer a Friend</a></li>
                <li id="menu-item-643" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-643"><a target="_blank" rel="noopener" href="https://shop-topstep.myshopify.com" data-ps2id-api="true">Topstep Gear</a></li>
              </ul>
            </li>
          </ul>  -->
          <!----------------------------------------- // footer-nav ----------------------------------------->
        </nav>

        <nav>
          <!----------------------------------------- footer-nav-2 ----------------------------------------->
          <?php
            $args = [
              'menu' => 'footer-nav-2',   // 管理画面で設定したメニュー名
              'menu_id' => 'menu-footer-menu-2',   // <ul>タグにつけるid名
              'menu_class' => 'menu',    // <ul>タグにつけるクラス名
              'container' => false,       // <ul>タグを囲む<div>タグを削除
            ];
            wp_nav_menu($args);
          ?>
          <!-- <ul id="menu-footer-menu-2" class="menu">
            <li id="menu-item-12603" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-12603"><a rel="privacy-policy" href="<?php echo esc_url(home_url()) ; ?>/privacy-policy/" data-ps2id-api="true">Privacy Policy</a></li>
            <li id="menu-item-647" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-647"><a href="<?php echo esc_url(home_url()) ; ?>/terms-of-use/" data-ps2id-api="true">Terms of Use</a></li>
            <li id="menu-item-4232" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4232"><a href="<?php echo esc_url(home_url()) ; ?>/risk-disclosure/" data-ps2id-api="true">Risk Disclosure</a></li>
          </ul>  -->
          <!----------------------------------------- // footer-nav-2 ----------------------------------------->
        </nav>

      </div>

      <div class="main-footer--top--center">

        <section class="social-media-list">
          <a href="https://www.facebook.com/TopstepOfficial" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
            <span class="sr-only">Visit us on facebook</span>
          </a>
          <a href="https://www.youtube.com/c/TopstepOfficial" target="_blank">
            <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" alt="Visit us on YouTube" class="youtube-icon" fill="currentColor"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
            <span class="sr-only">Visit us on youtube</span>
          </a>
          <a href="https://www.instagram.com/topstepofficial/" target="_blank">
            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" alt="Visit us on Instagram" class="insagram-icon" fill="currentColor"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
            <span class="sr-only">Visit us on instagram</span>
          </a>
          <a href="https://twitter.com/Topstep" target="_blank">
            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" alt="Visit us on Twitter" class="twitter-icon" fill="currentColor"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
            <span class="sr-only">Visit us on twitter</span>
          </a>
          <a href="https://www.linkedin.com/company/topstep" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" viewBox="0 0 448 512"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
            <span class="sr-only">Visit us on linkedin</span>
          </a>
          <a href="https://discord.gg/eTaf7tGRdC" target="_blank">
            <svg width="71" height="55" viewBox="0 0 71 55" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60.1045 4.8978C55.5792 2.8214 50.7265 1.2916 45.6527 0.41542C45.5603 0.39851 45.468 0.440769 45.4204 0.525289C44.7963 1.6353 44.105 3.0834 43.6209 4.2216C38.1637 3.4046 32.7345 3.4046 27.3892 4.2216C26.905 3.0581 26.1886 1.6353 25.5617 0.525289C25.5141 0.443589 25.4218 0.40133 25.3294 0.41542C20.2584 1.2888 15.4057 2.8186 10.8776 4.8978C10.8384 4.9147 10.8048 4.9429 10.7825 4.9795C1.57795 18.7309 -0.943561 32.1443 0.293408 45.3914C0.299005 45.4562 0.335386 45.5182 0.385761 45.5576C6.45866 50.0174 12.3413 52.7249 18.1147 54.5195C18.2071 54.5477 18.305 54.5139 18.3638 54.4378C19.7295 52.5728 20.9469 50.6063 21.9907 48.5383C22.0523 48.4172 21.9935 48.2735 21.8676 48.2256C19.9366 47.4931 18.0979 46.6 16.3292 45.5858C16.1893 45.5041 16.1781 45.304 16.3068 45.2082C16.679 44.9293 17.0513 44.6391 17.4067 44.3461C17.471 44.2926 17.5606 44.2813 17.6362 44.3151C29.2558 49.6202 41.8354 49.6202 53.3179 44.3151C53.3935 44.2785 53.4831 44.2898 53.5502 44.3433C53.9057 44.6363 54.2779 44.9293 54.6529 45.2082C54.7816 45.304 54.7732 45.5041 54.6333 45.5858C52.8646 46.6197 51.0259 47.4931 49.0921 48.2228C48.9662 48.2707 48.9102 48.4172 48.9718 48.5383C50.038 50.6034 51.2554 52.5699 52.5959 54.435C52.6519 54.5139 52.7526 54.5477 52.845 54.5195C58.6464 52.7249 64.529 50.0174 70.6019 45.5576C70.6551 45.5182 70.6887 45.459 70.6943 45.3942C72.1747 30.0791 68.2147 16.7757 60.1968 4.9823C60.1772 4.9429 60.1437 4.9147 60.1045 4.8978ZM23.7259 37.3253C20.2276 37.3253 17.3451 34.1136 17.3451 30.1693C17.3451 26.225 20.1717 23.0133 23.7259 23.0133C27.308 23.0133 30.1626 26.2532 30.1066 30.1693C30.1066 34.1136 27.28 37.3253 23.7259 37.3253ZM47.3178 37.3253C43.8196 37.3253 40.9371 34.1136 40.9371 30.1693C40.9371 26.225 43.7636 23.0133 47.3178 23.0133C50.9 23.0133 53.7545 26.2532 53.6986 30.1693C53.6986 34.1136 50.9 37.3253 47.3178 37.3253Z" fill="#23272A"/>
            <span class="sr-only">Visit us on discord</span>
          </a>
        </section>

        <!-- NewsLetter-form -->
        <div class="main-footer--newsletter-form-container desktop">
          <script>
          window.hsFormsOnReady = window.hsFormsOnReady || [];
          window.hsFormsOnReady.push(()=>{
          hbspt.forms.create({
          portalId: 1806688,
          formId: "badd80aa-2896-49b6-a34c-f5b765bec920",
          target: "#hbspt-form-1690940716000-6790841361",
          region: "",
          })});
          </script>
          <div class="hbspt-form" id="hbspt-form-1690940716000-6790841361"></div>
        </div>
        <!-- // NewsLetter-form -->

      </div>

      <div class="main-footer--top--right">
        <a href="<?php echo esc_url(home_url()) ; ?>" title="Topstep home">
          <div class="site-logo">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 99.7 29.5" xml:space="preserve"><style>.st0{fill:currentColor}</style><path class="st0" d="M4 5.7H.4V.8h13.3v4.9h-3.5c-.3 0-.5.2-.4.5v22.6H4.4V6.2c0-.3-.2-.5-.4-.5zM60.2 5.7h-3.6V.8h13.3v4.9h-3.5c-.3 0-.5.2-.4.5v22.6h-5.3V6.2c0-.3-.2-.5-.5-.5zM14.3 22.5V7.1C14.3 2.6 17 .5 21 .5s6.7 2.1 6.7 6.6v15.4c0 4.7-2.7 6.6-6.7 6.6s-6.7-1.9-6.7-6.6zm8-.5V7.4c0-1.7-.3-2.3-1.2-2.3s-1.2.6-1.2 2.3V22c0 1.6.3 2.2 1.2 2.2s1.2-.5 1.2-2.2zM29.4.8h6.5c4.5 0 6.4 1.9 6.4 5.6v7.3c0 3.8-1.8 6.1-6.4 6.1h-1.3v8.9h-5.2V.8zm5.2 4.7V15c0 .1.1.2.2.2h.7c1 0 1.5-.4 1.5-1.6V6.7c0-.8-.7-1.5-1.5-1.5h-.7c-.1.1-.2.2-.2.3zM43.4 23.2v-5.5h5.4v5.2c0 1 .2 1.5 1.1 1.5s1-.5 1-1.5v-3.6c0-1.5-1.2-2.2-3.1-3.3-2.3-1.4-4.2-2.8-4.2-6.1V6.2c0-3.8 2.2-5.8 6.3-5.8S56 2.3 56 5.8v4.8h-5.1V6.3c0-1.1-.2-1.5-1-1.5s-1 .4-1 1.5v3c0 1.3 1.1 1.8 3.1 3.1 2.2 1.4 4.2 2.8 4.2 6.2v4.6c0 4.1-2.1 6-6.4 6-4.6 0-6.4-1.9-6.4-6zM71 .8h10.6v4.9h-5.1c-.2 0-.3.1-.3.3v5.9c0 .1.1.3.3.3h4.6v4.9h-4.6c-.2 0-.3.1-.3.3v6c0 .2.1.3.3.3h5.1v5.1H71V.8zM82.8.8h6.5c4.5 0 6.4 1.9 6.4 5.6v7.3c0 3.8-1.8 6.1-6.4 6.1H88v8.9h-5.2V.8zM88 5.5V15c0 .1.1.2.2.2h.7c1 0 1.5-.4 1.5-1.6V6.7c0-.8-.7-1.5-1.5-1.5h-.7c-.1.1-.2.2-.2.3zM96.8 3.9c-.3-.2-.4-.6-.4-1.1v-.1c0-.4.1-.8.4-1.1.3-.3.6-.4 1.1-.4.4 0 .8.1 1 .4s.4.6.4 1.1v.1c0 .5-.1.8-.4 1.1s-.6.4-1 .4-.8-.2-1.1-.4zm1.9-.2c.2-.2.3-.5.3-.9s-.1-.7-.3-.9c-.2-.2-.5-.3-.9-.3s-.6.1-.9.3c-.2.2-.3.5-.3.9s.1.7.3.9c.3.2.6.3 1 .3.3 0 .6-.1.8-.3zm-1.1-.8v.6h-.3V2h.6c.2 0 .4 0 .5.1s.1.2.1.3c0 .1 0 .2-.1.3s-.1.1-.2.1c.1 0 .2 0 .2.1s.1.1.1.3v.2h-.3v-.2c0-.1 0-.2-.1-.2 0 0-.1-.1-.3-.1h-.2zm0-.7v.5h.3c.1 0 .2 0 .3-.1.1 0 .1-.1.1-.2s0-.1-.1-.2c-.1 0-.1-.1-.3-.1h-.3z"/></svg>
          </div>
        </a>
        <div class="editor-content">
          <p><strong><img decoding="async" loading="lazy" class="alignnone wp-image-14720" src="<?php echo esc_url(home_url()) ; ?>/wp-content/uploads/2023/08footer-icon5-300x147.png" alt="" width="273" height="134" srcset="<?php echo esc_url(home_url()) ; ?>/wp-content/uploads/2023/08/footer-icon5-300x147.png 300w, <?php echo esc_url(home_url()) ; ?>/wp-content/uploads/2023/08/footer-icon5.png 558w" sizes="(max-width: 273px) 100vw, 273px" /><br />
          Topstep, LLC<br />
          </strong>Chicago Board of Trade Building<br />
          <a style="text-decoration: none;" href="https://www.google.com/maps/place/Topstep/@41.878023,-87.632401,15z/data=!4m5!3m4!1s0x0:0xcdf68e77c8ce306c!8m2!3d41.878023!4d-87.632401" target="_blank" rel="noopener">141 W Jackson Blvd<br />
          #4240<br />
          Chicago, IL 60604</a></p>
          <p>&nbsp;</p>
          <p><strong>Support Hours (Monday &#8211; Friday): 7AM &#8211; 6PM CT</strong></p>
          <p><a href="tel:8884071611">(888) 407-1611</a></p>
        </div>
      </div>

    </div>

    <div class="main-footer--bottom">
      <div class="main-footer--bottom--left editor-content">
        <p><span style="font-weight: 400;">*Payouts are processed in 7 hours (on average) when a payout request is made before 10:00 AM CT.</span></p>
        <p><b data-stringify-type="bold">Trader Evaluation Disclaimer:</b> The candidate pass rate of the Trading Combine® evaluation program was 25.51% between January 1, 2023 &#8211; July 1, 2023. This percentage is based on users that entered the Trading Combine and reached the Funded Level™ during this time period. The Trading Combine is a realistic simulation of trading under actual market conditions and is difficult to pass even for experienced traders. The Trading Combine is not suggested for individuals with minimal trading experience.</p>
        <p>To mitigate Prohibited Conduct, <span style="font-weight: 400;">gambling behavior and exploiting the simulated environment</span><span style="font-weight: 400;">, all trading accounts that have any trade day that exceeds 200 total contracts will be subject to review by our Risk &amp; Compliance Team. If Topstep identifies trading activity that, in its sole discretion, relates to Prohibited Conduct, Topstep reserves the right to, delete the trading day and all profits, restart the account or close the account. If repeat violations, Topstep may ban the trader from use of all or a portion of the Site and Services.</span></p>
        <p>All content published and distributed by Topstep LLC and its affiliates (collectively, the “Company”) is to be treated as general information only. None of the information provided by the Company or contained herein is intended as (a) investment advice, (b) an offer or solicitation of an offer to buy or sell, or (c) a recommendation, endorsement, or sponsorship of any security, company, or fund. Testimonials appearing on the Company’s websites may not be representative of other clients or customers and is not a guarantee of future performance or success. Use of the information contained on the Company’s websites is at your own risk and the Company and its partners, representatives, agents, employees, and contractors assume no responsibility or liability for any use or misuse of such information.</p>
        <p>Futures trading contains substantial risk and is not for every investor. An investor could potentially lose all or more than the investor’s initial investment. Only risk capital—money that can be lost without jeopardizing one’s financial security or lifestyle—should be used for trading and only those individuals with sufficient risk capital should consider trading. Nothing contained herein is a solicitation or an offer to buy or sell futures, options, or forex. Past performance is not necessarily indicative of future results.</p>
        <p>CFTC Rule 4.41 &#8211; Hypothetical or Simulated performance results have certain limitations. Unlike an actual performance record, simulated results do not represent actual trading. Also, because the trades have not actually been executed, the results may have under-or-over compensated for the impact, if any, of certain market factors, such as lack of liquidity. Simulated trading programs, in general, are also subject to the fact that they are designed with the benefit of hindsight. No representation is being made that any account will or is likely to achieve profit or losses similar to those shown.</p>
      </div>
      <div class="main-footer--bottom--right editor-content">
        <p>© 2023 – Topstep LLC. All rights reserved. TopstepTrader, The Chevron Logo, Topstep, TopstepFX, Trading Combine, Funded Account, and TSTrader are all trademarks of TopstepTechnologies LLC.</p>
        <p><a href="https://rule29.com" target="_blank" rel="noopener">Site by Rule29</a></p>
      </div>
    </div>

  </div>
  <!-- ============================== // footer PC ============================== -->


  <!-- ============================== footer Mobile ============================== -->
  <div class="main-footer--mobile mobile-only wrapper">
    <div class="">
      <section class="social-media-list">
        <a href="https://www.facebook.com/TopstepOfficial" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
          </svg><span class="sr-only">Visit us on facebook</span>
        </a>
        <a href="https://www.youtube.com/c/TopstepOfficial" target="_blank">
          <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" alt="Visit us on YouTube" class="youtube-icon" fill="currentColor"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
          <span class="sr-only">Visit us on youtube</span>
        </a>
        <a href="https://www.instagram.com/topstepofficial/" target="_blank">
          <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" alt="Visit us on Instagram" class="insagram-icon" fill="currentColor"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
          <span class="sr-only">Visit us on instagram</span>
        </a>
        <a href="https://twitter.com/Topstep" target="_blank">
          <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" alt="Visit us on Twitter" class="twitter-icon" fill="currentColor"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
          <span class="sr-only">Visit us on twitter</span>
        </a>
        <a href="https://www.linkedin.com/company/topstep" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" viewBox="0 0 448 512"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
          <span class="sr-only">Visit us on linkedin</span>
        </a>
        <a href="https://discord.gg/eTaf7tGRdC" target="_blank">
          <svg width="71" height="55" viewBox="0 0 71 55" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60.1045 4.8978C55.5792 2.8214 50.7265 1.2916 45.6527 0.41542C45.5603 0.39851 45.468 0.440769 45.4204 0.525289C44.7963 1.6353 44.105 3.0834 43.6209 4.2216C38.1637 3.4046 32.7345 3.4046 27.3892 4.2216C26.905 3.0581 26.1886 1.6353 25.5617 0.525289C25.5141 0.443589 25.4218 0.40133 25.3294 0.41542C20.2584 1.2888 15.4057 2.8186 10.8776 4.8978C10.8384 4.9147 10.8048 4.9429 10.7825 4.9795C1.57795 18.7309 -0.943561 32.1443 0.293408 45.3914C0.299005 45.4562 0.335386 45.5182 0.385761 45.5576C6.45866 50.0174 12.3413 52.7249 18.1147 54.5195C18.2071 54.5477 18.305 54.5139 18.3638 54.4378C19.7295 52.5728 20.9469 50.6063 21.9907 48.5383C22.0523 48.4172 21.9935 48.2735 21.8676 48.2256C19.9366 47.4931 18.0979 46.6 16.3292 45.5858C16.1893 45.5041 16.1781 45.304 16.3068 45.2082C16.679 44.9293 17.0513 44.6391 17.4067 44.3461C17.471 44.2926 17.5606 44.2813 17.6362 44.3151C29.2558 49.6202 41.8354 49.6202 53.3179 44.3151C53.3935 44.2785 53.4831 44.2898 53.5502 44.3433C53.9057 44.6363 54.2779 44.9293 54.6529 45.2082C54.7816 45.304 54.7732 45.5041 54.6333 45.5858C52.8646 46.6197 51.0259 47.4931 49.0921 48.2228C48.9662 48.2707 48.9102 48.4172 48.9718 48.5383C50.038 50.6034 51.2554 52.5699 52.5959 54.435C52.6519 54.5139 52.7526 54.5477 52.845 54.5195C58.6464 52.7249 64.529 50.0174 70.6019 45.5576C70.6551 45.5182 70.6887 45.459 70.6943 45.3942C72.1747 30.0791 68.2147 16.7757 60.1968 4.9823C60.1772 4.9429 60.1437 4.9147 60.1045 4.8978ZM23.7259 37.3253C20.2276 37.3253 17.3451 34.1136 17.3451 30.1693C17.3451 26.225 20.1717 23.0133 23.7259 23.0133C27.308 23.0133 30.1626 26.2532 30.1066 30.1693C30.1066 34.1136 27.28 37.3253 23.7259 37.3253ZM47.3178 37.3253C43.8196 37.3253 40.9371 34.1136 40.9371 30.1693C40.9371 26.225 43.7636 23.0133 47.3178 23.0133C50.9 23.0133 53.7545 26.2532 53.6986 30.1693C53.6986 34.1136 50.9 37.3253 47.3178 37.3253Z" fill="#23272A"/>
          <span class="sr-only">Visit us on discord</span>
        </a>
      </section>

      <nav>
        <!----------------------------------------- footer-nav-sp ----------------------------------------->
        <?php
          $args = [
            'menu' => 'footer-nav-sp',   // 管理画面で設定したメニュー名
            'menu_id' => 'menu-footer-menu-3',   // <ul>タグにつけるid名
            'menu_class' => 'menu',    // <ul>タグにつけるクラス名
            'container' => false,       // <ul>タグを囲む<div>タグを削除
          ];
          wp_nav_menu($args);
        ?>
        <!-- <ul id="menu-footer-menu-3" class="menu">

          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-14205">
            <a href="<?php echo esc_url(home_url()) ; ?>/free-coaching/" data-ps2id-api="true">Free Coaching</a>
            <ul class="sub-menu">
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14206"><a target="_blank" rel="noopener" href="https://topstep.com/free-coaching" data-ps2id-api="true">Find your coaching style</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14208"><a target="_blank" rel="noopener" href="https://www.youtube.com/@TopstepOfficial" data-ps2id-api="true">Subscribe to us on YouTube</a></li>
            </ul>
          </li>

          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2651">
            <a href="<?php echo esc_url(home_url()) ; ?>/about-us/" data-ps2id-api="true">About</a>
            <ul class="sub-menu">
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8672"><a href="<?php echo esc_url(home_url()) ; ?>/about-us/" data-ps2id-api="true">About Us</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2258"><a href="<?php echo esc_url(home_url()) ; ?>/about-us/our-team/" data-ps2id-api="true">Our Team</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2799"><a href="<?php echo esc_url(home_url()) ; ?>/join-our-team/" data-ps2id-api="true">Current Openings</a></li>
            </ul>
          </li>

          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-882">
            <a href="<?php echo esc_url(home_url()) ; ?>/news/" data-ps2id-api="true">News</a>
            <ul class="sub-menu">
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-636"><a href="<?php echo esc_url(home_url()) ; ?>/news/" data-ps2id-api="true">Latest News</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10904"><a href="<?php echo esc_url(home_url()) ; ?>/economic-calendar/" data-ps2id-api="true">Economic Calendar</a></li>
            </ul>
          </li>

          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-642">
            <a target="_blank" rel="noopener" href="https://shop-topstep.myshopify.com" data-ps2id-api="true">Extras</a>
            <ul class="sub-menu">
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-644"><a href="https://app.topsteptrader.com/dashboard/invite-friends" data-ps2id-api="true">Refer a Friend</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-643"><a target="_blank" rel="noopener" href="https://shop-topstep.myshopify.com" data-ps2id-api="true">Topstep Gear</a></li>
            </ul>
          </li>

        </ul> -->
        <!----------------------------------------- // footer-nav-sp ----------------------------------------->
      </nav>

      <!-- NewsLetter-form sp ? -->
      <div class="main-footer--newsletter-form-container mobile"></div>
      <!-- // NewsLetter-form sp ? -->

      <nav>
        <!----------------------------------------- footer-nav-sp 2 ----------------------------------------->
        <?php
          $args = [
            'menu' => 'footer-nav-sp-2',   // 管理画面で設定したメニュー名
            'menu_id' => 'menu-footer-menu-4',   // <ul>タグにつけるid名
            'menu_class' => 'menu',    // <ul>タグにつけるクラス名
            'container' => false,       // <ul>タグを囲む<div>タグを削除
          ];
          wp_nav_menu($args);
        ?>
        <!-- <ul id="menu-footer-menu-4" class="menu">
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-12603">
            <a rel="privacy-policy" href="<?php echo esc_url(home_url()) ; ?>/privacy-policy/" data-ps2id-api="true">Privacy Policy</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-647">
            <a href="<?php echo esc_url(home_url()) ; ?>/terms-of-use/" data-ps2id-api="true">Terms of Use</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4232">
            <a href="<?php echo esc_url(home_url()) ; ?>/risk-disclosure/" data-ps2id-api="true">Risk Disclosure</a>
          </li>
        </ul>  -->
        <!----------------------------------------- // footer-nav-sp 2 ----------------------------------------->
      </nav>

      <a href="<?php echo esc_url(home_url()) ; ?>" title="Topstep home">
        <picture class="site-logo--container">
          <img width="200" height="46" data-src="<?php echo esc_url(home_url()) ; ?>/wp-content/uploads/2023/07/Topstep-1S1R-logo-smaller.png" class="lazy site-logo" alt="Topstep One Step One Rule" decoding="async" loading="lazy" />
        </picture> 
      </a>

      <div class="editor-content contact">
        <p><strong><img decoding="async" loading="lazy" class="alignnone wp-image-14720" src="<?php echo esc_url(home_url()) ; ?>/wp-content/uploads/2023/08/footer-icon5-300x147.png" alt="" width="273" height="134" srcset="<?php echo esc_url(home_url()) ; ?>/wp-content/uploads/2023/08/footer-icon5-300x147.png 300w, <?php echo esc_url(home_url()) ; ?>/wp-content/uploads/2023/08/footer-icon5.png 558w" sizes="(max-width: 273px) 100vw, 273px" /><br />
        Topstep, LLC<br />
        </strong>Chicago Board of Trade Building<br />
        <a style="text-decoration: none;" href="https://www.google.com/maps/place/Topstep/@41.878023,-87.632401,15z/data=!4m5!3m4!1s0x0:0xcdf68e77c8ce306c!8m2!3d41.878023!4d-87.632401" target="_blank" rel="noopener">141 W Jackson Blvd<br />
        #4240<br />
        Chicago, IL 60604</a></p>
        <p>&nbsp;</p>
        <p><strong>Support Hours (Monday &#8211; Friday): 7AM &#8211; 6PM CT</strong></p>
        <p><a href="tel:8884071611">(888) 407-1611</a></p>
      </div>
      
    </div>

    <div class="editor-content">
      <p><span style="font-weight: 400;">*Payouts are processed in 7 hours (on average) when a payout request is made before 10:00 AM CT.</span></p>
      <p><b data-stringify-type="bold">Trader Evaluation Disclaimer:</b> The candidate pass rate of the Trading Combine® evaluation program was 25.51% between January 1, 2023 &#8211; July 1, 2023. This percentage is based on users that entered the Trading Combine and reached the Funded Level™ during this time period. The Trading Combine is a realistic simulation of trading under actual market conditions and is difficult to pass even for experienced traders. The Trading Combine is not suggested for individuals with minimal trading experience.</p>
      <p>To mitigate Prohibited Conduct, <span style="font-weight: 400;">gambling behavior and exploiting the simulated environment</span><span style="font-weight: 400;">, all trading accounts that have any trade day that exceeds 200 total contracts will be subject to review by our Risk &amp; Compliance Team. If Topstep identifies trading activity that, in its sole discretion, relates to Prohibited Conduct, Topstep reserves the right to, delete the trading day and all profits, restart the account or close the account. If repeat violations, Topstep may ban the trader from use of all or a portion of the Site and Services.</span></p>
      <p>All content published and distributed by Topstep LLC and its affiliates (collectively, the “Company”) is to be treated as general information only. None of the information provided by the Company or contained herein is intended as (a) investment advice, (b) an offer or solicitation of an offer to buy or sell, or (c) a recommendation, endorsement, or sponsorship of any security, company, or fund. Testimonials appearing on the Company’s websites may not be representative of other clients or customers and is not a guarantee of future performance or success. Use of the information contained on the Company’s websites is at your own risk and the Company and its partners, representatives, agents, employees, and contractors assume no responsibility or liability for any use or misuse of such information.</p>
      <p>Futures trading contains substantial risk and is not for every investor. An investor could potentially lose all or more than the investor’s initial investment. Only risk capital—money that can be lost without jeopardizing one’s financial security or lifestyle—should be used for trading and only those individuals with sufficient risk capital should consider trading. Nothing contained herein is a solicitation or an offer to buy or sell futures, options, or forex. Past performance is not necessarily indicative of future results.</p>
      <p>CFTC Rule 4.41 &#8211; Hypothetical or Simulated performance results have certain limitations. Unlike an actual performance record, simulated results do not represent actual trading. Also, because the trades have not actually been executed, the results may have under-or-over compensated for the impact, if any, of certain market factors, such as lack of liquidity. Simulated trading programs, in general, are also subject to the fact that they are designed with the benefit of hindsight. No representation is being made that any account will or is likely to achieve profit or losses similar to those shown.</p>
    </div>

    <div class="editor-content disclaimer">
      <p>© 2023 – Topstep LLC. All rights reserved. TopstepTrader, The Chevron Logo, Topstep, TopstepFX, Trading Combine, Funded Account, and TSTrader are all trademarks of TopstepTechnologies LLC.</p>
      <p><a href="https://rule29.com" target="_blank" rel="noopener">Site by Rule29</a></p>
    </div>


  </div>
  <!-- ============================== // footer Mobile ============================== -->

</footer>
<!-- ==== // footer ==== -->



<section class="wrapper cookie-notification theme-light">
  <div class="editor-content">
    <p>We use cookies in order to improve and personalize your browsing experience. To find out more and configure your cookie settings, <a href="<?php echo esc_url(home_url()) ; ?>/privacy-policy/">click here</a>.</p>
  </div>
  <button class="cookie-notification--close button button--yellow-green no-wrap">Accept And Continue</button>
</section>

<!-- <script>
  ( function ( body ) {
  'use strict';
  body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
  } )( document.body );
</script> -->

<!-- <script type='text/javascript' src='<?php echo esc_url(home_url()) ; ?>/wp-content/plugins/simple-tooltips/zebra_tooltips.js?ver=6.2.2' id='simple_tooltips_base-js'></script> -->

<!-- <script type='text/javascript' id='leadin-script-loader-js-js-extra'>
  /* <![CDATA[ */
  var leadin_wordpress = {"userRole":"visitor","pageType":"home","leadinPluginVersion":"9.2.81"};
  /* ]]> */
</script> -->

<!-- <script type='text/javascript' src='https://js.hs-scripts.com/1806688.js?integration=WordPress&#038;ver=9.2.81' async defer id='hs-script-loader'></script> -->

<!-- <script type='text/javascript' id='page-scroll-to-id-plugin-script-js-extra'>
  /* <![CDATA[ */
  var mPS2id_params = {"instances":{"mPS2id_instance_0":{"selector":"a[href*='#']:not([href='#'])","autoSelectorMenuLinks":"true","excludeSelector":"a[href^='#tab-'], a[href^='#tabs-'], a[data-toggle]:not([data-toggle='tooltip']), a[data-slide], a[data-vc-tabs], a[data-vc-accordion], a.screen-reader-text.skip-link","scrollSpeed":800,"autoScrollSpeed":"true","scrollEasing":"easeInOutQuint","scrollingEasing":"easeOutQuint","forceScrollEasing":"false","pageEndSmoothScroll":"true","stopScrollOnUserAction":"false","autoCorrectScroll":"false","autoCorrectScrollExtend":"false","layout":"vertical","offset":0,"dummyOffset":"false","highlightSelector":"","clickedClass":"mPS2id-clicked","targetClass":"mPS2id-target","highlightClass":"mPS2id-highlight","forceSingleHighlight":"false","keepHighlightUntilNext":"false","highlightByNextTarget":"false","appendHash":"false","scrollToHash":"true","scrollToHashForAll":"true","scrollToHashDelay":0,"scrollToHashUseElementData":"true","scrollToHashRemoveUrlHash":"false","disablePluginBelow":0,"adminDisplayWidgetsId":"true","adminTinyMCEbuttons":"true","unbindUnrelatedClickEvents":"false","unbindUnrelatedClickEventsSelector":"","normalizeAnchorPointTargets":"false","encodeLinks":"false"}},"total_instances":"1","shortcode_class":"_ps2id"};
  /* ]]> */
</script>
<script type='text/javascript' src='https://www.topstep.com/wp-content/plugins/page-scroll-to-id/js/page-scroll-to-id.min.js?ver=1.7.6' id='page-scroll-to-id-plugin-script-js'></script> -->

<script type='text/javascript' src='<?php echo esc_url( site_url() ); ?>/wp-content/themes/topstep/public/js/main.js?ver=1660860589' id='izi-main-js'></script>

<!-- <script type='text/javascript' src='https://www.topstep.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2' id='jquery-ui-core-js'></script> -->

<!-- NewsLetter用JS？ -->
<script type='text/javascript' defer src='https://js.hsforms.net/forms/embed/v2.js?ver=9.2.81' id='leadin-forms-v2-js'></script>
<!-- // NewsLetter用JS？ -->

<!-- <script type="text/javascript">
  jQuery(function() {

  jQuery(".tooltips img").closest(".tooltips").css("display", "inline-block");

  new jQuery.Zebra_Tooltips(jQuery('.tooltips').not('.custom_m_bubble'), {
  'background_color':     '#ffffff',
  'color':				'#000000',
  'max_width':  300,
  'opacity':    1, 
  'position':    'center'
  });


  });
</script>         -->

<!-- <script type="text/javascript">
  (function (d, t) {
  var pp = d.createElement(t), s = d.getElementsByTagName(t)[0];
  pp.src = '//app.pageproofer.com/embed/0a427d86-762c-5edd-8e1b-4e9bcc6c4ecc';
  pp.type = 'text/javascript';
  pp.async = true;
  s.parentNode.insertBefore(pp, s);
  })(document, 'script');
</script> -->

<?php wp_footer(); ?>
</body>
</html>