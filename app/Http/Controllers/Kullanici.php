<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Kullanici extends Controller
{
    function login(request $request) {
        $bilgiler = $request->only('email', 'password');
        $auth =Auth::class ;
        if ($auth::attempt($bilgiler)) {
            return redirect()->route('home');
        }

        return back()->withErrors('Kullanıcı adı veya şifre Yanlış');
    }
    function register(request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if ($user) {
            toastr()->success("Kullanıcı Başarı ile Eklendi","Başarılı!");
            return redirect()->back();
        }
        
    }

    function logout() {
        Auth::logout();
        toastr()->success("Çıkış Başarılı",'Başarılı');
        return redirect()->route("login");
    }
    function liste() {
        $datalar = User::get();
        return view("admin.user_list",compact("datalar"));
    }
    function sil($id) {
        User::whereId($id)->delete();
        toastr()->success("Silme işlemi Başarılı.","Başarılı!");
        return redirect()->back();
    }
    function yeni_sifre() {
        return view("sifre");
    }
    function change_pass(request $request) {
        $request->validate([
            'eski_sifre' => 'required|min:6|confirmed',
            'yeni_sifre' => 'required|min:6|confirmed',
            'yeni_sifre_tekrar' => 'required|min:6|same:new_password',
        ]);
        $user = User::find(Auth::user()->id);
        $old_password = $user->password;
        if (Hash::check($request->eski_sifre, $old_password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            toastr()->success("Şifreniz başarılı şekilde değiştirildi");
            
        } else {
            // Hatalı mesajı göster
            return redirect()->back()->with('error', 'Eski şifrenizi yanlış girdiniz.');
        }
    }
}
