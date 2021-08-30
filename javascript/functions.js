
// to make sure only one checkbox is checked at a time 
function onlyOne(checkbox){
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if(item !== checkbox) item.checked = false
    })
}

// to show parts of code only when a checkbox is active 
function showCode() {
    // Get the checkbox
    var checkBox = document.getElementById("ergazomenoscheck");
    var checkBox2 = document.getElementById("ergodotischeck");

    // Get the output text
    var text = document.getElementById("ergazomenoschecked");
    var text2 = document.getElementById("ergodotischecked");

  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }


    // If the checkbox is checked, display the output text
    if (checkBox2.checked == true){
        text2.style.display = "block";
    } else {
        text2.style.display = "none";
    }
}


// to show parts of code only when a checkbox is active 
function showCodeErgodotis() {
  // Get the checkbox
  var checkBox = document.getElementById("anastolicheck");
  var checkBox2 = document.getElementById("apostasicheck");

  // Get the output text
  var text = document.getElementById("anastolichecked");
  var text2 = document.getElementById("apostasichecked");


  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }


  // If the checkbox is checked, display the output text
  if (checkBox2.checked == true){
      text2.style.display = "block";
  } else {
      text2.style.display = "none";
  }
}




