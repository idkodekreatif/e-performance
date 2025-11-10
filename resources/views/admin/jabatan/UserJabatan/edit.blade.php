<x-app-layout title="Profil Pegawai - Jabatan & Unit Kerja">
    @push('style')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    @endpush

    <div class="card shadow">
        <div class="card-header">
            <h5>Edit Jabatan & Unit Kerja - {{ $user->name }}</h5>
        </div>

        <div class="card-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="jabTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="aktif-tab" data-bs-toggle="tab" data-bs-target="#aktif" type="button">Aktif Saat Ini</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="fungsional-tab" data-bs-toggle="tab" data-bs-target="#fungsional" type="button">Jabatan Fungsional</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="struktural-tab" data-bs-toggle="tab" data-bs-target="#struktural" type="button">Jabatan Struktural</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="unit-tab" data-bs-toggle="tab" data-bs-target="#unit" type="button">Unit Kerja</button>
                </li>
            </ul>

            <div class="tab-content mt-3">
                <!-- Aktif -->
                <div class="tab-pane fade show active" id="aktif">
                    <div class="mb-3">
                        <button class="btn btn-success btn-sm" id="refreshAktif">Refresh</button>
                    </div>
                    <div id="aktifContent">
                        {{-- will be filled by AJAX: current active entries --}}
                    </div>
                </div>

                <!-- Fungsional -->
                <div class="tab-pane fade" id="fungsional">
                    <div class="mb-2 d-flex justify-content-between">
                        <h6>Riwayat Jabatan Fungsional</h6>
                        <button class="btn btn-primary btn-sm" id="btnAddFungsional">Tambah</button>
                    </div>
                    <table id="tblFungsional" class="table table-bordered w-100">
                        <thead><tr><th>Jabatan</th><th>TMT Mulai</th><th>TMT Selesai</th><th>Status</th><th>Aksi</th></tr></thead>
                        <tbody></tbody>
                    </table>
                </div>

                <!-- Struktural -->
                <div class="tab-pane fade" id="struktural">
                    <div class="mb-2 d-flex justify-content-between">
                        <h6>Riwayat Jabatan Struktural</h6>
                        <button class="btn btn-primary btn-sm" id="btnAddStruktural">Tambah</button>
                    </div>
                    <table id="tblStruktural" class="table table-bordered w-100">
                        <thead><tr><th>Jabatan</th><th>TMT Mulai</th><th>TMT Selesai</th><th>Status</th><th>Aksi</th></tr></thead>
                        <tbody></tbody>
                    </table>
                </div>

                <!-- Unit -->
                <div class="tab-pane fade" id="unit">
                    <div class="mb-2 d-flex justify-content-between">
                        <h6>Riwayat Unit Kerja</h6>
                        <button class="btn btn-primary btn-sm" id="btnAddUnit">Tambah</button>
                    </div>
                    <table id="tblUnit" class="table table-bordered w-100">
                        <thead><tr><th>Unit</th><th>TMT Mulai</th><th>TMT Selesai</th><th>Aksi</th></tr></thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal (single modal reused) --}}
    <div class="modal fade" id="modalEntry" tabindex="-1">
      <div class="modal-dialog">
        <form id="formEntry">
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalTitle">Tambah</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="entry_type"> <!-- fungsional/struktural/unit -->
                <input type="hidden" id="entry_id">
                <div class="mb-3" id="selectContainer">
                    <!-- dynamic select will be injected -->
                </div>
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
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary" id="btnSaveEntry">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    @push('JavaScript')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
    $(function() {
        const userId = {{ $user->id }};
        const base = '/admin/jabatan/pegawai';

        // Datatables
        const tblF = $('#tblFungsional').DataTable({
            ajax: `${base}/${userId}/fungsional/data`,
            columns: [
                { data: 'jabatan_fungsional.name', defaultContent: '-' },
                { data: 'tmt_mulai' },
                { data: 'tmt_selesai', defaultContent: '-' },
                { data: 'status' },
                { data: 'id', render: id => actionButtons('f', id) }
            ]
        });

        const tblS = $('#tblStruktural').DataTable({
            ajax: `${base}/${userId}/struktural/data`,
            columns: [
                { data: 'jabatan_struktural.name', defaultContent: '-' },
                { data: 'tmt_mulai' },
                { data: 'tmt_selesai', defaultContent: '-' },
                { data: 'status' },
                { data: 'id', render: id => actionButtons('s', id) }
            ]
        });

        const tblU = $('#tblUnit').DataTable({
            ajax: `${base}/${userId}/unit/data`,
            columns: [
                { data: 'unit_kerja.name', defaultContent: '-' },
                { data: 'tmt_mulai' },
                { data: 'tmt_selesai', defaultContent: '-' },
                { data: 'id', render: id => actionButtons('u', id) }
            ]
        });

        function actionButtons(type, id) {
            return `
                <button class="btn btn-sm btn-warning me-1" onclick="editEntry('${type}', ${id})">Edit</button>
                <button class="btn btn-sm btn-danger" onclick="deleteEntry('${type}', ${id})">Hapus</button>
            `;
        }

        // Aktif content loader
        function loadAktif() {
            $.get(`${base}/${userId}/fungsional/data`, res => {
                const fActive = res.data.filter(r => r.status === 'aktif').map(r => r.jabatan_fungsional.name).join(', ') || '-';
                $('#aktifContent').html(`
                    <p><strong>Jabatan Fungsional Aktif:</strong> ${fActive}</p>
                `);
            });
            $.get(`${base}/${userId}/struktural/data`, res => {
                const sActive = res.data.filter(r => r.status === 'aktif').map(r => r.jabatan_struktural.name).join(', ') || '-';
                $('#aktifContent').append(`<p><strong>Jabatan Struktural Aktif:</strong> ${sActive}</p>`);
            });
            $.get(`${base}/${userId}/unit/data`, res => {
                const uActive = res.data.map(r => r.unit_kerja.name).join(', ') || '-';
                $('#aktifContent').append(`<p><strong>Unit Kerja:</strong> ${uActive}</p>`);
            });
        }

        $('#refreshAktif').click(loadAktif);
        loadAktif();

        // Modal handling
        const modal = new bootstrap.Modal(document.getElementById('modalEntry'));

        $('#btnAddFungsional').click(() => openModalCreate('f'));
        $('#btnAddStruktural').click(() => openModalCreate('s'));
        $('#btnAddUnit').click(() => openModalCreate('u'));

        function openModalCreate(type) {
            $('#entry_type').val(type);
            $('#entry_id').val('');
            $('#tmt_mulai').val('');
            $('#tmt_selesai').val('');
            $('#status').val('aktif');

            // inject select
            if (type === 'f') {
                let html = `<label class="form-label">Pilih Jabatan Fungsional</label>
                    <select id="selectItem" class="form-select">
                        @foreach($jabfungList as $j)
                            <option value="{{ $j->id }}">{{ $j->name }}</option>
                        @endforeach
                    </select>`;
                $('#selectContainer').html(html);
                $('#statusContainer').show();
            } else if (type === 's') {
                let html = `<label class="form-label">Pilih Jabatan Struktural</label>
                    <select id="selectItem" class="form-select">
                        @foreach($jabstrukList as $j)
                            <option value="{{ $j->id }}">{{ $j->name }}</option>
                        @endforeach
                    </select>`;
                $('#selectContainer').html(html);
                $('#statusContainer').show();
            } else {
                let html = `<label class="form-label">Pilih Unit Kerja</label>
                    <select id="selectItem" class="form-select">
                        @foreach($unitList as $u)
                            <option value="{{ $u->id }}">{{ $u->name }}</option>
                        @endforeach
                    </select>`;
                $('#selectContainer').html(html);
                $('#statusContainer').hide(); // unit has no status in migration
            }

            $('#modalTitle').text('Tambah');
            modal.show();
        }

        // Submit modal (create/update)
        $('#formEntry').submit(function(e){
            e.preventDefault();
            const type = $('#entry_type').val();
            const id = $('#entry_id').val();
            const payload = {
                _token: '{{ csrf_token() }}',
                tmt_mulai: $('#tmt_mulai').val(),
                tmt_selesai: $('#tmt_selesai').val(),
            };
            if (type === 'f') {
                payload.jabatan_fungsional_id = $('#selectItem').val();
                payload.status = $('#status').val();
                const url = id ? `${base}/${userId}/fungsional/${id}` : `${base}/${userId}/fungsional/store`;
                const method = id ? 'PUT' : 'POST';
                ajaxSave(url, method, payload, function(){ tblF.ajax.reload(); loadAktif(); modal.hide(); });
            } else if (type === 's') {
                payload.jabatan_struktural_id = $('#selectItem').val();
                payload.status = $('#status').val();
                const url = id ? `${base}/${userId}/struktural/${id}` : `${base}/${userId}/struktural/store`;
                const method = id ? 'PUT' : 'POST';
                ajaxSave(url, method, payload, function(){ tblS.ajax.reload(); loadAktif(); modal.hide(); });
            } else {
                payload.unit_kerja_id = $('#selectItem').val();
                const url = id ? `${base}/${userId}/unit/${id}` : `${base}/${userId}/unit/store`;
                const method = id ? 'PUT' : 'POST';
                ajaxSave(url, method, payload, function(){ tblU.ajax.reload(); loadAktif(); modal.hide(); });
            }
        });

        function ajaxSave(url, method, data, cb) {
            $.ajax({
                url: url,
                method: method,
                data: data,
                success: function(res){
                    alert(res.message || 'Sukses');
                    if (cb) cb();
                },
                error: function(xhr){
                    const msg = xhr.responseJSON?.message || 'Terjadi kesalahan';
                    alert(msg);
                }
            });
        }

        window.editEntry = function(type, id) {
            $('#entry_type').val(type);
            $('#entry_id').val(id);
            if (type === 'f') {
                $.get(`${base}/${userId}/fungsional/${id}/edit`, function(res){
                    // inject select with current selected
                    let html = `<label class="form-label">Pilih Jabatan Fungsional</label>
                        <select id="selectItem" class="form-select">`;
                    @foreach($jabfungList as $j)
                        html += `<option value="{{ $j->id }}" ${res.jabatan_fungsional_id == {{ $j->id }} ? 'selected' : ''}>{{ $j->name }}</option>`;
                    @endforeach
                    html += `</select>`;
                    $('#selectContainer').html(html);
                    $('#tmt_mulai').val(res.tmt_mulai);
                    $('#tmt_selesai').val(res.tmt_selesai);
                    $('#status').val(res.status);
                    $('#modalTitle').text('Edit Riwayat Fungsional');
                    $('#statusContainer').show();
                    modal.show();
                });
            } else if (type === 's') {
                $.get(`${base}/${userId}/struktural/${id}/edit`, function(res){
                    let html = `<label class="form-label">Pilih Jabatan Struktural</label>
                        <select id="selectItem" class="form-select">`;
                    @foreach($jabstrukList as $j)
                        html += `<option value="{{ $j->id }}" ${res.jabatan_struktural_id == {{ $j->id }} ? 'selected' : ''}>{{ $j->name }}</option>`;
                    @endforeach
                    html += `</select>`;
                    $('#selectContainer').html(html);
                    $('#tmt_mulai').val(res.tmt_mulai);
                    $('#tmt_selesai').val(res.tmt_selesai);
                    $('#status').val(res.status);
                    $('#modalTitle').text('Edit Riwayat Struktural');
                    $('#statusContainer').show();
                    modal.show();
                });
            } else {
                $.get(`${base}/${userId}/unit/${id}/edit`, function(res){
                    let html = `<label class="form-label">Pilih Unit Kerja</label>
                        <select id="selectItem" class="form-select">`;
                    @foreach($unitList as $u)
                        html += `<option value="{{ $u->id }}" ${res.unit_kerja_id == {{ $u->id }} ? 'selected' : ''}>{{ $u->name }}</option>`;
                    @endforeach
                    html += `</select>`;
                    $('#selectContainer').html(html);
                    $('#tmt_mulai').val(res.tmt_mulai);
                    $('#tmt_selesai').val(res.tmt_selesai);
                    $('#statusContainer').hide();
                    $('#modalTitle').text('Edit Riwayat Unit');
                    modal.show();
                });
            }
        }

        window.deleteEntry = function(type, id) {
            if (!confirm('Konfirmasi hapus?')) return;
            let url;
            if (type === 'f') url = `${base}/${userId}/fungsional/${id}`;
            if (type === 's') url = `${base}/${userId}/struktural/${id}`;
            if (type === 'u') url = `${base}/${userId}/unit/${id}`;
            $.ajax({ url: url, method: 'DELETE', data: {_token: '{{ csrf_token() }}' } })
                .done(function(res){
                    alert(res.message);
                    tblF.ajax.reload(); tblS.ajax.reload(); tblU.ajax.reload(); loadAktif();
                })
                .fail(function(){ alert('Gagal menghapus'); });
        }

    });
    </script>
    @endpush
</x-app-layout>
