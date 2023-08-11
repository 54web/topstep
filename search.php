<?php get_header(); ?>
<main  data-localize="autoapprove">

<a href="javascript:;" id="content"></a>

<section class="inner-hero parallax-container   one-col " style="">
  <div class="wrapper text-center">
    <p class="m-b-10 h5">Search Results for</p>
    <h1 class="text-white  "><?php the_search_query(); ?></h1>
  </div>
</section>

<section class="search-content">

  <!---------------------- loop ---------------------->
  <?php if (have_posts()): ?>
  <?php while(have_posts()) : the_post();?>
  <div class="wrapper search-content--wrapper will-animate" data-animation="fall-up">
    <a class="search-content--post flex flex-wrap align-start m-b-30 p-t-30" href="<?php the_permalink(); ?>">
      <picture class="attachment-thumbnail--container size-thumbnail--container">
        <?php if ( has_post_thumbnail() ): ?>
        <img src="<?php the_post_thumbnail_url(); ?>">
        <?php else: ?>
        <img width="150" height="150" data-src="<?php echo esc_url(home_url()) ; ?>/wp-content/uploads/2023/08/TopstepFeature-150x150.png" class="lazy attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy" />
        <?php endif; ?>
      </picture>
      <div class="search-content--content editor-content">
        <p><strong><?php the_title(); ?></strong></p>
        <div class="search-content--copy flex space-between align-start">
          <p>
          <?php the_author(); ?>
          <?php echo get_post_time('F j, Y'); ?>
          <?php the_time(); ?>
          <?php echo mb_substr(strip_tags($post-> post_content),0,80).'...'; ?></p>
          <span class="button">View</span>
        </div>
      </div>
    </a>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
  <!---------------------- // loop ---------------------->

</section>   
</main>
<?php get_footer(); ?>