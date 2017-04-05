$(document).ready(function () {
    $('#btn-submit').on('click', function (e) {
        e.preventDefault();

        $.post("scripts.php",
            {
                name: $('[name="name"]').val(),
                surname: $('[name="surname"]').val(),
                city: $('[name="city"]').val(),
                age: $('[name="age"]').val(),
                message: $('[name="message"]').val()
            },
            function (data) {
                $("div#messageServer").html('<h3 id="alertAdd" class="alert alert-success text-center">'+data+'</h3>');
                $('#form').hide(500);
                setTimeout(function () {
                    $("div#messageServer").hide(1000);
                }, 3000);
            }
        );

    });

});