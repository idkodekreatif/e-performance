<x-app-layout title="Form Input Point B">
    @push('style')

    @endpush

    <div class="col-xl col-lg">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Point B</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <div class="table-responsive">
                        <table class="table table-bordered border-2 table-sm text-center table-sm">
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
                                        <td rowspan="2"> 1, Sertifikat Hak Cipta <br>
                                            2, Formulir Pendaftaran Permohonan Paten <br>
                                            3, Sertifikat Hak Paten</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.1</td>
                                        <td>Dosen memiliki karya yang telah dipatenkan atau diakui secara nasional
                                            maupun internasional
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Dalam pertengahan proses pembuatan buku</td>
                                        <td>Dalam proses percetakan</td>
                                        <td>Diterbitkan dan diedarkan secara nasional</td>
                                        <td>Diterbitkan dan diedarkan secara Internasional
                                        </td>
                                        <td rowspan="2"> Bukti fisik monograf</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.2</td>
                                        <td>Dosen menghasilkan monograf yang relevan dengan bidang kelimuan
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Dalam pertengahan proses pembuatan buku</td>
                                        <td>Dalam proses percetakan</td>
                                        <td>Diterbitkan dan diedarkan secara nasional</td>
                                        <td>Diterbitkan dan diedarkan secara Internasional
                                        </td>
                                        <td rowspan="2">Bukti fisik buku referensi</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.3</td>
                                        <td>Dosen menghasilkan buku referensi yang relevan dengan bidang keilmuan
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>satu kali sebagai anggota penulis</td>
                                        <td>Lebih dari 1 kali sebagai anggota penulis</td>
                                        <td>Satu kali sebagai penulis utama/tunggal</td>
                                        <td>Lebih dari satu kali sebagai penulis utama/tunggal
                                        </td>
                                        <td rowspan="2">Bukti fisik monograf/buku</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>B.4</td>
                                        <td>Peran Dosen sebagai Penulis Utama/tunggal, Monograf/Buku yang diterbitkan
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
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
                                        <td rowspan="2">Bukti fisik jurnal ilmiah internasional dan bukti penerimaan
                                            naskah</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.5</td>
                                        <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah Internasional
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
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
                                        <td rowspan="2">Bukti fisik jurnal ilmiah nasional terakreditasi dan bukti
                                            penerimaan naskah</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.6</td>
                                        <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah nasional
                                            terakreditasi
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
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
                                        <td rowspan="2">Bukti fisik jurnal ilmiah nasional tidak terakreditasi dan bukti
                                            penerimaan naskah</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.7</td>
                                        <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah Nasional tidak
                                            terakreditasi / Jurnal Ilmiah Nasional
                                            ber-ISSN
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah kelebihan karya artikel (>3 karya)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>satu kali sebagai anggota penulis</td>
                                        <td>Lebih dari 1 kali sebagai anggota penulis</td>
                                        <td>Satu kali sebagai penulis utama/tunggal</td>
                                        <td>Lebih dari satu kali sebagai penulis utama/tunggal
                                        </td>
                                        <td rowspan="2">Bukti fisik jurnal</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>B.8</td>
                                        <td>Peran Dosen sebagai Penulis Utama/tunggal, dari jurnal yang diterbitkan
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
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
                                        <td rowspan="2">Bukti fisik sertifikat dan prosiding seminar</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.9</td>
                                        <td>Dosen membuat makalah dipresentasikan dalam seminar dan dimuat dalam
                                            prosiding internasional
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah kelebihan karya makalah (>2 makalah)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
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
                                        <td rowspan="2">Bukti fisik sertifikat dan prosiding seminar</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.10</td>
                                        <td>Dosen membuat makalah dipresentasikan dalam seminar dan dimuat dalam
                                            prosiding nasional/lokal
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah kelebihan karya makalah (>4 makalah)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
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
                                        <td rowspan="2">Bukti fisik sertifikat dan prosiding seminar</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.11</td>
                                        <td>Dosen membuat POSTER dipresentasikan dalam seminar dan prosiding
                                            internasional
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah kelebihan karya poster (>2 poster)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
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
                                        <td rowspan="2">Bukti fisik sertifikat dan prosiding seminar</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.12</td>
                                        <td>Dosen membuat POSTER dipresentasikan dalam seminar dan prosiding Nasional
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah kelebihan karya poster (>4 poster)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
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
                                        <td rowspan="2">Bukti fisik koran/majalah populer/umum</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.13</td>
                                        <td>Dosen menulis opini dalam Koran/Majalah populer / umum
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
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
                                        <td rowspan="2">Bukti fisik buku yang telah disimpan di Perpustakaan PT</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.14</td>
                                        <td>Dosen menghasilkan penelitian/pemikiran yang tidak dipublikasikan, tapi
                                            digunakan untuk kepentingan tertentu (dibukukan
                                            dan disimpan dalam perpustakaan PT)
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
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
                                        <td rowspan="2">Bukti fisik proposal dan bukti fisik surat/surel penerimaan
                                            proposal</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.15</td>
                                        <td>Dosen membuat proposal penelitian, karya/desain teknologi, seni dan sastra
                                            dengan dana hibah
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>satu kali sebagai anggota peneliti</td>
                                        <td>Lebih dari 1 kali sebagai anggota peneliti</td>
                                        <td>Satu kali sebagai peneliti utama/tunggal</td>
                                        <td>lebih dari 1 kali sebagai peneliti utama/tunggal
                                        </td>
                                        <td rowspan="2">Bukti fisik proposal dan bukti fisik surat/surel penerimaan
                                            proposal</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>B.16</td>
                                        <td>Peran Dosen dlm pembuatan proposal penelitian, karya/disain teknologi, seni
                                            dan sastra
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
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
                                        <td rowspan="2">Bukti fisik surat kontrak penelitian/surat penerimaan dana
                                            hibah, dan jurnal penelitian</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">B.17</td>
                                        <td>Dosen melakukan penelitian dengan dana hibah
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>satu kali sebagai anggota peneliti</td>
                                        <td>Lebih dari 1 kali sebagai anggota peneliti</td>
                                        <td>Satu kali sebagai peneliti utama/tunggal</td>
                                        <td>lebih dari 1 kali sebagai peneliti utama/tunggal
                                        </td>
                                        <td rowspan="2">Bukti fisik proposal dan bukti fisik surat/surel penerimaan
                                            proposal</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>B.18</td>
                                        <td>Peran Dosen dalam penelitian
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
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
    {{-- <script src="{{ asset('Assets/js/Input-point/inputpoint.js') }}"></script> --}}
    <script>
        $(document).ready(function () {
            $("#mis").keyup(function () {
            var totalScore = parseInt($("#point1").val()) + parseInt($("#point2").val());
            var gpa = totalScore / 5;
            $("#resultScore").val(totalScore);
            $("#gpa").val(gpa);
            });
            });
    </script>
    @endpush
</x-app-layout>
