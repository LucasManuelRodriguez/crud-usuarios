
$(document).ready(function(){
    var options = {
        series:cantidades,
        plotOptions: {
          pie: {
              expandOnClick: false
          }
          },
        chart: {
        width: 750,
        type: 'pie',
      },
      labels: nombres,
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            width: 200,
          },
          legend: {
            position: 'bottom'
          },
    
        }
      }],
      fill:{
          colors:['#008ffb','#00e396']
      }
      };
    
      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
});

