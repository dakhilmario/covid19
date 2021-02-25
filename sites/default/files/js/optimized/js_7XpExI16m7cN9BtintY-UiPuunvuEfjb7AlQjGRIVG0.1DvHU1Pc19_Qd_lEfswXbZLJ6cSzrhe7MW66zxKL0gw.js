/* Source and licensing information for the line(s) below can be found at http://localhost/corona-website/covid19/themes/covid/js/top.js. */
const topScroll = function () {
    const btnTop = document.querySelector(".js-top-icon");

    btnTop.addEventListener("click", (e) => {
        e.preventDefault();
        window.scroll({
            top: 0,
            behavior: 'smooth'
        });
    });
};

const init = function () {
    topScroll();
}

document.addEventListener("DOMContentLoaded", init);

/* Source and licensing information for the above line(s) can be found at http://localhost/corona-website/covid19/themes/covid/js/top.js. */