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
                                label: "Rerata Presentase Capaian Total (%)",
                                data: arrStringresult_capaian_total,
                                borderColor: "#f8842d",
                                borderWidth: "0",
                                backgroundColor: "#f8842d",
                            },
                            {
                                label: "Rerata Presentase Pendidikan dan Pengajaran (%)",
                                data: arrStringPendidikanDanPengajaran,
                                borderColor: "#4072c7",
                                borderWidth: "0",
                                backgroundColor: "#4072c7",
                            },
                            {
                                label: "Rerata Presentase Penelitian dan Karya Ilmiah (%)",
                                data: arrStringPenelitianDanKaryaIlmiah,
                                borderColor: "#a5a5a5",
                                borderWidth: "0",
                                backgroundColor: "#a5a5a5",
                            },
                            {
                                label: "Rerata Presentase Pengabdian Masyarakat (%)",
                                data: arrStringPengabdianMasyarakat,
                                borderColor: "#6ca244",
                                borderWidth: "0",
                                backgroundColor: "#6ca244",
                            },
                            {
                                label: "Rerata Presentase Penunjang, Pengabdian Institusi, dan Pengembangan Diri (%)",
                                data: arrStringPengabdianInstitusiDanPengembanganDiri,
                                borderColor: "#ffb900",
                                borderWidth: "0",
                                backgroundColor: "#ffb900",
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
                            text: "Chart Raport Dosen",
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
