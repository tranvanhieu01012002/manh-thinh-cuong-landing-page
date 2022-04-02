var img = document.querySelector(".display-img img#main");
var btn1 = document.querySelector("#lb1");
var btn2 = document.querySelector("#lb2");
var btn3 = document.querySelector("#lb3");
var btn4 = document.querySelector("#lb4");
var btn5 = document.querySelector("#lb5");
btn1.addEventListener("click", () => {
    img.src = document.querySelector("#imgg1").getAttribute("src");
    img.style.animation = "img-move 2s linear 0s 1 forwards";
});
btn2.addEventListener("click", () => {
    img.src = document.querySelector("#imgg2").getAttribute("src");

    img.style.animation = "img-move 2s linear 0s 1 forwards";
});
btn3.addEventListener("click", () => {
    img.src = document.querySelector("#imgg3").getAttribute("src");

    img.style.animation = "img-move 2s linear 0s 1 forwards";
});
btn4.addEventListener("click", () => {
    img.src = document.querySelector("#imgg4").getAttribute("src");
    img.style.animation = "img-move 2s linear 0s 1 forwards";
});
btn5.addEventListener("click", () => {
    img.src = document.querySelector("#imgg5").getAttribute("src");

    img.style.animation = "img-move 2s linear 0s 1 forwards";
});