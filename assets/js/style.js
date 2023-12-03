document.addEventListener("DOMContentLoaded", function () {
    let click = false;
    const open = document.querySelector(".open");
    const close = document.querySelector(".close");
    const nav = document.querySelector(".navbar-content");
    const nav_ul = document.querySelector(".navbar-content ul");
    const nav_ul_li = document.querySelectorAll("#item");
    const nav_nav = document.querySelector(".nav");

    open.addEventListener("click", function () {
        if(!click) {
            click = true;
            open.style.visibility = "hidden";
            close.style.visibility = "visible";
            nav.style.visibility = "visible";
            nav_ul.style.height = nav_ul.scrollHeight + "px";
            nav_nav.style.borderBottom = "1px solid white";
            nav_ul_li.forEach(item => {
                item.style.visibility = "visible";
            })
        }
    });

    close.addEventListener("click", function () {
        if(click) {
            nav_ul_li.forEach(item => {
                item.style.visibility = "hidden";
            })
            click = false;
            nav_ul.style.height = "0px";
            close.style.visibility = "hidden";
            open.style.visibility = "visible";
            nav.style.visibility = "hidden";
            nav_nav.style.borderBottom = "none";
        }
    });
});
