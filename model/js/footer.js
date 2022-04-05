var elements = $('.modal-overlay, .modal');

$(".submit-btn").click(function() {
    elements.addClass("active");
});

$('.close-modal').click(function() {
    elements.removeClass('active');
});