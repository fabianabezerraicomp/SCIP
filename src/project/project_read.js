$(function () {
    if (!sessionStorage.getItem("id")) {
        window.location.href = "../login.php";
    }
});

var data_client;
function listingClients() {
    $.get(URL_API_CLIENT, function (data, status) {
        if(data.length > 0 && status == "success") {
            data.sort(function(a,b) {
                if(a.id < b.id) return -1;
                if(a.id > b.id) return 1;
                return 0;
            });

            data_client = data;

            window.setTimeout(listingProjects, 200);
        } else {
            window.location.href = "../404.php";
        }
    });
}
window.setTimeout(listingClients, 200);

function listingProjects() {
    $.get(URL_API_PROJECT, function (data, status) {
        if (data.length > 0 && status == "success") {
            data.sort(function(a,b) {
                if(a.id < b.id) return -1;
                if(a.id > b.id) return 1;
                return 0;
            });
            
            var html = "";
            for (var a = 0; a < data.length; a++) {
                html += '<tr class="">';
                html += "<td>" + data[a].nome + "</td>";
                for (var b = 0; b < data_client.length; b++) {
                    if(data_client[b].id == data[a].cliente_id){
                        html += "<td>" + data_client[b].nome + "</td>";
                        break;
                    }
                }
                html += "<td>";
                if (data[a].prioridade == "low") {
                    html +=
                        '<b class="d-block col-sm-7 badge badge-success">' +
                        data[a].prioridade +
                        "</b>";
                } else if (data[a].prioridade == "medium") {
                    html +=
                        '<b class="d-block col-sm-7 badge badge-warning text-light">' +
                        data[a].prioridade +
                        "</b>";
                } else {
                    html +=
                        '<b class="d-block col-sm-7 badge badge-danger">' +
                        data[a].prioridade +
                        "</b>";
                }
                html += "</td>";
                html += "<td>" + data[a].data_fim + "</td>";
                html += "<td>"; 
                html += "<a id=" + data[a].id + " style=\"margin-left: 2%;margin-right: 2%;\" type=\"button\" onclick=\"getId(this.id)\" class=\"btn btn-primary\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Visualizar\">";
                html += '<i class="fas fa-share"></i>';
                html += "</button>";
                html += "</td>";
                html += "</tr>";

                document.getElementById("table_tr_project").innerHTML = html;
            }
        } else {
            window.location.href = "../404.php";
        }
    });
}

function getId(id) {
    sessionStorage.setItem("project_id", id);
    window.location.href = "project_visualize.php";
}

function updatePage() {
    window.location.href = "project_read.php";
}

$("#txt_search_project").bind("keyup click change", function () {
    search = $(this).val().toLowerCase();
    var re = new RegExp(search, "g");

    $("#table_project tbody tr").each(function () {
        $(this).hide();
        target = $(this).find("td").text().toLowerCase();
        if (target.match(re) || target.match("^" + search)) {
            $(this).show();
        }
    });
});
