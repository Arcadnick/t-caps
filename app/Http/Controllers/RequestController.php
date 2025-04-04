<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use App\Models\Request as Lead;

class RequestController extends Controller
{
    public function store(HttpRequest $request)
    {
        $data = $request->validate([
            'user_name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'nullable|string',
            'request_type' => 'required|in:подключение,разработка,консультация',
            'capsule_id' => 'nullable|exists:capsules,id',
        ]);

        Lead::create($data);

        return back()->with('success', 'Ваша заявка отправлена!');
    }
}
