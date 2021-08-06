Highcharts.chart('container4', {
    chart: {
        type: 'variablepie'
    },
    title: {
        text: 'Índice de Apgar'},
           subtitle: {
        text: '2021'
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
            ' 0 a 6 - Asfixia Grave ou Moderada: <b>{point.y}</b><br/>' +
            ' 7 a 10 - Boa vitalidade : <b>{point.z}</b><br/>'
    },
    series: [{
        minPointSize: 10,
        innerSize: '20%',
        zMin: 0,
        name: 'countries',
        data: [{
            name: '1º minuto',
            y: 10,
            z: 15,
            color: '#FFEBCD',
        }, {
            name: '5º minuto',
            y: 20,
            z: 30,
            color: '#FFA07A',
        }, ]
    }]
});
