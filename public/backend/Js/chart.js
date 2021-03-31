$(document).ready(function(){
    lineChart();
    barChart();
    areaChart();
    donutChart();

  $(window).resize(function() {
    window.lineChart.redraw();
    window.barChart.redraw();
    window.areaChart.redraw();
    window.donutChart.redraw();
    
    
  });

    function lineChart() {
        window.lineChart = Morris.Line({
          element: 'line-chart',
          data: [
            { y: '2014', a: 12,  b: 94, c:39 },
            { y: '2015', a: 45,  b: 35, c:55 },
            { y: '2016', a: 60,  b: 40, c:20 },
            { y: '2017', a: 40,  b: 85, c:55 },
            { y: '2018', a: 50,  b: 60, c:20 },
            { y: '2019', a: 75,  b: 35, c:55 },
            { y: '2020', a: 100, b: 70, c:80 }
          ],
          xkey: 'y',
          ykeys: ['a', 'b', 'c'],
          labels: ['Series A', 'Series B', 'Series C'],
          lineColors: ['#1e88e5','#ff3321', '#C06282'],
          lineWidth: '3px',
          resize: true,
          redraw: true
        });
    }
    function barChart() {
        window.barChart = Morris.Bar({
          element: 'bar-chart',
          data: [
            { y: '2014', a: 100, b: 90, c:80 },
            { y: '2015', a: 75,  b: 65, c:55 },
            { y: '2016', a: 50,  b: 40, c:30 },
            { y: '2017', a: 75,  b: 65, c:55 },
            { y: '2018', a: 50,  b: 40, c:30 },
            { y: '2019', a: 75,  b: 65, c:55 },
            { y: '2020', a: 100, b: 90, c:80 }
          ],
          xkey: 'y',
          ykeys: ['a', 'b', 'c'],
          labels: ['Series A', 'Series B', 'Series C'],
          lineColors: ['#1e88e5','#ff3321', '#C06282'],
          lineWidth: '3px',
          resize: true,
          redraw: true
        });
    }
    function areaChart() {
        window.areaChart = Morris.Area({
          element: 'area-chart',
          data: [
            { y: '2014', a: 100, b: 90, c:80 },
            { y: '2015', a: 75,  b: 65, c:55 },
            { y: '2016', a: 50,  b: 40, c:30 },
            { y: '2017', a: 75,  b: 65, c:55 },
            { y: '2018', a: 50,  b: 40, c:30 },
            { y: '2019', a: 75,  b: 65, c:55 },
            { y: '2020', a: 100, b: 90, c:80 }
          ],
          xkey: 'y',
          ykeys: ['a', 'b', 'c'],
          labels: ['Series A', 'Series B', 'Series C'],
          lineColors: ['#1e88e5','#ff3321', '#C06282'],
          lineWidth: '3px',
          resize: true,
          redraw: true
        });
    }
    function donutChart() {
        window.donutChart = Morris.Donut({
        element: 'donut-chart',
        data: [
          {label: "Download Sales", value: 50},
          {label: "In-Store Sales", value: 25},
          {label: "Mail-Order Sales", value: 5},
          {label: "Uploaded Sales", value: 10},
          {label: "Video Sales", value: 10}
        ],
        resize: true,
        redraw: true
      });
    }


});


