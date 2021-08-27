Highcharts.chart('container2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Taxa de Mortalidade Neonatal'
    },
    subtitle: {
        text: 'Source: <a href="https://odsbrasil.gov.br/objetivo3/indicador322">odsbrasil.gov</a>'
    },
    xAxis: {
        categories: ['Norte', 'Nordeste', 'Sul', 'Sudeste', 'Centro-Oeste'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Taxa',
            align: 'low'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' mortes'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'flex-end',
        x: -10,
        y: 120,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Ano 2000',
        data: [21.2, 21.3, 10.8, 13.7, 15],
        color: '#FFA07A',
    }, {
        name: 'Ano 2015',
        data: [11.3, 11.1, 7.5, 8.2, 7.5],
         color: '#FFEBCD',
    }]
});