$(function () {
    if (!sessionStorage.getItem("id")) {
        window.location.href = "../login.php";
    }
});

$(function () {
    $('[data-mask]').inputmask()
});

$(function () {
    if (!sessionStorage.getItem("client_id")) {
        window.location.href = "client_read.php";
    }
});

$(function () {
    $.validator.setDefaults({
        submitHandler: function () {
            $("#updateModal").modal();
        }
    });
    $('#register').validate({
        rules: {
            nome: {
                required: true,
                minlength: 1
            },
            cnpj: {
                required: true,
                minlength: 1
            },
            servico: {
                required: true,
                minlength: 1
            },
            contato: {
                required: true,
                minlength: 1
            },
            endereco: {
                required: true,
                minlength: 1
            }
        },
        messages: {
            nome: {
                required: "Por favor, insira um nome.",
                minlength: "Por favor, insira um nome."
            },
            cnpj: {
                required: "Por favor, insira um CNPJ.",
                minlength: "Por favor, insira um CNPJ."
            },
            servico: {
                required: "Por favor, insira um tipo de servço.",
                minlength: "Por favor, insira um tipo de servço."
            },
            contato: {
                required: "Por favor, insira um contato.",
                minlength: "Por favor, insira um contato."
            },
            endereco: {
                required: "Por favor, insira um endereço.",
                minlength: "Por favor, insira um endereço."
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

function listingClient() {
    $.get(URL_API_CLIENT + "/" + sessionStorage.getItem("client_id"), function (data, status) {
        if (status == "success") {
            $("#nome").val(data.nome);
            $("#cnpj").val(data.cnpj);
            $("#servico").val(data.servico);
            $("#contato").val(data.celular);
            $("#endereco").val(data.endereco);
        } else {
            window.location.href = "../404.php";
        }
    });
}
window.setTimeout(listingClient, 200);

$('#btn_update_client').on('click', function () {
    $.ajax({
        url: URL_API_CLIENT + '/' + sessionStorage.getItem("client_id"),
        type: 'PUT',
        data: {
            nome: $("#nome").val(),
            cnpj: $("#cnpj").val(),
            servico: $("#servico").val(),
            celular: $("#contato").val(),
            endereco: $("#endereco").val()
        },
        cache: false,
        success: function (data) {
            if (data.message == "ok") {
                window.location.href = "client_read.php";
            } else {
                window.location.href = "../404.php";
            }
        },
    });
});

