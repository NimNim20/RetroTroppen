<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Forside</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/blog')?>">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Web Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Butik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/contact')?>">Kontakt</a>
        </li>
      <form class="d-flex" role="search">
        <input id="search-area" class="form-control me-2 search" type="search" placeholder="Søg..." aria-label="Search">
        <button class="btn btn-outline-success search-btn" type="submit">Søg</button>
      </form>
    </div>
  </div>
</nav>