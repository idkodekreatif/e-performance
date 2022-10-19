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
                                        <td rowspan="2">SK Rektor</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.1</td>
                                        <td>Dosen menjadi Pejabat Struktural Non Akademik</td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Dosen menginisiasi 1 MoU dalam 1 tahun penilaian</td>
                                        <td>Dosen menginisiasi >1 MoU dalam 1 tahun penilaian</td>
                                        <td>Dosen menginisiasi 1 MoA dalam 1 tahun penilaian</td>
                                        <td>Dosen menginisiasi >1 MoA dalam 1 tahun penilaian</td>
                                        <td rowspan="2">MoU yang dihasilkan</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.2</td>
                                        <td>Dosen menginisiasi kerjasama dengan lembaga lain dan berkaitan dengan
                                            kegiatan akademik (MoU dan atau MoA)</td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>Tidak sama sekali</td>
                                        <td>1 kali terlibat dalam Satgas</td>
                                        <td>2 kali terlibat dalam Satgas</td>
                                        <td> >2 kali terlibat dalam Satgas</td>
                                        <td rowspan="2">SK Rektor</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.3</td>
                                        <td>Dosen bergabung dalam satuan tugas marketing di tingkat Program Studi maupun
                                            Institusi</td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>Tidak sama sekali</td>
                                        <td>1 kali terlibat dalam Satgas</td>
                                        <td>2 kali terlibat dalam Satgas</td>
                                        <td> >2 kali terlibat dalam Satgas</td>
                                        <td rowspan="2">SK Rektor</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.4</td>
                                        <td>Dosen bergabung dalam satuan tugas non-marketing di tingkat Program Studi
                                            maupun Institusi</td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>Tidak sama sekali</td>
                                        <td>1 kali terlibat dalam Satgas</td>
                                        <td>2 kali terlibat dalam Satgas</td>
                                        <td> >2 kali terlibat dalam Satgas</td>
                                        <td rowspan="2">SK Rektor</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.5</td>
                                        <td>Dosen bergabung dalam kepanitiaan di tingkat Program Studi maupun Institusi
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
                                        <td colspan="3">Tidak diperhitungkan</td>
                                        <td> Sedang menjadi Mentor</td>
                                        <td rowspan="2">SK Mentor/ Dosen Senior</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>E.1.6</td>
                                        <td>Dosen berperan serta sebagai mentor
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
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
                                        <td rowspan="2">Fotokopi ijazah terakhir</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>E.2.1</td>
                                        <td>Gelar Akademis yang dimiliki oleh Dosen yang selaras dengan bidang ilmunya
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
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
                                        <td rowspan="2">SK Pembimbingan</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>E.2.2</td>
                                        <td>Dosen membimbing dalam menghasilkan Tesis dan Disertasi bagi mahasiswa
                                            strata 2 dan strata 3 (di PT lain)
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
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
                                        <td rowspan="2">Sertifikat Profesi</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>E.2.3</td>
                                        <td>Dosen mendapatkan sertifikat profesi berdasarkan bidang keilmuannya
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
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
                                        <td rowspan="2">SK Kursus/ kegiatan sejenis</td>
                                        <td rowspan="2" class="bg-warning"></td>
                                        <td rowspan="2"></td>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>E.2.4</td>
                                        <td>Dosen berusaha meningkatkan ilmunya dengan mengikuti kursus yang relevan
                                            untuk peningkatan kemampuannya pada
                                            proses-proses selaras Tridharma perguruan tinggi
                                        </td>
                                        <td><input type="radio" name="optradio" value="1"></td>
                                        <td><input type="radio" name="optradio" value="2"></td>
                                        <td><input type="radio" name="optradio" value="3"></td>
                                        <td><input type="radio" name="optradio" value="4"></td>
                                        <td><input type="radio" name="optradio" value="5"></td>
                                    </tr>



                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Total Skor Unsur Pengabdian kepada Institusi dan Pengembangan
                                            Diri</td>
                                        <td>0,334</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Nilai Total Unsur Pengabdian kpd Institusi dan Pengembangan Diri
                                        </td>
                                        <td>0,334</td>
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

    @endpush
</x-app-layout>
