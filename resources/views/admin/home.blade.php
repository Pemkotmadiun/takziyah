@extends('admin.templates.default')

@section('content')
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ count($total) }}</h2>
                                <div class="m-b-5">TOTAL LAPORAN</div><i class="ti-shopping-cart widget-stat-icon"></i>
                                <div><a href="{{ route('admin.laporan.keseluruhan') }}" style="color: white"><i class="fa fa-level-up m-r-5" ></i><small>Klik untuk detail</small></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ count($baru) }}</h2>
                                <div class="m-b-5">BARU</div><i class="ti-bar-chart widget-stat-icon"></i>
                                <div><a href="{{ route('admin.laporan.baru') }}" style="color: white"><i class="fa fa-level-up m-r-5"></i><small>Klik untuk detail</small></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ count($diterima) }}</h2>
                                <div class="m-b-5">DITERIMA</div><i class="fa fa-money widget-stat-icon"></i>
                                <div><a href="{{ route('admin.laporan.diterima') }}" style="color: white"><i class="fa fa-level-up m-r-5"></i><small>Klik untuk detail</small></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ count($ditolak) }}</h2>
                                <div class="m-b-5">DITOLAK</div><i class="ti-user widget-stat-icon"></i>
                                <div><a href="{{ route('admin.laporan.ditolak') }}" style="color: white"><i class="fa fa-level-up m-r-5"></i><small>Klik untuk detail</small></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(count($baru) > 0)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Laporan Baru</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="16%">Nama Pelapor</th>
                                            <th width="16%">Email</th>
                                            <th width="16%">No Telepon</th>
                                            <th width="16%">Nama Warga Meninggal</th>
                                            <th width="16%">Keterangan</th>
                                            <th width="15%">Waktu Kematian</th>
                                            <th width="5%">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($baru as $baru)
                                        <tr>
                                            <td><a href="{{ route('admin.laporan.show', $baru->id) }}">{{ $baru->nama_pelapor }}</a></td>
                                            <td>{{ $baru->alamat_email }}</td>
                                            <td>{{ $baru->no_telepon }}</td>
                                            <td>{{ $baru->nama_meninggal }}</td>
                                            <td>{{ $baru->keterangan }}</td>
                                            <td>{{ $baru->waktu_kematian }}</td>
                                            <td><span class="badge badge-info">Baru</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <style>
                    .visitors-table tbody tr td:last-child {
                        display: flex;
                        align-items: center;
                    }

                    .visitors-table .progress {
                        flex: 1;
                    }

                    .visitors-table .progress-parcent {
                        text-align: right;
                        margin-left: 10px;
                    }
                </style>
            </div>
@endsection