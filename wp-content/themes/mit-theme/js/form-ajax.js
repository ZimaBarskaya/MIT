$(document).ready(function () {
    // this is the id of the form

    $("#form").submit(function (event) {

        $("#submit-form").html("Отправка ...");
        var url = "sendemail.php"; // the script where you handle the form input.

        var form = $('#form')[0]; // You need to use standart javascript object here
        var formData = new FormData(form);

        $.ajax({
            url: url,
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function (data) {
                if (data == 1) {
                    event.preventDefault();

                    //var wrap = $(event.target).parent();
                    //var formContent = $(event.target).detach();
                    $("#submit-form").html("Успешно отправлено");

                    /*setTimeout(function () {
                        $('.form-success').detach();
                        $(wrap).append(formContent);
                    }, 10000);*/
                    $("#popup-success").removeClass("mfp-hide");
                }

                else {
                    $("#submit-form").html("Ошибка");

                    setTimeout(func, 3000);

                    function func() {
                        $("#submit-form").html("Отправить еще раз");
                    }
                }
            },

            error: function (data) {
                $("#submit-form").html("Ошибка");

                setTimeout(func, 3000);

                function func() {
                    $("#submit-form").html("Отправить еще раз");
                }
            }
        });
        event.preventDefault(); // avoid to execute the actual submit of the form.
    });





    $("#form-2").submit(function (event) {

        $("#submit-form-2").html("Отправка ...");
        var url = "sendemail.php"; // the script where you handle the form input.

        var form = $('#form-2')[0]; // You need to use standart javascript object here
        var formData = new FormData(form);

        $.ajax({
            url: url,
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function (data) {
                if (data == 1) {
                    event.preventDefault();

                    //var wrap = $(event.target).parent();
                    //var formContent = $(event.target).detach();
                    $("#submit-form-2").html("Успешно отправлено");

                    /*setTimeout(function () {
                        $('.form-success').detach();
                        $(wrap).append(formContent);
                    }, 10000);*/
                    $("#popup-success").removeClass("mfp-hide");
                }

                else {
                    $("#submit-form-2").html("Ошибка");

                    setTimeout(func, 3000);

                    function func() {
                        $("#submit-form-2").html("Отправить еще раз");
                    }
                }
            },

            error: function (data) {
                $("#submit-form-2").html("Ошибка");

                setTimeout(func, 3000);

                function func() {
                    $("#submit-form-2").html("Отправить еще раз");
                }
            }
        });
        event.preventDefault(); // avoid to execute the actual submit of the form.
    });





    $("#form-3").submit(function (event) {

        $("#submit-form-3").html("Отправка ...");
        var url = "sendemail.php"; // the script where you handle the form input.

        var form = $('#form-3')[0]; // You need to use standart javascript object here
        var formData = new FormData(form);

        $.ajax({
            url: url,
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function (data) {
                if (data == 1) {
                    event.preventDefault();

                    //var wrap = $(event.target).parent();
                    //var formContent = $(event.target).detach();
                    $("#submit-form-3").html("Успешно отправлено");

                    /*setTimeout(function () {
                        $('.form-success').detach();
                        $(wrap).append(formContent);
                    }, 10000);*/
                    $("#popup-success").removeClass("mfp-hide");
                }

                else {
                    $("#submit-form-3").html("Ошибка");

                    setTimeout(func, 3000);

                    function func() {
                        $("#submit-form-3").html("Отправить еще раз");
                    }
                }
            },

            error: function (data) {
                $("#submit-form-3").html("Ошибка");

                setTimeout(func, 3000);

                function func() {
                    $("#submit-form-3").html("Отправить еще раз");
                }
            }
        });
        event.preventDefault(); // avoid to execute the actual submit of the form.
    });
});