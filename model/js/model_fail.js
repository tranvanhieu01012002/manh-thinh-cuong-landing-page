var elements = $('.modal-overlay, .modal');

$(document).ready(function() {
    $(".modal .modal-content .text-h2").text(
        "Thông tin bạn nhập không chính xác"
    );
    $(".modal .modal-content h3").text("Vui lòng nhập lại!");
    elements.addClass("active");
});

$('.close-modal').click(function() {
    elements.removeClass('active');
});