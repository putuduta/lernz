@extends('layouts.app')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

     <div class="container">
            <h2 style="text-align:center; padding:4%;">Donation Form</h2>
            <div class="card rounded-bottom px-5">
                <div class="card-body">
                    <form method="POST" action="{{ action('DonationController@create') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                    <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                        <label for="name" class="col-lg-6 col-sm-12 col-form-label text-sm-left formright">{{_('Name')}}</label>
                                        <div class="col-sm-12">
                                            <input type="text" id="name" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                    <label for="type" class="col-lg-6 col-sm-12 col-form-label text-sm-left">{{_('Type')}}</label>
                                        <div class="col-sm-12">
                                            <select name="type" id="type">
                                                <option value="Binusian">Binusian</option>
                                                <option value="Non-Binusian">Non-Binusian</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                        <label for="email" class="col-lg-6 col-sm-12 col-form-label text-sm-left">{{_('Email')}}</label>
                                        <div class="col-sm-12">
                                            <input type="text" id="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6  form-group row mb-0 mb-sm-3">
                                        <label for="line_id" class="col-lg-6 col-sm-12 col-form-label text-sm-left">{{_('Line ID')}}</label>
                                        <div class="col-sm-12">
                                            <input type="text" id="line_id" name="line_id" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6  form-group row mb-0 mb-sm-3">
                                        <label for="phone_number" class="col-lg-6 col-sm-12 col-form-label text-sm-left">{{_('Phone Number')}}</label>
                                        <div class="col-sm-12">
                                            <input type="text" id="phone_number" name="phone_number" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                        <label for="bank_name" class="col-lg-6 col-sm-12 col-form-label text-sm-left">{{_('Bank Name')}}</label>
                                        <div class="col-sm-12">
                                            <select name="bank_name" id="bank_name">
                                                @foreach ($bank_name as $bank_names)
                                                <option value="{{ $bank_names->name }}">{{ $bank_names->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                        <label for="bankaccount_name" class="col-lg-6 col-sm-12 col-form-label text-sm-left">{{_('Bank Account Name')}}</label>
                                        <div class="col-sm-12">
                                            <input type="text" id="bankaccount_name" name="bankaccount_name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group row mb-0 mb-sm-3">
                                        <label for="bankaccount_number" class="col-lg-6 col-sm-12 col-form-label text-sm-left">{{_('Bank Account Number')}}</label>
                                        <div class="col-sm-12">
                                            <input type="text" id="bankaccount_number" name="bankaccount_number" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group row mb-0 mb-sm-3">

                                        <label for="transfer_proof" class=" col-lg-6 col-sm-6 col-form-label text-sm-left">{{_('Transfer Proof')}}</label>
                                        <div class="trans">
                                        <div class=" col-sm-12">
                                            <input type="file" id="transfer_proof" name="transfer_proof" class="custom-file-input" value="{{ old('transfer_proof') }}">
                                            <label class="trans-cst custom-file-label overflow-hidden" for="transfer_proof">Choose File</label>
                                        </div>
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
                    </form>
                </div>
            </div>
        </div>
@endsection
