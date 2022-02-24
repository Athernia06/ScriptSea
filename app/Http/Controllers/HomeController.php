<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function profile()
    {
        return view('profile');
    }

    public function profile_update(Request $request)
    {
        $post = User::find(Auth::user()->id);

        if (isset($request->password)) {
            $password = Hash::make($request->password);
        } else {
            $password = $request->old_password;
        }

        $post->name = $request->name;
        $post->email = $request->email;
        $post->npm = $request->npm;
        $post->jk = $request->jk;
        $post->fakultas = $request->fakultas;
        $post->jurusan = $request->jurusan;
        $post->alamat = $request->alamat;
        $post->password = $password;

        $post->save();

        return redirect()->route('profile')->with(['success' => 'Berhasil diupdate']);
    }

    public function profile_upload(Request $request)
    {
        $post = User::find(Auth::user()->id);

        if ($request->file != null) {
            $file = $request->file('file');
            $fileName = date('YmdHi').'_'.$file->getClientOriginalName();
            $file->move(public_path('file'), $fileName);

            $old_file_name = $request->old_file_name;
            $path=public_path().'/file/'.$old_file_name;

            if (isset($old_file_name)) {
                if (file_exists($path)) {
                    unlink($path);
                }
            }

        } else {
            $fileName = $request->old_file_name;
        }

        $post->file = $fileName;

        $post->save();

        return redirect()->route('profile')->with(['success' => 'Berhasil diupdate']);
    }
}
