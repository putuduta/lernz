@extends('layouts.app')

@section('content')
    <div class="container mt-5 pt-5 py-5">
        <div class="card rounded-bottom px-5">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <th scope="col" class="align-middle text-center">ID</th>
                            <th scope="col" class="align-middle text-center">Name</th>
                            <th scope="col" class="align-middle text-center">Type</th>
                            <th scope="col" class="align-middle text-center">Email</th>
                            <th scope="col" class="align-middle text-center">Line ID</th>
                            <th scope="col" class="align-middle text-center">Phone Number</th>
                            <th scope="col" class="align-middle text-center">Bank Identity</th>
                            <th scope="col" class="align-middle text-center">Transfer Proof</th>
                            <th scope="col" class="align-middle text-center" colspan="3">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($registration as $registrations)
                                <tr>
                                    <td class="align-middle text-center">{{ $registrations->registration_id }}</td>
                                    <td class="align-middle text-center">{{ $registrations->registration_name }}</td>
                                    <td class="align-middle text-center">{{ $registrations->registration_type }}</td>
                                    <td class="align-middle text-center">{{ $registrations->registration_email }}</td>
                                    <td class="align-middle text-center">{{ $registrations->registration_line_id }}</td>
                                    <td class="align-middle text-center">{{ $registrations->registration_phone_number }}</td>

                                        <i type="button" data-toggle="modal"data-target="#exampleModalCenter" class="fas fa-money-check-alt fa-2x"></i>
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Bank Identity</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body mo-res">
                                                        <p>Bank Name : <span> {{ $registrations->registration_bankName }}</span></p>
                                                        <p>Bank Name : <span> {{ $registrations->registration_bankaccount_name }}</span></p>
                                                        <p>Bank Name : <span> {{ $registrations->registration_bankaccount_number }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">{{ $registrations->registration_transfer_proof }}</td>
                                    <td class="align-middle text-center">
                                        <a class="btn btn-sm btn-block btn-dark text-white" href="/storage/img/{{ $registrations->registration_transfer_proof }}">L</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a class="btn btn-sm btn-block btn-dark text-white" href="{{ route('registration_show_update', $registrations->registration_id) }}">U</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <form method="POST" action="{{ action('RegistrationController@delete', $registrations->registration_id) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-sm btn-block btn-dark text-white" type="submit">D</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
