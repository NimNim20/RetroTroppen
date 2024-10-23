<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>

      <?php
        $welcomeTxt = get_field("welcome");
        // $heroImage = get_field("hero_img");
        // $heroTxt = get_field("hero_txt");
        $reqTxt = get_field("required_txt");
      ?>

      <!-- Hero Image Section -->
       <!-- <section class="heroImage">
        <div class="hero-img-container">
          <img src="" alt="Hero Image" class="contact-img">
          <div class="hero-text-contact">
            <h1></h1>
          </div>
        </div>
       </section> -->

        <!-- Contact Form Section -->
        <section class="contactForm">
          <div class="container">
              <div class="col-12">
                <h2 class="welcomeTxt"><?php echo $welcomeTxt; ?></h2>
                <div class="reqTxt"><?php echo $reqTxt; ?></div>
                <?php echo do_shortcode ('[cf7form cf7key="contact-form-1"]'); ?>
              </div>
          </div>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>