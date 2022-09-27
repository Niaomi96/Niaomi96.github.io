function validateForm() {
  let x = document.forms["myForm"]["Name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  let y = document.forms["myForm"]["Sponsor"].value;
  if (y == "") {
    alert("Sponsor must be filled out");
    return false;
  }
   let z = document.forms["myForm"]["Region"].value;
  if (z == "") {
    alert("Region must be filled out");
    return false;
  }
}