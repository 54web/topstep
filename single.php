<?php get_header(); ?>
<main data-localize="autoapprove">

  <a href="javascript:;" id="content"></a>

  <section class="single ">

    <div class="wrapper">
      <div class="single--top-row row">
        <div class="col col-md-offset-3 col-md-9 col-xs-12">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <!-- mv -->
          <section class="single-hero ">
            <div class="single-hero--meta uppercase flex align-center flex-wrap text-blog">
              <span><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
              <span>Posted by <?php the_author(); ?></span>
              <span><?php echo get_post_time('F j, Y'); ?></span>
            </div>
            <h1 class="single-hero--title"><?php the_title(); ?></h1>
            <div class="single-hero--image">
              <picture class="attachment-large--container size-large--container">
                <?php if ( has_post_thumbnail() ): ?>
                <img src="<?php the_post_thumbnail_url(); ?>">
                <?php else: ?>
                <img width="1024" height="683" data-src="<?php echo esc_url(home_url()) ; ?>/wp-content/uploads/2023/08/TopstepFeature.png" class="lazy attachment-large size-large" alt="" decoding="async" loading="lazy" />
                <?php endif; ?>
              </picture>
            </div>
          </section>
          <!-- // mv -->

          <?php endwhile; endif; ?>

        </div>
      </div>
    </div>


    <div class="theme-light ">
      <div class="wrapper">
        <div class="single--bottom-row row">

          <!-- ============= 左カラム サイドバー ============= -->
          <aside class="col col-md-3 col-xs-12">
            <div class="single--sidebar">

              <!-- メルマガ登録 -->
              <div class="test">
                <script>
                  window.hsFormsOnReady = window.hsFormsOnReady || [];
                  window.hsFormsOnReady.push(() => {
                    hbspt.forms.create({
                      portalId: 1806688,
                      formId: "47a2310a-1c0b-455e-8b77-02730f4c9044",
                      target: "#hbspt-form-1691804206000-3617007874",
                      region: "",
                    })
                  });
                </script>
                <div class="hbspt-form" id="hbspt-form-1691804206000-3617007874"></div>
              </div>
              <!-- // メルマガ登録 -->

              <div class="single--sidebar--separator"></div>

              <!-- SNS -->
              <div class="share">
                <p class="share--title">SHARE</p>
                <ul class="share--links flex align-center">
                  <li>
                    <a target="_blank" href="http://www.facebook.com/sharer.php?u=https://www.topstep.com/blog/july-jobs-recap-interest-rates-and-crude-oil-futures/">
                      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" viewBox="0 0 320 512">
                        <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a target="_blank" href="http://twitter.com/share?url=https://www.topstep.com/blog/july-jobs-recap-interest-rates-and-crude-oil-futures/">
                      <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" alt="Visit us on Twitter" class="twitter-icon" fill="currentColor">
                        <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.topstep.com/blog/july-jobs-recap-interest-rates-and-crude-oil-futures/">
                      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a target="_blank" href="mailto:?subject=Check this out&body=https://www.topstep.com/blog/july-jobs-recap-interest-rates-and-crude-oil-futures/">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330.001 330.001" fill="currentColor">
                        <path d="M173.871 177.097c-2.641 1.936-5.756 2.903-8.87 2.903-3.116 0-6.23-.967-8.871-2.903L30 84.602.001 62.603 0 275.001c.001 8.284 6.716 15 15 15L315.001 290c8.285 0 15-6.716 15-14.999V62.602l-30.001 22-126.129 92.495z" />
                        <path d="M165.001 146.4L310.087 40.001 19.911 40z" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- // SNS -->

              <div class="single--sidebar--separator"></div>

              <!-- タグ -->
              <div class="post-tags">
                <p>Post Tags:</p>
                <div>
                  <?php the_tags(); ?>
                  <!-- <a href='https://www.topstep.com/tag/commodity-futures/'>Commodity Futures</a>, <a href='https://www.topstep.com/tag/crypto-futures/'>Crypto Futures</a>, <a href='https://www.topstep.com/tag/day-trading/'>day trading</a>, <a href='https://www.topstep.com/tag/economic-calendar/'>Economic Calendar</a>, <a href='https://www.topstep.com/tag/energy-futures/'>Energy Futures</a>, <a href='https://www.topstep.com/tag/futures-trading/'>Futures Trading</a>, <a href='https://www.topstep.com/tag/interest-rate-futures/'>Interest Rate Futures</a>, <a href='https://www.topstep.com/tag/stock-index-futures/'>Stock Index Futures</a>, <a href='https://www.topstep.com/tag/technical-analysis/'>Technical Analysis</a>, <a href='https://www.topstep.com/tag/wheat-futures/'>Wheat Futures</a> -->
                </div>
              </div>
              <!-- //タグ -->

              <div class="single--sidebar--separator"></div>

            </div>
          </aside>
          <!-- ============= // 左カラム サイドバー ============= -->


          <div class="col col-md-9 col-xs-12">
            <!-- ============= コンテンツ ============= -->
            <div class="editor-content p-b-100">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>

            <?php endwhile; endif; ?>
            </div>
            <!-- ============= // コンテンツ ============= -->

          </div>
        </div>
      </div>
    </div>

    <section id="comments" class="p-t-60">
      <div class="wrapper text-center"></div>
    </section>


    <!-- ============= 関連ブログ？ ============= -->
    <section class="featured-posts-with-title  theme-dark will-animate" data-animation="fall-up" id="blog">

      <div class="wrapper">
        <div class="row">

          <div class="col col-sm-3 col-xs-12">
            <div class="row featured-posts-with-title--mobile-title-row">
              <div class="col-md-12 col-sm-6 col-xs-6">
                <div class="featured-posts-with-title--title h2">More From The Blog</div>
              </div>
              <div class="col-md-12 col-sm-6 col-xs-6 mobile-only">
              </div>
            </div>
          </div>

          <!---------------------- loop ---------------------->
          <div class="col col-sm-3 col-xs-12 featured-posts-with-title--thumbnail-column">
            <a href="https://www.topstep.com/blog/weekly-kickoff-levels-from-john-hoagland/" class="thumbnail-post thumbnail-post--blog">
              <div class="thumbnail-post--image-container">
                <picture class="attachment-large--container size-large--container">
                  <img width="1024" height="565" data-src="https://www.topstep.com/wp-content/uploads/2020/11/GrittyHoag_02_Merlot-1024x565.png" class="attachment-large size-large ls-is-cached lazyloaded" alt="Hoag" decoding="async" loading="lazy" data-srcset="https://www.topstep.com/wp-content/uploads/2020/11/GrittyHoag_02_Merlot-1024x565.png 1024w, https://www.topstep.com/wp-content/uploads/2020/11/GrittyHoag_02_Merlot-300x165.png 300w, https://www.topstep.com/wp-content/uploads/2020/11/GrittyHoag_02_Merlot-768x423.png 768w, https://www.topstep.com/wp-content/uploads/2020/11/GrittyHoag_02_Merlot.png 1052w" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://www.topstep.com/wp-content/uploads/2020/11/GrittyHoag_02_Merlot-1024x565.png 1024w, https://www.topstep.com/wp-content/uploads/2020/11/GrittyHoag_02_Merlot-300x165.png 300w, https://www.topstep.com/wp-content/uploads/2020/11/GrittyHoag_02_Merlot-768x423.png 768w, https://www.topstep.com/wp-content/uploads/2020/11/GrittyHoag_02_Merlot.png 1052w" src="https://www.topstep.com/wp-content/uploads/2020/11/GrittyHoag_02_Merlot-1024x565.png">
                </picture>
              </div>
              <div class="thumbnail-post--meta">
                <div class="thumbnail-post--category uppercase text-blog">Market News</div>
                <div class="thumbnail-post--title">Weekly Kickoff Levels from John Hoagland</div>
                <div class="thumbnail-post--excerpt">
                Every Friday afternoon, Topstep Performance Coach John Hoagland fires up his charts to find his Weekly Kickoff Levels, which identify...
                </div>
                <span class="button">Read More</span>
              </div>
            </a>
          </div>
          <!---------------------- // loop ---------------------->

          <!---------------------- loop ---------------------->
          <div class="col col-sm-3 col-xs-12 featured-posts-with-title--thumbnail-column">
            <a href="https://www.topstep.com/blog/crypto-volatility-wheat-futures-and-the-boj-yield-curve/" class="thumbnail-post thumbnail-post--blog">
              <div class="thumbnail-post--image-container">
                <picture class="attachment-large--container size-large--container">
                  <img width="1024" height="683" data-src="https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-1024x683.jpg" class="attachment-large size-large ls-is-cached lazyloaded" alt="Trading Screen - Laptop" decoding="async" loading="lazy" data-srcset="https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-1024x683.jpg 1024w, https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-300x200.jpg 300w, https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-768x512.jpg 768w, https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-1536x1024.jpg 1536w, https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-2048x1365.jpg 2048w" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-1024x683.jpg 1024w, https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-300x200.jpg 300w, https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-768x512.jpg 768w, https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-1536x1024.jpg 1536w, https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-2048x1365.jpg 2048w" src="https://www.topstep.com/wp-content/uploads/2023/01/Trading-Screen-Laptop-1024x683.jpg">
                </picture>
              </div>
              <div class="thumbnail-post--meta">
                <div class="thumbnail-post--category uppercase text-blog">Market News</div>
                <div class="thumbnail-post--title">Crypto Volatility, Wheat Futures, and the BOJ Yield Curve</div>
                <div class="thumbnail-post--excerpt">
                Top things to watch this week The Economic Calendar: MONDAY: Chicago PMI, Dallas Fed Manufacturing Survey, 3-Month Bill Auction, 6-Month...
                </div>
                <span class="button">Read More</span>
              </div>
            </a>
          </div>
          <!---------------------- // loop ---------------------->

          <!---------------------- loop ---------------------->
          <div class="col col-sm-3 col-xs-12 featured-posts-with-title--thumbnail-column">
            <a href="https://www.topstep.com/blog/stocks-commodities-and-call-option-mania/" class="thumbnail-post thumbnail-post--blog">
              <div class="thumbnail-post--image-container">
                <picture class="attachment-large--container size-large--container">
                  <img width="1024" height="680" data-src="https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-1024x680.jpg" class="attachment-large size-large ls-is-cached lazyloaded" alt="Stock Market Charts" decoding="async" loading="lazy" data-srcset="https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-1024x680.jpg 1024w, https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-300x199.jpg 300w, https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-768x510.jpg 768w, https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-1536x1020.jpg 1536w, https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-2048x1360.jpg 2048w" sizes="(max-width: 1024px) 100vw, 1024px" srcset="https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-1024x680.jpg 1024w, https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-300x199.jpg 300w, https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-768x510.jpg 768w, https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-1536x1020.jpg 1536w, https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-2048x1360.jpg 2048w" src="https://www.topstep.com/wp-content/uploads/2022/06/Stock-Market-Charts-1024x680.jpg">
                </picture>
              </div>
              <div class="thumbnail-post--meta">
                <div class="thumbnail-post--category uppercase text-blog">Market News</div>
                <div class="thumbnail-post--title">Stocks, Commodities, and Call Option Mania</div>
                <div class="thumbnail-post--excerpt">
                Top things to watch this week The Economic Calendar: MONDAY: Chicago Fed National Activity Index, PMI Composite Flash, 3-Month Bill...
                </div>
                <span class="button">Read More</span>
              </div>
            </a>
          </div>
          <!---------------------- // loop ---------------------->

        </div>
      </div>

    </section>
    <!-- ============= 関連ブログ？ ============= -->

    <div class="spacer" style="height:60px"></div>

  </section>

</main>
<?php get_footer(); ?>
