@extends('welcome')
@section('title', 'Philip Sada')

@section('content')

<div class="hero">
    <p class="hero-intro">Hi, my name is</p>
    <h2>Philip Sada.</h2>
    <h2>I create things for the web.</h2>

    <div class="hero-text">
       <p>I'm a web developer who is very passionate about building <br> high quality web applications.</p>
    </div>
    <div class="hero-text-1">
       <p>I'm a web developer who is very passionate about building high quality web applications.</p>
    </div>
    <div class="hero-contact"><a class="hero-contact-link">Get In Touch</a></div>
</div>
<div class="about" id="about-me">
   <h2>About Me</h2>
   <div class="about-grid">
       <div class="about-text">
       <p> 
           If you need a committed person that would get the job done, i'm the guy! I work very hard to ensure all required projects are
           completed on time. Also, with my ability to pay attention to details, you can be rest assured that those projects would be of high quality.
           Furthermore, I'm really passionate about coding and I get excited when I explore new languages that would make
           me more efficient when executing a task.</p><br><br>
           <p>Here are a few technologies I've been working with recently:</p><br>
           <ul>
               <li>HTML & (S)CSS</li>
               <li>Javascript(ES6+)</li>
               <li>React</li>
               <li>PHP Laravel</li>
               <li>MYSQL</li>
           </ul>
       </div>
       <div class="about-image-container">
           <img src="/images/Phil2.jpg" alt="profile-picture" class="about-img">
       </div>
       {{-- <div class="about-cover"></div> --}}
  </div>
</div>
<div class="work-section" id="work">
   <h2>Things I've Built</h2>
   <div class="work-grid">
       <div class="work-image-container image-container-1">
           <a href="https://phill-fitness.herokuapp.com/" target="_blank"><img src="/images/fitness.png" class="work-img" alt="project-1"></a>
       </div>
       <div class="work-text work-text-1">
           <h4 class="work-title"></h4>
           <div class="work-description">
               <p>A fitness website. The main features of this website include filters to help users search for available gym classes based on the company's location and a form for users to get registered as members.</p>
                <p>Technologies used:</p>
                <ul>
                    <li>HTML & (S)CSS</li>
                    <li>Javascript(ES6+)</li>
                    <li>React</li>
                    <li>PHP Laravel</li>
                    <li>MYSQL</li>
                </ul>
           </div>
           <div class="work-links">
               <a href="https://github.com/PhilipSada/fitness" class="github" target="_blank">Github</a>
               <a href="https://phill-fitness.herokuapp.com/" class="project" target="_blank">View Project</a>
           </div>
       </div>
       <div class="work-text work-text-2">
           <h4 class="work-title"></h4>
           <div class="work-description">
               <p>A website for a Furniture Manufacturing Company. The main features include page and scroll animations, a contact form with validation, a mailing system to
                 receive emails from customers once they have submitted the contact form.
               </p>
               <p>Technologies used:</p>
               <ul>
                   <li>HTML & (S)CSS</li>
                   <li>Javascript(ES6+)</li>
                   <li>GSAP</li>
                   <li>Barbajs</li>
                   <li>Scroll Magic</li>
                   <li>PHP Laravel</li>
                   <li>MYSQL</li>
               </ul>
           </div>
           <div class="work-links">
               <a href="https://github.com/PhilipSada/FURNITUREBARN" class="github" target="_blank">Github</a>
               <a href="https://furniturebarn.herokuapp.com/" class="project" target="_blank">View Project</a>
           </div>
       </div>
       <div class="work-image-container image-container-2">
           <a href="https://furniturebarn.herokuapp.com/" target="_blank"><img src="/images/furniture.png" class="work-img" alt="project-1"></a>
       </div>
       <div class="work-text mobile-text">
        <h4 class="work-title"></h4>
        <div class="work-description">
            <p>A website for a Furniture Manufacturing Company. The main features include page and scroll animations, a contact form with validation, a mailing system to
              receive emails from customers once they have submitted the contact form.
            </p>
            <p>Technologies used:</p>
            <ul>
                <li>HTML & (S)CSS</li>
                <li>Javascript(ES6+)</li>
                <li>GSAP</li>
                <li>Barbajs</li>
                <li>Scroll Magic</li>
                <li>PHP Laravel</li>
                <li>MYSQL</li>
            </ul>
        </div>
        <div class="work-links">
            <a href="https://github.com/PhilipSada/FURNITUREBARN" class="github" target="_blank">Github</a>
            <a href="https://furniturebarn.herokuapp.com/" class="project" target="_blank">View Project</a>
        </div>
    </div>
       <div class="work-image-container image-container-3">
           <a href="https://yummiep.herokuapp.com/" target="_blank"><img src="/images/restaurant.png" class="work-img" alt="project-1"></a>
       </div>
       <div class="work-text work-text-3">
           <h4 class="work-title"></h4>
           <div class="work-description">
               <p>A fast-food restaurant website. The main features include page animations, a contact form with validation, a mailing system to receive
                  emails when a customer submits the contact form, an offers form where customers could fill in their details 
                  so that they could receive the latest offers from the company, a reservation form to enable customers reserve a table and the company save 
                  the customer information in the database</p>
                <p>Technologies used:</p>
                  <ul>
                      <li>HTML & (S)CSS</li>
                      <li>Javascript(ES6+)</li>
                      <li>GSAP</li>
                      <li>Barbajs</li>
                      <li>Scroll Magic</li>
                      <li>PHP Laravel</li>
                      <li>MYSQL</li>
                  </ul>
           </div>
           <div class="work-links">
               <a href="https://github.com/PhilipSada/YUMMYP" class="github" target="_blank">Github</a>
               <a href="https://yummiep.herokuapp.com/" class="project" target="_blank">View Project</a>
           </div>
       </div>
   </div>
</div>
<div class="contact" id="contact-me">
   <h2>Get In Touch</h2>

   <div class="row">
        <div class="col-md-12 text-center">
            <p>If you have any new opportunities for me or just want to ask me a question, my inbox is always open and I will 
                get back to you as soon as possible </p>
            <div class="contact-btn"><a href="mailto:sadaphillip@gmail.com" class="contact-link">Get In Touch</a></div>
        </div>
   </div>
   {{-- <div class="row">
       <div class="col-md-8">
           <div class="card">
               <h5 class="card-header enquiry-header"></h5>
               <div class="card-body">
               <form method="POST" action="/contact">
                   @csrf
                   <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="inputFirstName">First Name</label>
                               <input id="inputFirstName" type="text" class="form-control form-control-md @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" 
                               required autocomplete="name" placeholder="John">
   
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
                               required autocomplete="name" placeholder="Doe">
   
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
                               required autocomplete="name" placeholder="johndoe@gmail.com">
   
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
                               required autocomplete="name" placeholder="+2345757575757">
   
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
       </div> --}}
   
   

   </div>
</div>
@endsection