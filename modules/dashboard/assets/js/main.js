$.ajax({
    type: "POST",
    dataType: 'json',
    url: APP_URL + '/dashboard/default/totales',
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    success: function (response) {
        if (response) {
            /*derivado: "0"
             pendiente: "30"
             recepcionado: "2"*/
            $("#pendientes").text(response.pendiente);
            $("#recepcionados").text(response.recepcionado);
            $("#derivados").text(response.derivado);
        }
    }
});

$.ajax({
    type: "POST",
    dataType: 'json',
    url: APP_URL + '/dashboard/default/area',
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    success: function (response) {
        if (response) {
            am4core.ready(function () {

// Themes begin
                am4core.useTheme(am4themes_animated);
// Themes end

                var chart = am4core.create('chartdiv', am4charts.XYChart)
                chart.colors.step = 2;

                chart.legend = new am4charts.Legend()
                chart.legend.position = 'top'
                chart.legend.paddingBottom = 20
                chart.legend.labels.template.maxWidth = 95

                var xAxis = chart.xAxes.push(new am4charts.CategoryAxis())
                xAxis.dataFields.category = 'category'
                xAxis.renderer.cellStartLocation = 0.1
                xAxis.renderer.cellEndLocation = 0.9
                xAxis.renderer.grid.template.location = 0;

                var yAxis = chart.yAxes.push(new am4charts.ValueAxis());
                yAxis.min = 0;

                function createSeries(value, name) {
                    var series = chart.series.push(new am4charts.ColumnSeries())
                    series.dataFields.valueY = value
                    series.dataFields.categoryX = 'category'
                    series.name = name

                    series.events.on("hidden", arrangeColumns);
                    series.events.on("shown", arrangeColumns);

                    var bullet = series.bullets.push(new am4charts.LabelBullet())
                    bullet.interactionsEnabled = false
                    bullet.dy = 30;
                    bullet.label.text = '{valueY}'
                    bullet.label.fill = am4core.color('#ffffff')

                    return series;
                }

                let datos = [];

                for (var i = 0; i < response.length; i++) {
                    datos.push({
                        category: response[i].nombre,
                        first: response[i].pendiente,
                        second: response[i].recepcionado,
                        third: response[i].derivado
                    });
                }

                chart.data = datos;

                createSeries('first', 'Pendiente');
                createSeries('second', 'Recepcionado');
                createSeries('third', 'Derivado');

                function arrangeColumns() {

                    var series = chart.series.getIndex(0);

                    var w = 1 - xAxis.renderer.cellStartLocation - (1 - xAxis.renderer.cellEndLocation);
                    if (series.dataItems.length > 1) {
                        var x0 = xAxis.getX(series.dataItems.getIndex(0), "categoryX");
                        var x1 = xAxis.getX(series.dataItems.getIndex(1), "categoryX");
                        var delta = ((x1 - x0) / chart.series.length) * w;
                        if (am4core.isNumber(delta)) {
                            var middle = chart.series.length / 2;

                            var newIndex = 0;
                            chart.series.each(function (series) {
                                if (!series.isHidden && !series.isHiding) {
                                    series.dummyData = newIndex;
                                    newIndex++;
                                } else {
                                    series.dummyData = chart.series.indexOf(series);
                                }
                            })
                            var visibleCount = newIndex;
                            var newMiddle = visibleCount / 2;

                            chart.series.each(function (series) {
                                var trueIndex = chart.series.indexOf(series);
                                var newIndex = series.dummyData;

                                var dx = (newIndex - trueIndex + middle - newMiddle) * delta

                                series.animate({property: "dx", to: dx}, series.interpolationDuration, series.interpolationEasing);
                                series.bulletsContainer.animate({property: "dx", to: dx}, series.interpolationDuration, series.interpolationEasing);
                            })
                        }
                    }
                }

            }); // end am4core.ready()
        }
    }
});

