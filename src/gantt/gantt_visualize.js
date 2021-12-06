$(function () {
    if (!sessionStorage.getItem("id")) {
        window.location.href = "../login.php";
    }
});

var data_task = [];
function listingTask() {
    $.get(URL_API_TASK, function (data, status) {
        if (data.length > 0 && status == "success") {
            data.sort(function(a,b) {
                if(a.id < b.id) return -1;
                if(a.id > b.id) return 1;
                return 0;
            });
            
            data_task = data;

            window.setTimeout(ganttStart, 600);
        } else {
            window.location.href = "../404.php";
        }
    });
}
window.setTimeout(listingTask, 600);

function ganttStart() {
    google.charts.load('current', { 'packages': ['gantt'], 'language': 'pt-br' });
    google.charts.setOnLoadCallback(drawChart);
}

function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Task ID');
    data.addColumn('string', 'Task Name');
    data.addColumn('string', 'Resource');
    data.addColumn('date', 'Start Date');
    data.addColumn('date', 'End Date');
    data.addColumn('number', 'Duration');
    data.addColumn('number', 'Percent Complete');
    data.addColumn('string', 'Dependencies');

    var task = [];

    try {
        for (var a = 0; a < data_task.length; a++) {
            if (data_task[a].projeto_id == sessionStorage.getItem("project_id")) {

                var predecessor = "";
                if (data_task[a].tarefa_antecessora_id != null) {
                    predecessor = "Task_" + data_task[a].tarefa_antecessora_id.toString();
                }

                var task_temp = {
                    "Task_Id": "Task_" + data_task[a].id.toString(),
                    "Task_Name": data_task[a].titulo,
                    "Resource": "Task_" + data_task[a].id.toString(),
                    "Start_Date": data_task[a].data_inicio,
                    "End_Date": data_task[a].data_fim,
                    "Duration": null,
                    "Percent_Complete": data_task[a].progresso,
                    "Dependencies": predecessor
                };
                task.push(task_temp);
            }
        }
    } catch (e) {
        //
    }

    try {
        $.each(task, function (index, item) {
            data.addRow([item.Task_Id, item.Task_Name, item.Resource,
            new Date(item.Start_Date), new Date(item.End_Date), item.Duration,
            item.Percent_Complete, item.Dependencies
            ]);
        });
    } catch (e) {
        //
    }

    var options = {
        gantt: {
            trackHeight: 40
        }
    };

    var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

    chart.draw(data, options);
}