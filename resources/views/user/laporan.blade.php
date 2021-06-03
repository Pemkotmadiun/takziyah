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
                                            @if($pengajuan->status == 0)
                                            <td><button href="{{ route('pengajuan.santunan_destroy', $pengajuan->id) }}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-times"></i></button></td>
                                            @endif
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
                                            <td width="25%">{{ $log->user_id }}</td>
                                            <td width="41%">{{ $log->keterangan }}</td>
                                            <td width="33%">{{ $log->created_at }}</td>
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
</body>

</html>