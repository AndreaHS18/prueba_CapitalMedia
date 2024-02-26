<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LogoutResponse;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.perfil.index');
    }

    public function borrarCuenta(Request $request)
    {
        $user = Auth::user();
        $user->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return app(LogoutResponse::class);
    }

    public function registroExitoso()
    {
        return view('pages.perfil.index');
    }

    public function password()
    {
        return view('pages.password.index');
    }
}
