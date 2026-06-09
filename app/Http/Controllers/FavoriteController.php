<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        Favorite::create([
            'user_id' => Auth::id(),
            'district' => $request->district
        ]);

        return back()->with('success', 'Added to favorites!');
    }
}