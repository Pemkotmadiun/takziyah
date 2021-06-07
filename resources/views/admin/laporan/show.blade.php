@extends('admin.templates.default')

@section('content')
<div class="page-content fade-in-up">
                <!-- <div class="alert alert-warning"><b>Informasi,</b> untuk mengajukan santunan kematian, anda dapat melengkapi dokumen di form pengajuan santuan.
                </div> -->
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
                                <form action="{{ route('admin.validasi.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input class="form-control" type="text" id="laporan_id" name="laporan_id" value="{{ $data->id }}" style="display:none">
                                    <input class="form-control" type="text" id="link" name="link" value="{{ $data->link }}" style="display:none">
                                    <div class="form-group">
                                        <label>Validasi Laporan</label>
                                        <select class="form-control" id="validasi" name="validasi">
                                            <option value="N/A">=== Pilih ====</option>
                                            <option value="Valid">Valid</option>
                                            <option value="Tidak Valid">Tidak Valid</option>
                                        </select>
                                    </div>
                                    <div class="form-group" style="display:none" id="display_nik">
                                        <label>NIK <i style="color:red; font-size:11px">*Di Data Kependudukan</i></label>
                                        <input class="form-control" type="text" id="nik_valid" name="nik_valid" placeholder="NIK Warga Meninggal">
                                        @error('nik_valid')
                                            <span class="help-block"><i style="color:red">*Harus diisi</i></span>
                                        @enderror
                                    </div>
                                    <div class="form-group" style="display:none" id="display_nama">
                                        <label>Nama Lengkap <i style="color:red; font-size:11px">*Di Data Kependudukan</i></label>
                                        <input class="form-control" type="text" id="nama_lengkap_valid" name="nama_lengkap_valid" placeholder="Nama Lengkap Warga Meninggal">
                                        @error('nama_lengkap_valid')
                                            <span class="help-block"><i style="color:red">*Harus diisi</i></span>
                                        @enderror
                                    </div>
                                    <div class="form-group" style="display:none" id="display_akte">
                                        <label>Akte Kematian</label>
                                        <input class="form-control" type="file" id="akte_kematian" name="akte_kematian" >
                                    </div>
                                    <div class="form-group" style="display:none" id="display_ktp">
                                        <label>KTP</label>
                                        <input class="form-control" type="file" id="ktp" name="ktp" >
                                    </div>
                                    <div class="form-group" style="display:none" id="display_kk">
                                        <label>KK</label>
                                        <input class="form-control" type="file" id="kk" name="kk" >
                                    </div>
                                    <div class="form-group" style="display:none" id="display_keterangan">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" rows="5" placeholder="Keterangan" id="keterangan" name="keterangan"></textarea>
                                    </div>
                                    <button class="btn btn-warning btn-block" style="display:none" id="display_simpan">Simpan Validasi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if(count($pengajuan) > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ibox-warning">
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
                                            <td width="13%"><a href="../../../{{ $pengajuan->ktp_meninggal }}" target="_blank"><i class="fa fa-paperclip"></i> KTP Warga Meninggal</td>
                                            <td width="13%"><a href="../../../{{ $pengajuan->kk_meninggal }}" target="_blank"><i class="fa fa-paperclip"></i> KK Warga Meninggal</td>
                                            <td width="13%"><a href="../../../{{ $pengajuan->ktp_saksi_1 }}" target="_blank"><i class="fa fa-paperclip"></i> KTP Saksi 1</td>
                                            <td width="13%"><a href="../../../{{ $pengajuan->ktp_saksi_2 }}" target="_blank"><i class="fa fa-paperclip"></i> KTP Saksi 2</td>
                                            <td width="13%"><a href="../../../{{ $pengajuan->surat_keterangan_meninggal }}" target="_blank"><i class="fa fa-paperclip"></i> Surat Keterangan Kematian</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                @endif

                @if(count($penerbitan) > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ibox-warning">
                            <div class="ibox-head">
                                <div class="ibox-title">Penerbitan</div>
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
                                        @foreach($penerbitan as $penerbitan)
                                        <tr>
                                            <td width="33%"><a href="../../../{{ $penerbitan->akte_kematian }}" target="_blank"><i class="fa fa-paperclip"></i> Akte Kematian</td>
                                            <td width="33%"><a href="../../../{{ $penerbitan->ktp }}" target="_blank"><i class="fa fa-paperclip"></i> Kartu Tanda Penduduk</td>
                                            <td width="33%"><a href="../../../{{ $penerbitan->kk }}" target="_blank"><i class="fa fa-paperclip"></i> Kartu Keluarga</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                @endif
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
                                            <td width="21%">
                                                @if($log->user_id == 0)
                                                    Pelapor
                                                @else
                                                    {{ $log->name }}
                                                @endif
                                            </td>
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

            <script type="text/javascript">
                $(document).ready(function(){
                        $('#validasi').change(function(e){
                            var id = $(this).find(':selected').val();

                            // console.log(id);

                            if (id == 'N/A') {
                                $('#display_nik').hide();
                                $('#display_nama').hide();
                                $('#display_akte').hide();
                                $('#display_ktp').hide();
                                $('#display_kk').hide();
                                $('#display_keterangan').hide();
                                $('#display_simpan').hide();
                            }

                            if (id == 'Valid') {
                                $('#display_nik').show();
                                $('#display_nama').show();
                                $('#display_akte').show();
                                $('#display_ktp').show();
                                $('#display_kk').show();
                                $('#display_keterangan').hide();
                                $('#display_simpan').show();
                            }

                            if (id == 'Tidak Valid') {
                                $('#display_nik').hide();
                                $('#display_nama').hide();
                                $('#display_akte').hide();
                                $('#display_ktp').hide();
                                $('#display_kk').hide();
                                $('#display_keterangan').show();
                                $('#display_simpan').show();
                            }
                        });
                    });
                </script>
@endsection