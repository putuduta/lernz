<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donation;
use App\bankName;
use Illuminate\Support\Facades\Storage;

class DonationController extends Controller
{
    public function showDonation()
    {
        $donation = donation::all();
        return view('pages.donation', compact('donation'));
    }

    public function showCreate()
    {
        $bank_name = bankName::all();
        return view ('pages.create_donation', compact('bank_name'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'type' => 'required|string',
            'email' => 'required|string',
            'line_id' => 'required|string',
            'phone_number' => 'required|string',
            'bank_name' => 'required|string',
            'bankaccount_name' => 'required|string',
            'bankaccount_number' => 'required|string',
            'transfer_proof' => 'required|image|max:1999|mimes:jpg,png,jpeg',
        ]);



        if ($request->hasFile('transfer_proof')) {
            $extension = $request->file('transfer_proof')->getClientOriginalExtension();
            $file_name = $request->name.'.'.$extension;
            $path = $request->file('transfer_proof')->storeAs('public/img', $file_name);
        } else {
            $file_name = NULL;
        }

        $donation = new donation;
        $donation->name = $request->input('name');
        $donation->type = $request->input('type');
        $donation->email = $request->input('email');
        $donation->line_id = $request->input('line_id');
        $donation->phone_number = $request->input('phone_number');
        $donation->bank_name = $request->input('bank_name');
        $donation->bankaccount_name = $request->input('bankaccount_name');
        $donation->bankaccount_number = $request->input('bankaccount_number');
        $donation->transfer_proof = $file_name;
        $donation->save();

        return redirect()->back();
    }

    public function showUpdate($id)
    {
        $donation = donation::find($id);
        return view ('pages.update_donation', compact('donation'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'type' => 'required|string',
            'email' => 'required|string',
            'line_id' => 'required|string',
            'phone_number' => 'required|string',
            'bank_name' => 'required|string',
            'bankaccount_name' => 'required|string',
            'bankaccount_number' => 'required|string',
            'transfer_proof' => 'nullable|image|max:1999|mimes:jpg,png,jpeg',
        ]);

        $donation = donation::find($id);

        if ($request->hasFile('transfer_proof')) {
            $extension = $request->file('transfer_proof')->getClientOriginalExtension();
            $file_name = $request->name.'.'.$extension;
            $path = $request->file('transfer_proof')->storeAs('public/img', $file_name);
        } else {
            $file_name = $donation->transfer_proof;
        }


        $donation->name = $request->input('name');
        $donation->type = $request->input('type');
        $donation->email = $request->input('email');
        $donation->line_id = $request->input('line_id');
        $donation->phone_number = $request->input('phone_number');
        $donation->bank_name = $request->input('bank_name');
        $donation->bankaccount_name = $request->input('bankaccount_name');
        $donation->bankaccount_number = $request->input('bankaccount_number');
        $donation->transfer_proof = $file_name;
        $donation->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $donation = donation::find($id);
        $donation->delete();

        return redirect()->back();
    }
}
