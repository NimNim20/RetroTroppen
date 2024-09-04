<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

          <?php
          $CarouselImage = get_field("carimage");
          $ArticleTitle = get_field("article_title");
          $ArticleDescription = get_field("article_description");
          ?>

          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <ol class="carousel-indicators">
                          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <!-- Slide -->
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo esc_url($CarouselImage['url']); ?>" alt="<?php echo esc_attr($CarouselImage['alt']); ?>">
                            <div class="carousel-caption d-none d-md-block">
                              <h5 class=""><?php echo $ArticleTitle ?></h5>
                              <p class=""><?php echo $ArticleDescription ?></p>
                            </div>
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>