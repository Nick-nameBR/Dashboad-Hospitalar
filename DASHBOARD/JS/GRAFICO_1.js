Highcharts.chart('container1', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Taxa de Sobrevida por Idade Gestacional (1994-2004)'
    },
    subtitle: {
        text: ''
    },
    xAxis: [{
        categories: ['<24', '28-31', '32-36', '37-41'],
        crosshair: true
    }],
    yAxis: [{ // Primeiro yAxis
        labels: {
            format: '{value}',
            style: {
                color: '#ff4d4d'
            }
        },
        title: {
            text: 'Obitos',
            style: {
                color: '#ff4d4d'
            }
        }
    },
    
    { // Segundo yAxis
        title: {
            text: 'Nascidos',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 120,
        verticalAlign: 'top',
        y: 100,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [{
        name: 'Nascidos',
        type: 'column',
        yAxis: 1,
        data: [22, 32, 82, 15]
    }, 
    {
        name: 'Obitos',
        type: 'spline',
        data: [30, 35, 75, 10],
        color: '#ff4d4d'
    }]
});