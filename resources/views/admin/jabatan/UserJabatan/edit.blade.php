<x-app-layout title="Profil Pegawai - Jabatan & Unit Kerja">

    @push('style')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    @endpush

    <div class="card shadow">
        <div class="card-header">
            <h5>Edit Jabatan & Unit Kerja - {{ $user->name }}</h5>
        </div>

        <div class="card-body">

            {{-- TAB MENU --}}
            <ul class="nav nav-tabs" id="jabTab">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#aktif">Aktif Saat Ini</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fungsional">Jabatan Fungsional</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#struktural">Jabatan Struktural</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#unit">Unit Kerja</button>
                </li>
            </ul>

            <div class="tab-content mt-3">

                {{-- TAB AKTIF --}}
                <div class="tab-pane fade show active" id="aktif">
                    <button class="btn btn-success btn-sm mb-2" id="refreshAktif">Refresh</button>
                    <div id="aktifContent"></div>
                </div>

                {{-- TAB FUNGSIONAL --}}
                <div class="tab-pane fade" id="fungsional">
                    <div class="d-flex justify-content-between mb-2">
                        <h6>Riwayat Jabatan Fungsional</h6>
                        <button class="btn btn-primary btn-sm" id="btnAddFungsional">Tambah</button>
                    </div>

                    <table id="tblFungsional" class="table table-bordered w-100">
                        <thead>
                        <tr>
                            <th>Jabatan</th>
                            <th>Unit</th>
                            <th>TMT Mulai</th>
                            <th>TMT Selesai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

                {{-- TAB STRUKTURAL --}}
                <div class="tab-pane fade" id="struktural">
                    <div class="d-flex justify-content-between mb-2">
                        <h6>Riwayat Jabatan Struktural</h6>
                        <button class="btn btn-primary btn-sm" id="btnAddStruktural">Tambah</button>
                    </div>

                    <table id="tblStruktural" class="table table-bordered w-100">
                        <thead>
                        <tr>
                            <th>Jabatan</th>
                            <th>TMT Mulai</th>
                            <th>TMT Selesai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

                {{-- TAB UNIT --}}
                <div class="tab-pane fade" id="unit">
                    <h6>Unit Kerja Aktif</h6>
                    <table id="tblUnit" class="table table-bordered w-100">
                        <thead>
                        <tr>
                            <th>Unit</th>
                            <th>TMT Mulai</th>
                            <th>TMT Selesai</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    {{-- UNIVERSAL MODAL ENTRY --}}
    <div class="modal fade" id="modalEntry" tabindex="-1">
        <div class="modal-dialog">
            <form id="formEntry">
                @csrf
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Tambah</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <input type="hidden" id="entry_type">
                        <input type="hidden" id="entry_id">

                        <div id="selectContainer"></div>

                        <div class="mb-3">
                            <label class="form-label">TMT Mulai</label>
                            <input type="date" id="tmt_mulai" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">TMT Selesai</label>
                            <input type="date" id="tmt_selesai" class="form-control">
                        </div>

                        <div class="mb-3" id="statusContainer">
                            <label class="form-label">Status</label>
                            <select id="status" class="form-select">
                                <option value="aktif">Aktif</option>
                                <option value="nonaktif">Nonaktif</option>
                            </select>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" id="btnSaveEntry">Simpan</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    {{-- SCRIPT --}}
    @push('JavaScript')
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <script>

            const base = "{{ url('admin/jabatan/pegawai') }}";
            const userId = "{{ $user->id }}";
            const modal = new bootstrap.Modal(document.getElementById('modalEntry'));

            /* ===========================================================
                LOAD DATA AKTIF (JSON → HTML MANUAL)
            ============================================================*/
            function loadAktif() {
                $.get(`${base}/${userId}/aktif`, function(res){

                    let f = res.fungsional ?
                        `
                        <div class='p-2 border rounded mb-2'>
                            <h6>Jabatan Fungsional Aktif</h6>
                            <p><strong>${res.fungsional.jabatan_fungsional.name}</strong></p>
                            <p>Unit: ${res.fungsional.unit_kerja.name}</p>
                            <p>TMT: ${res.fungsional.tmt_mulai}</p>
                        </div>
                        `
                        :
                        `<div class='p-2 border rounded mb-2 text-muted'>Tidak ada jabatan fungsional aktif.</div>`;

                    let s = res.struktural ?
                        `
                        <div class='p-2 border rounded mb-2'>
                            <h6>Jabatan Struktural Aktif</h6>
                            <p><strong>${res.struktural.jabatan_struktural.name}</strong></p>
                            <p>TMT: ${res.struktural.tmt_mulai}</p>
                        </div>
                        `
                        :
                        `<div class='p-2 border rounded mb-2 text-muted'>Tidak ada jabatan struktural aktif.</div>`;

                    // let u = res.unit ?
                    //     `
                    //     <div class='p-2 border rounded mb-2'>
                    //         <h6>Unit Kerja Aktif</h6>
                    //         <p><strong>${res.unit.unit_kerja.name}</strong></p>
                    //         <p>TMT: ${res.unit.tmt_mulai}</p>
                    //     </div>
                    //     `
                    //     :
                    //     `<div class='p-2 border rounded mb-2 text-muted'>Tidak ada unit kerja aktif.</div>`;

                    // $("#aktifContent").html(f + s + u);
                    $("#aktifContent").html(f + s);

                });
            }
            loadAktif();
            $("#refreshAktif").click(loadAktif);


            /* ===========================================================
                DATATABLES
            ============================================================*/
            const tblF = $('#tblFungsional').DataTable({
                ajax: `${base}/${userId}/fungsional/data`,
                columns: [
                    { data: 'jabatan_fungsional.name' },
                    { data: 'unit_kerja.name' },
                    { data: 'tmt_mulai' },
                    { data: 'tmt_selesai', defaultContent: '-' },
                    { data: 'status' },
                    {
                        data: 'id',
                        render: id => `
                            <button class="btn btn-warning btn-sm" onclick="editEntry('f', ${id})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteItem(${id}, 'fungsional')">Hapus</button>
                        `
                    }
                ]
            });

            const tblS = $('#tblStruktural').DataTable({
                ajax: `${base}/${userId}/struktural/data`,
                columns: [
                    { data: 'jabatan_struktural.name' },
                    { data: 'tmt_mulai' },
                    { data: 'tmt_selesai', defaultContent: '-' },
                    { data: 'status' },
                    {
                        data: 'id',
                        render: id => `
                            <button class="btn btn-warning btn-sm" onclick="editEntry('s', ${id})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteItem(${id}, 'struktural')">Hapus</button>
                        `
                    }
                ]
            });

            const tblU = $('#tblUnit').DataTable({
                ajax: `${base}/${userId}/unit/data`,
                columns: [
                    { data: 'unit_kerja.name' },
                    { data: 'tmt_mulai' },
                    { data: 'tmt_selesai', defaultContent: '-' },
                    {
                        data: 'id',
                        render: id => `
                            <button class="btn btn-warning btn-sm" onclick="editEntry('u', ${id})">Edit</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteItem(${id}, 'unit')">Hapus</button>
                        `
                    }
                ]
            });


            /* ===========================================================
                BUTTON TAMBAH
            ============================================================*/
            $('#btnAddFungsional').click(() => openModal('f'));
            $('#btnAddStruktural').click(() => openModal('s'));


            /* ===========================================================
                OPEN MODAL
            ============================================================*/
            function openModal(type, item = null) {

                $('#entry_type').val(type);
                $('#entry_id').val(item ? item.id : '');

                $('#tmt_mulai').val(item ? item.tmt_mulai : '');
                $('#tmt_selesai').val(item ? item.tmt_selesai : '');
                $('#status').val(item ? item.status : 'aktif');

                let html = '';

                if (type === 'f') {
                    html = `
                        <label class="form-label">Pilih Jabatan Fungsional</label>
                        <select id="selectItem" class="form-select mb-3">
                            @foreach($jabfungList as $j)
                                <option value="{{ $j->id }}">{{ $j->name }}</option>
                            @endforeach
                        </select>

                        <label class="form-label">Pilih Unit Kerja</label>
                        <select id="selectUnit" class="form-select">
                            @foreach($unitList as $u)
                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                            @endforeach
                        </select>
                    `;
                }

                else if (type === 's') {
                    html = `
                        <label class="form-label">Pilih Jabatan Struktural</label>
                        <select id="selectItem" class="form-select">
                            @foreach($jabstrukList as $j)
                                <option value="{{ $j->id }}">{{ $j->name }}</option>
                            @endforeach
                        </select>
                    `;
                }

                else if (type === 'u') {
                    html = `
                        <label class="form-label">Pilih Unit Kerja</label>
                        <select id="selectItem" class="form-select">
                            @foreach($unitList as $u)
                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                            @endforeach
                        </select>
                    `;
                }

                $('#selectContainer').html(html);

                if (item) {
                    $('#selectItem').val(
                        item.jabatan_fungsional_id ??
                        item.jabatan_struktural_id ??
                        item.unit_kerja_id
                    );
                    if (type === 'f') $('#selectUnit').val(item.unit_kerja_id);
                }

                $('.modal-title').text(item ? 'Edit Riwayat' : 'Tambah Riwayat');

                modal.show();
            }


            /* ===========================================================
                EDIT ENTRY
            ============================================================*/
            function editEntry(type, id) {
                const url = `${base}/${userId}/${routeName(type)}/${id}/edit`;

                $.get(url, function (res){
                    openModal(type, res.data);
                });
            }


            /* ===========================================================
                SIMPAN / UPDATE
            ============================================================*/
            $('#formEntry').submit(function(e){
                e.preventDefault();

                const type = $('#entry_type').val();
                const id   = $('#entry_id').val();

                let data = {
                    _token: '{{ csrf_token() }}',
                    tmt_mulai: $('#tmt_mulai').val(),
                    tmt_selesai: $('#tmt_selesai').val(),
                    status: $('#status').val()
                };

                if (type === 'f') {
                    data.jabatan_fungsional_id = $('#selectItem').val();
                    data.unit_kerja_id = $('#selectUnit').val();
                }
                else if (type === 's') {
                    data.jabatan_struktural_id = $('#selectItem').val();
                }
                else if (type === 'u') {
                    data.unit_kerja_id = $('#selectItem').val();
                }

                const url = id
                    ? `${base}/${userId}/${routeName(type)}/${id}`
                    : `${base}/${userId}/${routeName(type)}/store`;

                const method = id ? 'PUT' : 'POST';

                $.ajax({
                    url, method, data,
                    success(res){
                        alert(res.message);
                        tblF.ajax.reload();
                        tblS.ajax.reload();
                        tblU.ajax.reload();
                        loadAktif();
                        modal.hide();
                    }
                });
            });

            function routeName(t){
                if(t === 'f') return 'fungsional';
                if(t === 's') return 'struktural';
                return 'unit';
            }


            /* ===========================================================
                DELETE ITEM
            ============================================================*/
            function deleteItem(id, type){
                if(!confirm('Yakin ingin menghapus data ini?')) return;

                $.ajax({
                    url: `${base}/${userId}/${type}/${id}`,
                    method: 'DELETE',
                    data: { _token: '{{ csrf_token() }}' },
                    success: function(res){
                        alert(res.message);
                        tblF.ajax.reload();
                        tblS.ajax.reload();
                        tblU.ajax.reload();
                        loadAktif();
                    }
                });
            }

        </script>
    @endpush
</x-app-layout>
