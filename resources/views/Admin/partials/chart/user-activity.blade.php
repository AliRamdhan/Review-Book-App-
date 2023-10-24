<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          ['2013',  1000 ],
          ['2014',  1170 ],
          ['2015',  660  ],
          ['2016',  1030 ]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('user-activity'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="user-activity" style="width: 100%; height: 340px;"></div>
  </body>
</html>
