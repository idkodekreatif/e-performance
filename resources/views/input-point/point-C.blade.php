<x-app-layout title="Form Input Point C">
    @push('style')

    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Forms</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point C}</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Point C</h4>
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
                                        <td>C</td>
                                        <td colspan="10" class="text-start">PENGABDIAN KEPADA MASYARAKAT</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Menjadi anggota/pengurus dalam organisasi skala lokal</td>
                                        <td>Menjadi anggota/pengurus dalam organisasi tingkat kota/kabupaten</td>
                                        <td>Menjadi anggota/pengurus dalam organisasi tingkat nasional</td>
                                        <td>Menjadi anggota/pengurus dalam organisasi tingkat internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                kartu anggota atau akses ke jurnal/website tertentu</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>C.1</td>
                                        <td>Dosen berperan sebagai pengurus atau anggota organisasi sosial
                                            kemasyarakatan (termasuk RT, RW, parpol, organisasi
                                            keagamaan, dll)
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
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
                                        <td>Tidak sama sekali / Menjadi anggota organisasi sosial kemasyarakatan secara
                                            otomatis</td>
                                        <td>Menjadi anggota aktif</td>
                                        <td>Menjadi Ketua Bidang / Ketua Seksi</td>
                                        <td>Menjadi Pengurus Inti (Sekretaris / Bendahara / Wakil Ketua)</td>
                                        <td>Menjadi Ketua Umum Organisasi / Penasihat / Penanggungjawab
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
                                        <td>C.2</td>
                                        <td>Peranan dosen dalam organisasi sosial kemasyarakatan
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
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
                                        <td>Tidak pernah menyampaikan orasi ilmiah</td>
                                        <td>Pernah menyampaikan orasi ilmiah 1 kali di lingkup IKBIS sendiri</td>
                                        <td>Pernah menyampaikan orasi ilmiah 1 kali di luar IKBIS sendiri</td>
                                        <td>Pernah menyampaikan orasi ilmiah lebih dari 1 kali di lingkup IKBIS sendiri
                                        </td>
                                        <td>Pernah menyampaikan orasi ilmiah lebih dari 1 kali di luar IKBIS sendiri
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                undangan/surat keterangan telah melakukan orasi
                                                ilmiah, dan makalah yang disampaikan</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>C.3</td>
                                        <td>Dosen menyampaikan orasi ilmiah dalam forum-forum kegiatan tradisi akademik
                                            seperti dies natalis, wisuda, simposium
                                            nasional, dll
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah orasi ilmiah (>1)</td>
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
                                        <td>menjadi pembicara/instruktur/pengajar/juri dalam kegiatan skala lokal</td>
                                        <td>menjadi pembicara/instruktur/pengajar/juri dalam kegiatan tingkat
                                            kota/kabupaten</td>
                                        <td>menjadi pembicara/instruktur/pengaja/juri dalam kegiatan tingkat regional
                                        </td>
                                        <td>menjadi pembicara/instruktur/pengaja/juri dalam kegiatan tingkat nasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat Tugas
                                                atau SK atau sertifikat yang menandakan dosen telah
                                                berperan serta dalam kegiatan pengabdian kepada
                                                masyarakat</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>C.4</td>
                                        <td>Dosen menjadi pembicara, instruktur ,pengajar pada seminar, lokakarya,
                                            dan
                                            aktivitas belajar mengajar untuk pengembangan
                                            suatu lembaga sosial kemasyarakatan di dalam/luar IKBIS, baik masyarakat
                                            umum maupun masyarakat kampus
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kegiatan yang dilakukan</td>
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
                                        <td>Menjadi salah satu instruktur dalam rangkaian kegiatan yang dilaksanakan
                                        </td>
                                        <td>Menjadi instruktur utama dalam kegiatan yang dilaksanakan</td>
                                        <td>Menjadi salah satu pembicara dalam suatu seminar/diskusi panel yang
                                            dilaksanakan
                                        </td>
                                        <td>Menjadi pembicara utama dalam suatu seminar/diskusi panel yang dilaksanakan
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat Tugas
                                                atau SK atau sertifikat yang menandakan dosen telah
                                                berperan serta dalam kegiatan pengabdian kepada
                                                masyarakat</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>C.5</td>
                                        <td>Peranan dosen dalam kegiatan seminar/lokakarya dan aktivitas belajar
                                            mengajar untuk pengembangan suatu lembaga sosial
                                            kemasyarakatan di dalam/luar IKBIS, baik masyarakat umum maupun masyarakat
                                            kampus
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah ormas yang diikuti</td>
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
                                        <td>Memberikan konsultasi kepada organisasi kemasyarakatan lokal
                                        </td>
                                        <td>Memberikan konsultasi kepada organisasi kemasyarakatan tingkat
                                            kota/kabupaten</td>
                                        <td>Memberikan konsultasi kepada organisasi kemasyarakatan tingkat regional
                                        </td>
                                        <td>Memberikan konsultasi kepada organisasi kemasyarakatan tingkat nasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat
                                                Keterangan dari organisasi yang memanfaatkan jasa dosen</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>C.6</td>
                                        <td>Dosen memberikan pelayanan konsultasi untuk meningkatkan kesejahteraan
                                            masyarakat (sifatnya nirlaba)
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah ormas yang dilayani</td>
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
                                        <td>Menyusun panduan dan disebarluaskan kepada masyarakat lokal
                                        </td>
                                        <td>Menyusun panduan dan disebarluaskan kepada masyarakat tingkat kota/kabupaten
                                        </td>
                                        <td>Menyusun panduan dan disebarluaskan kepada masyarakat tingkat regional
                                        </td>
                                        <td>Menyusun panduan dan disebarluaskan pada masyarakat nasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                panduan praktis</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>C.7</td>
                                        <td>Dosen menulis karya pengabdian kepada masyarakat dalam bentuk panduan
                                            praktis/terapan untuk dapat dimanfaatkan oleh
                                            masyarakat dan tidak dipublikasikan
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah karya yang dihasilkan</td>
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
                                        <td>Karya dosen dipublikasikan di tingkat lokal dalam jurnal/buku/prosiding
                                        </td>
                                        <td>Karya dosen dipublikasikan di tingkat regional dalam jurnal/buku/prosiding
                                        </td>
                                        <td>Karya dosen dipublikasikan di tingkat nasional dalam jurnal/buku/prosiding
                                        </td>
                                        <td>Karya dosen dipublikasikan di tingkat internasional dalam
                                            jurnal/buku/prosiding
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                buku/makalah/artikel yang dipublikasikan</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>C.8</td>
                                        <td>Dosen menulis karya pengabdian kepada masyarakat dalam bentuk panduan
                                            praktis/terapan untuk dapat dimanfaatkan oleh
                                            masyarakat dan tidak dipublikasikan
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah karya yang dihasilkan</td>
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
                                        <td>Melaksanakan kegiatan praktik nyata di dalam lingkup internal kampus
                                        </td>
                                        <td>Melaksanakan kegiatan praktik nyata di tingkat lokal
                                        </td>
                                        <td>Melaksanakan kegiatan praktik nyata di tingkat kota/kabupaten
                                        </td>
                                        <td>Melaksanakan kegiatan praktik nyata di tingkat nasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Laporan
                                                kegiatan pengabdian masyarakat</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>C.9</td>
                                        <td>Dosen melaksanakan implementasi pendidikan dan penelitian melalui praktik
                                            nyata di lapangan untuk dimanfaatkan kepada
                                            masyarakat
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kegiatan yang dilakukan</td>
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
                                        <td colspan="5">Total Skor Pengabdian Kepada Masyarakat</td>
                                        <td>0,334</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 1</td>
                                        <td>0</td>
                                        <td colspan="3" rowspan="4">Nilai Pengabdian Kepada Masyarakat</td>
                                        <td rowspan="4">11,69</td>
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
                                        <td colspan="2">Total Kelebihan Skor No. 4</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 5</td>
                                        <td>0</td>
                                        <td colspan="3" rowspan="6">Nilai Tambah Penelitian</td>
                                        <td rowspan="6">11,69</td>
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
                                        <td colspan="2">Total Kelebihan Skor</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="6">Nilai Total Pengabdian Kepada Masyarakat</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="6">Nilai Total UNSUR UTAMA</td>
                                        <td>17.15</td>
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
