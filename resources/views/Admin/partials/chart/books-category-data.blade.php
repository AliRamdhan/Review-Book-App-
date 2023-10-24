<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Work', 11],
                ['Eat', 2],
                ['Commute', 2],
                ['Watch TV', 2],
                ['Sleep', 7]
            ]);

            var options = {
                pieHole: 0.3,
                width: 560, // Set the desired width of the chart
                height: 370,
            };

            var chart = new google.visualization.PieChart(document.getElementById('books-of-category'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="books-of-category" ></div>
</body>

</html>
