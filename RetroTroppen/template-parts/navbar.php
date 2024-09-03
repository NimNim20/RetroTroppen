<?php 
// Method to check if a user is logged in
$isLoggedIn = false;

echo '


      <section id="search-area" class="search-bar">
        <input type="text" placeholder="Search...">
      </section>

  <nav class="navbar">

    <div class="navbar-links">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Web Shop</a></li>
            <li><a href="#">Butik</a></li>
            <li><a href="#">Kontakt</a></li>';

            

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
?>

<script src="navigation.js"></script>