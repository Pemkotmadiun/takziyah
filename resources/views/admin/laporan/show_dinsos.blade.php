@extends('admin.templates.default')

@section('content')
            <div class="page-content fade-in-up">
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
                                <div class="ibox-title">Validasi Dokumen Pengajuan</div>
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
                                                Surat Permohonan Santunan Kematian </br>
                                                <a href="../../../{{ $pengajuan->surat_permohonan_santunan }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_surat_permohonan_santunan == '')
                                                <a style="color:orange" id="dokumen1"><i class="fa fa-edit"> Validasi</i>
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
                                            <td style="display:none">{{ $id }}</td>

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
                                            KTP-EL Masyarakat yang Meninggal </br>
                                                <a href="../../../{{ $pengajuan->ktp_masyarakat_meninggal }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_ktp_masyarakat_meninggal == '')
                                                <a style="color:orange" id="dokumen2"><i class="fa fa-edit"> Validasi</i>
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
                                            <td style="display:none">{{ $id }}</td>

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
                                            Akta Kematian atau Surat Keterangan Lahir Mati </br>
                                                <a href="../../../{{ $pengajuan->akta_kematian }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_akta_kematian == '')
                                                <a style="color:orange" id="dokumen3"><i class="fa fa-edit"> Validasi</i>
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
                                            <td style="display:none">{{ $id }}</td>

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
                                            KTP-EL Ahli Waris </br>
                                                <a href="../../../{{ $pengajuan->ktp_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_ktp_ahli_waris == '')
                                                <a style="color:orange" id="dokumen4"><i class="fa fa-edit"> Validasi</i>
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
                                            <td style="display:none">{{ $id }}</td>

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
                                            KK Ahli Waris </br>
                                                <a href="../../../{{ $pengajuan->kk_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_kk_ahli_waris == '')
                                                <a style="color:orange" id="dokumen5"><i class="fa fa-edit"> Validasi</i>
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
                                            <td style="display:none">{{ $id }}</td>

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
                                            Surat Pernyataan Ahli Waris </br>
                                                <a href="../../../{{ $pengajuan->surat_pernyataan_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_surat_pernyataan_ahli_waris == '')
                                                <a style="color:orange" id="dokumen6"><i class="fa fa-edit"> Validasi</i>
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
                                            <td style="display:none">{{ $id }}</td>

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
                                            Akta Kelahiran Bagi Ahli Waris yang Belum Memiliki KTP-EL </br>
                                                <a href="../../../{{ $pengajuan->akta_kelahiran_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_akta_kelahiran_ahli_waris == '')
                                                <a style="color:orange" id="dokumen7"><i class="fa fa-edit"> Validasi</i>
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
                                            <td style="display:none">{{ $id }}</td>

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
                                            Rekening Atas Nama Ahli Waris </br>
                                                <a href="../../../{{ $pengajuan->rekening_ahli_waris }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i>
                                                @if($pengajuan->validasi_rekening_ahli_waris == '')
                                                <a style="color:orange" id="dokumen8"><i class="fa fa-edit"> Validasi</i>
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
                                            <td style="display:none">{{ $id }}</td>

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
                                            <td width="33%">Akte Kematian <a href="../../../{{ $penerbitan->akte_kematian }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i></td>
                                            <td width="33%">Kartu Tanda Penduduk <a href="../../../{{ $penerbitan->ktp }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i></td>
                                            <td width="33%">Kartu Keluarga <a href="../../../{{ $penerbitan->kk }}" target="_blank"><i class="fa fa-paperclip"> Dokumen</i></td>
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
                    $(".fa.fa-edit").on('click',function(){
                        var currentRow=$(this).closest("tr");
                        var dok=currentRow.find("td:eq(4)").text();
                        var id=currentRow.find("td:eq(5)").text();
                        // console.log('id : '+id);
                        var text = "#formValidasi"+dok;
                        var konten = "#konten_detil"+dok;

                        $(konten).empty();
                        $(konten).load('{{ url('admin/laporan/validasi/')}}/'+dok+'/'+id);
                        $(text).modal();
                    });
                });
            </script>
@endsection