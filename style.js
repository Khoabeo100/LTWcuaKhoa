var img=[];
var curimg=0;
function load_images(){
    for (i=1;i<5;i++){
        img[i]= new Image();
        img[i].src="sn"+i+".jpg";
    }
}



const slider = document.querySelector(".slider");
const form = document.querySelector(".form");
let mouseDownAt = 0;
let left = 0;
slider.onmousedown = (e) => {
    mouseDownAt = e.clientX;
    console.log(mouseDownAt);
};
slider.onmouseup = () => {
    mouseDownAt = 0;  
    slider.style.userSelect = 'unset';
    slider.style.cursor = 'unset';
    form.style.pointerEvents = 'unset';
    form.classList.remove('left');
    form.classList.remove('right');
}
slider.onmousemove = e => {
    if(mouseDownAt == 0) return;
    slider.style.userSelect = 'none';
    slider.style.cursor = 'grab';
    form.style.pointerEvents = 'none';
    
    if(e.clientX > mouseDownAt){
        form.classList.add('left');
        form.classList.remove('right');
    }else if(e.clientX < mouseDownAt){
        form.classList.remove('left');
        form.classList.add('right');
    }
    
    let speed = 2;
    let leftTemporary = left + ((e.clientX - mouseDownAt) / speed);
    let leftLimit = form.offsetWidth - slider.offsetWidth / 2;

    
    if(leftTemporary < 0 && Math.abs(leftTemporary) < leftLimit){
        form.style.setProperty('--left', left + 'px');
        left = leftTemporary;
        mouseDownAt = e.clientX;
    }

}



let toTop = document.getElementById('toTop');
toTop.style.display = 'none';
window.addEventListener('scroll',() => {
    if (this.scrollY > 500){
        toTop.style.display = 'block';
    } 
    else{
        toTop.style.display = 'none';
    }
})
toTop.onclick = function () {
    window.scrollTo ({
      top: 0,
      behavior: 'smooth'
    })
}






let nav = document.querySelector("nav");
let scrollBtn = document.querySelector(".scroll-button a");
console.log(scrollBtn);
let val;
window.onscroll = function() {
  if(document.documentElement.scrollTop > 20){
    nav.classList.add("sticky");
    scrollBtn.style.display = "block";
  }else{
    nav.classList.remove("sticky");
    scrollBtn.style.display = "none";
  }

}


window.addEventListener("scroll",function(){
  var header = document.querySelector("header");
  header.classList.toggle('sticky', window.scrollY > 0 )
});

var menu = document.querySelector('.menu');
var menuBtn = document.querySelector('.menu-btn');
var closeBtn = document.querySelector('.close-btn');
menuBtn.addEventListener("click",() =>{
  menu.classList.add('active');
});

closeBtn.addEventListener("click",() =>{
  menu.classList.remove('active');
});



let navLinks = document.querySelectorAll(".menu li a");
for (var i = 0; i < navLinks.length; i++) {
  navLinks[i].addEventListener("click" , function() {
    navBar.classList.remove("active");
    menuBtn.style.opacity = "1";
    menuBtn.style.pointerEvents = "auto";
  });
}

function goto() {
  // Lấy vị trí của phần muốn chuyển đến
  var pre2 = document.getElementById('pre2');
  // Sử dụng phương thức scrollIntoView để chuyển đến phần đó
  pre.scrollIntoView({ behavior: 'smooth' });
}




