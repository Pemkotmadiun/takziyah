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
                                @if( $validasi_dukcapil == '0' )
                                    <div class="alert alert-danger alert-dismissable fade show">
                                        <h4>Sudah Divalidasi!</h4>
                                        <p>Laporan berikut telah divalidasi dengan hasil validasi : <b>Ditolak</b></p>
                                        <p>
                                            <b>Keterangan : </b>{{ $keterangan_validasi_dukcapil }}
                                        </p>
                                    </div>
                                @elseif( empty($validasi_dukcapil))
                                <form action="{{ route('admin.validasi_dukcapil.store') }}" method="POST" enctype="multipart/form-data">
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
                                @elseif( $validasi_dukcapil == '1' )
                                    <div class="alert alert-success alert-dismissable fade show">
                                    <h4>Sudah Divalidasi!</h4>
                                        <p>Laporan berikut telah divalidasi dengan hasil validasi : <b>Diterima</b></p>
                                        <p>
                                            <b>Keterangan : </b>{{ $keterangan_validasi_dukcapil }}
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if(count($pengajuan) > 0)
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
                                            <tr>
                                                <td width="1%"><b>#</b></td>
                                                <td width="45%"><b>Dokumen</b></td>
                                                <td width="45%"><b>Keterangan</b></td>
                                                <td width="9%"><b>Status</b></td>
                                            </tr>
                                            @foreach($pengajuan as $pengajuan)
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    Surat Permohonan Santunan Kematian 
                                                    <a href="../../{{ $pengajuan->surat_permohonan_santunan }}" target="_blank"><i class="fa fa-paperclip"></i> Dokumen
                                                </td>
                                                <td>{{ $pengajuan->keterangan_surat_permohonan_santunan }}</td>
                                                <td>
                                                    @if($pengajuan->validasi_surat_permohonan_santunan == '')
                                                    <span class="badge badge-warning">Proses</span>
                                                    @elseif($pengajuan->validasi_surat_permohonan_santunan == 0)
                                                    <span class="badge badge-danger">Ditolak</span>
                                                    @elseif($pengajuan->validasi_surat_permohonan_santunan == 1)
                                                    <span class="badge badge-success">Diterima</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                KTP-EL Masyarakat yang Meninggal 
                                                    <a href="../../{{ $pengajuan->ktp_masyarakat_meninggal }}" target="_blank"><i class="fa fa-paperclip"></i> Dokumen
                                                </td>
                                                <td>{{ $pengajuan->keterangan_surat_permohonan_santunan }}</td>
                                                <td>
                                                    @if($pengajuan->validasi_ktp_masyarakat_meninggal == '')
                                                    <span class="badge badge-warning">Proses</span>
                                                    @elseif($pengajuan->validasi_ktp_masyarakat_meninggal == 0)
                                                    <span class="badge badge-danger">Ditolak</span>
                                                    @elseif($pengajuan->validasi_ktp_masyarakat_meninggal == 1)
                                                    <span class="badge badge-success">Diterima</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                Akta Kematian atau Surat Keterangan Lahir Mati 
                                                    <a href="../../{{ $pengajuan->akta_kematian }}" target="_blank"><i class="fa fa-paperclip"></i> Dokumen
                                                </td>
                                                <td>{{ $pengajuan->keterangan_akta_kematian }}</td>
                                                <td>
                                                    @if($pengajuan->validasi_akta_kematian == '')
                                                    <span class="badge badge-warning">Proses</span>
                                                    @elseif($pengajuan->validasi_akta_kematian == 0)
                                                    <span class="badge badge-danger">Ditolak</span>
                                                    @elseif($pengajuan->validasi_akta_kematian == 1)
                                                    <span class="badge badge-success">Diterima</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                KTP-EL Ahli Waris 
                                                    <a href="../../{{ $pengajuan->ktp_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"></i> Dokumen
                                                </td>
                                                <td>{{ $pengajuan->keterangan_ktp_ahli_waris }}</td>
                                                <td>
                                                    @if($pengajuan->validasi_ktp_ahli_waris == '')
                                                    <span class="badge badge-warning">Proses</span>
                                                    @elseif($pengajuan->validasi_ktp_ahli_waris == 0)
                                                    <span class="badge badge-danger">Ditolak</span>
                                                    @elseif($pengajuan->validasi_ktp_ahli_waris == 1)
                                                    <span class="badge badge-success">Diterima</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                KK Ahli Waris 
                                                    <a href="../../{{ $pengajuan->kk_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"></i> Dokumen
                                                </td>
                                                <td>{{ $pengajuan->keterangan_kk_ahli_waris }}</td>
                                                <td>
                                                    @if($pengajuan->validasi_kk_ahli_waris == '')
                                                    <span class="badge badge-warning">Proses</span>
                                                    @elseif($pengajuan->validasi_kk_ahli_waris == 0)
                                                    <span class="badge badge-danger">Ditolak</span>
                                                    @elseif($pengajuan->validasi_kk_ahli_waris == 1)
                                                    <span class="badge badge-success">Diterima</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                Surat Pernyataan Ahli Waris 
                                                    <a href="../../{{ $pengajuan->surat_pernyataan_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"></i> Dokumen
                                                </td>
                                                <td>{{ $pengajuan->keterangan_surat_pernyataan_ahli_waris }}</td>
                                                <td>
                                                    @if($pengajuan->validasi_surat_pernyataan_ahli_waris == '')
                                                    <span class="badge badge-warning">Proses</span>
                                                    @elseif($pengajuan->validasi_surat_pernyataan_ahli_waris == 0)
                                                    <span class="badge badge-danger">Ditolak</span>
                                                    @elseif($pengajuan->validasi_surat_pernyataan_ahli_waris == 1)
                                                    <span class="badge badge-success">Diterima</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                Akta Kelahiran Bagi Ahli Waris yang Belum Memiliki KTP-EL 
                                                    <a href="../../{{ $pengajuan->akta_kelahiran_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"></i> Dokumen
                                                </td>
                                                <td>{{ $pengajuan->keterangan_akta_kelahiran_ahli_waris }}</td>
                                                <td>
                                                    @if($pengajuan->validasi_akta_kelahiran_ahli_waris == '')
                                                    <span class="badge badge-warning">Proses</span>
                                                    @elseif($pengajuan->validasi_akta_kelahiran_ahli_waris == 0)
                                                    <span class="badge badge-danger">Ditolak</span>
                                                    @elseif($pengajuan->validasi_akta_kelahiran_ahli_waris == 1)
                                                    <span class="badge badge-success">Diterima</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                Rekening Atas Nama Ahli Waris 
                                                    <a href="../../{{ $pengajuan->rekening_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"></i> Dokumen
                                                </td>
                                                <td>{{ $pengajuan->keterangan_rekening_ahli_waris }}</td>
                                                <td>
                                                    @if($pengajuan->validasi_rekening_ahli_waris == '')
                                                    <span class="badge badge-warning">Proses</span>
                                                    @elseif($pengajuan->validasi_rekening_ahli_waris == 0)
                                                    <span class="badge badge-danger">Ditolak</span>
                                                    @elseif($pengajuan->validasi_rekening_ahli_waris == 1)
                                                    <span class="badge badge-success">Diterima</span>
                                                    @endif
                                                </td>
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
                        <div class="ibox ibox-grey">
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
                                            <td width="33%">Akte Kematian <a href="../../../{{ $penerbitan->akte_kematian }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i></td>
                                            <td width="33%">Kartu Tanda Penduduk <a href="../../../{{ $penerbitan->ktp }}" target="_blank"><i class="fa fa-paperclip"></i> Dokumen</td>
                                            <td width="33%">Kartu Keluarga <a href="../../../{{ $penerbitan->kk }}" target="_blank"><i class="fa fa-paperclip"></i> Dokumen</td>
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