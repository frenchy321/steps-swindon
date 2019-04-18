<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>


      <section id="wrapper" class="py-5">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10">
              <h2 class="pb-5"><?php the_title(); ?></h2>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </section>
<?php endwhile; endif; ?>

<?php get_footer();