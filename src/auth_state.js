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