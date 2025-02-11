<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Chirp;

class DashboardController extends Controller
{
    /**
     * Display the dashboard with user and platform stats.
     */
    public function index(): View
    {
        return view('dashboard', [
            'user' => Auth::user(),
            'totalUsers' => User::count(),
            'totalChirps' => Chirp::count(),
            'latestChirp' => Chirp::with('user')
                ->where('user_id', Auth::id())
                ->latest()
                ->first(),
        ]);
    }
}
