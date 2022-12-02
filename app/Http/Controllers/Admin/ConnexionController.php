<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class ConnexionController extends Controller
{
    public function index(){
    
        $data = [
            'title' => 'Connexion',
        ];

        return view('Login.login', $data);
    } 

public function authenticate(Request $request)
{
    //pasang rules
    $rules = [
        'username' => 'required',
        'password'=> 'required'
    ];

    //pasang pesan kesalahan
    $messages = [
        'username.required'     => 'Form username wajib diisi',
        'password.required'     => 'Form password wajib diisi',
    ];

    //ambil semua request dan pasang rules dan isi pesanya
    $validator = Validator::make($request->all(), $rules, $messages);
    //jika rules tidak sesuai kembalikan ke login bawak pesan error dan bawak request nya agar bisa dipakai denga old di view
    if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
    }

        //jika berhasil jalankan script berrikut
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
           
            $request->session()->regenerate();
            return \redirect()->intended('/admin')->with('success', 'Selamat datang '. auth()->user()->name.' '  );
                    
            
        }else{
            return back()->with('loginerror', 'Username Dan Password Salah');
        }


    

}

public function logout_connexion(Request $request){

    Auth::logout();

    //invalid session supaya tidak bisa dipakai
    $request->session()->flush();
    $request->session()->invalidate();
    //bikin token baru supaya tidak dibajak
    $request->session()->regenerateToken();
    //redirect ke halaman mana
    return \redirect()->route('connexion');
}
}
