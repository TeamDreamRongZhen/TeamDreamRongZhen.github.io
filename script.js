
//遍历所有id存在en的
function getElementsByIdWithEn(element) {
  var elements = document.querySelectorAll(element + '[id*="en"]');
  var result = [];
  for (var i = 0; i < elements.length; i++) {
    result.push(document.getElementById(elements[i].id));
  }
  return result;
 }

 //遍历所有id存在ch的
 function getElementsByIdWithCh(element) {
  var elements = document.querySelectorAll(element + '[id*="ch"]');
  var result = [];
  for (var i = 0; i < elements.length; i++) {
    result.push(document.getElementById(elements[i].id));
  }
  return result;
 }

 var elementsC = getElementsByIdWithCh('*');//所有中文id
 var elementsE = getElementsByIdWithEn('*');//所有英文id

 var lang = "ch"
for (var i = 0; i < elementsE.length; i++) {
  elementsE[i].style.display = 'none';//不显示英文
}
for (var i = 0; i < elementsC.length; i++) {
  elementsC[i].style.removeProperty('display');//显示中文
}

document.getElementById("trsl").addEventListener("click", function() {
  alert("fff")
});