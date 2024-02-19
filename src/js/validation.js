// const validation = new JustValidate("#signup_form",
                        
//                                     globalConfig?: {
//                                         submitFormAutomatically:true
//                                     });

// validation 
//         .addField("#signupName", [
//             {
//                 rule:"required"
//             }
//         ])
//         .addField("#signupPassword", [
//             {
//                 rule:"required"
//             },
//             {
//                 rule:"password"
//             }
//         ])
//         .addField("#signupRePassword", [
//             {
//                 validator: (value, fields) => {
//                     return value === fields["#signupPassword"].elem.value;
//                 },
//                 errorMessage: "Passwords should match"
//             }
//         ])
//         .addField("#signupEmail",[
//             {
//                 rule:"required"
//             },
//             {
//                 rule:"email"
//             },
//             {
//                 validator: (value) => () => {
//                     return fetch("validate_email.php?user_mail="+
//                     encodeURIComponent(value))
//                         .then(function(response){
//                             return response.json();
//                         })
//                         .then(function(json){
//                             return json.available;
//                         });
//                 },
//                 errorMessage: "Email already taken"
//             }
            
//         ])
//         .onSuccess((event) => {

//             document.getElementById("signup_form").submit();

//         });