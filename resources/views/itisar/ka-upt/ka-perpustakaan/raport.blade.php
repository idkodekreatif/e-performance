<x-app-layout title="Raport Penilaian Ka. UPT | Ka. Perpustakaan">
    @push('style')
    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Point</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Raport Ka. Unit Perpustakaan</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('ka.upt.ka.unit.perpustakaan') }}" class="btn btn-primary btn-sm mb-2 float-end">Point</a>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Raport Ka. Unit perpustakaan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <thead>
                            <tr style="font-weight:bold">
                                <td>NAMA</td>
                                <td>EMAIL</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    $name = $DataUser->name;
                                    $email = $DataUser->email;
                                ?>
                                <td>
                                    <?php echo $name  ?>
                                </td>
                                <td>
                                    <?php echo $email  ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <?php
                            $DataUserKinerjaPerilaku = (float)$DataUser->output_total_sementara_kinerja_perilaku;
                            $DataUserKinerjaKompetensi = (float)$DataUser->output_total_sementara_kinerja_kompetensi;

                            // SUM Nilai Perilaku dan Kompetensi
                            $resultSumPerilakuKompetensi = $DataUserKinerjaPerilaku + $DataUserKinerjaKompetensi;

                            // Predikat Perilaku dan Kompetensi
                            if ($resultSumPerilakuKompetensi >= 5) {
                            $OutPutPredikatKompetensi = "ISTIMEWA";
                            }elseif($resultSumPerilakuKompetensi >= 4.01) {
                            # code...
                            $OutPutPredikatKompetensi = "SANGAT BAIK";
                            }elseif($resultSumPerilakuKompetensi >= 3.01) {
                            # code...
                            $OutPutPredikatKompetensi = "BAIK";
                            }elseif ($resultSumPerilakuKompetensi >= 2.01) {
                            # code...
                            $OutPutPredikatKompetensi = "CUKUP";
                            }else {
                            # code...
                            $OutPutPredikatKompetensi = "KURANG";
                            }
                        ?>
                        <thead>
                            <tr style="font-weight:bold">
                                <td>KOMPONEN</td>
                                <td>PERILAKU</td>
                                <td>KOMPETENSI</td>
                                <td>NILAI KINERJA TOTAL</td>
                                <td>PREDIKAT</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-weight:bold">Nilai</td>
                                <td>
                                    <?php echo number_format((float)$DataUserKinerjaPerilaku, 2, '.', '')  ?>
                                </td>
                                <td>
                                    <?php echo number_format((float)$DataUserKinerjaKompetensi, 2, '.', '')  ?>
                                </td>
                                <td>
                                    <?php echo number_format((float)$resultSumPerilakuKompetensi, 2, '.', '')  ?>
                                </td>
                                <td style="font-weight:bold">
                                    <?php echo $OutPutPredikatKompetensi  ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @push('JavaScript')
    @endpush
</x-app-layout>
