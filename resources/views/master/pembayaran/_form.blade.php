<div class="row">
    <div class="form-group col ">
        <label for="id_murid">Nama Murid</label>
        <select id="id_murid" name="id_murid" class="form-control form-select">
            <option selected> Pilih Murid...</option>
            @foreach ($data_murid as $murid)
                <option value="{{ $murid->id_murid }}">{{ $murid->nama_murid }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="form-group col mt-3">
        <label for="jumlah_bayar">Jumlah Pembayaran</label>
        <input type="text" name="jumlah_bayar" id="jumlah_bayar" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group col mt-3">
        <label for="tanggal_bayar">Tanggal Pembayaran</label>
        <div class="input-group flatpickr " id="dashboardDate">
            <input type="text" id="tanggal_bayar" name="tanggal_bayar" class="form-control bg-transparent"
                placeholder="Select date" data-input>
            <span class="input-group-text input-group-addon bg-transparent" data-toggle><i data-feather="calendar"
                    class="text-dark"></i></span>
        </div>
    </div>
</div>

{{-- <div class="row">
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
</div> --}}
