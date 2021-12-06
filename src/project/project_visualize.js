$(function () {
    if (!sessionStorage.getItem("id")) {
        window.location.href = "../login.php";
    }
});

$(function () {
    if (sessionStorage.getItem("tab_single_project") == "task") {
        document.getElementById("tasks-tab").click();
    }
});

$("#gantt-tab").on("click", function () {
    sessionStorage.setItem("tab_single_project", "");
    window.location.href = "project_visualize.php";
});
$("#tasks-tab").on("click", function () {
    sessionStorage.setItem("tab_single_project", "task");
});

$(function () {
    if (!sessionStorage.getItem("project_id")) {
        window.location.href = "project_read.php";
    }
});

var data_client = [];
function visualizeClients() {
    $.get(URL_API_CLIENT, function (data, status) {
        if(data.length > 0 && status == "success") {
            data.sort(function(a,b) {
                if(a.id < b.id) return -1;
                if(a.id > b.id) return 1;
                return 0;
            });
            
            data_client = data;

            window.setTimeout(visualizeProject, 200);
        } else {
            window.location.href = "../404.php";
        }
    });
}
window.setTimeout(visualizeClients, 200);

function visualizeProject() {
    $.get(URL_API_PROJECT + "/" + sessionStorage.getItem("project_id"), function (data, status) {
        if (status == "success") {
            var id = data.id;
            var nome = data.nome;
            var descricao = data.descricao;
            var ativo = data.ativo;
            var data_inicio = data.data_inicio;
            var data_fim = data.data_fim;
            var cliente_id = data.cliente_id;
            var prioridade = data.prioridade;
            var membros = data.membros;

            var html = "";
            html +=
                '<span class="info-box-text text-center text-muted">Data de Início</span>';
            html +=
                '<span class="info-box-number text-center text-muted mb-0">' +
                data_inicio +
                "</span>";
            document.getElementById("data_inicio").innerHTML = html;

            html = "";
            html +=
                '<span class="info-box-text text-center text-muted">Data de Entrega</span>';
            html +=
                '<span class="info-box-number text-center text-muted mb-0">' +
                data_fim +
                "</span>";
            document.getElementById("data_fim").innerHTML = html;

            html = "";
            html +=
                '<span class="info-box-text text-center text-muted">Status do Projeto</span>';
            if (ativo) {
                html +=
                    '<p class="info-box-number text-center text-success mb-0"> ATIVO </p>';
            } else {
                html +=
                    '<p class="info-box-number text-center text-danger mb-0"> INATIVO </p>';
            }
            document.getElementById("status").innerHTML = html;

            html = "";
            html += '<i class="fas fa-archive"></i> ' + nome + "";
            document.getElementById("nome").innerHTML = html;

            html = "";
            html += '<div class="row">';
            html += '<b class="d-block col-sm-12">' + descricao + "</b>";
            html += "</div>";
            document.getElementById("descricao").innerHTML = html;

            html = "";
            html += "Prioridade";
            html += '<div class="row">';
            if (prioridade == "low") {
                html +=
                    '<b class="d-block col-sm-12 text-success"> LOW </b>';
            } else if (prioridade == "medium") {
                html +=
                    '<b class="d-block col-sm-12 text-warning"> MEDIUM </b>';
            } else {
                html +=
                    '<b class="d-block col-sm-12 text-danger"> HIGH </b>';
            }
            html += "</div>";
            document.getElementById("prioridade").innerHTML = html;

            var cliente = "";
            for (var a = 0; a < data_client.length; a++) {
                if (cliente_id == data_client[a].id) {
                    cliente = data_client[a].nome;
                    break;
                }
            }
            html = "";
            html += "Cliente";
            html += '<div class="row">';
            html += '<b class="d-block col-sm-12">' + cliente + '</b>';
            html += "</div>";
            document.getElementById("cliente").innerHTML = html;

            var membros_project = "|";
            for (var a = 0; a < membros.length; a++) {
                membros_project += " " + membros[a].nome + " |";
            }
            html = "";
            html += "Membros";
            html += '<div class="row">';
            html += '<b class="d-block col-sm-12">' + membros_project + "</b>";
            html += "</div>";
            document.getElementById("membros").innerHTML = html;
        } else {
            window.location.href = "../404.php";
        }
    });
}