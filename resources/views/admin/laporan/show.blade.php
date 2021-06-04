@extends('admin.templates.default')

@section('content')
<div class="page-content fade-in-up">
                <div class="alert alert-warning"><b>Informasi,</b> untuk mengajukan santunan kematian, anda dapat melengkapi dokumen di form pengajuan santuan.
                </div>
                <div class="row">
                    @foreach($data as $data)
                    <div class="col-md-6">
                        <div class="ibox ibox-info">
                            <div class="ibox-head">
                                <div class="ibox-title">Laporan Kematian</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <!-- <div class="dropdown-menu dropdown-menu-right"> -->
                                        <!-- <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form>
                                    <div class="form-group">
                                        <label>Nama Pelapor</label>
                                        <input class="form-control" type="text" placeholder="Nama Pelapor" value="{{ $data->nama_pelapor }}" disabled>
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Email</label>
                                        <input class="form-control" type="text" placeholder="Alamat Email" value="{{ $data->alamat_email }}" disabled>
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input class="form-control" type="text" placeholder="No Telepon" value="{{ $data->no_telepon }}" disabled>
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Warga Meninggal</label>
                                        <input class="form-control" type="text" placeholder="Nama Warga Meninggal" value="{{ $data->nama_meninggal }}" disabled>
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" rows="5" placeholder="Keterangan Lain" disabled>{{ $data->keterangan }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu Kematian</label>
                                        <input class="form-control" type="text" placeholder="Waktu Kematian" value="{{ $data->waktu_kematian }}" disabled>
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu Lapor</label>
                                        <input class="form-control" type="text" placeholder="Waktu Lapor" value="{{ $data->created_at }}" disabled>
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ibox ibox-info">
                            <div class="ibox-head">
                                <div class="ibox-title">Validasi Data dan Penerbitan</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <!-- <div class="dropdown-menu dropdown-menu-right"> -->
                                        <!-- <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form action="{{ route('pengajuan.santunan_store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input class="form-control" type="text" id="laporan_id" name="laporan_id" value="{{ $data->id }}" style="display:none">
                                    <input class="form-control" type="text" id="link" name="link" value="{{ $data->link }}" style="display:none">
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input class="form-control" type="text" id="nik_meninggal" name="nik_meninggal" placeholder="NIK Warga Meninggal" value="" @if(count($pengajuan) >= 1) disabled @endif>
                                        @error('nik_meninggal')
                                            <span class="help-block"><i style="color:red">*Harus diisi</i></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input class="form-control" type="text" id="nama_meninggal" name="nama_meninggal" placeholder="Nama Lengkap Warga Meninggal" @if(count($pengajuan) >= 1) disabled @endif>
                                        @error('nama_meninggal')
                                            <span class="help-block"><i style="color:red">*Harus diisi</i></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>KTP Warga Meninggal</label>
                                        <input class="form-control" type="file" id="ktp_meninggal" name="ktp_meninggal" @if(count($pengajuan) >= 1) disabled @endif>
                                        @error('ktp_meninggal')
                                            <span class="help-block"><i style="color:red">*Harus diisi</i></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>KK Warga Meninggal</label>
                                        <input class="form-control" type="file" id="kk_meninggal" name="kk_meninggal" @if(count($pengajuan) >= 1) disabled @endif>
                                        @error('kk_meninggal')
                                            <span class="help-block"><i style="color:red">*Harus diisi</i></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>KTP Saksi 1</label>
                                        <input class="form-control" type="file" id="ktp_saksi_1" name="ktp_saksi_1" @if(count($pengajuan) >= 1) disabled @endif>
                                        @error('ktp_saksi_1')
                                            <span class="help-block"><i style="color:red">*Harus diisi</i></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>KTP Saksi 2</label>
                                        <input class="form-control" type="file" id="ktp_saksi_2" name="ktp_saksi_2" @if(count($pengajuan) >= 1) disabled @endif>
                                        @error('ktp_saksi_2')
                                            <span class="help-block"><i style="color:red">*Harus diisi</i></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Keterangan Kematian (jika ada)</label>
                                        <input class="form-control" type="file" id="surat_keterangan_meninggal" name="surat_keterangan_meninggal" @if(count($pengajuan) >= 1) disabled @endif>
                                    </div>
                                    <button class="btn btn-warning btn-block" @if(count($pengajuan) >= 1) disabled @endif>Buat Pengajuan Santunan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ibox-grey">
                            <div class="ibox-head">
                                <div class="ibox-title">File Pengajuan Santunan</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <!-- <div class="dropdown-menu dropdown-menu-right"> -->
                                        <!-- <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                                <table class="table table-bordered">
                                    <tbody>
                                        @foreach($pengajuan as $pengajuan)
                                        <tr>
                                            <td width="15%">{{ $pengajuan->nik_meninggal }}</td>
                                            <td width="20%">{{ $pengajuan->nama_meninggal }}</td>
                                            <td width="13%"><a href="../../{{ $pengajuan->ktp_meninggal }}" target="_blank"><i class="fa fa-paperclip"></i> KTP Warga Meninggal</td>
                                            <td width="13%"><a href="../../{{ $pengajuan->kk_meninggal }}" target="_blank"><i class="fa fa-paperclip"></i> KK Warga Meninggal</td>
                                            <td width="13%"><a href="../../{{ $pengajuan->ktp_saksi_1 }}" target="_blank"><i class="fa fa-paperclip"></i> KTP Saksi 1</td>
                                            <td width="13%"><a href="../../{{ $pengajuan->ktp_saksi_2 }}" target="_blank"><i class="fa fa-paperclip"></i> KTP Saksi 2</td>
                                            <td width="13%"><a href="../../{{ $pengajuan->surat_keterangan_meninggal }}" target="_blank"><i class="fa fa-paperclip"></i> Surat Keterangan Kematian</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <form action="" method="POST" id="deleteForm">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Hapus" style="display: none">
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ibox-grey">
                            <div class="ibox-head">
                                <div class="ibox-title">History</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <!-- <div class="dropdown-menu dropdown-menu-right"> -->
                                        <!-- <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                                <table class="table table-bordered">
                                    <tbody>
                                        @foreach($log as $log)
                                        <tr>
                                            <td width="21%">{{ $log->user_id }}</td>
                                            <td width="28%">{{ $log->jenis }}</td>
                                            <td width="28%">{{ $log->keterangan }}</td>
                                            <td width="22%">{{ $log->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection