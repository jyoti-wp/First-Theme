<?php get_header(); ?>

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">Again some Dummy text here.</h2>
        <a href="#" class="btn btn--large btn--blue">Find Your Interests  </a>
    </div>
  </div>

  <div class="container container--narrow page-section">
    <?php 
      while (have_posts()) {
        the_post(); ?>

          <div class="post-item">
            <h2 class="headline headline--medium headline--post-title" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="metabox">
              <p>Post By <?php the_author_posts_link();  ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
            </div>
            <div class="generic-content">
              <?php the_excerpt(); ?>
              <p>
              <a class="btn btn--gray" href="<?php the_permalink(); ?>">continue Reading &raquo;</a>
              </p>
            </div>
          </div>

      <?php }
      echo paginate_links();
    ?>
  </div>
<?php get_footer(); ?>