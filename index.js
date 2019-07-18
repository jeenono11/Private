function setNextFocus(obj){
  if(obj.value.length >= obj.maxLength){
    var es = document.fm1.elements;
    for(var i=0;i<es.length;i++){
      if(es[i] == obj){
        es[i+1].focus();
        break;
      }
    }
  }
}

function selectboxChange() {
  target = document.getElementById("output");
  selindex = document.fm1.num2.selectedIndex;
  switch (selindex) {
        case 1:
          target.innerHTML = '1A';
          break;
        case 2:
          target.innerHTML = "1B";
          break;
        case 3:
          target.innerHTML = "1E";
          break;
        case 4:
          target.innerHTML = "1F";
          break;
        case 5:
          target.innerHTML = "1H";
          break;
        case 6:
          target.innerHTML = "1J";
          break;
        case 7:
          target.innerHTML = "1K";
          break;
        case 8:
          target.innerHTML = "1M";
          break;
        case 9:
          target.innerHTML = "1T";
          break;
        case 10:
          target.innerHTML = "1U";
          break;
        case 11:
          target.innerHTML = "1W";
          break;
        case 12:
        target.innerHTML = "1X";
          break;
        case 13:
          target.innerHTML = "1Y";
          break;                  
  }
}

function myfunc1() {
  var index = document.getElementById("hidden_show1").selectedIndex;
  var value = document.getElementById("hidden_show1").value;
  var obj = document.getElementById("hidden_show1");
  console.log("active");
  var list = obj.classList;
  console.log(list);
  obj.classList.add("hidden_show_active1");
  console.log(obj.classList);
}

function myfunc2(obj){
    if(obj.value.length >= obj.maxLength){
      var index = document.getElementById("hidden_show2").selectedIndex;
      var value = document.getElementById("hidden_show2").value;
      var obj = document.getElementById("hidden_show2");
      console.log("active");
      var list = obj.classList;
      console.log(list);
      obj.classList.add("hidden_show_active2");
      console.log(obj.classList);
    }
  }


  $(function(){
    $('.js-modal-open').on('click',function(){
        $('.js-modal').fadeIn();
        return false;
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    });
  });

$(function(){
  $(window).on('load',function(){
    $("#pageloading-wrap").delay(1000).fadeOut('slow');
  });
  function loaderClose(){
    $("#pageloading-wrap").fadeOut('slow');
  }
  setTimeout(loaderClose,10000);
});

function changeItem(obj){ 
  if( obj.value == 0 ){ 
      obj.style.color = ''; 
  }else{ 
      obj.style.color = '#ff0101'; 
  } 
} 
