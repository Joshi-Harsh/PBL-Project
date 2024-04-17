    <?php 
    include("connection2.php");
    include("signup.php")
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark sticky-top">
      <div class="container mw-2000">
        <div>
          <a
            class="navbar-brand d-flex justify-content-center align-items-center"
            href="#">
            <i class="material-symbols-outlined me-2 globe logo-color">
              language
            </i>
            <h3
              class="mt-2 logo-color"
              style="font-family: Arial, Helvetica, sans-serif">
              FinTech
            </h3>
          </a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item me-3">
              <a class="nav-link" href="#hero">Home</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#reviews">Review</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#team">Team</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
          </ul>
          <button class="btn login-btn ms-lg-3" id="form-open">Login</button>
        </div>
      </div>
    </nav>
    <section class="home">
    <div class="form_container">
        <div class="form login_form">
            <section class="user">
                <div class="user_options-container">
                    <div class="user_options-text">
                        <i class="material-symbols-outlined form_close"> close </i>
                        <div class="user_options-unregistered">
                            <h2 class="user_unregistered-title text-white">
                                Don't have an account?
                            </h2>
                            <button class="user_unregistered-signup" id="signup-button">
                                Sign up
                            </button>
                        </div>
                        <div class="user_options-registered">
                            <h2 class="user_registered-title text-white">
                                Have an account?
                            </h2>
                            <button class="user_registered-login" id="login-button">
                                Login
                            </button>
                        </div>
                    </div>
                    <div class="user_options-forms" id="user_options-forms">
                        <div class="user_forms-login">
                            <h2 class="forms_title">Login</h2>
                            <form class="forms_form" action="index.php" onsubmit="return isvalid()" method="POST">
                                <fieldset class="forms_fieldset">
                                    <div class="forms_field">
                                        <input
                                            type="text"
                                            name="email"
                                            placeholder="Email"
                                            class="forms_field-input"
                                            required
                                            autofocus />
                                    </div>
                                    <div class="forms_field">
                                        <input
                                            type="password"
                                            name="password"
                                            placeholder="Password"
                                            class="forms_field-input"
                                            required />
                                    </div>
                                </fieldset>
                                <div class="forms_buttons">
                                    <button type="button" class="forms_buttons-forgot">
                                        Forgot password?
                                    </button>
                                    <input
                                        type="submit"
                                        value="Login"
                                        class="forms_buttons-action"
                                        name="submit" />
                                </div>
                            </form>
                        </div>
                        <div class="user_forms-signup" id="form">
                            <h2 class="forms_title">Sign Up</h2>
                            <form class="forms_form" action="signup.php" method="POST">
                                <fieldset class="forms_fieldset">
                                    <div class="forms_field">
                                    <input type="text" id="user" name="user" placeholder="Enter Username" class="forms_field-input" required>
                                        <!-- <input
                                            type="text"
                                            name="fullname"
                                            placeholder="Full Name"
                                            class=""
                                            required /> -->
                                    </div>
                                    <div class="forms_field">
                                    <input type="email" id="email" name="email" class="forms_field-input" placeholder="Enter Email" required>
                                        
                                    </div>
                                    <div class="forms_field">
                                    <input type="password" class="forms_field-input" id="pass" name="pass" placeholder="Create Password" required>
                                        
                                    </div>
                                    <div class="forms_field">
                                    <input type="password" id="cpass" name="cpass" placeholder="Retype Password" required>
  </div>
                                </fieldset>
                                <div class="forms_buttons">
                                <input type="submit" class="forms_buttons-action" id="btn" value="SignUp" name = "submit"/>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </section>
        </div>
    </div>
</section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        const formOpenBtn = document.querySelector("#form-open"),
  home = document.querySelector(".home"),
  formContainer = document.querySelector(".form_container"),
  formCloseBtn = document.querySelector(".form_close");

const signupButton = document.getElementById("signup-button"),
  loginButton = document.getElementById("login-button"),
  userForms = document.getElementById("user_options-forms");

formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

signupButton.addEventListener(
  "click",
  () => {
    userForms.classList.remove("bounceRight");
    userForms.classList.add("bounceLeft");
  },
  false
);

/**
 * Add event listener to the "Login" button
 */
loginButton.addEventListener(
  "click",
  () => {
    userForms.classList.remove("bounceLeft");
    userForms.classList.add("bounceRight");
  },
  false
);

function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }

    </script>
</body>
</html>