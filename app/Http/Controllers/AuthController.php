<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;
use App\Models\LevelModel;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) { // jika sudah login, maka redirect ke halaman home
            return redirect('/');
        }
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                return response()->json([
                    'status' => 'true',
                    'message' => 'Login Berhasil',
                    'redirect' => url('/')
                ]);
            }

            return response()->json([
                'status' => 'false',
                'message' => 'Login Gagal'
            ]);
        }

        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
    public function register()
    {
        // Data yang dibutuhkan untuk halaman registrasi
        $breadcrumb = (object) [
            'title' => 'Registrasi Pengguna',
            'list'  => ['Home', 'Registrasi']
        ];
        
        $page = (object) [
            'title' => 'Formulir Registrasi'
        ];
        
        $levels = LevelModel::all(); // Ambil semua data level untuk dropdown

        $activeMenu = 'register';
        
        return view('auth.register', [
            'breadcrumb' => $breadcrumb, 
            'page' => $page, 
            'levels' => $levels, // Kirim data levels ke view
            'activeMenu' => $activeMenu
        ]);
    }

    /**
     * Menyimpan data dari form registrasi.
     */
    public function storeRegistration(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'nama' => 'required|string|max:100',
            'username' => 'required|string|min:3|unique:m_user,username',
            'password' => 'required|min:5|confirmed',
            'level_id' => 'required|integer|exists:m_level,level_id'
        ]);
        
        // 2. Simpan data user baru ke database
        UserModel::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password), // Enkripsi password
            'level_id' => $request->level_id
        ]);
        
        // 3. Redirect ke halaman login dengan pesan sukses
        return redirect('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
