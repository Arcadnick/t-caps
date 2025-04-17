<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capsule;
use Illuminate\Support\Facades\Route;


class RedirectDevelopedCapsuleController extends Controller
{
    public function handle($id)
    {
        $capsule = Capsule::findOrFail($id);

        if ($capsule->landing_url && Route::has($capsule->landing_url)) {
            return redirect()->route($capsule->landing_url);
        }

        // fallback — если landing_url нет или не существует
        session(['current_capsule_id' => $capsule->id]);
        return redirect()->route('developed-capsule-page');
    }

}
