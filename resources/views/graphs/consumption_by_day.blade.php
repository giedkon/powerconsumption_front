<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Date', 'Usage'],
            @foreach ($computer_usage as $date => $usage)
                {!! "['{$date}', {$usage}]," !!}
            @endforeach
        ]);

        var options = {
            title: 'Energy Consumption By Day',
            hAxis: {
                direction: -1,
                slantedText: true,
                slantedTextAngle: 90
            },
            vAxis: {
                title: 'Usage'
            },
            legend: 'none',
        };

        var chart = new google.visualization.LineChart(document.getElementById('day-chart'));

        chart.draw(data, options);
    }
</script>
<div class="col-md-8">
    <div class="card ">
        <div class="card-header ">
            <h4 class="card-title">Energy Consumption By Day</h4>
        </div>
        <div class="card-body ">
            <div id="day-chart" style="height:500px">

            </div>
        </div>
    </div>
</div>
