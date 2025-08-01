<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <title> Check Password and Confirm Password </title>
    <link rel="stylesheet" href="login.css">
    <!-- Fontawesome CDN Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
   </head>
<body>
  <div class="wrapper">
      <div class="input-box">
        <input id="create_pw" type="password" required>
        <label>Create password</label>
      </div>
      <div class="input-box">
        <input id="confirm_pw" type="password" required disabled>
        <label>Confirm password</label>
        <i class="fas fa-eye-slash show"></i>
      </div>
      <div class="alert">
        <i class="fas fa-exclamation-circle error"></i>
        <span class="text">Enter at least 8 characters</span>
      </div>
      <div class="input-box button">
        <input id="button" type="button" value="Check" disabled>
      </div>
  </div>

  <script>
  const createPw = document.querySelector("#create_pw"),
   confirmPw = document.querySelector("#confirm_pw"),
   pwShow = document.querySelector(".show"),
   alertIcon = document.querySelector(".error"),
   alertText= document.querySelector(".text"),
   submitBtn = document.querySelector("#button");
   pwShow.addEventListener("click", ()=>{
     if((createPw.type === "password") && (confirmPw.type === "password")){
       createPw.type = "text";
       confirmPw.type = "text";
       pwShow.classList.replace("fa-eye-slash","fa-eye");
     }else {
       createPw.type = "password";
       confirmPw.type = "password";
       pwShow.classList.replace("fa-eye","fa-eye-slash");
     }
   });
   createPw.addEventListener("input", ()=>{
     let val = createPw.value.trim()
     if(val.length >= 8){
       confirmPw.removeAttribute("disabled");
       submitBtn.removeAttribute("disabled");
       submitBtn.classList.add("active");
     }else {
       confirmPw.setAttribute("disabled", true);
       submitBtn.setAttribute("disabled", true);
       submitBtn.classList.remove("active");
       confirmPw.value = "";
       alertText.style.color = "#a6a6a6";
       alertText.innerText = "Enter at least 8 characters";
       alertIcon.style.display = "none";
     }
   });
  submitBtn.addEventListener("click", ()=>{
   if(createPw.value === confirmPw.value){
     alertText.innerText = "Password matched";
     alertIcon.style.display = "none";
     alertText.style.color = "#4070F4";
   }else {
     alertText.innerText = "Password didn't matched";
     alertIcon.style.display = "block";
     alertText.style.color = "#D93025";
   }
  });
  </script>
</body>
</html>
