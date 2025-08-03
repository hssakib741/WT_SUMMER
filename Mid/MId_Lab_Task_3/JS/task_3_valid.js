function validateForm() {
  var firstName = document.getElementById("firstName").value.trim();
  var lastName = document.getElementById("lastName").value.trim();
  var address = document.getElementById("address").value.trim();
  var city = document.getElementById("city").value.trim();
  var state = document.getElementById("state").value;
  var phone = document.getElementById("phone").value.trim();
  var password = document.getElementById("password").value.trim();
  var confirmPassword = document.getElementById("confirmPassword").value.trim();

   
  if (firstName === "" || lastName === "") {
    alert("First Name and Last Name are required.");
    return false;
  }


  if (address === "" || city === "") {
    alert("Address and City cannot be empty.");
    return false;
  }

 
  if (state === "") {
    alert("Please select a state.");
    return false;
  }

  if (!/^\d{11}$/.test(phone)) {
    alert("Phone number must be exactly 11 digits.");
    return false;
  }

  var passPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
  if (!passPattern.test(password)) {
    alert("Password must be at least 8 characters long and include uppercase, lowercase, number, and special character.");
    return false;
  }

  if (password !== confirmPassword) {
    alert("Passwords do not match.");
    return false;
  }

  alert("Form submitted successfully!");
  return true;
}
