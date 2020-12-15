
const data = {
    1:{
        title:"Educavo History",
        desc:"At vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sim ilique sunt in culpa.",
        img:"img/tab1.jpg"
    },
    2:{
        title:"Educavo Mission",
        desc:"At vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sim ilique sunt in culpa.",
        img:"img/tab2.jpg"
    },
    3:{
        title:"Educavo Administration",
        desc:"At vero eos et accusamus et iusto odio dignissimos ducimus qui blan ditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sim ilique sunt in culpa.",
        img:"img/tab3.jpg"
    }
}

const lis = document.querySelectorAll(".changeInfo ul li")
const tabs = document.getElementById("tabs")
lis.forEach(li => {
    li.onclick = function() {
        lis.forEach(item => item.classList.remove("active"))
        this.classList.add("active")
        console.log(this.dataset.tap)
        const id = this.dataset.tap
        tabs.innerHTML = `
            <h3 class="mb-4">${data[id].title}</h3>
            <p>${data[id].desc}</p>
            <img src="${data[id].img}" class="img-fluid mt-3" alt="">
        `
    }
})
console.log(lis)

window.addEventListener("resize",setSlides)

function setSlides(){
    function slidesPerView(arg1,arg2){
        if(window.innerWidth < 992) return arg1
        else return arg2
    }
    
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: slidesPerView(1,2),
        spaceBetween: 30,
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },
      
    
      
      })
}
setSlides()
