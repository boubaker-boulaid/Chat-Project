<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $users = User::where('id', '<>', Auth::id())->orderBy('name')->get();

        return view('Chat.index', compact('users'));
    }

    public function show(User $chat_partner)
    {
        $messages = Message::where(function ($query) use ($chat_partner) {
            $query->where('receiver_id', $chat_partner->id)
                ->where('sender_id', Auth::id());
        })->orwhere(function ($query) use ($chat_partner) {
            $query->where('receiver_id', Auth::id())
                ->where('sender_id', $chat_partner->id);
        })->orderBy('created_at')
        ->get();

        return view('Chat.show', compact('messages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string|max:1000',
            'receiver_id' => 'required|exists:users,id',
            'sender_id' => 'required|exists:users,id'
        ]);

        $message = Message::create($validated);

        event(new MessageSent($message));

        return response()->json($message, 201);
    }
}
