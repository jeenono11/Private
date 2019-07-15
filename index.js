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