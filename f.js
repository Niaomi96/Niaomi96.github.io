function validateForm() {
  let a = document.forms["myForm"]["SignatureID"].value;
  if (a == "") {
    alert("Signature identifcation number must be filled out");
    return false;
  }
  let b = document.forms["myForm"]["FirstName"].value;
  if (b == "") {
    alert("First Name must be filled out");
    return false;
  }
  let c = document.forms["myForm"]["LastName"].value;
  if (c == "") {
    alert("Last Name must be filled out");
    return false;
  }
  let d = document.forms["myForm"]["Number"].value;
  if (d == "") {
    alert("Number must be filled out");
    return false;
  }
  let f = document.forms["myForm"]["Location"].value;
  if (f == "") {
    alert("Location must be filled out");
    return false;
  }
  let g = document.forms["myForm"]["Establishment"].value;
  if (g == "") {
    alert("Establishment must be filled out");
    return false;
  }
  let h = document.forms["myForm"]["AvailableTime"].value;
  if (h == "") {
    alert("Available Time must be filled out");
    return false;
  }
}