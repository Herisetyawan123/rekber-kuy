<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Mendapatkan pengguna yang sedang login
        return view('pages.profile.index', compact('user')); // Menampilkan view profile dengan data user
    }

    public function uploadProfile(Request $request)
    {
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time().'.'.$file->getExtension(); // Ambil nama file asli
            $filePath = '/images/avatar/' . $fileName; // Path lengkap file

            // Pindahkan file ke direktori 'public/img/foto'
            $file->move(public_path('images/avatar'), $fileName);

            $profil = Profile::where('user_id',auth()->id())->first(); // Mendapatkan objek user yang sedang login
            if ($profil->foto) {
                $oldFilePath = public_path($profil->foto);
                if (File::exists($oldFilePath)) {
                    File::delete($oldFilePath); // Hapus gambar lama
                }
            }

            // Simpan path lengkap ke database user
            $profil = Profile::find($profil->id); // Mendapatkan objek user yang sedang login
            $profil->foto = $filePath; // Simpan path lengkap ke dalam kolom 'foto' di database
            $profil->save();

            return response()->json(['success' => true, 'path' => $filePath]);
        }
        return response()->json(['success' => false]);
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
