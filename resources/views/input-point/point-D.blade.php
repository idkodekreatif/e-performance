<x-app-layout title="Form Input Point D">
    @push('style')

    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Forms</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point D</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Point D</h4>
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
                                        <td>D</td>
                                        <td colspan="10" class="text-start">UNSUR PENUNJANG</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Menjadi anggota senat fakultas</td>
                                        <td>Menjadi anggota senat Institusi</td>
                                        <td>Menjadi Ketua/Sekretaris Senat fakultas</td>
                                        <td>Menjadi Ketua/Sekretaris Senat Institusi</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK Yayasan
                                                yang menyatakan keanggotaan dalam Senat Akademik</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input
                                                class="form-control form-control-sm mis" id="mis" type="number"
                                                placeholder="Point"></td>
                                        <td rowspan="2"><input class="form-control form-control-sm gpa" id="gpa"
                                                type="number" placeholder="Point"></td>
                                        <td rowspan="2"><input class="form-control form-control-sm hasil"
                                                id="resultScore" type="number" placeholder="Point"></td>
                                    </tr>
                                    <tr>
                                        <td>D.1</td>
                                        <td>Dosen menjadi ketua, sekretaris atau anggota senat fakultas/Institusi</td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Terlibat dalam Kepanitiaan Kegiatan Internal / Lokal</td>
                                        <td>Terlibat dalam Kepanitiaan Kegiatan Regional</td>
                                        <td>Terlibat dalam Kepanitiaan Kegiatan Nasional</td>
                                        <td>Terlibat dalam Kepanitiaan Kegiatan Internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK atau
                                                Surat Tugas yang menyatakan keanggotaan dosen</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>D.2</td>
                                        <td>Dosen menjadi anggota pada kepanitiaan tertentu (terkait Tri Dharma)
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kepanitiaan yang diikuti</td>
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
                                        <td>Menjadi anggota dari suatu bidang kerja</td>
                                        <td>Menjadi Ketua bidang/Koordinator suatu bidang kerja</td>
                                        <td>Menjadi Pengurus inti (Sekretaris / Bendahara) dalam kegiatan</td>
                                        <td>Menjadi Ketua/Wakil Ketua dalam kegiatan
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Pengangkatan dosen sebagai pengurus dalam organisasi
                                                kemasyarakatan tertentu</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>D.3</td>
                                        <td>Peranan dosen dalam kepanitiaan tertentu
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah peranan dosen dalam kepanitiaan</td>
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
                                        <td>Pernah menjadi mitra bestari/reviewer pada 1 tahun penilaian yang lampau
                                        </td>
                                        <td>Sedang menjadi mitra bestari/reviewer jurnal ilmiah tidak terakreditasi</td>
                                        <td>Sedang menjadi mitra bestari/reviewer jurnal ilmiah nasional terakreditasi
                                        </td>
                                        <td>Sedang menjadi mitra bestari/reviewer jurnal ilmiah internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat
                                                Keterangan dan Bukti Jurnal</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>D.4</td>
                                        <td>Dosen menjadi mitra bestari/reviewer dalam jurnal ilmiah
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah jurnal</td>
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
                                        <td>Pernah menjadi redaktur/editor pada 1 tahun penilaian yang lampau</td>
                                        <td>Sedang menjadi redaktur/editor terbitan lokal</td>
                                        <td>Sedang menjadi redaktur/editor terbitan nasional
                                        </td>
                                        <td>Sedang menjadi redaktur/editor terbitan internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat
                                                Keterangan dan Bukti Majalah/terbitan populer lainnya</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>D.5</td>
                                        <td>Dosen menjadi redaktur/editor dalam suatu terbitan populer yang terkait erat
                                            dengan bidang keilmuannya
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah terbitan populer</td>
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
                                        <td>Menjadi anggota di tingkat nasional
                                        </td>
                                        <td>Menjadi anggota di tingkat internasional</td>
                                        <td>Menjadi pengurus di tingkat nasional
                                        </td>
                                        <td>Menjadi pengurus di tingkat internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Kartu
                                                Keanggotaan / Surat Keterangan anggota</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>D.6</td>
                                        <td>Dosen menjadi anggota organisasi asosiasi profesi, yang terkait bidang
                                            keilmuannya
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah organisasi asosiasi profesi</td>
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
                                        <td>Menjadi anggota delegasi dalam 1 pertemuan internasional
                                        </td>
                                        <td>Menjadi anggota delegasi dalam 2 pertemuan internasional</td>
                                        <td>Menjadi anggota delegasi dalam 3 pertemuan internasional
                                        </td>
                                        <td>Menjadi anggota delegasi dalam 4 pertemuan internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat Tugas
                                                yang menyatakan dosen menjadi anggota delegasi
                                                internasional</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>D.7</td>
                                        <td>Dosen menjadi anggota delegasi nasional dalam pertemuan internasional
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah (>4 pertemuan internasional)</td>
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
                                        <td>Menjadi peserta dalam suatu pertemuan ilmiah internal IKBIS (minimal 5
                                            pertemuan internal)
                                        </td>
                                        <td>Menjadi peserta dalam suatu pertemuan ilmiah tingkat lokal dan regional dan
                                            minimal 4 kali dalam pertemuan internal
                                        </td>
                                        <td>Menjadi peserta dalam suatu pertemuan ilmiah tingkat nasional dan minimal 3
                                            kali dalam pertemuan internal / menjadi
                                            moderator di tingkat lokal dan regional
                                        </td>
                                        <td>Menjadi peserta dalam suatu pertemuan ilmiah tingkat internasional dan
                                            minimal 2 kali dalam pertemuan internal / menjadi
                                            moderator di tingkat nasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Presensi
                                                Forum Komunikasi Ilmiah dan Sertifikat Seminar</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>D.8</td>
                                        <td>Dosen berperan serta dalam pertemuan ilmiah (misalnya: Seminar, Simposium)
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah pertemuan ilmiah</td>
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
                                        <td>Mendapatkan tanda jasa/penghargaan internal IKBIS
                                        </td>
                                        <td>Mendapatkan tanda jasa/penghargaan tingkat lokal (kota/kabupaten)
                                        </td>
                                        <td>Mendapatkan tanda jasa/penghargaan tingkat nasional
                                        </td>
                                        <td>Mendapatkan tanda jasa/penghargaan tingkat internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Piagam
                                                Penghargaan dan atau SK yang menyertai</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>D.9</td>
                                        <td>Dosen mendapatkan tanda jasa/penghargaan
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah tanda jasa</td>
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
                                        <td>Pernah menulis buku pelajaran SMA ke bawah pada tahun penilaian sebelumnya
                                        </td>
                                        <td>Menulis buku SD atau setingkat
                                        </td>
                                        <td>Menulis buku SMP atau setingkat
                                        </td>
                                        <td>Menulis buku SMA atau setingkat
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti Fisik
                                                Buku</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>D.10</td>
                                        <td>Dosen menulis buku pelajaran SMA ke bawah yang diterbitkan dan diedarkan
                                            secara nasional
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah buku yang diterbitkan</td>
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
                                        <td>Tidak diperhitungkan
                                        </td>
                                        <td>Tidak Sama Sekali</td>
                                        <td>Berprestasi di tingkat lokal/regional
                                        </td>
                                        <td>Berprestasi di tingkat nasional
                                        </td>
                                        <td>Berprestasi di tingkat internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Piagam
                                                Penghargaan dan atau SK yang menyertai</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>D.11</td>
                                        <td>Dosen memiliki prestasi di bidang olah raga/kesenian/humaniora (menjadi duta
                                            besar organisasi tertentu atau negara
                                            tertentu)
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah prestasi</td>
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
                                        <td colspan="5"></td>
                                        <td colspan="5">Total Skor Unsur Penunjang</td>
                                        <td>0,334</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 2</td>
                                        <td>0</td>
                                        <td colspan="3" rowspan="4">Nilai Unsur Penunjang</td>
                                        <td rowspan="4">11,69</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 3</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 4</td>
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
                                        <td colspan="3" rowspan="7">Nilai Tambah Unsur Penunjang</td>
                                        <td rowspan="7">11,69</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 7</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 8</td>
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
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 11</td>
                                        <td>0</td>
                                    </tr>


                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="6">Nilai Total Unsur Penunjang</td>
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

    @endpush
</x-app-layout>
