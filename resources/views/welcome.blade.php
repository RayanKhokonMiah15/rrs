<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>RRStudio</title>
</head>
<body>

<!-- Navbar-->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1 class="sitename">ЯR Studio</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Gallery</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
<!-- Navbar-->
    
<!-- Video Background-->
<div class="container">
<video autoplay loop muted plays-inline class="background-clip">
    <source src="{{asset('img/nature.mp4')}}" type="video/mp4">
</video>
<!-- Video Background-->

    <div class="content">
        <h1>RRStudio</h1>
        <a href="login">Gas Lee</a>
    </div>
</div>

</body>
</html>