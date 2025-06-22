<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        /*$data = [
            'username' => 'customer-1',
            'nama' =>'pelanggan',
            'password' => Hash::make('12345'),
            'level_id' => 4
        ];
        UserModel::insert($data);
        */

        /*$data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1')->update($data);
        */

        /*$data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' =>'Manager 3',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data);


        $data = UserModel::where('level_id', 2)->get();
        return view('user', ['data' => $data]);

        $user = UserModel::firstOrCreate(
            [
                'username' => 'manager',
                'nama' => 'Manager',
            ]
        );
        return view('user', ['data' => $user]);


        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        $user->save();

        return view('user', ['data' => $user]);


        $user = UserModel::create([
            'username' => 'manager55',
            'nama' => 'Manager55',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ]);

        $user->username = 'manager56';

        $user->isDirty(); //true
        $user->isDirty('username'); //true
        $user->isDirty('nama'); //true
        $user->isDirty(['nama','username']); //true

        $user->isClean(); //false
        $user->isClean('username'); //false
        $user->isClean('nama'); //false
        $user->isClean(['nama','username']); //false

        $user->save();

        $user->isDirty(); //false
        $user->isClean(); //true
        dd($user->isDirty());



        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager12';

        $user->save();

        $user->wasChanged(); //true
        $user->wasChanged('username'); //true
        $user->wasChanged(['username','level_id']); //true
        $user->wasChanged('nama'); //false
        dd($user->wasChanged(['nama','username']));
        */

        $user = UserModel::all();
        return view('user', ['data' => $user]);

        }

        public function tambah(){
            return view('user_tambah');
        }

        public function tambah_simpan(Request $request){
            UserModel::create([
                'username' =>$request->username,
                'nama' =>$request->nama,
                'password' => Hash::make($request->password),
                'level_id' =>$request->level_id
            ]);

            return redirect('/user');
        }

        public function ubah($id){
            $user = UserModel::find($id);
            return view('user_ubah', ['data' =>$user]);
        }

        public function ubah_simpan($id, Request $request){
            $user = UserModel::find($id);

            $user->username = $request->username;
            $user->nama = $request->nama;
            $user->password = Hash::make('$request->password');
            $user->level_id = $request->level_id;

            $user->save();

            return redirect('/user');
        }

        public function hapus($id){
            $user = UserModel::find($id);
            $user->delete();
            
            return redirect('/user');
        }
        
        $user = UserModel::with('level_id')->get();
        dd $user;
}
