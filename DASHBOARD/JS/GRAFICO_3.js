Highcharts.chart('container3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
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
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Chrome',
            y: 12.50,
            sliced: true,
            selected: true
        }, {
            name: 'Internet Explorer',
            y: 25.00
        }, {
            name: 'Firefox',
            y: 25.00
        }, {
            name: 'Edge',
            y: 25.00
        }, {
            name: 'Safari',
            y: 25.00
        }, {
            name: 'Other',
            y: 12.50
        }]
    }]
});