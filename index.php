<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Bonbon: Dorayaki Bites</title>
    <style>
        @media (max-width: 1139px){
            .wrapper {
                width: 900px;
            }

            .testimonial-image img {
                width: 150px;
                height: 150px;
                margin-left: 15px;
            }

            .testimonial-image2 img {
                width: 150px;
                height: 150px;
                margin-right: 15px;
            }

            .quote, .name {
                font-size: 18px;
                margin: 0 15px 0 15px;
            }
        }

        @media (max-width: 955px){
            .wrapper {
                width: 700px;
            }

            .testimonial-image img {
                width: 120px;
                height: 120px;
                margin-left: 15px;
            }

            .testimonial-image2 img {
                width: 120px;
                height: 120px;
                margin-right: 20px;
            }

            .quote, .name {
                font-size: 15px;
                margin: 0 15px 0 15px;
            }
        }

        @media (max-width: 1078px) {
            .carousel-item img {
                height: 500px;
                width: 900px;
            }
        }

        @media (max-width: 963px) {
            .carousel-item img {
                height: 500px;
                width: 800px;
            }
        }

        @media (max-width: 852px) {
            .carousel-item img {
                height: 480px;
                width: 750px;
            }
        }

        @media (max-width: 918px) {
            .hero {
                height: 420px;
            }
            .hero-img {
                width: 420px; height: 350px;
            }
            .break-spacer {
                height: 70px;
            }
            .hero h1 {
                font-size: 50px; 
            }

            .subtext {
                font-size: 30px; 
            }

            .subtext1 {
                font-size: 20px; 
            }
            .hero svg {
                height: 25px; width: 25px;
            }
        }

        @media (max-width: 768px) {
            .break-spacer {
                display: none; 
            }

            .contact-logo {
                width: 140px;
                height: 40px;
            }

            .hero-img-div{
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 20px auto 0 auto; border: 0; padding: 0;
                height: 200px; width: 200px;
            }

            .hero-img-div img {
                display: flex;
                justify-content: center;
                align-items: center;
                content: url('img/resized-hero-img.png'); 
                height: 100%; width: 100%;
                margin: 30px 0 0 0; border: 0; padding: 0;
            }   

            .hero {
                flex-direction: column;
                height: auto; 
                padding: 0 0 20px 0;
                margin: 0; border: 0; 
            }

            .hero-img {
                padding-right: 0;
                padding-bottom: 20px; 
            }

            .hero-text {
                text-align: center;
                padding-left: 0;
            }

            .hero h1 {
                font-size: 50px; 
            }

            .subtext {
                font-size: 30px; 
            }

            .subtext1 {
                font-size: 20px; 
            }

            .buynow {  
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card2 {
                margin-top: 30px;
            }

            .carousel-item img {
                height: 400px; 
                width: 650px;
            }

            .carousel-caption {
                font-size: 14px; /* Adjust text size for smaller screens */
                padding: 10px; /* Reduce padding */
                background-color: rgba(0, 0, 0, 0.8); /* Darker background for better visibility */
                display: block !important; /* Force captions to show */
            }

            .carousel-caption h2 {
                font-size: 16px; /* Smaller heading size */
                margin-bottom: 5px;
            }

            .carousel-caption h6 {
                font-size: 12px; /* Smaller subheading size */
            }

            .carousel-inner {
                align-items: center; /* Ensure proper alignment */
            }

            .carousel-caption.d-none {
                display: block !important; /* Override Bootstrap's default hiding behavior */
            }

            .wrapper {
                width: 500px;
            }

            .testimonial-image img {
                width: 100px;
                height: 100px;
                margin-left: 15px;
            }

            .testimonial-image2  {
                margin-right: 15px;
            }

            .testimonial-image2 img {
                width: 100px;
                height: 100px;
                margin-right: 20px;
            }

            .quote, .name {
                font-size: 15px;
                margin: 0 15px 0 15px;
            }

            .gallery {
                grid-template-columns: repeat(4, 1fr); 
            }
        }

        @media(max-width: 500px) {
            .wrapper {
                width: 350px;
            }

            .header h1 {
                font-size: 50px;
            }

            .testimonial-image img {
                width: 90px;
                height: 70px;
                margin-left: 10px;
            }

            .testimonial-image2  {
                margin-right: 10px;
            }

            .testimonial-image2 img {
                width: 80px;
                height: 70px;
            }

            .quote, .name {
                font-size: 12px;
                margin: 0 15px 0 15px;
            }

            .gallery {
                grid-template-columns: repeat(3, 1fr); 
            }

            .hidden-br1 {
                display: block !important;
            }
        }

        @media(max-width: 370px){
            .small-footer p {
                font-size: 15px;
                text-align: center;
            }
        }

        @media (max-width: 350px) {
            .nav-logo {
                margin-left: 0;
            }

            .contact-logo {
                width: 120px;
                height: 30px;
            }

            .logo-desc {
                font-size: 14px;
            }

            .hero-img-div img {
                content: url('img/resized-hero-img.png'); 
                margin: 0; border: 0; padding: 0;
            }  

            .hero h1 {
                font-size: 45px; 
            }

            .subtext {
                font-size: 25px; 
            }

            .subtext1 {
                font-size: 18px; 
            }
            .hero svg {
                height: 25px; width: 25px;
            }

            .shadow {
                width: 240px; 
                height: 220px; 
            }

            .who-img {
                width: 260px; 
                height: 220px; 
            }

            .carousel-item img {
                height: 350px; 
                width: 650px;
            }

            .wrapper {
                width: 300px;
            }

            .testimonial-image img {
                width: 70px;
                height: 50px;
                margin-left: 10px;
            }

            .testimonial-image2  {
                margin-right: 10px;
            }

            .testimonial-image2 img {
                width: 70px;
                height: 50px;
            }

            .quote, .name {
                font-size: 10px;
                margin: 0 15px 0 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg" style="background-color: var(--light-brown);">
            <div class="container-fluid">
                <a href="../index.html">
                    <img src="../img/logo.png" class="nav-logo navbar-brand custom-navbar-link">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse ms-5 gap-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                  <li class="nav-item">
                    <a class="nav-link custom-navbar-link" href="browse.html">Browse</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link custom-navbar-link" href="order.html">Orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link custom-navbar-link" href="#">Coupons</a>
                  </li>
                </ul>
                <ul class="navbar-nav me-5 mb-2 mb-lg-0 w-25 d-flex justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle custom-navbar-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#48201a" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../auth/signup.php">Register</a></li>
                            <li><a class="dropdown-item" href="../auth/login.php">Login</a></li>
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
            </div>
        </nav>
    </header><br><br>
    <section>
        <div class="hero"><br>
            <div class="row">
                <div class="col-md-6 hero-img-div">
                    <div class="break-spacer"></div>
                    <img src="../../img/hero-img.png" alt="BonBon Image" class="hero-img" id="hero-img">
                </div>
                <div class="col-md-6 hero-text">
                    <br><br><br>
                    <h1>Dorayummy</h1> <br>
                    <p class="subtext">We offer amazingly <br> delicious dorayaki bites!</p>
                    <p class="subtext1"> 300,000 products+ sold.</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="var(--dark-brown)" class="bi bi-facebook hero-icon" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                    <svg fill="#48201a" height="30" width="30" version="1.1" id="Layer_1" fill="var(--dark-brown)" class="hero-icon"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 300" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="XMLID_504_"> <path id="XMLID_505_" d="M38.52,0.012h222.978C282.682,0.012,300,17.336,300,38.52v222.978c0,21.178-17.318,38.49-38.502,38.49 H38.52c-21.184,0-38.52-17.313-38.52-38.49V38.52C0,17.336,17.336,0.012,38.52,0.012z M218.546,33.329 c-7.438,0-13.505,6.091-13.505,13.525v32.314c0,7.437,6.067,13.514,13.505,13.514h33.903c7.426,0,13.506-6.077,13.506-13.514 V46.854c0-7.434-6.08-13.525-13.506-13.525H218.546z M266.084,126.868h-26.396c2.503,8.175,3.86,16.796,3.86,25.759 c0,49.882-41.766,90.34-93.266,90.34c-51.487,0-93.254-40.458-93.254-90.34c0-8.963,1.37-17.584,3.861-25.759H33.35v126.732 c0,6.563,5.359,11.902,11.916,11.902h208.907c6.563,0,11.911-5.339,11.911-11.902V126.868z M150.283,90.978 c-33.26,0-60.24,26.128-60.24,58.388c0,32.227,26.98,58.375,60.24,58.375c33.278,0,60.259-26.148,60.259-58.375 C210.542,117.105,183.561,90.978,150.283,90.978z"></path> </g> </g>
                    </svg>
                    <svg fill="#48201a" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg" fill="var(--dark-brown)" class="hero-icon" 
                        xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M19.589 6.686a4.793 4.793 0 0 1-3.77-4.245V2h-3.445v13.672a2.896 2.896 0 0 1-5.201 1.743l-.002-.001.002.001a2.895 2.895 0 0 1 3.183-4.51v-3.5a6.329 6.329 0 0 0-5.394 10.692 6.33 6.33 0 0 0 10.857-4.424V8.687a8.182 8.182 0 0 0 4.773 1.526V6.79a4.831 4.831 0 0 1-1.003-.104z"></path></g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="var(--dark-brown)" class="bi bi-youtube hero-icon" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="var(--dark-brown)" class="bi bi-envelope-fill hero-icon" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="var(--dark-brown)" class="bi bi-telephone-fill hero-last" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg><br><br>
                    <div class="buynow">
                        <a href="https://mail.google.com/mail/u/0/#inbox  " target="_blank">
                            <button class="btn">Buy Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
    <section>
        <div class="promotion">
            <br><h1 class="text-center"><span><a href="login.html">LOG-IN</a></span> TO CLAIM COUPONS</h1>
        </div>
    </section><br><br><br><br>
    <section>
        <div class="container justify-content-center align-items-center text-center">
            <div class="header">
                <h1>about<hr class="line" style="width: 8%;" ></h1>
            </div><br><br>
            <div class="row">
                <div class="col-md-6 d-flex align-self-center justify-content-center align-self-center text-center">
                    <div class="position-relative text-center">
                        <div class="position-absolute mx-5 shadow">
                        </div>
                        
                        <img src="../../img/who-we-are.jpg" class="who-img" alt="">
                        <br><br><br><h3 class="who-head">Who We Are</h3>
                        <br><p class="who-desc">A business established on 2022. <br> With 3 branches nationwide. <br> Adheres to safety food protocols.</p><br><br>
                    </div>                      
                </div><br><br>
                <div class="col-md-6 d-flex align-self-center justify-content-center align-self-center text-center">
                    <div class="position-relative text-center">
                        <div class="position-absolute mx-5 shadow">
                        </div>
                        
                        <img src="../../img/what-we-do.jpg" class="who-img" alt="">
                        <br><br><br><h3 class="who-head">What We Do</h3>
                        <br><p class="who-desc">We offer great service and <br>  amazingly delicious dorayaki bites  <br>that won't break your wallet.</p> <br><br>
                    </div>                      
                </div>
            </div><br><br>
        </div>
    </section>

    <section class="bestseller">
        <div class="container-fluid"><br><br>
            <div class="header text-center text-header">
                <h1>bestsellers<hr class="line" style="width: 15%;" ></h1>
            </div><br><br>
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top best-img" src="../../img/walnutella.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-text best-desc text-center">WALNUTELLA</h3>
                                <p class="card-text best-desc text-center">Amazing chocolatey taste.</p>
                                <a href="" target="_blank" style="text-decoration: none;" class="d-flex justify-content-center">
                                    <button class="best-btn">&nbsp;&nbsp; Buy Now &nbsp;
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="29" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                        </svg>&nbsp;
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div class="card card2" style="width: 18rem;">
                            <img class="card-img-top best-img" src="../img/cheese.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h3 class="card-text best-desc text-center">CHEEEESE</h3>
                                <p class="card-text best-desc text-center">Cheeeeziness Overload!</p>
                                <a href="" target="_blank" style="text-decoration: none;" class="d-flex justify-content-center">
                                    <button class="best-btn">&nbsp;&nbsp; Buy Now &nbsp;
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="29" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                                        </svg>&nbsp;
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br>
        </div>
    </section>

    <section class="branches">
        <div class="container-fluid">
            <div class="header text-center text-header"><br><br><br>
                <h1>branches nationwide<hr class="line" style="width: 35%;" ></h1>
            </div><br><br>
            <div class="row">
                <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active d-flex justify-content-center align-items-center">
                            <img src="../img/Branch2.jpg"class="d-block" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="text-white text-bold">SM VALENZUELA</h2>
                                <h6>SM City Valenzuela, SM Foodcourt located at Third Level</h6>
                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center align-items-center">
                            <img src="../img/Branch1.jpg" class="d-block" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="text-white text-bold">SM NORTH EDSA</h2>
                                <h6>M24J+M8V, Bago Bantay, Quezon City, Metro Manila</h6>
                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center align-items-center">
                            <img src="../img/Branch3.jpg" class="d-block" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="text-white text-bold">ONE MALL VALENZUELA</h2>
                                <h6>Level 2, One Mall Valenzuela Brgy, Gen. T. de Leon, Street, Valenzuela, 1442</h6>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    

    <!-- TESTIMONIALS -->
     <br><br><br><br>
    <section class="testimonials">
        <div class="container-fluid"><br>
            <div class="header">
                <h1>testimonials<hr class="line" style="width: 20%;" ></h1>
            </div><br>
            <div class="row d-flex justify-content-center test-div">
                <div class="col-12 col-md-8 wrapper d-flex justify-content-center align-items-center" style="border-radius: 120px 0 0 120px;">
                    <div class="testimonial-image"><br>
                        <img src="../img/testimony1.jpg" alt="Person" class="img-fluid rounded-circle"><br>&nbsp;
                    </div>
                    <div class="testimonial-text"><br>
                        <blockquote class="quote text-center">"This is an amazing service! Highly recommend it to everyone looking for quality foods."</blockquote>
                        <p class="name text-end"><em>Janna Doe</em></p>
                    </div>
                </div>
            </div><br><br>
            <div class="row d-flex justify-content-center test-div">
                <div class="col-12 col-md-8 wrapper d-flex justify-content-center align-items-center" style="border-radius: 0 120px 120px 0;">
                    <div class="testimonial-text"><br>
                        <blockquote class="quote text-center">"This is an amazing service! Highly recommend it to everyone looking for quality foods."</blockquote>
                        <p class="name text-start"><em>Janna Doe</em></p>
                    </div>
                    <div class="testimonial-image2"><br>
                        <img src="../img/testimony1.jpg" alt="Person" class="img-fluid rounded-circle"><br>&nbsp;
                    </div>
                </div>
            </div><br><br>
            <div class="row d-flex justify-content-center test-div">
                <div class="col-12 col-md-8 wrapper d-flex justify-content-center align-items-center" style="border-radius: 120px 0 0 120px;">
                    <div class="testimonial-image"><br>
                        <img src="../img/testimony1.jpg" alt="Person" class="img-fluid rounded-circle"><br>&nbsp;
                    </div>
                    <div class="testimonial-text"><br>
                        <blockquote class="quote text-center">"This is an amazing service! Highly recommend it to everyone looking for quality foods."</blockquote>
                        <p class="name text-end"><em>Janna Doe</em></p>
                    </div>
                </div>
            </div><br><br>
            <br><br><br>
        </div>
    </section><br><br><br><br>
    <section id="galleryy">
        <div class="gallery">
            <figure class="gallery-item border">
                <img
                  src="../img/1.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
              <figure class="gallery-item border">
                <img
                  src="../img/2.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
              <figure class="gallery-item border">
                <img
                  src="../img/3.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
              <figure class="gallery-item border">
                <img
                  src="../img/4.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
              <figure class="gallery-item border">
                <img
                  src="../img/5.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
              <figure class="gallery-item border">
                <img
                  src="../img/6.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
              <figure class="gallery-item border">
                <img
                  src="../img/7.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
              <figure class="gallery-item border">
                <img
                  src="../img/8.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
              <figure class="gallery-item border">
                <img
                  src="../img/9.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
              <figure class="gallery-item border">
                <img
                  src="../img/10.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
              <figure class="gallery-item border">
                <img
                  src="../img/11.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
              <figure class="gallery-item border">
                <img
                  src="../img/12.jpg"
                  alt="Photo of beautifully
                arranged food"
                />
              </figure>
        </div>
    </section><br><br><br><br>

    <section id="contact" class="contact-page justify-content-center align-items-top">
        <div class="container grid contact justify-content-center align-items-top">
            
           <div class="row cont">
                <div class="col conts justify-content-center align-items-top top-col left-row"><br>
                    <img src=".././img/logo.png" class="nav-logo contact-logo" alt="Bonbon Dorayaki Bites logo" style="margin-left: 0 !important;">
                    <p class="logo-desc w-100">Copyright © 2025. <br>All rights reserved.<hr></p>
                    <a class="navbar-brand" href="https://www.facebook.com/jethrojamesaguilar.svt.skz/" target="_blank">
                        <svg class="foo" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                    </a>
                    <a class="navbar-brand" href="https://www.instagram.com/spajetty_21/" target="_blank">
                        <svg class="foo" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                    </a>
                    <a class="navbar-brand" href="#" target="_blank">
                        <svg class="foo" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                        </svg>
                    </a>
                    <a class="navbar-brand" href="https://www.linkedin.com/in/jethro-james-aguilar-267372237/" target="_blank">
                        <svg class="foo" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                        </svg>
                    </a>
                </div>
                <div class="col justify-content-center align-items-top logo-col top-col">
                    <h7 class="align-items-top">Reach us out</h7><br><br>
                    <p class="logo-desc">SM Valenzuela<br><br>415-201-637 <br><br>bonbondorayaki<span class="hidden-br1" style="display: none;"><br></span>@gmail.com</p> 
                </div>
                
                <div class="col justify-content-center align-items-top logo-col bot-col">
                    <h7>Company</h7><br><br>
                    <a href="#how-it-helps" class="nav-link"><p class="logo-desc">About</p></a>
                    <a href="#contact" class="nav-link"><p class="logo-desc">Contact</p></a>
                    <a href="#contact" class="nav-link"><p class="logo-desc">Address</p></a>
                </div>
                <div class="col justify-content-center align-items-top logo-col bot-col">
                    <h7>Resources</h7><br><br>
                    <a href="#banner-page" class="nav-link"><p class="logo-desc">Terms & Conditions</p></a>
                    <a href="#banner-page" class="nav-link"><p class="logo-desc">Privacy Policy</p></a>
                    <a href="#banner-page" class="nav-link"><p class="logo-desc">Help Center</p></a>
                </div>
           </div>
        </div>
    </section>
    <footer class="small-footer">
        <p>In Partial Fulfillment for subject Web Development</p>
      </footer>
</body>
</html>