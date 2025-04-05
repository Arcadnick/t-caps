<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        \App\Models\Request::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'message' => $request->message,
            'request_type' => 'разработка',
            'status' => 'новая',
        ]);

        return back()->with('success', 'Заявка успешно отправлена!');
    }
}
