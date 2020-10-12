function validate_password() {
  var password = document.getElementById("createPasswordId").value;
  var cpassword = document.getElementById("createConPasswordId").value;
  if (password != cpassword) {
    document.getElementById("errormsg").className =
      "d-block text-center mx-auto bg-danger text-white py-3";
    document.getElementById("errormsg").innerHTML = "Password Mismatch";
    return false;
  }
  return true;
}
