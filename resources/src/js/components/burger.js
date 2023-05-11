(() => {
    const burger = document.querySelector(".burger");
    const nav = document.getElementById("navbar");
    const burgerLine = document.querySelector(".burger__line")
    const navList = document.querySelector(".nav__list");
    const navLink = document.querySelectorAll('.nav__link')

    burger.addEventListener("click", e => {
        burger.classList.toggle("active");
        nav.classList.toggle("active");
        burgerLine.classList.toggle("active");
        navList.classList.toggle("active");
        document.querySelector("body").classList.toggle("lock");

        navLink.forEach((el) => {
            el.addEventListener('click', (e) => {
                burger.classList.remove("active");
                nav.classList.remove("active");
                burgerLine.classList.remove("active");
                navList.classList.remove("active");
                document.querySelector("body").classList.remove("lock");
            })
        })
    })
})();

