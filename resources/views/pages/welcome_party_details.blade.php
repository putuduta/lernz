@extends('layouts.app')

@section('content')

<div class="bg-white fluid-container py-4">
    <div class="container">
        <h2 class="font-weight-bold text-center mb-3" style="color: #458ca8;">Welcome Party Details</h2>
        <div class="card border-0 shadow ">
            <div class="card-body px-4">
                <div class="card border-0">
                    <div class="card-header font-weight-bold border-0">
                        Register
                    </div>
                    <div class="card-body border border-top-0 rounded-bottom">
                        <div class="row mb-3">
                            <div class="col-lg-6 mb-3">
                                <label for="wp_shift" class="col-form-label
                                formright">{{ _('Welcome Party Shift') }}</label>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="text" name="input" value="Web Design Weekly Rocks!" readonly>
                            </div>
                            <div class="col-lg-6">
                                <label for="wp_shift" class="col-form-label
                                formright">{{ _('Welcome Party Link') }}</label>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="input" value="Web Design Weekly Rocks!" readonly>
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
@endsection
