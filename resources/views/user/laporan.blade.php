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
                <div class="alert alert-success"><strong>Informasi !</strong> Klik link berikut jika anda ingin melakukan pengajuan santunan.
                    <a class="alert-link" href="">Buat Pengajuan</a>
                </div>
                <div class="row">
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
                                    @foreach($data as $data)
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
                                    @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ibox ibox-warning">
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
                                <form>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input class="form-control" type="text" placeholder="NIK Warga Meninggal" value="">
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input class="form-control" type="text" placeholder="Nama Lengkap Warga Meninggal" value="">
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <div class="form-group">
                                        <label>KTP Warga Meninggal</label>
                                        <input class="form-control" type="file">
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <div class="form-group">
                                        <label>KK Warga Meninggal</label>
                                        <input class="form-control" type="file">
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <div class="form-group">
                                        <label>KTP Saksi 1</label>
                                        <input class="form-control" type="file">
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <div class="form-group">
                                        <label>KTP Saksi 2</label>
                                        <input class="form-control" type="file">
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Keterangan Kematian (jika ada)</label>
                                        <input class="form-control" type="file">
                                        <!-- <span class="help-block">This is some placeholder block-level help text for the above input.</span> -->
                                    </div>
                                    <button class="btn btn-default btn-block">Buat Pengajuan Santunan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ibox-grey">
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
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>NIK</td>
                                            <td>Nama Lengkap</td>
                                            <td><i class="fa fa-paperclip"></i> KTP Warga Meninggal</td>
                                            <td><i class="fa fa-paperclip"></i> KK Warga Meninggal</td>
                                            <td><i class="fa fa-paperclip"></i> KTP Saksi 1</td>
                                            <td><i class="fa fa-paperclip"></i> KTP Saksi 2</td>
                                            <td><i class="fa fa-paperclip"></i> Surat Keterangan Kematian</td>
                                        </tr>
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
</body>

</html>