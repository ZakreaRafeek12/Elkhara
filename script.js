let stars = document.getElementById('star');
let moon2 = document.getElementById('moon2');
let mountains3 = document.getElementById('mountains3');
let mountains4 = document.getElementById('mountains4');
let rivers = document.getElementById('rivers');
let boat = document.getElementById('boat');
let Riviera = document.querySelector('.Riviera');
let header = document.getElementById('header');
let container = document.querySelector('.container');
let quailty = document.querySelector('.quailty');
let spans = document.querySelectorAll('.progress span');
window.onscroll = function(){
    let value = scrollY;
    stars.style.left = value + 'px';
    moon2.style.top = value * 3 + 'px';
    mountains3.style.top = value * 1.8 + 'px';
    mountains4.style.top = value * 1.5 + 'px';
    rivers.style.top = value + 'px';
    boat.style.left = value * 3 + 'px';
    Riviera.style.fontSize = value +'px';
    if(window.scrollY >= quailty.offsetTop -350 ){
        spans.forEach((span) => {
            span.style.width = span.dataset.width;
        })
    }
    else{
        spans.forEach((span) => {
            span.style.width = "0px";
        })
    }
    if(value >= 650){
        header.style.background = '#200016';
    }
    
    else{
        header.style.background = 'transparent';
    }
    if (scrollY >=66){
        Riviera.style.fontSize = 66 + 'px';
        Riviera.style.position = 'fixed';
    
        if(scrollY >= 390){
        Riviera.style.display = 'none';
        }
        else{
        Riviera.style.display = 'block';
        }
        if(scrollY >= 90){
            document.querySelector('.main').style.background = 'linear-gradient(#15374f,#10001f)';
        }
        else{
            document.querySelector('.main').style.background = 'linear-gradient(#200016,#10001f)'
        }
        
    }
}
const slides=document.querySelector(".slider").children;
const prev=document.querySelector(".prev");
const next=document.querySelector(".next");
const indicator=document.querySelector(".indicator");
let index=0;


prev.addEventListener("click",function(){
    prevSlide();
    updateCircleIndicator(); 
    resetTimer();
})

next.addEventListener("click",function(){
    nextSlide(); 
    updateCircleIndicator();
    resetTimer();
     
})

  // create circle indicators
function circleIndicator(){
    for(let i=0; i< slides.length; i++){
        const div=document.createElement("div");
         div.innerHTML=i+1;
        div.setAttribute("onclick","indicateSlide(this)")
        div.id=i;
        if(i==0){
                div.className="active";
            }
            indicator.appendChild(div);
       }
}
circleIndicator();

function indicateSlide(element){
    index=element.id;
    changeSlide();
    updateCircleIndicator();
    resetTimer();
}
    
function updateCircleIndicator(){
    for(let i=0; i<indicator.children.length; i++){
        indicator.children[i].classList.remove("active");
    }
    indicator.children[index].classList.add("active");
}

function prevSlide(){
    if(index==0){
        index=slides.length-1;
    }
    else{
           index--;
    }
    changeSlide();
  }

  function nextSlide(){
    if(index==slides.length-1)
    {
        index=0;
    }
    else{
         index++;
    }
     changeSlide();
}

function changeSlide(){
            for(let i=0; i<slides.length; i++)
            {
                slides[i].classList.remove("active");
            }

      slides[index].classList.add("active");
}

function resetTimer(){
        // when click to indicator or controls button 
        // stop timer 
    clearInterval(timer);
        // then started again timer
    timer=setInterval(autoPlay,4000);
}

 
function autoPlay(){
     nextSlide();
     updateCircleIndicator();
}

let timer=setInterval(autoPlay,4000);

