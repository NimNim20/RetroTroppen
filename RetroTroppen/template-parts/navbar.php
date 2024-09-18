<?php 
// Method to check if a user is logged in
$isLoggedIn = false;

echo '


      <section id="search-area">
        <input type="text" placeholder="Search..." class="search-bar">
      </section>

  <nav class="navbar">

    <div class="navbar-links">
        <ul>
            <li><a href="/">Forside</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Web Shop</a></li>
            <li><a href="#">Butik</a></li>
            <li><a href="kontakt">Kontakt</a></li>';

            

if ($isLoggedIn) {
  echo '<li><a href="#">Profile</a></li>';
  echo '<li><a href="#">Logout</a></li>';
}   else {
      echo '<li><a href="#">Login</a></li>';
      echo '<li><a href="register">Register</a></li>';
}

echo '    </ul>

  </div>
</nav>';
?>

<script src="navigation.js"></script>