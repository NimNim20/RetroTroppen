
    <!-- Navbar with Logo, Search Bar, Cart, and User Icon -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <!-- Logo on the left -->
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/40x40" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
            </a>
            
            <!-- Search bar in the center -->
            <form class="d-flex mx-auto navbar-search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Søg</button>
            </form>
            
            <!-- Cart and User icons on the right -->
            <div class="d-flex">
                <a href="#" class="me-3">
                    <img src="https://via.placeholder.com/24x24" alt="Cart Icon" width="24" height="24">
                </a>
                <a href="#">
                    <img src="https://via.placeholder.com/24x24" alt="User Icon" width="24" height="24">
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Navbar with Links -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(pll_get_post(get_page_by_path("frontpage")->ID)) ?>"><?php pll_e("Forside") ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(pll_get_post(get_page_by_path("blog")->ID)) ?>"><?php pll_e("Blog") ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(pll_get_post(get_page_by_path("shop")->ID)) ?>"><?php pll_e("Web shop") ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(pll_get_post(get_page_by_path("contact")->ID)) ?>"><?php pll_e("Kontakt") ?></a>
                </li>
            </ul>
        </div>
    </nav>