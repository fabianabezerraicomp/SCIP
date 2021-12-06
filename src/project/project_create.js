$(function () {
    if (!sessionStorage.getItem("id")) {
        window.location.href = "../login.php";
    }
});

$(function () {
    //Money Euro
    $('[data-mask]').inputmask()
});

$(function () {
    $.validator.setDefaults({
        submitHandler: function () {
            $("#insertModal").modal();
        }
    });
    $('#register').validate({
        rules: {
            nome: {
                required: true,
                minlength: 1
            },
            cliente: {
                required: true
            },
            descricao: {
                required: true,
                minlength: 1
            },
            prioridade: {
                required: true
            },
            data_inicial: {
                required: true
            },
            data_final: {
                required: true
            }
        },
        messages: {
            nome: {
                required: "Por favor, insira um nome",
                minlength: "Por favor, insira um nome"
            },
            cliente: {
                required: "Por favor, selecione um cliente"
            },
            descricao: {
                required: "Por favor, insira uma descrição",
                minlength: "Por favor, insira uma descrição"
            },
            prioridade: {
                required: "Por favor, selecione a prioridade"
            },
            data_inicial: {
                required: "Por favor, insira a data inicial"
            },
            data_final: {
                required: "Por favor, insira a data final"
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
function listingUsers() {
    $.get(URL_API_USER, function (data, status) {
        if (data.length > 0 && status == "success") {
            data.sort(function(a,b) {
                if(a.id < b.id) return -1;
                if(a.id > b.id) return 1;
                return 0;
            });

            data_user = data;

            var html = "";
            for (var a = 0; a < data.length; a++) {
                html += "<div class=\"form-group clearfix col-sm-6\">";
                html += "<div class=\"custom-control custom-checkbox ml-2\" onchange=\"checkedMembros()\">";
                html += "<input class=\"custom-control-input radio\" type=\"checkbox\" id=\"" + data[a].id + "\">";
                html += "<label class=\"custom-control-label\" for=\"" + data[a].id + "\" id=\"labelCheck_" + data[a].id + "\">";
                html += "" + data[a].nome + "";
                html += "</label>";
                html += "</div>";
                html += "</div>";

                document.getElementById("membros").innerHTML = html;
            }

            window.setTimeout(listingClients, 200);
        } else {
            window.location.href = "../404.php";
        }
    });
}
window.setTimeout(listingUsers, 200);

function listingClients() {
    $.get(URL_API_CLIENT, function (data, status) {
        if (data.length > 0 && status == "success") {
            data.sort(function(a,b) {
                if(a.id < b.id) return -1;
                if(a.id > b.id) return 1;
                return 0;
            });
            
            var html = "";
            html += "<option selected value=\"\"></option>";
            for (var a = 0; a < data.length; a++) {
                html += "<option value=\"" + data[a].id + "\">" + data[a].nome + "</option>";
                document.getElementById("cliente").innerHTML = html;
            }
        } else {
            window.location.href = "../404.php";
        }
    });
}

var membros = [];
function checkedMembros() {
    membros = [];
    for (var a = 0; a <= data_user.length; a++) {
        var nome_check = '' + data_user[a].id;

        if (document.getElementById(nome_check).checked) {
            membros.push(data_user[a].id);
        }
    }
}

$(document).ready(function () {
    $('#btn_insert_project').on('click', function () {
        $.post(URL_API_PROJECT, {
            nome: $("#nome").val(),
            descricao: $("#descricao").val(),
            data_inicio: $("#data_inicial").val(),
            data_fim: $("#data_final").val(),
            cliente_id: $("#cliente option:selected").val(),
            prioridade: $("#prioridade option:selected").val(),
            membros: membros
        },
        function (data, status) {
            alert("Data: " + data.message + "\nStatus: " + status);
            if (data.message == "ok" && status == "success") {
                window.location.href = "project_read.php";
            } else {
                window.location.href = "../404.php";
            }
        });
    });
});