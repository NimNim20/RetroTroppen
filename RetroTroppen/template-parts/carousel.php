<?php if($loop->have_posts()): ?>
    <?php while($loop->have_posts()): $loop->the_post(); ?>

    <?php 
    $image = get_field("carimage1");
    $image2 = get_field("carimage2");
    $image3 = get_field("carimage3");
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <!-- First Slide -->
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <!-- Second Slide -->
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>">
        </div>
        <!-- Third Slide -->
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>">
        </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <?php endwhile; ?>
<?php endif; ?>
