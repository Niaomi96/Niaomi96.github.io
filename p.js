function validateForm() {
  let b = document.forms["myForm"]["WolfSpecies"].value;
  if (b == "") {
    alert("Wolf species must be filled out");
    return false;
  }
  let c = document.forms["myForm"]["OrderDate"].value;
  if (c == "") {
    alert("Order date must be filled out");
    return false;
  }
  let d = document.forms["myForm"]["ShippingDate"].value;
  if (d == "") {
    alert("Shipping date must be filled out");
    return false;
  }
  let f = document.forms["myForm"]["ArrivalDate"].value;
  if (f == "") {
    alert("Arrival date must be filled out");
    return false;
  }
  let g = document.forms["myForm"]["Size"].value;
  if (g == "") {
    alert("Size must be filled out");
    return false;
  }
  let h = document.forms["myForm"]["FurQuality"].value;
  if (h == "") {
    alert("Fur quality must be filled out");
    return false;
  }
  let j = document.forms["myForm"]["Total"].value;
  if (j == "") {
    alert("Total must be filled out");
    return false;
  }

}
