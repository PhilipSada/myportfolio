<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <!-- Styles -->
         <link href="/css/app.css" rel="stylesheet">

     <body>
        <nav class="navigate">
            <div class="logo">Logo</div>
            <div class="nav-links">
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Work</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="" class="resume">Resume</a></li>
                </ul>
            </div>
        </nav>
        <section class="hero">
             <p class="hero-intro">Hi, my name is</p>
             <h2>Philip Sada</h2>
             <h2>I create things for the web</h2>

             <div class="hero-text">
                <p>I'm a web developer who is very passionate about building <br> high quality web applications</p>
             </div>
             <div class="hero-contact"><a href="">Get In Touch</a></div>
        </section>
        <section class="about">
            <h2>About Me</h2>
            <div class="about-grid">
                <div class="about-text">
                <p> 
                    If you need a committed person that would get the job done, i'm the guy!. I work very hard to ensure all required projects are
                    completed on time. Also, with my ability to pay attention to details, you can be rest assured that those projects would be of high quality.
                    Furthermore, I'm really passionate about coding and I get excited when I explore new languages that would make
                    me more efficient when executing a task.</p><br><br>
                    <p>Here are a few technologies, I've been working with recently:</p><br>
                    <ul>
                        <li>HTML & (S)CSS</li>
                        <li>Javascript(ES6+)</li>
                        <li>Jquery</li>
                        <li>React</li>
                        <li>Vue</li>
                        <li>PHP Laravel</li>
                        <li>MYSQL</li>
                    </ul>
                </div>
                <div class="about-image-container">
                    <img src="/images/profile.jpg" alt="profile-picture" class="about-img">
                </div>
           </div>
        </section>
        <section class="work-section">
            <h2>Things I've Built</h2>
            <div class="work-grid">
                <div class="work-image-container">
                    <a href=""><img src="" alt="project-1"></a>
                </div>
                <div class="work-text">
                    <h4 class="work-title"></h4>
                    <div class="work-description">
                        <p>This is a streetwear fashion online store website built with react on the frontend and php laravel and mysql for the backend</p>
                    </div>
                    <div class="work-links">
                        <a href="">Github</a>
                        <a href="">View Project</a>
                    </div>
                </div>
                <div class="work-text">
                    <h4 class="work-title"></h4>
                    <div class="work-description">
                        <p>This is a restuarant website built with html, css on the frontend and php laravel and mysql for the backend.
                        </p>
                    </div>
                    <div class="work-links">
                        <a href="">Github</a>
                        <a href="">View Project</a>
                    </div>
                </div>
                <div class="work-image-container">
                    <a href=""><img src="" alt="project-1"></a>
                </div>
                <div class="work-image-container">
                    <a href=""><img src="" alt="project-1"></a>
                </div>
                <div class="work-text">
                    <h4 class="work-title"></h4>
                    <div class="work-description">
                        <p>This is a sport fashion online store built with vuejs on the frontend and php (custom php mvc framework) and mysql for the backend.
                        </p>
                    </div>
                    <div class="work-links">
                        <a href="">Github</a>
                        <a href="">View Project</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <h2>Get In Touch</h2>
            <form>
                <input type="text" name="text" placeholder="Full name" required>
                <input type="email" name="text" placeholder="Email" required>
                <input type="text" name="text" placeholder="Subject">
                <textarea></textarea>
                <button type="submit"></button>
            </form>
        </section>
         <footer>
             <div><p>Designed & Built by Philip Sada</p></div>
         </footer>
        <script src="/js/app.js"></script>
    </body>
</html>
