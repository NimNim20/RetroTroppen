<?php 
// Method to check if a user is logged in
$isLoggedIn = false;

echo '<nav class="navbar">
    <div class="brand-title">RetroTroppen</div>
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbar-links">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>';

if ($isLoggedIn) {
  echo '<li><a href="#">Profile</a></li>';
  echo '<li><a href="#">Logout</a></li>';
}   else {
      echo '<li><a href="#">Login</a></li>';
      echo '<li><a href="#">Register</a></li>';
}

echo '    </ul>
  </div>
</nav>';

// wp_enqueue_script("navigation-script", get_template_directory_uri() . "/navigation.js", array(), false, true)
?>