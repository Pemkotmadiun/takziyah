<div class="modal-header" style="background-color:orange;">
    <h4 class="modal-title">Validasi Dokumen</h4>
</div>

<!-- Modal body -->
<div class="modal-body" style="text-align: left;">
    <form action="{{ route('admin.validasi.store') }}" method="POST">
        @csrf
        <input class="form-control" type="text" id="id" name="id" value="{{ $id }}" style="display:none">
        <input class="form-control" type="text" id="dokumen" name="dokumen" value="{{ $dokumen }}" style="display:none">
        <div class="form-group">
            <label>Validasi</label>
            <select class="form-control" id="validasi" name="validasi">
                <option value="1">Diterima</option>
                <option value="0">Ditolak</option>
            </select>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" rows="5" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
        </div>
        <button class="btn btn-info btn-block" id="simpan">Simpan Validasi</button>
    </form>
</div>