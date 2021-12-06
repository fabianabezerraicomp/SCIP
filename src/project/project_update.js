$(function () {
    if (!sessionStorage.getItem("id")) {
        window.location.href = "../login.php";
    }
});

var data_user = [];
var data_membros = [];
let membros = [];

$(function () {
    //Money Euro
    $('[data-mask]').inputmask()
});

$(function () {
    if (!sessionStorage.getItem("project_id")) {
        window.location.href = "project_read.php";
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

const listingUsers = async () => {
    try {
        $.get(URL_API_USER, function (data, status) {
            if (data.length > 0 && status == "success") {
                data.sort(function(a,b) {
                    if(a.id < b.id) return -1;
                    if(a.id > b.id) return 1;
                    return 0;
                });

                data_user = data;

                window.setTimeout(listingClients, 200);
            } else {
                window.location.href = "../404.php";
            }
        });
    } catch (err) {
        console.log(err)
    }

}
window.setTimeout(listingUsers, 200);

const listingClients = async () => {
    try {
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

                window.setTimeout(visualizeProject, 200);
            } else {
                window.location.href = "../404.php";
            }
        });
    } catch (err) {
        console.log(err)
    }
}

function listingMembros() {
    membros = [];
    for (var a = 0; a < data_user.length; a++) {
        var cbox = '' + data_user[a].id;

        if (document.getElementById(cbox).checked) {
            membros.push(data_user[a].id);
        }
    }
}

const visualizeProject = async () => {
    try {
        $.get(URL_API_PROJECT + "/" + sessionStorage.getItem("project_id"), function (data, status) {
            if (status == "success") {
                $("#nome").val(data.nome);
                $("#cliente").val(data.cliente_id);
                $("#descricao").val(data.descricao);
                $("#prioridade").val(data.prioridade);
                $("#data_inicio").val(data.data_inicio);
                $("#data_fim").val(data.data_fim);
                data_membros = data.membros;

                var html = "";
                for (var a = 0; a < data_user.length; a++) {
                    html += "<div class=\"form-group clearfix col-sm-6\">";
                    html += "<div class=\"custom-control custom-checkbox ml-2\" onchange=\"listingMembros()\"\">";
                    html += "<input class=\"custom-control-input radio\" type=\"checkbox\" id=\"" + data_user[a].id + "\">";
                    html += "<label class=\"custom-control-label\" for=\"" + data_user[a].id + "\" id=\"labelCheck_" + data_user[a].id + "\">";
                    html += "" + data_user[a].nome + "";
                    html += "</label>";
                    html += "</div>";
                    html += "</div>";
                }
                document.getElementById("membros").innerHTML = html;

                window.setTimeout(checkedMembros, 200);
            } else {
                window.location.href = "../404.php";
            }
        });
    } catch (err) {
        console.log(err)
    }
}

const checkedMembros = async () => {
    try {
        for (var a = 0; a < data_user.length; a++) {
            var cbox = '' + data_user[a].id;

            for (var b = 0; b < data_membros.length; b++) {
                if (data_membros[b].id == data_user[a].id) {
                    document.getElementById(cbox).checked = true;
                }
            }
        }
    } catch (err) {
        console.log(err)
    }
}

$('#btn_update_project').on('click', function () {
    $.ajax({
        url: URL_API_PROJECT + '/' + sessionStorage.getItem("project_id"),
        type: 'PUT',
        data: {
            nome: $("#nome").val(),
            descricao: $("#descricao").val(),
            data_inicio: $("#data_inicial").val(),
            data_fim: $("#data_final").val(),
            prioridade: $("#prioridade option:selected").val(),
            membros: membros
        },
        cache: false,
        success: function (data) {
            if (data.message == "ok") {
                window.location.href = "project_visualize.php";
            } else {
                window.location.href = "../404.php";
            }
        },
    });
});