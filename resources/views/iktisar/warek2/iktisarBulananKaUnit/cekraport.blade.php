<x-app-layout title="Raport || Unit Warek II">
    @push('style')
    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Poin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Raport {{ $data->name }}</a></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-md">
                <a href="{{ route('data.raport.warekDua', ['id' => $data->user_id, 'tanggalInput' => $tanggalInput->format('Y-m-d'), 'type' => 'pdf']) }}" class="btn btn-primary btn-xs mb-2 float-end">
                    <i class="fa-solid fa-print"></i>
                    Download PDF
                </a>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Raport</h4>
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
                                $name = $data->name;
                                $email = $data->email;
                                ?>
                                <td>
                                    <?php echo $name; ?>
                                </td>
                                <td>
                                    <?php echo $email; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <?php
                        $DataUserKinerjaPerilaku = (float) $data->output_total_sementara_kinerja_perilaku;
                        $DataUserKinerjaKompetensi = (float) $data->total_nilai_presentase;

                        // SUM Nilai Perilaku dan Kompetensi
                        $resultSumPerilakuKompetensi = $DataUserKinerjaPerilaku + $DataUserKinerjaKompetensi;

                        // Predikat Perilaku dan Kompetensi
                        if ($resultSumPerilakuKompetensi >= 5) {
                            $OutPutPredikatKompetensi = 'ISTIMEWA';
                        } elseif ($resultSumPerilakuKompetensi >= 4) {
                            # code...
                            $OutPutPredikatKompetensi = 'SANGAT BAIK';
                        } elseif ($resultSumPerilakuKompetensi >= 3) {
                            # code...
                            $OutPutPredikatKompetensi = 'BAIK';
                        } elseif ($resultSumPerilakuKompetensi >= 2) {
                            # code...
                            $OutPutPredikatKompetensi = 'CUKUP';
                        } else {
                            # code...
                            $OutPutPredikatKompetensi = 'KURANG';
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
                                    <?php echo number_format((float) $DataUserKinerjaPerilaku, 2, '.', ''); ?>
                                </td>
                                <td>
                                    <?php echo number_format((float) $DataUserKinerjaKompetensi, 2, '.', ''); ?>
                                </td>
                                <td>
                                    <?php echo number_format((float) $resultSumPerilakuKompetensi, 2, '.', ''); ?>
                                </td>
                                <td style="font-weight:bold">
                                    <?php echo $OutPutPredikatKompetensi; ?>
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
