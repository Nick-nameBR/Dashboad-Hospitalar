Highcharts.chart('container3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Tipo de Parto'
    },
    subtitle: {
        text: 'Mês de Novembro | 2021'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Valor Percentual',
        colorByPoint: true,
        data: [{
            name: 'Césareo',
            y: 61.41,
            sliced: true,
            selected: true,
            color: '#FFA07A',
        }, {
            name: 'Vaginal',
            y: 11.84,
            color: '#FFEBCD',
        }]
    }]
});