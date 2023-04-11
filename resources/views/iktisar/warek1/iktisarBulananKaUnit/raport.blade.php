<x-app-layout title="Raport || Unit Warek I">
    @push('style')
    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Poin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Raport</a></li>
            </ol>
        </div>

        <div class="mb-2">
            <div class="row">
                <div class="col">
                    <a href="{{ route('iktisar.bulanan.warekSatu.detailData') }}"
                        class="btn btn-primary btn-sm mb-2">Poin</a>
                </div>
                <div class="col">
                    <form action="" method="get" class="row g-5">
                        <div class="d-flex justify-content-end align-items-center flex-wrap p-2">
                            <div class="col-auto">
                                <input type="date" name="keyword" class="form-control input-default mr-3">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary ml-2 shadow">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
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
