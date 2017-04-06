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
    $('a.btn.btn-success').on('click', function (e) {
        e.preventDefault();

        var recordId = e.target.attributes['id'].value;

        var parent = $(this).parents('ul');
        console.log($(this).parents('ul'));

        $.get("scripts.php",
             {
                 id: recordId
             },
             function (data) {
                 $('div#messageServer').show(500);
                 $("div#messageServer").html('<h3 id="alertAdd" class="alert alert-success text-center">'+data+'</h3>');

                 parent.hide(500);
                 setTimeout(function () {
                      $("div#messageServer").hide(500);
                 }, 2000);
             }
         );
    });

});