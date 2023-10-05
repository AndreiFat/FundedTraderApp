<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountSettingsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $user = auth()->user();
        return view('accountSettings', ['user' => $user]);
    }

    public function updateUser(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'email' => 'required',
        ]);
        $user = User::find(auth()->user()->id);
        $user->update($request->all());

        return redirect()->route('home')->with('success', 'User updated successfully');
    }


}
