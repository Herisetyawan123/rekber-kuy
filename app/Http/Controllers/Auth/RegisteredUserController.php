<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Rekening;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('pages.auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $role = Role::where('name', 'user')->first();

        if ($role) {
            $user->assignRole($role);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('home');
    }

    public function storeProfile(Request $request, $id)
    {
        // $request->validate([
        //     'tanggal' => 'required|date', // Pastikan ini adalah tanggal yang valid
        //     'gender' => 'required|string|in:male,female,other', // Validasi untuk nilai yang diizinkan
        //     'alamat' => 'required|string|max:255', // Pastikan alamat tidak terlalu panjang
        //     'biografi' => 'nullable|string|max:500', // Biografi opsional, tetapi jika ada, harus berupa string dengan panjang maksimum
        // ]);
        // Simpan data ke database
        $profile = Profile::create([
            'user_id' => $id, // Ambil ID pengguna yang sedang login
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'tgl_lahir' => $request->tgl_lahir,
            'pekerjaan' => $request->pekerjaan,
            'gender' => $request->gender,
            'biografi' => $request->biografi,
        ]);

        if ($profile) {
            return response()->json(['message' => 'Profile saved successfully'], 200);
        } else {
            return response()->json(['message' => 'Failed to save profile'], 500);
        }
    }

    public function storeBank(Request $request, $id)
    {
        // $request->validate([
        //     'tanggal' => 'required|date', // Pastikan ini adalah tanggal yang valid
        //     'gender' => 'required|string|in:male,female,other', // Validasi untuk nilai yang diizinkan
        //     'alamat' => 'required|string|max:255', // Pastikan alamat tidak terlalu panjang
        //     'biografi' => 'nullable|string|max:500', // Biografi opsional, tetapi jika ada, harus berupa string dengan panjang maksimum
        // ]);
        // Simpan data ke database
        $bank = Rekening::create([
            'user_id' => $id,
            'name' => $request->atasnama, // Ambil ID pengguna yang sedang login
            'jenis' => $request->bank,
            'no_rekening' => $request->rekening,
        ]);

        if ($bank) {
            return response()->json(['message' => 'Profile saved successfully'], 200);
        } else {
            return response()->json(['message' => 'Failed to save profile'], 500);
        }
    }

}
