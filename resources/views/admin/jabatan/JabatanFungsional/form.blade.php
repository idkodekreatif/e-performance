<div class="mb-3">
    <label>Nama Jabatan</label>
    <input
        type="text"
        name="name"
        class="form-control"
        placeholder="Contoh: Analis Kepegawaian Ahli Pertama"
        value="{{ $item->name ?? old('name') }}"
        required
    >
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label>Golongan Min</label>
        <input
            type="text"
            name="golongan_min"
            class="form-control"
            placeholder="Contoh: III/a"
            value="{{ $item->golongan_min ?? old('golongan_min') }}"
        >
    </div>
    <div class="col-md-6 mb-3">
        <label>Golongan Max</label>
        <input
            type="text"
            name="golongan_max"
            class="form-control"
            placeholder="Contoh: III/d"
            value="{{ $item->golongan_max ?? old('golongan_max') }}"
        >
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label>Angka Kredit Min</label>
        <input
            type="number"
            name="angka_kredit_min"
            class="form-control"
            placeholder="Masukkan angka minimal"
            value="{{ $item->angka_kredit_min ?? old('angka_kredit_min', 0) }}"
        >
    </div>
    <div class="col-md-6 mb-3">
        <label>Angka Kredit Next</label>
        <input
            type="number"
            name="angka_kredit_next"
            class="form-control"
            placeholder="Masukkan angka kredit kenaikan berikutnya"
            value="{{ $item->angka_kredit_next ?? old('angka_kredit_next', 0) }}"
        >
    </div>
</div>

<div class="mb-3">
    <label>Deskripsi</label>
    <textarea
        name="description"
        class="form-control"
        rows="3"
        placeholder="Tuliskan deskripsi singkat tentang jabatan fungsional ini..."
    >{{ $item->description ?? old('description') }}</textarea>
</div>
