<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as RequestModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        $userName = $request->input('user_name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $date = $request->input('selected_date');
        $time = $request->input('selected_time');
        $request_type = $request->input('request_type');
        $message = $request->input('message');
        $capsule_id = $request->input('capsule_id');

        $parsedDate = null;
        if ($date) {
            try {
                $parsedDate = \Carbon\Carbon::createFromFormat('d.m.Y', $date)->format('Y-m-d');
            } catch (\Exception $e) {
                $parsedDate = null;
            }
        }

        RequestModel::create([
            'user_name' => $userName,
            'capsule_id'=> $capsule_id,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'request_type' => $request_type,
            'status' => 'новая',
            'consultation_date' => $parsedDate,
            'consultation_time' => $time,
        ]);

        try {
            $token = env('TELEGRAM_BOT_TOKEN');
            $chatId = env('TELEGRAM_CHAT_ID');

            $text = "📩 Новая заявка ({$request_type}):\n\n"
                . "👤 Имя: {$userName}\n"
                . "📞 Телефон: {$phone}\n"
                . "📅 Дата: {$date}\n"
                . "🕓 Время: {$time}";

            Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $text,
                'parse_mode' => 'HTML',
            ]);
        } catch (\Exception $e) {
            Log::error('Ошибка при отправке в Telegram: ' . $e->getMessage());
        }

        return back()->with('success', 'Заявка успешно отправлена!');
    }
}
