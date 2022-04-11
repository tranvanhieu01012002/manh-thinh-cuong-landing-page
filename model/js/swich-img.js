function slideshow() {
    // clone
    $(".slider-1")
        .clone()
        .removeClass("slider-1")
        .addClass("slider-2")
        .insertAfter($(".slider"));

    // set first
    $(".slider-1").slick({
        draggable: false,
        dots: false,
        infinite: true,
        responsive: true,
        asNavFor: ".slider-2",
        touchThreshold: 20,
        speed: 1000,
        fade: true,
    });

    // set second
    $(".slider-2").slick({
        dots: true,
        infinite: true,
        responsive: true,
        asNavFor: ".slider-1",
        arrows: false,
        speed: 1000,
        easing: "easeInOutQuart",
    });
}

// $(function() {
//     slideshow();
//     setTimeout(function() {
//         $(".slider-1 .slick-next").click();
//     }, 1000);
// });
var statusBlock = "no";
document.addEventListener(
    "DOMContentLoaded",
    function() {
        var blockTxt = document.querySelector(".text-monthly-des");
        var hightBlockTxt = blockTxt.offsetTop - 700;
        var txt = document.querySelector(".text-monthly-des p");
        window.addEventListener("scroll", function() {
            var highPage = window.pageYOffset;
            if (highPage > hightBlockTxt) {
                if (statusBlock == "no") {
                    addAnimation(txt, "animationMove");
                    $(".text-monthly-des h4").addClass("animationMoveLeft");
                    statusBlock = "yes";
                }
            } else if (highPage < hightBlockTxt) {
                if (statusBlock == "yes") {
                    removeAnimation(txt, "animationMove");
                    $(".text-monthly-des h4").removeClass(
                        "animationMoveLeft"
                    );
                    statusBlock = "no";
                }
            }
        });
    },
    false
);
var addAnimation = (text, animation) => {
    text.classList.add(animation);
};
var removeAnimation = (text, animation) => {
    text.classList.remove(animation);
};

$(document).ready(() => {
    $("button").click(function() {
        $(".text-monthly-des p").removeClass("animationMove");
        $(".text-monthly-des h4").removeClass("animationMoveLeft");
        setTimeout(function() {
            $(".text-monthly-des h4").addClass("animationMoveLeft");
            $(".text-monthly-des p").addClass("animationMove");
        }, 200);
        $("button").removeClass("activeClick");
        $(this).addClass("activeClick");
    });
});