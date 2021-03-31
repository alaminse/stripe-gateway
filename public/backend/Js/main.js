$(document).ready(function() {
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  
  barChart();
  lineChart();
  areaChart();
  donutChart();
  

  $(window).resize(function() {
    window.barChart.redraw();
    window.lineChart.redraw();
    window.areaChart.redraw();
    window.donutChart.redraw();
    
  });

  function barChart() {
    window.barChart = Morris.Bar({
      element: 'bar-chart',
      data: [
        { y: '2014', a: 100, b: 90 },
        { y: '2015', a: 75,  b: 65 },
        { y: '2016', a: 50,  b: 40 },
        { y: '2017', a: 75,  b: 65 },
        { y: '2018', a: 50,  b: 40 },
        { y: '2019', a: 75,  b: 65 },
        { y: '2020', a: 100, b: 90 }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B'],
      lineColors: ['#1e88e5','#ff3321'],
      lineWidth: '3px',
      resize: true,
      redraw: true
    });
  }
  
  function lineChart() {
    window.lineChart = Morris.Line({
      element: 'line-chart',
      data: [
        { y: '2014', a: 100, b: 90 },
        { y: '2015', a: 75,  b: 65 },
        { y: '2016', a: 50,  b: 40 },
        { y: '2017', a: 75,  b: 65 },
        { y: '2018', a: 50,  b: 40 },
        { y: '2019', a: 75,  b: 65 },
        { y: '2020', a: 100, b: 90 }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B'],
      lineColors: ['#1e88e5','#ff3321'],
      lineWidth: '3px',
      resize: true,
      redraw: true
    });
  }
  
  function areaChart() {
    window.areaChart = Morris.Area({
      element: 'area-chart',
      data: [
        { y: '2014', a: 100, b: 90 },
        { y: '2015', a: 75,  b: 65 },
        { y: '2016', a: 50,  b: 40 },
        { y: '2017', a: 75,  b: 65 },
        { y: '2018', a: 50,  b: 40 },
        { y: '2019', a: 75,  b: 65 },
        { y: '2020', a: 100, b: 90 }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B'],
      lineColors: ['#1e88e5','#ff3321'],
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

