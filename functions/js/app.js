 // hide and show navbar
 function navBarToggle(){
    const loGo = document.getElementById("nav-logo-img");
    const iconToggle = document.getElementsByClassName("icon-toggle");
    const mainContent = document.getElementById("main-content");
    const hideBtn = document.getElementsByClassName("hide-show");
    mainContent.classList.toggle('responsive');
    loGo.classList.toggle('reduceWidth');
    for(var i=0;i<hideBtn.length;i++){
        hideBtn[i].classList.toggle('hide');
        iconToggle[i].classList.toggle('toggle-icons');
    }
}
function openModule(val){
    const showModel1 = document.getElementById(val)
    showModel1.classList.toggle(val+'-active')
}
function hideUserDetail(){
    document.getElementById('show-module2').classList.toggle('classList.toggle')
    document.getElementById('show-module1').classList.remove('show-module1-active')
}
function hideNotification(){
    document.getElementById('show-module1').classList.toggle('classList.toggle')
    document.getElementById('show-module2').classList.remove('show-module2-active')
}