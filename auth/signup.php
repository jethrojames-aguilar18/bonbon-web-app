<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <script type="module" src="../auth/auth.js" defer></script>
    <title>Signup | BonBon</title>
    <style>
        @media (min-width: 768px) {
            .sign-up-right {
                border-radius: 300px 0 0 300px;
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
                height: 100vh; /* Full viewport height */
                overflow: auto;
            }

            .sign-up-right {
                order: -1; /* Moves the .sign-up-right to the top */
                margin-bottom: 20px; /* Adds spacing below it */
                height: 90px; /* Fixed height for left panel */
                background-color: var(--light-brown); /* Example background */
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

            .signup .intro-img img {
                margin-left: 0;
            }

            .signup .intro-title img {
                margin-left: 0;
            }

            .intro-img img {
                height: 60px;
                width: 75px;
            }

            .intro-title img {
                width: 120px;
                height: 30px;
            }

            .intro {
                display: flex;
                flex-direction: row; /* Content side by side */
                justify-content: center;
                align-items: center;
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

            .name-row {
                flex-direction: column; 
                gap: 15px;
            }

            .first-name,
            .last-name {
                flex: none; 
                width: 100%; 
            }
        }
    </style>
</head>
<body>
    <div class="vh-100 account-page">
        <div class="row h-100 division">
            <div class="panel col-md-6 d-flex justify-content-center align-items-center right">
                <div class="w-75">
                    <h1 class="title text-weight-400 text-size-28 half-margin-bottom decorative_bottom_line" style="color: var(--dark-brown);">Sign-up here!</h1>
                    <br>
                    <form id="loginForm" method="post" class="form-table"> 
                        <div class="row">
                            <div class="mb-3 col-12 col-md-6" style="position: relative;">
                                <label for="firstName" class="form-label visually-hidden">First Name</label>
                                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 18px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="25" fill="var(--dark-brown)" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                      </svg>
                                </span>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required style="padding-left: 40px; border-radius: 20px; border: 2px solid var(--dark-brown);">
                            </div>
                            
                            <div class="mb-3 col-12 col-md-6" style="position: relative;">
                                <label for="lastName" class="form-label visually-hidden">Last Name</label>
                                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 18px;">
                                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 18px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="var(--dark-brown)" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                          </svg>
                                    </span>
                                </span>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required style="padding-left: 40px; border-radius: 20px; border: 2px solid var(--dark-brown);">
                            </div>
                        </div>

                        <div class="mb-3" style="position: relative;">
                            <label for="phone" class="form-label visually-hidden">Phone</label>
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 18px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="var(--dark-brown)" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                  </svg>
                            </span>
                            <input type="text" class="form-control" id="phone" placeholder="Phone" required style="padding-left: 40px; border-radius: 20px; border: 2px solid var(--dark-brown);">
                        </div>

                        <div class="mb-3" style="position: relative;">
                            <label for="address" class="form-label visually-hidden">Address</label>
                            <span style="position: absolute; left: 0px; top: 50%; transform: translateY(-50%); font-size: 18px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="22" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411"/>
                                </svg>
                            </span>
                            <input type="text" class="form-control" id="address" placeholder="Address" required style="padding-left: 40px; border-radius: 20px; border: 2px solid var(--dark-brown);">
                        </div>

                        <div class="mb-3" style="position: relative;">
                            <label for="email" class="form-label visually-hidden">Username</label>
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 18px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--dark-brown)" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                                  </svg>
                            </span>
                            <input type="email" class="form-control" id="email" placeholder="Email" required style="padding-left: 40px; border-radius: 20px; border: 2px solid var(--dark-brown);">
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

                        <div class="mb-3" style="position: relative;">
                            <input type="checkbox" id="agreeTerms" style="margin-right: 10px;" />
                            <label for="agreeTerms">
                                I agree to the <a href="terms.html" target="_blank">Terms of Use</a> and <a href="privacy.html" target="_blank">Privacy Policy</a>.
                            </label>
                        </div>                        
                        
                        <div style="text-align: center;">
                            <button id="signup" onclick="handleSignUp()" type="button" class="btn btn-primary w-50 submit" style="background-color: #5C2918; color: white; border-radius: 20px; border: none;">Sign-up</button>
                        </div>
                        
                        <hr style="border: 1px solid #5C2918; width: 80%; margin: 20px auto;">
                        
                        <p class="redirect" style="text-align: center; margin-top: 20px;">
                            Have an account? 
                            <a href="../auth/login.php" id="loginLink" style="color: #5C2918; text-decoration: none;">Log-in here</a>
                            </p>
                    </form>
                </div>
            </div>
            <!-- Left Panel (Logo) -->
            <div class="panel col-md-6 sign-up-right">
                <div class="intro signup">
                    <div class="intro-img">
                        <img src="../img/hero-img.png" alt="">
                    </div>
                    <div class="intro-title">
                        <img src="../img/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal HTML -->
    <div id="loadingModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Processing</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="modalMessage">Please wait...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        // Wait for the page to fully load before applying the transition
        window.addEventListener('load', function () {
            const rightPanel = document.querySelector('.sign-up-right'); // Get the right panel
            rightPanel.classList.add('show'); // Add the class to trigger the transition
            console.log("Right panel transition applied.");
        });

        function handleSignUp() {
        // Get the checkbox
        const checkbox = document.getElementById('agreeTerms');
        const modalMessage = document.getElementById('modalMessage');
        const modal = new bootstrap.Modal(document.getElementById('loadingModal'));

        // Show modal
        modal.show();

        // Check if checkbox is checked
        if (!checkbox.checked) {
            // Update modal message
            modalMessage.textContent = 'You must agree to the Terms of Use and Privacy Policy before signing up.';
        } else {
            // Update modal message
            modalMessage.textContent = 'Signup successful! Redirecting to login...';

            // Simulate a delay and redirect
            setTimeout(() => {
                modal.hide();
                window.location.href = '../auth/login.php'; // Redirect to login page
            }, 2000); // Adjust delay as needed
        }
    }

    // Add event listener to the 'Log-in' link
    document.querySelector('.redirect a').addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default link behavior

            const right = document.querySelector('.sign-up-right'); // Get the right panel

            // Add the 'slide-out' class to slide the panel out to the right
            right.classList.add('slide-out');

            console.log("Sliding out the right panel...");

            // Wait for the transition to complete, then navigate to ../auth/login.php
            setTimeout(() => {
                console.log("Redirecting to ../auth/login.php...");
                window.location.href = "../auth/login.php"; // Update path if needed
            }, 600); // Delay matches the CSS transition duration
        });

    </script>
</body>
</html>