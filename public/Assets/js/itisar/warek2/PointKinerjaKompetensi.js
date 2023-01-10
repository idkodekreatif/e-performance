function sum() {
    // Variable Point 14
    var kinerja_kompetensi_14_1;
    var kinerja_kompetensi_14_2;
    var kinerja_kompetensi_14_3;
    var kinerja_kompetensi_14_4;
    var kinerja_kompetensi_14_5;

    // Variable Point 15
    var kinerja_kompetensi_15_1;
    var kinerja_kompetensi_15_2;
    var kinerja_kompetensi_15_3;
    var kinerja_kompetensi_15_4;
    var kinerja_kompetensi_15_5;

    // Checkinput point baris 14
    if ($("input[id='kinerja_kompetensi_14_1']:checked").val() != null) {
        kinerja_kompetensi_14_1 = document.querySelector(
            'input[id="kinerja_kompetensi_14_1"]:checked'
        ).value;
    } else {
        kinerja_kompetensi_14_1 = 0;
    }
    if ($("input[id='kinerja_kompetensi_14_2']:checked").val() != null) {
        kinerja_kompetensi_14_2 = document.querySelector(
            'input[id="kinerja_kompetensi_14_2"]:checked'
        ).value;
    } else {
        kinerja_kompetensi_14_2 = 0;
    }
    if ($("input[id='kinerja_kompetensi_14_3']:checked").val() != null) {
        kinerja_kompetensi_14_3 = document.querySelector(
            'input[id="kinerja_kompetensi_14_3"]:checked'
        ).value;
    } else {
        kinerja_kompetensi_14_3 = 0;
    }
    if ($("input[id='kinerja_kompetensi_14_4']:checked").val() != null) {
        kinerja_kompetensi_14_4 = document.querySelector(
            'input[id="kinerja_kompetensi_14_4"]:checked'
        ).value;
    } else {
        kinerja_kompetensi_14_4 = 0;
    }
    if ($("input[id='kinerja_kompetensi_14_5']:checked").val() != null) {
        kinerja_kompetensi_14_5 = document.querySelector(
            'input[id="kinerja_kompetensi_14_5"]:checked'
        ).value;
    } else {
        kinerja_kompetensi_14_5 = 0;
    }

    // Checkinput point baris 15
    if ($("input[id='kinerja_kompetensi_15_1']:checked").val() != null) {
        kinerja_kompetensi_15_1 = document.querySelector(
            'input[id="kinerja_kompetensi_15_1"]:checked'
        ).value;
    } else {
        kinerja_kompetensi_15_1 = 0;
    }
    if ($("input[id='kinerja_kompetensi_15_2']:checked").val() != null) {
        kinerja_kompetensi_15_2 = document.querySelector(
            'input[id="kinerja_kompetensi_15_2"]:checked'
        ).value;
    } else {
        kinerja_kompetensi_15_2 = 0;
    }
    if ($("input[id='kinerja_kompetensi_15_3']:checked").val() != null) {
        kinerja_kompetensi_15_3 = document.querySelector(
            'input[id="kinerja_kompetensi_15_3"]:checked'
        ).value;
    } else {
        kinerja_kompetensi_15_3 = 0;
    }
    if ($("input[id='kinerja_kompetensi_15_4']:checked").val() != null) {
        kinerja_kompetensi_15_4 = document.querySelector(
            'input[id="kinerja_kompetensi_15_4"]:checked'
        ).value;
    } else {
        kinerja_kompetensi_15_4 = 0;
    }
    if ($("input[id='kinerja_kompetensi_15_5']:checked").val() != null) {
        kinerja_kompetensi_15_5 = document.querySelector(
            'input[id="kinerja_kompetensi_15_5"]:checked'
        ).value;
    } else {
        kinerja_kompetensi_15_5 = 0;
    }

    var Skorkinerja_kompetensi_14_1 = parseInt(kinerja_kompetensi_14_1);
    var Skorkinerja_kompetensi_14_2 = parseInt(kinerja_kompetensi_14_2);
    var Skorkinerja_kompetensi_14_3 = parseInt(kinerja_kompetensi_14_3);
    var Skorkinerja_kompetensi_14_4 = parseInt(kinerja_kompetensi_14_4);
    var Skorkinerja_kompetensi_14_5 = parseInt(kinerja_kompetensi_14_5);

    var Skorkinerja_kompetensi_15_1 = parseInt(kinerja_kompetensi_15_1);
    var Skorkinerja_kompetensi_15_2 = parseInt(kinerja_kompetensi_15_2);
    var Skorkinerja_kompetensi_15_3 = parseInt(kinerja_kompetensi_15_3);
    var Skorkinerja_kompetensi_15_4 = parseInt(kinerja_kompetensi_15_4);
    var Skorkinerja_kompetensi_15_5 = parseInt(kinerja_kompetensi_15_5);

    // SUM Kolom Point 1
    var ResultSumSkorkinerja_kompetensi_1 =
        Skorkinerja_kompetensi_14_1 + Skorkinerja_kompetensi_15_1;

    // SUM Kolom Point 2
    var ResultSumSkorkinerja_kompetensi_2 =
        Skorkinerja_kompetensi_14_2 + Skorkinerja_kompetensi_15_2;

    // SUM Kolom Point 3
    var ResultSumSkorkinerja_kompetensi_3 =
        Skorkinerja_kompetensi_14_3 + Skorkinerja_kompetensi_15_3;

    // SUM Kolom Point 4
    var ResultSumSkorkinerja_kompetensi_4 =
        Skorkinerja_kompetensi_14_4 + Skorkinerja_kompetensi_15_4;

    // SUM Kolom Point 5
    var ResultSumSkorkinerja_kompetensi_5 =
        Skorkinerja_kompetensi_14_5 + Skorkinerja_kompetensi_15_5;

    if (!isNaN(ResultSumSkorkinerja_kompetensi_1)) {
        // Tampilkan output pada input form
        document.getElementById("output_point_kinerja_kompetensi_1").value =
            ResultSumSkorkinerja_kompetensi_1;
    }
    if (!isNaN(ResultSumSkorkinerja_kompetensi_2)) {
        // Tampilkan output pada input form
        document.getElementById("output_point_kinerja_kompetensi_2").value =
            ResultSumSkorkinerja_kompetensi_2;
    }
    if (!isNaN(ResultSumSkorkinerja_kompetensi_3)) {
        // Tampilkan output pada input form
        document.getElementById("output_point_kinerja_kompetensi_3").value =
            ResultSumSkorkinerja_kompetensi_3;
    }
    if (!isNaN(ResultSumSkorkinerja_kompetensi_4)) {
        // Tampilkan output pada input form
        document.getElementById("output_point_kinerja_kompetensi_4").value =
            ResultSumSkorkinerja_kompetensi_4;
    }
    if (!isNaN(ResultSumSkorkinerja_kompetensi_5)) {
        // Tampilkan output pada input form
        document.getElementById("output_point_kinerja_kompetensi_5").value =
            ResultSumSkorkinerja_kompetensi_5;
    }
}
