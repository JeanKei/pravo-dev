<?php
/*
Template Name: политика
*/
?>
<?php get_header(); ?>
  <div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb__wrap">
        <?php echo wpcourses_breadcrumb( ' / ' ); ?>
      </div>
      <h1 class="title breadcrumb__title"><?php the_title(); ?></h1>
    </div>
  </div>
  <main class="main">
    <div class="polit">
      <div class="container">
        <div class="polit__wrap">
          <?php the_content() ?>
        </div>
      </div>
    </div>
  </main>
  <?php get_footer(); ?>
