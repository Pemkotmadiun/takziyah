<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Takziyah Bersama</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('assets/admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/assets/vendors/themify-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('assets/admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('assets/admin/assets/css/main.min.css') }}" rel="stylesheet" />
    <!-- Favicons -->
    <link href="{{ asset('assets/landing/assets/img/Kota-Madiun.png') }}" rel="icon">
    <link href="{{ asset('assets/landing/assets/img/Kota-Madiun.png') }}" rel="apple-touch-icon">
    <!-- PAGE LEVEL STYLES-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="fixed-navbar has-animation sidebar-mini">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.html">
                    <span class="brand">Takziyah
                        <span class="brand-tip"> Bersama</span>
                    </span>
                    <span class="brand-mini">TB</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                                <!-- START TOP-LEFT TOOLBAR-->
                                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <!-- <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Search here...">
                            </div>
                        </form> -->
                    </li>
                </ul>
            </div>
        </header>
        
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <!-- <div class="admin-block d-flex">
                    <div>
                        <img src="{{ asset('assets/admin/assets/img/admin-avatar.png') }}" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">James Brown</div><small>Administrator</small></div>
                </div> -->
                <ul class="side-menu metismenu">
                    </br>
                    <li>
                        <a class="active" href="{{ url('/') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Beranda</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <!-- <div class="alert alert-warning"><b>Informasi,</b> untuk mengajukan santunan kematian, anda dapat melengkapi dokumen di form pengajuan santuan. -->
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
                                @if( $data->validasi_dukcapil == '0' )
                                    <div class="alert alert-danger alert-dismissable fade show">
                                        <p>Laporan berikut telah divalidasi dengan hasil validasi : <b>Ditolak</b>, {{ $data->keterangan_validasi_dukcapil }}</p>
                                    </div>
                                @elseif( $data->validasi_dukcapil == '1' )
                                    <div class="alert alert-success alert-dismissable fade show">
                                        <p>Laporan berikut telah divalidasi dengan hasil validasi : <b>Diterima, {{ $data->keterangan_validasi_dukcapil }}</b></p>
                                    </div>
                                @endif
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
                                <div class="ibox-title">Pengajuan Santunan</div>
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
                            @if(count($pengajuan) >= 1)
                                <div class="alert alert-warning alert-dismissable fade show">
                                    <h4>Pengajuan Santunan Berhasil !</h4>
                                    <p>Pengajuan santunan telah dilakukan, mohon tunggu untuk validasi dari OPD terkait. Informasi mengenai validasi dapat anda lihat pada form berikut pada tabel dibawah.</p>
                                </div>

                                <table class="table table-bordered">
                                    @foreach($pengajuan as $pengajuan)
                                    <thead class="thead-default">
                                        <tr>
                                            <th width="1%">#</th>
                                            <th width="45%">Dokumen</th>
                                            <th width="45%">Keterangan</th>
                                            <th width="9%">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                Surat Permohonan Santunan Kematian 
                                                <a href="../../{{ $pengajuan->surat_permohonan_santunan }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_surat_permohonan_santunan == '0')
                                                <a style="color:orange"><i class="fa fa-edit"> Upload Ulang</i>
                                                @endif
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
                                            <td style="display:none">surat_permohonan_santunan</td>
                                            <td style="display:none">{{ $pengajuan->laporan_id }}</td>

                                            <div id="formValidasisurat_permohonan_santunan" class="modal fade text-center">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" id="konten_detilsurat_permohonan_santunan">

                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                KTP-EL Masyarakat yang Meninggal 
                                                <a href="../../{{ $pengajuan->ktp_masyarakat_meninggal }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_ktp_masyarakat_meninggal == '0')
                                                <a style="color:orange"><i class="fa fa-edit"> Upload Ulang</i>
                                                @endif
                                            </td>
                                            <td>{{ $pengajuan->keterangan_ktp_masyarakat_meninggal }}</td>
                                            <td>
                                                @if($pengajuan->validasi_ktp_masyarakat_meninggal == '')
                                                <span class="badge badge-warning">Proses</span>
                                                @elseif($pengajuan->validasi_ktp_masyarakat_meninggal == 0)
                                                <span class="badge badge-danger">Ditolak</span>
                                                @elseif($pengajuan->validasi_ktp_masyarakat_meninggal == 1)
                                                <span class="badge badge-success">Diterima</span>
                                                @endif
                                            </td>
                                            <td style="display:none">ktp_masyarakat_meninggal</td>
                                            <td style="display:none">{{ $pengajuan->laporan_id }}</td>

                                            <div id="formValidasiktp_masyarakat_meninggal" class="modal fade text-center">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" id="konten_detilktp_masyarakat_meninggal">

                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                Akta Kematian atau Surat Keterangan Lahir Mati 
                                                <a href="../../{{ $pengajuan->akta_kematian }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_akta_kematian == '0')
                                                <a style="color:orange"><i class="fa fa-edit"> Upload Ulang</i>
                                                @endif
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
                                            <td style="display:none">akta_kematian</td>
                                            <td style="display:none">{{ $pengajuan->laporan_id }}</td>

                                            <div id="formValidasiakta_kematian" class="modal fade text-center">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" id="konten_detilakta_kematian">

                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                KTP-EL Ahli Waris 
                                                <a href="../../{{ $pengajuan->ktp_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_ktp_ahli_waris == '0')
                                                <a style="color:orange"><i class="fa fa-edit"> Upload Ulang</i>
                                                @endif
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
                                            <td style="display:none">ktp_ahli_waris</td>
                                            <td style="display:none">{{ $pengajuan->laporan_id }}</td>

                                            <div id="formValidasiktp_ahli_waris" class="modal fade text-center">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" id="konten_detilktp_ahli_waris">

                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                KK Ahli Waris 
                                                <a href="../../{{ $pengajuan->kk_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_kk_ahli_waris == '0')
                                                <a style="color:orange"><i class="fa fa-edit"> Upload Ulang</i>
                                                @endif
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
                                            <td style="display:none">kk_ahli_waris</td>
                                            <td style="display:none">{{ $pengajuan->laporan_id }}</td>

                                            <div id="formValidasikk_ahli_waris" class="modal fade text-center">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" id="konten_detilkk_ahli_waris">

                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                                Surat Pernyataan Ahli Waris 
                                                <a href="../../{{ $pengajuan->surat_pernyataan_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_surat_pernyataan_ahli_waris == '0')
                                                <a style="color:orange"><i class="fa fa-edit"> Upload Ulang</i>
                                                @endif
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
                                            <td style="display:none">surat_pernyataan_ahli_waris</td>
                                            <td style="display:none">{{ $pengajuan->laporan_id }}</td>

                                            <div id="formValidasisurat_pernyataan_ahli_waris" class="modal fade text-center">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" id="konten_detilsurat_pernyataan_ahli_waris">

                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>
                                                Akta Kelahiran Bagi Ahli Waris yang Belum Memiliki KTP-EL 
                                                <a href="../../{{ $pengajuan->akta_kelahiran_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_akta_kelahiran_ahli_waris == '0')
                                                <a style="color:orange"><i class="fa fa-edit"> Upload Ulang</i>
                                                @endif
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
                                            <td style="display:none">akta_kelahiran_ahli_waris</td>
                                            <td style="display:none">{{ $pengajuan->laporan_id }}</td>

                                            <div id="formValidasiakta_kelahiran_ahli_waris" class="modal fade text-center">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" id="konten_detilakta_kelahiran_ahli_waris">

                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>
                                                Rekening Atas Nama Ahli Waris 
                                                <a href="../../{{ $pengajuan->rekening_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_rekening_ahli_waris == '0')
                                                <a style="color:orange"><i class="fa fa-edit"> Upload Ulang</i>
                                                @endif
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
                                            <td style="display:none">rekening_ahli_waris</td>
                                            <td style="display:none">{{ $pengajuan->laporan_id }}</td>

                                            <div id="formValidasirekening_ahli_waris" class="modal fade text-center">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" id="konten_detilrekening_ahli_waris">

                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            @else
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
                                        <label>Surat Permohonan Santunan Kematian dengan Mengetahui Ketua RT (ASLI)</label>
                                        <input class="form-control" type="file" id="surat_permohonan_santunan" name="surat_permohonan_santunan" @if(count($pengajuan) >= 1) disabled @endif>
                                    </div>
                                    <div class="form-group">
                                        <label>KTP-EL Masyarakat yang Meninggal</label>
                                        <input class="form-control" type="file" id="ktp_masyarakat_meninggal" name="ktp_masyarakat_meninggal" @if(count($pengajuan) >= 1) disabled @endif>
                                    </div>
                                    <div class="form-group">
                                        <label>Akta Kematian atau Surat Keterangan Lahir Mati</label>
                                        <input class="form-control" type="file" id="akta_kematian" name="akta_kematian" @if(count($pengajuan) >= 1) disabled @endif>
                                    </div>
                                    <div class="form-group">
                                        <label>KTP-EL Ahli Waris</label>
                                        <input class="form-control" type="file" id="ktp_ahli_waris" name="ktp_ahli_waris" @if(count($pengajuan) >= 1) disabled @endif>
                                    </div>
                                    <div class="form-group">
                                        <label>KK Ahli Waris</label>
                                        <input class="form-control" type="file" id="kk_ahli_waris" name="kk_ahli_waris" @if(count($pengajuan) >= 1) disabled @endif>
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Pernyataan Ahli Waris dengan Materai 10.000</label>
                                        <input class="form-control" type="file" id="surat_pernyataan_ahli_waris" name="surat_pernyataan_ahli_waris" @if(count($pengajuan) >= 1) disabled @endif>
                                    </div>
                                    <div class="form-group">
                                        <label>Akta Kelahiran Bagi Ahli Waris yang Belum Memiliki KTP-EL</label>
                                        <input class="form-control" type="file" id="akta_kelahiran_ahli_waris" name="akta_kelahiran_ahli_waris" @if(count($pengajuan) >= 1) disabled @endif>
                                    </div>
                                    <div class="form-group">
                                        <label>Rekening Atas Nama Ahli Waris</label>
                                        <input class="form-control" type="file" id="rekening_ahli_waris" name="rekening_ahli_waris" @if(count($pengajuan) >= 1) disabled @endif>
                                    </div>
                                    <button class="btn btn-warning btn-block" @if(count($pengajuan) >= 1) disabled @endif>Buat Pengajuan Santunan</button>
                                </form>
                            @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

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
                                            <td width="33%">Akte Kematian <a href="../../{{ $penerbitan->akte_kematian }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i></td>
                                            <td width="33%">Kartu Tanda Penduduk <a href="../../{{ $penerbitan->ktp }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i></td>
                                            <td width="33%">Kartu Keluarga <a href="../../{{ $penerbitan->kk }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                @endif

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
                                        <tr>
                                            <th style="background-color:#eeeeee">User</th>
                                            <th style="background-color:#eeeeee">Jenis</th>
                                            <th style="background-color:#eeeeee">Keterangan</th>
                                            <th style="background-color:#eeeeee">Waktu</th>
                                        </tr>
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
            <!-- END PAGE CONTENT-->
            @include('admin.templates.partials.footer')
        </div>
    </div>
    
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    @include('admin.templates.partials.scripts')

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            $('button#delete').on('click', function(e){
                    e.preventDefault();

                    var href = $(this).attr('href');

                    Swal.fire({
                        title: 'Apakah anda yakin hapus data ini?',
                        text: "Data yang dihapus bisa dikembalikan!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus!'
                        }).then((result) => {
                        if (result.value) {
                            document.getElementById('deleteForm').action = href;
                            document.getElementById('deleteForm').submit();

                            Swal.fire(
                                'Berhasil!',
                                'Data telah dihapus.',
                                'success'
                            )
                        }
                    })
                })
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $(".fa.fa-edit").on('click',function(){
                    var currentRow=$(this).closest("tr");
                    var dok=currentRow.find("td:eq(4)").text();
                    var id=currentRow.find("td:eq(5)").text();
                    // console.log('id : '+id);
                    var text = "#formValidasi"+dok;
                    var konten = "#konten_detil"+dok;

                    $(konten).empty();
                    $(konten).load('{{ url('pengajuan/ulang/')}}/'+dok+'/'+id);
                    $(text).modal();
                });
            });
        </script>
</body>

</html>