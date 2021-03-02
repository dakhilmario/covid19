"use strict"

//als de user ingelogd is dan wordt de navbar naar beneden verschuift
const drupalNav = function () {
    if ($("nav").hasClass("toolbar-bar")) {
        $(".c-navbar").css('top', "8rem")
    }
}

$(document).ready(function () {
    $(".c-hammenu").click(function () { 
        $(this).toggleClass('js-transformed');
        $(".c-navbar__items").slideToggle(350, "linear");
        $(".c-navbar__items").css("display", "flex");
        console.log("js done");
    });

    window.addEventListener("resize", () => {
        $(".c-navbar__items").removeAttr('style');
    });

    drupalNav();

});


