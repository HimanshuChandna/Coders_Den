// Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-app.js";
  import { getAuth, createUserWithEmailAndPassword, GoogleAuthProvider, signInWithPopup } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-auth.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAdh3CCzQI0_SDr7NMkUpTCBBf4BHoqbVY",
    authDomain: "coder-s-den-94398.firebaseapp.com",
    projectId: "coder-s-den-94398",
    storageBucket: "coder-s-den-94398.appspot.com",
    messagingSenderId: "1070189980236",
    appId: "1:1070189980236:web:95e6f7277c88efb57862e9",
    measurementId: "G-Z71CSCD678"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
  auth.languageCode = 'en';
  const provider = new GoogleAuthProvider();
  const analytics = getAnalytics(app);

  const password = document.getElementById("siginInCreatePassword"); 
  const email = document.getElementById("siginInEmail");

  const primary_signin = document.getElementById("signup_btn");
  primary_signin.addEventListener("click", function() {;
  createUserWithEmailAndPassword(auth, email, password)
    .then((userCredentials) => {

      const user = userCredentials.user;
      window.location.href = "#";

    })

    .catch((error) => {

      const errorCode = error.code;
      const errorMessage = error.message;

    });
  
  });

  const google_login = document.getElementById("google_login_btn");
  google_login.addEventListener('click', function() {
    // alert(200);

    const auth = getAuth();
    signInWithPopup(auth, provider)
        .then((result) => {
            const credential = GoogleAuthProvider.credentialFromResult(result);
            const token = credential.accessToken;
            const user = result.user;
            console.log(user);
            
            const userName = user.displayName;
            const userEmail = user.email;
            const userProfilePicture = user.photoURL;
    
            console.log(userName);
            console.log(userEmail);
            console.log(userProfilePicture);
            document.getElementById("userProfilePicture").src = userProfilePicture;
            let username ="<h2>Welcome, "+ userName + " !</h2>";
            let hero_subtitle = document.getElementById("hero_subtitle");
            hero_subtitle.insertAdjacentHTML("afterend", username);
            window.location.href = "#";
        }).catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            const email = error.customData.email;
            const credential = GoogleAuthProvider.credentialFormError(error);
        });

  });
//   document.getElementById("userName").textContent = userName;
//   document.getElementById("userEmail").textContent = userEmail;
  
//   google_login.addEventListener('click', updateUserProfile(user));

//   function updateUserProfile(user){

//     const userName = user.displayName;
//     const userEmail = user.email;
//     const userProfilePicture = user.photoURL;
    
//     console.log(userName);
//     console.log(userEmail);
//     console.log(userProfilePicture);

//     document.getElementById("userName").textContent = userName;
//     document.getElementById("userEmail").textContent = userEmail;
//     document.getElementById("userProfilePicture").src = userProfilePicture;
//   }