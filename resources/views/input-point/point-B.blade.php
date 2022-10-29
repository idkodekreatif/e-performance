<x-app-layout title="Form Input Point B">
    @push('style')

    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Forms</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point B</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Point B</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <div class="table-responsive">
                        <table class="table table-bordered border-2 text-center">
                            <thead>
                                <tr>
                                    <td rowspan="2">No</td>
                                    <td rowspan="2">Komponen Kompetensi</td>
                                    <td colspan="5">Skor</td>
                                    <td rowspan="2" class="col">Bukti Pendukung</td>
                                    <td rowspan="2" class="bg-warning">Skor</td>
                                    <td rowspan="2">Skor/Skor maks</td>
                                    <td rowspan="2">Skor x Bobot Sub Item</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="#">
                                    <tr>
                                        <td>B</td>
                                        <td colspan="10" class="text-start">PENELITIAN DAN KARYA ILMIAH</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Memiliki karya yang diakui di tingkat nasional
                                            (Hak Cipta Nasional)</td>
                                        <td>Memiliki karya yang diakui di tingkat Internasional
                                            (Hak Cipta internasional)</td>
                                        <td>Memiliki karya yang memiliki hak Paten Terdaftar</td>
                                        <td>Metode baru yang diusulkan telah disetujui dan diimplementasikan dalam PT /
                                            Fakultas / Prodinya
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload <br> 1,
                                                Sertifikat Hak Cipta <br>
                                                2, Formulir Pendaftaran Permohonan Paten <br>
                                                3, Sertifikat Hak Paten</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB1" type="number"
                                                aria-label="B1" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB1" type="number" aria-label="B1" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB1" type="number" aria-label="B1"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.1</td>
                                        <td>Dosen memiliki karya yang telah dipatenkan atau diakui secara nasional
                                            maupun internasional
                                        </td>
                                        <td><input type="radio" class="B1" name="B1" id="B1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B1" name="B1" id="B1" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B1" name="B1" id="B1" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B1" name="B1" id="B1" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B1" name="B1" id="B1" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB1_2"
                                                id="JumlahYangDihasilkanB1_2" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB1_3"
                                                id="JumlahYangDihasilkanB1_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB1_4"
                                                id="JumlahYangDihasilkanB1_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB1_5"
                                                id="JumlahYangDihasilkanB1_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB1"
                                                id="JumlahSkorYangDiHasilkanB1" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB1"
                                                id="SkorTambahanJumlahSkorB1" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB1_2" id="SkorTambahanB1_2" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB1_3" id="SkorTambahanB1_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB1_4" id="SkorTambahanB1_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB1_5" id="SkorTambahanB1_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB1" id="SkorTambahanJumlahB1"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB1"
                                                id="SkorTambahanJumlahBobotSubItemB1" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Dalam pertengahan proses pembuatan buku</td>
                                        <td>Dalam proses percetakan</td>
                                        <td>Diterbitkan dan diedarkan secara nasional</td>
                                        <td>Diterbitkan dan diedarkan secara Internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                monograf</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB2" type="number"
                                                aria-label="B2" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB2" type="number" aria-label="B2" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB2" type="number" aria-label="B2"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.2</td>
                                        <td>Dosen menghasilkan monograf yang relevan dengan bidang kelimuan
                                        </td>
                                        <td><input type="radio" class="B2" name="B2" id="B2" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B2" name="B2" id="B2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B2" name="B2" id="B2" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B2" name="B2" id="B2" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B2" name="B2" id="B2" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB2_4"
                                                id="JumlahYangDihasilkanB2_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB2_5"
                                                id="JumlahYangDihasilkanB2_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB2"
                                                id="JumlahSkorYangDiHasilkanB2" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB2"
                                                id="SkorTambahanJumlahSkorB2" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB2_4" id="SkorTambahanB2_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB2_5" id="SkorTambahanB2_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB2" id="SkorTambahanJumlahB2"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB2"
                                                id="SkorTambahanJumlahBobotSubItemB2" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Dalam pertengahan proses pembuatan buku</td>
                                        <td>Dalam proses percetakan</td>
                                        <td>Diterbitkan dan diedarkan secara nasional</td>
                                        <td>Diterbitkan dan diedarkan secara Internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                buku referensi</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB3" type="number"
                                                aria-label="B3" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB3" type="number" aria-label="B3" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB3" type="number" aria-label="B3"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.3</td>
                                        <td>Dosen menghasilkan buku referensi yang relevan dengan bidang keilmuan
                                        </td>
                                        <td><input type="radio" class="B3" name="B3" id="B3" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B3" name="B3" id="B3" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B3" name="B3" id="B3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B3" name="B3" id="B3" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B3" name="B3" id="B3" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB3_4"
                                                id="JumlahYangDihasilkanB3_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB3_5"
                                                id="JumlahYangDihasilkanB3_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB3"
                                                id="JumlahSkorYangDiHasilkanB3" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB3"
                                                id="SkorTambahanJumlahSkorB3" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB3_4" id="SkorTambahanB3_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB3_5" id="SkorTambahanB3_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB3" id="SkorTambahanJumlahB3"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB3"
                                                id="SkorTambahanJumlahBobotSubItemB3" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>satu kali sebagai anggota penulis</td>
                                        <td>Lebih dari 1 kali sebagai anggota penulis</td>
                                        <td>Satu kali sebagai penulis utama/tunggal</td>
                                        <td>Lebih dari satu kali sebagai penulis utama/tunggal
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                monograf/buku</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB4" type="number"
                                                aria-label="B4" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB4" type="number" aria-label="B4" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB4" type="number" aria-label="B4"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.4</td>
                                        <td>Peran Dosen sebagai Penulis Utama/tunggal, Monograf/Buku yang diterbitkan
                                        </td>
                                        <td><input type="radio" class="B4" name="B4" id="B4" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B4" name="B4" id="B4" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B4" name="B4" id="B4" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B4" name="B4" id="B4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B4" name="B4" id="B4" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>telah dikirimkan dan belum mendapat balasan / telah dikirimkan namun ditolak
                                        </td>
                                        <td>sedang dalam proses review redaksi</td>
                                        <td>sudah ada konfirmasi untuk dimuat / sedang dalam revisi</td>
                                        <td>telah dimuat dalam jurnal ilmiah internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                jurnal ilmiah internasional dan bukti penerimaan
                                                naskah</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB5" type="number"
                                                aria-label="B5" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB5" type="number" aria-label="B5" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB5" type="number" aria-label="B5"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.5</td>
                                        <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah Internasional
                                        </td>
                                        <td><input type="radio" class="B5" name="B5" id="B5" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B5" name="B5" id="B5" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B5" name="B5" id="B5" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B5" name="B5" id="B5" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B5" name="B5" id="B5" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB5_5"
                                                id="JumlahYangDihasilkanB5_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB5"
                                                id="JumlahSkorYangDiHasilkanB5" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB5"
                                                id="SkorTambahanJumlahSkorB5" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB5_5" id="SkorTambahanB5_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB5" id="SkorTambahanJumlahB5"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB5"
                                                id="SkorTambahanJumlahBobotSubItemB5" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>telah dikirimkan dan belum mendapat balasan / telah dikirimkan namun ditolak
                                        </td>
                                        <td>sedang dalam proses review redaksi</td>
                                        <td>sudah ada konfirmasi untuk dimuat / sedang dalam revisi</td>
                                        <td>telah dimuat dalam jurnal ilmiah nasional terakreditasi
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                jurnal ilmiah nasional terakreditasi dan bukti
                                                penerimaan naskah</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB6" type="number"
                                                aria-label="B6" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB6" type="number" aria-label="B6" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB6" type="number" aria-label="B6"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.6</td>
                                        <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah nasional
                                            terakreditasi
                                        </td>
                                        <td><input type="radio" class="B6" name="B6" id="B6" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B6" name="B6" id="B6" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B6" name="B6" id="B6" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B6" name="B6" id="B6" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B6" name="B6" id="B6" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB6_5"
                                                id="JumlahYangDihasilkanB6_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB6"
                                                id="JumlahSkorYangDiHasilkanB6" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB6"
                                                id="SkorTambahanJumlahSkorB6" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB6_5" id="SkorTambahanB6_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB6" id="SkorTambahanJumlahB6"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB6"
                                                id="SkorTambahanJumlahBobotSubItemB6" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>telah dikirimkan dan belum mendapat balasan / telah dikirimkan namun ditolak
                                        </td>
                                        <td>sudah ada konfirmasi/sedang dalam revisi</td>
                                        <td>1 - 2 karya dimuat dalam jurnal ilmiah nasional tidak terakreditasi</td>
                                        <td>3 karya dimuat dalam jurnal ilmiah tidak terakreditasi
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                jurnal ilmiah nasional tidak terakreditasi dan bukti
                                                penerimaan naskah</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB7" type="number"
                                                aria-label="B7" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB7" type="number" aria-label="B7" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB7" type="number" aria-label="B7"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.7</td>
                                        <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah Nasional tidak
                                            terakreditasi / Jurnal Ilmiah Nasional
                                            ber-ISSN
                                        </td>
                                        <td><input type="radio" class="B7" name="B7" id="B7" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B7" name="B7" id="B7" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B7" name="B7" id="B7" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B7" name="B7" id="B7" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B7" name="B7" id="B7" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kelebihan karya artikel (>3 karya)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB7_5"
                                                id="JumlahYangDihasilkanB7_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB7"
                                                id="JumlahSkorYangDiHasilkanB7" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB7"
                                                id="SkorTambahanJumlahSkorB7" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB7_5" id="SkorTambahanB7_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB7" id="SkorTambahanJumlahB7"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB7"
                                                id="SkorTambahanJumlahBobotSubItemB7" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>satu kali sebagai anggota penulis</td>
                                        <td>Lebih dari 1 kali sebagai anggota penulis</td>
                                        <td>Satu kali sebagai penulis utama/tunggal</td>
                                        <td>
                                            Lebih dari
                                            satu kali sebagai penulis utama/tunggal

                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                jurnal</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB8" type="number"
                                                aria-label="B8" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB8" type="number" aria-label="B8" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB8" type="number" aria-label="B8"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.8</td>
                                        <td>Peran Dosen sebagai Penulis Utama/tunggal, dari jurnal yang diterbitkan
                                        </td>
                                        <td><input type="radio" class="B8" name="B8" id="B8" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B8" name="B8" id="B8" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B8" name="B8" id="B8" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B8" name="B8" id="B8" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B8" name="B8" id="B8" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>makalah telah ditampilkan namun belum ada bukti berupa prosiding/tidak
                                            dimuat dalam prosiding
                                        </td>
                                        <td>makalah tidak ditampilkan namun dimuat dalam prosiding yang dipublikasikan
                                        </td>
                                        <td>makalah telah ditampilkan dan bukti sertifikat maupun prosiding telah
                                            diterima lengkap, jumlah makalah = 1</td>
                                        <td>makalah telah ditampilkan dan bukti sertifikat maupun prosiding telah
                                            diterima lengkap, jumlah makalah = 2
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                sertifikat dan prosiding seminar</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB9" type="number"
                                                aria-label="B9" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB9" type="number" aria-label="B9" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB9" type="number" aria-label="B9"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.9</td>
                                        <td>Dosen membuat makalah dipresentasikan dalam seminar dan dimuat dalam
                                            prosiding internasional
                                        </td>
                                        <td><input type="radio" class="B9" name="B9" id="B9" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B9" name="B9" id="B9" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B9" name="B9" id="B9" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B9" name="B9" id="B9" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B9" name="B9" id="B9" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kelebihan karya makalah (>2 makalah)</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB9_3"
                                                id="JumlahYangDihasilkanB9_3" onkeyup="sum()" required>
                                        </td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB9_5"
                                                id="JumlahYangDihasilkanB9_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB9"
                                                id="JumlahSkorYangDiHasilkanB9" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB9"
                                                id="SkorTambahanJumlahSkorB9" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB9_3" id="SkorTambahanB9_3" disabled>
                                        </td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB9_5" id="SkorTambahanB9_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB9" id="SkorTambahanJumlahB9"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB9"
                                                id="SkorTambahanJumlahBobotSubItemB9" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>makalah telah ditampilkan namun belum ada bukti berupa prosiding/tidak
                                            dimuat dalam prosiding
                                        </td>
                                        <td>makalah tidak ditampilkan namun dimuat dalam prosiding yang dipublikasikan
                                        </td>
                                        <td>makalah telah ditampilkan dan bukti sertifikat maupun prosiding telah
                                            diterima lengkap, jumlah makalah = 1 -2</td>
                                        <td>makalah telah ditampilkan dan bukti sertifikat maupun prosiding telah
                                            diterima lengkap, jumlah makalah 3 - 4
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                sertifikat dan prosiding seminar</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB10" type="number"
                                                aria-label="B10" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB10" type="number" aria-label="B10" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB10" type="number" aria-label="B10"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.10</td>
                                        <td>Dosen membuat makalah dipresentasikan dalam seminar dan dimuat dalam
                                            prosiding nasional/lokal
                                        </td>
                                        <td><input type="radio" class="B10" name="B10" id="B10" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B10" name="B10" id="B10" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B10" name="B10" id="B10" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B10" name="B10" id="B10" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B10" name="B10" id="B10" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kelebihan karya makalah (>4 makalah)</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB10_3"
                                                id="JumlahYangDihasilkanB10_3" onkeyup="sum()" required>
                                        </td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB10_5"
                                                id="JumlahYangDihasilkanB10_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB10"
                                                id="JumlahSkorYangDiHasilkanB10" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB10"
                                                id="SkorTambahanJumlahSkorB10" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB10_3" id="SkorTambahanB10_3" disabled>
                                        </td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB10_5" id="SkorTambahanB10_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB10" id="SkorTambahanJumlahB10"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB10"
                                                id="SkorTambahanJumlahBobotSubItemB10" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>poster telah mendapat konfirmasi untuk ditampilkan dalam seminar
                                            internasional
                                        </td>
                                        <td>poster telah ditampilkan namun belum ada bukti sertifikatnya
                                        </td>
                                        <td>poster telah ditampilkan dan bukti sertifiakat telah diterima lengkap,
                                            jumlah poster = 1</td>
                                        <td>poster telah ditampilkan dan bukti sertifikat telah diterima lengkap, jumlah
                                            poster = 2
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                sertifikat dan prosiding seminar</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB11" type="number"
                                                aria-label="B11" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB11" type="number" aria-label="B11" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB11" type="number" aria-label="B11"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.11</td>
                                        <td>Dosen membuat POSTER dipresentasikan dalam seminar dan prosiding
                                            internasional
                                        </td>
                                        <td><input type="radio" class="B11" name="B11" id="B11" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B11" name="B11" id="B11" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B11" name="B11" id="B11" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B11" name="B11" id="B11" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B11" name="B11" id="B11" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kelebihan karya poster (>2 poster)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB11_5"
                                                id="JumlahYangDihasilkanB11_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB11"
                                                id="JumlahSkorYangDiHasilkanB11" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB11"
                                                id="SkorTambahanJumlahSkorB11" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB11_5" id="SkorTambahanB11_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB11" id="SkorTambahanJumlahB11"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB11"
                                                id="SkorTambahanJumlahBobotSubItemB11" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>poster telah mendapat konfirmasi untuk ditampilkan dalam seminar
                                            internasional
                                        </td>
                                        <td>poster telah ditampilkan namun belum ada bukti sertifikatnya
                                        </td>
                                        <td>poster telah ditampilkan dan bukti sertifikat telah diterima lengkap, jumlah
                                            poster 1 - 2</td>
                                        <td>poster telah ditampilkan dan bukti sertifiakat telah diterima lengkap,
                                            jumlah poster 3 - 4
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                sertifikat dan prosiding seminar</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB12" type="number"
                                                aria-label="B12" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB12" type="number" aria-label="B12" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB12" type="number" aria-label="B12"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.12</td>
                                        <td>Dosen membuat POSTER dipresentasikan dalam seminar dan prosiding Nasional
                                        </td>
                                        <td><input type="radio" class="B12" name="B12" id="B12" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B12" name="B12" id="B12" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B12" name="B12" id="B12" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B12" name="B12" id="B12" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B12" name="B12" id="B12" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kelebihan karya poster (>4 poster)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB12_5"
                                                id="JumlahYangDihasilkanB12_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB12"
                                                id="JumlahSkorYangDiHasilkanB12" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB12"
                                                id="SkorTambahanJumlahSkorB12" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB12_5" id="SkorTambahanB12_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB12" id="SkorTambahanJumlahB12"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB12"
                                                id="SkorTambahanJumlahBobotSubItemB12" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Opini sudah dikonfirmasi untuk diterbitkan
                                        </td>
                                        <td>Opini telah diterbitkan dalam koran/majalah lokal
                                        </td>
                                        <td>Opini telah diterbitkan dalam koran/majalah nasional</td>
                                        <td>Opini telah diterbitkan dalam koran/majalah internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                koran/majalah populer/umum</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB13" type="number"
                                                aria-label="B13" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB13" type="number" aria-label="B13" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB13" type="number" aria-label="B13"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.13</td>
                                        <td>Dosen menulis opini dalam Koran/Majalah populer / umum
                                        </td>
                                        <td><input type="radio" class="B13" name="B13" id="B13" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B13" name="B13" id="B13" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B13" name="B13" id="B13" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B13" name="B13" id="B13" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B13" name="B13" id="B13" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB13_3"
                                                id="JumlahYangDihasilkanB13_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB13_4"
                                                id="JumlahYangDihasilkanB13_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB13_5"
                                                id="JumlahYangDihasilkanB13_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB13"
                                                id="JumlahSkorYangDiHasilkanB13" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB13"
                                                id="SkorTambahanJumlahSkorB13" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB13_3" id="SkorTambahanB13_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB13_4" id="SkorTambahanB13_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB13_5" id="SkorTambahanB13_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB13" id="SkorTambahanJumlahB13"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB13"
                                                id="SkorTambahanJumlahBobotSubItemB13" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Hasil penelitian digunakan untuk kepentingan internal Institusi
                                        </td>
                                        <td>Hasil penelitian digunakan untuk kepentingan lokal (kota/kabupaten)
                                        </td>
                                        <td>Hasil penelitian digunakan untuk kepentingan nasional</td>
                                        <td>Hasil penelitian/pemikiran digunakan untuk kepentingan internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                buku yang telah disimpan di Perpustakaan PT</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB14" type="number"
                                                aria-label="B14" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB14" type="number" aria-label="B14" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB14" type="number" aria-label="B14"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.14</td>
                                        <td>Dosen menghasilkan penelitian/pemikiran yang tidak dipublikasikan, tapi
                                            digunakan untuk kepentingan tertentu (dibukukan
                                            dan disimpan dalam perpustakaan PT)
                                        </td>
                                        <td><input type="radio" class="B14" name="B14" id="B14" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B14" name="B14" id="B14" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B14" name="B14" id="B14" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B14" name="B14" id="B14" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B14" name="B14" id="B14" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB14_2"
                                                id="JumlahYangDihasilkanB14_2" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB14_3"
                                                id="JumlahYangDihasilkanB14_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB14_4"
                                                id="JumlahYangDihasilkanB14_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB14_5"
                                                id="JumlahYangDihasilkanB14_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB14"
                                                id="JumlahSkorYangDiHasilkanB14" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB14"
                                                id="SkorTambahanJumlahSkorB14" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB14_2" id="SkorTambahanB14_2" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB14_3" id="SkorTambahanB14_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB14_4" id="SkorTambahanB14_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB14_5" id="SkorTambahanB14_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB14" id="SkorTambahanJumlahB14"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB14"
                                                id="SkorTambahanJumlahBobotSubItemB14" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Pernah membuat proposal penelitian yang ditolak/tidak mendapatkan pendanaan,
                                            dalam 1 tahun penilaian
                                        </td>
                                        <td>Proposal penelitian dengan dana hibah lokal/Institusi
                                        </td>
                                        <td>Proposal penelitian dengan dana hibah nasional (DIKTI/BRIN/dll)</td>
                                        <td>Proposal penelitian dengan dana hibah internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                proposal dan bukti fisik surat/surel penerimaan
                                                proposal</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB15" type="number"
                                                aria-label="B15" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB15" type="number" aria-label="B15" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB15" type="number" aria-label="B15"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.15</td>
                                        <td>Dosen membuat proposal penelitian, karya/desain teknologi, seni dan sastra
                                            dengan dana hibah
                                        </td>
                                        <td><input type="radio" class="B15" name="B15" id="B15" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B15" name="B15" id="B15" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B15" name="B15" id="B15" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B15" name="B15" id="B15" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B15" name="B15" id="B15" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB15_3"
                                                id="JumlahYangDihasilkanB15_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB15_4"
                                                id="JumlahYangDihasilkanB15_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB15_5"
                                                id="JumlahYangDihasilkanB15_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB15"
                                                id="JumlahSkorYangDiHasilkanB15" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB15"
                                                id="SkorTambahanJumlahSkorB15" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB15_3" id="SkorTambahanB15_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB15_4" id="SkorTambahanB15_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB15_5" id="SkorTambahanB15_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB15" id="SkorTambahanJumlahB15"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB15"
                                                id="SkorTambahanJumlahBobotSubItemB15" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>satu kali sebagai anggota peneliti</td>
                                        <td>Lebih dari 1 kali sebagai anggota peneliti</td>
                                        <td>Satu kali sebagai peneliti utama/tunggal</td>
                                        <td>lebih dari 1 kali sebagai peneliti utama/tunggal
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                proposal dan bukti fisik surat/surel penerimaan
                                                proposal</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB16" type="number"
                                                aria-label="B16" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB16" type="number" aria-label="B16" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB16" type="number" aria-label="B16"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.16</td>
                                        <td>Peran Dosen dlm pembuatan proposal penelitian, karya/disain teknologi, seni
                                            dan sastra
                                        </td>
                                        <td><input type="radio" class="B16" name="B16" id="B16" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B16" name="B16" id="B16" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B16" name="B16" id="B16" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B16" name="B16" id="B16" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B16" name="B16" id="B16" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Dosen sedang melaksanakan penelitian dengan dana pribadi
                                        </td>
                                        <td>Dosen sedang melaksanakan penelitian dengan dana hibah lokal/IKBIS
                                        </td>
                                        <td>Dosen sedang melaksanakan penelitian dengan dana hibah nasional</td>
                                        <td>Dosen sedang melaksanakan penelitian dengan dana hibah internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                surat kontrak penelitian/surat penerimaan dana
                                                hibah, dan jurnal penelitian</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB17" type="number"
                                                aria-label="B17" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB17" type="number" aria-label="B17" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB17" type="number" aria-label="B17"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.17</td>
                                        <td>Dosen melakukan penelitian dengan dana hibah
                                        </td>
                                        <td><input type="radio" class="B17" name="B17" id="B17" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B17" name="B17" id="B17" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B17" name="B17" id="B17" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B17" name="B17" id="B17" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B17" name="B17" id="B17" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB17_2"
                                                id="JumlahYangDihasilkanB17_2" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB17_3"
                                                id="JumlahYangDihasilkanB17_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB17_4"
                                                id="JumlahYangDihasilkanB17_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanB17_5"
                                                id="JumlahYangDihasilkanB17_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanB17"
                                                id="JumlahSkorYangDiHasilkanB17" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorB17"
                                                id="SkorTambahanJumlahSkorB17" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanB17_2" id="SkorTambahanB17_2" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB17_3" id="SkorTambahanB17_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB17_4" id="SkorTambahanB17_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanB17_5" id="SkorTambahanB17_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahB17" id="SkorTambahanJumlahB17"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemB17"
                                                id="SkorTambahanJumlahBobotSubItemB17" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>satu kali sebagai anggota peneliti</td>
                                        <td>Lebih dari 1 kali sebagai anggota peneliti</td>
                                        <td>Satu kali sebagai peneliti utama/tunggal</td>
                                        <td>lebih dari 1 kali sebagai peneliti utama/tunggal
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                proposal dan bukti fisik surat/surel penerimaan
                                                proposal</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorB18" type="number"
                                                aria-label="B18" disabled></td>
                                        <td rowspan="2"><input id="scorMaxB18" type="number" aria-label="B18" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemB18" type="number" aria-label="B18"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>B.18</td>
                                        <td>Peran Dosen dalam penelitian
                                        </td>
                                        <td><input type="radio" class="B18" name="B18" id="B18" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B18" name="B18" id="B18" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B18" name="B18" id="B18" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B18" name="B18" id="B18" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="B18" name="B18" id="B18" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Total Skor Penelitian</td>
                                        <td>0,334</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 1</td>
                                        <td>0</td>
                                        <td colspan="3" rowspan="7">Nilai Pendidikan dan Pengajaran</td>
                                        <td rowspan="7">11,69</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 2</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 3</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 5</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 6</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 7</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 9</td>
                                        <td>0</td>
                                    </tr>

                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 10</td>
                                        <td>0</td>
                                        <td colspan="3" rowspan="8">Nilai Tambah Penelitian</td>
                                        <td rowspan="8">11,69</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 11</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 12</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 13</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 14</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 15</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 17</td>
                                        <td>0</td>
                                    </tr>

                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="6">Nilai Total Penelitian & Karya Ilmiah</td>
                                        <td>0</td>
                                    </tr>

                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('JavaScript')
    <script src="{{ asset('Assets/js/Input-point/ScorPointBCheked.js') }}"></script>
    @endpush
</x-app-layout>
