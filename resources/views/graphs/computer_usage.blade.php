<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Computer', 'Total Usage'],
            @foreach ($computer_usage as $key => $computer)
                {!! "['{$computer['name']}', {$computer['total_usage']}]," !!}
            @endforeach
        ]);

        var options = {
            title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('computer-chart'));

        chart.draw(data, options);
    }
</script>


<div class="col-md-4">
    <div class="card ">
        <div class="card-header ">
            <h4 class="card-title">Energy Consumption By Computer</h4>
        </div>
        <div class="card-body ">
            <div id="computer-chart" style="height:480px"></div>
        </div>
    </div>
</div>
