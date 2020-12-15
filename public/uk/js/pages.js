
const btns = document.querySelectorAll(".cardCollapse .header")
let currentChosenElement = 1;
btns.forEach(btn => {
    btn.onclick = () => {
        if(btn.dataset.id == currentChosenElement){
            btn.parentElement.classList.toggle("active")
        }
        else{
            btns.forEach(item => item.parentElement.classList.remove("active"))
            btn.parentElement.classList.add("active")
            currentChosenElement = btn.dataset.id
        }
    }
})


