@extends('admin.templates.default')

@section('content')
    <div class="page-content fade-in-up">
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            <h4><i class="icon fa fa-folder-open-o"></i> {{ $title }}</h4>
            Takziyah Bersama
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="ibox ibox-grey">
                <table class="table table-bordered">
                    <thead class="thead-default">
                        <tr>
                            <th width="1%">No</th>
                            <th width="19%">Nama Pelapor</th>
                            <th width="19%">Alamat Email</th>
                            <th width="19%">No Telepon</th>
                            <th width="20%">Warga Meninggal</th>
                            <th width="18%">Dibuat</th>
                            <th width="4">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach($data as $data)
                        <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td><a href="{{ route('admin.laporan.show', $data->id) }}">{{ $data->nama_pelapor }}</a></td>
                            <td>{{ $data->alamat_email }}</td>
                            <td>{{ $data->no_telepon }}</td>
                            <td>{{ $data->nama_meninggal }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>
                                @if($data->validasi == '0')
                                    <span class="badge badge-danger">Ditolak</span>
                                @elseif(empty($data->validasi))
                                    <span class="badge badge-info">Baru</span>
                                @elseif($data->validasi == '1')
                                    <span class="badge badge-success">Diterima</span>
                                @elseif($data->validasi == '2')
                                    <span class="badge badge-warning">Diproses</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection