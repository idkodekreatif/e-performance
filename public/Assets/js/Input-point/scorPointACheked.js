// $(document).ready(function () {
//     $("#mis").keyup(function () {
//         var totalScore =
//             parseInt($("#point1").val()) + parseInt($("#point2").val());
//         var gpa = totalScore / 5;
//         $("#resultScore").val(totalScore);
//         $("#gpa").val(gpa);
//     });
// });

function sum() {
    // Definisi variable point
    var A1;
    var A2;
    var A3;
    var A4;
    var A5;
    var A6;
    var A7;
    var A8;
    var A9;
    var A10;
    var A11;

    // Cek Input Radio
    if ($("input[name='A1']:checked").val() != null) {
        A1 = document.querySelector('input[name="A1"]:checked').value;
    } else {
        A1 = 0;
    }
    if ($("input[name='A2']:checked").val() != null) {
        A2 = document.querySelector('input[name="A2"]:checked').value;
    } else {
        A2 = 0;
    }
    if ($("input[name='A3']:checked").val() != null) {
        A3 = document.querySelector('input[name="A3"]:checked').value;
    } else {
        A3 = 0;
    }
    if ($("input[name='A4']:checked").val() != null) {
        A4 = document.querySelector('input[name="A4"]:checked').value;
    } else {
        A4 = 0;
    }
    if ($("input[name='A5']:checked").val() != null) {
        A5 = document.querySelector('input[name="A5"]:checked').value;
    } else {
        A5 = 0;
    }
    if ($("input[name='A6']:checked").val() != null) {
        A6 = document.querySelector('input[name="A6"]:checked').value;
    } else {
        A6 = 0;
    }
    if ($("input[name='A7']:checked").val() != null) {
        A7 = document.querySelector('input[name="A7"]:checked').value;
    } else {
        A7 = 0;
    }
    if ($("input[name='A8']:checked").val() != null) {
        A8 = document.querySelector('input[name="A8"]:checked').value;
    } else {
        A8 = 0;
    }
    if ($("input[name='A9']:checked").val() != null) {
        A9 = document.querySelector('input[name="A9"]:checked').value;
    } else {
        A9 = 0;
    }
    if ($("input[name='A10']:checked").val() != null) {
        A10 = document.querySelector('input[name="A10"]:checked').value;
    } else {
        A10 = 0;
    }
    if ($("input[name='A11']:checked").val() != null) {
        A11 = document.querySelector('input[name="A11"]:checked').value;
    } else {
        A11 = 0;
    }

    //Kalkulasi Nilai (SKOR)
    var SkorA1 = parseInt(A1);
    var SkorA2 = parseInt(A2);
    var SkorA3 = parseInt(A3);
    var SkorA4 = parseInt(A4);
    var SkorA5 = parseInt(A5);
    var SkorA6 = parseInt(A6);
    var SkorA7 = parseInt(A7);
    var SkorA8 = parseInt(A8);
    var SkorA9 = parseInt(A9);
    var SkorA10 = parseInt(A10);
    var SkorA11 = parseInt(A11);

    //Kalkulasi Nilai (SKOR/SKOR MAKS)
    var skorMaksA1 = SkorA1 / 5;
    var skorMaksA2 = SkorA2 / 5;
    var skorMaksA3 = SkorA3 / 5;
    var skorMaksA4 = SkorA4 / 5;
    var skorMaksA5 = SkorA5 / 5;
    var skorMaksA6 = SkorA6 / 5;
    var skorMaksA7 = SkorA7 / 5;
    var skorMaksA8 = SkorA8 / 5;
    var skorMaksA9 = SkorA9 / 5 - 1;
    var skorMaksA10 = SkorA10 / 5;
    var skorMaksA11 = SkorA11 / 5;

    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    var scorSubItemA1 = ((skorMaksA1 * 10) / 100).toFixed(3);

    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    if ($("input[name='A2']:checked").val() == 1) {
        var num = 0;
        var scorSubItemA2 = num.toFixed(3);
    } else {
        var scorSubItemA2 = ((skorMaksA2 * 8) / 100).toFixed(3);
    }

    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    var scorSubItemA3 = ((skorMaksA3 * 10) / 100).toFixed(3);

    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    if ($("input[name='A4']:checked").val() == 1) {
        var num = 0;
        var scorSubItemA4 = num.toFixed(3);
    } else {
        var scorSubItemA4 = ((skorMaksA4 * 7.5) / 100).toFixed(3);
    }
    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    if ($("input[name='A5']:checked").val() == 1) {
        var num = 0;
        var scorSubItemA5 = num.toFixed(3);
    } else {
        var scorSubItemA5 = ((skorMaksA5 * 7.5) / 100).toFixed(3);
    }
    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    if ($("input[name='A6']:checked").val() == 1) {
        var num = 0;
        var scorSubItemA6 = num.toFixed(3);
    } else {
        var scorSubItemA6 = ((skorMaksA6 * 10) / 100).toFixed(3);
    }
    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    if ($("input[name='A7']:checked").val() == 1) {
        var num = 0;
        var scorSubItemA7 = num.toFixed(3);
    } else {
        var scorSubItemA7 = ((skorMaksA7 * 10) / 100).toFixed(3);
    }
    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    if ($("input[name='A8']:checked").val() == 1) {
        var num = 0;
        var scorSubItemA8 = num.toFixed(3);
    } else {
        var scorSubItemA8 = ((skorMaksA8 * 10) / 100).toFixed(3);
    }
    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    if ($("input[name='A9']:checked").val() == 1) {
        var num = 0;
        var scorSubItemA9 = num.toFixed(3);
    } else {
        var scorSubItemA9 = ((skorMaksA9 * 10) / 100).toFixed(3);
    }
    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    if ($("input[name='A10']:checked").val() == 1) {
        var num = 0;
        var scorSubItemA10 = num.toFixed(3);
    } else {
        var scorSubItemA10 = ((skorMaksA10 * 7) / 100).toFixed(3);
    }
    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    if ($("input[name='A11']:checked").val() == 1) {
        var num = 0;
        var scorSubItemA11 = num.toFixed(3);
    } else {
        var scorSubItemA11 = ((skorMaksA11 * 7) / 100).toFixed(3);
    }

    // Menampilkan nilai skor di form disabled

    if (!isNaN(SkorA1)) {
        // format Point merubah ( , ) menjadi ( . )
        // var resultScorSubItemA1 = scorSubItemA1.toFixed(3).replace(".", ".");

        // Cek agar tidak keluar Nilai diluar Parameter
        // Tampilkan output pada input form skor
        document.getElementById("scorA1").value = SkorA1;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(SkorA2)) {
        // Tampilkan output pada input form skor
        document.getElementById("scorA2").value = SkorA2;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(SkorA3)) {
        // Tampilkan output pada input form skor
        document.getElementById("scorA3").value = SkorA3;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(SkorA4)) {
        // Tampilkan output pada input form skor
        document.getElementById("scorA4").value = SkorA4;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(SkorA5)) {
        // Tampilkan output pada input form skor
        document.getElementById("scorA5").value = SkorA5;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(SkorA6)) {
        // Tampilkan output pada input form skor
        document.getElementById("scorA6").value = SkorA6;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(SkorA7)) {
        // Tampilkan output pada input form skor
        document.getElementById("scorA7").value = SkorA7;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(SkorA8)) {
        // Tampilkan output pada input form skor
        document.getElementById("scorA8").value = SkorA8;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(SkorA9)) {
        // Tampilkan output pada input form skor
        document.getElementById("scorA9").value = SkorA9;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(SkorA10)) {
        // Tampilkan output pada input form skor
        document.getElementById("scorA10").value = SkorA10;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(SkorA11)) {
        // Tampilkan output pada input form skor
        document.getElementById("scorA11").value = SkorA11;
    }

    // Menampilkan nilai skor / Skor Maks di form disabled

    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksA1)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxA1").value = skorMaksA1;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksA2)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxA2").value = skorMaksA2;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksA3)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxA3").value = skorMaksA3;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksA4)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxA4").value = skorMaksA4;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksA5)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxA5").value = skorMaksA5;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksA6)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxA6").value = skorMaksA6;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksA7)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxA7").value = skorMaksA7;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksA8)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxA8").value = skorMaksA8;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksA9)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxA9").value = skorMaksA9;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksA10)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxA10").value = skorMaksA10;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksA11)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxA11").value = skorMaksA11;
    }

    // Menampilkan nilai skor * Bpbpt Sub Item di form disabled

    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemA1)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemA1").value = scorSubItemA1;
    }

    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemA2)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemA2").value = scorSubItemA2;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemA3)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemA3").value = scorSubItemA3;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemA4)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemA4").value = scorSubItemA4;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemA5)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemA5").value = scorSubItemA5;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemA6)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemA6").value = scorSubItemA6;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemA7)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemA7").value = scorSubItemA7;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemA8)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemA8").value = scorSubItemA8;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemA9)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemA9").value = scorSubItemA9;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemA10)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemA10").value = scorSubItemA10;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemA11)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemA11").value = scorSubItemA11;
    }
}
