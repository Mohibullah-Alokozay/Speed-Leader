
let hl = document.querySelector(".highlighter");

let inputs = document.querySelectorAll("input");

document.addEventListener("load", function(){
  let height = getComputedStyle(document.querySelector(".paraph"))["line-height"];
  document.querySelector(".highlighter").style.height = height;
})


// hl.style.top = String(Number(hl.offsetTop) + Number(hl.offsetHeight)-3)+"px";

// ##### the moving highlighter and it's stoppage.
// function start(){
//   // theInterval = setInterval(function(){
//   //   hl.style.left = String(Number(hl.offsetLeft)+10)+"px";
//   //   if (Number(hl.offsetLeft)+Number(hl.offsetWidth)>screen.width){
//   //     clearInterval(theInterval);
//   //     hl.style.top = String(Number(hl.offsetTop) + Number(hl.offsetHeight)-3)+"px";
//   //     hl.style.left = "8px";
//   //     retry();
//   //   }
//   // }, 30);
// }


function hlObject(hl){
  this.status = "stopped"
  this.hl = hl;
  this.leftStart = hl.offsetLeft;
  this.width = hl.offsetWidth;
  this.height = hl.offsetHeight;
  this.leftAdjust = hl.offsetLeft;
  this.topAdjust = 0;
  this.speed = 30;
  this.walkDistance = 10;


  this.startMove= function(){
    this.status = "moving";
    console.log(String(Number(hl.offsetLeft)+Number(this.walkDistance))+"px");
    this.theInterval = setInterval(function(distance, left, topAdjust){


      hl.style.left = String(Number(hl.offsetLeft)+Number(distance))+"px";
      if (Number(hl.offsetLeft)+Number(hl.offsetWidth)>screen.width){
        hl.style.top = String(Number(hl.offsetTop) + Number(hl.offsetHeight)-topAdjust)+"px";
        hl.style.left = left+"px";
      }
    }, this.speed, this.walkDistance, this.leftStart, this.topAdjust);
  }

  this.stopMove= function(){
    console.log(this.walkDistance);
    this.status = "stopped";
    clearInterval(this.theInterval);
  }

  this.update = function(speed, width, height, leftAdjust, topAdjust){

    this.walkDistance = speed;
    this.width = width;
    document.querySelector(".highlighter").style.width = width+"px";
    this.height = height;
    document.querySelector(".shighlighter").style.height = height+"px";
    this.leftAdjust = leftAdjust;
    this.topAdjust = topAdjust;
  }
}

let highlightObject = new hlObject(hl);
// highlightObject.startMove();

inputs[0].value = highlightObject.walkDistance;
inputs[1].value = highlightObject.width;
inputs[2].value = highlightObject.height;
inputs[3].value = highlightObject.leftAdjust;
inputs[4].value = highlightObject.topAdjust;


for (let i=0; i<5; i++){
  inputs[i].addEventListener("input",changingAttributes )
}

function changingAttributes(){
  highlightObject.update(inputs[0].value, inputs[1].value,
     inputs[2].value, inputs[3].value, inputs[4].value);

}

document.addEventListener("keypress", keyEvent)

function keyEvent(ev){
  let key = ev.key;
  if (key == " "){
    if (highlightObject.status == "moving"){
      highlightObject.stopMove();
    }else{
      highlightObject.startMove();
    }
  }
}
