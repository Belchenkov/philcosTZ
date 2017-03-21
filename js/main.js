$(document).ready(function () {
    $('.showForm').on('click', function () {
        $('#form').fadeToggle(500);
    });

    $('#reset, ').on('click', function () {
        $('#form').fadeOut(500);
    });
});