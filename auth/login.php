<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <script type="module" src="../auth/auth.js" defer></script>
    <title>Login | BonBon</title>
    <style>
        @media (min-width: 768px) {
            .left {
                border-radius: 0 300px 300px 0;
            }
        }

        @media (max-width: 767px) {
            body {
                overflow-y: auto;
                overflow: auto;
                overflow-x: auto;
            }

            .division {
                display: flex;
                height: 100vh; 
                overflow: auto;
            }

            .left {
                height: 90px; /* Fixed height for left panel */
                background-color: var(--light-brown); /* Example background */
                margin-bottom: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .right {
                flex: 1; /* Take up remaining height */
                padding: 10px;
                margin: 0;
                background-color: #ffffff; /* Example background */
                display: flex;
                flex-direction: column; /* Stack content vertically */
                justify-content: center; /* Center content vertically */
                align-items: center; /* Center content horizontally */
            }

            .intro {
                display: flex;
                flex-direction: row; /* Content side by side */
                justify-content: center;
                align-items: center;
            }
            
            .intro-img img {
                height: 60px;
                width: 75px;
            }

            .intro-title img {
                width: 120px;
                height: 30px;
            }

            .submit {
                width: 100%;
            }

            .title {
                font-size: 40px; /* Adjust font size for smaller screens */
                text-align: center;
            }

            .subtitle {
                font-size: 18px; /* Adjust font size for smaller screens */
                text-align: center;
            }

            .form-label {
                padding-top: 10px;
                font-size: 14px; /* Adjust label size */
            }

            .logo {
                height: 80px; /* Adjust logo height */
            }
        }
    </style>
</head>
<body>
    <div class="vh-100 account-page">
        <div class="row vh-100 division">
            <div class="panel left-panel col-md-6 left">
                <div class="intro login">
                    <div class="intro-img">
                        <img src="../img/hero-img.png" alt="">
                    </div>
                    <div class="intro-title">
                        <img src="../img/logo.png" alt="">
                    </div>
                </div>
            </div>
            
            <div class="panel col-md-6 right">
                <div class="w-75">
                    <h1 class="title text-weight-400 text-size-28 half-margin-bottom decorative_bottom_line" style="color: var(--dark-brown);">Log-in here!</h1>
                    <br>
                    <form id="loginForm" method="post" class="form-table"> 
                        <div class="mb-3" style="position: relative;">
                            <label for="email" class="form-label visually-hidden">Username</label>
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 18px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--dark-brown)" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                                  </svg>
                            </span>
                            <input type="text" class="form-control" id="email" placeholder="Email" required style="padding-left: 40px; border-radius: 20px; border: 2px solid var(--dark-brown);">
                        </div>
                    
                        <div class="mb-3" style="position: relative;">
                            <label for="password" class="form-label visually-hidden">Password</label>
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 18px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="var(--dark-brown)" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2"/>
                                  </svg>
                            </span>
                            <input type="password" class="form-control" id="password" placeholder="Password" required style="padding-left: 40px; border-radius: 20px; border: 2px solid var(--dark-brown);">
                        </div>
                        
                        <div style="text-align: center;">
                            <button id="login" onclick="handleLogin()" type="button" class="btn btn-primary w-50 submit" style="background-color: #5C2918; color: white; border-radius: 20px; border: none;">Log-in</button>
                        </div>
                        
                        <hr style="border: 1px solid #5C2918; width: 80%; margin: 20px auto;">
                        
                        <p class="redirect" style="text-align: center; margin-top: 20px;">
                            Don't have an account? 
                            <a href="../auth/signup.php" id="signupLink" style="color: #5C2918; text-decoration: none;">Signup here</a>
                            </p>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <script>
        // Wait for the page to fully load before applying the transition
        window.addEventListener('load', function () {
            const leftPanel = document.querySelector('.left'); // Get the left panel
            leftPanel.classList.add('show'); // Add the class to trigger the transition
            console.log("Left panel transition applied.");
        });

        // Add event listener to the 'Log-in' link
        document.querySelector('.redirect a').addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default link behavior

            const leftPanel = document.querySelector('.left'); // Get the left panel

            // Add the 'slide-out' class to slide the panel out to the right
            leftPanel.classList.add('slide-out');

            console.log("Sliding out the left panel...");

            // Wait for the transition to complete, then navigate to login.html
            setTimeout(() => {
                console.log("Redirecting to ../auth/signup.php...");
                window.location.href = "../auth/signup.php"; // Update path if needed
            }, 600); // Delay matches the CSS transition duration
        });


    </script>
</body>
</html>