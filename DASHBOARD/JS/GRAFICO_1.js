Highcharts.chart('container', {
    chart: {
        Type: 'xy'
    },
    title: {
        text: 'Taxa de sobrevida por idade gestacional (1994-2004)'
    },
  
    xAxis: [{
        categories: ['<28','28-31','32-36','37-41'],
        crosshair: true
    }],

    yAxis: [{ // Primary yAxis
        labels: {
            format:'',
            
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Nascidos',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
       
        
    }
    ,
     { // Secondary yAxis
        title: {
            text: 'Obitos',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
         
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: false
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 120,
        verticalAlign: 'top',
        y: 120,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    
    series: [
    {
        name: 'Obitos',
        type: 'column',
        data: [30, 35, 75, 10],
        tooltip: {
            shared: true
        }},
         {
        name: 'Nascidos',
        type: 'spline',
        yAxis: 1,
        data: [22, 40, 82, 20],
        tooltip: {
            shared: true
        }
    
    }],
    plotOptions: {
        spline: {
            dataLabels: {
                enabled: true
            }
        },
        column: {
            dataLabels: {
                enabled: true
            }
        }
    }
});