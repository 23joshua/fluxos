function toggle() {
    let nav = document.querySelector(".nav");
    let toggle = document.querySelector(".toggle");
    let header = document.querySelector(".header");
    let solution = document.querySelector(".solution");
    let ulSolution = document.querySelector(".ul-solution")
    let i = document.querySelector("i")

    toggle.addEventListener("click", () => {
        nav.classList.toggle("nav_active");
        header.classList.toggle("header_active");
    });

    solution.addEventListener("click", () => {
        ulSolution.classList.toggle("ul_solution");

        if (ulSolution.getAttribute('class') == ul_solution) {
            i.classList.remove("icon-angle-down");
            i.classList.add("icon-angle-up");
        }
    });
}

function menu() {
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('.nav a');

    for (let i = 0; i < menuItem.length; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].classList.add("a_active");
        }

    }
}

/**
 * n -> nav 
 * l -> links
 * ac -> active
 * */
function menuS(navLink, box, acNav, acBox) {
    let link = document.querySelectorAll(navLink);
    let article = document.querySelectorAll(box);

    for (let i = 0; i < link.length; i++) {
        link[i].addEventListener('click', function (e) {
            e.preventDefault()
            for (let y = 0; y < link.length; y++) {
                link[y].classList.remove(acNav)
            }
            this.classList.add(acNav)

            let dataFilter = this.getAttribute('data-filter')

            for (let k = 0; k < article.length; k++) {
                article[k].classList.remove(acBox)
                article[k].classList.add('hide');

                if (article[k].getAttribute('data-item') == dataFilter ||
                    dataFilter == "all") {
                    article[k].classList.add(acBox)
                    article[k].classList.remove('hide')
                }
            }
        })
    }

}

menu();
toggle();
menuS('.list', '.item', 'a_active', 'active_figure');