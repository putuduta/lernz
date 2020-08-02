<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomePartyShiftController extends Controller
{
    public function create() {
        return view('pages.welcome_party_shift_create');
    }

    public function store()
    {
    }

    public function edit()
    {
        return view('pages.welcome_party_shift_edit');
    }

    public function update()
    {
    }

    public function show()
    {
        return view('pages.welcome_party_details');
    }

    public function show_absence()
    {
        return view('pages.welcome_party_attendance');
    }

    public function absence()
    {
    }

    public function welpar_dashboard()
    {
    }
}
