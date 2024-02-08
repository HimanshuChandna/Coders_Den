// name,email, password, mobile Number, otp;

signInWindow = () => {

    // alert(200);
    let signin_title = document.getElementById("credentials_signup_title");
    let google_signin = document.getElementById("credentials_signup_google_btn"); 
    let login_title = document.getElementById("credentials_login_title");
    let google_login = document.getElementById("credentials_login_google_btn");
    let login_btn = document.getElementById("credentials_login_email_btn");
    let or_divider_1 = document.getElementById("or_divider_1");
    let or_divider_2 = document.getElementById("or_divider_2");
    let email_signin = document.getElementById("credentials_signup_email_btn");

    email_signin.remove();
    google_signin.remove();
    login_title.remove();
    google_login.remove();
    login_btn.remove();
    or_divider_1.remove();
    or_divider_2.remove();
    
    const signInForm = "<form><label for='siginInName'>FullName:</label><input type='text' id='siginInName' required autocomplete='name'><label for='siginInEmail'>Email:</label><input type='email' id='siginInEmail' required autocomplete='email'><label for='siginInCreatePassword'>Create Password:</label><input type='password' id='siginInCreatePassword' required autocomplete='new-password'><input type='button' value='reveal' id='reveal_btn' onclick='hide()'><label for='siginInReenterPassword'>Re-enter Password:</label><input type='text' id='siginInReenterPassword' required autocomplete='new-password'><label for='siginInMobile'>Mobile Number:</label><input type='text' id='siginInMobile' required autocomplete='mobile'><label for='siginInOTP'>OTP:</label><input type='text' id='siginInOTP' required autocomplete='off'><input type='submit' value='Sigin in with email'></form>"; 
    signin_title.insertAdjacentHTML("afterend",signInForm);

    hide = () =>{

        let password = document.getElementById("siginInCreatePassword");
        password.setAttribute("type","text");
        let reveal_btn = document.getElementById("reveal_btn");
        reveal_btn.remove();
        let reveal = "<input type='button' value='hide' id='hide_btn' onclick='reveal()''>";
        password.insertAdjacentHTML("afterend",reveal);
        
    }

    reveal = () =>{

        let password = document.getElementById("siginInCreatePassword");
        password.setAttribute("type","password");
        let hide_btn = document.getElementById("hide_btn");
        hide_btn.remove();
        let hide = "<input type='button' value='reveal' id='reveal_btn' onclick='hide()''>";
        password.insertAdjacentHTML("afterend",hide);

    }

};

login_function = () => {

    // console.log("Login !!!");
    let FullName = document.getElementById("siginInName");
    let Email = document.getElementById("siginInEmail");
    let RepeatPassword = document.getElementById("siginInReenterPassword");
    let Sigin_btn = document.getElementById("signup_btn");
    let Login_context = document.getElementById("Login_context");
    let Login_window_btn = document.getElementById("login_btn");
    let Form_title = document.getElementById("signup_form_title");
    let Credentials_form = document.getElementById("credentials_form_sigin");
    FullName.remove();
    RepeatPassword.remove();
    Login_context.remove();
    Login_window_btn.remove();
    Form_title.remove();

    Sigin_btn.setAttribute("value", "Login")
    let Login_title = "<p id='login_form_title'>Login</p>";
    Email.insertAdjacentHTML("beforebegin",Login_title);
    let Signin_Context = "<p id='Signin_context'>Don't have an account?<span class='sigin_link link-primary' id='signin_btn' onclick='sigin_function()'> Sigin</span></p>"
    Credentials_form.insertAdjacentHTML("afterend",Signin_Context);

};

sigin_function = () => {

    let Login_title = document.getElementById("login_form_title");
    let Email = document.getElementById("siginInEmail");
    let Password = document.getElementById("siginInCreatePassword");
    let Credentials_form = document.getElementById("credentials_form_sigin");
    let Login_Context = document.getElementById("Signin_context");
    let Signin_window_btn = document.getElementById("signin_btn");

    Login_title.remove();
    Login_Context.remove();
    Signin_window_btn.remove();

    let SignIn_Title = "<p id='login_form_title'>Sigin</p>";
    let FullName = "<input type='text' class='signup' id='siginInName' value='Fullname' required autocomplete='name'>";
    let Re_enterPassword = "<input type='text' class='signup' id='siginInReenterPassword' value='Password' required autocomplete='new-password'>"; 
    let Signin_Context = "<p id='Login_context'>Already have an account?<span class='login_link link-primary' id='login_btn' onclick='login_function()'> Login</span></p>"

    Email.insertAdjacentHTML("beforebegin", SignIn_Title);
    Email.insertAdjacentHTML("beforebegin", FullName);
    Password.insertAdjacentHTML("afterend", Re_enterPassword);
    Credentials_form.insertAdjacentHTML("afterend",Signin_Context);

};