<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\bankName;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    public function showRegistration()
    {
        $registration = Registration::all();
        $bank_name = bankName::all();

        return view('pages.registration', compact('registration'));
    }

    public function showCreate()
    {
        $bank_name = bankName::all();
        return view('pages.create_registration', compact('bank_name'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'registration_name' => 'required|string',
            'registration_type' => 'required|string',
            'registration_email' => 'required|email',
            'registration_line_id' => 'required|string',
            'registration_phone_number' => 'required|numeric',
            'registration_bankName' => 'required|string',
            'registration_bankaccount_name' => 'required|string',
            'registration_bankaccount_number' => 'required|numeric',
            'registration_transfer_proof' => 'required|image|max:1999|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('registration_transfer_proof')) {
            $extension = $request->file('registration_transfer_proof')->getClientOriginalExtension();
            $file_name = $request->registration_name . '.' . $extension;
            $path = $request->file('registration_transfer_proof')->storeAs('public/img', $file_name);
        } else {
            $file_name = NULL;
        }

        $registration = new Registration;
        $registration->registration_name = $request->input('registration_name');
        $registration->registration_type = $request->input('registration_type');
        $registration->registration_email = $request->input('registration_email');
        $registration->registration_line_id = $request->input('registration_line_id');
        $registration->registration_bankName = $request->input('registration_bankName');
        $registration->registration_phone_number = $request->input('registration_phone_number');
        $registration->registration_bankaccount_name = $request->input('registration_bankaccount_name');
        $registration->registration_bankaccount_number = $request->input('registration_bankaccount_number');
        $registration->registration_transfer_proof = $file_name;
        $registration->save();

        return redirect()->back();
    }

    public function showUpdate($id)
    {
        $registration = Registration::find($id);
        return view('pages.update_registration', compact('registration'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'registration_name' => 'required|string',
            'registration_type' => 'required|string',
            'registration_email' => 'required|email',
            'registration_line_id' => 'required|string',
            'registration_phone_number' => 'required|numeric',
            'registration_bank_name' => 'required|string',
            'registration_bankaccount_name' => 'required|string',
            'registration_bankaccount_number' => 'required|numeric',
            'registration_transfer_proof' => 'nullable|image|max:1999|mimes:jpg,png,jpeg',
        ]);

        $registration = Registration::find($id);

        if ($request->hasFile('registration_transfer_proof')) {
            $extension = $request->file('registration_transfer_proof')->getClientOriginalExtension();
            $file_name = $request->name . '.' . $extension;
            $path = $request->file('registration_transfer_proof')->storeAs('public/img', $file_name);
        } else {
            $file_name = $registration->registration_transfer_proof;
        }

        $registration->registration_name = $request->input('registration_name');
        $registration->registration_type = $request->input('registration_type');
        $registration->registration_email = $request->input('registration_email');
        $registration->registration_line_id = $request->input('registration_line_id');
        $registration->registration_line_id = $request->input('registration_bank_name');
        $registration->registration_phone_number = $request->input('registration_phone_number');
        $registration->registration_bankaccount_name = $request->input('registration_bankaccount_name');
        $registration->registration_bankaccount_number = $request->input('registration_bankaccount_number');
        $registration->registration_transfer_proof = $file_name;
        $registration->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $registration = Registration::find($id);
        $registration->delete();

        return redirect()->back();
    }
}
