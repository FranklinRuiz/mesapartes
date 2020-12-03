$.ajax({
    type: "POST",
    dataType: 'json',
    url: APP_URL + '/dashboard/default/fecha',
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    success: function (response) {
        if (response) {
            am4core.ready(function () {

// Themes begin
                am4core.useTheme(am4themes_animated);
// Themes end

                var chart = am4core.create("chartmes", am4charts.XYChart);
                chart.paddingRight = 20;

                var data = [];
                var visits = 10;
                var previousValue;

                for (var i = 0; i < response.length; i++) {
                    data.push({date: new Date(response[i].fecha), value: response[i].cantidad});
                    previousValue = visits;
                }

                chart.data = data;

                var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
                dateAxis.renderer.grid.template.location = 0;
                dateAxis.renderer.axisFills.template.disabled = true;
                dateAxis.renderer.ticks.template.disabled = true;

                var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                valueAxis.tooltip.disabled = true;
                valueAxis.renderer.minWidth = 35;
                valueAxis.renderer.axisFills.template.disabled = true;
                valueAxis.renderer.ticks.template.disabled = true;

                var series = chart.series.push(new am4charts.LineSeries());
                series.dataFields.dateX = "date";
                series.dataFields.valueY = "value";
                series.strokeWidth = 2;
                series.tooltipText = "cantidad: {valueY}";

// set stroke property field
                series.propertyFields.stroke = "color";

                chart.cursor = new am4charts.XYCursor();

                var scrollbarX = new am4core.Scrollbar();
                chart.scrollbarX = scrollbarX;

                dateAxis.start = 0.7;
                dateAxis.keepSelection = true;


            }); // end am4core.ready()
        }
    }
});

