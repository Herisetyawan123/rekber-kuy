<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomBuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Chat::where('buyer_id', '=', Auth::user()->id)->paginate(8);
        return view('pages.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rooms = Chat::where('code', '=', $request->code)->first();
        if ($rooms->buyer_id != null)
        {
            return redirect()->back()->with('error', 'room sudah expired');
        }
        if ($rooms->seller_id == Auth::user()->id)
        {
            return redirect()->back()->with('error', 'Anda tidak bisa masuk room anda sendiri.');
        }

        $rooms = Chat::where('code', '=', $request->code);
        $rooms->update(['buyer_id' => Auth::user()->id]);
        return redirect()->back()->with('success', 'berhasil masuk room');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rooms = Chat::with(['messages', 'buyer'])->where('code', '=', $id)->first();
        if ($rooms->buyer_id == Auth::user()->id)
        {
            return view('pages.room.detail', compact('rooms'));
        }
        return redirect()->route('room-buyer.index')->with('error', 'Anda bukan participant');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
