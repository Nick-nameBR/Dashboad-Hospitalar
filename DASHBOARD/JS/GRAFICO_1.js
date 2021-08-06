Highcharts.chart('container', {
    chart: {
        Type: 'xy'
    },
    title: {
        text: 'Taxa de Sobrevida - Idade Gestacional (1994-2004)'
    },
  
    xAxis: [{
        categories: ['<28','28-31','32-36','37-41'],
        crosshair: true
    }],

    yAxis: [{ // Primary yAxis
        labels: {
            format:'',
            
            style: {
                color: Highcharts.getOptions().colors[5]
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
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
         
            style: {
                color: Highcharts.getOptions().colors[5]
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
        data: [55, 35, 75, 10],
        color: '#FFA07A',
        tooltip: {
            shared: true
        }},
         {
        name: 'Nascidos',
        type: 'spline',
        yAxis: 1,
        data: [22, 40, 82, 20],
        color: '#FFE4B5',
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