function sumForm() {
    // Definisi variable yang akan di buat inputan nilai di form nilai
    var JumlahYangDihasilkanA11_5;
    var JumlahYangDihasilkanA12_3;
    var JumlahYangDihasilkanA12_4;
    var JumlahYangDihasilkanA12_5;

    // cek nilai apakah nilainya ada jika tidak ada maka di isi ( 0 )
    if ($("input[name='JumlahYangDihasilkanA11_5']").val() != "") {
        JumlahYangDihasilkanA11_5 = document.querySelector(
            'input[name="JumlahYangDihasilkanA11_5"]'
        ).value;
    } else {
        JumlahYangDihasilkanA11_5 = 0;
    }
    // cek nilai apakah nilainya ada jika tidak ada maka di isi ( 0 )
    if ($("input[name='JumlahYangDihasilkanA12_3']").val() != "") {
        JumlahYangDihasilkanA12_3 = document.querySelector(
            'input[name="JumlahYangDihasilkanA12_3"]'
        ).value;
    } else {
        JumlahYangDihasilkanA12_3 = 0;
    }
    // cek nilai apakah nilainya ada jika tidak ada maka di isi ( 0 )
    if ($("input[name='JumlahYangDihasilkanA12_4']").val() != "") {
        JumlahYangDihasilkanA12_4 = document.querySelector(
            'input[name="JumlahYangDihasilkanA12_4"]'
        ).value;
    } else {
        JumlahYangDihasilkanA12_4 = 0;
    }
    // cek nilai apakah nilainya ada jika tidak ada maka di isi ( 0 )
    if ($("input[name='JumlahYangDihasilkanA12_5']").val() != "") {
        JumlahYangDihasilkanA12_5 = document.querySelector(
            'input[name="JumlahYangDihasilkanA12_5"]'
        ).value;
    } else {
        JumlahYangDihasilkanA12_5 = 0;
    }

    // Merubah nilai menjadi Int dan di jadikan variable
    var resultJumlahYangDihasilkanA11_5 = parseInt(JumlahYangDihasilkanA11_5);
    var resultJumlahYangDihasilkanA12_3 = parseInt(JumlahYangDihasilkanA12_3);
    var resultJumlahYangDihasilkanA12_4 = parseInt(JumlahYangDihasilkanA12_4);
    var resultJumlahYangDihasilkanA12_5 = parseInt(JumlahYangDihasilkanA12_5);
    // jumlah input nilai akan di kalikan 3
    var resultDibagi3A11_5 = resultJumlahYangDihasilkanA11_5 * 3;
    var resultDibagi05A12_3 = resultJumlahYangDihasilkanA12_3 * 0.5;
    var resultDibagi1A12_4 = resultJumlahYangDihasilkanA12_4 * 1;
    var resultDibagi3A12_5 = resultJumlahYangDihasilkanA12_5 * 3;

    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(resultDibagi3A11_5)) {
        // Tampilkan output pada input form
        document.getElementById("SkorTambahanA11_5").value = resultDibagi3A11_5;
        document.getElementById("SkorTambahanJumlahA11_5").value =
            resultDibagi3A11_5;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(resultDibagi05A12_3)) {
        // Tampilkan output pada input form
        document.getElementById("SkorTambahanA12_3").value =
            resultDibagi05A12_3;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(resultDibagi1A12_4)) {
        // Tampilkan output pada input form
        document.getElementById("SkorTambahanA12_4").value = resultDibagi1A12_4;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(resultDibagi3A12_5)) {
        // Tampilkan output pada input form
        document.getElementById("SkorTambahanA12_5").value = resultDibagi3A12_5;
    }
    // SUM
    if (resultDibagi05A12_3 || resultDibagi1A12_4 || resultDibagi3A12_5) {
        var sumResultA12 =
            resultDibagi05A12_3 + resultDibagi1A12_4 + resultDibagi3A12_5;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(sumResultA12)) {
        // Tampilkan output pada input form nilai
        document.getElementById("SkorTambahanJumlahA12").value = sumResultA12;
    }

    // Cek agar tidak keluar Nilai diluar Parameter

    // cwk nilai apakah nilai lebih dari 3, jika iya akan di bagi 3 jika tidak akan di bagi 0
    if (resultDibagi3A11_5 >= 3) {
        var numA11 = 3;
        var nilaiDibagi100A11_5 = (numA11 / 100).toFixed(3);
    } else if (resultDibagi3A11_5 <= 3) {
        var numA11 = 0;
        var nilaiDibagi100A11_5 = (numA11 / 100).toFixed(3);
    }
    if (sumResultA12 > 3) {
        var numA12 = 3;
        var nilaiDibagi100A12_5 = (numA12 / 100).toFixed(3);
    } else if (sumResultA12 < 3) {
        var numA12 = sumResultA12;
        var nilaiDibagi100A12_5 = (numA12 / 100).toFixed(3);
    }

    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(numA11)) {
        // Tampilkan output pada input form nilai numA11
        document.getElementById("JumlahSkorYangDiHasilkanA11_5").value = numA11;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(numA12)) {
        // Tampilkan output pada input form nilai numA11
        document.getElementById("JumlahSkorYangDiHasilkanA12").value = numA12;
    }

    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(nilaiDibagi100A11_5)) {
        // Tampilkan output pada input form hasil pembagian num / 100
        document.getElementById(
            "JumlahSkorYangDiHasilkanBobotSubItemA11_5"
        ).value = nilaiDibagi100A11_5;
    }
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(nilaiDibagi100A12_5)) {
        // Tampilkan output pada input form hasil pembagian num / 100
        document.getElementById("SkorTambahanJumlahSkorA12").value =
            nilaiDibagi100A12_5;
    }

    // mengambil value yang berada di scor sub item
    var scorSubItemA11 = document.getElementById("scorSubItemA11").value;
    var scorSubItemA12 = document.getElementById("scorSubItemA12").value;

    //Kalkulasi Nilai (SUM)
    var resultSumA11 =
        parseFloat(nilaiDibagi100A11_5) + parseFloat(scorSubItemA11);
    var resultSumA12 =
        parseFloat(nilaiDibagi100A12_5) + parseFloat(scorSubItemA12);

    // Merubah format nilai ke 0.000
    var resultSumtoFixedA11_5 = resultSumA11.toFixed(3);
    var resultSumtoFixedA12 = resultSumA12.toFixed(3);
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(resultSumtoFixedA11_5)) {
        // Tampilkan output pada input form
        document.getElementById("SkorTambahanJumlahBobotSubItemA11_5").value =
            resultSumtoFixedA11_5;
    }
    if (!isNaN(resultSumtoFixedA12)) {
        // Tampilkan output pada input form
        document.getElementById("SkorTambahanJumlahBobotSubItemA12").value =
            resultSumtoFixedA12;
    }

    // Perkalian Skor Kelebihan
    // A.11
    if (resultDibagi3A11_5 >= 3) {
        var ResultNilaiDiKurangi3 = resultDibagi3A11_5 - 3;
        var resultHasilTambahanA11 = (ResultNilaiDiKurangi3 * 3) / 100;
    } else {
        var resultHasilTambahanA11 = 0;
    }
    // A.12
    if (sumResultA12 >= 3) {
        var ResultNilaiDiKurangi3 = sumResultA12 - 3;
        var resultHasilTambahanA12 = (ResultNilaiDiKurangi3 * 3) / 100;
    } else {
        var resultHasilTambahanA12 = 0;
    }

    // Result Hasil nilai Kelebihan Skor
    if (!isNaN(resultHasilTambahanA11)) {
        // Tampilkan output pada input form
        document.getElementById("TotalKelebihanA11").value =
            resultHasilTambahanA11;
    }
    if (!isNaN(resultHasilTambahanA12)) {
        // Tampilkan output pada input form
        document.getElementById("TotalKelebihanA12").value =
            resultHasilTambahanA12;
    }

    // SUM result total kelebihan skor
    if (resultHasilTambahanA11 == "" || resultHasilTambahanA12 == "") {
        var resultTotalKelebihanSkor =
            parseFloat(resultHasilTambahanA11) +
            parseFloat(resultHasilTambahanA12);
    } else {
        var resultTotalKelebihanSkor =
            parseFloat(resultHasilTambahanA11) +
            parseFloat(resultHasilTambahanA12);
    }

    // TotalKelebihanSkor
    if (!isNaN(resultTotalKelebihanSkor)) {
        // Tampilkan output pada input form
        document.getElementById("TotalKelebihanSkor").value =
            resultTotalKelebihanSkor;
    }
    // // nilai tambah pendidikan dan pengajaran
    if (!isNaN(resultTotalKelebihanSkor)) {
        // Tampilkan output pada input form
        document.getElementById("NilaiTambahPendidikanDanPengajaran").value =
            resultTotalKelebihanSkor;
    }

    // menggambil value dari function sum / value input
    var scorSubItemA1 = document.getElementById("scorSubItemA1").value;
    var scorSubItemA2 = document.getElementById("scorSubItemA2").value;
    var scorSubItemA3 = document.getElementById("scorSubItemA3").value;
    var scorSubItemA4 = document.getElementById("scorSubItemA4").value;
    var scorSubItemA5 = document.getElementById("scorSubItemA5").value;
    var scorSubItemA6 = document.getElementById("scorSubItemA6").value;
    var scorSubItemA7 = document.getElementById("scorSubItemA7").value;
    var scorSubItemA8 = document.getElementById("scorSubItemA8").value;
    var scorSubItemA9 = document.getElementById("scorSubItemA9").value;
    var scorSubItemA10 = document.getElementById("scorSubItemA10").value;
    var scorSubItemA11 = document.getElementById(
        "SkorTambahanJumlahBobotSubItemA11_5"
    ).value;
    var scorSubItemA12 = document.getElementById(
        "SkorTambahanJumlahBobotSubItemA12"
    ).value;
    var scorSubItemA13 = document.getElementById("scorSubItemA13").value;

    if (
        scorSubItemA1 == "" ||
        scorSubItemA2 == "" ||
        scorSubItemA3 == "" ||
        scorSubItemA4 == "" ||
        scorSubItemA5 == "" ||
        scorSubItemA6 == "" ||
        scorSubItemA7 == "" ||
        scorSubItemA8 == "" ||
        scorSubItemA9 == "" ||
        scorSubItemA10 == "" ||
        scorSubItemA11 == "" ||
        scorSubItemA12 == "" ||
        scorSubItemA13 == ""
    ) {
        var sumTotal =
            parseFloat(scorSubItemA1) +
            parseFloat(scorSubItemA2) +
            parseFloat(scorSubItemA3) +
            parseFloat(scorSubItemA4) +
            parseFloat(scorSubItemA5) +
            parseFloat(scorSubItemA6) +
            parseFloat(scorSubItemA7) +
            parseFloat(scorSubItemA8) +
            parseFloat(scorSubItemA9) +
            parseFloat(scorSubItemA10) +
            parseFloat(scorSubItemA11) +
            parseFloat(scorSubItemA12) +
            parseFloat(scorSubItemA13);
        var sumResult = sumTotal.toFixed(3);
    } else {
        var sumTotal =
            parseFloat(scorSubItemA1) +
            parseFloat(scorSubItemA2) +
            parseFloat(scorSubItemA3) +
            parseFloat(scorSubItemA4) +
            parseFloat(scorSubItemA5) +
            parseFloat(scorSubItemA6) +
            parseFloat(scorSubItemA7) +
            parseFloat(scorSubItemA8) +
            parseFloat(scorSubItemA9) +
            parseFloat(scorSubItemA10) +
            parseFloat(scorSubItemA11) +
            parseFloat(scorSubItemA12) +
            parseFloat(scorSubItemA13);
        var sumResult = sumTotal.toFixed(3);
    }

    if (!isNaN(sumResult)) {
        // Tampilkan output pada input form
        document.getElementById("TotalSkorPendidikanPointA").value = sumResult;
    }

    var NilaiPendidikanDanPengajar = parseFloat(sumResult);
    var resultNilaiPendidikanDanPengajar = NilaiPendidikanDanPengajar * 35;
    var resultPerkalianPendidikanDanPengajar =
        resultNilaiPendidikanDanPengajar.toFixed(2);

    if (!isNaN(resultPerkalianPendidikanDanPengajar)) {
        // Tampilkan output pada input form
        document.getElementById("nilaiPendidikandanPengajaran").value =
            resultPerkalianPendidikanDanPengajar;
    }

    // SUM result nilai pendidikan dan pengajaran + nilai tambah pendidikan dan pengajaran
    if (
        resultNilaiPendidikanDanPengajar == "" ||
        resultTotalKelebihanSkor == ""
    ) {
        var ResultTotalPendidikanDanPengajaran =
            parseFloat(resultNilaiPendidikanDanPengajar) +
            parseFloat(resultTotalKelebihanSkor);
    } else {
        var ResultTotalPendidikanDanPengajaran =
            parseFloat(resultNilaiPendidikanDanPengajar) +
            parseFloat(resultTotalKelebihanSkor);
    }

    if (ResultTotalPendidikanDanPengajaran > 40) {
        var num = 40;
        var NilaiTotalPendidikanDanPengajaran = num.toFixed(2);
    } else {
        var NilaiTotalPendidikanDanPengajaran =
            ResultTotalPendidikanDanPengajaran.toFixed(2);
    }

    if (!isNaN(NilaiTotalPendidikanDanPengajaran)) {
        // Tampilkan output pada input form
        document.getElementById("NilaiTotalPendidikanDanPengajaran").value =
            NilaiTotalPendidikanDanPengajaran;
    }
}
