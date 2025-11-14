<script>
    const base = "{{ url('admin/jabatan-pegawai') }}";
    const userId = "{{ $user->id }}";

    const modal = new bootstrap.Modal(document.getElementById('modalEntry'));

    // ===========================
    //  OPEN MODAL
    // ===========================
    function openModal(type, item = null) {

        $('#entry_type').val(type);
        $('#entry_id').val(item ? item.id : '');
        $('#tmt_mulai').val(item ? item.tmt_mulai : '');
        $('#tmt_selesai').val(item ? item.tmt_selesai : '');
        $('#status').val(item ? item.status : 'aktif');

        let html = '';

        // ------ JABATAN FUNGSIONAL ------
        if (type === 'f') {

            html = `
                <label class="form-label">Pilih Jabatan Fungsional</label>
                <select id="selectItem" class="form-select mb-3">
                    @foreach($jabfungList as $j)
                        <option value="{{ $j->id }}">{{ $j->name }}</option>
                    @endforeach
                </select>

                <label class="form-label mt-2">Pilih Unit Kerja</label>
                <select id="selectUnit" class="form-select">
                    @foreach($unitList as $u)
                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                    @endforeach
                </select>
            `;

        }
        // ------ JABATAN STRUKTURAL ------
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

        $('#selectContainer').html(html);

        // set selected ketika edit
        if (item) {
            $('#selectItem').val(item.jabatan_fungsional_id ?? item.jabatan_struktural_id);
            if (type === 'f') {
                $('#selectUnit').val(item.unit_kerja_id);
            }
        }

        $('.modal-title').text(item ? 'Edit Riwayat' : 'Tambah Riwayat');

        modal.show();
    }

    // ===========================
    //  SUBMIT FORM (SAVE & UPDATE)
    // ===========================
    $('#formEntry').submit(function(e){
        e.preventDefault();

        const type = $('#entry_type').val();
        const id   = $('#entry_id').val();

        const data = {
            _token: '{{ csrf_token() }}',
            tmt_mulai: $('#tmt_mulai').val(),
            tmt_selesai: $('#tmt_selesai').val(),
            status: $('#status').val()
        };

        if (type === 'f') {
            data.jabatan_fungsional_id = $('#selectItem').val();
            data.unit_kerja_id = $('#selectUnit').val();
        }

        if (type === 's') {
            data.jabatan_struktural_id = $('#selectItem').val();
        }

        const url = id
            ? `${base}/${userId}/${type === 'f' ? 'fungsional' : 'struktural'}/${id}`
            : `${base}/${userId}/${type === 'f' ? 'fungsional' : 'struktural'}/store`;

        const method = id ? 'PUT' : 'POST';

        $.ajax({
            url, method, data,
            success(res){
                alert(res.message);
                tblF.ajax.reload();
                tblS.ajax.reload();
                loadAktif();
                modal.hide();
            }
        });
    });

    // ===========================
    //  DELETE
    // ===========================
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
                loadAktif();
            }
        });
    }

    // ===========================
    //  LOAD RINGKASAN AKTIF
    // ===========================
    function loadAktif(){
        $("#aktifContainer").load(`${base}/${userId}/aktif`);
    }

    loadAktif();

</script>
