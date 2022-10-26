// function sumForm() {
//     var DihasilkanA115 = document.getElementById("DihasilkanA11.5").value;
//     var result = DihasilkanA115 * 3;

//     document.getElementById("SkorTambahanA11.5").value = result;
// }

function sumForm() {
    var JumlahYangDihasilkanA11_5;

    if ($("input[name='JumlahYangDihasilkanA11_5']").val() != null) {
        JumlahYangDihasilkanA11_5 = document.querySelector(
            'input[name="JumlahYangDihasilkanA11_5"]'
        ).value;
    } else {
        JumlahYangDihasilkanA11_5 = 0;
    }

    //Kalkulasi Nilai (TOTAL)
    var resultJumlahYangDihasilkanA11_5 = parseInt(JumlahYangDihasilkanA11_5);
    var resultDibagi3A11_5 = resultJumlahYangDihasilkanA11_5 * 3;

    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(resultDibagi3A11_5)) {
        // Tampilkan output pada input form
        document.getElementById("SkorTambahanA11_5").value = resultDibagi3A11_5;
        document.getElementById("SkorTambahanJumlahA11_5").value =
            resultDibagi3A11_5;
    }

    if (resultDibagi3A11_5 >= 3) {
        var num = 3;
        var nilaiDibagi100A11_5 = (num / 100).toFixed(3);
    } else if (resultDibagi3A11_5 <= 3) {
        var num = 0;
        var nilaiDibagi100A11_5 = (num / 100).toFixed(3);
    }

    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(num)) {
        // Tampilkan output pada input form
        document.getElementById("JumlahSkorYangDiHasilkanA11_5").value = num;
    }

    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(nilaiDibagi100A11_5)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById(
            "JumlahSkorYangDiHasilkanBobotSubItemA11_5"
        ).value = nilaiDibagi100A11_5;
    }
    var scorSubItemA11 = document.getElementById("scorSubItemA11").value;

    //Kalkulasi Nilai (TOTAL)
    var resultSum =
        parseFloat(nilaiDibagi100A11_5) + parseFloat(scorSubItemA11);
    var resultSumtoFixed = resultSum.toFixed(3);
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(resultSumtoFixed)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("SkorTambahanJumlahBobotSubItemA11_5").value =
            resultSumtoFixed;
    }
}
