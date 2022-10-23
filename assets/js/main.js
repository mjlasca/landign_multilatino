const $sendpackage = document.getElementById("sendpackage");
const $sendmoney = document.getElementById("sendmoney");
const $content_fluid = document.getElementById("fluid_mlny");

function removeClass(classname){
  const el = document.getElementsByClassName(classname);
  for(var i = 0; i < el.length; i++)
        el[i].classList.remove(classname);
}

function showDivSend(iddiv,divclick){

  if(divclick != ""){
    removeClass("b-bottom");
    removeClass("container-fluid-mlny-1");
    removeClass("container-fluid-mlny-2");
  }
  
  if(iddiv == "sendmoney"){
    $sendpackage.style.display = "none";
    $sendmoney.style.display = "block";
    $content_fluid.className += " container-fluid-mlny-1";
  }

  if(iddiv == "sendpackage"){
    $sendmoney.style.display = "none";
    $sendpackage.style.display = "block";
    $content_fluid.className += " container-fluid-mlny-2";
  }

  if(divclick != "" && divclick.className.indexOf("b-bottom") < 0)
    divclick.className += " b-bottom";

}

showDivSend('sendmoney', "");