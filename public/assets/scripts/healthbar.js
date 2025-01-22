let bar = document.getElementById("barrevie");

if(parseInt(bar.style.width) <= 50){

    bar.classList.remove("bg-green-600");
    
    bar.style.backgroundColor = "yellow";

}  if(parseInt(bar.style.width) <= 30){
    bar.classList.remove("bg-green-600");
    bar.style.backgroundColor = "red";
    bar.classList.add("bg-red-500");
}
