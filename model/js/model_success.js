var elements = $(".modal-overlay, .modal");
$(document).ready(function() {
    elements.addClass("active");
});

$(".close-modal").click(function() {
    elements.removeClass("active");
});