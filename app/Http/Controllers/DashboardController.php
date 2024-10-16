<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $notes = Auth::user()->notes;

        return view('dashboard', compact('notes'));
    }

    public function showFavorites()
    {
        $notes = Note::favorites()->get(); 
        return view('dashboard', compact('notes'));
    }

    public function showTrash()
    {
        $notes = Note::inTrash()->get(); 
        return view('dashboard', compact('notes'));
    }

}
