 const MIN_WIDTH = 768;
let LiList = document.querySelectorAll(".nav li");
let HeaderTitle = document.querySelector(".header-title");
        function ResponseHeaderTitle(){
            (window.innerWidth < MIN_WIDTH) ? HeaderTitle.innerHTML = "Matemata" : HeaderTitle.innerHTML = "Matemata - kursy dla każdego";
        }

        function ResponseMenu(){
            if(window.innerWidth < MIN_WIDTH){
                LiList.forEach(el => {
                    el.classList.add("nav-li-none");
                });
                document.querySelector(".first-nav-li").style.display = 'block';
            }
            else{
                LiList.forEach(el => {
                    el.classList.remove("nav-li-none");
                });
                document.querySelector(".first-nav-li").style.display = 'none';
            }
        }


ResponseHeaderTitle();
window.addEventListener('resize', ResponseHeaderTitle);
ResponseMenu();
window.addEventListener('resize', ResponseMenu);

let clicked = true;
document.querySelector(".first-nav-li button").addEventListener("click", (e)=>{
    if(clicked){
        LiList.forEach((el, index) => {
            setTimeout(() => {
                el.classList.remove("nav-li-none");
            }, index * 50);
        });
        clicked = false;
    }
    else{   
        LiList.forEach((el, index) => {
            setTimeout(() => {
                el.classList.add("nav-li-none");
            }, (LiList.length - 1 - index) * 100);
        });
        document.querySelector(".first-nav-li").style.display = 'block';
        clicked = true;
    }
});
