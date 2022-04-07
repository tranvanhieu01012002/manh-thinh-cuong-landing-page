var elements = $('.modal-overlay, .modal');

$(document).ready(function() {
    $(".modal .modal-content .text-h1").text(
        "Thông tin của bạn nhập không chính xác nên chúng tôi không thể liên hệ được với bạn"
    );
    $(".modal .modal-content h3").text("Vui lòng nhập lại thông tin!");
    elements.addClass("active");
});

$('.close-modal').click(function() {
    elements.removeClass('active');
});