$(function () {
    if (!sessionStorage.getItem("id")) {
        window.location.href = "../login.php";
    }
});

$(function () {
    $('[data-mask]').inputmask()
});

$(function() {
    $.validator.setDefaults({
        submitHandler: function() {
            $("#insertModal").modal();
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
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});

$('#btn_insert_client').on('click', function() {
    $.post(URL_API_CLIENT, {
        nome: $("#nome").val(),
        cnpj: $("#cnpj").val(),
        servico: $("#servico").val(),
        celular: $("#contato").val(),
        endereco: $("#endereco").val()
    },
    function (data, status) {
        if(data.message == "ok" && status == "success"){
            window.location.href = "client_read.php";
        } else {
            window.location.href = "../404.php";
        }
    });
});