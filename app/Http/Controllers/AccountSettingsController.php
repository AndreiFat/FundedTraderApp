<?php

namespace App\Http\Controllers;

class AccountSettingsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('accountSettings');
    }
}
