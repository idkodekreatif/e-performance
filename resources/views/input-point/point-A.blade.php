<x-app-layout title="Form Input Point A">
    @push('style')

    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Forms</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point A</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Point A</h4>
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
                                    <td rowspan="2">Bukti Pendukung</td>
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
                                        <td>A</td>
                                        <td colspan="10" class="text-start">PENDIDIKAN DAN PENGAJARAN</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Nilai rerata < 2.00 (KURANG)</td>
                                        <td>Nilai rerata>=2.00 - < 3.00 (CUKUP) </td>
                                        <td>Nilai rerata >=3.00 - < 3.60 (BAIK)</td>
                                        <td>Nilai rerata >=3.60 - < 3.80 (SANGAT BAIK)</td>
                                        <td>Nilai rerata >=3.80 - 4.00
                                            (ISTIMEWA)</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Hasil
                                                evaluasi perkuliahan</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA1" type="number"
                                                aria-label="A1" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA1" type="number" aria-label="A1" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA1" type="number" aria-label="A1"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.1</td>
                                        <td>Nilai rerata evaluasi perkuliahan untuk sem. Gasal - sem. Genap</td>
                                        <td><input type="radio" class="A1" name="A1" id="A1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A1" name="A1" id="A1" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A1" name="A1" id="A1" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A1" name="A1" id="A1" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A1" name="A1" id="A1" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak menyusun sama sekali</td>
                                        <td>Menyusun kurang dari 25% untuk mata kuliah yang diasuh</td>
                                        <td>Menyusun untuk 25% - 50% dari mata kuliah yang diasuh</td>
                                        <td>Menyusun untuk 51% - 75% dari mata kuliah yang diasuh</td>
                                        <td>Menyusun untuk lebih dari 75% mata kuliah yang diasuh</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Checklist
                                                RPS dari Prodi</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA2" type="number"
                                                aria-label="A2" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA2" type="number" aria-label="A2" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA2" type="number" aria-label="A2"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.2</td>
                                        <td>Dosen menyusun RPS dari setiap mata kuliah yang diasuhnya dalam satu tahun
                                            akademik</td>
                                        <td><input type="radio" class="A2" name="A2" id="A2" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A2" name="A2" id="A2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A2" name="A2" id="A2" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A2" name="A2" id="A2" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A2" name="A2" id="A2" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Kurang dari 2 sks</td>
                                        <td>Mengampu mata kuliah dengan total 3 - 5 sks</td>
                                        <td>Mengampu mata kuliah dengan total 6 - 8 sks</td>
                                        <td>Mengampu mata kuliah dengan total 9 - 11 sks</td>
                                        <td>Mengampu mata kuliah dengan rata-rata 12-13 sks atau lebih, per semester
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Jumlah
                                                SKS</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA3" type="number"
                                                aria-label="A3" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA3" type="number" aria-label="A3" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA3" type="number" aria-label="A3"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.3</td>
                                        <td>Dosen menjadi pengampu mata kuliah</td>
                                        <td><input type="radio" class="A3" name="A3" id="A3" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A3" name="A3" id="A3" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A3" name="A3" id="A3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A3" name="A3" id="A3" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A3" name="A3" id="A3" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak membimbing mahasiswa sama sekali</td>
                                        <td>Membimbing 1 mata kuliah dengan tugas akhir seminar</td>
                                        <td>Membimbing 2 - 3 mata kuliah dengan tugas akhir seminar</td>
                                        <td>Membimbing 4 mata kuliah dengan tugas akhir seminar</td>
                                        <td>Membimbing >4 mata kuliah dengan tugas akhir seminar</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Pembimbing dan Keterangan Prodi</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA4" type="number"
                                                aria-label="A4" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA4" type="number" aria-label="A4" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA4" type="number" aria-label="A4"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.4</td>
                                        <td>Dosen menjadi pembimbing seminar akhir mahasiswa dalam suatu mata kuliah
                                            yang mensyaratkan seminar dan pembuatan karya
                                            ilmiah tertentu untuk kelulusannya</td>
                                        <td><input type="radio" class="A4" name="A4" id="A4" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A4" name="A4" id="A4" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A4" name="A4" id="A4" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A4" name="A4" id="A4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A4" name="A4" id="A4" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak membimbing mahasiswa PKL/ PPM/KKM</td>
                                        <td>Membimbing mahasiswa PKL/ PPM/KKM (1 kelompok PPM/ 1 mahasiswa PKL)</td>
                                        <td>Membimbing mahasiswa PKL dan/ atau PPM/KKM (2 - 4 mahasiswa)</td>
                                        <td>Membimbing mahasiswa PKL dan/ atau PPM/KKM (5 - 7 mahasiswa)</td>
                                        <td>Membimbing mahasiswa PKL dan/ atau PPM/KKM (8 - 10 mahasiswa, atau lebih)
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Pembimbingan</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA5" type="number"
                                                aria-label="A5" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA5" type="number" aria-label="A5" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA5" type="number" aria-label="A5"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.5</td>
                                        <td>Dosen membimbing Praktik Kerja Lapangan atau Program Pemberdayaan Masyarakat
                                            atau Kuliah Kerja Mahasiswa (1 kelompok PPM
                                            dihitung 2 mahasiswa)</td>
                                        <td><input type="radio" class="A5" name="A5" id="A5" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A5" name="A5" id="A5" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A5" name="A5" id="A5" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A5" name="A5" id="A5" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A5" name="A5" id="A5" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sedang membimbing Skripsi</td>
                                        <td>Membimbing skripsi sebagai pembimbing pendamping (1 - 8 lulusan)</td>
                                        <td>Membimbing skripsi sebagai pembimbing pendamping (>8 lulusan)</td>
                                        <td>Membimbing skripsi sebagai pembimbing utama (1 - 8 lulusan)</td>
                                        <td>Membimbing skripsi sebagai pembimbing utama (>8 lulusan)</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Pembimbingan</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA6" type="number"
                                                aria-label="A6" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA6" type="number" aria-label="A6" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA6" type="number" aria-label="A6"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.6</td>
                                        <td>Dosen membimbing dalam menghasilkan Skripsi bagi mahasiswa strata 1 atau
                                            Tugas Akhir bagi mahasiswa diploma 3</td>
                                        <td><input type="radio" class="A6" name="A6" id="A6" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A6" name="A6" id="A6" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A6" name="A6" id="A6" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A6" name="A6" id="A6" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A6" name="A6" id="A6" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah menguji dalam ujian akhir mahasiswa</td>
                                        <td>Dosen menjadi anggota penguji (1 - 8 mahasiswa)</td>
                                        <td>Dosen menjadi anggota penguji (> 8 mahasiswa)</td>
                                        <td>Dosen menjadi Ketua Penguji (1 - 8 mahasiswa)</td>
                                        <td>Dosen menjadi Ketua Penguji (> 8 mahasiswa)</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                penunjukkan sebagai penguji</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA7" type="number"
                                                aria-label="A7" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA7" type="number" aria-label="A7" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA7" type="number" aria-label="A7"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.7</td>
                                        <td>Dosen bertugas sebagai penguji pada ujian akhir mahasiswa</td>
                                        <td><input type="radio" class="A7" name="A7" id="A7" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A7" name="A7" id="A7" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A7" name="A7" id="A7" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A7" name="A7" id="A7" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A7" name="A7" id="A7" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sedang menjadi pembimbing akademik (dosen PA/dosen wali)</td>
                                        <td>Menjadi pembimbing akademik (1 - 8 mahasiswa)</td>
                                        <td>Menjadi pembimbing akademik (9 - 10 mahasiswa)</td>
                                        <td>Menjadi pembimbing akademik (11 - 12 mahasiswa)</td>
                                        <td>Menjadi pembimbing akademik (>12 mahasiswa)</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK Dosen
                                                Pembimbing Akademik
                                                (Dosen PA/Dosen Wali)</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA8" type="number"
                                                aria-label="A8" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA8" type="number" aria-label="A8" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA8" type="number" aria-label="A8"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.8</td>
                                        <td>Dosen membimbing akademik /dosen pembimbing akademik (dosen PA/dosen wali)
                                        </td>
                                        <td><input type="radio" class="A8" name="A8" id="A8" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A8" name="A8" id="A8" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A8" name="A8" id="A8" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A8" name="A8" id="A8" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A8" name="A8" id="A8" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Kurang dari 80% Jumlah mahasiswa yang dibimbingnya lancar
                                            (Jumlah mahasiswa melanjutkan studi/lulus < 80% )</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>80% s.d. < 100% Jumlah mahasiswa yang dibimbingnya lancar (Jumlah mahasiswa
                                                melanjutkan studi/lulus=80% s.d. <100%)</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>100% jumlah mahasiswa yang dibimbingnya lancar
                                            (Jumlah mahasiswa melanjutkan studi/lulus = 100%)</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Keterangan
                                                dari Prodi dan BAAK</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA9" type="number"
                                                aria-label="A9" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA9" type="number" aria-label="A9" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA9" type="number" aria-label="A9"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.9</td>
                                        <td>Dosen PA/Dosen Wali membimbing kelancaran studi mahasiswa yang dibimbingnya
                                        </td>
                                        <td><input type="radio" class="A9" name="A9" id="A9" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A9" name="A9" id="A9" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A9" name="A9" id="A9" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A9" name="A9" id="A9" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A9" name="A9" id="A9" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sedang menjadi pembina kegiatan akademik maupun kemahasiswaan</td>
                                        <td>Menjadi pembina 1 (satu) kegiatan kemahasiswaan saja</td>
                                        <td>Menjadi penasihat akademik saja</td>
                                        <td>Menjadi penasihat akademik dan pembina 1 kegiatan kemahasiswaan</td>
                                        <td>Menjadi penasihat akademik dan pembina kegiatan kemahasiswaan lebih dari 1
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Keterangan
                                                dari Prodi</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA10" type="number"
                                                aria-label="A10" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA10" type="number" aria-label="A10" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA10" type="number" aria-label="A10"
                                                onkeyup="sumForm()" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.10</td>
                                        <td>Dosen menjadi pembina dalam kegiatan mahasiswa dalam bidang akademik dan
                                            kemahasiswaan
                                        </td>
                                        <td><input type="radio" class="A10" name="A10" id="A10" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A10" name="A10" id="A10" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A10" name="A10" id="A10" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A10" name="A10" id="A10" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A10" name="A10" id="A10" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah mengusukan metode baru</td>
                                        <td>Pernah mengusulkan metode baru, namun tidak diimplementasikan</td>
                                        <td>Telah mengusulkan metode baru dan sedang dalam proses review oleh Dekan /
                                            Tim Kurikulum</td>
                                        <td>Metode baru yang diusulkan telah disetujui namun belum diterapkan dalam PT /
                                            Fakultas / Prodinya</td>
                                        <td>Metode baru yang diusulkan telah disetujui dan diimplementasikan dalam PT /
                                            Fakultas / Prodinya
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                tertulis terkait metode pembelajaran baru yang telah
                                                disampaikan</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA11" type="number"
                                                aria-label="A11" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA11" type="number" aria-label="A11" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA11" type="number" aria-label="A11"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.11</td>
                                        <td>Dosen berhasil menemukan metode pembelajaran yang inovatif, dilengkapi
                                            dengan media pembelajaran dan evaluasi
                                            pembelajaran yang tertulis dan tersimpan dalam perpustakaan IKBIS.
                                        </td>
                                        <td><input type="radio" class="A11" name="A11" id="A11" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A11" name="A11" id="A11" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A11" name="A11" id="A11" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A11" name="A11" id="A11" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A11" name="A11" id="A11" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanA11_5"
                                                id="JumlahYangDihasilkanA11_5" onkeyup="sumForm()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanA11_5"
                                                id="JumlahSkorYangDiHasilkanA11_5" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanBobotSubItemA11_5"
                                                id="JumlahSkorYangDiHasilkanBobotSubItemA11_5" disabled></td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanA11_5" id="SkorTambahanA11_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahA11_5"
                                                id="SkorTambahanJumlahA11_5" disabled>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemA11_5"
                                                id="SkorTambahanJumlahBobotSubItemA11_5" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah menyusun bahan pengajaran sendiri</td>
                                        <td>Menyusun bahan pengajaran dalam bentuk naskah tutorial yang ditulis
                                            mengikuti kaidah tulisan ilmiah</td>
                                        <td>Membuat alat bantu dalam bentuk audio visual, atau model yang memudahkan
                                            proses pengajaran</td>
                                        <td>Menyusun diktat, modul, model, dan petunjuk praktikum untuk membantu proses
                                            pengajaran</td>
                                        <td>Menyusun buku ajar/buku teks untuk suatu mata kuliah, mengikuti kaidah buku
                                            teks serta diterbitkan secara resmi dan
                                            disebarluaskan
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                bahan pengajaran yang dihasilkan, dan jumlah mata
                                                kuliah diperhitungkan</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA12" type="number"
                                                aria-label="A12" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA12" type="number" aria-label="A12" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA12" type="number" aria-label="A12"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.12</td>
                                        <td>Dosen mengembangkan bahan pengajaran sebagai hasil pengembangan inovatif
                                            materi substansi pengajaran
                                        </td>
                                        <td><input type="radio" class="A12" name="A12" id="A12" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A12" name="A12" id="A12" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A12" name="A12" id="A12" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A12" name="A12" id="A12" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A12" name="A12" id="A12" value="5"
                                                onclick="sum();">
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanA12_3"
                                                id="JumlahYangDihasilkanA12_3" onkeyup="sumForm()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanA12_4"
                                                id="JumlahYangDihasilkanA12_4" onkeyup="sumForm()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanA12_5"
                                                id="JumlahYangDihasilkanA12_5" onkeyup="sumForm()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanA12"
                                                id="JumlahSkorYangDiHasilkanA12" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorA12"
                                                id="SkorTambahanJumlahSkorA12" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanA12_3" id="SkorTambahanA12_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanA12_4" id="SkorTambahanA12_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanA12_5" id="SkorTambahanA12_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahA12" id="SkorTambahanJumlahA12"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemA12"
                                                id="SkorTambahanJumlahBobotSubItemA12" disabled></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sedang menduduki jabatan struktural</td>
                                        <td>Sedang menjabat sebagai Kepala Program Studi / Sekretaris Program Studi /
                                            Kepala Laboratorium Program Studi</td>
                                        <td>Sedang menjabat sebagai Wakil Dekan / Kepala Pusat Penelitian tingkat
                                            Institusi</td>
                                        <td>Sedang menjabat sebagai Wakil Rektor/Direktur Pascasarjana/Dekan
                                            Fakultas/Ketua Lembaga</td>
                                        <td>Sedang menjabat sebagai Rektor</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Pengangkatan sebagai Pejabat Struktural</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA13" type="number"
                                                aria-label="A13" disabled></td>
                                        <td rowspan="2"><input id="scorMaxA13" type="number" aria-label="A13" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA13" type="number" aria-label="A13"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>A.13</td>
                                        <td>Dosen menduduki jabatan struktural Akademik di perguruan tinggi
                                        </td>
                                        <td><input type="radio" class="A13" name="A13" id="A13" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A13" name="A13" id="A13" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A13" name="A13" id="A13" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A13" name="A13" id="A13" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="A13" name="A13" id="A13" value="5"
                                                onclick="sum();">
                                    </tr>

                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Total Skor Pendidikan dan Pengajaran</td>
                                        <td><input type="teks" name="TotalSkorPendidikanPointA"
                                                id="TotalSkorPendidikanPointA" disabled></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 11</td>
                                        <td><input type="teks" name="TotalKelebihanA11" id="TotalKelebihanA11" disabled>
                                        </td>
                                        <td colspan="3">Nilai Pendidikan dan Pengajaran</td>
                                        <td><input type="teks" name="nilaiPendidikandanPengajaran"
                                                id="nilaiPendidikandanPengajaran" disabled></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 12</td>
                                        <td><input type="teks" name="TotalKelebihanA12" id="TotalKelebihanA12" disabled>
                                        </td>
                                        <td colspan="3" rowspan="2">Nilai Tambah Pendidikan dan Pengajaran</td>
                                        <td rowspan="2"><input type="teks" name="NilaiTambahPendidikanDanPengajaran"
                                                id="NilaiTambahPendidikanDanPengajaran" disabled></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor</td>
                                        <td><input type="teks" name="TotalKelebihanSkor" id="TotalKelebihanSkor"
                                                disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="6">Nilai Total Pendidikan & Pengajaran</td>
                                        <td><input type="teks" name="NilaiTotalPendidikanDanPengajaran"
                                                id="NilaiTotalPendidikanDanPengajaran" disabled></td>
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
    <script src="{{ asset('Assets/js/Input-point/scorPointACheked.js') }}"></script>
    <script src="{{ asset('Assets/js/Input-point/scorPointAForm.js') }}"></script>
    @endpush
</x-app-layout>
