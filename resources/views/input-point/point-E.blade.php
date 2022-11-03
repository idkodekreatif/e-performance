<x-app-layout title="Form Input Point E">
    @push('style')

    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Forms</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point E</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Point E</h4>
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
                                        <td>E.1</td>
                                        <td colspan="10" class="text-start">PPENGABDIAN KEPADA INSTITUSI</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Dosen tidak pernah menjadi Pejabat Struktural Non Akademik</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>Dosen pernah menjadi Pejabat Struktural Non Akademik dalam periode
                                            organisasi yang lalu</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>Dosen sedang menjabat sebagai Pejabat Struktural non Akademik</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Rektor</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorE1_1" type="number"
                                                aria-label="E1_1" disabled></td>
                                        <td rowspan="2"><input id="scorMaxE1_1" type="number" aria-label="E1_1"
                                                disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemE1_1" type="number" aria-label="E1_1"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.1</td>
                                        <td>Dosen menjadi Pejabat Struktural Non Akademik</td>
                                        <td><input type="radio" class="E1_1" name="E1_1" id="E1_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_1" name="E1_1" id="E1_1" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_1" name="E1_1" id="E1_1" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_1" name="E1_1" id="E1_1" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_1" name="E1_1" id="E1_1" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Dosen menginisiasi 1 MoU dalam 1 tahun penilaian</td>
                                        <td>Dosen menginisiasi >1 MoU dalam 1 tahun penilaian</td>
                                        <td>Dosen menginisiasi 1 MoA dalam 1 tahun penilaian</td>
                                        <td>Dosen menginisiasi >1 MoA dalam 1 tahun penilaian</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload MoU yang
                                                dihasilkan</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorE1_2" type="number"
                                                aria-label="E1_2" disabled></td>
                                        <td rowspan="2"><input id="scorMaxE1_2" type="number" aria-label="E1_2"
                                                disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemE1_2" type="number" aria-label="E1_2"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.2</td>
                                        <td>Dosen menginisiasi kerjasama dengan lembaga lain dan berkaitan dengan
                                            kegiatan akademik (MoU dan atau MoA)</td>
                                        <td><input type="radio" class="E1_2" name="E1_2" id="E1_2" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_2" name="E1_2" id="E1_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_2" name="E1_2" id="E1_2" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_2" name="E1_2" id="E1_2" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_2" name="E1_2" id="E1_2" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>Tidak sama sekali</td>
                                        <td>1 kali terlibat dalam Satgas</td>
                                        <td>2 kali terlibat dalam Satgas</td>
                                        <td> >2 kali terlibat dalam Satgas</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload
                                                SK Rektor</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorE1_3" type="number"
                                                aria-label="E1_3" disabled></td>
                                        <td rowspan="2"><input id="scorMaxE1_3" type="number" aria-label="E1_3"
                                                disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemE1_3" type="number" aria-label="E1_3"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.3</td>
                                        <td>Dosen bergabung dalam satuan tugas marketing di tingkat Program Studi maupun
                                            Institusi</td>
                                        <td><input type="radio" class="E1_3" name="E1_3" id="E1_3" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_3" name="E1_3" id="E1_3" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_3" name="E1_3" id="E1_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_3" name="E1_3" id="E1_3" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_3" name="E1_3" id="E1_3" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>Tidak sama sekali</td>
                                        <td>1 kali terlibat dalam Satgas</td>
                                        <td>2 kali terlibat dalam Satgas</td>
                                        <td> >2 kali terlibat dalam Satgas</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload
                                                SK Rektor</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorE1_4" type="number"
                                                aria-label="E1_4" disabled></td>
                                        <td rowspan="2"><input id="scorMaxE1_4" type="number" aria-label="E1_4"
                                                disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemE1_4" type="number" aria-label="E1_4"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.4</td>
                                        <td>Dosen bergabung dalam satuan tugas non-marketing di tingkat Program Studi
                                            maupun Institusi</td>
                                        <td><input type="radio" class="E1_4" name="E1_4" id="E1_4" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_4" name="E1_4" id="E1_4" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_4" name="E1_4" id="E1_4" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_4" name="E1_4" id="E1_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_4" name="E1_4" id="E1_4" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>Tidak sama sekali</td>
                                        <td>1 kali terlibat dalam Satgas</td>
                                        <td>2 kali terlibat dalam Satgas</td>
                                        <td> >2 kali terlibat dalam Satgas</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload
                                                SK Rektor</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorE1_5" type="number"
                                                aria-label="E1_5" disabled></td>
                                        <td rowspan="2"><input id="scorMaxE1_5" type="number" aria-label="E1_5"
                                                disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemE1_5" type="number" aria-label="E1_5"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.5</td>
                                        <td>Dosen bergabung dalam kepanitiaan di tingkat Program Studi maupun Institusi
                                        </td>
                                        <td><input type="radio" class="E1_5" name="E1_5" id="E1_5" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_5" name="E1_5" id="E1_5" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_5" name="E1_5" id="E1_5" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_5" name="E1_5" id="E1_5" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_5" name="E1_5" id="E1_5" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td colspan="3">Tidak diperhitungkan</td>
                                        <td> Sedang menjadi Mentor</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload
                                                SK Mentor/ Dosen Senior</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorE1_6" type="number"
                                                aria-label="E1_6" disabled></td>
                                        <td rowspan="2"><input id="scorMaxE1_6" type="number" aria-label="E1_6"
                                                disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemE1_6" type="number" aria-label="E1_6"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.6</td>
                                        <td>Dosen berperan serta sebagai mentor
                                        </td>
                                        <td><input type="radio" class="E1_6" name="E1_6" id="E1_6" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_6" name="E1_6" id="E1_6" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_6" name="E1_6" id="E1_6" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_6" name="E1_6" id="E1_6" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E1_6" name="E1_6" id="E1_6" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>E.2</td>
                                        <td colspan="10" class="text-start">PPENGABDIAN KEPADA INSTITUSI</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Dosen bergelar S1 dan tidak sedang studi lanjut</td>
                                        <td>Dosen bergelar S1 dan sedang studi lanjut</td>
                                        <td>Dosen bergelar S2</td>
                                        <td>Dosen bergelar S2 dan sedang studi lanjut</td>
                                        <td>Dosen bergelar S3</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload
                                                Fotokopi ijazah terakhir</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorE2_1" type="number"
                                                aria-label="E2_1" disabled></td>
                                        <td rowspan="2"><input id="scorMaxE2_1" type="number" aria-label="E2_1"
                                                disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemE2_1" type="number" aria-label="E2_1"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>E.2.1</td>
                                        <td>Gelar Akademis yang dimiliki oleh Dosen yang selaras dengan bidang ilmunya
                                        </td>
                                        <td><input type="radio" class="E2_1" name="E2_1" id="E2_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_1" name="E2_1" id="E2_1" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_1" name="E2_1" id="E2_1" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_1" name="E2_1" id="E2_1" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_1" name="E2_1" id="E2_1" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sedang membimbing Tesis dan/ atau</td>
                                        <td>Membimbing tesis dan/ atau disertasi sebagai pembimbing pendamping 1 - 4
                                            lulusan</td>
                                        <td>Membimbing tesis dan/ atau disertasi sebagai pembimbing pendamping >4
                                            lulusan</td>
                                        <td>Membimbing tesis dan/ atau disertasi sebagai pembimbing utama 1 - 4 lulusan
                                        </td>
                                        <td>Membimbing tesis dan/ atau disertasi sebagai pembimbing utama >4 lulusan
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload
                                                SK Pembimbingan</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorE2_2" type="number"
                                                aria-label="E2_2" disabled></td>
                                        <td rowspan="2"><input id="scorMaxE2_2" type="number" aria-label="E2_2"
                                                disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemE2_2" type="number" aria-label="E2_2"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>E.2.2</td>
                                        <td>Dosen membimbing dalam menghasilkan Tesis dan Disertasi bagi mahasiswa
                                            strata 2 dan strata 3 (di PT lain)
                                        </td>
                                        <td><input type="radio" class="E2_2" name="E2_2" id="E2_2" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_2" name="E2_2" id="E2_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_2" name="E2_2" id="E2_2" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_2" name="E2_2" id="E2_2" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_2" name="E2_2" id="E2_2" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak memiliki sertifikat profesi</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>Dosen memiliki 1 sertifikat profesi</td>
                                        <td>Tidak diperhitungkan
                                        </td>
                                        <td>Dosen memiliki lebih dari 1 sertifikat profesi
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload
                                                Sertifikat Profesi</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorE2_3" type="number"
                                                aria-label="E2_3" disabled></td>
                                        <td rowspan="2"><input id="scorMaxE2_3" type="number" aria-label="E2_3"
                                                disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemE2_3" type="number" aria-label="E2_3"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>E.2.3</td>
                                        <td>Dosen mendapatkan sertifikat profesi berdasarkan bidang keilmuannya
                                        </td>
                                        <td><input type="radio" class="E2_3" name="E2_3" id="E2_3" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_3" name="E2_3" id="E2_3" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_3" name="E2_3" id="E2_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_3" name="E2_3" id="E2_3" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_3" name="E2_3" id="E2_3" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah mengikuti kursus</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>Dosen pernah mengikuti kursus dalam 1 TA yang lalu</td>
                                        <td>Tidak diperhitungkan
                                        </td>
                                        <td>Dosen sedang mengikuti kursus/telah mengikuti kursus dalam Tahun Akademik
                                            penilaian
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload
                                                SK Kursus/ kegiatan sejenis</label>
                                            <input id="formFileSm" type="file">
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorE2_4" type="number"
                                                aria-label="E2_4" disabled></td>
                                        <td rowspan="2"><input id="scorMaxE2_4" type="number" aria-label="E2_4"
                                                disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemE2_4" type="number" aria-label="E2_4"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>E.2.4</td>
                                        <td>Dosen berusaha meningkatkan ilmunya dengan mengikuti kursus yang relevan
                                            untuk peningkatan kemampuannya pada
                                            proses-proses selaras Tridharma perguruan tinggi
                                        </td>
                                        <td><input type="radio" class="E2_4" name="E2_4" id="E2_4" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_4" name="E2_4" id="E2_4" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_4" name="E2_4" id="E2_4" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_4" name="E2_4" id="E2_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="E2_4" name="E2_4" id="E2_4" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>



                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Total Skor Unsur Pengabdian kepada Institusi dan Pengembangan
                                            Diri</td>
                                        <td><input type="teks" name="SumSkor" id="SumSkor" disabled></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Nilai Total Unsur Pengabdian kpd Institusi dan Pengembangan Diri
                                        </td>
                                        <td><input type="teks" name="NilaiUnsurPengabdian" id="NilaiUnsurPengabdian"
                                                disabled></td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Nilai Total Unsur Non-Tri Dharma</td>
                                        <td>0,334</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Nilai Kinerja Dosen</td>
                                        <td>0,334</td>
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
    <script src="{{ asset('Assets/js/Input-point/ScorPointE.js') }}"></script>
    @endpush
</x-app-layout>
