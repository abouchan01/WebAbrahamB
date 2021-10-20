let scrollUp = document.querySelectorAll(".scrollUp");

function mostrarScrollUp(){
  let scrollTop = document.documentElement.scrollTop;
  for (var i =0; i < scrollUp.length; i++){
    let altura = scrollUp[i].offsetTop;
    if(altura - 600 < scrollTop){
      scrollUp[i].style.opacity = 1;
      scrollUp[i].classList.add("mostrarArriba");
    }
  }
}

let scrollRight = document.querySelectorAll(".scrollRight");

function mostrarScrollRight(){
  let scrollTop = document.documentElement.scrollTop;
  for (var i =0; i < scrollRight.length; i++){
    let altura = scrollRight[i].offsetTop;
    if(altura - 600 < scrollTop){
      scrollRight[i].style.opacity = 1;
      scrollRight[i].classList.add("mostrarDerecha");
    }
  }
}

let scrollLeft = document.querySelectorAll(".scrollLeft");

function mostrarScrollLeft(){
  let scrollTop = document.documentElement.scrollTop;
  for (var i =0; i < scrollLeft.length; i++){
    let altura = scrollLeft[i].offsetTop;
    if(altura - 600 < scrollTop){
      scrollLeft[i].style.opacity = 1;
      scrollLeft[i].classList.add("mostrarIzquierda");
    }
  }
}

window.addEventListener('scroll', mostrarScrollUp);
window.addEventListener('scroll', mostrarScrollRight);
window.addEventListener('scroll', mostrarScrollLeft);