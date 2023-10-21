var connection = require('./db_config')
const eyeClose = document.querySelector(".fa-eye-slash");
module.exports.register=function(req,res){
  var today = new Date();
  var pelanggan={
      "nama":req.body.nama,
      "email":req.body.email,
      "hp":req.body.hp,
      "password":req.body.password
      
      
  }
  connection.query('INSERT INTO pelanggan SET ?',pelanggan, function (error, results, fields) {
    //connection.release()
    if (error) {
      res.json({
          status:false,
          message:'there are some error with query'
      })
    }else{
        res.json({
          status:true,
          data:results,
          message:'user registered successfully'
      })
    }
  });
}


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


