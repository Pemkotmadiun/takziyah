<div class="modal-header" style="background-color:orange;">
    <h4 class="modal-title">Upload Dokumen</h4>
</div>

<!-- Modal body -->
<div class="modal-body" style="text-align: left;">
    <form action="{{ route('pengajuan_ulang_store.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="form-control" type="text" id="id" name="id" value="{{ $id }}" style="display:none">
        <input class="form-control" type="text" id="dokumen" name="dokumen" value="{{ $dokumen }}" style="display:none">
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Nama Pelapor" value="{{ $jenis }}" disabled>
        </div>
        <div class="form-group">
            <label>Dokumen</label>
            <input class="form-control" type="file" id="file_dokumen" name="file_dokumen">
        </div>
        <button class="btn btn-info btn-block" id="simpan">Simpan File</button>
    </form>
</div>