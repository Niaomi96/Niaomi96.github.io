function validateForm() {
  
  let f = document.forms["myForm"]["Contact"].value;
  if (f == "") {
    alert("Please enter all 3 identification numbers inculding, contact must be filled out");
    return false;
  }
  let g = document.forms["myForm"]["Address"].value;
  if (g == "") {
    alert("Address must be filled out");
    return false;
  }
  let h = document.forms["myForm"]["Amount"].value;
  if (h == "") {
    alert("Amount must be filled out");
    return false;
  }
  let j = document.forms["myForm"]["Date"].value;
  if (j == "") {
    alert("Date must be filled out");
    return false;
  }
}
