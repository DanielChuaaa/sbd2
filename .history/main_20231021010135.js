function togglePassword() {
    var passwordInput = document.getElementById("passwordInput");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      eyeClose.classList.add("is-active");
    } else {
      passwordInput.type = "password";
      eyeClose.classList.remove("is-active");
    }
  }
  
  function errorHandlers() {
    var valid = true;
    error = "";
    field = "";
  
    error = doch;
  }