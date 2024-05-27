function validation() {
  var bid = document.forms['myForm']['book-id'].value;
  var author = document.forms['myForm']['author'].value;
  var pages = document.forms['myForm']['pages'].value;
  var qty = document.forms['myForm']['qty'].value;
  var bname = document.forms['myForm']['book-name'].value;
  var publication = document.forms['myForm']['publication'].value;
  var year = document.forms['myForm']['pb-year'].value;
  var price = document.forms['myForm']['price'].value;
    
  if (author === "") {
    showError('author', 'author_id');
    return false;
  } else if (pages === "") {
    showError('pages', 'pages_id');
    return false;
  } else if (qty === "") {
    showError('qty', 'qty_id');
    return false;
  } else if (bname === "") {
    showError('book-name', 'bname_id');
    return false;
  } else if (publication === "") {
    showError('publication', 'pb_id');
    return false;
  } else if (year === "") {
    showError('pb-year', 'pbyear_id');
    return false;
  } else if (price === "") {
    showError('price', 'price_id');
    return false;
  }
  return true;
}

function showError(inputId, errorId) {
  var inputElement = document.getElementById(inputId);
  var errorElement = document.getElementById(errorId);

  if (inputElement && errorElement) {
    inputElement.style.border = "2px solid red";
    errorElement.style.color = " red";
    errorElement.innerHTML = "Please fill this field";
  }
}