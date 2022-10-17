<x-app-layout title="Form Input Point A">
    @push('style')

    @endpush

    <div class="col-xl col-lg">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Point A</h4>
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
                                        <td>A</td>
                                        <td colspan="10" class="text-start">PENDIDIKAN DAN PENGAJARAN</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Nilai rerata < 2.00 (KURANG)</td>
                                        <td>Nilai rerata>=2.00 - < 3.00 </td>
                                        <td>Nilai rerata >=3.00 - < 3.60 </td>
                                        <td>Nilai rerata >=3.60 - < 3.80 </td>
                                        <td>Nilai rerata >=3.80 - 4.00</td>
                                        <td rowspan="2">Hasil evaluasi perkuliahan</td>
                                        <td rowspan="2" class="bg-warning"><input
                                                class="form-control form-control-sm mis" id="mis" type="number"
                                                placeholder="Point"></td>
                                        <td rowspan="2"><input class="form-control form-control-sm gpa" id="gpa"
                                                type="number" placeholder="Point"></td>
                                        <td rowspan="2"><input class="form-control form-control-sm hasil"
                                                id="resultScore" type="number" placeholder="Point"></td>
                                    </tr>
                                    <tr>
                                        <td>A.1</td>
                                        <td>Nilai rerata evaluasi perkuliahan untuk sem. Gasal - sem. Genap</td>
                                        <td><input class="form-control form-control-sm point1" id="point1" type="number"
                                                min="0" max="5" placeholder="Point"></td>
                                        <td><input class="form-control form-control-sm point2" id="point2" type="number"
                                                min="0" max="5" placeholder="Point"></td>
                                        <td><input class="form-control form-control-sm point3" id="point3" type="number"
                                                min="0" max="5" placeholder="Point"></td>
                                        <td><input class="form-control form-control-sm point4" id="point4" type="number"
                                                min="0" max="5" placeholder="Point"></td>
                                        <td><input class="form-control form-control-sm point5" id="point5" type="number"
                                                min="0" max="5" placeholder="Point"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak menyusun sama sekali</td>
                                        <td>Menyusun kurang dari 25% untuk mata kuliah yang diasuh</td>
                                        <td>Menyusun untuk 25% - 50% dari mata kuliah yang diasuh</td>
                                        <td>Menyusun untuk 51% - 75% dari mata kuliah yang diasuh</td>
                                        <td>Menyusun untuk lebih dari 75% mata kuliah yang diasuh</td>
                                        <td rowspan="2">Checklist RPS dari Prodi</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>A.2</td>
                                        <td>Dosen menyusun RPS dari setiap mata kuliah yang diasuhnya dalam satu tahun
                                            akademik</td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Kurang dari 2 sks</td>
                                        <td>Mengampu mata kuliah dengan total 3 - 5 sks</td>
                                        <td>Mengampu mata kuliah dengan total 6 - 8 sks</td>
                                        <td>Mengampu mata kuliah dengan total 9 - 11 sks</td>
                                        <td>Mengampu mata kuliah dengan rata-rata 12-13 sks atau lebih, per semester
                                        </td>
                                        <td rowspan="2">Jumlah SKS</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>A.3</td>
                                        <td>Dosen menjadi pengampu mata kuliah</td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak membimbing mahasiswa sama sekali</td>
                                        <td>Membimbing 1 mata kuliah dengan tugas akhir seminar</td>
                                        <td>Membimbing 2 - 3 mata kuliah dengan tugas akhir seminar</td>
                                        <td>Membimbing 4 mata kuliah dengan tugas akhir seminar</td>
                                        <td>Membimbing >4 mata kuliah dengan tugas akhir seminar</td>
                                        <td rowspan="2">SK Pembimbing dan Keterangan Prodi</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>A.4</td>
                                        <td>Dosen menjadi pembimbing seminar akhir mahasiswa dalam suatu mata kuliah
                                            yang mensyaratkan seminar dan pembuatan karya
                                            ilmiah tertentu untuk kelulusannya</td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak membimbing mahasiswa PKL/ PPM/KKM</td>
                                        <td>Membimbing mahasiswa PKL/ PPM/KKM (1 kelompok PPM/ 1 mahasiswa PKL)</td>
                                        <td>Membimbing mahasiswa PKL dan/ atau PPM/KKM (2 - 4 mahasiswa)</td>
                                        <td>Membimbing mahasiswa PKL dan/ atau PPM/KKM (5 - 7 mahasiswa)</td>
                                        <td>Membimbing mahasiswa PKL dan/ atau PPM/KKM (8 - 10 mahasiswa, atau lebih)
                                        </td>
                                        <td rowspan="2">SK Pembimbingan</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>A.5</td>
                                        <td>Dosen membimbing Praktik Kerja Lapangan atau Program Pemberdayaan Masyarakat
                                            atau Kuliah Kerja Mahasiswa (1 kelompok PPM
                                            dihitung 2 mahasiswa)</td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sedang membimbing Skripsi</td>
                                        <td>Membimbing skripsi sebagai pembimbing pendamping (1 - 8 lulusan)</td>
                                        <td>Membimbing skripsi sebagai pembimbing pendamping (>8 lulusan)</td>
                                        <td>Membimbing skripsi sebagai pembimbing utama (1 - 8 lulusan)</td>
                                        <td>Membimbing skripsi sebagai pembimbing utama (>8 lulusan)</td>
                                        <td rowspan="2">SK Pembimbingan</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>A.6</td>
                                        <td>Dosen membimbing dalam menghasilkan Skripsi bagi mahasiswa strata 1 atau
                                            Tugas Akhir bagi mahasiswa diploma 3</td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah menguji dalam ujian akhir mahasiswa</td>
                                        <td>Dosen menjadi anggota penguji (1 - 8 mahasiswa)</td>
                                        <td>Dosen menjadi anggota penguji (> 8 mahasiswa)</td>
                                        <td>Dosen menjadi Ketua Penguji (1 - 8 mahasiswa)</td>
                                        <td>Dosen menjadi Ketua Penguji (> 8 mahasiswa)</td>
                                        <td rowspan="2">SK penunjukkan sebagai penguji</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>A.7</td>
                                        <td>Dosen bertugas sebagai penguji pada ujian akhir mahasiswa</td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sedang menjadi pembimbing akademik (dosen PA/dosen wali)</td>
                                        <td>Menjadi pembimbing akademik (1 - 8 mahasiswa)</td>
                                        <td>Menjadi pembimbing akademik (9 - 10 mahasiswa)</td>
                                        <td>Menjadi pembimbing akademik (11 - 12 mahasiswa)</td>
                                        <td>Menjadi pembimbing akademik (>12 mahasiswa)</td>
                                        <td rowspan="2">SK Dosen Pembimbing Akademik
                                            (Dosen PA/Dosen Wali)</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>A.8</td>
                                        <td>Dosen membimbing akademik /dosen pembimbing akademik (dosen PA/dosen wali)
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
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
                                        <td rowspan="2">Keterangan dari Prodi dan BAAK</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>A.9</td>
                                        <td>Dosen PA/Dosen Wali membimbing kelancaran studi mahasiswa yang dibimbingnya
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sedang menjadi pembina kegiatan akademik maupun kemahasiswaan</td>
                                        <td>Menjadi pembina 1 (satu) kegiatan kemahasiswaan saja</td>
                                        <td>Menjadi penasihat akademik saja</td>
                                        <td>Menjadi penasihat akademik dan pembina 1 kegiatan kemahasiswaan</td>
                                        <td>Menjadi penasihat akademik dan pembina kegiatan kemahasiswaan lebih dari 1
                                        </td>
                                        <td rowspan="2">Keterangan dari Prodi</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>A.10</td>
                                        <td>Dosen menjadi pembina dalam kegiatan mahasiswa dalam bidang akademik dan
                                            kemahasiswaan
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
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
                                        <td rowspan="2">Bukti tertulis terkait metode pembelajaran baru yang telah
                                            disampaikan</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">A.11</td>
                                        <td>Dosen berhasil menemukan metode pembelajaran yang inovatif, dilengkapi
                                            dengan media pembelajaran dan evaluasi
                                            pembelajaran yang tertulis dan tersimpan dalam perpustakaan IKBIS.
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
                                        <td rowspan="2">Bukti fisik bahan pengajaran yang dihasilkan, dan jumlah mata
                                            kuliah diperhitungkan</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">A.12</td>
                                        <td>Dosen mengembangkan bahan pengajaran sebagai hasil pengembangan inovatif
                                            materi substansi pengajaran
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
                                        <td>Tidak sedang menduduki jabatan struktural</td>
                                        <td>Sedang menjabat sebagai Kepala Program Studi / Sekretaris Program Studi /
                                            Kepala Laboratorium Program Studi</td>
                                        <td>Sedang menjabat sebagai Wakil Dekan / Kepala Pusat Penelitian tingkat
                                            Institusi</td>
                                        <td>Sedang menjabat sebagai Wakil Rektor/Direktur Pascasarjana/Dekan
                                            Fakultas/Ketua Lembaga</td>
                                        <td>Sedang menjabat sebagai Rektor</td>
                                        <td rowspan="2">SK Pengangkatan sebagai Pejabat Struktural</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>A.13</td>
                                        <td>Dosen menduduki jabatan struktural Akademik di perguruan tinggi
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Total Skor Pendidikan dan Pengajaran</td>
                                        <td>0,334</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 9</td>
                                        <td>0</td>
                                        <td colspan="3">Nilai Pendidikan dan Pengajaran</td>
                                        <td>11,69</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 10</td>
                                        <td>0</td>
                                        <td colspan="3" rowspan="2">Nilai Tambah Pendidikan dan Pengajaran</td>
                                        <td rowspan="2">11,69</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="6">Nilai Total Pendidikan & Pengajaran</td>
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
