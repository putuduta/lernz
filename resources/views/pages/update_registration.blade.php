@extends('layouts.app')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <div class="container mt-5 pt-5">
        <div class="card rounded-bottom px-5">
            <div class="card-body">
                <form method="POST" action="{{ action('RegistrationController@update', $registration->registration_id) }}" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" name="_method" value="UPDATE">
                        <div class="row">
                                <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                    <label for="registration_name" class="col-lg-6 col-sm-12 col-form-label text-sm-left formright">{{_('Name')}}</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="registration_name" name="registration_name" class="form-control" required value="{{ $registration->registration_name }}">
                                    </div>
                                </div>
                               <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                    <label for="registration_type" class="col-sm-3 col-form-label text-sm-left">{{_('Type')}}</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="registration_type" name="registration_type" class="form-control" required value="{{ $registration->registration_type }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                    <label for="registration_email" class="col-sm-3 col-form-label text-sm-left">{{_('Email')}}</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="registration_email" name="registration_email" class="form-control" required value="{{ $registration->registration_email }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                    <label for="registration_line_id" class="col-sm-3 col-form-label text-sm-left">{{_('Line Id')}}</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="registration_line_id" name="registration_line_id" class="form-control" required value="{{ $registration->registration_line_id }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                    <label for="registration_bankName" class="col-sm-3 col-form-label text-sm-left">{{_('Line Id')}}</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="registration_bankName" name="registration_bankName" class="form-control" required value="{{ $registration->registration_bankName }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                    <label for="registration_phone_number" class="col-sm-3 col-form-label text-sm-left">{{_('Phone Number')}}</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="registration_phone_number" name="registration_phone_number" class="form-control" required value="{{ $registration->registration_phone_number }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                    <label for="registration_bankaccount_name" class="col-sm-3 col-form-label text-sm-left">{{_('Bank Account Name')}}</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="registration_bankaccount_name" name="registration_bankaccount_name" class="form-control" required value="{{ $registration->registration_bankaccount_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                    <label for="registration_bankaccount_number" class="col-sm-3 col-form-label text-sm-left">{{_('Bank Account Number')}}</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="registration_bankaccount_number" name="registration_bankaccount_number" class="form-control" required value="{{ $registration->registration_bankaccount_number }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                    <label for="registration_transfer_proof" class="col-sm-3 col-form-label text-sm-left">{{_('Transfer Proof')}}</label>
                                    <div class="col-sm-12">
                                        <input type="file" id="registration_transfer_proof" name="registration_transfer_proof" class="custom-file-input" value="{{ $registration->registration_transfer_proof }}">
                                        <label class="custom-file-label overflow-hidden" for="registration_transfer_proof">Choose File</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col"> {{ method_field('PUT') }}
                                <button type="submit" class="btn btn-block btn-dark">
                                    {{_('Submit')}}
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection