<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rekening;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    public function index()
    {
        try {
            $rekening = Rekening::all();
            $user = User::all();
            return view('pages.rekening.index', [
                'getRekening' => $rekening,
                'getUser' => $user
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'jenis' => 'required',
                'no_rekening' => 'required',
                'user_id' => 'required'
            ]);
            Rekening::create([
                'name' => $request->name,
                'jenis' => $request->jenis,
                'no_rekening' => $request->no_rekening,
                'user_id' => $request->user_id
            ]);
            return redirect()->back()->with('success', 'rekening successfully added');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $rekening = Rekening::find($id);
            $user = User::find($rekening->user_id);

            $data = [
                'name' => $rekening->name,
                'jenis' => $rekening->jenis,
                'no_rekening' => $rekening->no_rekening,
                'user_name' => $user->name,
                'user_id' => $user->id,
            ];
            return response()->json($data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }


    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'jenis' => 'required',
                'no_rekening' => 'required',
                'user_id' => 'required',
            ]);

            $rekening = Rekening::findOrFail($id);
            $rekening->name = $request->name;
            $rekening->jenis = $request->jenis;
            $rekening->no_rekening = $request->no_rekening;
            $rekening->user_id = $request->user_id;
            $rekening->save();

            $request->session()->flash('success', 'rekening successfully update');
            return response()->json(['success' => 'rekening successfully update']);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $rekening = Rekening::findOrFail($id);
            $rekening->delete();
            return redirect()->back()->with('success', 'rekening successfully delete');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
