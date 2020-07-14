const openNav=()=>{
  document.querySelector("#menu_bar").style.width = "50%";
}
const closeNav=()=>{
  document.querySelector("#menu_bar").style.width="0";
}

const myInput = document.querySelector("#psw");
const length = document.querySelector("#length");
const result=document.querySelector("#result");
result.addEventListener('onmouseout',()=> {
  document.querySelector("#result").style.display = "none";
  })
// When the user clicks on the password field, show the message box
myInput.addEventListener('focus',()=> {
document.querySelector("#message").style.display = "block";
})
// When the user clicks outside of the password field, hide the message box
myInput.addEventListener('blur',() =>{
document.querySelector("#message").style.display = "none";
})
myInput.addEventListener('keyup',()=>{
const lowerCaseLetters = /[a-z]/g;
const upperCaseLetters = /[A-Z]/g;
const numbers = /[0-9]/g;

if(myInput.value.match(lowerCaseLetters) && myInput.value.match(upperCaseLetters) && myInput.value.match(numbers) && myInput.value.length >= 8) {
  length.classList.remove("invalid");
  length.classList.add("valid");
} else {
  length.classList.remove("valid");
  length.classList.add("invalid");
}
})