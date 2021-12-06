var verify = false;

$(function () {
    $.validator.setDefaults({
        submitHandler: function () {
            window.setTimeout(validateLogin, 100);
        }
    });
    $('#register').validate({
        rules: {
            email: {
                required: true,
                minlength: 1
            },
            senha: {
                required: true,
                minlength: 1
            }
        },
        messages: {
            email: {
                required: "Por favor, insira seu e-mail.",
                minlength: "Por favor, insira seu e-mail."
            },
            senha: {
                required: "Por favor, insira sua senha.",
                minlength: "Por favor, insira sua senha."
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});

var data_user = [];
function listingUser() {
    $.get(URL_API_USER, function (data, status) {
        if (data.length > 0 && status == "success") {
            data_user = data;
        } else {
            window.location.href = "404.php";
        }
    });
}
window.setTimeout(listingUser, 300);

function validateLogin() {
    for (var a = 0; a < data_user.length; a++) {
        if (data_user[a].email == $("#email").val() && data_user[a].senha == $("#senha").val()) {
            verify = true;

            sessionStorage.setItem("id", data_user[a].id);
            sessionStorage.setItem("nome", data_user[a].nome);
            sessionStorage.setItem("cpf", data_user[a].cpf);
            sessionStorage.setItem("carga_horaria", data_user[a].carga_horaria);
            sessionStorage.setItem("email", data_user[a].email);

            window.location.href = "../index.php";

            break;
        }
    }

    if (verify == false) {
        $("#email").val("");
        $("#senha").val("");

        $("#loginErrorModal").modal();
    }
}