var statusBlock = "no";
document.addEventListener(
    "DOMContentLoaded",
    function() {
        var blockTxt = document.querySelector(".cont-layout");
        var hightBlockTxt = blockTxt.offsetTop - 700;
        console.log(222);
        window.addEventListener("scroll", function() {
            var highPage = window.pageYOffset;
            if (highPage > hightBlockTxt) {
                if (statusBlock == "no") {
                    $(".col-item:nth-child(even)").addClass("animationMoveOnlyLeft");
                    $(".col-item:nth-child(odd)").addClass("animationMoveRight");
                    $(".text-intr").addClass("animationMove");
                    statusBlock = "yes";
                }
            } else if (highPage < hightBlockTxt) {
                if (statusBlock == "yes") {
                    $(".col-item:nth-child(even)").
                    removeClass("animationMoveOnlyLeft");
                    $(".col-item:nth-child(odd)").removeClass("animationMoveRight");
                    $(".text-intr").removeClass("animationMove");
                    statusBlock = "no";
                }
            }
        });
    },
    false
);