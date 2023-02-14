(function ($) {
    "use strict";

    /* function draw() {

    } */

    var dlabSparkLine = (function () {
        let draw = Chart.controllers.line.__super__.draw; //draw shadow

        var screenWidth = $(window).width();

        var barChart1 = function () {
            if (jQuery("#barChart_1").length > 0) {
                const barChart_1 = document
                    .getElementById("barChart_1")
                    .getContext("2d");

                barChart_1.height = 100;

                new Chart(barChart_1, {
                    type: "bar",
                    data: {
                        defaultFontFamily: "Poppins",
                        labels: arrStringName,
                        datasets: [
                            {
                                label: "Nilai Kinerja Total",
                                data: arrStringNilaiKinerjaTotal,
                                borderColor: "rgb(255, 170, 0)",
                                borderWidth: "0",
                                backgroundColor: "rgb(255, 170, 0)",
                            },
                        ],
                    },
                    options: {
                        legend: false,
                        scales: {
                            yAxes: [
                                {
                                    ticks: {
                                        beginAtZero: true,
                                    },
                                },
                            ],
                            xAxes: [
                                {
                                    // Change here
                                    barPercentage: 0.5,
                                },
                            ],
                        },
                        title: {
                            display: true,
                            text: "Chart Raport Tendik",
                        },
                    },
                });
            }
        };

        /* Function ============ */
        return {
            init: function () {},

            load: function () {
                barChart1();
            },

            resize: function () {
                // barChart1();
            },
        };
    })();

    jQuery(document).ready(function () {});

    jQuery(window).on("load", function () {
        dlabSparkLine.load();
    });

    jQuery(window).on("resize", function () {
        //dlabSparkLine.resize();
        setTimeout(function () {
            dlabSparkLine.resize();
        }, 1000);
    });
})(jQuery);
