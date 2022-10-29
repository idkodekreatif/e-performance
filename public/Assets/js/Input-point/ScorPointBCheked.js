function sum() {
    // Definisi variablr inputan pokok komponent
    var B1;

    // Cek Input Radio pokok komponent
    if ($("input[name='B1']:checked").val() != null) {
        B1 = document.querySelector('input[name="B1"]:checked').value;
    } else {
        B1 = 0;
    }

    // Merubah nilai inputan ke integer Pokok Komponent
    //Kalkulasi Nilai (SKOR)
    var SkorB1 = parseInt(B1);

    // Skor inputan nilai setelah di rubah ke integer di bagi 5
    //Kalkulasi Nilai (SKOR/SKOR MAKS)
    var skorMaksB1 = SkorB1 / 5;

    // nilai inputan setelah di bagi sekarang di kalikan sesuai rumus excel Pokok Komponent
    //Kalkulasi Nilai (SKOR*BOBOT SUB ITEM)
    if ($("input[name='B1']:checked").val() == 1) {
        var num = 0;
        var scorSubItemB1 = num.toFixed(3);
    } else {
        var scorSubItemB1 = ((skorMaksB1 * 5) / 100).toFixed(3);
    }

    // Pokok Komponent menampilkan hasil nilai di interfaces jumlah point komponent
    // Menampilkan nilai skor di form disabled
    if (!isNaN(SkorB1)) {
        // Cek agar tidak keluar Nilai diluar Parameter
        // Tampilkan output pada input form skor
        document.getElementById("scorB1").value = SkorB1;
    }

    // Menampilkan nilai Pokok Komponent skor / Skor Maks di form disabled
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(skorMaksB1)) {
        // Tampilkan output pada input form skor / skor maks
        document.getElementById("scorMaxB1").value = skorMaksB1;
    }

    // Menampilkan nilai Pokok Komponent skor * Bpbpt Sub Item di form disabled
    // Cek agar tidak keluar Nilai diluar Parameter
    if (!isNaN(scorSubItemB1)) {
        // Tampilkan output pada input form skor * Bobot Sub Item
        document.getElementById("scorSubItemB1").value = scorSubItemB1;
    }
}
