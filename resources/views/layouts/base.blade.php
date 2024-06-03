<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/mobile.css') }}">
    <script src="https://kit.fontawesome.com/0c94bff300.js" crossorigin="anonymous"></script>
    <title>Eddyenin's Portfolio</title>
</head>
<body>
      <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="logo">
                <a href="index.html">
                    <i>E</i>ddyenin
                </a>
            </div>

            <div class="nav-links">
                <ul>
                    <li><a href="{{ route('home') }}" id="home" class="btn nav-link-item link-i"><i class="fa-solid fa-house link-i"></i>Home</a></li>
                    <li><a href="{{ route('about') }}" id="about" class="btn nav-link-item link-i"><i class="fa-solid fa-user link-i"></i>About</a></li>
                    <!-- <li><a href="resume.html" id="resume" class="btn nav-link-item link-i"><i class="fa-solid fa-file link-i"></i>Resume</a></li> -->
                    <li> <a href="{{ route('projects') }}" id="work" class="btn nav-link-item link-i"><i class="fa-solid fa-list-check link-i"></i>Projects</a></li>
                    <li> <a href="{{ route('contact') }}" id="contact" class="btn nav-link-item link-i"><i class="fa-solid fa-address-book link-i"></i>Contact</a></li>
                    <!-- <a href="blog.html" id="blog" class="btn nav-link-item link-i"><i class="fa-brands fa-blogger link-i"></i>Blog</a> -->
                </ul>
            </div>

            <!-- Hamburger -->
            <button class="hamburger-button">
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
            </button>

            <div class="mobile-menu">
                <ul>
                    <li><a href="{{ route('home') }}" id="home" class="btn  link-i"><i class="fa-solid fa-house link-i"></i>Home</a></li>
                    <li><a href="{{ route('about') }}" id="about" class="btn link-i"><i class="fa-solid fa-user link-i"></i>About</a></li>
                    <!-- <li><a href="resume.html" id="resume" class="btn link-i"><i class="fa-solid fa-file link-i"></i>Resume</a></li> -->
                    <li> <a href="{{ route('projects') }}" id="work" class="btn link-i"><i class="fa-solid fa-list-check link-i"></i>Projects</a></li>
                    <li> <a href="{{ route('contact') }}" id="contact" class="btn link-i"><i class="fa-solid fa-address-book link-i"></i>Contact</a></li>
                    <!-- <a href="blog.html" id="blog" class="btn nav-link-item link-i"><i class="fa-brands fa-blogger link-i"></i>Blog</a> -->
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
