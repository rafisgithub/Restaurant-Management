<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- Include Font Awesome for the search icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Ensure the search icon appears in the correct position */
    .navbar .navbar-nav {
      display: flex;
      align-items: center;
    }
    .navbar .nav-item .btn {
      display: flex;
      align-items: center;
      padding: 0; /* Remove padding around the button */
      background: none; /* Remove button background */
      border: black; /* Remove button border */
    }
    .navbar .nav-item .form-inline {
      margin-bottom: 0;
    }
    .navbar .nav-item button i {
      vertical-align: middle;
      color: #f8f9fa; /* Icon color (light) */
      font-size: 14px; /* Smaller icon size */
    }
    /* Remove focus/active styles */
    .navbar .nav-item button:focus, 
    .navbar .nav-item button:active {
      outline: none; /* Remove focus outline */
      background: none; /* Remove background color */
      color: #f8f9fa; /* Keep the icon color as white */
      box-shadow: none; /* Remove box-shadow */
    }
    /* Adjust the position of the search bar */
    .navbar .nav-item.search-item {
      margin-left: auto; /* This will push the search bar to the far right */
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="logo.png" alt="Food Corner Logo" style="height: 40px;"/>
        Friends<br><small>Zone</small>
      </a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          
          @if (Route::has('login'))
            @auth
              <li class="nav-item">
                <x-app-layout>
                </x-app-layout>
              <!-- Logout form to ensure proper logout -->
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            @else
              <li class="nav-item"><a href="{{ route('login') }}" class="nav-link" style="margin-right: 10px;">Login</a></li>
              <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
            @endauth
          @endif

          <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li> <!-- Add Cart link -->
          
          <!-- Search Icon placed at the far right -->
          <li class="nav-item search-item">
            <form class="form-inline my-2 my-lg-0" action="search.html" method="get">
              <button class="btn" type="submit">
                <i class="fas fa-search"></i> <!-- Font Awesome Search Icon -->
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
</body>
</html>
