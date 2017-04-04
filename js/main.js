$(document).ready(function () {
    $('.showForm').on('click', function () {
        $('#form').fadeToggle(500);
    });

    setTimeout(function () {
        $('#alertPublished').hide(500);
    }, 2000);
});