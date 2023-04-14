ul = document.getElementById("menu-flters");
li = ul.getElementsByTagName('li');
for (let index = 0; index < li.length; index++) {

    li[index].onclick=function(){
   let active=   li[index].getAttribute("value");
 
   li[index].classList.add("filter-active");
  var link= window.location.href;
  window.location.href="index.php"+"? menuL="+active;
//  alert(active);
    }
    console.log(li[index]);
}
