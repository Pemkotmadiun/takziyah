<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\User;
use Auth;
use Validator;
use Hash;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_user = Auth::user()->id;
        $user = User::where('id', $id_user)->first();

        return view('admin.profil.ubah_password', [
            'title' => 'Ubah Password',
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ubah_password(Request $request)
    {
        $this->validate($request, [
            'password_lama' => 'required',
            'password_baru' => 'required',
            'konfirmasi' => 'required|same:password_baru',
        ],
        [
            'password_lama.required' => 'Password Lama Harus Diisi!',
            'password_baru.required' => 'Password Baru Harus Diisi!',
            'konfirmasi.same' => 'Konfirmasi Harus Sama Dengan Password Baru!'
        ]);

        if ( Hash::make($request->password_lama) == Auth::user()->password) { 
            session()->put('statusT', 'Password lama tidak sama' ); 
        }else{
            $id_user=Auth::user()->id;
            $user = User::where('id', $id_user)->first();

            $user->fill([
                'password' => Hash::make($request->password_baru)
            ])->save();

            session()->put('statusY', 'Password berhasil Diubah' );
        }

        return redirect('admin/profil');
    }
}
