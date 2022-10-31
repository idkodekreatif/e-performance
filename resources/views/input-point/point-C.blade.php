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
                                        <td rowspan="2" class="bg-warning"><input id="scorC1" type="number"
                                                aria-label="C1" disabled></td>
                                        <td rowspan="2"><input id="scorMaxC1" type="number" aria-label="C1" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC1" type="number" aria-label="C1"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>C.1</td>
                                        <td>Dosen berperan sebagai pengurus atau anggota organisasi sosial
                                            kemasyarakatan (termasuk RT, RW, parpol, organisasi
                                            keagamaan, dll)
                                        </td>
                                        <td><input type="radio" class="C1" name="C1" id="C1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C1" name="C1" id="C1" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C1" name="C1" id="C1" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C1" name="C1" id="C1" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C1" name="C1" id="C1" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC1_2"
                                                id="JumlahYangDihasilkanC1_2" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC1_3"
                                                id="JumlahYangDihasilkanC1_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC1_4"
                                                id="JumlahYangDihasilkanC1_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC1_5"
                                                id="JumlahYangDihasilkanC1_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanC1"
                                                id="JumlahSkorYangDiHasilkanC1" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorC1"
                                                id="SkorTambahanJumlahSkorC1" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanC1_2" id="SkorTambahanC1_2" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC1_3" id="SkorTambahanC1_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC1_4" id="SkorTambahanC1_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC1_5" id="SkorTambahanC1_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahC1" id="SkorTambahanJumlahC1"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemC1"
                                                id="SkorTambahanJumlahBobotSubItemC1" disabled></td>
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
                                        <td rowspan="2" class="bg-warning"><input id="scorC2" type="number"
                                                aria-label="C2" disabled></td>
                                        <td rowspan="2"><input id="scorMaxC2" type="number" aria-label="C2" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC2" type="number" aria-label="C2"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>C.2</td>
                                        <td>Peranan dosen dalam organisasi sosial kemasyarakatan
                                        </td>
                                        <td><input type="radio" class="C2" name="C2" id="C2" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C2" name="C2" id="C2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C2" name="C2" id="C2" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C2" name="C2" id="C2" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C2" name="C2" id="C2" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC2_2"
                                                id="JumlahYangDihasilkanC2_2" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC2_3"
                                                id="JumlahYangDihasilkanC2_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC2_4"
                                                id="JumlahYangDihasilkanC2_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC2_5"
                                                id="JumlahYangDihasilkanC2_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanC2"
                                                id="JumlahSkorYangDiHasilkanC2" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorC2"
                                                id="SkorTambahanJumlahSkorC2" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanC2_2" id="SkorTambahanC2_2" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC2_3" id="SkorTambahanC2_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC2_4" id="SkorTambahanC2_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC2_5" id="SkorTambahanC2_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahC2" id="SkorTambahanJumlahC2"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemC2"
                                                id="SkorTambahanJumlahBobotSubItemC2" disabled></td>
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
                                        <td rowspan="2" class="bg-warning"><input id="scorC3" type="number"
                                                aria-label="C3" disabled></td>
                                        <td rowspan="2"><input id="scorMaxC3" type="number" aria-label="C3" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC3" type="number" aria-label="C3"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>C.3</td>
                                        <td>Dosen menyampaikan orasi ilmiah dalam forum-forum kegiatan tradisi akademik
                                            seperti dies natalis, wisuda, simposium
                                            nasional, dll
                                        </td>
                                        <td><input type="radio" class="C3" name="C3" id="C3" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C3" name="C3" id="C3" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C3" name="C3" id="C3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C3" name="C3" id="C3" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C3" name="C3" id="C3" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah orasi ilmiah (>1)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC3_4"
                                                id="JumlahYangDihasilkanC3_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC3_5"
                                                id="JumlahYangDihasilkanC3_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanC3"
                                                id="JumlahSkorYangDiHasilkanC3" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorC3"
                                                id="SkorTambahanJumlahSkorC3" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanC3_4" id="SkorTambahanC3_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC3_5" id="SkorTambahanC3_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahC3" id="SkorTambahanJumlahC3"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemC3"
                                                id="SkorTambahanJumlahBobotSubItemC3" disabled></td>
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
                                        <td rowspan="2" class="bg-warning"><input id="scorC4" type="number"
                                                aria-label="C4" disabled></td>
                                        <td rowspan="2"><input id="scorMaxC4" type="number" aria-label="C4" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC4" type="number" aria-label="C4"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>C.4</td>
                                        <td>Dosen menjadi pembicara, instruktur ,pengajar pada seminar, lokakarya,
                                            dan
                                            aktivitas belajar mengajar untuk pengembangan
                                            suatu lembaga sosial kemasyarakatan di dalam/luar IKBIS, baik masyarakat
                                            umum maupun masyarakat kampus
                                        </td>
                                        <td><input type="radio" class="C4" name="C4" id="C4" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C4" name="C4" id="C4" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C4" name="C4" id="C4" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C4" name="C4" id="C4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C4" name="C4" id="C4" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kegiatan yang dilakukan</td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC4_2"
                                                id="JumlahYangDihasilkanC4_2" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC4_3"
                                                id="JumlahYangDihasilkanC4_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC4_4"
                                                id="JumlahYangDihasilkanC4_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC4_5"
                                                id="JumlahYangDihasilkanC4_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanC4"
                                                id="JumlahSkorYangDiHasilkanC4" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorC4"
                                                id="SkorTambahanJumlahSkorC4" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanC4_2" id="SkorTambahanC4_2" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC4_3" id="SkorTambahanC4_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC4_4" id="SkorTambahanC4_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC4_5" id="SkorTambahanC4_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahC4" id="SkorTambahanJumlahC4"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemC4"
                                                id="SkorTambahanJumlahBobotSubItemC4" disabled></td>
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
                                        <td rowspan="2" class="bg-warning"><input id="scorC5" type="number"
                                                aria-label="C5" disabled></td>
                                        <td rowspan="2"><input id="scorMaxC5" type="number" aria-label="C5" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC5" type="number" aria-label="C5"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>C.5</td>
                                        <td>Peranan dosen dalam kegiatan seminar/lokakarya dan aktivitas belajar
                                            mengajar untuk pengembangan suatu lembaga sosial
                                            kemasyarakatan di dalam/luar IKBIS, baik masyarakat umum maupun masyarakat
                                            kampus
                                        </td>
                                        <td><input type="radio" class="C5" name="C5" id="C5" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C5" name="C5" id="C5" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C5" name="C5" id="C5" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C5" name="C5" id="C5" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C5" name="C5" id="C5" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah ormas yang diikuti</td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC5_2"
                                                id="JumlahYangDihasilkanC5_2" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC5_3"
                                                id="JumlahYangDihasilkanC5_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC5_4"
                                                id="JumlahYangDihasilkanC5_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC5_5"
                                                id="JumlahYangDihasilkanC5_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanC5"
                                                id="JumlahSkorYangDiHasilkanC5" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorC5"
                                                id="SkorTambahanJumlahSkorC5" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanC5_2" id="SkorTambahanC5_2" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC5_3" id="SkorTambahanC5_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC5_4" id="SkorTambahanC5_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC5_5" id="SkorTambahanC5_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahC5" id="SkorTambahanJumlahC5"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemC5"
                                                id="SkorTambahanJumlahBobotSubItemC5" disabled></td>
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
                                        <td rowspan="2" class="bg-warning"><input id="scorC6" type="number"
                                                aria-label="C6" disabled></td>
                                        <td rowspan="2"><input id="scorMaxC6" type="number" aria-label="C6" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC6" type="number" aria-label="C6"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>C.6</td>
                                        <td>Dosen memberikan pelayanan konsultasi untuk meningkatkan kesejahteraan
                                            masyarakat (sifatnya nirlaba)
                                        </td>
                                        <td><input type="radio" class="C6" name="C6" id="C6" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C6" name="C6" id="C6" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C6" name="C6" id="C6" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C6" name="C6" id="C6" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C6" name="C6" id="C6" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah ormas yang dilayani</td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC6_2"
                                                id="JumlahYangDihasilkanC6_2" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC6_3"
                                                id="JumlahYangDihasilkanC6_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC6_4"
                                                id="JumlahYangDihasilkanC6_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC6_5"
                                                id="JumlahYangDihasilkanC6_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanC6"
                                                id="JumlahSkorYangDiHasilkanC6" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorC6"
                                                id="SkorTambahanJumlahSkorC6" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanC6_2" id="SkorTambahanC6_2" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC6_3" id="SkorTambahanC6_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC6_4" id="SkorTambahanC6_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC6_5" id="SkorTambahanC6_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahC6" id="SkorTambahanJumlahC6"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemC6"
                                                id="SkorTambahanJumlahBobotSubItemC6" disabled></td>
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
                                        <td rowspan="2" class="bg-warning"><input id="scorC7" type="number"
                                                aria-label="C7" disabled></td>
                                        <td rowspan="2"><input id="scorMaxC7" type="number" aria-label="C7" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC7" type="number" aria-label="C7"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>C.7</td>
                                        <td>Dosen menulis karya pengabdian kepada masyarakat dalam bentuk panduan
                                            praktis/terapan untuk dapat dimanfaatkan oleh
                                            masyarakat dan tidak dipublikasikan
                                        </td>
                                        <td><input type="radio" class="C7" name="C7" id="C7" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C7" name="C7" id="C7" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C7" name="C7" id="C7" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C7" name="C7" id="C7" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C7" name="C7" id="C7" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah karya yang dihasilkan</td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC7_2"
                                                id="JumlahYangDihasilkanC7_2" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC7_3"
                                                id="JumlahYangDihasilkanC7_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC7_4"
                                                id="JumlahYangDihasilkanC7_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC7_5"
                                                id="JumlahYangDihasilkanC7_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanC7"
                                                id="JumlahSkorYangDiHasilkanC7" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorC7"
                                                id="SkorTambahanJumlahSkorC7" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanC7_2" id="SkorTambahanC7_2" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC7_3" id="SkorTambahanC7_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC7_4" id="SkorTambahanC7_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC7_5" id="SkorTambahanC7_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahC7" id="SkorTambahanJumlahC7"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemC7"
                                                id="SkorTambahanJumlahBobotSubItemC7" disabled></td>
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
                                        <td rowspan="2" class="bg-warning"><input id="scorC8" type="number"
                                                aria-label="C8" disabled></td>
                                        <td rowspan="2"><input id="scorMaxC8" type="number" aria-label="C8" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC8" type="number" aria-label="C8"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>C.8</td>
                                        <td>Dosen menulis karya pengabdian kepada masyarakat dalam bentuk panduan
                                            praktis/terapan untuk dapat dimanfaatkan oleh
                                            masyarakat dan tidak dipublikasikan
                                        </td>
                                        <td><input type="radio" class="C8" name="C8" id="C8" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C8" name="C8" id="C8" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C8" name="C8" id="C8" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C8" name="C8" id="C8" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C8" name="C8" id="C8" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah karya yang dihasilkan</td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC8_2"
                                                id="JumlahYangDihasilkanC8_2" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC8_3"
                                                id="JumlahYangDihasilkanC8_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC8_4"
                                                id="JumlahYangDihasilkanC8_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC8_5"
                                                id="JumlahYangDihasilkanC8_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanC8"
                                                id="JumlahSkorYangDiHasilkanC8" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorC8"
                                                id="SkorTambahanJumlahSkorC8" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanC8_2" id="SkorTambahanC8_2" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC8_3" id="SkorTambahanC8_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC8_4" id="SkorTambahanC8_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC8_5" id="SkorTambahanC8_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahC8" id="SkorTambahanJumlahC8"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemC8"
                                                id="SkorTambahanJumlahBobotSubItemC8" disabled></td>
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
                                        <td rowspan="2" class="bg-warning"><input id="scorC9" type="number"
                                                aria-label="C9" disabled></td>
                                        <td rowspan="2"><input id="scorMaxC9" type="number" aria-label="C9" disabled>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC9" type="number" aria-label="C9"
                                                disabled></td>
                                    </tr>
                                    <tr>
                                        <td>C.9</td>
                                        <td>Dosen melaksanakan implementasi pendidikan dan penelitian melalui praktik
                                            nyata di lapangan untuk dimanfaatkan kepada
                                            masyarakat
                                        </td>
                                        <td><input type="radio" class="C9" name="C9" id="C9" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C9" name="C9" id="C9" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C9" name="C9" id="C9" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C9" name="C9" id="C9" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="C9" name="C9" id="C9" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kegiatan yang dilakukan</td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC9_2"
                                                id="JumlahYangDihasilkanC9_2" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC9_3"
                                                id="JumlahYangDihasilkanC9_3" onkeyup="sum()" required>
                                        </td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC9_4"
                                                id="JumlahYangDihasilkanC9_4" onkeyup="sum()" required></td>
                                        <td><input type="teks" name="JumlahYangDihasilkanC9_5"
                                                id="JumlahYangDihasilkanC9_5" onkeyup="sum()" required></td>
                                        <td></td>
                                        <td><input type="teks" name="JumlahSkorYangDiHasilkanC9"
                                                id="JumlahSkorYangDiHasilkanC9" disabled></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahSkorC9"
                                                id="SkorTambahanJumlahSkorC9" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanC9_2" id="SkorTambahanC9_2" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC9_3" id="SkorTambahanC9_3" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC9_4" id="SkorTambahanC9_4" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanC9_5" id="SkorTambahanC9_5" disabled>
                                        </td>
                                        <td><input type="teks" name="SkorTambahanJumlahC9" id="SkorTambahanJumlahC9"
                                                disabled></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="teks" name="SkorTambahanJumlahBobotSubItemC9"
                                                id="SkorTambahanJumlahBobotSubItemC9" disabled></td>
                                    </tr>


                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Total Skor Pengabdian Kepada Masyarakat</td>
                                        <td><input type="teks" name="TotalSkorPengabdianKepadaMasyarakat"
                                                id="TotalSkorPengabdianKepadaMasyarakat" disabled></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 1</td>
                                        <td><input type="teks" name="TotalKelebihaC1" id="TotalKelebihaC1" disabled>
                                        </td>
                                        <td colspan="3" rowspan="4">Nilai Pengabdian Kepada Masyarakat</td>
                                        <td rowspan="4"><input type="teks" name="NilaiPengabdianKepadaMasyarakat"
                                                id="NilaiPengabdianKepadaMasyarakat" disabled></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 2</td>
                                        <td><input type="teks" name="TotalKelebihaC2" id="TotalKelebihaC2" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 3</td>
                                        <td><input type="teks" name="TotalKelebihaC3" id="TotalKelebihaC3" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 4</td>
                                        <td><input type="teks" name="TotalKelebihaC4" id="TotalKelebihaC4" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 5</td>
                                        <td><input type="teks" name="TotalKelebihaC5" id="TotalKelebihaC5" disabled>
                                        </td>
                                        <td colspan="3" rowspan="6">Nilai Tambah Penelitian</td>
                                        <td rowspan="6">1<input type="teks" name="NilaiTambahPenelitian"
                                                id="NilaiTambahPenelitian" disabled></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 6</td>
                                        <td><input type="teks" name="TotalKelebihaC6" id="TotalKelebihaC6" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 7</td>
                                        <td><input type="teks" name="TotalKelebihaC7" id="TotalKelebihaC7" disabled>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 8</td>
                                        <td><input type="teks" name="TotalKelebihaC8" id="TotalKelebihaC8" disabled>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 9</td>
                                        <td><input type="teks" name="TotalKelebihaC9" id="TotalKelebihaC9" disabled>
                                        </td>
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
                                        <td colspan="6">Nilai Total Pengabdian Kepada Masyarakat</td>
                                        <td><input type="teks" name="NilaiTotalPengabdianKepadaMasyarakat"
                                                id="NilaiTotalPengabdianKepadaMasyarakat" disabled></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="6">Nilai Total UNSUR UTAMA</td>
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
    <script src="{{ asset('Assets/js/Input-point/ScorPointCCheked.js') }}"></script>

    @endpush
</x-app-layout>
