<div class="row">
    <div class="form-group">
        <label for="nama_murid">Nama Murid</label>
        <input type="text" name="nama_murid" id="nama_murid" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group col mt-3">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" class="form-control" id="tempat_lahir">
    </div>
    <div class="form-group col mt-3">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <div class="input-group flatpickr " id="dashboardDate">
            <input type="text" id="tanggal_lahir" name="tanggal_lahir" class="form-control bg-transparent"
                placeholder="Select date" data-input>
            <span class="input-group-text input-group-addon bg-transparent" data-toggle><i data-feather="calendar"
                    class="text-dark"></i></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col mt-3">
        <label for="tanggal_masuk">Tanggal Masuk</label>
        <div class="input-group flatpickr " id="dashboardDate">
            <input type="text" id="tanggal_masuk" name="tanggal_masuk" class="form-control bg-transparent"
                placeholder="Select date" data-input>
            <span class="input-group-text input-group-addon bg-transparent" data-toggle><i data-feather="calendar"
                    class="text-dark"></i></span>
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col mt-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat"></textarea>
    </div>
</div>
<div class="row">
    <div class="form-group mt-3">
        <label for="nama_ortu">Nama Orang Tua</label>
        <input type="text" name="nama_ortu" id="nama_ortu" class="form-control">
    </div>
</div>
<div class="row">
    <div class="form-group mt-3">
        <label for="no_telp">Nomor Telp</label>
        <input type="text" name="no_telp" id="no_telp" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group col mt-3">
        <label for="nama_paket">Nama Paket</label>
        <select id="nama_paket" name="nama_paket" class="form-control">
            <option selected>Pilih Paket...</option>
            <option>Standard 01</option>
            <option>Standard 02</option>
            <option>Standard 03</option>
            <option>Standard 04</option>
        </select>
    </div>
</div>