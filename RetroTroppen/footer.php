<footer class="bg-light text-center text-lg-start" id="mainFooter">
  <div class="container p-4">
    <div class="row" id="footerRow">
      
      <article class="col-lg-6 col-md-12 mb-4">
        <h1 class="footer_headings">Retro Troppen</h1>
        <p class="footer_paragraph">
          <?php pll_e("Vores værdier er baseret på kvalitet, design og bæredygtighed. <br>Vi er stolte af at kunne tilbyde vores kunder unikke produkter og retro møbler.</br>")?>
        </p>
      </article>

      <nav class="col-lg-3 col-md-6 mb-4" aria-label="Footer navigation">
        <h2 class="footer_headings"><?php pll_e("Vores Links<")?></h2>
        <ul class="list-unstyled mb-0 footer-list">
          <li><a href="#" class="links text-white"><?php pll_e ("Hjem")?></a></li>
          <li><a href="#" class="links text-white"><?php pll_e ("Om os")?></a></li>
          <li><a href="<?php echo site_url('/blog')?>" class="links text-white"><?php pll_e ("Blog")?></a></li>
          <li><a href="<?php echo site_url('/contact')?>" class="links text-white"><?php pll_e ("Kontakt")?></a></li>
        </ul>
      </nav>

      <section class="col-lg-3 col-md-6 mb-4">
        <h2 class="footer_headings">Følg os</h2>
        <ul class="list-unstyled footer-list">
          <li><a href="#" class="links text-white">Facebook</a></li>
          <li><a href="#" class="links text-white">Twitter</a></li>
          <li><a href="#" class="links text-white">Instagram</a></li>
          <li><a href="#" class="links text-white">LinkedIn</a></li>
        </ul>
      </section>
      
    </div>
  </div>

  <!-- Copyright Section -->
  <section id="copyRight" class="bg-light">
    <div class="text-center p-3">
      <p class="text-white">© 2024 RetroTroppen:</p>
      <a class="text-white" href="#">https://wptest.cmsedu.dk/</a>
    </div>
  </section>
</footer>

<?php wp_footer(); ?>

</body>
</html>
