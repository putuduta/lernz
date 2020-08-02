@extends('layouts.app')

@section('content')

<div class="bg-white fluid-container py-4">
    <div class="container">
        <h2 class="font-weight-bold text-center mb-3" style="color: #458ca8;">Welcome Party Shift Edit</h2>
        <div class="card border-0 shadow ">
            <div class="card-body px-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="font-weight-bold text-left mb-3">Change Welcome Party Shift</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti praesentium exercitationem sed, explicabo quae magni distinctio dolores facere mollitia illum a ab quo iusto natus facilis tenetur blanditiis dignissimos vel!</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="card border-0">
                            <div class="card-header font-weight-bold border-0">
                                Register
                            </div>
                            <div class="card-body border border-top-0 rounded-bottom">
                                <div class="row mb-3">
                                    <div class="col-lg-6 mb-3">
                                        <label for="wp_shift" class="col-form-label
                                        formright">{{ _('OLD Welcome Party Shift') }}</label>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div>
                                            <select name="wp_shift" id="wp_shift" class="form-control">
                                                <option selected value="">Choose...</option>
                                                <option value="8-Sep-19 07:30 -12:00">8-Sep-19 07:30 -12:00</option>
                                                <option value="8-Sep-19 07:30 -12:00">8-Sep-19 07:30 -12:00<option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="wp_shift" class="col-form-label
                                        formright">{{ _('Choose NEW Welcome Party Shift') }}</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <select name="wp_shift" id="wp_shift" class="form-control">
                                                <option selected value="">Choose...</option>
                                                <option value="8-Sep-19 07:30 -12:00">8-Sep-19 07:30 -12:00</option>
                                                <option value="8-Sep-19 07:30 -12:00">8-Sep-19 07:30 -12:00<option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0 sbtn-left">
                                    <div class="subbtn col">
                                        <button type="submit" class="btn btn-block btn-dark">
                                            {{_('Submit')}}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0">
                                Having trouble ? contact
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
