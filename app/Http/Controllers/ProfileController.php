<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function show(Request $request)
    {
        return view('profile.index');
    }

    public function messages(Request $request)
    {
        return view('profile.messages');
    }

    public function chat(Request $request)
    {
        return view('profile.chat');
    }

    public function video(Request $request)
    {
        return view('profile.video');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect()->route('profile');
    }
}
