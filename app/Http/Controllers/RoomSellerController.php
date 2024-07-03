<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomSellerController extends Controller
{
    protected function generateCode()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = 'NG-';
        for ($i = 0; $i < 10; $i++) {
            $code .= $characters[random_int(0, strlen($characters) - 1)];
        }
        return $code;
    }

    public function getCode($id)
    {
        $chat = Chat::findOrFail($id);
        return response()->json(['code' => $chat->code]);
    }

    public function index()
    {
        $rooms = Chat::where('seller_id', '=', Auth::user()->id)->orderBy('id',  'DESC')->paginate(8);
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
        Chat::create([
            'code' => $this->generateCode(),
            'title' => $request->title,
            'seller_id' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success', 'Room Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rooms = Chat::with(['messages', 'seller'])->where('code', '=', $id)->first();
        if ($rooms->seller_id == Auth::user()->id)
        {
            return view('pages.room.detail', compact('rooms'));
        }
        // dd($rooms);
        return redirect()->route('room-seller.index')->with('error', 'Kamu bukan pemilik room');
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
        $chat = Chat::find($id);
        // Check if chat exists and belongs to the authenticated user
        if ($chat && $chat->seller_id == Auth::user()->id) {
            $chat->delete();
            return redirect()->back()->with('success', 'Room berhasil dihapus');
        }
        return redirect()->back();
    }

    public function chat(Request $request)
    {
        $chat = ChatMessage::create([
            'message' => $request->message,
            'user_id' => Auth::user()->id,
            'chat_id' => $request->chat_id
        ]);

        return redirect()->back();
    }
}
