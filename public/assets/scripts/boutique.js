let objects = document.querySelectorAll("div.flex-wrap > div");



objects.forEach(object => {
    object.addEventListener("click", buyItemOnClick);
});



function buyItemOnClick(event){
  let monItem = event.target;

    console.log(monItem);
    
    
}