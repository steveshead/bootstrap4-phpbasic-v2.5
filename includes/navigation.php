<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "News") {?>active<?php }?>" href="news.php">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "Album") {?>active<?php }?>" href="album.php">Album</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "Pricing") {?>active<?php }?>" href="pricing.php">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Forms
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item <?php if ($CURRENT_PAGE == "Signin") {?>active<?php }?>" href="signin.php">Sign In</a>
          <a class="dropdown-item <?php if ($CURRENT_PAGE == "Checkout") {?>active<?php }?>" href="checkout.php">Checkout</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "Product") {?>active<?php }?>" href="product.php">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "Custom") {?>active<?php }?>" href="custom.php">Color Scheme</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
