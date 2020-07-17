<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bom_recruitment;
use App\Division_list;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use lluminate\Validation\Validator;

class BomRecruitmentController extends Controller
{
    public function showBomrecruitment()
    {
        $bom_recruitment = Bom_recruitment::all();

        return view('pages.bom_recruitment', compact('bom_recruitment'));
    }

    public function showCreate()
    {
        $division_list = Division_list::all();
        return view('pages.create_bom_recruitment', compact('division_list'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'buept_score' => 'required|numeric',
            'buept_score_proof' => 'required|image|max:1999|mimes:jpg,png,jpeg',
            'division_preference1' =>
            [
                'required','string',
                Rule::notIn([$request->division_preference2, $request->division_preference3]),
            ],
            'division_preference1_reason' => 'required|string',
            'division_preference2' =>
            [
                'required', 'string',
                Rule::notIn([$request->division_preference1, $request->division_preference3]),
            ],
            'division_preference2_reason' => 'required|string',
            'division_preference3' =>
            [
                'required', 'string',
                Rule::notIn([$request->division_preference1, $request->division_preference2]),
            ],
            'division_preference3_reason' => 'required|string',
        ]);

        if ($request->hasFile('buept_score_proof')) {
            $extension = $request->file('buept_score_proof')->getClientOriginalExtension();
            $file_name = $request->name . '.' . $extension;
            $path = $request->file('buept_score_proof')->storeAs('/public/registration', $file_name);
        } else {
            $file_name = NULL;
        }

        $bom_recruitments = new Bom_recruitment;
        // $bom_recruitments->user_id = auth()->user()->id;
        $bom_recruitments->buept_score = $request->input('buept_score');
        $bom_recruitments->buept_score_proof = $file_name;
        $bom_recruitments->division_preference1 = $request->input('division_preference1');
        $bom_recruitments->division_preference1_reason = $request->input('division_preference1_reason');
        $bom_recruitments->division_preference2 = $request->input('division_preference2');
        $bom_recruitments->division_preference2_reason = $request->input('division_preference2_reason');
        $bom_recruitments->division_preference3 = $request->input('division_preference3');
        $bom_recruitments->division_preference3_reason = $request->input('division_preference3_reason');
        $bom_recruitments->save();

        return redirect('/home')->with('success', 'Register Successfull');
    }

    public function delete($id)
    {
        $bom_recruitment = Bom_recruitment::find($id);

        if (!$bom_recruitment) {
            abort(404);
        }
        $bom_recruitment->delete();
        return redirect()->back()->with('success', 'BOM Recruitment data deleted');
    }
}
