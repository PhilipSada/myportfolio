<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Philip Sada</title>
        <meta name="description" content="passionate about building high quality web applications">
        {{-- <meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large"> --}}
        <meta name="image_src" content="https://philipsada.com/images/preview.png">
        <meta name="image_url" content="https://philipsada.com/images/preview.png">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Philip Sada | Web Developer">
        <meta property="og:image" content="https://philipsada.com/images/preview.png">            
        <meta property="og:image:type" content="image/png">        
        <meta property="og:image:width" content="1200">        
        <meta property="og:image:height" content="630">        
        <meta property="og:description" content="passionate about building high quality web applications">
        <meta property="og:url" content="https://philipsada.com/">
        <meta property="og:site_name" content="Philip Sada | Web Developer">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Philip Sada | Web Developer">
        <meta name="twitter:description" content="passionate about building high quality web applications">
           <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
         <!-- Styles -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link href="/css/app.css" rel="stylesheet">

     <body>
       
        <nav class="navigate">
            <div class="logo"><a href="/">PS</a></div>
            <div class="nav-links">
                <ul>
                    <li><a class="about-link">About</a></li>
                    <li><a class="work-link">Work</a></li>
                    <li><a class="contact-link">Contact</a></li>
                    <li><a  href="/files/PHILIPSADACV.pdf" target="_blank" class="resume">Resume</a></li>
                </ul>
            </div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
        <div class="navigation-menu-wrapper">
            <div class="navigation-menu">
                <div class="navigation-close">Close</div>
                 <ul>
                    <li><a class="about-link">About</a></li>
                    <li><a class="work-link">Work</a></li>
                    <li><a class="contact-link">Contact</a></li>
                    <li><a  href="/files/PHILIPSADACV.pdf" target="_blank" class="resume">Resume</a></li>
                 </ul>
            </div>
        </div>
        
        @yield('content')
       
         <footer>
             <div><p>Designed & Built by Philip Sada</p></div>
         </footer>

         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
