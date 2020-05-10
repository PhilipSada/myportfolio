<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Philip Sada</title>

         <!-- Styles -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link href="/css/app.css" rel="stylesheet">

     <body>
        <nav class="navigate">
            <div class="logo">PS</div>
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
                    <a href="https://freshmann.net" target="_blank"><img src="/images/ecommerce.png" class="work-img" alt="project-1"></a>
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
                    <a href="https://furniturebarnng.com" target="_blank"><img src="/images/furniture.png" class="work-img" alt="project-1"></a>
                </div>
                <div class="work-image-container">
                    <a href="https://www.yummiep.com" target="_blank"><img src="/images/restaurant.png" class="work-img" alt="project-1"></a>
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
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <h5 class="card-header enquiry-header">Send an Enquiry</h5>
                        <div class="card-body">
                        <form method="POST" action="/contact" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputFirstName">First Name</label>
                                        <input id="inputFirstName" type="text" class="form-control form-control-md @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" 
                                        required autocomplete="name" placeholder="John" autofocus >
            
                                                @error('firstname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputLastName">Last Name</label>
                                        <input id="inputLastName" type="text" class="form-control form-control-md @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" 
                                        required autocomplete="name" placeholder="Doe" autofocus >
            
                                                @error('lastname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input id="inputEmail" type="email" class="form-control form-control-md @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                        required autocomplete="name" placeholder="johndoe@gmail.com" autofocus >
            
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPhoneNumber">Phone Number</label>
                                        <input id="inputPhoneNumber" type="tel" class="form-control form-control-md @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" 
                                        required autocomplete="name" placeholder="+2345757575757" autofocus >
            
                                                @error('phonenumber')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div>
                                </div>
                            </div>
                                 
                            <div class="form-group">
                                <label for="inputMessage">Please leave me a message </label>
                                <textarea name="message" row="20" cols="50" class="form-control"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                    
                                </div>
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="contact-submit">ENQUIRE NOW</button> 
                                    </p>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            
            
        
            </div>
        </section>
         <footer>
             <div><p>Designed & Built by Philip Sada</p></div>
         </footer>

         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
