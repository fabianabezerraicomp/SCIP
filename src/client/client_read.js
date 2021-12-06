$(function () {
    if (!sessionStorage.getItem("id")) {
        window.location.href = "../login.php";
    }
});

function listingClients() {
    $.get(URL_API_CLIENT, function (data, status) {
        if(data.length > 0 && status == "success") {
            data.sort(function(a,b) {
                if(a.id < b.id) return -1;
                if(a.id > b.id) return 1;
                return 0;
            });
            
            var html = "";
            for (var a = 0; a < data.length; a++) {
                html += "<tr>";
                html += "<td>" + data[a].nome + "</td>";
                html += "<td>" + data[a].servico + "</td>";
                html += "<td>" + data[a].celular + "</td>";
                html += "<td>";
                html +=
                    '<button id="' +
                    data[a].id +
                    '" onclick="getId(this.id)" style="margin-left: 2%;margin-right: 2%;" type="button" href="client_update.php" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Editar">';
                html += '<i class="fas fa-pen"></i>';
                html += "</button>";
                html += "</td>";
                html += "</tr>";

                document.getElementById("table_tr_client").innerHTML = html;
            }
        } else {
            window.location.href = "../404.php";
        }
    });
}
window.setTimeout(listingClients, 200);

function getId(id) {
    sessionStorage.setItem("client_id", id);
    window.location.href = "client_update.php";
}

function updatePage() {
    window.location.href = "client_read.php";
}

$("#txt_search_client").bind("keyup click change", function () {
    search = $(this).val().toLowerCase();
    var re = new RegExp(search, "g");

    $("#table_client tbody tr").each(function () {
        $(this).hide();
        target = $(this).find("td").text().toLowerCase();
        if (target.match(re) || target.match("^" + search)) {
            $(this).show();
        }
    });
});
