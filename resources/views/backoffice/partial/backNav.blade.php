<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="#">Techie</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#" class="logo"><img src={{asset('img/logo.png')  }} alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#/hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route("about") }}" >About</a></li>
          <li><a class="nav-link scrollto" href="{{route("service") }}" >Services</a></li>
          <li><a class="nav-link scrollto " href="{{route("testimonials") }}" >Testimonials</a></li>
          <li><a class="nav-link scrollto" href="{{route("contact") }}" >Contact</a></li>
          <li><a href="{{route("backOffice")}}"><i class='bx bx-right-arrow-alt' ></i></i>Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>


