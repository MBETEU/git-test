<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use function Termwind\render;

class ConversationController extends Controller
{
    public function index()
    {
        $conversations = auth()->user()->conversations()->latest()->get();
        return view('back-office.conversations.index', compact('conversations'));
    }
    public function show(Conversation $conversation)
    {
        return view('back-office.conversations.show',compact('conversation'));
    }
}
