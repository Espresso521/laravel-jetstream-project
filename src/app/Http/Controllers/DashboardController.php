<?php

namespace App\Http\Controllers;

use App\Models\EtUserV2;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $etUser = EtUserV2::first();
        //dd($etUser->toArray());
        return Inertia::render('Dashboard', [
            'login_user_id' => $etUser?->CHARGEID ?? '',
            'user_name' => $etUser?->CHARGE ?? '',
        ]);
    }
}
