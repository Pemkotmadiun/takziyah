@extends('admin.templates.default')

@section('content')
    <div class="page-content fade-in-up">
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            <h4><i class="icon fa fa-folder-open-o"></i> {{ $title }}</h4>
            Takziyah Bersama
        </div>

        <div class="ibox ibox-info">
            <div class="ibox-body">
                <form action="{{ route('admin.profil.ubah_password') }}" method="POST">
                    @csrf
                    @if (session()->has('statusY'))
                        <p class="font-bold  alert alert-info m-b-sm">
                            {{ session()->get('statusY') }}
                        </p>
                        {{session()->forget('statusY')}}
                    @endif
                    
                    <div class="form-group @error('nama_pedagang') has-error @enderror">
                        <label for="">Nama Pengguna</label>
                        <input id="nama" name="nama" type="text" class="form-control required" value="{{ $user->name }}" readonly>
                    </div>

                    <div class="form-group @error('username') has-error @enderror">
                        <label for="">Username</label>
                        <input id="username" name="username" type="text" class="form-control required" value="{{ $user->email }}"  readonly>
                    </div>

                    <div class="form-group @error('password_lama') has-error @enderror">
                        <label for="">Password Lama</label>
                        <input id="password_lama" name="password_lama" type="password" class="form-control required">
                        @error('password_lama')
                            <span class="help-block">{{ $message }}</span>
                        @enderror

                        @if (session()->has('statusT'))
                            <span style="color:red" class="help-block">{{ session()->get('statusT') }}</span>
                            {{session()->forget('statusT')}}
                        @endif
                    </div>

                    <div class="form-group @error('password_baru') has-error @enderror">
                        <label for="">Password Baru</label>
                        <input id="password_baru" name="password_baru" type="password" class="form-control required">
                        @error('password_baru')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('konfirmasi') has-error @enderror">
                        <label for="">Konfirmasi Password</label>
                        <input id="konfirmasi" name="konfirmasi" type="password" class="form-control required">
                        @error('konfirmasi')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-primary"> <a href="" type="button" class="btn btn-danger">Batal</a>
                    </div>
                </form>       
            </div>
        </div>
    </div>
@endsection