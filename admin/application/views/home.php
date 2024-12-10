<body>
  <div class="row px-4">
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <div class="col-md-6" id="container">
      <script>
    (function (H) {
    H.seriesTypes.pie.prototype.animate = function (init) {
        const series = this,
            chart = series.chart,
            points = series.points,
            {
                animation
            } = series.options,
            {
                startAngleRad
            } = series;

        function fanAnimate(point, startAngleRad) {
            const graphic = point.graphic,
                args = point.shapeArgs;

            if (graphic && args) {

                graphic
                    // Set inital animation values
                    .attr({
                        start: startAngleRad,
                        end: startAngleRad,
                        opacity: 1
                    })
                    // Animate to the final position
                    .animate({
                        start: args.start,
                        end: args.end
                    }, {
                        duration: animation.duration / points.length
                    }, function () {
                        // On complete, start animating the next point
                        if (points[point.index + 1]) {
                            fanAnimate(points[point.index + 1], args.end);
                        }
                        // On the last point, fade in the data labels, then
                        // apply the inner size
                        if (point.index === series.points.length - 1) {
                            series.dataLabelsGroup.animate({
                                opacity: 1
                            },
                            void 0,
                            function () {
                                points.forEach(point => {
                                    point.opacity = 1;
                                });
                                series.update({
                                    enableMouseTracking: true
                                }, false);
                                chart.update({
                                    plotOptions: {
                                        pie: {
                                            innerSize: '40%',
                                            borderRadius: 8
                                        }
                                    }
                                });
                            });
                        }
                    });
            }
        }

        if (init) {
            // Hide points on init
            points.forEach(point => {
                point.opacity = 0;
            });
        } else {
            fanAnimate(points[0], startAngleRad);
        }
    };
}(Highcharts));

Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Jumlah Konten Setiap Kategori'
    },
    subtitle: {
        text: 'Tania - Tani Jaya'
    },
    tooltip: {
        headerFormat: '',
        pointFormat:
            '<span style="color:{point.color}">\u25cf</span> ' +
            '{point.name}: <b>{point.y}</b>',
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            borderWidth: 2,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.y}',
                distance: 20
            }
        }
    },

    exporting: {
        buttons: {
          contextButton: {
            menuItems: [
              'downloadPNG',
              'downloadJPEG',
              'downloadPDF',
              'downloadSVG',
              'separator',
              'downloadCSV',
              'downloadXLS',
            ],
          },
        },
      },

    series: [{
            name: 'Jumlah',
            colorByPoint: true,
            data: [
                <?php foreach ($jumlah_konten as $item) : ?>
                {
                    name: '<?php echo $item['kategori']; ?>',
                    y: <?php echo $item['jumlah']; ?>
                },
                <?php endforeach; ?>
            ]
        }]
    });
  </script>
  </div>
  <div class="col-md-6" id="container-2">
      <script>
    (function (H) {
    H.seriesTypes.pie.prototype.animate = function (init) {
        const series = this,
            chart = series.chart,
            points = series.points,
            {
                animation
            } = series.options,
            {
                startAngleRad
            } = series;

        function fanAnimate(point, startAngleRad) {
            const graphic = point.graphic,
                args = point.shapeArgs;

            if (graphic && args) {

                graphic
                    // Set inital animation values
                    .attr({
                        start: startAngleRad,
                        end: startAngleRad,
                        opacity: 1
                    })
                    // Animate to the final position
                    .animate({
                        start: args.start,
                        end: args.end
                    }, {
                        duration: animation.duration / points.length
                    }, function () {
                        // On complete, start animating the next point
                        if (points[point.index + 1]) {
                            fanAnimate(points[point.index + 1], args.end);
                        }
                        // On the last point, fade in the data labels, then
                        // apply the inner size
                        if (point.index === series.points.length - 1) {
                            series.dataLabelsGroup.animate({
                                opacity: 1
                            },
                            void 0,
                            function () {
                                points.forEach(point => {
                                    point.opacity = 1;
                                });
                                series.update({
                                    enableMouseTracking: true
                                }, false);
                                chart.update({
                                    plotOptions: {
                                        pie: {
                                            innerSize: '40%',
                                            borderRadius: 8
                                        }
                                    }
                                });
                            });
                        }
                    });
            }
        }

        if (init) {
            // Hide points on init
            points.forEach(point => {
                point.opacity = 0;
            });
        } else {
            fanAnimate(points[0], startAngleRad);
        }
    };
}(Highcharts));

Highcharts.chart('container-2', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Jumlah Konten Setiap Kategori'
    },
    subtitle: {
        text: 'Tania - Tani Jaya'
    },
    tooltip: {
        headerFormat: '',
        pointFormat:
            '<span style="color:{point.color}">\u25cf</span> ' +
            '{point.name}: <b>{point.y}</b>',
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            borderWidth: 2,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.y}',
                distance: 20
            }
        }
    },

    exporting: {
        buttons: {
          contextButton: {
            menuItems: [
              'downloadPNG',
              'downloadJPEG',
              'downloadPDF',
              'downloadSVG',
              'separator',
              'downloadCSV',
              'downloadXLS',
            ],
          },
        },
      },

    series: [{
            name: 'Jumlah',
            colorByPoint: true,
            data: [
                <?php foreach ($jumlah_konten as $item) : ?>
                {
                    name: '<?php echo $item['kategori']; ?>',
                    y: <?php echo $item['jumlah']; ?>
                },
                <?php endforeach; ?>
            ]
        }]
    });
  </script>
  </div>
</div>
</body>
