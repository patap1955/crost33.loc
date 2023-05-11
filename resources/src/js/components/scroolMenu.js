(() => {
    const navbar = document.getElementById("navbar");
    const navMenu = document.querySelector(".nav");
    const navScroll = document.querySelectorAll(".nav__link")
    const navScrollServecePage = document.querySelectorAll(".nav__link-services");
    const scrollNavList = document.querySelector(".nav__list");
    const navMobile = document.querySelector(".nav__mobile-phone");

    const mQuery = window.matchMedia('(min-width: 769px)')

    if (mQuery.matches) {
        if (window.scrollY >= 200) {
            scrollMenu();
        }


        window.addEventListener("scroll", e => {
            scrollMenu();
        })
    }

    function scrollMenu () {
        if(scrollY > 200) {
            navbar.classList.add("navbar_scrolled");
            navMenu.classList.add("scroll-nav");
            scrollNavList.classList.add("scroll-nav");
            navMobile.classList.add("scroll-nav");
            navScroll.forEach((element) => {
                if (element) {
                    element.classList.add("navScroll");
                }
            });
            navScrollServecePage.forEach((element) => {
                if (element) {
                    element.classList.add("navScroll");
                }
            })

        } else {
            navbar.classList.remove("navbar_scrolled");
            navMenu.classList.remove("scroll-nav");
            scrollNavList.classList.remove("scroll-nav");
            navMobile.classList.remove("scroll-nav");
            navScroll.forEach((element) => {
                element.classList.remove("navScroll");
            })
        }
    }
})()
