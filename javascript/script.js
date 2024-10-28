let navlinks=document.querySelectorAll( ".links a")

let bodyId=document.querySelector("body").id 

for(let link of navlinks){
    if(link.dataset.active==bodyId){
        link.classList.add("active")
    }
}