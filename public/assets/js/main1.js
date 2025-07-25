//Navbar scroll
const navbar = document.querySelector('.navbar');
window.onscroll = () => {
    if (window.scrollY > 300) {
        navbar.classList.add('nav-active');
    } else {
        navbar.classList.remove('nav-active');
    }
};

function mobileMenu(){
    const bx = document.querySelector(".menu-bx")
    const navMenu = document.querySelector(".nav-menu")
    if(bx.classList.contains("bx-menu")){
        bx.classList.remove("bx-menu")
        bx.classList.add("bx-x")
        navMenu.classList.add('show-menu')
    }else{
        bx.classList.add("bx-menu")
        bx.classList.remove("bx-x")
        navMenu.classList.remove('show-menu')
    }
}
const boxes = document.querySelectorAll(".fadeInUp")
const boxesMd = document.querySelectorAll(".card-md")

window.addEventListener("scroll", loadContent);
function loadContent(){
    const trigger = window.innerHeight
    boxes.forEach((card)=>{
        const cardTop = card.getBoundingClientRect().top
        if(cardTop < trigger){
            card.classList.add("show")
        }else{
            card.classList.remove("show")
        }
    })
    boxesMd.forEach((item)=>{
        const itemTop = item.getBoundingClientRect().top
        if(itemTop < trigger){
            item.classList.add("show")
        }else{
            item.classList.remove("show")
        }
    })
}

window.addEventListener("scroll", headers);
const titles = document.querySelectorAll('.title')
function headers(){
    const trigger = window.innerHeight
    titles.forEach((title)=>{
        const titleTop = title.getBoundingClientRect().top
        if(titleTop < trigger){
            title.classList.add("show")
        }else{
            title.classList.remove("show")
        }
    })
}



//chat section
// const chat = document.getElementById("chat-container")
// chat.addEventListener("click", ()=>{

// })

// //chat conversations
// const myChats = document.getElementById("my-chat")
// myChats.addEventListener("submit", (e)=>{
//     e.preventDefault()
//     let li = document.createElement("li")
//     const chatList = document.getElementById("chat-list")
//     li.innerHTML = e.target.message.value
//     chatList.append(li)
//     e.target.message.value = ''
// })


//loader
const rootContainer = document.querySelector(".root-container")
window.addEventListener("load",()=>{
    const loader = document.querySelector(".loader")
    setTimeout(()=>{
        loader.classList.add("loader-hidden")
        rootContainer.style.display ='flex';
    },100)
    loader.addEventListener("transitionend", ()=>{
        document.body.removeChild("loader")
    })
})

function toggle(id){
    const password = document.getElementById("password")
    if(password.type == "password"){
        password.type = "text"
        id.classList.replace("fa-eye", "fa-eye-slash")
    }else{
        password.type = "password"
        id.classList.replace("fa-eye-slash", "fa-eye")
    }
    console.log(password.type)
}
function toggleMany(id){
    const passwords = document.querySelectorAll(".form-control")
    const faEye = document.querySelectorAll(".form-control")
    
    passwords.forEach((password)=>{
        if(password.type== "password"){
            password.type = "text"
            id.classList.replace("fa-eye", "fa-eye-slash")
        }else{
            password.type = "password"
            id.classList.replace("fa-eye-slash", "fa-eye")
        }
    })
}


var code = document.getElementById("password");

var strengthBar = document.getElementById("meter");
var display = document.getElementsByClassName("textbox")[0];

code.addEventListener("keyup", function() {
    checkPassword(code.value);
});


function checkPassword(password) {
  var strength = 0;
  if (password.match(/[a-z]+/)) {
    strength += 1;
  }
  if (password.match(/[A-Z]+/)) {
    strength += 1;
  }
  if (password.match(/[0-9]+/)) {
    strength += 1;
  }
  if (password.match(/[$@#&!]+/)) {
    strength += 1;

  }

  if (password.length < 6) {
    display.innerHTML = "minimum number of characters is 6";
  }


  switch (strength) {
    case 0:
      strengthBar.value = 0;
      break;

    case 1:
      strengthBar.value = 25;
      break;

    case 2:
      strengthBar.value = 50;
      break;

    case 3:
      strengthBar.value = 75;
      break;

    case 4:
      strengthBar.value = 100;
      break;
  }
}