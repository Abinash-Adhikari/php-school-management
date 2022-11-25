//pass module class in parameter and set active class in css -> open module function better in onclick function
function openModule(val) {
  const showModel1 = document.getElementById(val);
  showModel1.classList.toggle(val + "-active");
}

//toggle single class like hide and show by single id -> custom your own-css
function hideShowSingle(val) {
  const showModel1 = document.getElementById(val);
  // showModel1.classList.toggle(val);
  console.log("first")

}

//toggle multiple class data -> custom your own-css
function hideShowMultiple(val) {
  const classArray = document.getElementsByClassName(val);
  for (var i = 0; i < hideBtn.length; i++) {
    classArray[i].classList.toggle(val);
  }
}

//only hide and show
function hideAndShowByClass(val) {
  const classArray2 = document.getElementsByClassName(val);
  for (var i = 0; i < hideBtn.length; i++) {
    classArray2[i].classList.toggle("show-hide"); // in show class -> display:none
  }
}

//only hide show
function hideShowSingle(val) {
  const showModel1 = document.getElementById(val);
  showModel1.classList.toggle("show-hide");
}
